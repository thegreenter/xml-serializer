<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ConsumptionLineType
 *
 * ABIE
 *  Consumption Line. Details
 *  A class to describe a line item for utility consumption. To specify more than one utility item, use separate consumption lines.
 *  Consumption Line
 * XSD Type: ConsumptionLineType
 */
class ConsumptionLineType
{

    /**
     * BBIE
     *  Consumption Line. Identifier
     *  An identifier for this consumption line.
     *  1
     *  Consumption Line
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
     *  Consumption Line. Parent_ Document Line Reference Identifier. Identifier
     *  An identifier for the transaction line on a related document (such as an invoice) that covers this consumption line.
     *  0..1
     *  Consumption Line
     *  Parent
     *  Document Line Reference Identifier
     *  Identifier
     *  Identifier. Type
     *  Consumption
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ParentDocumentLineReferenceID $parentDocumentLineReferenceID
     */
    private $parentDocumentLineReferenceID = null;

    /**
     * BBIE
     *  Consumption Line. Invoiced_ Quantity. Quantity
     *  The quantity invoiced.
     *  1
     *  Consumption Line
     *  Invoiced
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\InvoicedQuantity $invoicedQuantity
     */
    private $invoicedQuantity = null;

    /**
     * BBIE
     *  Consumption Line. Line Extension Amount. Amount
     *  The monetary amount, including discount, to be charged for this consumption line.
     *  1
     *  Consumption Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * ASBIE
     *  Consumption Line. Period
     *  The period of time covered by this consumption line.
     *  0..1
     *  Consumption Line
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Period $period
     */
    private $period = null;

    /**
     * ASBIE
     *  Consumption Line. Delivery
     *  A delivery of the utility item on this consumption line.
     *  0..n
     *  Consumption Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Delivery[] $delivery
     */
    private $delivery = [
        
    ];

    /**
     * ASBIE
     *  Consumption Line. Allowance Charge
     *  An allowance or charge that applies to this consumption line.
     *  0..n
     *  Consumption Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\AllowanceCharge[] $allowanceCharge
     */
    private $allowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Consumption Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this consumption line.
     *  0..n
     *  Consumption Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Consumption Line. Utility Item
     *  The utility item consumed.
     *  1
     *  Consumption Line
     *  Utility Item
     *  Utility Item
     *  Utility Item
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\UtilityItem $utilityItem
     */
    private $utilityItem = null;

    /**
     * ASBIE
     *  Consumption Line. Price
     *  The price associated with this consumption line, expressed in a data structure containing multiple properties.
     *  0..1
     *  Consumption Line
     *  Price
     *  Price
     *  Price
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Price $price
     */
    private $price = null;

    /**
     * ASBIE
     *  Consumption Line. Unstructured Price
     *  The price associated with this consumption line expressed in a less structured form that includes just the amount and the time of use.
     *  0..1
     *  Consumption Line
     *  Unstructured Price
     *  Unstructured Price
     *  Unstructured Price
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\UnstructuredPrice $unstructuredPrice
     */
    private $unstructuredPrice = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Consumption Line. Identifier
     *  An identifier for this consumption line.
     *  1
     *  Consumption Line
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
     *  Consumption Line. Identifier
     *  An identifier for this consumption line.
     *  1
     *  Consumption Line
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
     * Gets as parentDocumentLineReferenceID
     *
     * BBIE
     *  Consumption Line. Parent_ Document Line Reference Identifier. Identifier
     *  An identifier for the transaction line on a related document (such as an invoice) that covers this consumption line.
     *  0..1
     *  Consumption Line
     *  Parent
     *  Document Line Reference Identifier
     *  Identifier
     *  Identifier. Type
     *  Consumption
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ParentDocumentLineReferenceID
     */
    public function getParentDocumentLineReferenceID()
    {
        return $this->parentDocumentLineReferenceID;
    }

    /**
     * Sets a new parentDocumentLineReferenceID
     *
     * BBIE
     *  Consumption Line. Parent_ Document Line Reference Identifier. Identifier
     *  An identifier for the transaction line on a related document (such as an invoice) that covers this consumption line.
     *  0..1
     *  Consumption Line
     *  Parent
     *  Document Line Reference Identifier
     *  Identifier
     *  Identifier. Type
     *  Consumption
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ParentDocumentLineReferenceID $parentDocumentLineReferenceID
     * @return self
     */
    public function setParentDocumentLineReferenceID(\Greenter\Ubl\Entity\CommonBasic\ParentDocumentLineReferenceID $parentDocumentLineReferenceID)
    {
        $this->parentDocumentLineReferenceID = $parentDocumentLineReferenceID;
        return $this;
    }

    /**
     * Gets as invoicedQuantity
     *
     * BBIE
     *  Consumption Line. Invoiced_ Quantity. Quantity
     *  The quantity invoiced.
     *  1
     *  Consumption Line
     *  Invoiced
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\InvoicedQuantity
     */
    public function getInvoicedQuantity()
    {
        return $this->invoicedQuantity;
    }

    /**
     * Sets a new invoicedQuantity
     *
     * BBIE
     *  Consumption Line. Invoiced_ Quantity. Quantity
     *  The quantity invoiced.
     *  1
     *  Consumption Line
     *  Invoiced
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\InvoicedQuantity $invoicedQuantity
     * @return self
     */
    public function setInvoicedQuantity(\Greenter\Ubl\Entity\CommonBasic\InvoicedQuantity $invoicedQuantity)
    {
        $this->invoicedQuantity = $invoicedQuantity;
        return $this;
    }

    /**
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Consumption Line. Line Extension Amount. Amount
     *  The monetary amount, including discount, to be charged for this consumption line.
     *  1
     *  Consumption Line
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
     *  Consumption Line. Line Extension Amount. Amount
     *  The monetary amount, including discount, to be charged for this consumption line.
     *  1
     *  Consumption Line
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
     * Gets as period
     *
     * ASBIE
     *  Consumption Line. Period
     *  The period of time covered by this consumption line.
     *  0..1
     *  Consumption Line
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * ASBIE
     *  Consumption Line. Period
     *  The period of time covered by this consumption line.
     *  0..1
     *  Consumption Line
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Period $period
     * @return self
     */
    public function setPeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\Period $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as delivery
     *
     * ASBIE
     *  Consumption Line. Delivery
     *  A delivery of the utility item on this consumption line.
     *  0..n
     *  Consumption Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Delivery $delivery
     */
    public function addToDelivery(\Greenter\Ubl\Entity\CommonAggregateComponents\Delivery $delivery)
    {
        $this->delivery[] = $delivery;
        return $this;
    }

    /**
     * isset delivery
     *
     * ASBIE
     *  Consumption Line. Delivery
     *  A delivery of the utility item on this consumption line.
     *  0..n
     *  Consumption Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDelivery($index)
    {
        return isset($this->delivery[$index]);
    }

    /**
     * unset delivery
     *
     * ASBIE
     *  Consumption Line. Delivery
     *  A delivery of the utility item on this consumption line.
     *  0..n
     *  Consumption Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDelivery($index)
    {
        unset($this->delivery[$index]);
    }

    /**
     * Gets as delivery
     *
     * ASBIE
     *  Consumption Line. Delivery
     *  A delivery of the utility item on this consumption line.
     *  0..n
     *  Consumption Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Delivery[]
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * ASBIE
     *  Consumption Line. Delivery
     *  A delivery of the utility item on this consumption line.
     *  0..n
     *  Consumption Line
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Delivery[] $delivery
     * @return self
     */
    public function setDelivery(array $delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Consumption Line. Allowance Charge
     *  An allowance or charge that applies to this consumption line.
     *  0..n
     *  Consumption Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AllowanceCharge $allowanceCharge
     */
    public function addToAllowanceCharge(\Greenter\Ubl\Entity\CommonAggregateComponents\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge[] = $allowanceCharge;
        return $this;
    }

    /**
     * isset allowanceCharge
     *
     * ASBIE
     *  Consumption Line. Allowance Charge
     *  An allowance or charge that applies to this consumption line.
     *  0..n
     *  Consumption Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowanceCharge($index)
    {
        return isset($this->allowanceCharge[$index]);
    }

    /**
     * unset allowanceCharge
     *
     * ASBIE
     *  Consumption Line. Allowance Charge
     *  An allowance or charge that applies to this consumption line.
     *  0..n
     *  Consumption Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowanceCharge($index)
    {
        unset($this->allowanceCharge[$index]);
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Consumption Line. Allowance Charge
     *  An allowance or charge that applies to this consumption line.
     *  0..n
     *  Consumption Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\AllowanceCharge[]
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Consumption Line. Allowance Charge
     *  An allowance or charge that applies to this consumption line.
     *  0..n
     *  Consumption Line
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AllowanceCharge[] $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(array $allowanceCharge)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Consumption Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this consumption line.
     *  0..n
     *  Consumption Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\Greenter\Ubl\Entity\CommonAggregateComponents\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * ASBIE
     *  Consumption Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this consumption line.
     *  0..n
     *  Consumption Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * ASBIE
     *  Consumption Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this consumption line.
     *  0..n
     *  Consumption Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * ASBIE
     *  Consumption Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this consumption line.
     *  0..n
     *  Consumption Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Consumption Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this consumption line.
     *  0..n
     *  Consumption Line
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(array $taxTotal)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Gets as utilityItem
     *
     * ASBIE
     *  Consumption Line. Utility Item
     *  The utility item consumed.
     *  1
     *  Consumption Line
     *  Utility Item
     *  Utility Item
     *  Utility Item
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\UtilityItem
     */
    public function getUtilityItem()
    {
        return $this->utilityItem;
    }

    /**
     * Sets a new utilityItem
     *
     * ASBIE
     *  Consumption Line. Utility Item
     *  The utility item consumed.
     *  1
     *  Consumption Line
     *  Utility Item
     *  Utility Item
     *  Utility Item
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\UtilityItem $utilityItem
     * @return self
     */
    public function setUtilityItem(\Greenter\Ubl\Entity\CommonAggregateComponents\UtilityItem $utilityItem)
    {
        $this->utilityItem = $utilityItem;
        return $this;
    }

    /**
     * Gets as price
     *
     * ASBIE
     *  Consumption Line. Price
     *  The price associated with this consumption line, expressed in a data structure containing multiple properties.
     *  0..1
     *  Consumption Line
     *  Price
     *  Price
     *  Price
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * ASBIE
     *  Consumption Line. Price
     *  The price associated with this consumption line, expressed in a data structure containing multiple properties.
     *  0..1
     *  Consumption Line
     *  Price
     *  Price
     *  Price
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Price $price
     * @return self
     */
    public function setPrice(\Greenter\Ubl\Entity\CommonAggregateComponents\Price $price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as unstructuredPrice
     *
     * ASBIE
     *  Consumption Line. Unstructured Price
     *  The price associated with this consumption line expressed in a less structured form that includes just the amount and the time of use.
     *  0..1
     *  Consumption Line
     *  Unstructured Price
     *  Unstructured Price
     *  Unstructured Price
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\UnstructuredPrice
     */
    public function getUnstructuredPrice()
    {
        return $this->unstructuredPrice;
    }

    /**
     * Sets a new unstructuredPrice
     *
     * ASBIE
     *  Consumption Line. Unstructured Price
     *  The price associated with this consumption line expressed in a less structured form that includes just the amount and the time of use.
     *  0..1
     *  Consumption Line
     *  Unstructured Price
     *  Unstructured Price
     *  Unstructured Price
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\UnstructuredPrice $unstructuredPrice
     * @return self
     */
    public function setUnstructuredPrice(\Greenter\Ubl\Entity\CommonAggregateComponents\UnstructuredPrice $unstructuredPrice)
    {
        $this->unstructuredPrice = $unstructuredPrice;
        return $this;
    }


}

