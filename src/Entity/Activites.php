<?php

namespace App\Entity;

use App\Repository\ActivitesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ActivitesRepository::class)]
class Activites
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_activite = null;

    #[ORM\ManyToMany(targetEntity: Operateurs::class, inversedBy: 'activites')]
    private Collection $operateurs;

    public function __construct()
    {
        $this->operateurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomActivite(): ?string
    {
        return $this->nom_activite;
    }

    public function setNomActivite(string $nom_activite): self
    {
        $this->nom_activite = $nom_activite;

        return $this;
    }

    /**
     * @return Collection<int, Operateurs>
     */
    public function getOperateurs(): Collection
    {
        return $this->operateurs;
    }

    public function addOperateur(Operateurs $operateur): self
    {
        if (!$this->operateurs->contains($operateur)) {
            $this->operateurs->add($operateur);
        }

        return $this;
    }

    public function removeOperateur(Operateurs $operateur): self
    {
        $this->operateurs->removeElement($operateur);

        return $this;
    }
}
