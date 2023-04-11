<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\HebergementRepository;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Hebergement
 *
 * @ORM\Table(name="hebergement")
 * @ORM\Entity
 */
class Hebergement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_heber", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHeber ;
    
    /**
     * @var string
     *
     * @ORM\Column(name="nom_heber", type="string", length=255, nullable=false)
     */  
    #[Assert\NotBlank(message: "Veuillez sasir un Nom")]
    private $nomHeber;

    /**
     * @var string
     *
     * @ORM\Column(name="description_heber", type="string", length=100, nullable=false)
     */    
    #[Assert\lenght(max:200, message: "Taille maximum attteinte")]
    private ?string $descriptionHeber = null;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_chambre", type="integer", length=100, nullable=false)
     */
    #[Assert\NotBlank(message: "Veuillez remplir le champ")]
    private $nbChambre;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_heber", type="float", length=100, nullable=false)
     */
    #[Assert\NotBlank(message: "Veuillez remplir le champ")]
    private $prixHeber ;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation_heber", type="string", length=255, nullable=false)
     */
    #[Assert\NotBlank(message: "Veuillez remplir le champ")]
    private $localisationHeber;

    /**
     * @var int
     *
     * @ORM\Column(name="contact_heber", type="integer", length=100, nullable=false)
     */
    #[Assert\NotBlank(message: "Veuillez remplir le champ")]
    private $contactHeber ;

    /**
     * @var string
     *
     * @ORM\Column(name="type_heber", type="string", length=255, nullable=false)
     */
    #[Assert\NotBlank(message: "Veuillez remplir le champ")]
    private $typeHeber ;

    public function getIdHeber(): ?int
    {
        return $this->idHeber;
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

    public function getDescriptionHeber(): ?string
    {
        return $this->descriptionHeber;
    }

    public function setDescriptionHeber(string $descriptionHeber): self
    {
        $this->descriptionHeber = $descriptionHeber;

        return $this;
    }

    public function getNbChambre(): ?int
    {
        return $this->nbChambre;
    }

    public function setNbChambre(int $nbChambre): self
    {
        $this->nbChambre = $nbChambre;

        return $this;
    }

    public function getPrixHeber(): ?float
    {
        return $this->prixHeber;
    }

    public function setPrixHeber(float $prixHeber): self
    {
        $this->prixHeber = $prixHeber;

        return $this;
    }

    public function getLocalisationHeber(): ?string
    {
        return $this->localisationHeber;
    }

    public function setLocalisationHeber(string $localisationHeber): self
    {
        $this->localisationHeber = $localisationHeber;

        return $this;
    }

    public function getContactHeber(): ?int
    {
        return $this->contactHeber;
    }

    public function setContactHeber(int $contactHeber): self
    {
        $this->contactHeber = $contactHeber;

        return $this;
    }

    public function getTypeHeber(): ?string
    {
        return $this->typeHeber;
    }

    public function setTypeHeber(string $typeHeber): self
    {
        $this->typeHeber = $typeHeber;

        return $this;
    }


}
