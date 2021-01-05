<?php
declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Invoice\IssuedInvoicePdf;


use DobryProgramator\iDoklad\UseCase\UseCaseResponseInterface;
use Symfony\Component\HttpFoundation\Request;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;

final class IssuedInvoicePdfResponse implements UseCaseResponseInterface
{
    /**
     * @Serializer\SerializedName("Data")
     * @Type("string")
     */
    private string $content;

    public function getContent():string
    {
        return $this->content;
    }
}
