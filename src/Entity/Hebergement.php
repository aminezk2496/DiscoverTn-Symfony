<?php

namespace App\Entity;

use App\Repository\HebergementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Reservation;

/**
 * @ORM\Entity(repositoryClass=HebergementRepository::class)
 *
 */
class Hebergement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomHeber", type="string", length=255, nullable=false)
     */
    private $nomHeber;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionHeber", type="string", length=255, nullable=false)
     */
    private $descriptionHeber;

    /**
     * @var int
     *
     * @ORM\Column(name="nbChambre", type="integer",  nullable=false)

     */
    private $nbChambre;

    /**
     * @var float
     *
     * @ORM\Column(name="prixHeber", type="float", nullable=false)
     */
    private $prixHeber;


    /**
     * @var string
     *
     * @ORM\Column(name="localisationHeber", type="string", length=255, nullable=false)
     */
    private $localisationHeber;

    /**
     * @var int
     *
     * @ORM\Column(name="contactHeber", type="integer",  nullable=false)
     */
    private $contactHeber;

    /**
     * @var string
     *
     * @ORM\Column(name="$typeHeber", type="string", length=255, nullable=false)
     */
    private $typeHeber;





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



/**
 * @ORM\Entity(repositoryClass=PublicationRepository::class)
 *
 */












