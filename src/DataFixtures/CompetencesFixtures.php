<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Competences;
use App\Entity\GroupeDeCompetences;
use App\Entity\Niveau;
use Lcobucci\JWT\Claim\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\ORM\Mapping\ManyToOne;

class CompetencesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker=Faker\Factory::create("fr_FR");
        for($i=0; $i<=5; $i++){
            $competences= new Competences();
            $grpc=new GroupeDeCompetences();
            $niveau= new Niveau();
            $grpc->setLibelle("libelle".$i);
            $grpc->setDescription("gsgvsgs");
            $grpc->setArchivage(0);
            $grpc->addCompetence($competences);
            $competences->setLibelle("libelle".$i);
            $competences->setArchivage(0);
            $niveau->setLibelle("niveau");
            $niveau->setCritereEvaluation("critere");
            $niveau->setGroupeAction("action");
            $competences->addNiveau($niveau);
            $competences->addGroupeDeCompetence($grpc);
            $manager->persist($grpc);
            $manager->persist($competences);
            $manager->flush();
        }
    }
}
