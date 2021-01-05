<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Invoice\NewInvoice\Response;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;

final class Prices
{
    /**
     * @Serializer\SerializedName("TotalDiscountAmount")
     * @Type("float")
     */
    private float $totalDiscountAmount;

    /**
     * @Serializer\SerializedName("TotalPaid")
     * @Type("float")
     */
    private float $totalPaid;

    /**
     * @Serializer\SerializedName("TotalPaidHc")
     * @Type("float")
     */
    private float $totalPaidHc;

    /**
     * @Serializer\SerializedName("TotalVat")
     * @Type("float")
     */
    private float $totalVat;

    /**
     * @Serializer\SerializedName("TotalVatHc")
     * @Type("float")
     */
    private float $totalVatHc;

    /**
     * @Serializer\SerializedName("TotalWithoutDiscount")
     * @Type("float")
     */
    private float $totalWithoutDiscount;

    /**
     * @Serializer\SerializedName("TotalWithoutVat")
     * @Type("float")
     */
    private float $totalWithoutVat;
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
     * @Serializer\SerializedName("TotalWithVatHc")
     * @Type("float")
     */
    private float $totalWithVatHc;

    /**
     * @Serializer\SerializedName("VatRateSummary")
     * @Type("DobryProgramator\iDoklad\UseCase\Invoice\NewInvoice\Response\VatRateSummary")
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
