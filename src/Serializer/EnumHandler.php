<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Serializer;

use DobryProgramator\iDoklad\Enum\Country;
use JMS\Serializer\GraphNavigatorInterface;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\JsonSerializationVisitor;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\Context;
use MabeEnum\Enum;

use function call_user_func;

final class EnumHandler implements SubscribingHandlerInterface
{
    private const FORMAT = 'json';

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

    public function serializeEnumToJson(JsonSerializationVisitor $visitor, Enum $enum, array $type, Context $context)
    {
        return $enum->getValue();
    }

    public function deserializeEnumFromJson(JsonDeserializationVisitor $visitor, $value, array $type, Context $context)
    {
        $enum = $type['params'][0];

        return call_user_func($enum . '::get', $value);
    }
}
