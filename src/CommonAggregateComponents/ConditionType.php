<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ConditionType
 *
 * ABIE
 *  Condition. Details
 *  A class to define a measurable condition of an object.
 *  Condition
 * XSD Type: ConditionType
 */
class ConditionType
{

    /**
     * BBIE
     *  Condition. Attribute Identifier. Identifier
     *  An identifier for the attribute that applies to the condition.
     *  1
     *  Condition
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\AttributeID $attributeID
     */
    private $attributeID = null;

    /**
     * BBIE
     *  Condition. Measure
     *  The measurement value.
     *  0..1
     *  Condition
     *  Measure
     *  Measure
     *  Measure. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Measure $measure
     */
    private $measure = null;

    /**
     * BBIE
     *  Condition. Description. Text
     *  Text describing the attribute that applies to the condition.
     *  0..n
     *  Condition
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
     *  Condition. Minimum_ Measure. Measure
     *  The minimum value in a range of measurement for this condition.
     *  0..1
     *  Condition
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
     *  Condition. Maximum_ Measure. Measure
     *  The maximum value in a range of measurement for this condition.
     *  0..1
     *  Condition
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
     *  Condition. Attribute Identifier. Identifier
     *  An identifier for the attribute that applies to the condition.
     *  1
     *  Condition
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
     *  Condition. Attribute Identifier. Identifier
     *  An identifier for the attribute that applies to the condition.
     *  1
     *  Condition
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
     *  Condition. Measure
     *  The measurement value.
     *  0..1
     *  Condition
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
     *  Condition. Measure
     *  The measurement value.
     *  0..1
     *  Condition
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
     *  Condition. Description. Text
     *  Text describing the attribute that applies to the condition.
     *  0..n
     *  Condition
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
     *  Condition. Description. Text
     *  Text describing the attribute that applies to the condition.
     *  0..n
     *  Condition
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
     *  Condition. Description. Text
     *  Text describing the attribute that applies to the condition.
     *  0..n
     *  Condition
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
     *  Condition. Description. Text
     *  Text describing the attribute that applies to the condition.
     *  0..n
     *  Condition
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
     *  Condition. Description. Text
     *  Text describing the attribute that applies to the condition.
     *  0..n
     *  Condition
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
     *  Condition. Minimum_ Measure. Measure
     *  The minimum value in a range of measurement for this condition.
     *  0..1
     *  Condition
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
     *  Condition. Minimum_ Measure. Measure
     *  The minimum value in a range of measurement for this condition.
     *  0..1
     *  Condition
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
     *  Condition. Maximum_ Measure. Measure
     *  The maximum value in a range of measurement for this condition.
     *  0..1
     *  Condition
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
     *  Condition. Maximum_ Measure. Measure
     *  The maximum value in a range of measurement for this condition.
     *  0..1
     *  Condition
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

