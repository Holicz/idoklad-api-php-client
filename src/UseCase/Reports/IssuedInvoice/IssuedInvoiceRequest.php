<?php
declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Reports\IssuedInvoice;

use DobryProgramator\iDoklad\Enum\ReportLanguage;
use DobryProgramator\iDoklad\UseCase\UseCaseStringResponse;
use Symfony\Component\HttpFoundation\Request;
use DobryProgramator\iDoklad\UseCase\UseCaseRequestInterface;
use JMS\Serializer\Annotation as Serializer;

final class IssuedInvoiceRequest implements UseCaseRequestInterface
{
    private const HTTP_METHOD = Request::METHOD_GET;

    private const ENDPOINT = 'Reports/IssuedInvoice/%d/Pdf';

    private const RESPONSE_CLASS = UseCaseStringResponse::class;

    /**
     * @Serializer\SerializedName("id")
     * @Serializer\Type("int")
     */
    private int $id;

    /**
     * @Serializer\SerializedName("compressed")
     * @Serializer\Type("bool")
     */
    private bool $compressed;

    /**
     * @Serializer\SerializedName("language")
     * @Serializer\Type("enum<DobryProgramator\iDoklad\Enum\ReportLanguage>")
     */
    private ReportLanguage $language;

    public function __construct(
        int $id,
        ReportLanguage $language,
        bool $compressed = false
    ) {
        $this->id = $id;
        $this->compressed = $compressed;
        $this->language = $language;
    }

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD;
    }

    public function getEndpoint(): string
    {
        return sprintf(self::ENDPOINT,$this->id);
    }

    /**
     * @return class-string<UseCaseStringResponse>
     */
    public function getResponseObjectClass(): string
    {
        return self::RESPONSE_CLASS;
    }
}
