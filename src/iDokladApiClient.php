<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad;

use DobryProgramator\iDoklad\Exception\ApiRateExceededException;
use DobryProgramator\iDoklad\Exception\BadRequestException;
use DobryProgramator\iDoklad\Exception\iDokladServerException;
use DobryProgramator\iDoklad\Exception\NoActiveSubscriptionException;
use DobryProgramator\iDoklad\Exception\UnauthorizedException;
use DobryProgramator\iDoklad\Serializer\SerializerBuilder;
use DobryProgramator\iDoklad\UseCase\iDokladResponse;
use DobryProgramator\iDoklad\UseCase\iDokladResponseInterface;
use DobryProgramator\iDoklad\UseCase\UseCaseRequestInterface;
use JMS\Serializer\DeserializationContext;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final class iDokladApiClient
{
    private const BASE_URI = 'https://api.idoklad.cz/v3/';

    private const SERIALIZATION_FORMAT = 'json';

    private iDokladAuthenticator $iDokladAuthenticator;

    private HttpClientInterface $httpClient;

    private SerializerInterface $serializer;

    private ?string $token;

    public function __construct(string $clientId, string $clientSecret)
    {
        $this->iDokladAuthenticator = new iDokladAuthenticator($clientId, $clientSecret);
        $this->httpClient = HttpClient::createForBaseUri(self::BASE_URI);
        $this->serializer = SerializerBuilder::build();
    }

    public function sendRequest(UseCaseRequestInterface $request): iDokladResponseInterface
    {
        if (!isset($this->token)) {
            $this->authenticate();
        }

        $json = $this->makeRequest($request);
        $deserializationContext = DeserializationContext::create()
            ->setAttribute(iDokladResponse::CONTEXT_RESPONSE_CLASS, $request->getResponseObjectClass());

        // TODO: Remove @var annotation when updating jms/serializer to ^3.0

        /** @var iDokladResponseInterface */
        return $this->serializer->deserialize(
            $json,
            iDokladResponse::class,
            self::SERIALIZATION_FORMAT,
            $deserializationContext
        );
    }

    /**
     * @throws RedirectionExceptionInterface
     * @throws TransportExceptionInterface
     * @throws ApiRateExceededException
     * @throws BadRequestException
     * @throws iDokladServerException
     * @throws NoActiveSubscriptionException
     * @throws UnauthorizedException
     */
    private function makeRequest(UseCaseRequestInterface $request): string
    {
        $response = $this->httpClient->request(
            $request->getHttpMethod(),
            $request->getEndpoint(),
            [
                'body' => $this->serializeRequest($request),
                'auth_bearer' => $this->token,
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
            ]
        );

        try {
            return $response->getContent();
        } catch (ServerExceptionInterface $exception) {
            throw new iDokladServerException();
        } catch (ClientExceptionInterface $exception) {
            switch ($exception->getCode()) {
                case Response::HTTP_BAD_REQUEST:
                    throw new BadRequestException();
                case Response::HTTP_UNAUTHORIZED:
                    throw new UnauthorizedException();
                case Response::HTTP_PAYMENT_REQUIRED:
                    throw new NoActiveSubscriptionException();
                case Response::HTTP_TOO_MANY_REQUESTS:
                    throw new ApiRateExceededException();
                default:
                    throw new BadRequestException();
            }
        }
    }

    private function authenticate(): void
    {
        $authenticationResponse = $this->iDokladAuthenticator->authenticate();
        $this->token = $authenticationResponse->getAccessToken();
    }

    private function serializeRequest(UseCaseRequestInterface $request): string
    {
        return $this->serializer->serialize($request, self::SERIALIZATION_FORMAT);
    }
}
