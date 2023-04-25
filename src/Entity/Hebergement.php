<?php

namespace App\Entity;

use App\Repository\HebergementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Reservation;

#[ORM\Entity(repositoryClass: HebergementRepository::class)]
class Hebergement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Veuillez sasir un Nom")]
    private ?string $nomHeber = null;

    #[ORM\Column(length: 255)]
    #[Assert\lenght(max:200, message: "Taille maximum attteinte")]
    private ?string $descriptionHeber = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Veuillez remplir le champ")]
    private ?int $nbChambre = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Veuillez remplir le champ")]
    private ?float $prixHeber = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Veuillez remplir le champ")]
    private ?string $localisationHeber = null;

    #[ORM\Column]
    #[Assert\lenght(min:6, message: "6 chiffres minimum")]
    #[Assert\lenght(max:10, message: "10 chiffres maximum")]
    #[Assert\NotBlank(message: "Veuillez remplir le champ")]
    private ?int $contactHeber = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Veuillez remplir le champ")]
    private ?string $typeHeber = null;

    #[ORM\OneToMany(mappedBy: 'Reservation', targetEntity: Reservation::class, orphanRemoval: true)]
    private Collection $reser; 

    public function __construct()
    {
        $this->reser = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomHeber(): ?string
    {
        return $this->nomHeber;
    }

    public function setNomHeber(string $nomHeber): self
    {
        $this->nomHeber = $nomHeber;

        return $this;
    }

    public function getDescriptionHeber(): ?string
    {
        return $this->descriptionHeber;
    }

    public function setDescriptionHeber(string $descriptionHeber): self
    {
        $this->descriptionHeber = $descriptionHeber;

        return $this;
    }

    public function getNbChambre(): ?int
    {
        return $this->nbChambre;
    }

    public function setNbChambre(int $nbChambre): self
    {
        $this->nbChambre = $nbChambre;

        return $this;
    }

    public function getPrixHeber(): ?float
    {
        return $this->prixHeber;
    }

    public function setPrixHeber(float $prixHeber): self
    {
        $this->prixHeber = $prixHeber;

        return $this;
    }

    public function getLocalisationHeber(): ?string
    {
        return $this->localisationHeber;
    }

    public function setLocalisationHeber(string $localisationHeber): self
    {
        $this->localisationHeber = $localisationHeber;

        return $this;
    }

    public function getContactHeber(): ?int
    {
        return $this->contactHeber;
    }

    public function setContactHeber(int $contactHeber): self
    {
        $this->contactHeber = $contactHeber;

        return $this;
    }

    public function getTypeHeber(): ?string
    {
        return $this->typeHeber;
    }

    public function setTypeHeber(string $typeHeber): self
    {
        $this->typeHeber = $typeHeber;

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    
    public function getReser(): Collection
    {
        return $this->reser;
    }

    public function addReser(Reservation $reser): self
    {
        if (!$this->reser->contains($reser)) {
            $this->reser->add($reser);
            $reser->setReservation($this);
        }

        return $this;
    }

    public function removeReser(Reservation $reser): self
    {
        if ($this->reser->removeElement($reser)) {
            // set the owning side to null (unless already changed)
            if ($reser->getReservation() === $this) {
                $reser->setReservation(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->nomHeber;
    }

}
