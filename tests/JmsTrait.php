<?php

declare(strict_types=1);

namespace Tests\Greenter\Ubl;

use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerBuilder;
use Tests\Greenter\Ubl\Jms\XmlSchemaDateHandler;

trait JmsTrait
{
    public function createSerializer()
    {
        $xmlVistor = new \JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory();
        $xmlVistor->setFormatOutput(true);

        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->setCacheDir(__DIR__.'/cache');
        $serializerBuilder->setDebug(false);
        $serializerBuilder->setSerializationVisitor('xml', $xmlVistor);
        $serializerBuilder->addMetadataDir(__DIR__.'/../metadata', 'Greenter\\Ubl\\Entity');
        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
//            $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling

        });

        return $serializerBuilder->build();
    }
}