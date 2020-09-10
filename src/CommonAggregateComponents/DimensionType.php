<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing DimensionType
 *
 * ABIE
 *  Dimension. Details
 *  A class to define a measurable dimension (length, mass, weight, volume, or area) of an item.
 *  Dimension
 * XSD Type: DimensionType
 */
class DimensionType
{

    /**
     * BBIE
     *  Dimension. Attribute Identifier. Identifier
     *  An identifier for the attribute to which the measure applies.
     *  1
     *  Dimension
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\AttributeID $attributeID
     */
    private $attributeID = null;

    /**
     * BBIE
     *  Dimension. Measure
     *  The measurement value.
     *  0..1
     *  Dimension
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Measure $measure
     */
    private $measure = null;

    /**
     * BBIE
     *  Dimension. Description. Text
     *  Text describing the measurement attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Dimension. Minimum_ Measure. Measure
     *  The minimum value in a range of measurement of this dimension.
     *  0..1
     *  Dimension
     *  Minimum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\MinimumMeasure $minimumMeasure
     */
    private $minimumMeasure = null;

    /**
     * BBIE
     *  Dimension. Maximum_ Measure. Measure
     *  The maximum value in a range of measurement of this dimension.
     *  0..1
     *  Dimension
     *  Maximum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\MaximumMeasure $maximumMeasure
     */
    private $maximumMeasure = null;

    /**
     * Gets as attributeID
     *
     * BBIE
     *  Dimension. Attribute Identifier. Identifier
     *  An identifier for the attribute to which the measure applies.
     *  1
     *  Dimension
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
     *  Dimension. Attribute Identifier. Identifier
     *  An identifier for the attribute to which the measure applies.
     *  1
     *  Dimension
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
     *  Dimension. Measure
     *  The measurement value.
     *  0..1
     *  Dimension
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
     *  Dimension. Measure
     *  The measurement value.
     *  0..1
     *  Dimension
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
     *  Dimension. Description. Text
     *  Text describing the measurement attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
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
     *  Dimension. Description. Text
     *  Text describing the measurement attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
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
     *  Dimension. Description. Text
     *  Text describing the measurement attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
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
     *  Dimension. Description. Text
     *  Text describing the measurement attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
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
     *  Dimension. Description. Text
     *  Text describing the measurement attribute.
     *  0..n
     *  Dimension
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as minimumMeasure
     *
     * BBIE
     *  Dimension. Minimum_ Measure. Measure
     *  The minimum value in a range of measurement of this dimension.
     *  0..1
     *  Dimension
     *  Minimum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\MinimumMeasure
     */
    public function getMinimumMeasure()
    {
        return $this->minimumMeasure;
    }

    /**
     * Sets a new minimumMeasure
     *
     * BBIE
     *  Dimension. Minimum_ Measure. Measure
     *  The minimum value in a range of measurement of this dimension.
     *  0..1
     *  Dimension
     *  Minimum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\MinimumMeasure $minimumMeasure
     * @return self
     */
    public function setMinimumMeasure(\Greenter\Ubl\Entity\CommonBasic\MinimumMeasure $minimumMeasure)
    {
        $this->minimumMeasure = $minimumMeasure;
        return $this;
    }

    /**
     * Gets as maximumMeasure
     *
     * BBIE
     *  Dimension. Maximum_ Measure. Measure
     *  The maximum value in a range of measurement of this dimension.
     *  0..1
     *  Dimension
     *  Maximum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\MaximumMeasure
     */
    public function getMaximumMeasure()
    {
        return $this->maximumMeasure;
    }

    /**
     * Sets a new maximumMeasure
     *
     * BBIE
     *  Dimension. Maximum_ Measure. Measure
     *  The maximum value in a range of measurement of this dimension.
     *  0..1
     *  Dimension
     *  Maximum
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\MaximumMeasure $maximumMeasure
     * @return self
     */
    public function setMaximumMeasure(\Greenter\Ubl\Entity\CommonBasic\MaximumMeasure $maximumMeasure)
    {
        $this->maximumMeasure = $maximumMeasure;
        return $this;
    }


}

