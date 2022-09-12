<?php

namespace App\Entity;

use App\Repository\OperateursRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OperateursRepository::class)]
class Operateurs
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $numeroBio = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $siret = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $codeNAF = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $gerant = null;

    #[ORM\Column(length: 255)]
    private ?string $raisonSociale = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $telephone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $siteWeb = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateMAJ = null;

    #[ORM\ManyToMany(targetEntity: Categories::class, mappedBy: 'operateur')]
    private Collection $categories;

    #[ORM\ManyToMany(targetEntity: Activites::class, mappedBy: 'operateurs')]
    private Collection $activites;

    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->activites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroBio(): ?string
    {
        return $this->numeroBio;
    }

    public function setNumeroBio(?string $numeroBio): self
    {
        $this->numeroBio = $numeroBio;

        return $this;
    }

    public function getSiret(): ?string
    {
        return $this->siret;
    }

    public function setSiret(?string $siret): self
    {
        $this->siret = $siret;

        return $this;
    }

    public function getCodeNAF(): ?string
    {
        return $this->codeNAF;
    }

    public function setCodeNAF(?string $codeNAF): self
    {
        $this->codeNAF = $codeNAF;

        return $this;
    }

    public function getGerant(): ?string
    {
        return $this->gerant;
    }

    public function setGerant(?string $gerant): self
    {
        $this->gerant = $gerant;

        return $this;
    }

    public function getRaisonSociale(): ?string
    {
        return $this->raisonSociale;
    }

    public function setRaisonSociale(string $raisonSociale): self
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getSiteWeb(): ?string
    {
        return $this->siteWeb;
    }

    public function setSiteWeb(?string $siteWeb): self
    {
        $this->siteWeb = $siteWeb;

        return $this;
    }

    public function getDateMAJ(): ?\DateTimeInterface
    {
        return $this->dateMAJ;
    }

    public function setDateMAJ(\DateTimeInterface $dateMAJ): self
    {
        $this->dateMAJ = $dateMAJ;

        return $this;
    }

    public function __toString()
    {
        return $this->raisonSociale;
    }

    /**
     * @return Collection<int, Categories>
     */
    public function getCategories(): Collection
    {
        return $this->categories;
    }

    public function addCategory(Categories $category): self
    {
        if (!$this->categories->contains($category)) {
            $this->categories->add($category);
            $category->addOperateur($this);
        }

        return $this;
    }

    public function removeCategory(Categories $category): self
    {
        if ($this->categories->removeElement($category)) {
            $category->removeOperateur($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Activites>
     */
    public function getActivites(): Collection
    {
        return $this->activites;
    }

    public function addActivite(Activites $activite): self
    {
        if (!$this->activites->contains($activite)) {
            $this->activites->add($activite);
            $activite->addOperateur($this);
        }

        return $this;
    }

    public function removeActivite(Activites $activite): self
    {
        if ($this->activites->removeElement($activite)) {
            $activite->removeOperateur($this);
        }

        return $this;
    }
}
