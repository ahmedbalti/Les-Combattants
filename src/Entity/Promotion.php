<?php

namespace App\Entity;

use App\Repository\PromotionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity(repositoryClass=PromotionRepository::class)
 */
class Promotion
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     * @Assert\Choice({"Cadeau", "Remise"})
     */
    private $Type;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Veuillez ajouter description")
     */
    private $description;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Veuillez ajouter score")
     */
    private $scoreMin;

    /**
     * @ORM\OneToMany(targetEntity=PromotionAffecte::class, mappedBy="idPromo", orphanRemoval=true)
     */
    private $utilisateur;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $title;

    public function __construct()
    {
        $this->utilisateur = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->Type;
    }

    public function setType(?string $Type): self
    {
        $this->Type = $Type;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getScoreMin(): ?int
    {
        return $this->scoreMin;
    }

    public function setScoreMin(int $scoreMin): self
    {
        $this->scoreMin = $scoreMin;

        return $this;
    }

    public function __toString()
    {
        return (string) $this->getId();
    }

    /**
     * @return Collection|PromotionAffecte[]
     */
    public function getUtilisateur(): Collection
    {
        return $this->utilisateur;
    }

    public function addUtilisateur(PromotionAffecte $user): self
    {
        if (!$this->utilisateur->contains($user)) {
            $this->utilisateur[] = $user;
            $user->setIdPromo($this);
        }

        return $this;
    }

    public function removeUtilisateur(PromotionAffecte $user): self
    {
        if ($this->utilisateur->removeElement($user)) {
            // set the owning side to null (unless already changed)
            if ($user->getIdPromo() === $this) {
                $user->setIdPromo(null);
            }
        }

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }
}

/*enum TypePromotion: string
{
    case cadeau = "cadeau";
    case remise = "remise";

}*/
