<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\CM;
use App\Entity\User;
use App\Entity\Admin;
use App\Entity\Promo;
use App\Entity\Groupe;
use App\Entity\Apprenant;
use App\Entity\Formateur;
use App\Entity\ProfilDeSortie;
use Lcobucci\JWT\Claim\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $passwordEncoder){
        $this->passwordEncoder = $passwordEncoder;
    }
    public function load(ObjectManager $manager){
        
        $faker=Faker\Factory::create('fr_FR');

        $tab= ['apprenant', 'admin', 'formateur', 'cm'];
        //foreach($tab as $t){
            for($i=0; $i<count($tab); $i++){
                if($tab[$i]=="apprenant"){
                    $user=new Apprenant();
                    $profilS= new ProfilDeSortie();
                    $user->setProfil($this->getReference(ProfilFixtures::APPRENANT_REFERENCE));
                    $user->setRoles(['ROLE_APPRENANT']);
                }

                if($tab[$i]=="formateur"){
                    $user=new Formateur();
                    $user->setProfil($this->getReference(ProfilFixtures::FORMATEUR_REFERENCE));
                    $user->setRoles(['ROLE_FORMATEUR']);
                }

                if($tab[$i]=="admin"){
                    $user=new User();
                    $user->setProfil($this->getReference(ProfilFixtures::ADMIN_REFERENCE));
                    $user->setRoles(['ROLE_ADMIN']);
                }

                if($tab[$i]=="cm"){
                    $user=new CM();
                    $user->setProfil($this->getReference(ProfilFixtures::CM_REFERENCE));
                    $user->setRoles(['ROLE_CM']);
                }

               // $user= new User();
                $user->setPrenom($faker->firstName());
                $user->setNom($faker->lastName);
                $user->setEmail($faker->email);
                $user->setTelephone($faker->phoneNumber);
                //$user->setLogin($faker->userName);
                $password = $this->passwordEncoder->encodePassword($user,'password');
                $user->setArchivage(0);
                $user->setPassword($password);
                $user->setGenre('Feminin');
                $user->setStatus('actif');
                $user->setAvatar('image.png');
                $user->setAdresse($faker->address);
                $manager->persist($user);
            }
        //}
        $manager->flush();
    }
}
