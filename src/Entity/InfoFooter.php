<?php

namespace App\Entity;

use App\Repository\InfoFooterRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfoFooterRepository::class)]
class InfoFooter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $logoFooter = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $content = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $ligne1 = null;

    #[ORM\Column(length: 255)]
    private ?string $ligne2 = null;

    #[ORM\Column(length: 255)]
    private ?string $ligne3 = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogoFooter(): ?string
    {
        return $this->logoFooter;
    }

    public function setLogoFooter(string $logoFooter): static
    {
        $this->logoFooter = $logoFooter;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
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

    public function getLigne1(): ?string
    {
        return $this->ligne1;
    }

    public function setLigne1(string $ligne1): static
    {
        $this->ligne1 = $ligne1;

        return $this;
    }

    public function getLigne2(): ?string
    {
        return $this->ligne2;
    }

    public function setLigne2(string $ligne2): static
    {
        $this->ligne2 = $ligne2;

        return $this;
    }

    public function getLigne3(): ?string
    {
        return $this->ligne3;
    }

    public function setLigne3(string $ligne3): static
    {
        $this->ligne3 = $ligne3;

        return $this;
    }
}
