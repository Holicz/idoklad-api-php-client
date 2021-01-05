<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Serializer;

use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\SerializerInterface;

final class SerializerBuilder
{
    public static function build(): SerializerInterface
    {
        $builder = \JMS\Serializer\SerializerBuilder::create();

        return $builder->configureHandlers(
            static function (HandlerRegistry $registry) use ($builder): void {
                $registry->registerSubscribingHandler(new EnumHandler());
                $registry->registerSubscribingHandler(new iDokladUseCaseResponseInterfaceHandler());
                $builder->addDefaultHandlers();
            }
        )->build();
    }
}
