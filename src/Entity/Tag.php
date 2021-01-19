<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\TagRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * @ApiResource(
 *      routePrefix="/admin",
 *      collectionOperations={"POST","GET"},
 *      itemOperations={"GET","PUT"},
 *      normalizationContext={"groupsTag"={"readTag"}},
 *      denormalizationContext={"groups"={"writeTag"}}
 * ) 
 * @ORM\Entity(repositoryClass=TagRepository::class)
 */
class Tag
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"readGrpTag", "writeGrpTag"})
     * @Groups({"readTag", "writeTag"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"readTag", "writeTag"})
     * @Assert\NotBlank(message="Le libelle doit etre obligatoire")
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"readTag", "writeTag"})
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"readTag", "writeTag"})
     * @Assert\NotBlank(message="Le libelle doit etre obligatoire")s
     */
    private $archivage;

    /**
     * @ORM\ManyToMany(targetEntity=GroupeDeTag::class, mappedBy="tag", cascade={"persist"})
     * @Groups({"readTag", "writeTag"})
     */
    private $groupeDeTags;

    /**
     * @ORM\ManyToMany(targetEntity=Brief::class, mappedBy="tag")
     */
    private $briefs;

    public function __construct()
    {
        $this->groupeDeTags = new ArrayCollection();
        $this->briefs = new ArrayCollection();
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

    /**
     * @return Collection|GroupeDeTag[]
     */
    public function getGroupeDeTags(): Collection
    {
        return $this->groupeDeTags;
    }

    public function addGroupeDeTag(GroupeDeTag $groupeDeTag): self
    {
        if (!$this->groupeDeTags->contains($groupeDeTag)) {
            $this->groupeDeTags[] = $groupeDeTag;
            $groupeDeTag->addTag($this);
        }

        return $this;
    }

    public function removeGroupeDeTag(GroupeDeTag $groupeDeTag): self
    {
        if ($this->groupeDeTags->removeElement($groupeDeTag)) {
            $groupeDeTag->removeTag($this);
        }

        return $this;
    }

    /**
     * @return Collection|Brief[]
     */
    public function getBriefs(): Collection
    {
        return $this->briefs;
    }

    public function addBrief(Brief $brief): self
    {
        if (!$this->briefs->contains($brief)) {
            $this->briefs[] = $brief;
            $brief->addTag($this);
        }

        return $this;
    }

    public function removeBrief(Brief $brief): self
    {
        if ($this->briefs->removeElement($brief)) {
            $brief->removeTag($this);
        }

        return $this;
    }
}
