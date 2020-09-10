<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing PhysicalAttributeType
 *
 * ABIE
 *  Physical Attribute. Details
 *  A class to describe a physical attribute.
 *  Physical Attribute
 * XSD Type: PhysicalAttributeType
 */
class PhysicalAttributeType
{

    /**
     * BBIE
     *  Physical Attribute. Attribute Identifier. Identifier
     *  An identifier for this physical attribute.
     *  1
     *  Physical Attribute
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *  colour style
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\AttributeID $attributeID
     */
    private $attributeID = null;

    /**
     * BBIE
     *  Physical Attribute. Position Code. Code
     *  A code signifying the position of this physical attribute.
     *  0..1
     *  Physical Attribute
     *  Position Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PositionCode $positionCode
     */
    private $positionCode = null;

    /**
     * BBIE
     *  Physical Attribute. Description Code. Code
     *  A description of the physical attribute, expressed as a code.
     *  0..1
     *  Physical Attribute
     *  Description Code
     *  Code
     *  Code. Type
     *  XXL , Small
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\DescriptionCode $descriptionCode
     */
    private $descriptionCode = null;

    /**
     * BBIE
     *  Physical Attribute. Description. Text
     *  A description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as attributeID
     *
     * BBIE
     *  Physical Attribute. Attribute Identifier. Identifier
     *  An identifier for this physical attribute.
     *  1
     *  Physical Attribute
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *  colour style
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
     *  Physical Attribute. Attribute Identifier. Identifier
     *  An identifier for this physical attribute.
     *  1
     *  Physical Attribute
     *  Attribute Identifier
     *  Identifier
     *  Identifier. Type
     *  colour style
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
     * Gets as positionCode
     *
     * BBIE
     *  Physical Attribute. Position Code. Code
     *  A code signifying the position of this physical attribute.
     *  0..1
     *  Physical Attribute
     *  Position Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PositionCode
     */
    public function getPositionCode()
    {
        return $this->positionCode;
    }

    /**
     * Sets a new positionCode
     *
     * BBIE
     *  Physical Attribute. Position Code. Code
     *  A code signifying the position of this physical attribute.
     *  0..1
     *  Physical Attribute
     *  Position Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PositionCode $positionCode
     * @return self
     */
    public function setPositionCode(\Greenter\Ubl\Entity\CommonBasic\PositionCode $positionCode)
    {
        $this->positionCode = $positionCode;
        return $this;
    }

    /**
     * Gets as descriptionCode
     *
     * BBIE
     *  Physical Attribute. Description Code. Code
     *  A description of the physical attribute, expressed as a code.
     *  0..1
     *  Physical Attribute
     *  Description Code
     *  Code
     *  Code. Type
     *  XXL , Small
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\DescriptionCode
     */
    public function getDescriptionCode()
    {
        return $this->descriptionCode;
    }

    /**
     * Sets a new descriptionCode
     *
     * BBIE
     *  Physical Attribute. Description Code. Code
     *  A description of the physical attribute, expressed as a code.
     *  0..1
     *  Physical Attribute
     *  Description Code
     *  Code
     *  Code. Type
     *  XXL , Small
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\DescriptionCode $descriptionCode
     * @return self
     */
    public function setDescriptionCode(\Greenter\Ubl\Entity\CommonBasic\DescriptionCode $descriptionCode)
    {
        $this->descriptionCode = $descriptionCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Physical Attribute. Description. Text
     *  A description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
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
     *  Physical Attribute. Description. Text
     *  A description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
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
     *  Physical Attribute. Description. Text
     *  A description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
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
     *  Physical Attribute. Description. Text
     *  A description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
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
     *  Physical Attribute. Description. Text
     *  A description of the physical attribute, expressed as text.
     *  0..n
     *  Physical Attribute
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


}

