<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Authentication;

use RuntimeException;
use Symfony\Component\HttpFoundation\Response;

final class AuthenticationException extends RuntimeException
{
    public function __construct()
    {
        parent::__construct('Unable to authenticate. Check your credentials.', Response::HTTP_BAD_REQUEST);
    }
}
