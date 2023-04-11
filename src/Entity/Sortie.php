<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Sortie
 *
 * @ORM\Table(name="sortie", indexes={@ORM\Index(name="id_Rand", columns={"id_Rand"}), @ORM\Index(name="id_Camp", columns={"id_Camp"})})
 * @ORM\Entity
 */
class Sortie
{
    /**
     * @var string
     *
     * @ORM\Column(name="id_Sortie", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSortie;

    /**
     * @var string
     *
     * @ORM\Column(name="id_Camp", type="string", length=10, nullable=false)
     */
    private $idCamp;

    /**
     * @var string
     *
     * @ORM\Column(name="id_Rand", type="string", length=10, nullable=false)
     */
    private $idRand;

    /**
     * @var string
     *
     * @ORM\Column(name="Type", type="string", length=2, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=1000, nullable=false)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="Lieux", type="string", length=1000, nullable=false)
     */
    private $lieux;

    public function getIdSortie(): ?string
    {
        return $this->idSortie;
    }

    public function getIdCamp(): ?string
    {
        return $this->idCamp;
    }

    public function setIdCamp(string $idCamp): self
    {
        $this->idCamp = $idCamp;

        return $this;
    }

    public function getIdRand(): ?string
    {
        return $this->idRand;
    }

    public function setIdRand(string $idRand): self
    {
        $this->idRand = $idRand;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

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

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

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


}
