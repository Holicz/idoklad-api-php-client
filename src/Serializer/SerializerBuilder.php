<?php

declare(strict_types=1);

namespace DobryProgramator\iDoklad\Serializer;

use JMS\Serializer\Handler\DateHandler;
use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\SerializerInterface;

final class SerializerBuilder
{
    public static function build(): SerializerInterface
    {
        return \JMS\Serializer\SerializerBuilder::create()
            ->configureHandlers(static function(HandlerRegistry $registry) {
                $registry->registerSubscribingHandler(new EnumHandler());
                $registry->registerSubscribingHandler(new DateHandler(\DateTime::ATOM, 'UTC'));
            })
            ->build()
        ;
    }
}
