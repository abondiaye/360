<?php
// src/Entity/AutomatedDiagnostic.php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
class AutomatedDiagnostic
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\OneToOne(targetEntity: SupportCall::class)]
    private SupportCall $supportCall;

    #[ORM\Column(type: 'text')]
    private string $diagnosticResult;

    #[ORM\Column(type: 'datetime')]
    private \DateTime $createdAt;

    // Getters et setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDiagnosticResult(): ?string
    {
        return $this->diagnosticResult;
    }

    public function setDiagnosticResult(string $diagnosticResult): static
    {
        $this->diagnosticResult = $diagnosticResult;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getSupportCall(): ?SupportCall
    {
        return $this->supportCall;
    }

    public function setSupportCall(?SupportCall $supportCall): static
    {
        $this->supportCall = $supportCall;

        return $this;
    }
}
