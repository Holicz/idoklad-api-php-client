<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Invoice\NewInvoice\Response;

final class Attachment
{
    /**
     * @Serializer\SerializedName("FileName")
     */
    private string $filename;

    public function getFilename(): string
    {
        return $this->filename;
    }
}
