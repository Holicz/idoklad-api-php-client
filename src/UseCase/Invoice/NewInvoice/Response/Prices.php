<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Invoice\NewInvoice\Response;

use JMS\Serializer\Annotation as Serializer;

final class Prices
{
    /**
     * @Serializer\SerializedName("TotalDiscountAmount")
     */
    private float $totalDiscountAmount;

    /**
     * @Serializer\SerializedName("TotalPaid")
     */
    private float $totalPaid;

    /**
     * @Serializer\SerializedName("TotalPaidHc")
     */
    private float $totalPaidHc;

    /**
     * @Serializer\SerializedName("TotalVat")
     */
    private float $totalVat;

    /**
     * @Serializer\SerializedName("TotalVatHc")
     */
    private float $totalVatHc;

    /**
     * @Serializer\SerializedName("TotalWithoutDiscount")
     */
    private float $totalWithoutDiscount;

    /**
     * @Serializer\SerializedName("TotalWithoutVat")
     */
    private float $totalWithoutVat;
    /**
     * @Serializer\SerializedName("TotalWithoutVatHc")
     */
    private float $totalWithoutVatHc;
    /**
     * @Serializer\SerializedName("TotalWithVat")
     */
    private float $totalWithVat;

    /**
     * @Serializer\SerializedName("TotalWithVatHc")
     */
    private float $totalWithVatHc;

    /**
     * @Serializer\SerializedName("VatRateSummary")
     */
    private VatRateSummary $vatRateSummary;

    public function getTotalDiscountAmount(): float
    {
        return $this->totalDiscountAmount;
    }

    public function getTotalVatBeforeDiscount(): float
    {
        return $this->totalVatBeforeDiscount;
    }

    public function getTotalPaid(): float
    {
        return $this->totalPaid;
    }

    public function getTotalPaidHc(): float
    {
        return $this->totalPaidHc;
    }

    public function getTotalVat(): float
    {
        return $this->totalVat;
    }

    public function getTotalVatHc(): float
    {
        return $this->totalVatHc;
    }

    public function getTotalWithoutDiscount(): float
    {
        return $this->totalWithoutDiscount;
    }

    public function getTotalWithoutVat(): float
    {
        return $this->totalWithoutVat;
    }

    public function getTotalWithoutVatHc(): float
    {
        return $this->totalWithoutVatHc;
    }

    public function getTotalWithVat(): float
    {
        return $this->totalWithVat;
    }

    public function getTotalWithVatHc(): float
    {
        return $this->totalWithVatHc;
    }
    public function getVatRateSummary(): VatRateSummary
    {
        return $this->vatRateSummary;
    }

}
