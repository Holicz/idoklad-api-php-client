<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Exception;

use RuntimeException;
use Symfony\Component\HttpFoundation\Response;

use function parent;

final class iDokladServerException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('iDoklad is experiencing technical difficulties', Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
