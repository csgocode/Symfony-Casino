<?php

namespace App\Entity;

use App\Repository\TransaccionesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TransaccionesRepository::class)]
class Transacciones
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Tipo = null;

    #[ORM\Column]
    private ?float $CantidadEUR = null;

    #[ORM\Column]
    private ?bool $Autorizacion = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $FechaInicio = null;

    #[ORM\Column]
    private ?bool $Completada = null;

    #[ORM\ManyToOne(inversedBy: 'transacciones')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Usuario $userid = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?int
    {
        return $this->Tipo;
    }

    public function setTipo(int $Tipo): static
    {
        $this->Tipo = $Tipo;

        return $this;
    }

    public function getCantidadEUR(): ?float
    {
        return $this->CantidadEUR;
    }

    public function setCantidadEUR(float $CantidadEUR): static
    {
        $this->CantidadEUR = $CantidadEUR;

        return $this;
    }

    public function isAutorizacion(): ?bool
    {
        return $this->Autorizacion;
    }

    public function setAutorizacion(bool $Autorizacion): static
    {
        $this->Autorizacion = $Autorizacion;

        return $this;
    }

    public function getFechaInicio(): ?\DateTimeInterface
    {
        return $this->FechaInicio;
    }

    public function setFechaInicio(\DateTimeInterface $FechaInicio): static
    {
        $this->FechaInicio = $FechaInicio;

        return $this;
    }

    public function isCompletada(): ?bool
    {
        return $this->Completada;
    }

    public function setCompletada(bool $Completada): static
    {
        $this->Completada = $Completada;

        return $this;
    }

    public function getUserid(): ?Usuario
    {
        return $this->userid;
    }

    public function setUserid(?Usuario $userid): static
    {
        $this->userid = $userid;

        return $this;
    }
}
