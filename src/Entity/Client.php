<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ClientRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ApiResource(
 *      routePrefix="/admin",
 *      collectionOperations={"POST", "GET"},
 *      itemOperations={"GET","PUT"},
 *      normalizationContext={"groups"={"Client:read"}},
 *      denormalizationContext={"groups"={"Client:write"}}
 * )
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 * @UniqueEntity("cni")
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"Transaction:read"})
     * @Groups({"Transaction:write"})
     * @Groups({"Client:read"})
     * @Groups({"Client:write"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Client:read"})
     * @Groups({"Client:write"})
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Client:read"})
     * @Groups({"Client:write"})
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Client:read"})
     * @Groups({"Client:write"})
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Client:read"})
     * @Groups({"Client:write"})
     */
    private $cni;

    /**
     * @ORM\OneToMany(targetEntity=Transaction::class, mappedBy="retraitClient")
     * @Groups({"Client:write"})
     */
    private $retraitTransaction;

    /**
     * @ORM\OneToMany(targetEntity=Transaction::class, mappedBy="depotClient")
     * @Groups({"Client:write"})
     */
    private $depotTransaction;

    public function __construct()
    {
        $this->retraitTransaction = new ArrayCollection();
        $this->depotTransaction = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getCni(): ?string
    {
        return $this->cni;
    }

    public function setCni(string $cni): self
    {
        $this->cni = $cni;

        return $this;
    }

    /**
     * @return Collection|Transaction[]
     */
    public function getRetraitTransaction(): Collection
    {
        return $this->retraitTransaction;
    }

    public function addRetraitTransaction(Transaction $retraitTransaction): self
    {
        if (!$this->retraitTransaction->contains($retraitTransaction)) {
            $this->retraitTransaction[] = $retraitTransaction;
            $retraitTransaction->setRetraitClient($this);
        }

        return $this;
    }

    public function removeRetraitTransaction(Transaction $retraitTransaction): self
    {
        if ($this->retraitTransaction->removeElement($retraitTransaction)) {
            // set the owning side to null (unless already changed)
            if ($retraitTransaction->getRetraitClient() === $this) {
                $retraitTransaction->setRetraitClient(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Transaction[]
     */
    public function getDepotTransaction(): Collection
    {
        return $this->depotTransaction;
    }

    public function addDepotTransaction(Transaction $depotTransaction): self
    {
        if (!$this->depotTransaction->contains($depotTransaction)) {
            $this->depotTransaction[] = $depotTransaction;
            $depotTransaction->setDepotClient($this);
        }

        return $this;
    }

    public function removeDepotTransaction(Transaction $depotTransaction): self
    {
        if ($this->depotTransaction->removeElement($depotTransaction)) {
            // set the owning side to null (unless already changed)
            if ($depotTransaction->getDepotClient() === $this) {
                $depotTransaction->setDepotClient(null);
            }
        }

        return $this;
    }
}
