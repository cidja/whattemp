<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TempRepository")
 */
class Temp
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $person;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=2)
     */
    private $temperature;

    /**
     * @ORM\Column(type="boolean")
     */
    private $doliprane;

    /**
     * @ORM\Column(type="boolean")
     */
    private $advil;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPerson(): ?string
    {
        return $this->person;
    }

    public function setPerson(string $person): self
    {
        $this->person = $person;

        return $this;
    }

    public function getTemperature(): ?string
    {
        return $this->temperature;
    }

    public function setTemperature(string $temperature): self
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getDoliprane(): ?bool
    {
        return $this->doliprane;
    }

    public function setDoliprane(bool $doliprane): self
    {
        $this->doliprane = $doliprane;

        return $this;
    }

    public function getAdvil(): ?bool
    {
        return $this->advil;
    }

    public function setAdvil(bool $advil): self
    {
        $this->advil = $advil;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
