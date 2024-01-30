<?php

namespace App\Entity;

use App\Repository\BlogRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BlogRepository::class)]
class Blog
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
    private ?string $illustration = null;

    #[ORM\Column(length: 255)]
    private ?string $illustrationTitle = null;

    #[ORM\Column(length: 255)]
    private ?string $iconLink = null;

    #[ORM\Column(length: 255)]
    private ?string $authorIcon = null;

    #[ORM\Column(length: 255)]
    private ?string $category = null;

    #[ORM\Column(length: 255)]
    private ?string $iconCategory = null;

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

    public function getIllustration(): ?string
    {
        return $this->illustration;
    }

    public function setIllustration(string $illustration): static
    {
        $this->illustration = $illustration;

        return $this;
    }

    public function getIllustrationTitle(): ?string
    {
        return $this->illustrationTitle;
    }

    public function setIllustrationTitle(string $illustrationTitle): static
    {
        $this->illustrationTitle = $illustrationTitle;

        return $this;
    }

    public function getIconLink(): ?string
    {
        return $this->iconLink;
    }

    public function setIconLink(string $iconLink): static
    {
        $this->iconLink = $iconLink;

        return $this;
    }

    public function getAuthorIcon(): ?string
    {
        return $this->authorIcon;
    }

    public function setAuthorIcon(string $authorIcon): static
    {
        $this->authorIcon = $authorIcon;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getIconCategory(): ?string
    {
        return $this->iconCategory;
    }

    public function setIconCategory(string $iconCategory): static
    {
        $this->iconCategory = $iconCategory;

        return $this;
    }
}
