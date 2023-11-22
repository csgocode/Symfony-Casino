<?php

namespace App\Entity;

use App\Repository\UsuarioRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UsuarioRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class Usuario implements UserInterface, PasswordAuthenticatedUserInterface
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
    private ?string $docIdentidad = null;

    #[ORM\Column(length: 255)]
    private ?string $username = null;

    #[ORM\Column(length: 255)]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    private ?string $apellidos = null;

    #[ORM\Column]
    private ?int $dinero = null;

    #[ORM\Column]
    private ?int $dineroRetenido = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fechaNacimiento = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lastLogin = null;

    #[ORM\Column]
    private ?int $estaBaneado = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ipLastLogin = null;

    #[ORM\Column]
    private ?int $estaVerificado = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $DeniedVerify = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $razonBaneo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $docimg1 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $docimg2 = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $docselfie = null;

    #[ORM\Column(nullable: true)]
    private ?bool $isAdmin = null;

    #[ORM\Column]
    private ?float $dineroAfiliados = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sexo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Pais = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Ciudad = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Direccion = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $CP = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $telefono = null;

    #[ORM\OneToMany(mappedBy: 'userid', targetEntity: Transacciones::class)]
    private Collection $transacciones;

    public function __construct()
    {
        $this->transacciones = new ArrayCollection();
    }

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
        return $this->docIdentidad;
    }

    public function setDocIdentidad(string $docIdentidad): static
    {
        $this->docIdentidad = $docIdentidad;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): static
    {
        $this->username = $username;

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

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): static
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getDinero(): ?int
    {
        return $this->dinero;
    }

    public function setDinero(int $dinero): static
    {
        $this->dinero = $dinero;

        return $this;
    }

    public function getDineroRetenido(): ?int
    {
        return $this->dineroRetenido;
    }

    public function setDineroRetenido(int $dineroRetenido): static
    {
        $this->dineroRetenido = $dineroRetenido;

        return $this;
    }

    public function getFechaNacimiento(): ?\DateTimeInterface
    {
        return $this->fechaNacimiento;
    }

    public function setFechaNacimiento(\DateTimeInterface $fechaNacimiento): static
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    public function getLastLogin(): ?\DateTimeInterface
    {
        return $this->lastLogin;
    }

    public function setLastLogin(?\DateTimeInterface $lastLogin): static
    {
        $this->lastLogin = $lastLogin;

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

    public function getIpLastLogin(): ?string
    {
        return $this->ipLastLogin;
    }

    public function setIpLastLogin(?string $ipLastLogin): static
    {
        $this->ipLastLogin = $ipLastLogin;

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

    public function getDeniedVerify(): ?string
    {
        return $this->DeniedVerify;
    }

    public function setDeniedVerify(?string $DeniedVerify): static
    {
        $this->DeniedVerify = $DeniedVerify;

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

    public function isIsAdmin(): ?bool
    {
        return $this->isAdmin;
    }

    public function setIsAdmin(?bool $isAdmin): static
    {
        $this->isAdmin = $isAdmin;

        return $this;
    }

    public function getDineroAfiliados(): ?float
    {
        return $this->dineroAfiliados;
    }

    public function setDineroAfiliados(float $dineroAfiliados): static
    {
        $this->dineroAfiliados = $dineroAfiliados;

        return $this;
    }

    public function getSexo(): ?string
    {
        return $this->sexo;
    }

    public function setSexo(?string $sexo): static
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getPais(): ?string
    {
        return $this->Pais;
    }

    public function setPais(?string $Pais): static
    {
        $this->Pais = $Pais;

        return $this;
    }

    public function getCiudad(): ?string
    {
        return $this->Ciudad;
    }

    public function setCiudad(?string $Ciudad): static
    {
        $this->Ciudad = $Ciudad;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->Direccion;
    }

    public function setDireccion(?string $Direccion): static
    {
        $this->Direccion = $Direccion;

        return $this;
    }

    public function getCP(): ?string
    {
        return $this->CP;
    }

    public function setCP(?string $CP): static
    {
        $this->CP = $CP;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): static
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * @return Collection<int, Transacciones>
     */
    public function getTransacciones(): Collection
    {
        return $this->transacciones;
    }

    public function addTransaccione(Transacciones $transaccione): static
    {
        if (!$this->transacciones->contains($transaccione)) {
            $this->transacciones->add($transaccione);
            $transaccione->setUserid($this);
        }

        return $this;
    }

    public function removeTransaccione(Transacciones $transaccione): static
    {
        if ($this->transacciones->removeElement($transaccione)) {
            // set the owning side to null (unless already changed)
            if ($transaccione->getUserid() === $this) {
                $transaccione->setUserid(null);
            }
        }

        return $this;
    }
}
