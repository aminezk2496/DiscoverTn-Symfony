<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VoitureRepository::class)
 */
class Voiture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $serie = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $marque = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $nb_chv = null;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private ?string $type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSerie(): ?string
    {
        return $this->serie;
    }

    public function setSerie(string $serie): self
    {
        $this->serie = $serie;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getNbChv(): ?string
    {
        return $this->nb_chv;
    }

    public function setNbChv(string $nb_chv): self
    {
        $this->nb_chv = $nb_chv;

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
}