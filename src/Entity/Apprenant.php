<?php

namespace App\Entity;

use App\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ApprenantRepository;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=ApprenantRepository::class)
 * @ApiResource(
 *     routePrefix="/admin",
 *     attributes={
 *          "security"="is_granted('ROLE_ADMIN')",
 *          "security_message"="Vous avez pas acces a se ressource"
 *     },
 *     collectionOperations={"GET", "POST"},
 *     itemOperations={
 *          "get" = {
 *              "method" = "get",
 *              "path" = "/apprenants/{id}"
 *          },
 *          "put"
 *      }
 * )
 */
class Apprenant extends User
{
    /**
     * @ORM\ManyToOne(targetEntity=ProfilDeSortie::class, inversedBy="apprenants", cascade={"persist"})
     */
    private $profilDeSortie;


    public function getProfilDeSortie(): ?ProfilDeSortie
    {
        return $this->profilDeSortie;
    }

    public function setProfilDeSortie(?ProfilDeSortie $profilDeSortie): self
    {
        $this->profilDeSortie = $profilDeSortie;

        return $this;
    }
}
