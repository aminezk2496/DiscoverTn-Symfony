<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\CampingRepository;
use Datetime;

#[ORM\Entity(repositoryClass: CampingRepository::class)]

class Camping
{
   
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column (name:"id_Camping")]
    private ?int $idCamping = null;

   
    #[ORM\Column(length:1000)]
    private ?string $nom = null;

   
    #[ORM\Column]
    private ?\DateTime $dateDebut = null;

  
    #[ORM\Column]
    private ?\DateTime $dateFin = null;

   
    #[ORM\Column (type:"integer")]
    private ?int $periode = null;

    
    #[ORM\Column (type:"float")]
    private ?float $prix = null;

   
    #[ORM\Column(length:100)]
    private ?string $lieux = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    
    #[ORM\Column(length:255)]
    private $imagec = 'NULL';

   
    #[ORM\Column]
    private ?int $nbr_place = null;

    
    #[ORM\Column]
    private $image = 'NULL';

    public function getIdCamping(): ?int
    {
        return $this->idCamping;
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

    public function getDateDebut(): ?\DateTime
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTime $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTime
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTime $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getPeriode(): ?int
    {
        return $this->periode;
    }

    public function setPeriode(int $periode): self
    {
        $this->periode = $periode;

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

    public function getLieux(): ?string
    {
        return $this->lieux;
    }

    public function setLieux(string $lieux): self
    {
        $this->lieux = $lieux;

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

    public function getImagec(): ?string
    {
        return $this->imagec;
    }

    public function setImagec(?string $imagec): self
    {
        $this->imagec = $imagec;

        return $this;
    }

    public function getNbrPlace(): ?int
    {
        return $this->nbr_place;
    }

    public function setNbrPlace(int $nbr_place): self
    {
        $this->nbr_place  = $nbr_place ;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }
    
/**
 * @ORM\ManyToMany(targetEntity="App\Entity\Participation", mappedBy="camping")
 */
private Collection $participations;


#[ORM\OneToMany(mappedBy: 'camping', targetEntity: Rating::class)]
private Collection $ratings;

#[ORM\OneToMany(mappedBy: 'camping', targetEntity: Favorite::class)]
private Collection $favorites;
 

public function __construct()
{
    $this->participations = new ArrayCollection();
    $this->ratings = new ArrayCollection();
    $this->favorites = new ArrayCollection();
    
}
/**
 * @return Collection<int, Participation>
 */
public function getParticipations(): Collection
{
    return $this->participations;
}

public function addParticipation(Participation $participation): self
{
    if (!$this->participations->contains($participation)) {
        $this->participations->add($participation);
        $rating->setCamping($this);
    }

    return $this;
}

public function removeParticipation(Participation $participation): self
{
    if ($this->ratings->removeElement($participation)) {
        // set the owning side to null (unless already changed)
        if ($rating->getCamping() === $this) {
            $rating->setCamping(null);
        }
    }

    return $this;
}

/**
 * @return Collection<int, Rating>
 */
public function getRatings(): Collection
{
    return $this->ratings;
}

public function addRating(Rating $rating): self
{
    if (!$this->ratings->contains($rating)) {
        $this->ratings->add($rating);
        $rating->setCamping($this);
    }

    return $this;
}

public function removeRating(Rating $rating): self
{
    if ($this->ratings->removeElement($rating)) {
        // set the owning side to null (unless already changed)
        if ($rating->getCamping() === $this) {
            $rating->setCamping(null);
        }
    }

    return $this;
}

/**
 * @return Collection<int, Favorite>
 */
public function getFavorites(): Collection
{
    return $this->favorites;
}

public function addFavorite(Favorite $favorite): self
{
    if (!$this->favorites->contains($favorite)) {
        $this->favorites->add($favorite);
        $favorite->setCamping($this);
    }

    return $this;
}

public function removeFavorite(Favorite $favorite): self
{
    if ($this->favorites->removeElement($favorite)) {
        // set the owning side to null (unless already changed)
        if ($favorite->getCamping() === $this) {
            $favorite->setCamping(null);
        }
    }

    return $this;
}

}
