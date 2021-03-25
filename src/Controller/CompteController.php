<?php

namespace App\Controller;

use App\Entity\Compte;
use App\Repository\AgenceRepository;
use App\Repository\CompteRepository;
use App\Repository\UserRepository;
use App\Service\Code;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class CompteController extends AbstractController
{
    /**
     * @Route("/compte", name="compte")
     */
    public function index(): Response
    {
        return $this->render('compte/index.html.twig', [
            'controller_name' => 'CompteController',
        ]);
    }
    /**
     * @Route("/api/admin/compte", name="addCompte")
     */
    public function addCompte(Code $code, SerializerInterface $serializer, UserRepository $userRepo,Request $request, CompteRepository $compteRepo, AgenceRepository $agenceRepo){
        $trans=json_decode($request->getContent(),true);
        $idUser=$trans["user"]["id"];
        $idAgence=$trans["agence"]["id"];
        //dd($trans["solde"]);
        $compte=New Compte();
        $user=$userRepo->find($idUser);
        $agence=$agenceRepo->find($idAgence);
        //dd($agence);
        $compte->setNumeroCompte($code->genererNumeroCompte());
        $compte->setDateCreation(new \DateTime('now'));
        $compte->setSolde($trans["solde"]);
        $compte->setUser($user);
        $compte->setAgence($agence);
        $compte->setStatus($trans["status"]);

        $ems=$this->getDoctrine()->getManager();
        $ems->persist( $compte);
        $ems->flush();
        return new JsonResponse("success",Response::HTTP_OK,[],true);

    }
}
