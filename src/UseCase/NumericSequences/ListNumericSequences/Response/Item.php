<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\NumericSequences\ListNumericSequences\Response;

use DobryProgramator\iDoklad\Enum\DocumentType;
use DobryProgramator\iDoklad\UseCase\Metadata;
use JMS\Serializer\Annotation as Serializer;

final class Item
{
    /**
     * @Serializer\SerializedName("DocumentType")
     * @Serializer\Type("enum<'DobryProgramator\iDoklad\Enum\DocumentType'>")
     */
    private DocumentType $documentType;

    /**
     * @Serializer\SerializedName("Id")
     * @Serializer\Type("int")
     */
    private int $id;

    /**
     * @Serializer\SerializedName("IsDefault")
     * @Serializer\Type("bool")
     */
    private bool $isDefault;

    /**
     * @Serializer\SerializedName("LastNumber")
     * @Serializer\Type("int")
     */
    private int $lastNumber;

    /**
     * @Serializer\SerializedName("Metadata")
     * @Serializer\Type("DobryProgramator\iDoklad\UseCase\Metadata")
     */
    private Metadata $metadata;

    /**
     * @Serializer\SerializedName("Name")
     * @Serializer\Type("string")
     */
    private string $name;

    /**
     * @Serializer\SerializedName("NumberFormat")
     * @Serializer\Type("string")
     */
    private string $numberFormat;

    /**
     * @Serializer\SerializedName("Year")
     * @Serializer\Type("int")
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

    public function getLastNumber(): int
    {
        return $this->lastNumber;
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
