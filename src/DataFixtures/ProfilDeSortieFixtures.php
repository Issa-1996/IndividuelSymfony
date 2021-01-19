<?php

namespace App\DataFixtures;

use App\Entity\ProfilDeSortie;
use Lcobucci\JWT\Claim\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker;

class ProfilDeSortieFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker=Faker\Factory::create('fr_FR');
        //for($i=0; $i<=5; $i++){
            $pds=new ProfilDeSortie();
            $pds->setLibelle("administrateu");
            $pds->setArchivage(0);
            $manager->persist($pds);
            $manager->flush();
        //}
    }
}
