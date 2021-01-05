<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase;

interface iDokladResponseInterface
{
    /**
     * Returns data received from iDoklad
     *
     * @return UseCaseResponseInterface|string Either UseCaseResponse class or string when base64 encoded file returned
     */
    public function getData();

    /**
     * iDoklad internal error code
     *
     * @see https://api.idoklad.cz/Help/v3/cs/#errorCodes
     */
    public function getErrorCode(): int;

    /**
     * Whether request was successful
     */
    public function isSuccess(): bool;

    /**
     * Error message, empty string when no error occurred
     */
    public function getMessage(): string;

    /**
     * HTTP status code
     */
    public function getStatusCode(): int;
}
