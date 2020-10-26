<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Exception;

use RuntimeException;
use Symfony\Component\HttpFoundation\Response;

final class ApiRateExceededException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('You have exceeded your iDoklad API rate limit', Response::HTTP_TOO_MANY_REQUESTS);
    }
}
