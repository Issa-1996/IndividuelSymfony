<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReferentielRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *      routePrefix="/admin",
 *      attributes={
 *          "security"="is_granted('ROLE_ADMIN')",
 *          "security_message"="vous avez pas acces a ce ressource"
 *      },
 *      collectionOperations={"POST", "GET"},
 *      itemOperations={"GET", "PUT"},
 *      normalizationContext={"groups"={"Referentiel:read"}},
 *      denormalizationContext={"groups"={"Referentiel:write"}}
 * )
 * @ORM\Entity(repositoryClass=ReferentielRepository::class)
 */
class Referentiel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"Referentiel:read"})
     * @Groups({"Referentiel:write"})
     * @Groups({"Promo:read"})
     * @Groups({"Promo:write"})
     * @Groups({"GroupeCompetences:read"})
     * @Groups({"GroupeCompetences:write"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le libelle doit etre obligatoire")
     * @Groups({"Referentiel:read"})
     * @Groups({"Referentiel:write"})
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="La presentation doit etre obligatoire")
     * @Groups({"Referentiel:read"})
     * @Groups({"Referentiel:write"})
     * @Groups({"GroupeCompetences:read"})
     * @Groups({"GroupeCompetences:write"})
     */
    private $presentation;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Le programme doit etre obligatoire")
     * @Groups({"Referentiel:read"})
     * @Groups({"Referentiel:write"})
     */
    private $programme;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Lescriteres d'admission doit etre obligatoire")
     * @Groups({"Referentiel:read"})
     * @Groups({"Referentiel:write"})
     */
    private $critereAdmission;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Les critere d'evaluation doit etre obligatoire")
     * @Groups({"Referentiel:read"})
     * @Groups({"Referentiel:write"})
     */
    private $critereEvaluation;

    /**
     * @ORM\OneToMany(targetEntity=Promo::class, mappedBy="referentiel")
     * @Groups({"Referentiel:read"})
     * @Groups({"Referentiel:write"})
     */
    private $promo;

    /**
     * @ORM\ManyToMany(targetEntity=GroupeDeCompetences::class, inversedBy="referentiels")
     * @Groups({"Referentiel:read"})
     * @Groups({"Referentiel:write"})
     */
    private $groupeDeCompetences;

    public function __construct()
    {
        $this->promo = new ArrayCollection();
        $this->groupeDeCompetences = new ArrayCollection();
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

    public function getPresentation(): ?string
    {
        return $this->presentation;
    }

    public function setPresentation(string $presentation): self
    {
        $this->presentation = $presentation;

        return $this;
    }

    public function getProgramme(): ?string
    {
        return $this->programme;
    }

    public function setProgramme(string $programme): self
    {
        $this->programme = $programme;

        return $this;
    }

    public function getCritereAdmission(): ?string
    {
        return $this->critereAdmission;
    }

    public function setCritereAdmission(string $critereAdmission): self
    {
        $this->critereAdmission = $critereAdmission;

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

    /**
     * @return Collection|Promo[]
     */
    public function getPromo(): Collection
    {
        return $this->promo;
    }

    public function addPromo(Promo $promo): self
    {
        if (!$this->promo->contains($promo)) {
            $this->promo[] = $promo;
            $promo->setReferentiel($this);
        }

        return $this;
    }

    public function removePromo(Promo $promo): self
    {
        if ($this->promo->removeElement($promo)) {
            // set the owning side to null (unless already changed)
            if ($promo->getReferentiel() === $this) {
                $promo->setReferentiel(null);
            }
        }

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
        }

        return $this;
    }

    public function removeGroupeDeCompetence(GroupeDeCompetences $groupeDeCompetence): self
    {
        $this->groupeDeCompetences->removeElement($groupeDeCompetence);

        return $this;
    }
}
