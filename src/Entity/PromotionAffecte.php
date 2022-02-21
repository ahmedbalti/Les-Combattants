<?php

namespace App\Entity;

use App\Repository\PromotionAffecteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PromotionAffecteRepository::class)
 */
class PromotionAffecte
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
    private $delai;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="promotion")
     * @ORM\JoinColumn(nullable=false)
     */
    private $idUser;

    /**
     * @ORM\ManyToOne(targetEntity=Promotion::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $idPromo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDelai(): ?\DateTimeInterface
    {
        return $this->delai;
    }

    public function setDelai(\DateTimeInterface $delai): self
    {
        $this->delai = $delai;

        return $this;
    }

    public function getIdUser(): ?Utilisateur
    {
        return $this->idUser;
    }

    public function setIdUser(?Utilisateur $idUser): self
    {
        $this->idUser = $idUser;

        return $this;
    }

    public function getIdPromo(): ?Promotion
    {
        return $this->idPromo;
    }

    public function setIdPromo(?Promotion $idPromo): self
    {
        $this->idPromo = $idPromo;

        return $this;
    }

}
