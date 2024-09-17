<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "test_table")]
class Product
{
    #[ORM\Column(type: "date")]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: "string", length: 10)]
    private ?string $mp = null;

    #[ORM\Id]
    #[ORM\Column(type: "string", length: 32, nullable: true)]
    private ?string $cardId = null;

    #[ORM\Column(type: "decimal", precision: 15, scale: 2, nullable: true)]
    private ?string $revenue = null;

    #[ORM\Column(type: "decimal", precision: 8, scale: 0, nullable: true)]
    private ?string $ordersCount = null;

    #[ORM\Column(type: "decimal", precision: 12, scale: 0, nullable: true)]
    private ?string $adsSpent = null;

    #[ORM\Column(type: "decimal", precision: 10, scale: 2, nullable: true)]
    private ?string $adsOrders = null;

    #[ORM\Column(type: "decimal", precision: 10, scale: 0, nullable: true)]
    private ?string $logistic = null;

    #[ORM\Column(type: "decimal", precision: 10, scale: 2, nullable: true)]
    private ?string $commission = null;

    #[ORM\Column(type: "decimal", precision: 10, scale: 2, nullable: true)]
    private ?string $holdings = null;

    // Getters and Setters

    public function getId(): ?int
    {
        return $this->id;
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

    public function getMp(): ?string
    {
        return $this->mp;
    }

    public function setMp(string $mp): self
    {
        $this->mp = $mp;
        return $this;
    }

    public function getCardId(): ?string
    {
        return $this->cardId;
    }

    public function setCardId(?string $cardId): self
    {
        $this->cardId = $cardId;
        return $this;
    }

    public function getRevenue(): ?string
    {
        return $this->revenue;
    }

    public function setRevenue(?string $revenue): self
    {
        $this->revenue = $revenue;
        return $this;
    }

    public function getOrdersCount(): ?string
    {
        return $this->ordersCount;
    }

    public function setOrdersCount(?string $ordersCount): self
    {
        $this->ordersCount = $ordersCount;
        return $this;
    }

    public function getAdsSpent(): ?string
    {
        return $this->adsSpent;
    }

    public function setAdsSpent(?string $adsSpent): self
    {
        $this->adsSpent = $adsSpent;
        return $this;
    }

    public function getAdsOrders(): ?string
    {
        return $this->adsOrders;
    }

    public function setAdsOrders(?string $adsOrders): self
    {
        $this->adsOrders = $adsOrders;
        return $this;
    }

    public function getLogistic(): ?string
    {
        return $this->logistic;
    }

    public function setLogistic(?string $logistic): self
    {
        $this->logistic = $logistic;
        return $this;
    }

    public function getCommission(): ?string
    {
        return $this->commission;
    }

    public function setCommission(?string $commission): self
    {
        $this->commission = $commission;
        return $this;
    }

    public function getHoldings(): ?string
    {
        return $this->holdings;
    }

    public function setHoldings(?string $holdings): self
    {
        $this->holdings = $holdings;
        return $this;
    }
}