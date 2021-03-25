<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TransactionRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *      routePrefix="/admin",
 *      collectionOperations={
 *          "post"={
 *               "method"="POST",
 *               "path"="/transaction/depot",
 *           },"POST", "GET"},
 *      itemOperations={
 *          "post_depot"={
 *               "method"="PUT",
 *               "path"="/transaction/retrait"
 *           },
 *           "get_trans_code"={
 *                  "method"="GET",
 *                  "path"="/transaction/code"
 *           },
 *           "get_trans_user"={
 *                   "method"="GET",
 *                   "path"="/users/{id}/transaction"
 *           },"GET","PUT"},
 *      normalizationContext={"groups"={"Transaction:read"}},
 *      denormalizationContext={"groups"={"Transaction:write"}}
 * )
 * @ORM\Entity(repositoryClass=TransactionRepository::class)
 */
class Transaction
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"Transaction:read"})
     * @Groups({"Transaction:write"})
     * @Groups({"Compte:read"})
     * @Groups({"Compte:write"})
     * @Groups({"Client:read"})
     * @Groups({"Client:write"})
     * @Groups({"User:read"})
     * @Groups({"User:write"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Transaction:read"})
     * @Groups({"Transaction:write"})
     */
    private $montant;

    /**
     * @ORM\Column(type="date")
     * @Groups({"Transaction:read"})
     * @Groups({"Transaction:write"})
     */
    private $dateDepot;

    /**
     * @ORM\Column(type="date")
     * @Groups({"Transaction:read"})
     * @Groups({"Transaction:write"})
     */
    private $dateRetrait;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Transaction:read"})
     * @Groups({"Transaction:write"})
     */
    private $codeTransaction;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Transaction:read"})
     * @Groups({"Transaction:write"})
     */
    private $frais;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Transaction:read"})
     * @Groups({"Transaction:write"})
     */
    private $fraisDepot;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Transaction:read"})
     * @Groups({"Transaction:write"})
     */
    private $fraisRetrait;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Transaction:read"})
     * @Groups({"Transaction:write"})
     */
    private $fraisEtat;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Transaction:read"})
     * @Groups({"Transaction:write"})
     */
    private $fraisSysteme;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="retraitTransaction",cascade={"persist"})
     * @Groups({"Transaction:write"})
     * @Groups({"Transaction:read"})
     */
    private $retraitClient;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class, inversedBy="depotTransaction",cascade={"persist"})
     * @Groups({"Transaction:write"})
     * @Groups({"Transaction:read"})
     */
    private $depotClient;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="retraitTransaction",cascade={"persist"})
     * @Groups({"Transaction:write"})
     * @Groups({"Transaction:read"})
     */
    private $userRetrait;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="depotTransaction",cascade={"persist"})
     * @Groups({"Transaction:write"})
     * @Groups({"Transaction:read"})
     */
    private $userDepot;

    /**
     * @ORM\ManyToOne(targetEntity=Compte::class, inversedBy="transactionDepot")
     * @Groups({"Transaction:write"})
     */
    private $compteDepot;

    /**
     * @ORM\ManyToOne(targetEntity=Compte::class, inversedBy="transactionRetrait")
     * @Groups({"Transaction:write"})
     *  @Groups({"Transaction:read"})
     */
    private $compteRetrait;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"Transaction:read"})
     * @Groups({"Transaction:write"})
     */
    private $montantTotal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDateDepot(): ?\DateTimeInterface
    {
        return $this->dateDepot;
    }

    public function setDateDepot(\DateTimeInterface $dateDepot): self
    {
        $this->dateDepot = $dateDepot;

        return $this;
    }

    public function getDateRetrait(): ?\DateTimeInterface
    {
        return $this->dateRetrait;
    }

    public function setDateRetrait(\DateTimeInterface $dateRetrait): self
    {
        $this->dateRetrait = $dateRetrait;

        return $this;
    }

    public function getCodeTransaction(): ?string
    {
        return $this->codeTransaction;
    }

    public function setCodeTransaction(string $codeTransaction): self
    {
        $this->codeTransaction = $codeTransaction;

        return $this;
    }

    public function getFrais(): ?string
    {
        return $this->frais;
    }

    public function setFrais(string $frais): self
    {
        $this->frais = $frais;

        return $this;
    }

    public function getFraisDepot(): ?string
    {
        return $this->fraisDepot;
    }

    public function setFraisDepot(string $fraisDepot): self
    {
        $this->fraisDepot = $fraisDepot;

        return $this;
    }

    public function getFraisRetrait(): ?string
    {
        return $this->fraisRetrait;
    }

    public function setFraisRetrait(string $fraisRetrait): self
    {
        $this->fraisRetrait = $fraisRetrait;

        return $this;
    }

    public function getFraisEtat(): ?string
    {
        return $this->fraisEtat;
    }

    public function setFraisEtat(string $fraisEtat): self
    {
        $this->fraisEtat = $fraisEtat;

        return $this;
    }

    public function getFraisSysteme(): ?string
    {
        return $this->fraisSysteme;
    }

    public function setFraisSysteme(string $fraisSysteme): self
    {
        $this->fraisSysteme = $fraisSysteme;

        return $this;
    }

    public function getRetraitClient(): ?Client
    {
        return $this->retraitClient;
    }

    public function setRetraitClient(?Client $retraitClient): self
    {
        $this->retraitClient = $retraitClient;

        return $this;
    }

    public function getDepotClient(): ?Client
    {
        return $this->depotClient;
    }

    public function setDepotClient(?Client $depotClient): self
    {
        $this->depotClient = $depotClient;

        return $this;
    }

    public function getUserRetrait(): ?User
    {
        return $this->userRetrait;
    }

    public function setUserRetrait(?User $userRetrait): self
    {
        $this->userRetrait = $userRetrait;

        return $this;
    }

    public function getUserDepot(): ?User
    {
        return $this->userDepot;
    }

    public function setUserDepot(?User $userDepot): self
    {
        $this->userDepot = $userDepot;

        return $this;
    }

    public function getCompteDepot(): ?Compte
    {
        return $this->compteDepot;
    }

    public function setCompteDepot(?Compte $compteDepot): self
    {
        $this->compteDepot = $compteDepot;

        return $this;
    }

    public function getCompteRetrait(): ?Compte
    {
        return $this->compteRetrait;
    }

    public function setCompteRetrait(?Compte $compteRetrait): self
    {
        $this->compteRetrait = $compteRetrait;

        return $this;
    }

    public function getMontantTotal(): ?string
    {
        return $this->montantTotal;
    }

    public function setMontantTotal(?string $montantTotal): self
    {
        $this->montantTotal = $montantTotal;

        return $this;
    }
}
