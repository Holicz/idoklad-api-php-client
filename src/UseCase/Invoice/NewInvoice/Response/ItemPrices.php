<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Invoice\NewInvoice\Response;

use JMS\Serializer\Annotation as Serializer;

final class ItemPrices
{
    /**
     * @Serializer\SerializedName("TotalVat")
     */
    private float $totalVat;

    /**
     * @Serializer\SerializedName("TotalVatBeforeDiscount")
     */
    private float $totalVatBeforeDiscount;

    /**
     * @Serializer\SerializedName("TotalVatHc")
     */
    private float $totalVatHc;

    /**
     * @Serializer\SerializedName("TotalWithoutVat")
     */
    private float $totalWithoutVat;

    /**
     * @Serializer\SerializedName("TotalWithoutVatBeforeDiscount")
     */
    private float $totalWithoutVatBeforeDiscount;

    /**
     * @Serializer\SerializedName("TotalWithoutVatHc")
     */
    private float $totalWithoutVatHc;

    /**
     * @Serializer\SerializedName("TotalWithVat")
     */
    private float $totalWithVat;

    /**
     * @Serializer\SerializedName("TotalWithVatBeforeDiscount")
     */
    private float $totalWithVatBeforeDiscount;

    /**
     * @Serializer\SerializedName("TotalWithVatHc")
     */
    private float $totalWithVatHc;

    /**
     * @Serializer\SerializedName("UnitPrice")
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
