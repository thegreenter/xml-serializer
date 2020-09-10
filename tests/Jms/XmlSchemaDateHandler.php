<?php

declare(strict_types=1);

namespace Tests\Greenter\Ubl\Jms;

use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\XmlSerializationVisitor;

class XmlSchemaDateHandler implements SubscribingHandlerInterface
{
    public static function getSubscribingMethods()
    {
        return array(
            array(
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'xml',
                'type' => 'Greenter\Ubl\Entity\CommonBasic\IssueDate',
                'method' => 'serializeDate'
            ),
            array(
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'xml',
                'type' => 'Greenter\Ubl\Entity\CommonBasic\IssueTime',
                'method' => 'serializeDateTime'
            ),
        );
    }

    public function serializeDate(XmlSerializationVisitor $visitor, \DateTime $date, array $type, Context $context)
    {
        $v = $date->format('Y-m-d');

        return $visitor->visitSimpleString($v, $type);
    }

    public function serializeDateTime(XmlSerializationVisitor $visitor, \DateTime $date, array $type, Context $context)
    {
        $v = $date->format('H:i:s');

        return $visitor->visitSimpleString($v, $type);
    }
}
