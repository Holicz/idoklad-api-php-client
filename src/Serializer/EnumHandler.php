<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Serializer;

use InvalidArgumentException;
use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigatorInterface;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\JsonSerializationVisitor;
use MabeEnum\Enum;

use function call_user_func;
use function is_callable;

final class EnumHandler implements SubscribingHandlerInterface
{
    private const FORMAT = 'json';

    /**
     * @return array<int, array<string, int|string>>
     */
    public static function getSubscribingMethods(): array
    {
        return [
            [
                'direction' => GraphNavigatorInterface::DIRECTION_SERIALIZATION,
                'format' => self::FORMAT,
                'type' => 'enum',
                'method' => 'serializeEnumToJson',
            ],
            [
                'direction' => GraphNavigatorInterface::DIRECTION_DESERIALIZATION,
                'format' => self::FORMAT,
                'type' => 'enum',
                'method' => 'deserializeEnumFromJson',
            ],
        ];
    }

    /**
     * @param array<string, mixed> $type
     * @return mixed
     */
    public function serializeEnumToJson(JsonSerializationVisitor $visitor, Enum $enum, array $type, Context $context)
    {
        return $enum->getValue();
    }

    /**
     * @param mixed $value
     * @param array<string, mixed> $type
     */
    public function deserializeEnumFromJson(
        JsonDeserializationVisitor $visitor,
        $value,
        array $type,
        Context $context
    ): Enum {
        $callable = $type['params'][0] . '::get';
        if (!is_callable($callable)) {
            throw new InvalidArgumentException(sprintf('"%s" is not callable.', $callable));
        }

        return call_user_func($callable, $value);
    }
}
