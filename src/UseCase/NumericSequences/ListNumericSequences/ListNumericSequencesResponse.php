<?php
declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\NumericSequences\ListNumericSequences;


use DobryProgramator\iDoklad\UseCase\NumericSequences\ListNumericSequences\Response\Item;
use DobryProgramator\iDoklad\UseCase\UseCaseResponseInterface;
use Symfony\Component\HttpFoundation\Request;
use JMS\Serializer\Annotation as Serializer;

final class ListNumericSequencesResponse implements UseCaseResponseInterface
{
    /**
     * @Serializer\SerializedName("Items")
     * @Serializer\Type("array<\DobryProgramator\iDoklad\UseCase\NumericSequences\ListNumericSequences\Response\Item>")
     *
     * @var array<int, Item>
     */
    private array $items = [];

    /**
     * @Serializer\SerializedName("TotalItems")
     * @Serializer\Type("int")
     */
    private int $totalItems;

    /**
     * @Serializer\SerializedName("TotalPages")
     * @Serializer\Type("int")
     */
    private int $totalPages;

    public function getItems(): array
    {
        return $this->items;
    }

    public function getTotalItems(): int
    {
        return $this->totalItems;
    }

    public function getTotalPages(): int
    {
        return $this->totalPages;
    }

}
