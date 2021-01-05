<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\NumericSequences\Response;

use DobryProgramator\iDoklad\Enum\DocumentType;
use DobryProgramator\iDoklad\Enum\ItemType;
use DobryProgramator\iDoklad\Enum\PriceType;
use DobryProgramator\iDoklad\Enum\VatRateType;
use JMS\Serializer\Annotation as Serializer;

final class Item
{

    /**
     * @Serializer\SerializedName("DocumentType")
     * @Serializer\Type("enum")
     */
    private DocumentType $documentType;

    /**
     * @Serializer\SerializedName("Id")
     */
    private int $id;

    /**
     * @Serializer\SerializedName("IsDefault")
     */
    private bool $isDefault;

    /**
     * @Serializer\SerializedName("LastNumber")
     */
    private int $lastNumber;

    /**
     * @Serializer\SerializedName("Metadata")
     * @Serializer\Type("enum")
     */
    private Metadata $metadata;

    /**
     * @Serializer\SerializedName("Name")
     */
    private string $name;

    /**
     * @Serializer\SerializedName("NumberFormat")
     */
    private string $numberFormat;

    /**
     * @Serializer\SerializedName("Year")
     */
    private int $year;

    public function getDocumentType(): DocumentType
    {
        return $this->documentType;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function isDefault(): bool
    {
        return $this->isDefault;
    }

    public function getMetadata(): Metadata
    {
        return $this->metadata;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNumberFormat(): string
    {
        return $this->numberFormat;
    }

    public function getYear(): int
    {
        return $this->year;
    }
}
