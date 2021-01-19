<?php

namespace App\DataFixtures;

use Faker;
use App\Entity\Tag;
use App\Entity\GroupeDeTag;
use Lcobucci\JWT\Claim\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class GroupeDeTagFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker=Faker\Factory::create("fr_FR");
        for($i=0; $i<=5; $i++){
            $tag=new Tag();
            $groupT=new GroupeDeTag();
            $groupT->setLibelle("libelle groupe de tag");
            $groupT->setArchivage(0);
            $groupT->addTag($tag);
            
            $tag->setLibelle("libelle tag");
            $tag->setDescription("description tag");
            $tag->setArchivage(0);
            $tag->addGroupeDeTag($groupT);

            $manager->persist($groupT);
            $manager->persist($tag);
            $manager->flush();
        }
    }
}
