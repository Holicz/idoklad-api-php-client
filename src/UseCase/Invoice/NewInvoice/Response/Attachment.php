<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Invoice\NewInvoice\Response;

use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;

final class Attachment
{
    /**
     * @Serializer\SerializedName("FileName")
     * @Type("string")
     */
    private string $filename;

    public function getFilename(): string
    {
        return $this->filename;
    }
}
