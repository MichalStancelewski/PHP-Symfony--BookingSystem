<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $time = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $additionalMessage = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datetimeCreated = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $datetimeLastEdited = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getAdditionalMessage(): ?string
    {
        return $this->additionalMessage;
    }

    public function setAdditionalMessage(?string $additionalMessage): self
    {
        $this->additionalMessage = $additionalMessage;

        return $this;
    }

    public function getDatetimeCreated(): ?\DateTimeInterface
    {
        return $this->datetimeCreated;
    }

    public function setDatetimeCreated(\DateTimeInterface $datetimeCreated): self
    {
        $this->datetimeCreated = $datetimeCreated;

        return $this;
    }

    public function getDatetimeLastEdited(): ?\DateTimeInterface
    {
        return $this->datetimeLastEdited;
    }

    public function setDatetimeLastEdited(\DateTimeInterface $datetimeLastEdited): self
    {
        $this->datetimeLastEdited = $datetimeLastEdited;

        return $this;
    }
}
