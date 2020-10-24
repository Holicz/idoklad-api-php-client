<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\UseCase\Authentication;

use DobryProgramator\iDoklad\UseCase\UseCaseResponseInterface;
use JMS\Serializer\Annotation as Serializer;

final class AuthenticationResponse implements UseCaseResponseInterface
{
    /**
     * @Serializer\SerializedName("access_token")
     */
    private string $accessToken;

    /**
     * @Serializer\SerializedName("expires_in")
     */
    private int $expiresIn;

    /**
     * @Serializer\SerializedName("token_type")
     */
    private string $tokenType;

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function setAccessToken(string $accessToken): AuthenticationResponse
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    public function setExpiresIn(int $expiresIn): AuthenticationResponse
    {
        $this->expiresIn = $expiresIn;
        return $this;
    }

    public function getTokenType(): string
    {
        return $this->tokenType;
    }

    public function setTokenType(string $tokenType): AuthenticationResponse
    {
        $this->tokenType = $tokenType;
        return $this;
    }
}
