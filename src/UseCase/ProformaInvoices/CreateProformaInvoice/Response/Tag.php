<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\ProformaInvoices\CreateProformaInvoice\Response;

use JMS\Serializer\Annotation as Serializer;

final class Tag
{
    /**
     * @Serializer\SerializedName("TagId")
     * @Serializer\Type("int")
     */
    private int $tagId;

    public function getTagId(): int
    {
        return $this->tagId;
    }
}
