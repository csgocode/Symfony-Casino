<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Usuario extends \App\Entity\Usuario implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'docIdentidad', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'username', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'apellidos', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'dinero', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'dineroRetenido', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'fechaNacimiento', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'lastLogin', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'estaBaneado', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'ipLastLogin', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'estaVerificado', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'DeniedVerify', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'razonBaneo', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'docimg1', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'docimg2', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'docselfie', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'isAdmin', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'dineroAfiliados', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'sexo', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'Pais', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'Ciudad', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'Direccion', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'CP', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'telefono', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'transacciones', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'afiliados'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'docIdentidad', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'username', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'nombre', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'apellidos', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'dinero', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'dineroRetenido', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'fechaNacimiento', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'lastLogin', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'estaBaneado', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'ipLastLogin', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'estaVerificado', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'DeniedVerify', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'razonBaneo', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'docimg1', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'docimg2', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'docselfie', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'isAdmin', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'dineroAfiliados', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'sexo', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'Pais', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'Ciudad', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'Direccion', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'CP', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'telefono', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'transacciones', '' . "\0" . 'App\\Entity\\Usuario' . "\0" . 'afiliados'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Usuario $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIdentifier', []);

        return parent::getUserIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getDocIdentidad(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocIdentidad', []);

        return parent::getDocIdentidad();
    }

    /**
     * {@inheritDoc}
     */
    public function setDocIdentidad(string $docIdentidad): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDocIdentidad', [$docIdentidad]);

        return parent::setDocIdentidad($docIdentidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername(string $username): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre(string $nombre): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getApellidos(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApellidos', []);

        return parent::getApellidos();
    }

    /**
     * {@inheritDoc}
     */
    public function setApellidos(string $apellidos): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApellidos', [$apellidos]);

        return parent::setApellidos($apellidos);
    }

    /**
     * {@inheritDoc}
     */
    public function getDinero(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDinero', []);

        return parent::getDinero();
    }

    /**
     * {@inheritDoc}
     */
    public function setDinero(int $dinero): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDinero', [$dinero]);

        return parent::setDinero($dinero);
    }

    /**
     * {@inheritDoc}
     */
    public function getDineroRetenido(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDineroRetenido', []);

        return parent::getDineroRetenido();
    }

    /**
     * {@inheritDoc}
     */
    public function setDineroRetenido(int $dineroRetenido): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDineroRetenido', [$dineroRetenido]);

        return parent::setDineroRetenido($dineroRetenido);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaNacimiento(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaNacimiento', []);

        return parent::getFechaNacimiento();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaNacimiento(\DateTimeInterface $fechaNacimiento): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaNacimiento', [$fechaNacimiento]);

        return parent::setFechaNacimiento($fechaNacimiento);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastLogin(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastLogin', []);

        return parent::getLastLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastLogin(?\DateTimeInterface $lastLogin): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastLogin', [$lastLogin]);

        return parent::setLastLogin($lastLogin);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstaBaneado(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstaBaneado', []);

        return parent::getEstaBaneado();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstaBaneado(int $estaBaneado): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstaBaneado', [$estaBaneado]);

        return parent::setEstaBaneado($estaBaneado);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpLastLogin(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpLastLogin', []);

        return parent::getIpLastLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpLastLogin(?string $ipLastLogin): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpLastLogin', [$ipLastLogin]);

        return parent::setIpLastLogin($ipLastLogin);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstaVerificado(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstaVerificado', []);

        return parent::getEstaVerificado();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstaVerificado(int $estaVerificado): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstaVerificado', [$estaVerificado]);

        return parent::setEstaVerificado($estaVerificado);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeniedVerify(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeniedVerify', []);

        return parent::getDeniedVerify();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeniedVerify(?string $DeniedVerify): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeniedVerify', [$DeniedVerify]);

        return parent::setDeniedVerify($DeniedVerify);
    }

    /**
     * {@inheritDoc}
     */
    public function getRazonBaneo(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRazonBaneo', []);

        return parent::getRazonBaneo();
    }

    /**
     * {@inheritDoc}
     */
    public function setRazonBaneo(?string $razonBaneo): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRazonBaneo', [$razonBaneo]);

        return parent::setRazonBaneo($razonBaneo);
    }

    /**
     * {@inheritDoc}
     */
    public function getDocimg1(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocimg1', []);

        return parent::getDocimg1();
    }

    /**
     * {@inheritDoc}
     */
    public function setDocimg1(?string $docimg1): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDocimg1', [$docimg1]);

        return parent::setDocimg1($docimg1);
    }

    /**
     * {@inheritDoc}
     */
    public function getDocimg2(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocimg2', []);

        return parent::getDocimg2();
    }

    /**
     * {@inheritDoc}
     */
    public function setDocimg2(?string $docimg2): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDocimg2', [$docimg2]);

        return parent::setDocimg2($docimg2);
    }

    /**
     * {@inheritDoc}
     */
    public function getDocselfie(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocselfie', []);

        return parent::getDocselfie();
    }

    /**
     * {@inheritDoc}
     */
    public function setDocselfie(?string $docselfie): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDocselfie', [$docselfie]);

        return parent::setDocselfie($docselfie);
    }

    /**
     * {@inheritDoc}
     */
    public function isIsAdmin(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isIsAdmin', []);

        return parent::isIsAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsAdmin(?bool $isAdmin): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsAdmin', [$isAdmin]);

        return parent::setIsAdmin($isAdmin);
    }

    /**
     * {@inheritDoc}
     */
    public function getDineroAfiliados(): ?float
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDineroAfiliados', []);

        return parent::getDineroAfiliados();
    }

    /**
     * {@inheritDoc}
     */
    public function setDineroAfiliados(float $dineroAfiliados): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDineroAfiliados', [$dineroAfiliados]);

        return parent::setDineroAfiliados($dineroAfiliados);
    }

    /**
     * {@inheritDoc}
     */
    public function getSexo(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSexo', []);

        return parent::getSexo();
    }

    /**
     * {@inheritDoc}
     */
    public function setSexo(?string $sexo): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSexo', [$sexo]);

        return parent::setSexo($sexo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPais(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPais', []);

        return parent::getPais();
    }

    /**
     * {@inheritDoc}
     */
    public function setPais(?string $Pais): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPais', [$Pais]);

        return parent::setPais($Pais);
    }

    /**
     * {@inheritDoc}
     */
    public function getCiudad(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCiudad', []);

        return parent::getCiudad();
    }

    /**
     * {@inheritDoc}
     */
    public function setCiudad(?string $Ciudad): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCiudad', [$Ciudad]);

        return parent::setCiudad($Ciudad);
    }

    /**
     * {@inheritDoc}
     */
    public function getDireccion(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDireccion', []);

        return parent::getDireccion();
    }

    /**
     * {@inheritDoc}
     */
    public function setDireccion(?string $Direccion): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDireccion', [$Direccion]);

        return parent::setDireccion($Direccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getCP(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCP', []);

        return parent::getCP();
    }

    /**
     * {@inheritDoc}
     */
    public function setCP(?string $CP): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCP', [$CP]);

        return parent::setCP($CP);
    }

    /**
     * {@inheritDoc}
     */
    public function getTelefono(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTelefono', []);

        return parent::getTelefono();
    }

    /**
     * {@inheritDoc}
     */
    public function setTelefono(?string $telefono): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTelefono', [$telefono]);

        return parent::setTelefono($telefono);
    }

    /**
     * {@inheritDoc}
     */
    public function getTransacciones(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTransacciones', []);

        return parent::getTransacciones();
    }

    /**
     * {@inheritDoc}
     */
    public function addTransaccione(\App\Entity\Transacciones $transaccione): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTransaccione', [$transaccione]);

        return parent::addTransaccione($transaccione);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTransaccione(\App\Entity\Transacciones $transaccione): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTransaccione', [$transaccione]);

        return parent::removeTransaccione($transaccione);
    }

    /**
     * {@inheritDoc}
     */
    public function getAfiliados(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAfiliados', []);

        return parent::getAfiliados();
    }

    /**
     * {@inheritDoc}
     */
    public function addAfiliado(\App\Entity\Afiliados $afiliado): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAfiliado', [$afiliado]);

        return parent::addAfiliado($afiliado);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAfiliado(\App\Entity\Afiliados $afiliado): static
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAfiliado', [$afiliado]);

        return parent::removeAfiliado($afiliado);
    }

}
