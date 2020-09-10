<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing OrderLineReferenceType
 *
 * ABIE
 *  Order Line Reference. Details
 *  A class to define a reference to an order line.
 *  Order Line Reference
 * XSD Type: OrderLineReferenceType
 */
class OrderLineReferenceType
{

    /**
     * BBIE
     *  Order Line Reference. Line Identifier. Identifier
     *  An identifier for the referenced order line, assigned by the buyer.
     *  1
     *  Order Line Reference
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\LineID $lineID
     */
    private $lineID = null;

    /**
     * BBIE
     *  Order Line Reference. Sales Order_ Line Identifier. Identifier
     *  An identifier for the referenced order line, assigned by the seller.
     *  0..1
     *  Order Line Reference
     *  Sales Order
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SalesOrderLineID $salesOrderLineID
     */
    private $salesOrderLineID = null;

    /**
     * BBIE
     *  Order Line Reference. UUID. Identifier
     *  A universally unique identifier for this order line reference.
     *  0..1
     *  Order Line Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Order Line Reference. Line Status Code. Code
     *  A code signifying the status of the referenced order line with respect to its original state.
     *  0..1
     *  Order Line Reference
     *  Line Status Code
     *  Code
     *  Line Status
     *  Line Status_ Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\LineStatusCode $lineStatusCode
     */
    private $lineStatusCode = null;

    /**
     * ASBIE
     *  Order Line Reference. Order Reference
     *  A reference to the Order containing the referenced order line.
     *  0..1
     *  Order Line Reference
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\OrderReference $orderReference
     */
    private $orderReference = null;

    /**
     * Gets as lineID
     *
     * BBIE
     *  Order Line Reference. Line Identifier. Identifier
     *  An identifier for the referenced order line, assigned by the buyer.
     *  1
     *  Order Line Reference
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\LineID
     */
    public function getLineID()
    {
        return $this->lineID;
    }

    /**
     * Sets a new lineID
     *
     * BBIE
     *  Order Line Reference. Line Identifier. Identifier
     *  An identifier for the referenced order line, assigned by the buyer.
     *  1
     *  Order Line Reference
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\LineID $lineID
     * @return self
     */
    public function setLineID(\Greenter\Ubl\Entity\CommonBasic\LineID $lineID)
    {
        $this->lineID = $lineID;
        return $this;
    }

    /**
     * Gets as salesOrderLineID
     *
     * BBIE
     *  Order Line Reference. Sales Order_ Line Identifier. Identifier
     *  An identifier for the referenced order line, assigned by the seller.
     *  0..1
     *  Order Line Reference
     *  Sales Order
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SalesOrderLineID
     */
    public function getSalesOrderLineID()
    {
        return $this->salesOrderLineID;
    }

    /**
     * Sets a new salesOrderLineID
     *
     * BBIE
     *  Order Line Reference. Sales Order_ Line Identifier. Identifier
     *  An identifier for the referenced order line, assigned by the seller.
     *  0..1
     *  Order Line Reference
     *  Sales Order
     *  Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SalesOrderLineID $salesOrderLineID
     * @return self
     */
    public function setSalesOrderLineID(\Greenter\Ubl\Entity\CommonBasic\SalesOrderLineID $salesOrderLineID)
    {
        $this->salesOrderLineID = $salesOrderLineID;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Order Line Reference. UUID. Identifier
     *  A universally unique identifier for this order line reference.
     *  0..1
     *  Order Line Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Order Line Reference. UUID. Identifier
     *  A universally unique identifier for this order line reference.
     *  0..1
     *  Order Line Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\UUID $uUID
     * @return self
     */
    public function setUUID(\Greenter\Ubl\Entity\CommonBasic\UUID $uUID)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as lineStatusCode
     *
     * BBIE
     *  Order Line Reference. Line Status Code. Code
     *  A code signifying the status of the referenced order line with respect to its original state.
     *  0..1
     *  Order Line Reference
     *  Line Status Code
     *  Code
     *  Line Status
     *  Line Status_ Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\LineStatusCode
     */
    public function getLineStatusCode()
    {
        return $this->lineStatusCode;
    }

    /**
     * Sets a new lineStatusCode
     *
     * BBIE
     *  Order Line Reference. Line Status Code. Code
     *  A code signifying the status of the referenced order line with respect to its original state.
     *  0..1
     *  Order Line Reference
     *  Line Status Code
     *  Code
     *  Line Status
     *  Line Status_ Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\LineStatusCode $lineStatusCode
     * @return self
     */
    public function setLineStatusCode(\Greenter\Ubl\Entity\CommonBasic\LineStatusCode $lineStatusCode)
    {
        $this->lineStatusCode = $lineStatusCode;
        return $this;
    }

    /**
     * Gets as orderReference
     *
     * ASBIE
     *  Order Line Reference. Order Reference
     *  A reference to the Order containing the referenced order line.
     *  0..1
     *  Order Line Reference
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\OrderReference
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * Sets a new orderReference
     *
     * ASBIE
     *  Order Line Reference. Order Reference
     *  A reference to the Order containing the referenced order line.
     *  0..1
     *  Order Line Reference
     *  Order Reference
     *  Order Reference
     *  Order Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\OrderReference $orderReference
     * @return self
     */
    public function setOrderReference(\Greenter\Ubl\Entity\CommonAggregateComponents\OrderReference $orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }


}

