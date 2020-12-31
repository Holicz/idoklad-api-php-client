<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Authentication;

use DobryProgramator\iDoklad\UseCase\UseCaseResponseInterface;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Type;

final class AuthenticationResponse implements UseCaseResponseInterface
{
    /**
     * @Serializer\SerializedName("access_token")
     * @Type("string")
     */
    private string $accessToken;

    /**
     * @Serializer\SerializedName("expires_in")
     * @Type("int")
     */
    private int $expiresIn;

    /**
     * @Serializer\SerializedName("token_type")
     * @Type("string")
     */
    private string $tokenType;

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function setAccessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    public function setExpiresIn(int $expiresIn): self
    {
        $this->expiresIn = $expiresIn;

        return $this;
    }

    public function getTokenType(): string
    {
        return $this->tokenType;
    }

    public function setTokenType(string $tokenType): self
    {
        $this->tokenType = $tokenType;

        return $this;
    }
}
