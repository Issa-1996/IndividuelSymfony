<?php
//Ajouter une deuxiemme association entre compte et transaction de relation OneToMane
namespace App\Controller;

use App\Entity\Client;
use App\Entity\Compte;
use App\Entity\Transaction;
use App\Entity\User;
use App\Repository\ClientRepository;
use App\Repository\CompteRepository;
use App\Repository\TransactionRepository;
use App\Repository\UserRepository;
use App\Service\Code;
use App\Service\CodeTransactionService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\SerializerInterface;

class TransactionController extends AbstractController
{
    private $tokenStorage;
    public function __construct(UserPasswordEncoderInterface $passwordEncoder, TokenStorageInterface $tokenStorage){
        $this->passwordEncoder = $passwordEncoder;
        $this->tokenStorage = $tokenStorage;
    }
    /**
     * @Route("/transaction", name="transaction")
     */
    public function index(): Response
    {
        return $this->render('transaction/index.html.twig', [
            'controller_name' => 'TransactionController',
        ]);
    }
    /**
     * @Route("/api/admin/transaction/depot", name="depot_trans")
     */
    public function depot_trans(Code $code, SerializerInterface $serializer, UserRepository $userRepo,ClientRepository $clientRepo,Request $request, CompteRepository $compteRepo){
        $trans=json_decode($request->getContent(),true);
        //$idCompte=$trans["compte"]["id"];
        $userConnect=$this->tokenStorage->getToken()->getUser();
        $idCompte=$userConnect->getAgence()->getCompte()->getId();
        //dd($trans['depotClient']['cni']);

        $clientDepot=new Client();
        $clientDepot->setPrenom($trans['depotClient']['prenom']);
        $clientDepot->setNom($trans['depotClient']['nom']);
        $clientDepot->setTelephone($trans['depotClient']['telephone']);
        $clientDepot->setCni($trans['depotClient']['cni']);
        $clientRetrait=new Client();
        $clientRetrait->setPrenom($trans['retraitClient']['prenom']);
        $clientRetrait->setNom($trans['retraitClient']['nom']);
        $clientRetrait->setTelephone($trans['retraitClient']['telephone']);

        $depot=new Transaction();
        /**
         * Operation de soustraction du sole du compte
         */
        $infoCompte=$compteRepo->findOneBy(array('id'=>$idCompte));
        $montantDepotPostMan=$depot->setMontant($trans["montant"]+$code->calculFrais($trans["montant"]));
        $montantDepot= $montantDepotPostMan->getMontant();
        if(($infoCompte->getSolde())>($montantDepot)){
            $compte_soldeActuelCompte=$infoCompte->setSolde($infoCompte->getSolde() - $montantDepot);
            $compte_soldeActuelCompte=$infoCompte->setDateDernierAccess(new \DateTime('now'));
        }

        $depot->setCodeTransaction($code->genererCodeTransaction());
        $depot->setMontant($trans["montant"]);
        $depot->setDateDepot(new \DateTime('now'));
        $depot->setDepotClient($clientDepot);
        $depot->setRetraitClient($clientRetrait);
        //$userConnect=$this->tokenStorage->getToken()->getUser();
        $depot->setUserDepot($userConnect);
        $depot->setCompteDepot($compte_soldeActuelCompte);
        $depot->setFrais($code->calculFrais($trans["montant"]));
        $depot->setFraisEtat($code->calculFrais($trans["montant"])*0.04);
        $depot->setFraisSysteme($code->calculFrais($trans["montant"])*0.03);
        $depot->setFraisDepot($code->calculFrais($trans["montant"])*0.01);
        $depot->setFraisRetrait($code->calculFrais($trans["montant"])*0.04);
        $depot->setMontantTotal($trans["montant"]+ $code->calculFrais($trans["montant"]));
       // $depot->setType("Depot");

        $ems=$this->getDoctrine()->getManager();
        $ems->persist( $clientDepot);
        $ems->persist( $clientRetrait);
        $ems->persist( $depot);
        $ems->flush();
        //return new JsonResponse("success");
        //dd($depot);
        $getTransJson =$serializer->serialize($depot,"json");
        return new JsonResponse($getTransJson,Response::HTTP_OK,[],true);
    }


     /**
     * @Route("/api/admin/transaction/retrait", name="retrait_trans")
     */
    public function retrait_trans(TransactionRepository $transRepo, SerializerInterface $serializer, UserRepository $userRepo,ClientRepository $clientRepo,Request $request, CompteRepository $compteRepo){
        
        

        /**
         * $trans recuperer les donner sur postman
         */
        $trans=json_decode($request->getContent(),true);
        $getTrans=$transRepo->findOneBy(array('codeTransaction'=>$trans["codeTransaction"]));
        //dd($getTrans);
        /**
         * traitement Compte//recupere l'id du compte sur postman//rechercher l'id dans CompteRepository
         * additionner le solde du compte de retrait le montant du retrait//puis faire un srtCompteRetrait
         */  
        $userConnect=$this->tokenStorage->getToken()->getUser();
        $idCompte=$userConnect->getAgence()->getCompte()->getId();
        //dd($idCompte=$userConnect->getAgence()->getUs);
        //$idCompte=$trans["compte"]["id"];
        $Compte=$compteRepo->findOneBy(array('id'=>$idCompte));
        $montantDepotPostMan=$getTrans->getMontant();
        //if( ($Compte->setSolde($Compte->getSolde())) >($montantDepotPostMan)){
        $compte_soldeActuelCompte=$Compte->setSolde($Compte->getSolde() + $montantDepotPostMan);
        $updateTransaction=$getTrans->setCompteRetrait($compte_soldeActuelCompte);
        //}
        
        

        /**
         * renseigner le client qui fait la retrait par son cni
         */ 
        $client=$getTrans->getRetraitClient();
        $updateTransaction=$client->setCni($trans["retraitClient"]["cni"]);
        

       /**
        * recuperer l'id de l'utilisateur connecter puis faire un setUserRetrait()
        */
       $userConnect=$this->tokenStorage->getToken()->getUser();
       $updateTransaction=$getTrans->setUserRetrait($userConnect);
       $updateTransaction->setDateRetrait(new \DateTime('now'));
        
        //dd($updateTransaction);

        $ems=$this->getDoctrine()->getManager();
        $ems->persist($compte_soldeActuelCompte);
        $ems->persist($updateTransaction);
        //$ems->persist($updateTransactionClient);
        //$ems->persist($updateTransactionUser);
        $ems->flush();

        //$depotSerialize =$serializer->serialize($getTrans,"json");
        return new JsonResponse("success");
    }


     /**
     * @Route("/api/admin/transaction/{code}", name="get_trans")
     */
    public function get_trans(TransactionRepository $transRepo,SerializerInterface $serializer,Request $request,$code){
        $getTransctionRepo=$transRepo->findOneBy(array('codeTransaction'=>$code));
        $getTransJson =$serializer->serialize($getTransctionRepo,"json");
        return new JsonResponse($getTransJson,Response::HTTP_OK,[],true);
    }

     /**
     * @Route("/api/admin/users/{id}/transaction", name="get_user_trans")
     */
    public function get_user_trans(UserRepository $userRepo,SerializerInterface $serializer,Request $request,$id){
        $getTrans=$userRepo->find($id);
        $getTransJson =$serializer->serialize($getTrans,"json");
        return new JsonResponse($getTransJson,Response::HTTP_OK,[],true);
    }

     /**
     * @Route("/api/admin/compte/{id}/transaction", name="get_compte_trans")
     */
    public function get_compte_trans(CompteRepository $compteRepo,SerializerInterface $serializer,Request $request,$id){
        $getTrans=$compteRepo->findOneBy(array('id'=>$id));
        $getTransJson =$serializer->serialize($getTrans,"json");
        return new JsonResponse($getTransJson,Response::HTTP_OK,[],true);
    }

     /**
     * @Route("/api/admin/clients/{cni}", name="get_client_trans")
     */
    public function get_client_trans(ClientRepository $clientRepo,SerializerInterface $serializer,Request $request,$cni){
        $getTrans=$clientRepo->findOneBy(array('cni'=>$cni));
        $getTransJson =$serializer->serialize($getTrans,"json");
        return new JsonResponse($getTransJson,Response::HTTP_OK,[],true);
    }

     /**
     * @Route("/api/admin/frais/{montant}", name="fraisMontant")
     */
    public function fraisMontant(Code $frais ,SerializerInterface $serializer,Request $request,$montant){
        $getTrans=$frais->calculFrais($montant);
        //$getTrans=$clientRepo->findOneBy(array('cni'=>$cni));
        $getTransJson =$serializer->serialize($getTrans,"json");
        return new JsonResponse($getTransJson,Response::HTTP_OK,[],true);
    }

    /**
     * @Route("/api/admin/currentUser", name="currentUser")
     */
    public function currentUser(SerializerInterface $serializer,TokenStorageInterface $tokenStorage){
        //dd("ok");
        $userConnect=$this->getUser();
        //dd($userConnect);
        $user =$serializer->serialize($userConnect,"json");
        return new JsonResponse($user,Response::HTTP_OK,[],true);
    }
}