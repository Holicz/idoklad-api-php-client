<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Serializer;

use DobryProgramator\iDoklad\UseCase\iDokladResponse;
use DobryProgramator\iDoklad\UseCase\UseCaseResponseInterface;
use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigatorInterface;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\JsonDeserializationVisitor;

use function is_string;

final class iDokladUseCaseResponseInterfaceHandler implements SubscribingHandlerInterface
{
    private const FORMAT = 'json';

    /**
     * @return array<int, array<string, int|string>>
     */
    public static function getSubscribingMethods(): array
    {
        return [
            [
                'direction' => GraphNavigatorInterface::DIRECTION_DESERIALIZATION,
                'format' => self::FORMAT,
                'type' => UseCaseResponseInterface::class,
                'method' => 'deserializeUseCaseResponseFromJson',
            ],
        ];
    }

    /**
     * @param mixed $value
     * @param array<string, mixed> $type
     *
     * @return string|UseCaseResponseInterface
     */
    public function deserializeUseCaseResponseFromJson(
        JsonDeserializationVisitor $visitor,
        $value,
        array $type,
        Context $context
    ) {
        if (is_string($value)) {
            return $value;
        }

        return $context->getNavigator()->accept(
            $value,
            [
                'name' => $context->getAttribute(iDokladResponse::CONTEXT_RESPONSE_CLASS),
            ],
            $context
        );
    }
}
