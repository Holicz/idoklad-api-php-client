<?php
declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\NumericSequences;


use DobryProgramator\iDoklad\UseCase\UseCaseResponseInterface;
use Symfony\Component\HttpFoundation\Request;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;

final class NumericSequencesResponse implements UseCaseResponseInterface
{
    /**
     * @Serializer\SerializedName("Items")
     * @Type("array")
     *
     * @var array<int, Item>
     */
    private array $items = [];

    /**
     * @Serializer\SerializedName("TotalItems")
     * @Type("int")
     *
     */
    private int $totalItems;

    /**
     * @Serializer\SerializedName("TotalPages")
     * @Type("int")
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
