<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad;

use DobryProgramator\iDoklad\Exception\iDokladServerException;
use DobryProgramator\iDoklad\UseCase\Authentication\AuthenticateRequest;
use DobryProgramator\iDoklad\UseCase\Authentication\AuthenticationException;
use DobryProgramator\iDoklad\UseCase\Authentication\AuthenticationResponse;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class iDokladAuthenticator
{
    private const SERIALIZATION_FORMAT = 'json';

    private string $clientId;

    private string $clientSecret;

    private HttpClientInterface $httpClient;

    private SerializerInterface $serializer;

    public function __construct(string $clientId, string $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->httpClient = HttpClient::create();
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function authenticate(): AuthenticationResponse
    {
        $request = new AuthenticateRequest($this->clientId, $this->clientSecret);
        $response = $this->httpClient->request(
            $request->getHttpMethod(),
            $request->getEndpoint(),
            [
                'body' => $request->__toArray(),
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
            ]
        );

        if ($response->getStatusCode() !== Response::HTTP_OK) {
            if ($response->getStatusCode() === Response::HTTP_BAD_REQUEST) {
                throw new AuthenticationException();
            }

            throw new iDokladServerException();
        }

        return $this->serializer->deserialize(
            $response->getContent(false),
            $request->getResponseObjectClass(),
            self::SERIALIZATION_FORMAT
        );
    }
}
