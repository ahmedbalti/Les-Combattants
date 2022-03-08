<?php

namespace App\Entity;

use App\Repository\RoomRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=RoomRepository::class)
 * @ORM\Table(name="`room`")
 * @ApiResource(
 *  collectionOperations={
 *      "get","post",
 *      "room_r"={"room_r"="api_me"}
 *  }
 * )
 */
class Room
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $Number;

    /**
     * @ORM\Column(type="integer")
     */
    private $Etage;

    /**
     * @ORM\Column(type="integer")
     */
    private $NbLit;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $disponibilite = true;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Emplacement;


    /**
     * @var Image
     * @ORM\ManyToOne(targetEntity="Image", cascade={"persist"})
     * @ORM\JoinColumn(name="cover_id", referencedColumnName="id")
     **/
    private $cover;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Type;


    /**
     * @var Hebergement
     * @ORM\ManyToOne(targetEntity="Hebergement", cascade={"remove", "persist"})
     * @ORM\JoinColumn(name="hebergement", referencedColumnName="id")
     **/
    private $hebergement;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?int
    {
        return $this->Number;
    }

    public function setNumber(int $Number): self
    {
        $this->Number = $Number;

        return $this;
    }

    public function getEtage(): ?int
    {
        return $this->Etage;
    }

    public function setEtage(int $Etage): self
    {
        $this->Etage = $Etage;

        return $this;
    }

    public function getNbLit(): ?int
    {
        return $this->NbLit;
    }

    public function setNbLit(int $NbLit): self
    {
        $this->NbLit = $NbLit;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->Price;
    }

    public function setPrice(string $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getDisponibilite(): ?bool
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(bool $disponibilite): self
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    public function getEmplacement(): ?string
    {
        return $this->Emplacement;
    }

    public function setEmplacement(string $Emplacement): self
    {
        $this->Emplacement = $Emplacement;

        return $this;
    }


    /**
     * @return Image
     */
    public function getCover(): ?Image
    {
        return $this->cover;
    }

    /**
     * @param Image $cover
     */
    public function setCover(Image $cover): void
    {
        $this->cover = $cover;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHebergement()
    {
        return $this->hebergement;
    }

    /**
     * @param mixed $hebergement
     */
    public function setHebergement($hebergement): void
    {
        $this->hebergement = $hebergement;
    }
}
