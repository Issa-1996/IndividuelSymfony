<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\PromoRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *      routePrefix="/admin",
 *      attributes={
 *          "security"="is_granted('ROLE_ADMIN') or is_granted('ROLE_FORMATEUR')",
 *          "security_message"="vous avez pas acces a ce resource"
 *      },
 *      collectionOperations={"GET","POST"},
 *      itemOperations={"GET","PUT"},
 *      normalizationContext={"groups"={"Promo:read"}},
 *      denormalizationContext={"groups"={"Promo:write"}}
 * )
 * @ORM\Entity(repositoryClass=PromoRepository::class)
 */
class Promo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"Promo:read"})
     * @Groups({"Promo:write"})
     * @Groups({"Referentiel:read"})
     * @Groups({"Referentiel:write"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le langue est obligatoire")
     * @Groups({"Promo:read"})
     * @Groups({"Promo:write"})
     */
    private $langue;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le titre est obligatoire")
     * @Groups({"Promo:read"})
     * @Groups({"Promo:write"})
     * @Groups({"Referentiel:read"})
     * @Groups({"Referentiel:write"})
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="La description est obligatoire")
     * @Groups({"Promo:read"})
     * @Groups({"Promo:write"})
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le lieu est obligatoire")
     * @Groups({"Promo:read"})
     * @Groups({"Promo:write"})
     */
    private $lieu;

    /**
     * @ORM\Column(type="date")
     * @Groups({"Promo:read"})
     * @Groups({"Promo:write"})
     */
    private $dateDebut;

    /**
     * @ORM\Column(type="date")
     * @Groups({"Promo:read"})
     * @Groups({"Promo:write"})
     */
    private $dateFinProvisoire;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="La fabrique  est obligatoire")
     * @Groups({"Promo:read"})
     * @Groups({"Promo:write"})
     */
    private $fabrique;

    /**
     * @ORM\Column(type="date")
     * @Groups({"readPromo", "writePromo"})
     * @Groups({"Promo:read"})
     * @Groups({"Promo:write"})
     */
    private $dateFinReel;

    /**
     * @ORM\OneToMany(targetEntity=Groupe::class, mappedBy="promo", cascade={"persist"})
     * @Groups({"Promo:read"})
     * @Groups({"Promo:write"})
     */
    private $groupe;

    /**
     * @ORM\ManyToOne(targetEntity=Referentiel::class, inversedBy="promo")
     * @Groups({"Promo:read"})
     * @Groups({"Promo:write"})
     */
    private $referentiel;

    public function __construct()
    {
        $this->groupe = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLangue(): ?string
    {
        return $this->langue;
    }

    public function setLangue(string $langue): self
    {
        $this->langue = $langue;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFinProvisoire(): ?\DateTimeInterface
    {
        return $this->dateFinProvisoire;
    }

    public function setDateFinProvisoire(\DateTimeInterface $dateFinProvisoire): self
    {
        $this->dateFinProvisoire = $dateFinProvisoire;

        return $this;
    }

    public function getFabrique(): ?string
    {
        return $this->fabrique;
    }

    public function setFabrique(string $fabrique): self
    {
        $this->fabrique = $fabrique;

        return $this;
    }

    public function getDateFinReel(): ?\DateTimeInterface
    {
        return $this->dateFinReel;
    }

    public function setDateFinReel(\DateTimeInterface $dateFinReel): self
    {
        $this->dateFinReel = $dateFinReel;

        return $this;
    }

    /**
     * @return Collection|Groupe[]
     */
    public function getGroupe(): Collection
    {
        return $this->groupe;
    }

    public function addGroupe(Groupe $groupe): self
    {
        if (!$this->groupe->contains($groupe)) {
            $this->groupe[] = $groupe;
            $groupe->setPromo($this);
        }

        return $this;
    }

    public function removeGroupe(Groupe $groupe): self
    {
        if ($this->groupe->removeElement($groupe)) {
            // set the owning side to null (unless already changed)
            if ($groupe->getPromo() === $this) {
                $groupe->setPromo(null);
            }
        }

        return $this;
    }

    public function getReferentiel(): ?Referentiel
    {
        return $this->referentiel;
    }

    public function setReferentiel(?Referentiel $referentiel): self
    {
        $this->referentiel = $referentiel;

        return $this;
    }
}
