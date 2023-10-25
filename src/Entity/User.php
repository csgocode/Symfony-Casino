<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 255)]
    private ?string $doc_identidad = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $apellido1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $apellido2 = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lastlogin = null;

    #[ORM\Column(nullable: true)]
    private ?float $dinero = null;

    #[ORM\Column(nullable: true)]
    private ?int $estaBaneado = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $iplastlogin = null;

    #[ORM\Column(nullable: true)]
    private ?int $estaVerificado = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $razonBaneo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $docimg1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $docimg2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $docselfie = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $fechaNacimiento = null;

    #[ORM\Column]
    private ?bool $isAdmin = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getDocIdentidad(): ?string
    {
        return $this->doc_identidad;
    }

    public function setDocIdentidad(string $doc_identidad): static
    {
        $this->doc_identidad = $doc_identidad;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellido1(): ?string
    {
        return $this->apellido1;
    }

    public function setApellido1(string $apellido1): static
    {
        $this->apellido1 = $apellido1;

        return $this;
    }

    public function getApellido2(): ?string
    {
        return $this->apellido2;
    }

    public function setApellido2(?string $apellido2): static
    {
        $this->apellido2 = $apellido2;

        return $this;
    }

    public function getLastlogin(): ?\DateTimeInterface
    {
        return $this->lastlogin;
    }

    public function setLastlogin(?\DateTimeInterface $lastlogin): static
    {
        $this->lastlogin = $lastlogin;

        return $this;
    }

    public function getDinero(): ?float
    {
        return $this->dinero;
    }

    public function setDinero(?float $dinero): static
    {
        $this->dinero = $dinero;

        return $this;
    }

    public function getEstaBaneado(): ?int
    {
        return $this->estaBaneado;
    }

    public function setEstaBaneado(?int $estaBaneado): static
    {
        $this->estaBaneado = $estaBaneado;

        return $this;
    }

    public function getIplastlogin(): ?string
    {
        return $this->iplastlogin;
    }

    public function setIplastlogin(?string $iplastlogin): static
    {
        $this->iplastlogin = $iplastlogin;

        return $this;
    }

    public function getEstaVerificado(): ?int
    {
        return $this->estaVerificado;
    }

    public function setEstaVerificado(?int $estaVerificado): static
    {
        $this->estaVerificado = $estaVerificado;

        return $this;
    }

    public function getRazonBaneo(): ?string
    {
        return $this->razonBaneo;
    }

    public function setRazonBaneo(?string $razonBaneo): static
    {
        $this->razonBaneo = $razonBaneo;

        return $this;
    }

    public function getDocimg1(): ?string
    {
        return $this->docimg1;
    }

    public function setDocimg1(?string $docimg1): static
    {
        $this->docimg1 = $docimg1;

        return $this;
    }

    public function getDocimg2(): ?string
    {
        return $this->docimg2;
    }

    public function setDocimg2(?string $docimg2): static
    {
        $this->docimg2 = $docimg2;

        return $this;
    }

    public function getDocselfie(): ?string
    {
        return $this->docselfie;
    }

    public function setDocselfie(?string $docselfie): static
    {
        $this->docselfie = $docselfie;

        return $this;
    }

    public function getFechaNacimiento(): ?\DateTimeInterface
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento(?\DateTimeInterface $fechaNacimiento): static
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    public function isIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(bool $isAdmin): static
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }
}
