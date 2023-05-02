<?php

namespace App\Entity;

use App\Repository\FavoriteRepository;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity(repositoryClass=FavoriteRepository::class)
 */
class Favorite
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id_f")
     */
    private ?int $idF = null;

    /**
     * @ORM\Column(name="userid")
     */
    private ?int $user = null;



    /**
     * @ORM\ManyToOne(targetEntity=Randonnee::class)
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rand_id", referencedColumnName="id_randonnee")
     * })
     */
    private ?Randonnee $randonnee = null;

    /**
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private ?\DateTime $createdAt = null;

    public function getIdF(): ?int
    {
        return $this->idF;
    }

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function setUser(int $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getCamping(): ?Camping
    {
        return $this->camping;
    }

    public function setCamping(?Camping $camping): self
    {
        $this->camping = $camping;

        return $this;
    }

    public function getRandonnee(): ?Randonnee
    {
        return $this->randonnee;
    }

    public function setRandonnee(?Randonnee $randonnee): self
    {
        $this->randonnee = $randonnee;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
