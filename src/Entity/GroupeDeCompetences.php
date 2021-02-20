<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\GroupeDeCompetencesRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * @ApiResource(
 *      routePrefix="/admin",
 *      collectionOperations={"GET", "POST"},
 *      itemOperations={"GET","PUT"},
 *      normalizationContext={"groups"={"GroupeCompetences:read"}},
 *      denormalizationContext={"groups"={"GroupeCompetences:write"}}
 * )
 * @ORM\Entity(repositoryClass=GroupeDeCompetencesRepository::class)
 */
class GroupeDeCompetences
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"GroupeCompetences:read"})
     * @Groups({"GroupeCompetences:write"})
     * @Groups({"Competence:read"})
     * @Groups({"Competence:write"})
     * @Groups({"Referentiel:read"})
     * @Groups({"Referentiel:write"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"GroupeCompetences:read"})
     * @Groups({"GroupeCompetences:write"})
     * @Assert\NotBlank(message="Le libelle est obligatoire!!!")
     * @Groups({"Competence:read"})
     * @Groups({"Competence:write"})
     * @Groups({"Referentiel:read"})
     * @Groups({"Referentiel:write"})
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"GroupeCompetences:read"})
     * @Groups({"GroupeCompetences:write"})
     * @Assert\NotBlank(message="La Description est obligatoire!!!")
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     *  @Groups({"GroupeCompetences:read"})
     */
    private $archivage=false;

    /**
     * @ApiSubresource()
     * @ORM\ManyToMany(targetEntity=Competences::class, inversedBy="groupeDeCompetences", cascade={"persist"})
     * @Groups({"GroupeCompetences:read"})
     * @Groups({"GroupeCompetences:write"})
     */
    private $competences;

    /**
     * @ORM\ManyToMany(targetEntity=Referentiel::class, mappedBy="groupeDeCompetences")
     * @Groups({"GroupeCompetences:read"})
     * @Groups({"GroupeCompetences:write"})
     */
    private $referentiels;

    public function __construct()
    {
        $this->competences = new ArrayCollection();
        $this->referentiels = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getArchivage(): ?bool
    {
        return $this->archivage;
    }

    public function setArchivage(bool $archivage): self
    {
        $this->archivage = $archivage;

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
     * @return Collection|Competences[]
     */
    public function getCompetences(): Collection
    {
        return $this->competences;
    }

    public function addCompetence(Competences $competence): self
    {
        if (!$this->competences->contains($competence)) {
            $this->competences[] = $competence;
        }

        return $this;
    }

    public function removeCompetence(Competences $competence): self
    {
        $this->competences->removeElement($competence);

        return $this;
    }

    /**
     * @return Collection|Referentiel[]
     */
    public function getReferentiels(): Collection
    {
        return $this->referentiels;
    }

    public function addReferentiel(Referentiel $referentiel): self
    {
        if (!$this->referentiels->contains($referentiel)) {
            $this->referentiels[] = $referentiel;
            $referentiel->addGroupeDeCompetence($this);
        }

        return $this;
    }

    public function removeReferentiel(Referentiel $referentiel): self
    {
        if ($this->referentiels->removeElement($referentiel)) {
            $referentiel->removeGroupeDeCompetence($this);
        }

        return $this;
    }
}
