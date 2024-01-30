<?php

namespace App\Entity;

use App\Repository\ReseauSocialRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReseauSocialRepository::class)]
class ReseauSocial
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $icon = null;

    #[ORM\OneToMany(mappedBy: 'reseauSocial', targetEntity: PersonnelReseauSocial::class)]
    private Collection $personnelReseauSocials;

    public function __construct()
    {
        $this->personnelReseauSocials = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(string $icon): static
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * @return Collection<int, PersonnelReseauSocial>
     */
    public function getPersonnelReseauSocials(): Collection
    {
        return $this->personnelReseauSocials;
    }

    public function addPersonnelReseauSocial(PersonnelReseauSocial $personnelReseauSocial): static
    {
        if (!$this->personnelReseauSocials->contains($personnelReseauSocial)) {
            $this->personnelReseauSocials->add($personnelReseauSocial);
            $personnelReseauSocial->setReseauSocial($this);
        }

        return $this;
    }

    public function removePersonnelReseauSocial(PersonnelReseauSocial $personnelReseauSocial): static
    {
        if ($this->personnelReseauSocials->removeElement($personnelReseauSocial)) {
            // set the owning side to null (unless already changed)
            if ($personnelReseauSocial->getReseauSocial() === $this) {
                $personnelReseauSocial->setReseauSocial(null);
            }
        }

        return $this;
    }
}
