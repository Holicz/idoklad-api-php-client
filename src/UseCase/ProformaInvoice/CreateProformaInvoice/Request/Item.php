<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice\Request;

use JMS\Serializer\Annotation as Serializer;

final class Item
{
    /**
     * @Serializer\SerializedName("Amount")
     */
    private float $amount;

    /**
     * @Serializer\SerializedName("Code")
     */
    private ?string $code = null;

    /**
     * @Serializer\SerializedName("IsTaxMovement")
     */
    private bool $isTaxMovement;

    /**
     * @Serializer\SerializedName("Name")
     */
    private string $name;

    /**
     * @Serializer\SerializedName("PriceListItemId")
     */
    private ?int $priceListItemId = null;

    /**
     * @Serializer\SerializedName("PriceType")
     */
    private int $priceType;

    /**
     * @Serializer\SerializedName("Unit")
     */
    private ?string $unit = null;

    /**
     * @Serializer\SerializedName("UnitPrice")
     */
    private float $unitPrice;

    /**
     * @Serializer\SerializedName("VatCodeId")
     */
    private ?int $vatCodeId = null;

    /**
     * @Serializer\SerializedName("VatRateType")
     */
    private int $vatRateType;

    public function __construct(
        float $amount,
        bool $isTaxMovement,
        string $name,
        int $priceType,
        float $unitPrice,
        int $vatRateType
    ) {
        $this->amount = $amount;
        $this->isTaxMovement = $isTaxMovement;
        $this->name = $name;
        $this->priceType = $priceType;
        $this->unitPrice = $unitPrice;
        $this->vatRateType = $vatRateType;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): Item
    {
        $this->code = $code;
        return $this;
    }

    public function isTaxMovement(): bool
    {
        return $this->isTaxMovement;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPriceListItemId(): ?int
    {
        return $this->priceListItemId;
    }

    public function setPriceListItemId(?int $priceListItemId): Item
    {
        $this->priceListItemId = $priceListItemId;
        return $this;
    }

    public function getPriceType(): int
    {
        return $this->priceType;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(?string $unit): Item
    {
        $this->unit = $unit;
        return $this;
    }

    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }

    public function getVatCodeId(): ?int
    {
        return $this->vatCodeId;
    }

    public function setVatCodeId(?int $vatCodeId): Item
    {
        $this->vatCodeId = $vatCodeId;
        return $this;
    }

    public function getVatRateType(): int
    {
        return $this->vatRateType;
    }
}
