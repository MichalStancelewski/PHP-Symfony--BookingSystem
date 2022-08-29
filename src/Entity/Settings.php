<?php

namespace App\Entity;

use App\Repository\SettingsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SettingsRepository::class)]
class Settings
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $isIndexableAll = null;

    #[ORM\Column]
    private ?bool $isIndexableHomepage = null;

    #[ORM\Column]
    private ?bool $isIndexableContact = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $metaTitleHomepage = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $metaTitleContact = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $metaDescriptionHomepage = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $metaDescriptionContact = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $contactEmail = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $contactPhone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageLogo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $imageIcon = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isIsIndexableAll(): ?bool
    {
        return $this->isIndexableAll;
    }

    public function setIsIndexableAll(bool $isIndexableAll): self
    {
        $this->isIndexableAll = $isIndexableAll;

        return $this;
    }

    public function isIsIndexableHomepage(): ?bool
    {
        return $this->isIndexableHomepage;
    }

    public function setIsIndexableHomepage(bool $isIndexableHomepage): self
    {
        $this->isIndexableHomepage = $isIndexableHomepage;

        return $this;
    }

    public function isIsIndexableContact(): ?bool
    {
        return $this->isIndexableContact;
    }

    public function setIsIndexableContact(bool $isIndexableContact): self
    {
        $this->isIndexableContact = $isIndexableContact;

        return $this;
    }

    public function getMetaTitleHomepage(): ?string
    {
        return $this->metaTitleHomepage;
    }

    public function setMetaTitleHomepage(?string $metaTitleHomepage): self
    {
        $this->metaTitleHomepage = $metaTitleHomepage;

        return $this;
    }

    public function getMetaTitleContact(): ?string
    {
        return $this->metaTitleContact;
    }

    public function setMetaTitleContact(?string $metaTitleContact): self
    {
        $this->metaTitleContact = $metaTitleContact;

        return $this;
    }

    public function getMetaDescriptionHomepage(): ?string
    {
        return $this->metaDescriptionHomepage;
    }

    public function setMetaDescriptionHomepage(?string $metaDescriptionHomepage): self
    {
        $this->metaDescriptionHomepage = $metaDescriptionHomepage;

        return $this;
    }

    public function getMetaDescriptionContact(): ?string
    {
        return $this->metaDescriptionContact;
    }

    public function setMetaDescriptionContact(?string $metaDescriptionContact): self
    {
        $this->metaDescriptionContact = $metaDescriptionContact;

        return $this;
    }

    public function getContactEmail(): ?string
    {
        return $this->contactEmail;
    }

    public function setContactEmail(?string $contactEmail): self
    {
        $this->contactEmail = $contactEmail;

        return $this;
    }

    public function getContactPhone(): ?string
    {
        return $this->contactPhone;
    }

    public function setContactPhone(?string $contactPhone): self
    {
        $this->contactPhone = $contactPhone;

        return $this;
    }

    public function getImageLogo(): ?string
    {
        return $this->imageLogo;
    }

    public function setImageLogo(?string $imageLogo): self
    {
        $this->imageLogo = $imageLogo;

        return $this;
    }

    public function getImageIcon(): ?string
    {
        return $this->imageIcon;
    }

    public function setImageIcon(?string $imageIcon): self
    {
        $this->imageIcon = $imageIcon;

        return $this;
    }
}
