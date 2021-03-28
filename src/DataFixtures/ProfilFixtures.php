<?php

namespace App\DataFixtures;

use App\Entity\Profil;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProfilFixtures extends Fixture
{
    public const ADMIN_REFERENCE= "admin";
    public const APPRENANT_REFERENCE= "apprenant";
    public const FORMATEUR_REFERENCE= "formateur";
    public const CM_REFERENCE= "cm";

    public function load(ObjectManager $manager)
    {
        $admin = new Profil();
        $admin->setLibelle(self::ADMIN_REFERENCE);
        $manager->persist($admin);

        $apprenant = new Profil();
        $apprenant->setLibelle(self::APPRENANT_REFERENCE);
        $manager->persist($apprenant);

        $formateur = new Profil();
        $formateur->setLibelle(self::FORMATEUR_REFERENCE);
        $manager->persist($formateur);

        $cm = new Profil();
        $cm->setLibelle(self::CM_REFERENCE);
        $manager->persist($cm);

        $this->addReference(self::ADMIN_REFERENCE, $admin);
        $this->addReference(self::APPRENANT_REFERENCE, $apprenant);
        $this->addReference(self::FORMATEUR_REFERENCE, $formateur);
        $this->addReference(self::CM_REFERENCE, $cm);
        $manager->flush();
    }
}
