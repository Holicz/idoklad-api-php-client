<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad;

use DobryProgramator\iDoklad\Exception\ApiRateExceededException;
use DobryProgramator\iDoklad\Exception\BadRequestException;
use DobryProgramator\iDoklad\Exception\CouldNotProcessResponseException;
use DobryProgramator\iDoklad\Exception\iDokladServerException;
use DobryProgramator\iDoklad\Exception\NoActiveSubscriptionException;
use DobryProgramator\iDoklad\Exception\UnauthorizedException;
use DobryProgramator\iDoklad\UseCase\UseCaseRequestInterface;
use DobryProgramator\iDoklad\UseCase\UseCaseResponseInterface;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

use function json_decode;
use function json_encode;

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
        $this->serializer = SerializerBuilder::create()->build();
    }

    public function sendRequest(UseCaseRequestInterface $request): UseCaseResponseInterface
    {
        if (!isset($this->token)) {
            $this->authenticate();
        }

        // TODO: Isn't there a better way?
        $json = $this->makeRequest($request);
        $data = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
        $json = json_encode($data['Data']);

        if ($json === false) {
            throw new CouldNotProcessResponseException();
        }

        return $this->serializer->deserialize(
            $json,
            $request->getResponseObjectClass(),
            self::SERIALIZATION_FORMAT
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
