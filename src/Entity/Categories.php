<?php

namespace App\Entity;

use App\Repository\CategoriesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoriesRepository::class)]
class Categories
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\ManyToMany(targetEntity: Operateurs::class, inversedBy: 'categories')]
    private Collection $operateur;

    public function __construct()
    {
        $this->operateur = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return Collection<int, Operateurs>
     */
    public function getOperateur(): Collection
    {
        return $this->operateur;
    }

    public function addOperateur(Operateurs $operateur): self
    {
        if (!$this->operateur->contains($operateur)) {
            $this->operateur->add($operateur);
        }

        return $this;
    }

    public function removeOperateur(Operateurs $operateur): self
    {
        $this->operateur->removeElement($operateur);

        return $this;
    }
}
