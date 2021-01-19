<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\GroupeDeTagRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints\NotBlank;


/**
 * @ApiResource(
 *      routePrefix="/admin",
 *      collectionOperations={"POST","GET"},
 *      itemOperations={"GET", "PUT"},
 *      normalizationContext={"groups"={"readGrpTag"}},
 *      denormalizationContext={"groups"={"writeGrpTag"}}
 * )
 * @ORM\Entity(repositoryClass=GroupeDeTagRepository::class)
 */
class GroupeDeTag
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
     * @Groups({"readGrpTag", "writeGrpTag"})
     * @Assert\NotBlank(message="Le libelle doit etre obligatoire")
     *  @Groups({"readTag", "writeTag"})
     */
    private $libelle;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"readGrpTag", "writeGrpTag"})
     *  @Groups({"readTag", "writeTag"})
     */
    private $archivage;

    /**
     * @ApiSubresource()
     * @ORM\ManyToMany(targetEntity=Tag::class, inversedBy="groupeDeTags", cascade={"persist"})
     * @Groups({"readGrpTag", "writeGrpTag"})
     *
     */
    private $tag;

    public function __construct()
    {
        $this->tag = new ArrayCollection();
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
     * @return Collection|Tag[]
     */
    public function getTag(): Collection
    {
        return $this->tag;
    }

    public function addTag(Tag $tag): self
    {
        if (!$this->tag->contains($tag)) {
            $this->tag[] = $tag;
        }

        return $this;
    }

    public function removeTag(Tag $tag): self
    {
        $this->tag->removeElement($tag);

        return $this;
    }
}
