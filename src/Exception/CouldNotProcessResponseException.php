<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Exception;

use RuntimeException;
use Symfony\Component\HttpFoundation\Response;

final class CouldNotProcessResponseException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('Could not process iDoklad\'s response.', Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
