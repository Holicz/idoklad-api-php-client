<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Invoice\NewInvoice\Response;

use DobryProgramator\iDoklad\Enum\VatRateType;
use JMS\Serializer\Annotation as Serializer;

final class VatRateSummary
{
    /**
     * @Serializer\SerializedName("TotalVat")
     */
    private float $totalVat;

    /**
     * @Serializer\SerializedName("TotalVatHc")
     */
    private float $totalVatHc;

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
     * @Serializer\SerializedName("VatRateType")
     * @Serializer\Type("enum")
     */
    private VatRateType $vatRateType;

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

    public function getVatRateType(): VatRateType
    {
        return $this->vatRateType;
    }


}
