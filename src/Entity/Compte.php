<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CompteRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *      routePrefix="/admin",
 *      collectionOperations={
 *              "post"={
 *                      "method"="POST", 
 *                      "path"="/api/admin/compte"
 *              }, "GET"},
 *      itemOperations={
 *              "get_id_trans"={
 *                      "method"="GET",
 *                      "path"="/compte/{id}/transaction"
 *              },
 *              "GET","PUT"},
 *      normalizationContext={"groups"={"Compte:read"}},
 *      denormalizationContext={"groups"={"Compte:write"}}

 * )
 * @ORM\Entity(repositoryClass=CompteRepository::class)
 */
class Compte
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"User:read"})
     * @Groups({"User:write"})
     * @Groups({"Transaction:read"})
     * @Groups({"Transaction:write"})
     * @Groups({"Compte:read"})
     * @Groups({"Compte:write"})
     * @Groups({"Agence:read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Compte:read"})
     * @Groups({"Compte:write"})
     * @Groups({"Transaction:read"})
     * @Groups({"Transaction:write"})
     */
    private $numeroCompte;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Compte:read"})
     * @Groups({"Compte:write"})
     * @Groups({"Transaction:read"})
     * @Groups({"Transaction:write"})
     */
    private $solde;

    /**
     * @ORM\Column(type="date")
     * @Groups({"Compte:read"})
     * @Groups({"Compte:write"})
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"Compte:read"})
     * @Groups({"Compte:write"})
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="comptes")
     * @Groups({"Compte:read"})
     * @Groups({"Compte:write"})
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity=Transaction::class, mappedBy="compteDepot",cascade={"persist"})
     * @Groups({"Compte:read"})
     * @Groups({"Compte:write"})
     */
    private $transactionDepot;

    /**
     * @ORM\OneToMany(targetEntity=Transaction::class, mappedBy="compteRetrait",cascade={"persist"}))
     * @Groups({"Compte:read"})
     * @Groups({"Compte:write"})
     */
    private $transactionRetrait;

    /**
     * @ORM\Column(type="date", nullable=true)
     *  @Groups({"Compte:read"})
     */
    private $dateDernierAccess;

    public function __construct()
    {
        $this->transactionDepot = new ArrayCollection();
        $this->transactionRetrait = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroCompte(): ?string
    {
        return $this->numeroCompte;
    }

    public function setNumeroCompte(string $numeroCompte): self
    {
        $this->numeroCompte = $numeroCompte;

        return $this;
    }

    public function getSolde(): ?string
    {
        return $this->solde;
    }

    public function setSolde(string $solde): self
    {
        $this->solde = $solde;

        return $this;
    }

    public function getDateCreation(): ?\DateTimeInterface
    {
        return $this->dateCreation;
    }

    public function setDateCreation(\DateTimeInterface $dateCreation): self
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection|Transaction[]
     */
    public function getTransactionDepot(): Collection
    {
        return $this->transactionDepot;
    }

    public function addTransactionDepot(Transaction $transactionDepot): self
    {
        if (!$this->transactionDepot->contains($transactionDepot)) {
            $this->transactionDepot[] = $transactionDepot;
            $transactionDepot->setCompteDepot($this);
        }

        return $this;
    }

    public function removeTransactionDepot(Transaction $transactionDepot): self
    {
        if ($this->transactionDepot->removeElement($transactionDepot)) {
            // set the owning side to null (unless already changed)
            if ($transactionDepot->getCompteDepot() === $this) {
                $transactionDepot->setCompteDepot(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Transaction[]
     */
    public function getTransactionRetrait(): Collection
    {
        return $this->transactionRetrait;
    }

    public function addTransactionRetrait(Transaction $transactionRetrait): self
    {
        if (!$this->transactionRetrait->contains($transactionRetrait)) {
            $this->transactionRetrait[] = $transactionRetrait;
            $transactionRetrait->setCompteRetrait($this);
        }

        return $this;
    }

    public function removeTransactionRetrait(Transaction $transactionRetrait): self
    {
        if ($this->transactionRetrait->removeElement($transactionRetrait)) {
            // set the owning side to null (unless already changed)
            if ($transactionRetrait->getCompteRetrait() === $this) {
                $transactionRetrait->setCompteRetrait(null);
            }
        }

        return $this;
    }

    public function getDateDernierAccess(): ?\DateTimeInterface
    {
        return $this->dateDernierAccess;
    }

    public function setDateDernierAccess(?\DateTimeInterface $dateDernierAccess): self
    {
        $this->dateDernierAccess = $dateDernierAccess;

        return $this;
    }
}
