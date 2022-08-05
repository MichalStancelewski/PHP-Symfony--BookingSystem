<?php

namespace App\Entity;

use App\Repository\ServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(length: 5)]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $shortDescription = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $longDescription = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $metaTitle = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $metaDescription = null;

    #[ORM\Column]
    private ?bool $isIndexable = null;

    #[ORM\Column]
    private ?int $timespan = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
    private ?string $priceRegular = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, nullable: true)]
    private ?string $priceSpecial = null;

    #[ORM\OneToMany(mappedBy: 'service', targetEntity: Review::class, orphanRemoval: true)]
    private Collection $reviews;

    #[ORM\Column(length: 255)]
    private ?string $ManyToOne = null;

    #[ORM\ManyToOne(inversedBy: 'services')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ServiceCategories $category = null;

    public function __construct()
    {
        $this->reviews = new ArrayCollection();
        $this->category = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(?string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function getLongDescription(): ?string
    {
        return $this->longDescription;
    }

    public function setLongDescription(?string $longDescription): self
    {
        $this->longDescription = $longDescription;

        return $this;
    }

    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    public function setMetaTitle(?string $metaTitle): self
    {
        $this->metaTitle = $metaTitle;

        return $this;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(?string $metaDescription): self
    {
        $this->metaDescription = $metaDescription;

        return $this;
    }

    public function isIsIndexable(): ?bool
    {
        return $this->isIndexable;
    }

    public function setIsIndexable(bool $isIndexable): self
    {
        $this->isIndexable = $isIndexable;

        return $this;
    }

    public function getTimespan(): ?int
    {
        return $this->timespan;
    }

    public function setTimespan(int $timespan): self
    {
        $this->timespan = $timespan;

        return $this;
    }

    public function getPriceRegular(): ?string
    {
        return $this->priceRegular;
    }

    public function setPriceRegular(string $priceRegular): self
    {
        $this->priceRegular = $priceRegular;

        return $this;
    }

    public function getPriceSpecial(): ?string
    {
        return $this->priceSpecial;
    }

    public function setPriceSpecial(?string $priceSpecial): self
    {
        $this->priceSpecial = $priceSpecial;

        return $this;
    }

    /**
     * @return Collection<int, Review>
     */
    public function getReviews(): Collection
    {
        return $this->reviews;
    }

    public function addReview(Review $review): self
    {
        if (!$this->reviews->contains($review)) {
            $this->reviews[] = $review;
            $review->setService($this);
        }

        return $this;
    }

    public function removeReview(Review $review): self
    {
        if ($this->reviews->removeElement($review)) {
            // set the owning side to null (unless already changed)
            if ($review->getService() === $this) {
                $review->setService(null);
            }
        }

        return $this;
    }

    public function getManyToOne(): ?string
    {
        return $this->ManyToOne;
    }

    public function setManyToOne(string $ManyToOne): self
    {
        $this->ManyToOne = $ManyToOne;

        return $this;
    }

    public function getCategory(): ?ServiceCategories
    {
        return $this->category;
    }

    public function setCategory(?ServiceCategories $category): self
    {
        $this->category = $category;

        return $this;
    }

}
