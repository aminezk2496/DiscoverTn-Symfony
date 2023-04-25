<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use DateTime;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Veuillez remplir le champ")]
    private ?string $nomHeber = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Assert\NotBlank(message: "Veuillez remplir le champ")]
    private ?\DateTime $dateReser = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Veuillez remplir le champ")]
    #[Assert\lenght(min:1, message: "Duree min d'un jour")]
    #[Assert\lenght(max:15, message: "Duree max atteinte")]
    private ?int $duree = null;

    #[ORM\ManyToOne(inversedBy: 'reser')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Hebergement $Reservation = null;

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

    public function getDateReser(): ?\DateTime
    {
        return $this->dateReser;
    }

    public function setDateReser(\DateTime $dateReser): self
    {
        $this->dateReser = $dateReser;

        return $this;
    }

    /*public function getFormattedDateReser(): ?string
    {
        return $this->dateReser ? $this->dateReser->format('Y-m-d H:i:s') : null;
    }*/

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getReservation(): ?Hebergement
    {
        return $this->Reservation;
    }

    public function setReservation(?Hebergement $Reservation): self
    {
        $this->Reservation = $Reservation;

        return $this;
    }
}
