<?php

namespace App\Entity;

use App\Repository\PlayersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlayersRepository::class)]
class Players
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $money = null;

    #[ORM\Column]
    private ?int $healthPoints = null;

    #[ORM\Column(length: 255)]
    private ?string $playerType = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMoney(): ?int
    {
        return $this->money;
    }

    public function setMoney(?int $money): self
    {
        $this->money = $money;

        return $this;
    }

    public function getHealthPoints(): ?int
    {
        return $this->healthPoints;
    }

    public function setHealthPoints(int $healthPoints): self
    {
        $this->healthPoints = $healthPoints;

        return $this;
    }

    public function getPlayerType(): ?string
    {
        return $this->playerType;
    }

    public function setPlayerType(string $playerType): self
    {
        $this->playerType = $playerType;

        return $this;
    }
}
