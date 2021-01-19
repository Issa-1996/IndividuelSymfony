<?php

namespace App\Controller;

use App\Repository\ProfilRepository;
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
        return $addUser->traitement($request);
    }
}
