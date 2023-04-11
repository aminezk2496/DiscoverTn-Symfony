<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ReservationRepository;
use DateTime;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_reser", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private ?int $idReser=null;

    
    /**
     * @var int
     *
     * @ORM\Column(name="id_heber", type="integer", length=100, nullable=false)
     */
    private ?int $idHeber=null;

    
    /**
     * @var DateTime
     *
     * @ORM\Column(name="date_reser", type="date", length=100, nullable=false)
     */
    #[Assert\NotBlank(message: "Veuillez remplir le champ")]
    private $dateReser;


    /**
     * @var int
     *
     * @ORM\Column(name="duree", type="integer", length=100, nullable=false)
     */
    #[Assert\NotBlank(message: "Veuillez remplir le champ")]
    #[Assert\lenght(min:1, message: "Duree min d'un jour")]
    #[Assert\lenght(max:15, message: "Duree max atteinte")]
    private ?int $duree=null;

    public function getIdReser(): ?int
    {
        return $this->idReser;
    }

    public function getIdHeber(): ?int
    {
        return $this->idHeber;
    }

    public function setIdHeber(int $idHeber): self
    {
        $this->idHeber = $idHeber;

        return $this;
    }

    public function getDateReser(): ?DateTime
    {
        return $this->dateReser;
    }

    public function setDateReser(DateTime $dateReser): self
    {
        $this->dateReser = $dateReser;

        return $this;
    }

    public function getDuree(): ?int
    {
        return $this->duree;
    }

    public function setDuree(int $duree): self
    {
        $this->duree = $duree;

        return $this;
    }


}
