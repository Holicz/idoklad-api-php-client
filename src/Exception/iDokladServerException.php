<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Exception;

use RuntimeException;
use Symfony\Component\HttpFoundation\Response;

final class iDokladServerException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('iDoklad is experiencing technical difficulties', Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
