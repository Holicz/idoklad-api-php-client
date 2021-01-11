<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\ProformaInvoices\CreateProformaInvoice\Response;

use DobryProgramator\iDoklad\UseCase\ProformaInvoices\CreateProformaInvoice\Response\Price\VatRateSummary;
use JMS\Serializer\Annotation as Serializer;

final class Prices
{
    /**
     * @Serializer\SerializedName("TotalPaid")
     * @Serializer\Type("float")
     */
    private float $totalPaid;

    /**
     * @Serializer\SerializedName("TotalPaidHc")
     * @Serializer\Type("float")
     */
    private float $totalPaidHc;

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
     * @Serializer\SerializedName("VatRateSummary")
     * @Serializer\Type("DobryProgramator\iDoklad\UseCase\ProformaInvoices\CreateProformaInvoice\Response\Price\VatRateSummary")
     */
    private VatRateSummary $vatRateSummary;

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
