<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Promo;
use App\Entity\Groupe;
use App\Entity\Apprenant;
use Lcobucci\JWT\Claim\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class PromoFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker=Faker\Factory::create('fr_FR');
        for($i=0; $i<=5; $i++){
            $promo=new Promo();
            $groupe=new Groupe();
            $apprenant= new Apprenant();

            $promo->setDescription("la description".$i);
            $promo->setFabrique("fabrique".$i);
            $promo->setLangue("langue".$i);
            $promo->setLieu("lieu".$i);
            $promo->setTitre("titre".$i);
            $promo->setDateDebut(new \DateTime('now'));
            $promo->setDateFinProvisoire(new \DateTime('now'));
            $promo->setDateFinReel(new \DateTime('now'));
            $promo->addGroupe($groupe);
            // dd($apprenant->getId());
            //$formateur=new Formateur();
            $groupe->setNom("nom du groupe");
            $groupe->setStatut("actif");
            $groupe->setType("le type");
            $groupe->setDateCreation(new \DateTime('now'));
            $groupe->setPromo($promo);
            //$groupe->addApprenant($apprenant);
            //$groupe->addFormateur($formateur);
            $manager->persist($groupe);
            $manager->persist($promo);
            $manager->flush();
        }
    }
}
