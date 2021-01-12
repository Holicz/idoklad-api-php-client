<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase;

use JMS\Serializer\Annotation as Serializer;

final class iDokladResponse implements iDokladResponseInterface
{
    public const CONTEXT_RESPONSE_CLASS = 'response_class';

    /**
     * @Serializer\SerializedName("Data")
     * @Serializer\Type("DobryProgramator\iDoklad\UseCase\UseCaseResponseInterface")
     */
    private UseCaseResponseInterface $data;

    /**
     * @Serializer\SerializedName("ErrorCode")
     * @Serializer\Type("int")
     */
    private int $errorCode;

    /**
     * @Serializer\SerializedName("IsSuccess")
     * @Serializer\Type("bool")
     */
    private bool $success;

    /**
     * @Serializer\SerializedName("Message")
     * @Serializer\Type("string")
     */
    private string $message;

    /**
     * @Serializer\SerializedName("StatusCode")
     * @Serializer\Type("int")
     */
    private int $statusCode;

    public function getData(): UseCaseResponseInterface
    {
        return $this->data;
    }

    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    public function isSuccess(): bool
    {
        return $this->success;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
