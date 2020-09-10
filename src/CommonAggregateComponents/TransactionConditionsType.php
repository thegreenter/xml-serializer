<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing TransactionConditionsType
 *
 * ABIE
 *  Transaction Conditions. Details
 *  A class to describe purchasing, sales, or payment conditions.
 *  Transaction Conditions
 *  Payment Conditions, Sales Conditions
 * XSD Type: TransactionConditionsType
 */
class TransactionConditionsType
{

    /**
     * BBIE
     *  Transaction Conditions. Identifier
     *  An identifier for conditions of the transaction, typically purchase/sales conditions.
     *  0..1
     *  Transaction Conditions
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Transaction Conditions. Action Code. Code
     *  A code signifying a type of action relating to sales or payment conditions.
     *  0..1
     *  Transaction Conditions
     *  Action Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ActionCode $actionCode
     */
    private $actionCode = null;

    /**
     * BBIE
     *  Transaction Conditions. Description. Text
     *  Text describing the transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Transaction Conditions. Document Reference
     *  A document associated with these transaction conditions.
     *  0..n
     *  Transaction Conditions
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Transaction Conditions. Identifier
     *  An identifier for conditions of the transaction, typically purchase/sales conditions.
     *  0..1
     *  Transaction Conditions
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
     *  Transaction Conditions. Identifier
     *  An identifier for conditions of the transaction, typically purchase/sales conditions.
     *  0..1
     *  Transaction Conditions
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
     * Gets as actionCode
     *
     * BBIE
     *  Transaction Conditions. Action Code. Code
     *  A code signifying a type of action relating to sales or payment conditions.
     *  0..1
     *  Transaction Conditions
     *  Action Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ActionCode
     */
    public function getActionCode()
    {
        return $this->actionCode;
    }

    /**
     * Sets a new actionCode
     *
     * BBIE
     *  Transaction Conditions. Action Code. Code
     *  A code signifying a type of action relating to sales or payment conditions.
     *  0..1
     *  Transaction Conditions
     *  Action Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ActionCode $actionCode
     * @return self
     */
    public function setActionCode(\Greenter\Ubl\Entity\CommonBasic\ActionCode $actionCode)
    {
        $this->actionCode = $actionCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Transaction Conditions. Description. Text
     *  Text describing the transaction conditions.
     *  0..n
     *  Transaction Conditions
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
     *  Transaction Conditions. Description. Text
     *  Text describing the transaction conditions.
     *  0..n
     *  Transaction Conditions
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
     *  Transaction Conditions. Description. Text
     *  Text describing the transaction conditions.
     *  0..n
     *  Transaction Conditions
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
     *  Transaction Conditions. Description. Text
     *  Text describing the transaction conditions.
     *  0..n
     *  Transaction Conditions
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
     *  Transaction Conditions. Description. Text
     *  Text describing the transaction conditions.
     *  0..n
     *  Transaction Conditions
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
     * Adds as documentReference
     *
     * ASBIE
     *  Transaction Conditions. Document Reference
     *  A document associated with these transaction conditions.
     *  0..n
     *  Transaction Conditions
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
     *  Transaction Conditions. Document Reference
     *  A document associated with these transaction conditions.
     *  0..n
     *  Transaction Conditions
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
     *  Transaction Conditions. Document Reference
     *  A document associated with these transaction conditions.
     *  0..n
     *  Transaction Conditions
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
     *  Transaction Conditions. Document Reference
     *  A document associated with these transaction conditions.
     *  0..n
     *  Transaction Conditions
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
     *  Transaction Conditions. Document Reference
     *  A document associated with these transaction conditions.
     *  0..n
     *  Transaction Conditions
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


}

