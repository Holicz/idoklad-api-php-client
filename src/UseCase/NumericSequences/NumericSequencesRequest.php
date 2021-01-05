<?php
declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\NumericSequences;

use Symfony\Component\HttpFoundation\Request;
use DobryProgramator\iDoklad\UseCase\UseCaseRequestInterface;

final class NumericSequencesRequest implements UseCaseRequestInterface
{
    private const HTTP_METHOD = Request::METHOD_GET;

    private const ENDPOINT = 'NumericSequences';

    private const RESPONSE_CLASS = NumericSequencesResponse::class;

    public function getHttpMethod(): string
    {
        return self::HTTP_METHOD;
    }

    public function getEndpoint(): string
    {
        return self::ENDPOINT;
    }

    /**
     * @return class-string<CreateContactResponse>
     */
    public function getResponseObjectClass(): string
    {
        return self::RESPONSE_CLASS;
    }
}
