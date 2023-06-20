<?php

namespace App\Entity;

use App\Repository\ArtworkRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArtworkRepository::class)]
class Artwork
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $Description = null;

    #[ORM\Column(length: 255)]
    private ?string $Technique = null;

    #[ORM\Column(length: 255)]
    private ?string $Medium = null;

    #[ORM\Column(length: 255)]
    private ?string $Dimensions = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $Price = null;

    #[ORM\ManyToOne(inversedBy: 'artworks')]
    private ?Artist $fk_Artist = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): static
    {
        $this->Title = $Title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getTechnique(): ?string
    {
        return $this->Technique;
    }

    public function setTechnique(string $Technique): static
    {
        $this->Technique = $Technique;

        return $this;
    }

    public function getMedium(): ?string
    {
        return $this->Medium;
    }

    public function setMedium(string $Medium): static
    {
        $this->Medium = $Medium;

        return $this;
    }

    public function getDimensions(): ?string
    {
        return $this->Dimensions;
    }

    public function setDimensions(string $Dimensions): static
    {
        $this->Dimensions = $Dimensions;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->Price;
    }

    public function setPrice(string $Price): static
    {
        $this->Price = $Price;

        return $this;
    }

    public function getFkArtist(): ?Artist
    {
        return $this->fk_Artist;
    }

    public function setFkArtist(?Artist $fk_Artist): static
    {
        $this->fk_Artist = $fk_Artist;

        return $this;
    }
}
