<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Invoice\NewInvoice\Response;

use DobryProgramator\iDoklad\Enum\ItemType;
use DobryProgramator\iDoklad\Enum\PriceType;
use DobryProgramator\iDoklad\Enum\VatRateType;
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
    private string $code;

    /**
     * @Serializer\SerializedName("DiscountName")
     */
    private string $discountName;

    /**
     * @Serializer\SerializedName("DiscountPercentage")
     */
    private float $discountPercentage;

    /**
     * @Serializer\SerializedName("Id")
     */
    private int $id;

    /**
     * @Serializer\SerializedName("IsTaxMovement")
     */
    private bool $isTaxMovement;

    /**
     * @Serializer\SerializedName("ItemType")
     * @Serializer\Type("enum")
     */
    private ItemType $itemType;

    /**
     * @Serializer\SerializedName("Name")
     */
    private string $name;

    /**
     * @Serializer\SerializedName("PriceListItemId")
     */
    private int $priceListItemId;

    /**
     * @Serializer\SerializedName("Prices")
     */
    private ItemPrices $prices;

    /**
     * @Serializer\SerializedName("PriceType")
     * @Serializer\Type("enum")
     */
    private PriceType $priceType;

    /**
     * @Serializer\SerializedName("Unit")
     */
    private string $unit;

    /**
     * @Serializer\SerializedName("VatCodeId")
     */
    private int $vatCodeId;

    /**
     * @Serializer\SerializedName("VatRate")
     */
    private float $vatRate;

    /**
     * @Serializer\SerializedName("VatRateType")
     * @Serializer\Type("enum")
     */
    private VatRateType $vatRateType;

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getDiscountName(): string
    {
        return $this->discountName;
    }

    public function getDiscountPercentage(): float
    {
        return $this->discountPercentage;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function isTaxMovement(): bool
    {
        return $this->isTaxMovement;
    }

    public function getItemType(): ItemType
    {
        return $this->itemType;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPriceListItemId(): int
    {
        return $this->priceListItemId;
    }

    public function getPrices(): ItemPrices
    {
        return $this->prices;
    }

    public function getPriceType(): PriceType
    {
        return $this->priceType;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }

    public function getVatCodeId(): int
    {
        return $this->vatCodeId;
    }

    public function getVatRate(): float
    {
        return $this->vatRate;
    }

    public function getVatRateType(): VatRateType
    {
        return $this->vatRateType;
    }
}
