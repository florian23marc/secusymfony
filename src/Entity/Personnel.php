<?php

namespace App\Entity;

use App\Repository\PersonnelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PersonnelRepository::class)]
class Personnel
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $subtitle = null;

    #[ORM\Column(length: 255)]
    private ?string $officerName = null;

    #[ORM\Column(length: 255)]
    private ?string $designation = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\OneToMany(mappedBy: 'personnel', targetEntity: PersonnelReseauSocial::class)]
    private Collection $personnelReseauSocials;

    #[ORM\Column(length: 255)]
    private ?string $illustration = null;

    public function __construct()
    {
        $this->personnelReseauSocials = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(string $subtitle): static
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getOfficerName(): ?string
    {
        return $this->officerName;
    }

    public function setOfficerName(string $officerName): static
    {
        $this->officerName = $officerName;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(string $designation): static
    {
        $this->designation = $designation;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

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
            $personnelReseauSocial->setPersonnel($this);
        }

        return $this;
    }

    public function removePersonnelReseauSocial(PersonnelReseauSocial $personnelReseauSocial): static
    {
        if ($this->personnelReseauSocials->removeElement($personnelReseauSocial)) {
            // set the owning side to null (unless already changed)
            if ($personnelReseauSocial->getPersonnel() === $this) {
                $personnelReseauSocial->setPersonnel(null);
            }
        }

        return $this;
    }

    public function getIllustration(): ?string
    {
        return $this->illustration;
    }

    public function setIllustration(string $illustration): static
    {
        $this->illustration = $illustration;

        return $this;
    }
}
