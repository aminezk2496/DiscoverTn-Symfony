<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\RandonneeRepository;

/**
 * @ORM\Entity(repositoryClass=RandonneeRepository::class)
 */
class Randonnee
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $idRandonnee;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private ?string $nom;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private ?\DateTime $dateRand;

    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private ?string $lieux;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private ?float $prix;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private ?string $niveauDiff;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $programme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $imagesr;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $nbrPlacer;

    /**
     * @ORM\OneToMany(mappedBy="randonnee", targetEntity=Rating::class, orphanRemoval=true)
     */
    private Collection $ratings;

    /**
     * @ORM\OneToMany(mappedBy="randonnee", targetEntity=Favorite::class, orphanRemoval=true)
     */
    private Collection $favorites;

    public function __construct()
    {
        $this->ratings = new ArrayCollection();
        $this->favorites = new ArrayCollection();
    }

    public function getIdRandonnee(): ?int
    {
        return $this->idRandonnee;
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

    public function getDateRand(): ?\DateTime
    {
        return $this->dateRand;
    }

    public function setDateRand(\DateTime $dateRand): self
    {
        $this->dateRand = $dateRand;

        return $this;
    }

    public function getLieux(): ?string
    {
        return $this->lieux;
    }

    public function setLieux(string $lieux): self
    {
        $this->lieux = $lieux;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getNiveauDiff(): ?string
    {
        return $this->niveauDiff;
    }

    public function setNiveauDiff(string $niveauDiff): self
    {
        $this->niveauDiff = $niveauDiff;

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

    public function getImagesr(): ?string
    {
        return $this->imagesr;
    }

    public function setImagesr(string $imagesr): self
    {
        $this->imagesr = $imagesr;

        return $this;
    }

    public function getNbrPlacer(): ?int
    {
        return $this->nbrPlacer;
    }

    public function setNbrPlacer(int $nbrPlacer): self
    {
        $this->nbrPlacer = $nbrPlacer;

        return $this;
    }

    /**
     * @return Collection|Rating[]
     */
    public function getRatings(): Collection
    {
        return $this->ratings;
    }

    public function addRating(Rating $rating): self
    {
        if (!$this->ratings->contains($rating)) {
            $this->ratings[] = $rating;
            $rating->setRandonnee($this);
        }

        return $this;
    }

    public function removeRating(Rating $rating): self
    {
        if ($this->ratings->contains($rating)) {
            $this->ratings->removeElement($rating);
            // set the owning side to null (unless already changed)
            if ($rating->getRandonnee() === $this) {
                $rating->setRandonnee(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Favorite[]
     */
    public function getFavorites(): Collection
    {
        return $this->favorites;
    }

    public function addFavorite(Favorite $favorite): self
    {
        if (!$this->favorites->contains($favorite)) {
            $this->favorites[] = $favorite;
            $favorite->setRandonnee($this);
        }

        return $this;
    }

    public function removeFavorite(Favorite $favorite): self
    {
        if ($this->favorites->contains($favorite)) {
            $this->favorites->removeElement($favorite);
            // set the owning side to null (unless already changed)
            if ($favorite->getRandonnee() === $this) {
                $favorite->setRandonnee(null);
            }
        }

        return $this;
    }
}

