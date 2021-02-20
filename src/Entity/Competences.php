<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CompetencesRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as assert;

/**
 * @ApiResource(
 *      routePrefix="/admin",
 *      collectionOperations={"POST", "GET"},
 *      itemOperations={"PUT", "GET"},
 *     normalizationContext={"groups"={"Competence:read"}},
 *     denormalizationContext={"groups"={"Competence:write"}}
 *      
 * )
 * @ORM\Entity(repositoryClass=CompetencesRepository::class)
 */
class Competences
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"GroupeCompetences:read"})
     * @Groups({"GroupeCompetences:write"})
     * @Groups({"Competence:read"})
     * @Groups({"Competence:write"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"Competence:read"})
     * @Groups({"Competence:write"})
     * @Groups({"GroupeCompetences:read"})
     * @Groups({"GroupeCompetences:write"})
     * @Assert\NotBlank(message="Le libelle doit etre obligatoire")
     */
    private $libelle;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"Competence:read"})
     * @Groups({"Competence:write"})
     */
    private $archivage=false;

    /**
     * @ORM\ManyToMany(targetEntity=GroupeDeCompetences::class, mappedBy="competences", cascade={"persist"})
     * @Groups({"Competence:read"})
     * @Groups({"Competence:write"})
     */
    private $groupeDeCompetences;

    /**
     * @ORM\OneToMany(targetEntity=Niveau::class, mappedBy="competences", cascade={"persist"})
     * @ApiSubresource()
     * @Groups({"GroupeCompetences:read"})
     * @Groups({"Competence:read"})
     * @Groups({"Competence:write"})
     */
    private $niveau;

    public function __construct()
    {
        $this->groupeDeCompetences = new ArrayCollection();
        $this->niveau = new ArrayCollection();
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

    public function getArchivage(): ?bool
    {
        return $this->archivage;
    }

    public function setArchivage(bool $archivage): self
    {
        $this->archivage = $archivage;

        return $this;
    }

    /**
     * @return Collection|GroupeDeCompetences[]
     */
    public function getGroupeDeCompetences(): Collection
    {
        return $this->groupeDeCompetences;
    }

    public function addGroupeDeCompetence(GroupeDeCompetences $groupeDeCompetence): self
    {
        if (!$this->groupeDeCompetences->contains($groupeDeCompetence)) {
            $this->groupeDeCompetences[] = $groupeDeCompetence;
            $groupeDeCompetence->addCompetence($this);
        }

        return $this;
    }

    public function removeGroupeDeCompetence(GroupeDeCompetences $groupeDeCompetence): self
    {
        if ($this->groupeDeCompetences->removeElement($groupeDeCompetence)) {
            $groupeDeCompetence->removeCompetence($this);
        }

        return $this;
    }

    /**
     * @return Collection|Niveau[]
     */
    public function getNiveau(): Collection
    {
        return $this->niveau;
    }

    public function addNiveau(Niveau $niveau): self
    {
        if (!$this->niveau->contains($niveau)) {
            $this->niveau[] = $niveau;
            $niveau->setCompetences($this);
        }

        return $this;
    }

    public function removeNiveau(Niveau $niveau): self
    {
        if ($this->niveau->removeElement($niveau)) {
            // set the owning side to null (unless already changed)
            if ($niveau->getCompetences() === $this) {
                $niveau->setCompetences(null);
            }
        }

        return $this;
    }
}
