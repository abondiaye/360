<?php
// src/Entity/SupportCall.php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
class SupportCall
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\ManyToOne(targetEntity: User::class)]
    private User $client;

    #[ORM\ManyToOne(targetEntity: User::class)]
    private User $technician;

    #[ORM\Column(type: 'text')]
    private string $problemDescription;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTime $callStartTime;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTime $callEndTime;

    #[ORM\Column(type: 'string', length: 20)]
    private string $status;

    // Getters et setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProblemDescription(): ?string
    {
        return $this->problemDescription;
    }

    public function setProblemDescription(string $problemDescription): static
    {
        $this->problemDescription = $problemDescription;

        return $this;
    }

    public function getCallStartTime(): ?\DateTimeInterface
    {
        return $this->callStartTime;
    }

    public function setCallStartTime(?\DateTimeInterface $callStartTime): static
    {
        $this->callStartTime = $callStartTime;

        return $this;
    }

    public function getCallEndTime(): ?\DateTimeInterface
    {
        return $this->callEndTime;
    }

    public function setCallEndTime(?\DateTimeInterface $callEndTime): static
    {
        $this->callEndTime = $callEndTime;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getClient(): ?User
    {
        return $this->client;
    }

    public function setClient(?User $client): static
    {
        $this->client = $client;

        return $this;
    }

    public function getTechnician(): ?User
    {
        return $this->technician;
    }

    public function setTechnician(?User $technician): static
    {
        $this->technician = $technician;

        return $this;
    }
}
