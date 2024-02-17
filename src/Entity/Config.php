<?php

namespace App\Entity;

use App\Repository\ConfigRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ConfigRepository::class)]
class Config
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $siteName = null;

    #[ORM\Column(length: 255)]
    private ?string $siteLink = null;

    #[ORM\Column]
    private ?float $CostPerAfiliate = null;

    #[ORM\Column(length: 255)]
    private ?string $API_STRIPE_P1 = null;

    #[ORM\Column(length: 255)]
    private ?string $API_STRIPE_P2 = null;

    #[ORM\Column(length: 255)]
    private ?string $API_PLISIO = null;

    #[ORM\Column(length: 255)]
    private ?string $LogoURL = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSiteName(): ?string
    {
        return $this->siteName;
    }

    public function setSiteName(string $siteName): static
    {
        $this->siteName = $siteName;

        return $this;
    }

    public function getSiteLink(): ?string
    {
        return $this->siteLink;
    }

    public function setSiteLink(string $siteLink): static
    {
        $this->siteLink = $siteLink;

        return $this;
    }

    public function getCostPerAfiliate(): ?float
    {
        return $this->CostPerAfiliate;
    }

    public function setCostPerAfiliate(float $CostPerAfiliate): static
    {
        $this->CostPerAfiliate = $CostPerAfiliate;

        return $this;
    }

    public function getAPISTRIPEP1(): ?string
    {
        return $this->API_STRIPE_P1;
    }

    public function setAPISTRIPEP1(string $API_STRIPE_P1): static
    {
        $this->API_STRIPE_P1 = $API_STRIPE_P1;

        return $this;
    }

    public function getAPISTRIPEP2(): ?string
    {
        return $this->API_STRIPE_P2;
    }

    public function setAPISTRIPEP2(string $API_STRIPE_P2): static
    {
        $this->API_STRIPE_P2 = $API_STRIPE_P2;

        return $this;
    }

    public function getAPIPLISIO(): ?string
    {
        return $this->API_PLISIO;
    }

    public function setAPIPLISIO(string $API_PLISIO): static
    {
        $this->API_PLISIO = $API_PLISIO;

        return $this;
    }

    public function getLogoURL(): ?string
    {
        return $this->LogoURL;
    }

    public function setLogoURL(string $LogoURL): static
    {
        $this->LogoURL = $LogoURL;

        return $this;
    }
}
