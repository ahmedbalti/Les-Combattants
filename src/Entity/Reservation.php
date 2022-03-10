<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 * @ApiResource()
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="time")
     */
    private $heure;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nbrPersonnes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @var Table
     * @ORM\ManyToOne(targetEntity="Table", cascade={"persist"})
     * @ORM\JoinColumn(name="tabl", referencedColumnName="id")
     **/
    private $tabl;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * @param mixed $heure
     */
    public function setHeure($heure): void
    {
        $this->heure = $heure;
    }

    /**
     * @return mixed
     */
    public function getNbrPersonnes()
    {
        return $this->nbrPersonnes;
    }

    /**
     * @param mixed $nbrPersonnes
     */
    public function setNbrPersonnes($nbrPersonnes): void
    {
        $this->nbrPersonnes = $nbrPersonnes;
    }



    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return Table
     */
    public function getTabl(): Table
    {
        return $this->tabl;
    }

    /**
     * @param Table $tabl
     */
    public function setTabl(Table $tabl): void
    {
        $this->tabl = $tabl;
    }




}
