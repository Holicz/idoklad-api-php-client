<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase;

interface UseCaseRequestInterface
{
    public function getHttpMethod(): string;

    public function getEndpoint(): string;

    /**
     * @return class-string<UseCaseResponseInterface>
     */
    public function getResponseObjectClass(): string;
}
