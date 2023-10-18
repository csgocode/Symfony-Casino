<?php

namespace App\Entity;

use App\Repository\UsuariosRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsuariosRepository::class)]
class Usuarios
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $DOC_IDENTIDAD = null;

    #[ORM\Column(length: 255)]
    private ?string $NOMBRE = null;

    #[ORM\Column(length: 255)]
    private ?string $APELLIDO1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $APELLIDO2 = null;

    #[ORM\Column(length: 255)]
    private ?string $EMAIL = null;

    #[ORM\Column(length: 255)]
    private ?string $CONTRASENA = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $LastLogin = null;

    #[ORM\Column]
    private ?float $DINERO = null;

    #[ORM\Column]
    private ?int $estaBaneado = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $IPLastLogin = null;

    #[ORM\Column]
    private ?int $estaVerificado = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DOC_IMG_1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DOC_IMG_2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DOC_SELFIE = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDOCIDENTIDAD(): ?string
    {
        return $this->DOC_IDENTIDAD;
    }

    public function setDOCIDENTIDAD(string $DOC_IDENTIDAD): static
    {
        $this->DOC_IDENTIDAD = $DOC_IDENTIDAD;

        return $this;
    }

    public function getNOMBRE(): ?string
    {
        return $this->NOMBRE;
    }

    public function setNOMBRE(string $NOMBRE): static
    {
        $this->NOMBRE = $NOMBRE;

        return $this;
    }

    public function getAPELLIDO1(): ?string
    {
        return $this->APELLIDO1;
    }

    public function setAPELLIDO1(string $APELLIDO1): static
    {
        $this->APELLIDO1 = $APELLIDO1;

        return $this;
    }

    public function getAPELLIDO2(): ?string
    {
        return $this->APELLIDO2;
    }

    public function setAPELLIDO2(?string $APELLIDO2): static
    {
        $this->APELLIDO2 = $APELLIDO2;

        return $this;
    }

    public function getEMAIL(): ?string
    {
        return $this->EMAIL;
    }

    public function setEMAIL(string $EMAIL): static
    {
        $this->EMAIL = $EMAIL;

        return $this;
    }

    public function getCONTRASENA(): ?string
    {
        return $this->CONTRASENA;
    }

    public function setCONTRASENA(string $CONTRASENA): static
    {
        $this->CONTRASENA = $CONTRASENA;

        return $this;
    }

    public function getLastLogin(): ?\DateTimeInterface
    {
        return $this->LastLogin;
    }

    public function setLastLogin(?\DateTimeInterface $LastLogin): static
    {
        $this->LastLogin = $LastLogin;

        return $this;
    }

    public function getDINERO(): ?float
    {
        return $this->DINERO;
    }

    public function setDINERO(float $DINERO): static
    {
        $this->DINERO = $DINERO;

        return $this;
    }

    public function getEstaBaneado(): ?int
    {
        return $this->estaBaneado;
    }

    public function setEstaBaneado(int $estaBaneado): static
    {
        $this->estaBaneado = $estaBaneado;

        return $this;
    }

    public function getIPLastLogin(): ?string
    {
        return $this->IPLastLogin;
    }

    public function setIPLastLogin(?string $IPLastLogin): static
    {
        $this->IPLastLogin = $IPLastLogin;

        return $this;
    }

    public function getEstaVerificado(): ?int
    {
        return $this->estaVerificado;
    }

    public function setEstaVerificado(int $estaVerificado): static
    {
        $this->estaVerificado = $estaVerificado;

        return $this;
    }

    public function getDOCIMG1(): ?string
    {
        return $this->DOC_IMG_1;
    }

    public function setDOCIMG1(?string $DOC_IMG_1): static
    {
        $this->DOC_IMG_1 = $DOC_IMG_1;

        return $this;
    }

    public function getDOCIMG2(): ?string
    {
        return $this->DOC_IMG_2;
    }

    public function setDOCIMG2(?string $DOC_IMG_2): static
    {
        $this->DOC_IMG_2 = $DOC_IMG_2;

        return $this;
    }

    public function getDOCSELFIE(): ?string
    {
        return $this->DOC_SELFIE;
    }

    public function setDOCSELFIE(?string $DOC_SELFIE): static
    {
        $this->DOC_SELFIE = $DOC_SELFIE;

        return $this;
    }
}
