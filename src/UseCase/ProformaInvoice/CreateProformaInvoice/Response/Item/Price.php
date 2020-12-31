<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice\Response\Item;

use JMS\Serializer\Annotation as Serializer;

final class Price
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
     * @Serializer\SerializedName("UnitPrice")
     */
    private float $unitPrice;
}
