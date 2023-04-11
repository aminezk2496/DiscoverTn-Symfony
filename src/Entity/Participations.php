<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Participations
 *
 * @ORM\Table(name="participations")
 * @ORM\Entity
 */
class Participations
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Parti", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParti;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_utilisateur", type="integer", nullable=true)
     */
    private $idUtilisateur;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_Camp", type="integer", nullable=true)
     */
    private $idCamp;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_Rand", type="integer", nullable=true)
     */
    private $idRand;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_events", type="integer", nullable=true)
     */
    private $idEvents;

    /**
     * @var int
     *
     * @ORM\Column(name="Nombre", type="integer", nullable=false)
     */
    private $nombre;

    /**
     * @var float
     *
     * @ORM\Column(name="Montant", type="float", precision=10, scale=0, nullable=false)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="Etat", type="string", length=10, nullable=false)
     */
    private $etat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_Parti", type="date", nullable=false)
     */
    private $dateParti;

    public function getIdParti(): ?int
    {
        return $this->idParti;
    }

    public function getIdUtilisateur(): ?int
    {
        return $this->idUtilisateur;
    }

    public function setIdUtilisateur(?int $idUtilisateur): self
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    public function getIdCamp(): ?int
    {
        return $this->idCamp;
    }

    public function setIdCamp(?int $idCamp): self
    {
        $this->idCamp = $idCamp;

        return $this;
    }

    public function getIdRand(): ?int
    {
        return $this->idRand;
    }

    public function setIdRand(?int $idRand): self
    {
        $this->idRand = $idRand;

        return $this;
    }

    public function getIdEvents(): ?int
    {
        return $this->idEvents;
    }

    public function setIdEvents(?int $idEvents): self
    {
        $this->idEvents = $idEvents;

        return $this;
    }

    public function getNombre(): ?int
    {
        return $this->nombre;
    }

    public function setNombre(int $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getMontant(): ?float
    {
        return $this->montant;
    }

    public function setMontant(float $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    public function getDateParti(): ?\DateTimeInterface
    {
        return $this->dateParti;
    }

    public function setDateParti(\DateTimeInterface $dateParti): self
    {
        $this->dateParti = $dateParti;

        return $this;
    }


}
