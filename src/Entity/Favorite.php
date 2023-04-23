<?php

namespace App\Entity;

use App\Repository\FavoriteRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FavoriteRepository::class)]
class Favorite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:"id_f")]
    private ?int $idF = null;

    #[ORM\Column(name:"userid")]
    private ?int $user = null;

   /**
     * @var \Camping
     *
     * @ORM\ManyToOne(targetEntity="Camping")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="camp_id", referencedColumnName="id_Camping", 
     *      foreignKey=@ORM\ForeignKey(name="fk_favorite_camping"))
     * })
     */  
    #[ORM\ManyToOne(targetEntity:"Camping")]
    #[ORM\JoinColumn(name:"camp_id", referencedColumnName:"id_Camping", nullable:true)]
    private ?Camping $camping = null;

     /**
     * @var \Randonnee
     *
     * @ORM\ManyToOne(targetEntity="Randonnee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rand_id", referencedColumnName="id_randonnee")
     * })
     */
    #[ORM\ManyToOne(targetEntity:"Randonnee")]
    #[ORM\JoinColumn(name:"rand_id", referencedColumnName:"id_randonnee", nullable:true)]  
    private ?Randonnee $randonnee = null;

    #[ORM\Column (name:"createdAt")	]
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
