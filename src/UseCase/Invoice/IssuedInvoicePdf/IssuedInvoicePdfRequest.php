<?php
declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Invoice\IssuedInvoicePdf;

use DobryProgramator\iDoklad\Enum\ReportLanguage;
use Symfony\Component\HttpFoundation\Request;
use DobryProgramator\iDoklad\UseCase\UseCaseRequestInterface;
use DobryProgramator\iDoklad\UseCase\Invoice\IssuedInvoicePdf\IssuedInvoicePdfResponse;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;

final class IssuedInvoicePdfRequest implements UseCaseRequestInterface
{
    private const HTTP_METHOD = Request::METHOD_GET;

    private const RESPONSE_CLASS = IssuedInvoicePdfResponse::class;

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD;
    }

    public function getEndpoint(): string
    {
        return 'Reports/IssuedInvoice/' . $this->id . '/Pdf';
    }

    /**
     * @return class-string<CreateContactResponse>
     */
    public function getResponseObjectClass(): string
    {
        return self::RESPONSE_CLASS;
    }

    /**
     * @Serializer\SerializedName("id")
     * @Type("int")
     */
    private int $id;

    /**
     * @Serializer\SerializedName("compressed")
     * @Type("bool")
     */
    private ?bool $compressed = null;

    /**
     * @Serializer\SerializedName("language")
     * @Serializer\Type("enum<DobryProgramator\iDoklad\Enum\ReportLanguage>")
     */
    private ReportLanguage $language;

    public function __construct(
        int $id,
        ?bool $compressed,
        ReportLanguage $language
    )
    {
        $this->id = $id;
        $this->compressed = $compressed;
        $this->language = $language;
    }

}
