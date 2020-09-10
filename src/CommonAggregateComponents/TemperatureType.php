<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing TemperatureType
 *
 * ABIE
 *  Temperature. Details
 *  A class to describe a measurement of temperature.
 *  Temperature
 * XSD Type: TemperatureType
 */
class TemperatureType
{

    /**
     * BBIE
     *  Temperature. Attribute Identifier. Identifier
     *  An identifier for this temperature measurement.
     *  1
     *  Temperature
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\AttributeID $attributeID
     */
    private $attributeID = null;

    /**
     * BBIE
     *  Temperature. Measure
     *  The value of this temperature measurement.
     *  1
     *  Temperature
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Measure $measure
     */
    private $measure = null;

    /**
     * BBIE
     *  Temperature. Description. Text
     *  Text describing this temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  at sea level
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as attributeID
     *
     * BBIE
     *  Temperature. Attribute Identifier. Identifier
     *  An identifier for this temperature measurement.
     *  1
     *  Temperature
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\AttributeID
     */
    public function getAttributeID()
    {
        return $this->attributeID;
    }

    /**
     * Sets a new attributeID
     *
     * BBIE
     *  Temperature. Attribute Identifier. Identifier
     *  An identifier for this temperature measurement.
     *  1
     *  Temperature
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\AttributeID $attributeID
     * @return self
     */
    public function setAttributeID(\Greenter\Ubl\Entity\CommonBasic\AttributeID $attributeID)
    {
        $this->attributeID = $attributeID;
        return $this;
    }

    /**
     * Gets as measure
     *
     * BBIE
     *  Temperature. Measure
     *  The value of this temperature measurement.
     *  1
     *  Temperature
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Measure
     */
    public function getMeasure()
    {
        return $this->measure;
    }

    /**
     * Sets a new measure
     *
     * BBIE
     *  Temperature. Measure
     *  The value of this temperature measurement.
     *  1
     *  Temperature
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Measure $measure
     * @return self
     */
    public function setMeasure(\Greenter\Ubl\Entity\CommonBasic\Measure $measure)
    {
        $this->measure = $measure;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Temperature. Description. Text
     *  Text describing this temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  at sea level
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\Description $description
     */
    public function addToDescription(\Greenter\Ubl\Entity\CommonBasic\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Temperature. Description. Text
     *  Text describing this temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  at sea level
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Temperature. Description. Text
     *  Text describing this temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  at sea level
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Temperature. Description. Text
     *  Text describing this temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  at sea level
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Temperature. Description. Text
     *  Text describing this temperature measurement.
     *  0..n
     *  Temperature
     *  Description
     *  Text
     *  Text. Type
     *  at sea level
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }


}

