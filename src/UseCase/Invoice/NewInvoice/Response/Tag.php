<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Invoice\NewInvoice\Response;

final class Tag
{
    /**
     * @Serializer\SerializedName("TagId")
     */
    private int $tagId;

    public function getTagId(): int
    {
        return $this->tagId;
    }
}
