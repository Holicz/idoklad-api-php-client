<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Mails\ProformaInvoice;

use DobryProgramator\iDoklad\UseCase\UseCaseResponseInterface;
use JMS\Serializer\Annotation as Serializer;

final class SendResponse implements UseCaseResponseInterface
{
    /**
     * @Serializer\SerializedName("NotSent")
     * @Serializer\Type("array<string>")
     *
     * @var array<int, string>
     */
    private array $notSent = [];

    /**
     * @Serializer\SerializedName("Sent")
     * @Serializer\Type("array<string>")
     *
     * @var array<int, string>
     */
    private array $sent = [];
}
