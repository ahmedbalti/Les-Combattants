<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\TableRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use App\Controller\TableRController;
/**
 * @ORM\Entity(repositoryClass=TableRepository::class)
 * @ORM\Table(name="`tabl`")
 * @ApiResource(
 *  collectionOperations={
 *      "get","post",
 *      "table_r"={"table_r"="api_me"}
 *  }
 * )
 */
class Table
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint")
     */
    private $numero;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $position;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $forme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    /**
     * @var Image
     * @ORM\ManyToOne(targetEntity="Image", cascade={"persist"})
     * @ORM\JoinColumn(name="cover_id", referencedColumnName="id")
     **/
    private $cover;

    /**
     * @ORM\Column(type="boolean")
     */
    private $disponibilite = true;

    /**
     * @var Club
     * @ORM\ManyToOne(targetEntity="Club", cascade={"remove", "persist"})
     * @ORM\JoinColumn(name="club", referencedColumnName="id")
     **/
    private $club;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getPosition(): ?string
    {
        return $this->position;
    }

    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getForme()
    {
        return $this->forme;
    }

    /**
     * @param mixed $forme
     */
    public function setForme($forme): void
    {
        $this->forme = $forme;
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



    public function getDisponibilite(): ?bool
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(bool $disponibilite): self
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getClub()
    {
        return $this->club;
    }

    /**
     * @param mixed $club
     */
    public function setClub($club): void
    {
        $this->club = $club;
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




}
