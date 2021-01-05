<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Invoice\NewInvoice\Response;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;

final class ItemPrices
{
    /**
     * @Serializer\SerializedName("TotalVat")
     * @Type("float")
     */
    private float $totalVat;

    /**
     * @Serializer\SerializedName("TotalVatBeforeDiscount")
     * @Type("float")
     */
    private float $totalVatBeforeDiscount;

    /**
     * @Serializer\SerializedName("TotalVatHc")
     * @Type("float")
     */
    private float $totalVatHc;

    /**
     * @Serializer\SerializedName("TotalWithoutVat")
     * @Type("float")
     */
    private float $totalWithoutVat;

    /**
     * @Serializer\SerializedName("TotalWithoutVatBeforeDiscount")
     * @Type("float")
     */
    private float $totalWithoutVatBeforeDiscount;

    /**
     * @Serializer\SerializedName("TotalWithoutVatHc")
     * @Type("float")
     */
    private float $totalWithoutVatHc;

    /**
     * @Serializer\SerializedName("TotalWithVat")
     * @Type("float")
     */
    private float $totalWithVat;

    /**
     * @Serializer\SerializedName("TotalWithVatBeforeDiscount")
     * @Type("float")
     */
    private float $totalWithVatBeforeDiscount;

    /**
     * @Serializer\SerializedName("TotalWithVatHc")
     * @Type("float")
     */
    private float $totalWithVatHc;

    /**
     * @Serializer\SerializedName("UnitPrice")
     * @Type("float")
     */
    private float $unitPrice;

    public function getTotalVat(): float
    {
        return $this->totalVat;
    }

    public function getTotalVatBeforeDiscount(): float
    {
        return $this->totalVatBeforeDiscount;
    }

    public function getTotalVatHc(): float
    {
        return $this->totalVatHc;
    }

    public function getTotalWithoutVat(): float
    {
        return $this->totalWithoutVat;
    }

    public function getTotalWithoutVatBeforeDiscount(): float
    {
        return $this->totalWithoutVatBeforeDiscount;
    }

    public function getTotalWithoutVatHc(): float
    {
        return $this->totalWithoutVatHc;
    }

    public function getTotalWithVat(): float
    {
        return $this->totalWithVat;
    }

    public function getTotalWithVatBeforeDiscount(): float
    {
        return $this->totalWithVatBeforeDiscount;
    }

    public function getTotalWithVatHc(): float
    {
        return $this->totalWithVatHc;
    }

    public function getUnitPrice(): float
    {
        return $this->unitPrice;
    }


}
