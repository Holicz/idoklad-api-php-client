<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\ProformaInvoice\CreateProformaInvoice\Response;

use JMS\Serializer\Annotation as Serializer;

final class Attachment
{
    /**
     * @Serializer\SerializedName("FileName")
     */
    private string $fileName;
}
