<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Invoice\NewInvoice\Response;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;

final class Tag
{
    /**
     * @Serializer\SerializedName("TagId")
     * @Type("int")
     */
    private int $tagId;

    public function getTagId(): int
    {
        return $this->tagId;
    }
}
