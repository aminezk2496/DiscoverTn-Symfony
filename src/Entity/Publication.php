<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use App\Repository\PublicationRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Length;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PublicationRepository::class)
 * 
 */
class Publication
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
     * @ORM\Column(name="contenu", type="string", length=1000, nullable=false)
     * @Assert\Length(
     *      min = 5,
     *      max = 100,
     *      minMessage = "Your Type must be at least {{ limit }} characters long",
     *      maxMessage = "Your Type cannot be longer than {{ limit }} characters"
     * )
     * @Assert\NotBlank
     */
    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="iduser", type="string", length=20, nullable=false)
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="urlimage", type="string", length=100, nullable=false)
     
     */
    private $urlimage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_publication", type="date", nullable=false)
     */
    private $datePublication;

    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Commentaire", mappedBy="publication", cascade={"persist", "remove"})
     */
    private $commentaire;

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getIduser(): ?string
    {
        return $this->iduser;
    }

    public function setIduser(string $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getUrlimage(): ?string
    {
        return $this->urlimage;
    }

    public function setUrlimage(string $urlimage): self
    {
        $this->urlimage = $urlimage;

        return $this;
    }

    public function getDatePublication(): ?\DateTimeInterface
    {
        return $this->datePublication;
    }

    public function setDatePublication(\DateTimeInterface $datePublication): self
    {
        $this->datePublication = $datePublication;

        return $this;
    }
}
