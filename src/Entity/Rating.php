<?php

namespace App\Entity;

use App\Repository\RatingRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RatingRepository::class)]
class Rating
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column (name:"id_r")]
    private ?int $idR = null;

    #[ORM\Column]
    private ?int $rating = null;

    /**
     * @var \Camping
     *
     * @ORM\ManyToOne(targetEntity="Camping")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="camping_id", referencedColumnName="id_Camping")
     * })
     */
    #[ORM\ManyToOne(targetEntity:"Camping")]
    #[ORM\JoinColumn(name:"camping_id", referencedColumnName:"id_Camping", nullable:true)]
      private ?Camping $camping;

    #[ORM\Column]
    private ?int $userId = null;

    #[ORM\Column]
    private ?\DateTime $createdAt = null;

    /**
     * @var \Randonnee
     *
     * @ORM\ManyToOne(targetEntity="Randonnee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="randonnee_id", referencedColumnName="id_randonnee")
     * })
     */
    #[ORM\ManyToOne(targetEntity:"Randonnee")]
    #[ORM\JoinColumn(name:"randonnee_id", referencedColumnName:"id_randonnee", nullable:true)]    
    private ?Randonnee $randonnee;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRating(): ?int
    {
        return $this->rating;
    }

    public function setRating(int $rating): self
    {
        $this->rating = $rating;

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

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(int $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

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

    public function getIdR(): ?int
    {
        return $this->idR;
    }
}
