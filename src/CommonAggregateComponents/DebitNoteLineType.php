<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing DebitNoteLineType
 *
 * ABIE
 *  Debit Note Line. Details
 *  A class to define a line in a Debit Note.
 *  Debit Note Line
 * XSD Type: DebitNoteLineType
 */
class DebitNoteLineType
{

    /**
     * BBIE
     *  Debit Note Line. Identifier
     *  An identifier for this debit note line.
     *  1
     *  Debit Note Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Debit Note Line. UUID. Identifier
     *  A universally unique identifier for this debit note line.
     *  0..1
     *  Debit Note Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Debit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Debited_ Quantity. Quantity
     *  The quantity of Items debited in this debit note line.
     *  0..1
     *  Debit Note Line
     *  Debited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\DebitedQuantity $debitedQuantity
     */
    private $debitedQuantity = null;

    /**
     * BBIE
     *  Debit Note Line. Line Extension Amount. Amount
     *  The total amount for this debit note line, including allowance charges but net of taxes.
     *  1
     *  Debit Note Line
     *  Line Extension Amount
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\LineExtensionAmount $lineExtensionAmount
     */
    private $lineExtensionAmount = null;

    /**
     * BBIE
     *  Debit Note Line. Tax Point Date. Date
     *  The date of this debit note line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Debit Note Line
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $taxPointDate
     */
    private $taxPointDate = null;

    /**
     * BBIE
     *  Debit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this debit note line, expressed as a code.
     *  0..1
     *  Debit Note Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\AccountingCostCode $accountingCostCode
     */
    private $accountingCostCode = null;

    /**
     * BBIE
     *  Debit Note Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this debit note line, expressed as text.
     *  0..1
     *  Debit Note Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\AccountingCost $accountingCost
     */
    private $accountingCost = null;

    /**
     * BBIE
     *  Debit Note Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Debit Note Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PaymentPurposeCode $paymentPurposeCode
     */
    private $paymentPurposeCode = null;

    /**
     * ASBIE
     *  Debit Note Line. Discrepancy_ Response. Response
     *  A reason for the debit.
     *  0..n
     *  Debit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\DiscrepancyResponse[] $discrepancyResponse
     */
    private $discrepancyResponse = [
        
    ];

    /**
     * ASBIE
     *  Debit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this debit note line.
     *  0..n
     *  Debit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\DespatchLineReference[] $despatchLineReference
     */
    private $despatchLineReference = [
        
    ];

    /**
     * ASBIE
     *  Debit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this debit note line.
     *  0..n
     *  Debit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ReceiptLineReference[] $receiptLineReference
     */
    private $receiptLineReference = [
        
    ];

    /**
     * ASBIE
     *  Debit Note Line. Billing Reference
     *  A reference to a billing document associated with this debit note line.
     *  0..n
     *  Debit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\BillingReference[] $billingReference
     */
    private $billingReference = [
        
    ];

    /**
     * ASBIE
     *  Debit Note Line. Document Reference
     *  A reference to a document associated with this debit note line.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Pricing Reference
     *  A reference to pricing and item location information associated with this debit note line.
     *  0..1
     *  Debit Note Line
     *  Pricing Reference
     *  Pricing Reference
     *  Pricing Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PricingReference $pricingReference
     */
    private $pricingReference = null;

    /**
     * ASBIE
     *  Debit Note Line. Delivery
     *  A delivery associated with this debit note line.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this debit note line.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Allowance Charge
     *  An allowance or charge associated with this debit note.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Item
     *  The item associated with this debit note line.
     *  0..1
     *  Debit Note Line
     *  Item
     *  Item
     *  Item
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Debit Note Line. Price
     *  The price of the item associated with this debit note line.
     *  0..1
     *  Debit Note Line
     *  Price
     *  Price
     *  Price
     *  Unit Price, Base Price
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Price $price
     */
    private $price = null;

    /**
     * ASBIE
     *  Debit Note Line. Sub_ Debit Note Line. Debit Note Line
     *  A recursive description of a debit note line subsidiary to this debit note line.
     *  0..n
     *  Debit Note Line
     *  Sub
     *  Debit Note Line
     *  Debit Note Line
     *  Debit Note Line
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\SubDebitNoteLine[] $subDebitNoteLine
     */
    private $subDebitNoteLine = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Debit Note Line. Identifier
     *  An identifier for this debit note line.
     *  1
     *  Debit Note Line
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
     *  Debit Note Line. Identifier
     *  An identifier for this debit note line.
     *  1
     *  Debit Note Line
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
     * Gets as uUID
     *
     * BBIE
     *  Debit Note Line. UUID. Identifier
     *  A universally unique identifier for this debit note line.
     *  0..1
     *  Debit Note Line
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
     *  Debit Note Line. UUID. Identifier
     *  A universally unique identifier for this debit note line.
     *  0..1
     *  Debit Note Line
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
     * Adds as note
     *
     * BBIE
     *  Debit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Debit Note Line
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
     * Gets as debitedQuantity
     *
     * BBIE
     *  Debit Note Line. Debited_ Quantity. Quantity
     *  The quantity of Items debited in this debit note line.
     *  0..1
     *  Debit Note Line
     *  Debited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\DebitedQuantity
     */
    public function getDebitedQuantity()
    {
        return $this->debitedQuantity;
    }

    /**
     * Sets a new debitedQuantity
     *
     * BBIE
     *  Debit Note Line. Debited_ Quantity. Quantity
     *  The quantity of Items debited in this debit note line.
     *  0..1
     *  Debit Note Line
     *  Debited
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\DebitedQuantity $debitedQuantity
     * @return self
     */
    public function setDebitedQuantity(\Greenter\Ubl\Entity\CommonBasic\DebitedQuantity $debitedQuantity)
    {
        $this->debitedQuantity = $debitedQuantity;
        return $this;
    }

    /**
     * Gets as lineExtensionAmount
     *
     * BBIE
     *  Debit Note Line. Line Extension Amount. Amount
     *  The total amount for this debit note line, including allowance charges but net of taxes.
     *  1
     *  Debit Note Line
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
     *  Debit Note Line. Line Extension Amount. Amount
     *  The total amount for this debit note line, including allowance charges but net of taxes.
     *  1
     *  Debit Note Line
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
     * Gets as taxPointDate
     *
     * BBIE
     *  Debit Note Line. Tax Point Date. Date
     *  The date of this debit note line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Debit Note Line
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getTaxPointDate()
    {
        return $this->taxPointDate;
    }

    /**
     * Sets a new taxPointDate
     *
     * BBIE
     *  Debit Note Line. Tax Point Date. Date
     *  The date of this debit note line, used to indicate the point at which tax becomes applicable.
     *  0..1
     *  Debit Note Line
     *  Tax Point Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $taxPointDate
     * @return self
     */
    public function setTaxPointDate(\DateTime $taxPointDate)
    {
        $this->taxPointDate = $taxPointDate;
        return $this;
    }

    /**
     * Gets as accountingCostCode
     *
     * BBIE
     *  Debit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this debit note line, expressed as a code.
     *  0..1
     *  Debit Note Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\AccountingCostCode
     */
    public function getAccountingCostCode()
    {
        return $this->accountingCostCode;
    }

    /**
     * Sets a new accountingCostCode
     *
     * BBIE
     *  Debit Note Line. Accounting Cost Code. Code
     *  The buyer's accounting cost centre for this debit note line, expressed as a code.
     *  0..1
     *  Debit Note Line
     *  Accounting Cost Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\AccountingCostCode $accountingCostCode
     * @return self
     */
    public function setAccountingCostCode(\Greenter\Ubl\Entity\CommonBasic\AccountingCostCode $accountingCostCode)
    {
        $this->accountingCostCode = $accountingCostCode;
        return $this;
    }

    /**
     * Gets as accountingCost
     *
     * BBIE
     *  Debit Note Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this debit note line, expressed as text.
     *  0..1
     *  Debit Note Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\AccountingCost
     */
    public function getAccountingCost()
    {
        return $this->accountingCost;
    }

    /**
     * Sets a new accountingCost
     *
     * BBIE
     *  Debit Note Line. Accounting Cost. Text
     *  The buyer's accounting cost centre for this debit note line, expressed as text.
     *  0..1
     *  Debit Note Line
     *  Accounting Cost
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\AccountingCost $accountingCost
     * @return self
     */
    public function setAccountingCost(\Greenter\Ubl\Entity\CommonBasic\AccountingCost $accountingCost)
    {
        $this->accountingCost = $accountingCost;
        return $this;
    }

    /**
     * Gets as paymentPurposeCode
     *
     * BBIE
     *  Debit Note Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Debit Note Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PaymentPurposeCode
     */
    public function getPaymentPurposeCode()
    {
        return $this->paymentPurposeCode;
    }

    /**
     * Sets a new paymentPurposeCode
     *
     * BBIE
     *  Debit Note Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Debit Note Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PaymentPurposeCode $paymentPurposeCode
     * @return self
     */
    public function setPaymentPurposeCode(\Greenter\Ubl\Entity\CommonBasic\PaymentPurposeCode $paymentPurposeCode)
    {
        $this->paymentPurposeCode = $paymentPurposeCode;
        return $this;
    }

    /**
     * Adds as discrepancyResponse
     *
     * ASBIE
     *  Debit Note Line. Discrepancy_ Response. Response
     *  A reason for the debit.
     *  0..n
     *  Debit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DiscrepancyResponse $discrepancyResponse
     */
    public function addToDiscrepancyResponse(\Greenter\Ubl\Entity\CommonAggregateComponents\DiscrepancyResponse $discrepancyResponse)
    {
        $this->discrepancyResponse[] = $discrepancyResponse;
        return $this;
    }

    /**
     * isset discrepancyResponse
     *
     * ASBIE
     *  Debit Note Line. Discrepancy_ Response. Response
     *  A reason for the debit.
     *  0..n
     *  Debit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscrepancyResponse($index)
    {
        return isset($this->discrepancyResponse[$index]);
    }

    /**
     * unset discrepancyResponse
     *
     * ASBIE
     *  Debit Note Line. Discrepancy_ Response. Response
     *  A reason for the debit.
     *  0..n
     *  Debit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscrepancyResponse($index)
    {
        unset($this->discrepancyResponse[$index]);
    }

    /**
     * Gets as discrepancyResponse
     *
     * ASBIE
     *  Debit Note Line. Discrepancy_ Response. Response
     *  A reason for the debit.
     *  0..n
     *  Debit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\DiscrepancyResponse[]
     */
    public function getDiscrepancyResponse()
    {
        return $this->discrepancyResponse;
    }

    /**
     * Sets a new discrepancyResponse
     *
     * ASBIE
     *  Debit Note Line. Discrepancy_ Response. Response
     *  A reason for the debit.
     *  0..n
     *  Debit Note Line
     *  Discrepancy
     *  Response
     *  Response
     *  Response
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DiscrepancyResponse[] $discrepancyResponse
     * @return self
     */
    public function setDiscrepancyResponse(array $discrepancyResponse)
    {
        $this->discrepancyResponse = $discrepancyResponse;
        return $this;
    }

    /**
     * Adds as despatchLineReference
     *
     * ASBIE
     *  Debit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this debit note line.
     *  0..n
     *  Debit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DespatchLineReference $despatchLineReference
     */
    public function addToDespatchLineReference(\Greenter\Ubl\Entity\CommonAggregateComponents\DespatchLineReference $despatchLineReference)
    {
        $this->despatchLineReference[] = $despatchLineReference;
        return $this;
    }

    /**
     * isset despatchLineReference
     *
     * ASBIE
     *  Debit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this debit note line.
     *  0..n
     *  Debit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDespatchLineReference($index)
    {
        return isset($this->despatchLineReference[$index]);
    }

    /**
     * unset despatchLineReference
     *
     * ASBIE
     *  Debit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this debit note line.
     *  0..n
     *  Debit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDespatchLineReference($index)
    {
        unset($this->despatchLineReference[$index]);
    }

    /**
     * Gets as despatchLineReference
     *
     * ASBIE
     *  Debit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this debit note line.
     *  0..n
     *  Debit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\DespatchLineReference[]
     */
    public function getDespatchLineReference()
    {
        return $this->despatchLineReference;
    }

    /**
     * Sets a new despatchLineReference
     *
     * ASBIE
     *  Debit Note Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this debit note line.
     *  0..n
     *  Debit Note Line
     *  Despatch
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DespatchLineReference[] $despatchLineReference
     * @return self
     */
    public function setDespatchLineReference(array $despatchLineReference)
    {
        $this->despatchLineReference = $despatchLineReference;
        return $this;
    }

    /**
     * Adds as receiptLineReference
     *
     * ASBIE
     *  Debit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this debit note line.
     *  0..n
     *  Debit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ReceiptLineReference $receiptLineReference
     */
    public function addToReceiptLineReference(\Greenter\Ubl\Entity\CommonAggregateComponents\ReceiptLineReference $receiptLineReference)
    {
        $this->receiptLineReference[] = $receiptLineReference;
        return $this;
    }

    /**
     * isset receiptLineReference
     *
     * ASBIE
     *  Debit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this debit note line.
     *  0..n
     *  Debit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReceiptLineReference($index)
    {
        return isset($this->receiptLineReference[$index]);
    }

    /**
     * unset receiptLineReference
     *
     * ASBIE
     *  Debit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this debit note line.
     *  0..n
     *  Debit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReceiptLineReference($index)
    {
        unset($this->receiptLineReference[$index]);
    }

    /**
     * Gets as receiptLineReference
     *
     * ASBIE
     *  Debit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this debit note line.
     *  0..n
     *  Debit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ReceiptLineReference[]
     */
    public function getReceiptLineReference()
    {
        return $this->receiptLineReference;
    }

    /**
     * Sets a new receiptLineReference
     *
     * ASBIE
     *  Debit Note Line. Receipt_ Line Reference. Line Reference
     *  A reference to a receipt line associated with this debit note line.
     *  0..n
     *  Debit Note Line
     *  Receipt
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ReceiptLineReference[] $receiptLineReference
     * @return self
     */
    public function setReceiptLineReference(array $receiptLineReference)
    {
        $this->receiptLineReference = $receiptLineReference;
        return $this;
    }

    /**
     * Adds as billingReference
     *
     * ASBIE
     *  Debit Note Line. Billing Reference
     *  A reference to a billing document associated with this debit note line.
     *  0..n
     *  Debit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\BillingReference $billingReference
     */
    public function addToBillingReference(\Greenter\Ubl\Entity\CommonAggregateComponents\BillingReference $billingReference)
    {
        $this->billingReference[] = $billingReference;
        return $this;
    }

    /**
     * isset billingReference
     *
     * ASBIE
     *  Debit Note Line. Billing Reference
     *  A reference to a billing document associated with this debit note line.
     *  0..n
     *  Debit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBillingReference($index)
    {
        return isset($this->billingReference[$index]);
    }

    /**
     * unset billingReference
     *
     * ASBIE
     *  Debit Note Line. Billing Reference
     *  A reference to a billing document associated with this debit note line.
     *  0..n
     *  Debit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBillingReference($index)
    {
        unset($this->billingReference[$index]);
    }

    /**
     * Gets as billingReference
     *
     * ASBIE
     *  Debit Note Line. Billing Reference
     *  A reference to a billing document associated with this debit note line.
     *  0..n
     *  Debit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\BillingReference[]
     */
    public function getBillingReference()
    {
        return $this->billingReference;
    }

    /**
     * Sets a new billingReference
     *
     * ASBIE
     *  Debit Note Line. Billing Reference
     *  A reference to a billing document associated with this debit note line.
     *  0..n
     *  Debit Note Line
     *  Billing Reference
     *  Billing Reference
     *  Billing Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\BillingReference[] $billingReference
     * @return self
     */
    public function setBillingReference(array $billingReference)
    {
        $this->billingReference = $billingReference;
        return $this;
    }

    /**
     * Adds as documentReference
     *
     * ASBIE
     *  Debit Note Line. Document Reference
     *  A reference to a document associated with this debit note line.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Document Reference
     *  A reference to a document associated with this debit note line.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Document Reference
     *  A reference to a document associated with this debit note line.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Document Reference
     *  A reference to a document associated with this debit note line.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Document Reference
     *  A reference to a document associated with this debit note line.
     *  0..n
     *  Debit Note Line
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
     * Gets as pricingReference
     *
     * ASBIE
     *  Debit Note Line. Pricing Reference
     *  A reference to pricing and item location information associated with this debit note line.
     *  0..1
     *  Debit Note Line
     *  Pricing Reference
     *  Pricing Reference
     *  Pricing Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PricingReference
     */
    public function getPricingReference()
    {
        return $this->pricingReference;
    }

    /**
     * Sets a new pricingReference
     *
     * ASBIE
     *  Debit Note Line. Pricing Reference
     *  A reference to pricing and item location information associated with this debit note line.
     *  0..1
     *  Debit Note Line
     *  Pricing Reference
     *  Pricing Reference
     *  Pricing Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PricingReference $pricingReference
     * @return self
     */
    public function setPricingReference(\Greenter\Ubl\Entity\CommonAggregateComponents\PricingReference $pricingReference)
    {
        $this->pricingReference = $pricingReference;
        return $this;
    }

    /**
     * Adds as delivery
     *
     * ASBIE
     *  Debit Note Line. Delivery
     *  A delivery associated with this debit note line.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Delivery
     *  A delivery associated with this debit note line.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Delivery
     *  A delivery associated with this debit note line.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Delivery
     *  A delivery associated with this debit note line.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Delivery
     *  A delivery associated with this debit note line.
     *  0..n
     *  Debit Note Line
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
     * Adds as taxTotal
     *
     * ASBIE
     *  Debit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this debit note line.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this debit note line.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this debit note line.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this debit note line.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Tax Total
     *  A total amount of taxes of a particular kind applicable to this debit note line.
     *  0..n
     *  Debit Note Line
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
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Debit Note Line. Allowance Charge
     *  An allowance or charge associated with this debit note.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Allowance Charge
     *  An allowance or charge associated with this debit note.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Allowance Charge
     *  An allowance or charge associated with this debit note.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Allowance Charge
     *  An allowance or charge associated with this debit note.
     *  0..n
     *  Debit Note Line
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
     *  Debit Note Line. Allowance Charge
     *  An allowance or charge associated with this debit note.
     *  0..n
     *  Debit Note Line
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
     * Gets as item
     *
     * ASBIE
     *  Debit Note Line. Item
     *  The item associated with this debit note line.
     *  0..1
     *  Debit Note Line
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
     *  Debit Note Line. Item
     *  The item associated with this debit note line.
     *  0..1
     *  Debit Note Line
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
     * Gets as price
     *
     * ASBIE
     *  Debit Note Line. Price
     *  The price of the item associated with this debit note line.
     *  0..1
     *  Debit Note Line
     *  Price
     *  Price
     *  Price
     *  Unit Price, Base Price
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
     *  Debit Note Line. Price
     *  The price of the item associated with this debit note line.
     *  0..1
     *  Debit Note Line
     *  Price
     *  Price
     *  Price
     *  Unit Price, Base Price
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
     * Adds as subDebitNoteLine
     *
     * ASBIE
     *  Debit Note Line. Sub_ Debit Note Line. Debit Note Line
     *  A recursive description of a debit note line subsidiary to this debit note line.
     *  0..n
     *  Debit Note Line
     *  Sub
     *  Debit Note Line
     *  Debit Note Line
     *  Debit Note Line
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SubDebitNoteLine $subDebitNoteLine
     */
    public function addToSubDebitNoteLine(\Greenter\Ubl\Entity\CommonAggregateComponents\SubDebitNoteLine $subDebitNoteLine)
    {
        $this->subDebitNoteLine[] = $subDebitNoteLine;
        return $this;
    }

    /**
     * isset subDebitNoteLine
     *
     * ASBIE
     *  Debit Note Line. Sub_ Debit Note Line. Debit Note Line
     *  A recursive description of a debit note line subsidiary to this debit note line.
     *  0..n
     *  Debit Note Line
     *  Sub
     *  Debit Note Line
     *  Debit Note Line
     *  Debit Note Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubDebitNoteLine($index)
    {
        return isset($this->subDebitNoteLine[$index]);
    }

    /**
     * unset subDebitNoteLine
     *
     * ASBIE
     *  Debit Note Line. Sub_ Debit Note Line. Debit Note Line
     *  A recursive description of a debit note line subsidiary to this debit note line.
     *  0..n
     *  Debit Note Line
     *  Sub
     *  Debit Note Line
     *  Debit Note Line
     *  Debit Note Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubDebitNoteLine($index)
    {
        unset($this->subDebitNoteLine[$index]);
    }

    /**
     * Gets as subDebitNoteLine
     *
     * ASBIE
     *  Debit Note Line. Sub_ Debit Note Line. Debit Note Line
     *  A recursive description of a debit note line subsidiary to this debit note line.
     *  0..n
     *  Debit Note Line
     *  Sub
     *  Debit Note Line
     *  Debit Note Line
     *  Debit Note Line
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\SubDebitNoteLine[]
     */
    public function getSubDebitNoteLine()
    {
        return $this->subDebitNoteLine;
    }

    /**
     * Sets a new subDebitNoteLine
     *
     * ASBIE
     *  Debit Note Line. Sub_ Debit Note Line. Debit Note Line
     *  A recursive description of a debit note line subsidiary to this debit note line.
     *  0..n
     *  Debit Note Line
     *  Sub
     *  Debit Note Line
     *  Debit Note Line
     *  Debit Note Line
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SubDebitNoteLine[] $subDebitNoteLine
     * @return self
     */
    public function setSubDebitNoteLine(array $subDebitNoteLine)
    {
        $this->subDebitNoteLine = $subDebitNoteLine;
        return $this;
    }


}

