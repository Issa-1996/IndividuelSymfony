<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProfilRepository;
use ApiPlatform\Core\Annotation\ApiFilter;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass=ProfilRepository::class)
 * @UniqueEntity(
 *      fields={"libelle"},
 *      errorPath="libelle",
 *      message="Le libelle doit etre unique."
 * )
 * @ApiResource(
 *     routePrefix="/admin",
 *     normalizationContext={"groups"={"Profil:read"}},
 *     attributes={
 *          "security"="is_granted('ROLE_ADMIN')", 
 *          "security_message"="Vous n'avez pas access à cette Ressource",
 *     },
 *     collectionOperations={
 *          "GET", "POST"
 *     },
 *     itemOperations={
 *          "PUT", "GET", "DELETE"
 *     },
 *    
 * )
 * @ApiFilter(BooleanFilter::class, properties={"archivage":false})
 */
class Profil
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"Profil:read"})
     * @Groups({"User:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     * @Assert\NotBlank(message="Le libelle doit etre obligatoire")
     * @Groups({"Profil:read"})
     * @Groups({"User:read"})
     */
    private $libelle;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="profil")
     * @Groups({"Profil:read"})
     */
    private $users;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $archivage;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->archivage=false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->setProfil($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getProfil() === $this) {
                $user->setProfil(null);
            }
        }

        return $this;
    }

    public function getArchivage(): ?bool
    {
        return $this->archivage;
    }

    public function setArchivage(?bool $archivage): self
    {
        $this->archivage = $archivage;

        return $this;
    }
}
