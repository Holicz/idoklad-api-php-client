<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Exception;

use RuntimeException;
use Symfony\Component\HttpFoundation\Response;

final class BadRequestException extends RuntimeException
{
    public function __construct(string $content)
    {
        parent::__construct(
            sprintf(
                'Bad request. Most likely you passed in wrong data, please check the documentation ' .
                'for integrity constraints. iDoklad response: %s',
                $content
            ),
            Response::HTTP_BAD_REQUEST
        );
    }
}
