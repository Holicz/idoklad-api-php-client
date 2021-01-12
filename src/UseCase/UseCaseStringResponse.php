<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase;

final class UseCaseStringResponse implements UseCaseResponseInterface
{
    private string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
