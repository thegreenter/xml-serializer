<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing TenderLineType
 *
 * ABIE
 *  Tender Line. Details
 *  A class to define a line in a Tender.
 *  Tender Line
 * XSD Type: TenderLineType
 */
class TenderLineType
{

    /**
     * BBIE
     *  Tender Line. Identifier
     *  An identifier for this tender line.
     *  0..1
     *  Tender Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Tender Line. Quantity
     *  The quantity of the item quoted in this tender line.
     *  0..1
     *  Tender Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Tender Line. Line Extension Amount. Amount
     *  The total amount for this tender line, including allowance charges but net of taxes.
     *  0..1
     *  Tender Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Tender Line. Total_ Tax Amount. Amount
     *  The total tax amount for this tender line.
     *  0..1
     *  Tender Line
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TotalTaxAmount $totalTaxAmount
     */
    private $totalTaxAmount = null;

    /**
     * BBIE
     *  Tender Line. Orderable_ Unit. Text
     *  Text describing a unit in which the item described in this tender line can be ordered.
     *  0..1
     *  Tender Line
     *  Orderable
     *  Unit
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\OrderableUnit $orderableUnit
     */
    private $orderableUnit = null;

    /**
     * BBIE
     *  Tender Line. Content Unit. Quantity
     *  The unit of measure and quantity of the orderable unit.
     *  0..1
     *  Tender Line
     *  Content Unit
     *  Quantity
     *  Quantity. Type
     *  If order unit measure identifier is each , then content unit quantity is 1 .
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ContentUnitQuantity $contentUnitQuantity
     */
    private $contentUnitQuantity = null;

    /**
     * BBIE
     *  Tender Line. Order Quantity Increment. Numeric
     *  The number of items that can set the order quantity increments.
     *  0..1
     *  Tender Line
     *  Order Quantity Increment
     *  Numeric
     *  Numeric. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\OrderQuantityIncrementNumeric $orderQuantityIncrementNumeric
     */
    private $orderQuantityIncrementNumeric = null;

    /**
     * BBIE
     *  Tender Line. Minimum_ Order Quantity. Quantity
     *  The minimum number of items described in this tender line that can be ordered.
     *  0..1
     *  Tender Line
     *  Minimum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  10 boxes
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\MinimumOrderQuantity $minimumOrderQuantity
     */
    private $minimumOrderQuantity = null;

    /**
     * BBIE
     *  Tender Line. Maximum_ Order Quantity. Quantity
     *  The maximum number of items described in this tender line that can be ordered.
     *  0..1
     *  Tender Line
     *  Maximum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  1 tonne
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\MaximumOrderQuantity $maximumOrderQuantity
     */
    private $maximumOrderQuantity = null;

    /**
     * BBIE
     *  Tender Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this tender line.
     *  0..n
     *  Tender Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\WarrantyInformation[] $warrantyInformation
     */
    private $warrantyInformation = [
        
    ];

    /**
     * BBIE
     *  Tender Line. Pack Level Code. Code
     *  A mutually agreed code signifying the level of packaging associated with the item described in this tender line.
     *  0..1
     *  Tender Line
     *  Pack Level Code
     *  Code
     *  Code. Type
     *  Consumer Unit, Trading Unit
     *  level 2 , Group 4
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PackLevelCode $packLevelCode
     */
    private $packLevelCode = null;

    /**
     * ASBIE
     *  Tender Line. Document Reference
     *  A reference to a document associated with this tender line.
     *  0..n
     *  Tender Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Tender Line. Item
     *  The item associated with this tender line.
     *  0..1
     *  Tender Line
     *  Item
     *  Item
     *  Item
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Tender Line. Offered_ Item Location Quantity. Item Location Quantity
     *  A set of location-specific properties (e.g., price, quantity, lead time) associated with the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Offered
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\OfferedItemLocationQuantity[] $offeredItemLocationQuantity
     */
    private $offeredItemLocationQuantity = [
        
    ];

    /**
     * ASBIE
     *  Tender Line. Replacement_ Related Item. Related Item
     *  A catalogue item that may be a replacement for the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ReplacementRelatedItem[] $replacementRelatedItem
     */
    private $replacementRelatedItem = [
        
    ];

    /**
     * ASBIE
     *  Tender Line. Warranty_ Party. Party
     *  The party responsible for any warranty described in this tender line.
     *  0..1
     *  Tender Line
     *  Warranty
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\WarrantyParty $warrantyParty
     */
    private $warrantyParty = null;

    /**
     * ASBIE
     *  Tender Line. Warranty Validity_ Period. Period
     *  The period for which a warranty associated with the item described in this tender line is valid.
     *  0..1
     *  Tender Line
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod
     */
    private $warrantyValidityPeriod = null;

    /**
     * ASBIE
     *  Tender Line. Sub_ Tender Line. Tender Line
     *  An association to a Sub Tender Line
     *  0..n
     *  Tender Line
     *  Sub
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\SubTenderLine[] $subTenderLine
     */
    private $subTenderLine = [
        
    ];

    /**
     * ASBIE
     *  Tender Line. Call For Tenders_ Line Reference. Line Reference
     *  Reference to a Line on a Call For Tenders document.
     *  0..1
     *  Tender Line
     *  Call For Tenders
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\CallForTendersLineReference $callForTendersLineReference
     */
    private $callForTendersLineReference = null;

    /**
     * ASBIE
     *  Tender Line. Call For Tenders_ Document Reference. Document Reference
     *  A class defining references to a Call For Tenders document.
     *  0..1
     *  Tender Line
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\CallForTendersDocumentReference $callForTendersDocumentReference
     */
    private $callForTendersDocumentReference = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Tender Line. Identifier
     *  An identifier for this tender line.
     *  0..1
     *  Tender Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Tender Line. Identifier
     *  An identifier for this tender line.
     *  0..1
     *  Tender Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     * Adds as note
     *
     * BBIE
     *  Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Line
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
     *  Tender Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tender Line
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
     * Gets as quantity
     *
     * BBIE
     *  Tender Line. Quantity
     *  The quantity of the item quoted in this tender line.
     *  0..1
     *  Tender Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Tender Line. Quantity
     *  The quantity of the item quoted in this tender line.
     *  0..1
     *  Tender Line
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Quantity $quantity
     * @return self
     */
    public function setQuantity(\Greenter\Ubl\Entity\CommonBasic\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Tender Line. Line Extension Amount. Amount
     *  The total amount for this tender line, including allowance charges but net of taxes.
     *  0..1
     *  Tender Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\LineExtensionAmount
     */
    public function getLineExtensionAmount()
    {
        return $this->lineExtensionAmount;
    }

    /**
     * Sets a new lineExtensionAmount
     *
     * BBIE
     *  Tender Line. Line Extension Amount. Amount
     *  The total amount for this tender line, including allowance charges but net of taxes.
     *  0..1
     *  Tender Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\LineExtensionAmount $lineExtensionAmount
     * @return self
     */
    public function setLineExtensionAmount(\Greenter\Ubl\Entity\CommonBasic\LineExtensionAmount $lineExtensionAmount)
    {
        $this->lineExtensionAmount = $lineExtensionAmount;
        return $this;
    }

    /**
     * Gets as totalTaxAmount
     *
     * BBIE
     *  Tender Line. Total_ Tax Amount. Amount
     *  The total tax amount for this tender line.
     *  0..1
     *  Tender Line
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TotalTaxAmount
     */
    public function getTotalTaxAmount()
    {
        return $this->totalTaxAmount;
    }

    /**
     * Sets a new totalTaxAmount
     *
     * BBIE
     *  Tender Line. Total_ Tax Amount. Amount
     *  The total tax amount for this tender line.
     *  0..1
     *  Tender Line
     *  Total
     *  Tax Amount
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TotalTaxAmount $totalTaxAmount
     * @return self
     */
    public function setTotalTaxAmount(\Greenter\Ubl\Entity\CommonBasic\TotalTaxAmount $totalTaxAmount)
    {
        $this->totalTaxAmount = $totalTaxAmount;
        return $this;
    }

    /**
     * Gets as orderableUnit
     *
     * BBIE
     *  Tender Line. Orderable_ Unit. Text
     *  Text describing a unit in which the item described in this tender line can be ordered.
     *  0..1
     *  Tender Line
     *  Orderable
     *  Unit
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\OrderableUnit
     */
    public function getOrderableUnit()
    {
        return $this->orderableUnit;
    }

    /**
     * Sets a new orderableUnit
     *
     * BBIE
     *  Tender Line. Orderable_ Unit. Text
     *  Text describing a unit in which the item described in this tender line can be ordered.
     *  0..1
     *  Tender Line
     *  Orderable
     *  Unit
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\OrderableUnit $orderableUnit
     * @return self
     */
    public function setOrderableUnit(\Greenter\Ubl\Entity\CommonBasic\OrderableUnit $orderableUnit)
    {
        $this->orderableUnit = $orderableUnit;
        return $this;
    }

    /**
     * Gets as contentUnitQuantity
     *
     * BBIE
     *  Tender Line. Content Unit. Quantity
     *  The unit of measure and quantity of the orderable unit.
     *  0..1
     *  Tender Line
     *  Content Unit
     *  Quantity
     *  Quantity. Type
     *  If order unit measure identifier is each , then content unit quantity is 1 .
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ContentUnitQuantity
     */
    public function getContentUnitQuantity()
    {
        return $this->contentUnitQuantity;
    }

    /**
     * Sets a new contentUnitQuantity
     *
     * BBIE
     *  Tender Line. Content Unit. Quantity
     *  The unit of measure and quantity of the orderable unit.
     *  0..1
     *  Tender Line
     *  Content Unit
     *  Quantity
     *  Quantity. Type
     *  If order unit measure identifier is each , then content unit quantity is 1 .
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ContentUnitQuantity $contentUnitQuantity
     * @return self
     */
    public function setContentUnitQuantity(\Greenter\Ubl\Entity\CommonBasic\ContentUnitQuantity $contentUnitQuantity)
    {
        $this->contentUnitQuantity = $contentUnitQuantity;
        return $this;
    }

    /**
     * Gets as orderQuantityIncrementNumeric
     *
     * BBIE
     *  Tender Line. Order Quantity Increment. Numeric
     *  The number of items that can set the order quantity increments.
     *  0..1
     *  Tender Line
     *  Order Quantity Increment
     *  Numeric
     *  Numeric. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\OrderQuantityIncrementNumeric
     */
    public function getOrderQuantityIncrementNumeric()
    {
        return $this->orderQuantityIncrementNumeric;
    }

    /**
     * Sets a new orderQuantityIncrementNumeric
     *
     * BBIE
     *  Tender Line. Order Quantity Increment. Numeric
     *  The number of items that can set the order quantity increments.
     *  0..1
     *  Tender Line
     *  Order Quantity Increment
     *  Numeric
     *  Numeric. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\OrderQuantityIncrementNumeric $orderQuantityIncrementNumeric
     * @return self
     */
    public function setOrderQuantityIncrementNumeric(\Greenter\Ubl\Entity\CommonBasic\OrderQuantityIncrementNumeric $orderQuantityIncrementNumeric)
    {
        $this->orderQuantityIncrementNumeric = $orderQuantityIncrementNumeric;
        return $this;
    }

    /**
     * Gets as minimumOrderQuantity
     *
     * BBIE
     *  Tender Line. Minimum_ Order Quantity. Quantity
     *  The minimum number of items described in this tender line that can be ordered.
     *  0..1
     *  Tender Line
     *  Minimum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  10 boxes
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\MinimumOrderQuantity
     */
    public function getMinimumOrderQuantity()
    {
        return $this->minimumOrderQuantity;
    }

    /**
     * Sets a new minimumOrderQuantity
     *
     * BBIE
     *  Tender Line. Minimum_ Order Quantity. Quantity
     *  The minimum number of items described in this tender line that can be ordered.
     *  0..1
     *  Tender Line
     *  Minimum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  10 boxes
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\MinimumOrderQuantity $minimumOrderQuantity
     * @return self
     */
    public function setMinimumOrderQuantity(\Greenter\Ubl\Entity\CommonBasic\MinimumOrderQuantity $minimumOrderQuantity)
    {
        $this->minimumOrderQuantity = $minimumOrderQuantity;
        return $this;
    }

    /**
     * Gets as maximumOrderQuantity
     *
     * BBIE
     *  Tender Line. Maximum_ Order Quantity. Quantity
     *  The maximum number of items described in this tender line that can be ordered.
     *  0..1
     *  Tender Line
     *  Maximum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  1 tonne
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\MaximumOrderQuantity
     */
    public function getMaximumOrderQuantity()
    {
        return $this->maximumOrderQuantity;
    }

    /**
     * Sets a new maximumOrderQuantity
     *
     * BBIE
     *  Tender Line. Maximum_ Order Quantity. Quantity
     *  The maximum number of items described in this tender line that can be ordered.
     *  0..1
     *  Tender Line
     *  Maximum
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *  1 tonne
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\MaximumOrderQuantity $maximumOrderQuantity
     * @return self
     */
    public function setMaximumOrderQuantity(\Greenter\Ubl\Entity\CommonBasic\MaximumOrderQuantity $maximumOrderQuantity)
    {
        $this->maximumOrderQuantity = $maximumOrderQuantity;
        return $this;
    }

    /**
     * Adds as warrantyInformation
     *
     * BBIE
     *  Tender Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this tender line.
     *  0..n
     *  Tender Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\WarrantyInformation $warrantyInformation
     */
    public function addToWarrantyInformation(\Greenter\Ubl\Entity\CommonBasic\WarrantyInformation $warrantyInformation)
    {
        $this->warrantyInformation[] = $warrantyInformation;
        return $this;
    }

    /**
     * isset warrantyInformation
     *
     * BBIE
     *  Tender Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this tender line.
     *  0..n
     *  Tender Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWarrantyInformation($index)
    {
        return isset($this->warrantyInformation[$index]);
    }

    /**
     * unset warrantyInformation
     *
     * BBIE
     *  Tender Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this tender line.
     *  0..n
     *  Tender Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWarrantyInformation($index)
    {
        unset($this->warrantyInformation[$index]);
    }

    /**
     * Gets as warrantyInformation
     *
     * BBIE
     *  Tender Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this tender line.
     *  0..n
     *  Tender Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\WarrantyInformation[]
     */
    public function getWarrantyInformation()
    {
        return $this->warrantyInformation;
    }

    /**
     * Sets a new warrantyInformation
     *
     * BBIE
     *  Tender Line. Warranty_ Information. Text
     *  Text about a warranty (provided by WarrantyParty) for the good or service described in this tender line.
     *  0..n
     *  Tender Line
     *  Warranty
     *  Information
     *  Text
     *  Text. Type
     *  Unless specified otherwise and in addition to any rights the Customer may have under statute, Dell warrants to the Customer that Dell branded Products (excluding third party products and software), will be free from defects in materials and workmanship affecting normal use for a period of one year from invoice date ( Standard Warranty ).
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\WarrantyInformation[] $warrantyInformation
     * @return self
     */
    public function setWarrantyInformation(array $warrantyInformation)
    {
        $this->warrantyInformation = $warrantyInformation;
        return $this;
    }

    /**
     * Gets as packLevelCode
     *
     * BBIE
     *  Tender Line. Pack Level Code. Code
     *  A mutually agreed code signifying the level of packaging associated with the item described in this tender line.
     *  0..1
     *  Tender Line
     *  Pack Level Code
     *  Code
     *  Code. Type
     *  Consumer Unit, Trading Unit
     *  level 2 , Group 4
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PackLevelCode
     */
    public function getPackLevelCode()
    {
        return $this->packLevelCode;
    }

    /**
     * Sets a new packLevelCode
     *
     * BBIE
     *  Tender Line. Pack Level Code. Code
     *  A mutually agreed code signifying the level of packaging associated with the item described in this tender line.
     *  0..1
     *  Tender Line
     *  Pack Level Code
     *  Code
     *  Code. Type
     *  Consumer Unit, Trading Unit
     *  level 2 , Group 4
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PackLevelCode $packLevelCode
     * @return self
     */
    public function setPackLevelCode(\Greenter\Ubl\Entity\CommonBasic\PackLevelCode $packLevelCode)
    {
        $this->packLevelCode = $packLevelCode;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Tender Line. Document Reference
     *  A reference to a document associated with this tender line.
     *  0..n
     *  Tender Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DocumentReference $documentReference
     */
    public function addToDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Tender Line. Document Reference
     *  A reference to a document associated with this tender line.
     *  0..n
     *  Tender Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Tender Line. Document Reference
     *  A reference to a document associated with this tender line.
     *  0..n
     *  Tender Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Tender Line. Document Reference
     *  A reference to a document associated with this tender line.
     *  0..n
     *  Tender Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Tender Line. Document Reference
     *  A reference to a document associated with this tender line.
     *  0..n
     *  Tender Line
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Tender Line. Item
     *  The item associated with this tender line.
     *  0..1
     *  Tender Line
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
     *  Tender Line. Item
     *  The item associated with this tender line.
     *  0..1
     *  Tender Line
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

    /**
     * Adds as offeredItemLocationQuantity
     *
     * ASBIE
     *  Tender Line. Offered_ Item Location Quantity. Item Location Quantity
     *  A set of location-specific properties (e.g., price, quantity, lead time) associated with the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Offered
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\OfferedItemLocationQuantity $offeredItemLocationQuantity
     */
    public function addToOfferedItemLocationQuantity(\Greenter\Ubl\Entity\CommonAggregateComponents\OfferedItemLocationQuantity $offeredItemLocationQuantity)
    {
        $this->offeredItemLocationQuantity[] = $offeredItemLocationQuantity;
        return $this;
    }

    /**
     * isset offeredItemLocationQuantity
     *
     * ASBIE
     *  Tender Line. Offered_ Item Location Quantity. Item Location Quantity
     *  A set of location-specific properties (e.g., price, quantity, lead time) associated with the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Offered
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOfferedItemLocationQuantity($index)
    {
        return isset($this->offeredItemLocationQuantity[$index]);
    }

    /**
     * unset offeredItemLocationQuantity
     *
     * ASBIE
     *  Tender Line. Offered_ Item Location Quantity. Item Location Quantity
     *  A set of location-specific properties (e.g., price, quantity, lead time) associated with the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Offered
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOfferedItemLocationQuantity($index)
    {
        unset($this->offeredItemLocationQuantity[$index]);
    }

    /**
     * Gets as offeredItemLocationQuantity
     *
     * ASBIE
     *  Tender Line. Offered_ Item Location Quantity. Item Location Quantity
     *  A set of location-specific properties (e.g., price, quantity, lead time) associated with the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Offered
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\OfferedItemLocationQuantity[]
     */
    public function getOfferedItemLocationQuantity()
    {
        return $this->offeredItemLocationQuantity;
    }

    /**
     * Sets a new offeredItemLocationQuantity
     *
     * ASBIE
     *  Tender Line. Offered_ Item Location Quantity. Item Location Quantity
     *  A set of location-specific properties (e.g., price, quantity, lead time) associated with the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Offered
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\OfferedItemLocationQuantity[] $offeredItemLocationQuantity
     * @return self
     */
    public function setOfferedItemLocationQuantity(array $offeredItemLocationQuantity)
    {
        $this->offeredItemLocationQuantity = $offeredItemLocationQuantity;
        return $this;
    }

    /**
     * Adds as replacementRelatedItem
     *
     * ASBIE
     *  Tender Line. Replacement_ Related Item. Related Item
     *  A catalogue item that may be a replacement for the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ReplacementRelatedItem $replacementRelatedItem
     */
    public function addToReplacementRelatedItem(\Greenter\Ubl\Entity\CommonAggregateComponents\ReplacementRelatedItem $replacementRelatedItem)
    {
        $this->replacementRelatedItem[] = $replacementRelatedItem;
        return $this;
    }

    /**
     * isset replacementRelatedItem
     *
     * ASBIE
     *  Tender Line. Replacement_ Related Item. Related Item
     *  A catalogue item that may be a replacement for the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplacementRelatedItem($index)
    {
        return isset($this->replacementRelatedItem[$index]);
    }

    /**
     * unset replacementRelatedItem
     *
     * ASBIE
     *  Tender Line. Replacement_ Related Item. Related Item
     *  A catalogue item that may be a replacement for the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplacementRelatedItem($index)
    {
        unset($this->replacementRelatedItem[$index]);
    }

    /**
     * Gets as replacementRelatedItem
     *
     * ASBIE
     *  Tender Line. Replacement_ Related Item. Related Item
     *  A catalogue item that may be a replacement for the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ReplacementRelatedItem[]
     */
    public function getReplacementRelatedItem()
    {
        return $this->replacementRelatedItem;
    }

    /**
     * Sets a new replacementRelatedItem
     *
     * ASBIE
     *  Tender Line. Replacement_ Related Item. Related Item
     *  A catalogue item that may be a replacement for the item described in this tender line.
     *  0..n
     *  Tender Line
     *  Replacement
     *  Related Item
     *  Related Item
     *  Related Item
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ReplacementRelatedItem[] $replacementRelatedItem
     * @return self
     */
    public function setReplacementRelatedItem(array $replacementRelatedItem)
    {
        $this->replacementRelatedItem = $replacementRelatedItem;
        return $this;
    }

    /**
     * Gets as warrantyParty
     *
     * ASBIE
     *  Tender Line. Warranty_ Party. Party
     *  The party responsible for any warranty described in this tender line.
     *  0..1
     *  Tender Line
     *  Warranty
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\WarrantyParty
     */
    public function getWarrantyParty()
    {
        return $this->warrantyParty;
    }

    /**
     * Sets a new warrantyParty
     *
     * ASBIE
     *  Tender Line. Warranty_ Party. Party
     *  The party responsible for any warranty described in this tender line.
     *  0..1
     *  Tender Line
     *  Warranty
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\WarrantyParty $warrantyParty
     * @return self
     */
    public function setWarrantyParty(\Greenter\Ubl\Entity\CommonAggregateComponents\WarrantyParty $warrantyParty)
    {
        $this->warrantyParty = $warrantyParty;
        return $this;
    }

    /**
     * Gets as warrantyValidityPeriod
     *
     * ASBIE
     *  Tender Line. Warranty Validity_ Period. Period
     *  The period for which a warranty associated with the item described in this tender line is valid.
     *  0..1
     *  Tender Line
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\WarrantyValidityPeriod
     */
    public function getWarrantyValidityPeriod()
    {
        return $this->warrantyValidityPeriod;
    }

    /**
     * Sets a new warrantyValidityPeriod
     *
     * ASBIE
     *  Tender Line. Warranty Validity_ Period. Period
     *  The period for which a warranty associated with the item described in this tender line is valid.
     *  0..1
     *  Tender Line
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod
     * @return self
     */
    public function setWarrantyValidityPeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod)
    {
        $this->warrantyValidityPeriod = $warrantyValidityPeriod;
        return $this;
    }

    /**
     * Adds as subTenderLine
     *
     * ASBIE
     *  Tender Line. Sub_ Tender Line. Tender Line
     *  An association to a Sub Tender Line
     *  0..n
     *  Tender Line
     *  Sub
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SubTenderLine $subTenderLine
     */
    public function addToSubTenderLine(\Greenter\Ubl\Entity\CommonAggregateComponents\SubTenderLine $subTenderLine)
    {
        $this->subTenderLine[] = $subTenderLine;
        return $this;
    }

    /**
     * isset subTenderLine
     *
     * ASBIE
     *  Tender Line. Sub_ Tender Line. Tender Line
     *  An association to a Sub Tender Line
     *  0..n
     *  Tender Line
     *  Sub
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubTenderLine($index)
    {
        return isset($this->subTenderLine[$index]);
    }

    /**
     * unset subTenderLine
     *
     * ASBIE
     *  Tender Line. Sub_ Tender Line. Tender Line
     *  An association to a Sub Tender Line
     *  0..n
     *  Tender Line
     *  Sub
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubTenderLine($index)
    {
        unset($this->subTenderLine[$index]);
    }

    /**
     * Gets as subTenderLine
     *
     * ASBIE
     *  Tender Line. Sub_ Tender Line. Tender Line
     *  An association to a Sub Tender Line
     *  0..n
     *  Tender Line
     *  Sub
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\SubTenderLine[]
     */
    public function getSubTenderLine()
    {
        return $this->subTenderLine;
    }

    /**
     * Sets a new subTenderLine
     *
     * ASBIE
     *  Tender Line. Sub_ Tender Line. Tender Line
     *  An association to a Sub Tender Line
     *  0..n
     *  Tender Line
     *  Sub
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SubTenderLine[] $subTenderLine
     * @return self
     */
    public function setSubTenderLine(array $subTenderLine)
    {
        $this->subTenderLine = $subTenderLine;
        return $this;
    }

    /**
     * Gets as callForTendersLineReference
     *
     * ASBIE
     *  Tender Line. Call For Tenders_ Line Reference. Line Reference
     *  Reference to a Line on a Call For Tenders document.
     *  0..1
     *  Tender Line
     *  Call For Tenders
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\CallForTendersLineReference
     */
    public function getCallForTendersLineReference()
    {
        return $this->callForTendersLineReference;
    }

    /**
     * Sets a new callForTendersLineReference
     *
     * ASBIE
     *  Tender Line. Call For Tenders_ Line Reference. Line Reference
     *  Reference to a Line on a Call For Tenders document.
     *  0..1
     *  Tender Line
     *  Call For Tenders
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\CallForTendersLineReference $callForTendersLineReference
     * @return self
     */
    public function setCallForTendersLineReference(\Greenter\Ubl\Entity\CommonAggregateComponents\CallForTendersLineReference $callForTendersLineReference)
    {
        $this->callForTendersLineReference = $callForTendersLineReference;
        return $this;
    }

    /**
     * Gets as callForTendersDocumentReference
     *
     * ASBIE
     *  Tender Line. Call For Tenders_ Document Reference. Document Reference
     *  A class defining references to a Call For Tenders document.
     *  0..1
     *  Tender Line
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\CallForTendersDocumentReference
     */
    public function getCallForTendersDocumentReference()
    {
        return $this->callForTendersDocumentReference;
    }

    /**
     * Sets a new callForTendersDocumentReference
     *
     * ASBIE
     *  Tender Line. Call For Tenders_ Document Reference. Document Reference
     *  A class defining references to a Call For Tenders document.
     *  0..1
     *  Tender Line
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\CallForTendersDocumentReference $callForTendersDocumentReference
     * @return self
     */
    public function setCallForTendersDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\CallForTendersDocumentReference $callForTendersDocumentReference)
    {
        $this->callForTendersDocumentReference = $callForTendersDocumentReference;
        return $this;
    }


}

