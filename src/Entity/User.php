<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Doctrine\Common\Collections\Collection;
use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ApiResource(
 *      routePrefix="/admin",
 *      collectionOperations={"POST","GET"},
 *      itemOperations={
 *           "get_user_trans"={
 *                "method"="GET",
 *                "path"="/users/{id}/transaction"
 *           },"GET","PUT"},
 *      normalizationContext={"groups"={"User:read"}},
 *      denormalizationContext={"groups"={"User:write"}}
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"User:read"})
     * @Groups({"User:write"})
     * @Groups({"Profil:read"})
     * @Groups({"Profil:write"})
     * @Groups({"Transaction:read"})
     * @Groups({"Transaction:write"})
     * @Groups({"Agence:read"})
     * @Groups({"Agence:write"})
     * @Groups({"Compte:read"})
     * @Groups({"Compte:write"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Groups({"User:read"})
     * @Groups({"User:write"})
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"User:read"})
     * @Groups({"User:write"})
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"User:read"})
     * @Groups({"User:write"})
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"User:read"})
     * @Groups({"User:write"})
     */
    private $telephone;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"User:read"})
     * @Groups({"User:write"})
     */
    private $cni;

    /**
     * @ORM\ManyToOne(targetEntity=Profil::class, inversedBy="user")
     * @Groups({"User:read"})
     * @Groups({"User:write"})
     */
    private $profil;

    /**
     * @ORM\ManyToOne(targetEntity=Agence::class, inversedBy="user")
     * @Groups({"User:write"})
      * @Groups({"User:read"})
     */
    private $agence;

    /**
     * @ORM\OneToMany(targetEntity=Compte::class, mappedBy="user")
     * @Groups({"User:write"})
     * @Groups({"User:read"})
     */
    private $comptes;

    /**
     * @ORM\OneToMany(targetEntity=Transaction::class, mappedBy="userRetrait")
     * @Groups({"User:read"})
     * @Groups({"User:write"})
     */
    private $retraitTransaction;

    /**
     * @ORM\OneToMany(targetEntity=Transaction::class, mappedBy="userDepot")
     * @Groups({"User:read"})
     * @Groups({"User:write"})
     */
    private $depotTransaction;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $avatar;

    public function __construct()
    {
        $this->comptes = new ArrayCollection();
        $this->retraitTransaction = new ArrayCollection();
        $this->depotTransaction = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

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

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

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

    public function getProfil(): ?Profil
    {
        return $this->profil;
    }

    public function setProfil(?Profil $profil): self
    {
        $this->profil = $profil;

        return $this;
    }

    public function getAgence(): ?Agence
    {
        return $this->agence;
    }

    public function setAgence(?Agence $agence): self
    {
        $this->agence = $agence;

        return $this;
    }

    /**
     * @return Collection|Compte[]
     */
    public function getComptes(): Collection
    {
        return $this->comptes;
    }

    public function addCompte(Compte $compte): self
    {
        if (!$this->comptes->contains($compte)) {
            $this->comptes[] = $compte;
            $compte->setUser($this);
        }

        return $this;
    }

    public function removeCompte(Compte $compte): self
    {
        if ($this->comptes->removeElement($compte)) {
            // set the owning side to null (unless already changed)
            if ($compte->getUser() === $this) {
                $compte->setUser(null);
            }
        }

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
            $retraitTransaction->setUserRetrait($this);
        }

        return $this;
    }

    public function removeRetraitTransaction(Transaction $retraitTransaction): self
    {
        if ($this->retraitTransaction->removeElement($retraitTransaction)) {
            // set the owning side to null (unless already changed)
            if ($retraitTransaction->getUserRetrait() === $this) {
                $retraitTransaction->setUserRetrait(null);
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
            $depotTransaction->setUserDepot($this);
        }

        return $this;
    }

    public function removeDepotTransaction(Transaction $depotTransaction): self
    {
        if ($this->depotTransaction->removeElement($depotTransaction)) {
            // set the owning side to null (unless already changed)
            if ($depotTransaction->getUserDepot() === $this) {
                $depotTransaction->setUserDepot(null);
            }
        }

        return $this;
    }

    public function getAvatar()
    {
        return base64_encode(stream_get_contents($this->avatar));
    }

    public function setAvatar($avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }
}
