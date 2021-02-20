<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\NiveauRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass=NiveauRepository::class)
 * @ApiResource(
 *     normalizationContext={"groups"={"Niveau:read"}},
 *     denormalizationContext={"groups"={"Niveau:write"}}
 * )
 */
class Niveau
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"GroupeCompetences:read"})
     * @Groups({"GroupeCompetences:write"})
     * @Groups({"Niveau:read"})
     * @Groups({"Niveau:write"})
     * @Groups({"Competence:read"})
     * @Groups({"Competence:write"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"grp:read", "grp:write"})
     * @Groups({"Niveau:read"})
     * @Groups({"Niveau:write"})
     * @Groups({"Competence:read"})
     * @Groups({"Competence:write"})
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"GroupeCompetences:read"})
     * @Groups({"GroupeCompetences:write"})
     * @Groups({"Niveau:read"})
     * @Groups({"Niveau:write"})
     * @Groups({"Competence:read"})
     * @Groups({"Competence:write"})
     */
    private $critereEvaluation;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"grp:read", "grp:write"})
     * @Groups({"Niveau:read"})
     * @Groups({"Niveau:write"})
     * @Groups({"Competence:read"})
     * @Groups({"Competence:write"})
     * @Groups({"GroupeCompetences:read"})
     * @Groups({"GroupeCompetences:write"})
     */
    private $groupeAction;

    /**
     * @ORM\ManyToOne(targetEntity=Competences::class, inversedBy="niveau")
     * @Groups({"grp:read"})
     */
    private $competences;

    /**
     * @ORM\Column(type="boolean")
     */
    private $archivage=false;

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

    public function getCritereEvaluation(): ?string
    {
        return $this->critereEvaluation;
    }

    public function setCritereEvaluation(string $critereEvaluation): self
    {
        $this->critereEvaluation = $critereEvaluation;

        return $this;
    }

    public function getGroupeAction(): ?string
    {
        return $this->groupeAction;
    }

    public function setGroupeAction(string $groupeAction): self
    {
        $this->groupeAction = $groupeAction;

        return $this;
    }

    public function getCompetences(): ?Competences
    {
        return $this->competences;
    }

    public function setCompetences(?Competences $competences): self
    {
        $this->competences = $competences;

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
}
