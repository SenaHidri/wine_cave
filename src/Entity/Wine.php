<?php

namespace App\Entity;

use App\Repository\WineRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WineRepository::class)]
class Wine
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $shelf = null;

    #[ORM\Column]
    private ?int $quantity = null;

    #[ORM\ManyToOne(inversedBy: 'wines')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Region $region = null;

    #[ORM\ManyToOne(inversedBy: 'wines')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?Type $type = null;

    #[ORM\ManyToOne(inversedBy: 'wines')]
    #[ORM\JoinColumn(nullable: false, onDelete: 'CASCADE')]
    private ?ProductionYear $productionYear = null;

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

    public function getShelf(): ?int
    {
        return $this->shelf;
    }

    public function setShelf(int $shelf): static
    {
        $this->shelf = $shelf;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getRegion(): ?Region
    {
        return $this->region;
    }

    public function setRegion(?Region $region): static
    {
        $this->region = $region;

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(?Type $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getProductionYear(): ?ProductionYear
    {
        return $this->productionYear;
    }

    public function setProductionYear(?ProductionYear $productionYear): static
    {
        $this->productionYear = $productionYear;

        return $this;
    }
}
