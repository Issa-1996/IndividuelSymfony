<?php 

namespace App\DataPersister;

use App\Entity\User;
use App\Entity\Profil;
use Doctrine\ORM\EntityManagerInterface;
use ApiPlatform\Core\DataPersister\ContextAwareDataPersisterInterface;

final class ProfilDataPersister implements ContextAwareDataPersisterInterface
{
    private $manager;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->manager = $manager;
    }

    public function supports($data, array $context = []): bool
    {
        return $data instanceof Profil;
    }

    public function persist($data, array $context = [])
    {
        $this->manager  -> persist($data);
        $this->manager  -> flush();

    }

    public function remove($data, array $context = [])
    {
        $data -> setArchivage(1);
        foreach($data->getUsers() as $user){
            if($user->getProfil()==$data){
                $user->setArchivage(1);
            }
        }
        $this->manager  -> flush();
    }
}