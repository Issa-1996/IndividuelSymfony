<?php

namespace App\DataFixtures;

use App\Entity\Agence;
use App\Entity\Compte;
use App\Entity\Profil;
use App\Entity\User;
use Faker\Factory;
use Faker;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    public function __construct(UserPasswordEncoderInterface $passwordEncoder){
        $this->passwordEncoder = $passwordEncoder;
    }
    public function load(ObjectManager $manager){
        
        $faker=Faker\Factory::create('fr_FR');

        $adminsys=new Profil();
        $adminsys->setLibelle('AdminSysteme');
        $caissier=new Profil();
        $caissier->setLibelle('caissier');
        $adminag=new Profil();
        $adminag->setLibelle('AdminAgence');
        $useragence=new Profil();
        $useragence->setLibelle('UserAgence');
        $manager->persist($adminsys);
        $manager->persist($caissier);
        $manager->persist($useragence);
        $manager->persist($adminag);
        $manager->flush();


        $profils= [$adminsys, $caissier, $useragence, $adminag];
        //foreach($tab as $t){
            for($i=0; $i<count($profils); $i++){
                $profil=$profils[$i];
                for($j=0;$j<3;$j++){
                    $user= new User();
                    /*$agence=new Agence();
                    $agence->setTelephone($faker->numberBetween($min = 1000000, $max = 9000000));
                    $agence->setAdresse($faker->address);
                    $agence->setLatitude($faker->numberBetween($min = 1000, $max = 9000));
                    $agence->setLongitude($faker->numberBetween($min = 1000, $max = 9000));
                    $agence->addUser($user);*/


                /*$compte=new Compte();
                $compte->setNumeroCompte($faker->numberBetween($min = 1000000, $max = 9000000));
                $compte->setSolde("700000");
                $compte->setDateCreation(new \DateTime('now'));
                $compte->setStatus("actif");
                $compte->setUser($user);
                $compte->setAgence($agence);*/

                
                $user->setPrenom($faker->firstName());
                $user->setNom($faker->lastName);
                $user->setEmail($faker->email);
                $user->setTelephone($faker->phoneNumber);
                $password = $this->passwordEncoder->encodePassword($user,'password');
                $user->setPassword($password);
                //$user->setRoles('[ROLE_'+$profils[$i]+']');
                $user->setStatus('actif');
                $user->setCni($faker->numberBetween($min = 1000000000000, $max = 9000000000000));  
                //$user->addCompte($compte);   
                $user->setProfil($profil);
                $manager->persist($user);
            }      
        }
        //}
        $manager->flush();
    }
}