<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing CatalogueRequestLineType
 *
 * ABIE
 *  Catalogue Request Line. Details
 *  A class to define a line describing a request for a catalogue line.
 *  Catalogue Request Line
 * XSD Type: CatalogueRequestLineType
 */
class CatalogueRequestLineType
{

    /**
     * BBIE
     *  Catalogue Request Line. Identifier
     *  An identifier for the requested catalogue line.
     *  1
     *  Catalogue Request Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Catalogue Request Line. Contract Subdivision. Text
     *  A subdivision of a contract or tender covering the line being requested.
     *  0..1
     *  Catalogue Request Line
     *  Contract Subdivision
     *  Text
     *  Text. Type
     *  Installation , Phase One , Support and Maintenance
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ContractSubdivision $contractSubdivision
     */
    private $contractSubdivision = null;

    /**
     * BBIE
     *  Catalogue Request Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Request Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Request Line. Line Validity_ Period. Period
     *  The period for which the information in the requested catalogue line is valid.
     *  0..1
     *  Catalogue Request Line
     *  Line Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\LineValidityPeriod $lineValidityPeriod
     */
    private $lineValidityPeriod = null;

    /**
     * ASBIE
     *  Catalogue Request Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item in the requested catalogue line that are dependent on location and quantity.
     *  0..n
     *  Catalogue Request Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\RequiredItemLocationQuantity[] $requiredItemLocationQuantity
     */
    private $requiredItemLocationQuantity = [
        
    ];

    /**
     * ASBIE
     *  Catalogue Request Line. Item
     *  The item associated with the requested catalogue line.
     *  1
     *  Catalogue Request Line
     *  Item
     *  Item
     *  Item
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Item $item
     */
    private $item = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Catalogue Request Line. Identifier
     *  An identifier for the requested catalogue line.
     *  1
     *  Catalogue Request Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Catalogue Request Line. Identifier
     *  An identifier for the requested catalogue line.
     *  1
     *  Catalogue Request Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  1
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ID $iD
     * @return self
     */
    public function setID(\Greenter\Ubl\Entity\CommonBasic\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as contractSubdivision
     *
     * BBIE
     *  Catalogue Request Line. Contract Subdivision. Text
     *  A subdivision of a contract or tender covering the line being requested.
     *  0..1
     *  Catalogue Request Line
     *  Contract Subdivision
     *  Text
     *  Text. Type
     *  Installation , Phase One , Support and Maintenance
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ContractSubdivision
     */
    public function getContractSubdivision()
    {
        return $this->contractSubdivision;
    }

    /**
     * Sets a new contractSubdivision
     *
     * BBIE
     *  Catalogue Request Line. Contract Subdivision. Text
     *  A subdivision of a contract or tender covering the line being requested.
     *  0..1
     *  Catalogue Request Line
     *  Contract Subdivision
     *  Text
     *  Text. Type
     *  Installation , Phase One , Support and Maintenance
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ContractSubdivision $contractSubdivision
     * @return self
     */
    public function setContractSubdivision(\Greenter\Ubl\Entity\CommonBasic\ContractSubdivision $contractSubdivision)
    {
        $this->contractSubdivision = $contractSubdivision;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Catalogue Request Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Request Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\Note $note
     */
    public function addToNote(\Greenter\Ubl\Entity\CommonBasic\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Catalogue Request Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Request Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Catalogue Request Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Request Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Catalogue Request Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Request Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Catalogue Request Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Catalogue Request Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Note[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as lineValidityPeriod
     *
     * ASBIE
     *  Catalogue Request Line. Line Validity_ Period. Period
     *  The period for which the information in the requested catalogue line is valid.
     *  0..1
     *  Catalogue Request Line
     *  Line Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\LineValidityPeriod
     */
    public function getLineValidityPeriod()
    {
        return $this->lineValidityPeriod;
    }

    /**
     * Sets a new lineValidityPeriod
     *
     * ASBIE
     *  Catalogue Request Line. Line Validity_ Period. Period
     *  The period for which the information in the requested catalogue line is valid.
     *  0..1
     *  Catalogue Request Line
     *  Line Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\LineValidityPeriod $lineValidityPeriod
     * @return self
     */
    public function setLineValidityPeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\LineValidityPeriod $lineValidityPeriod)
    {
        $this->lineValidityPeriod = $lineValidityPeriod;
        return $this;
    }

    /**
     * Adds as requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Request Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item in the requested catalogue line that are dependent on location and quantity.
     *  0..n
     *  Catalogue Request Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\RequiredItemLocationQuantity $requiredItemLocationQuantity
     */
    public function addToRequiredItemLocationQuantity(\Greenter\Ubl\Entity\CommonAggregateComponents\RequiredItemLocationQuantity $requiredItemLocationQuantity)
    {
        $this->requiredItemLocationQuantity[] = $requiredItemLocationQuantity;
        return $this;
    }

    /**
     * isset requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Request Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item in the requested catalogue line that are dependent on location and quantity.
     *  0..n
     *  Catalogue Request Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredItemLocationQuantity($index)
    {
        return isset($this->requiredItemLocationQuantity[$index]);
    }

    /**
     * unset requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Request Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item in the requested catalogue line that are dependent on location and quantity.
     *  0..n
     *  Catalogue Request Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredItemLocationQuantity($index)
    {
        unset($this->requiredItemLocationQuantity[$index]);
    }

    /**
     * Gets as requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Request Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item in the requested catalogue line that are dependent on location and quantity.
     *  0..n
     *  Catalogue Request Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\RequiredItemLocationQuantity[]
     */
    public function getRequiredItemLocationQuantity()
    {
        return $this->requiredItemLocationQuantity;
    }

    /**
     * Sets a new requiredItemLocationQuantity
     *
     * ASBIE
     *  Catalogue Request Line. Required_ Item Location Quantity. Item Location Quantity
     *  Properties of the item in the requested catalogue line that are dependent on location and quantity.
     *  0..n
     *  Catalogue Request Line
     *  Required
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\RequiredItemLocationQuantity[] $requiredItemLocationQuantity
     * @return self
     */
    public function setRequiredItemLocationQuantity(array $requiredItemLocationQuantity)
    {
        $this->requiredItemLocationQuantity = $requiredItemLocationQuantity;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Catalogue Request Line. Item
     *  The item associated with the requested catalogue line.
     *  1
     *  Catalogue Request Line
     *  Item
     *  Item
     *  Item
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Item
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * ASBIE
     *  Catalogue Request Line. Item
     *  The item associated with the requested catalogue line.
     *  1
     *  Catalogue Request Line
     *  Item
     *  Item
     *  Item
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Item $item
     * @return self
     */
    public function setItem(\Greenter\Ubl\Entity\CommonAggregateComponents\Item $item)
    {
        $this->item = $item;
        return $this;
    }


}

