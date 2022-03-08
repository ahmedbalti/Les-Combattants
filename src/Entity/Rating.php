<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\RatingRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=RatingRepository::class)
 */
class Rating
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
    private $nbr_etoiles;

    /**
     * @var Club
     * @ORM\ManyToOne(targetEntity="Club", cascade={"remove", "persist"})
     * @ORM\JoinColumn(name="club", referencedColumnName="id")
     **/
    private $club;

    /**
     * @var Utilisateur
     * @ORM\ManyToOne(targetEntity="Utilisateur", cascade={"remove", "persist"})
     * @ORM\JoinColumn(name="utilisateur", referencedColumnName="id")
     **/
    private $utilisateur;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbrEtoiles(): ?int
    {
        return $this->nbr_etoiles;
    }

    public function setNbrEtoiles(int $nbr_etoiles): self
    {
        $this->nbr_etoiles = $nbr_etoiles;

        return $this;
    }

    /**
     * @return Club
     */
    public function getClub(): Club
    {
        return $this->club;
    }

    /**
     * @param Club $club
     */
    public function setClub(Club $club): void
    {
        $this->club = $club;
    }

    /**
     * @return Utilisateur
     */
    public function getUtilisateur(): Utilisateur
    {
        return $this->utilisateur;
    }

    /**
     * @param Utilisateur $utilisateur
     */
    public function setUtilisateur(Utilisateur $utilisateur): void
    {
        $this->utilisateur = $utilisateur;
    }




}
