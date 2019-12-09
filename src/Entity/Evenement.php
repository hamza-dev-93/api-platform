<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\EvenementRepository")
 */
class Evenement
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datetimeAt;

    /**
     * @ORM\Column(type="integer")
     */
    private $participent;

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

    public function getDatetimeAt(): ?\DateTimeInterface
    {
        return $this->datetimeAt;
    }

    public function setDatetimeAt(\DateTimeInterface $datetimeAt): self
    {
        $this->datetimeAt = $datetimeAt;

        return $this;
    }

    public function getParticipent(): ?int
    {
        return $this->participent;
    }

    public function setParticipent(int $participent): self
    {
        $this->participent = $participent;

        return $this;
    }
}
