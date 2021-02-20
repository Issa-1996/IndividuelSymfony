<?php

namespace App\Service;

use App\Repository\ProfilRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AddUser
{
    private $manager;
    private $encoder;
    private $serializer;
    private $profilRepo;
    private $validator;

    public function  __construct(EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder, 
    SerializerInterface $serializer, ProfilRepository $profilRepo, ValidatorInterface $validator)
    {
        $this->manager = $manager;
        $this->encoder = $encoder;
        $this->serialize = $serializer;
        $this->profilRepo = $profilRepo;
        $this->validator = $validator;
    }
    public function traitement(Request $request)
    {
        $user = $request->request->all();
        $avatar = $request->files->get("avatar");
        $avatar = fopen($avatar->getRealPath(),"r+");
        $user["avatar"] = $avatar;
        $profilLibelle = trim($user['role']);
        $profil="App\\Entity\\$profilLibelle";
        if(class_exists(($profil))){
            $user = $this->serialize->denormalize($user,$profil);
            $password = $user->getPassword();
            $user->setPassword($this->encoder->encodePassword($user,$password));
            $profilObjet=$this->profilRepo->findOneBy(['libelle'=>$profilLibelle]);
            $errors =$this->validator->validate($user);
            $user->setProfil($profilObjet);
            if (count($errors)){
                $errors = $this->serialize->serialize($errors,"json");
                return new JsonResponse($errors,Response::HTTP_BAD_REQUEST,[],true);
            }
           // dd($user);
            $this->manager->persist($user);
            $this->manager->flush();
            if($avatar){
                fclose($avatar);
            }
            //return new JsonResponse($user, Response::HTTP_OK);
            return true;
        }
    }
}