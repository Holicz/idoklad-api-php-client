<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice\Response;

use DobryProgramator\iDoklad\Enum\ItemType;
use DobryProgramator\iDoklad\Enum\PriceType;
use DobryProgramator\iDoklad\Enum\VatRateType;
use DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice\Response\Item\Price;
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
     * @Serializer\SerializedName("Id")
     */
    private int $id;

    /**
     * @Serializer\SerializedName("IsTaxMovement")
     */
    private bool $isTaxMovement;

    /**
     * @Serializer\SerializedName("ItemType")
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
     * @Serializer\Type("array<'DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice\Response\Item\Price'>")
     *
     * @var array<int, Price>
     */
    private array $prices = [];

    /**
     * @Serializer\SerializedName("PriceType")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\PriceType'>")
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
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\VatRateType'>")
     */
    private VatRateType $vatRateType;
}
