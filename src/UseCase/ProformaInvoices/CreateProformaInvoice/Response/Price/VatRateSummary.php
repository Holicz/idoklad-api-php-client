<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\ProformaInvoices\CreateProformaInvoice\Response\Price;

use DobryProgramator\iDoklad\Enum\VatRateType;
use JMS\Serializer\Annotation as Serializer;

final class VatRateSummary
{
    /**
     * @Serializer\SerializedName("TotalVat")
     * @Serializer\Type("float")
     */
    private float $totalVat;

    /**
     * @Serializer\SerializedName("TotalVatHc")
     * @Serializer\Type("float")
     */
    private float $totalVatHc;

    /**
     * @Serializer\SerializedName("TotalWithoutVat")
     * @Serializer\Type("float")
     */
    private float $totalWithoutVat;

    /**
     * @Serializer\SerializedName("TotalWithoutVatHc")
     * @Serializer\Type("float")
     */
    private float $totalWithoutVatHc;

    /**
     * @Serializer\SerializedName("TotalWithVat")
     * @Serializer\Type("float")
     */
    private float $totalWithVat;

    /**
     * @Serializer\SerializedName("TotalWithVatHc")
     * @Serializer\Type("float")
     */
    private float $totalWithVatHc;

    /**
     * @Serializer\SerializedName("VatRateType")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\VatRateType'>")
     */
    private VatRateType $vatRateType;

    public function getTotalVat(): float
    {
        return $this->totalVat;
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
