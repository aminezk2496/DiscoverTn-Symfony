<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ParticipationsRepository;
use App\Entity\Camping;

/**
 * @ORM\Entity(repositoryClass=ParticipationsRepository::class)
 */
class Participations
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id_parti", type="integer")
     */
    private ?int $idParti = null;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private ?string $refp;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $idClient;

    /**
     * @ORM\ManyToOne(targetEntity=Randonnee::class)
     * @ORM\JoinColumn(name="id_rand", referencedColumnName="id_randonnee", nullable=true)
     */
    private ?Randonnee $idRand;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $idEvents;

    /**
     * @ORM\Column(type="integer")
     */
    private ?int $nombre;

    /**
     * @ORM\Column(type="float")
     */
    private ?float $montant;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private ?string $etat;

    /**
     * @ORM\Column(type="datetime")
     */
    private ?\DateTime $dateParti;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private ?string $nom;

    /**
     * @ORM\ManyToMany(targetEntity=Camping::class)
     * @ORM\JoinTable(name="participation_camping",
     *      joinColumns={@ORM\JoinColumn(name="id_parti", referencedColumnName="id_parti")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="id_camp", referencedColumnName="id_camping")}
     * )
     */
    private Collection $campings;

    public function __construct()
    {
        $this->campings = new ArrayCollection();
    }

    public function getIdParti(): ?int
    {
        return $this->idParti;
    }

    public function getRefp(): ?string
    {
        return $this->refp;
    }

    public function setRefp(string $refp): self
    {
        $this->refp = $refp;

        return $this;
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(?int $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getIdRand(): ?Randonnee
    {
        return $this->idRand;
    }

    public function setIdRand(?Randonnee $idRand): self
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

    public function setNombre(?int $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

}