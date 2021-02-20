<?php

namespace App\Controller;

use App\Repository\ProfilRepository;
use App\Repository\UserRepository;
use App\Service\AddUser;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{

    
    /**
     * @Route(
     *      path="/api/admin/users", 
     *      name="user",
     *      methods="POST",

     * )
     */
   
    public function addUser(Request $request,AddUser $addUser)
    {
        $this->denyAccessUnlessGranted("ROLE_ADMIN", null, "Vous n'avez acces a ce resource");
        
        if( $addUser->traitement($request)==true){
            return new JsonResponse("success", Response::HTTP_OK);
        }
        return new JsonResponse("error", Response::HTTP_OK);
    }

    /**
     * @Route(
     *      path="/api/admin/users/{id}", 
     *      name="update",
     *      methods="POST",
     * )
     */
    public function updateUser(Request $request,AddUser $addUser, $id, UserRepository $userRep, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder)
    {
        //dd($request->request->all());
        $donnes=$request->request->all();
        $userUpdate=$userRep->find($id);
        if(isset($donnes['prenom'])){
            $userUpdate->setPrenom($donnes['prenom']);
        }
        if(isset($donnes['nom'])){
            $userUpdate->setNom($donnes['nom']);
        }
        if(isset($donnes['email'])){
            $userUpdate->setEmail($donnes['email']);
        }
        
        if(isset($donnes['password'])){
            if(!empty($donnes['password'])){
                $userUpdate->setPassword($encoder->encodePassword($userUpdate,$donnes['password']));
            }
        }
        if(isset($donnes['telephone'])){
            $userUpdate->setTelephone($donnes['telephone']);
        }
        if(isset($donnes['adresse'])){
            $userUpdate->setAdresse($donnes['adresse']);
        }
                
        if(isset($donnes['genre'])){
            $userUpdate->setGenre($donnes['genre']);
        }
        $avatar = $request->files->get("avatar");
        //$avatar = fopen($avatar->getRealPath(),"r+");
        if($avatar){
            $avatar = fopen($avatar->getRealPath(),"r+");
            $userUpdate->setAvatar($avatar);
        }
        //$this->denyAccessUnlessGranted("ROLE_ADMIN", null, "Vous n'avez acces a ce resource");
    
        $manager->persist($userUpdate);
        $manager->flush();
        if($avatar){
        fclose($avatar);
        }

        //if( $addUser->traitement($request)==true){
        return new JsonResponse("success", Response::HTTP_OK);
    //}
    //return new JsonResponse("error", Response::HTTP_OK);
}
}
