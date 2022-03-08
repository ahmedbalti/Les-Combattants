<?php

namespace App\Entity;

use App\Repository\HebergementRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Entity\File as EmbeddedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Table(name="hebergement")
 * @ORM\Entity(repositoryClass=HebergementRepository::class)
 * @ApiResource()
 */
class Hebergement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="integer")
     */
    private $NbStars;

    /**
     * @ORM\Column(type="integer")
     */
    private $NbRooms;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     * @var Image
     * @ORM\ManyToOne(targetEntity="Image", cascade={"persist"})
     * @ORM\JoinColumn(name="cover_id", referencedColumnName="id")
     **/
    private $cover;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @ORM\Column(type="boolean")
     */
    private $disponibilite = true;


    /**
     * @var Hebergement
     * @ORM\OneToMany (targetEntity="Room", mappedBy="hebergement", orphanRemoval=true, cascade={"remove"})
     *
     */
    protected $rooms;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getNbStars(): ?int
    {
        return $this->NbStars;
    }

    public function setNbStars(int $NbStars): self
    {
        $this->NbStars = $NbStars;

        return $this;
    }

    public function getNbRooms(): ?int
    {
        return $this->NbRooms;
    }

    public function setNbRooms(int $NbRooms): self
    {
        $this->NbRooms = $NbRooms;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->Address;
    }

    public function setAddress(string $Address): self
    {
        $this->Address = $Address;

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


    /**
     * @return mixed
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * @param mixed $disponibilite
     */
    public function setDisponibilite(bool $disponibilite): void
    {
        $this->disponibilite = $disponibilite;
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

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

}
