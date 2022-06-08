<?php

namespace App\Entity;

use App\Repository\AppRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: AppRepository::class)]
#[ApiResource]
class App
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'string', length: 100)]
    private $required_role;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getRequiredRole(): ?string
    {
        return $this->required_role;
    }

    public function setRequiredRole(string $required_role): self
    {
        $this->required_role = $required_role;

        return $this;
    }
}
