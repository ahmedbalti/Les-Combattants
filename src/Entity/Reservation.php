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
     * @ORM\Column(type="float")
     */
    private $nbrPersonnes;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @var Table
     * @ORM\ManyToOne(targetEntity="Table", cascade={"remove", "persist"})
     * @ORM\JoinColumn(name="tabl", referencedColumnName="id", onDelete="CASCADE")
     **/
    private $tabl;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getHeure(): ?\DateTimeInterface
    {
        return $this->heure;
    }

    public function setHeure(\DateTimeInterface $heure): self
    {
        $this->heure = $heure;

        return $this;
    }

    public function getNbrPersonnes(): ?int
    {
        return $this->nbrPersonnes;
    }

    public function setNbrPersonnes(int $nbrPersonnes): self
    {
        $this->nbrPersonnes = $nbrPersonnes;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
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
