<?php

namespace App\Entity;

use App\Repository\AfiliadosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AfiliadosRepository::class)]
class Afiliados
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'afiliados')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Usuario $invitadoUser = null;

    #[ORM\ManyToOne(inversedBy: 'afiliados')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Usuario $afiliadoUser = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $fechaRegistro = null;

    #[ORM\Column]
    private ?int $level = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInvitadoUser(): ?Usuario
    {
        return $this->invitadoUser;
    }

    public function setInvitadoUser(?Usuario $invitadoUser): static
    {
        $this->invitadoUser = $invitadoUser;

        return $this;
    }

    public function getAfiliadoUser(): ?Usuario
    {
        return $this->afiliadoUser;
    }

    public function setAfiliadoUser(?Usuario $afiliadoUser): static
    {
        $this->afiliadoUser = $afiliadoUser;

        return $this;
    }

    public function getFechaRegistro(): ?\DateTimeInterface
    {
        return $this->fechaRegistro;
    }

    public function setFechaRegistro(\DateTimeInterface $fechaRegistro): static
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): static
    {
        $this->level = $level;

        return $this;
    }
}
