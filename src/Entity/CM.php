<?php

namespace App\Entity;

use App\Entity\User;
use App\Repository\CMRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=CMRepository::class)
 * @ApiResource(
 *     routePrefix="/admin",
 *     attributes={
 *          "security"="is_granted('ROLE_ADMIN) or is_granted('ROLE_CM')",
 *          "security_message"="Vous avez pas acces a se ressource"
 *     },
 *     collectionOperations={"GET"},
 *     itemOperations={"GET"}
 * )
 */
class CM extends User
{
    
}
