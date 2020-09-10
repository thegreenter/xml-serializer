<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing RemittanceAdviceLineType
 *
 * ABIE
 *  Remittance Advice Line. Details
 *  A class to define a line in a Remittance Advice.
 *  Remittance Advice Line
 * XSD Type: RemittanceAdviceLineType
 */
class RemittanceAdviceLineType
{

    /**
     * BBIE
     *  Remittance Advice Line. Identifier
     *  An identifier for this remittance advice line.
     *  1
     *  Remittance Advice Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Remittance Advice Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. UUID. Identifier
     *  A universally unique identifier for this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Remittance Advice Line. Debit_ Line Amount. Amount
     *  The amount debited on this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Debit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\DebitLineAmount $debitLineAmount
     */
    private $debitLineAmount = null;

    /**
     * BBIE
     *  Remittance Advice Line. Credit_ Line Amount. Amount
     *  The amount credited on this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Credit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\CreditLineAmount $creditLineAmount
     */
    private $creditLineAmount = null;

    /**
     * BBIE
     *  Remittance Advice Line. Balance Amount. Amount
     *  The monetary balance associated with this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Balance Amount
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\BalanceAmount $balanceAmount
     */
    private $balanceAmount = null;

    /**
     * BBIE
     *  Remittance Advice Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Remittance Advice Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PaymentPurposeCode $paymentPurposeCode
     */
    private $paymentPurposeCode = null;

    /**
     * BBIE
     *  Remittance Advice Line. Invoicing Party_ Reference. Text
     *  A reference to the order for payment used by the invoicing party. This may have been requested of the payer by the payee to accompany its remittance.
     *  0..1
     *  Remittance Advice Line
     *  Invoicing Party
     *  Reference
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\InvoicingPartyReference $invoicingPartyReference
     */
    private $invoicingPartyReference = null;

    /**
     * ASBIE
     *  Remittance Advice Line. Accounting_ Supplier Party. Supplier Party
     *  The Accounting Supplier Party related to the remittance information reported on this Remittance Advice Line.
     *  0..1
     *  Remittance Advice Line
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\AccountingSupplierParty $accountingSupplierParty
     */
    private $accountingSupplierParty = null;

    /**
     * ASBIE
     *  Remittance Advice Line. Accounting_ Customer Party. Customer Party
     *  The Accounting Customer Party related to the remittance information reported on this Remittance Advice Line.
     *  0..1
     *  Remittance Advice Line
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\AccountingCustomerParty $accountingCustomerParty
     */
    private $accountingCustomerParty = null;

    /**
     * ASBIE
     *  Remittance Advice Line. Buyer_ Customer Party. Customer Party
     *  The buyer associated with this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty
     */
    private $buyerCustomerParty = null;

    /**
     * ASBIE
     *  Remittance Advice Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier associated with this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty
     */
    private $sellerSupplierParty = null;

    /**
     * ASBIE
     *  Remittance Advice Line. Originator_ Customer Party. Customer Party
     *  The originating party.
     *  0..1
     *  Remittance Advice Line
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\OriginatorCustomerParty $originatorCustomerParty
     */
    private $originatorCustomerParty = null;

    /**
     * ASBIE
     *  Remittance Advice Line. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Remittance Advice Line
     *  Payee
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PayeeParty $payeeParty
     */
    private $payeeParty = null;

    /**
     * ASBIE
     *  Remittance Advice Line. Invoice_ Period. Period
     *  An invoice period to which this remittance advice line applies.
     *  0..n
     *  Remittance Advice Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\InvoicePeriod[] $invoicePeriod
     */
    private $invoicePeriod = [
        
    ];

    /**
     * ASBIE
     *  Remittance Advice Line. Billing Reference
     *  A reference to a billing document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Document Reference
     *  A reference to a document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Exchange Rate
     *  The rate of exchange between the currency of the Remittance Advice and the currency of the document described in the BillingReference.
     *  0..1
     *  Remittance Advice Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ExchangeRate $exchangeRate
     */
    private $exchangeRate = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Remittance Advice Line. Identifier
     *  An identifier for this remittance advice line.
     *  1
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Identifier
     *  An identifier for this remittance advice line.
     *  1
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Remittance Advice Line
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
     * Gets as uUID
     *
     * BBIE
     *  Remittance Advice Line. UUID. Identifier
     *  A universally unique identifier for this remittance advice line.
     *  0..1
     *  Remittance Advice Line
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
     *  Remittance Advice Line. UUID. Identifier
     *  A universally unique identifier for this remittance advice line.
     *  0..1
     *  Remittance Advice Line
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
     * Gets as debitLineAmount
     *
     * BBIE
     *  Remittance Advice Line. Debit_ Line Amount. Amount
     *  The amount debited on this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Debit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\DebitLineAmount
     */
    public function getDebitLineAmount()
    {
        return $this->debitLineAmount;
    }

    /**
     * Sets a new debitLineAmount
     *
     * BBIE
     *  Remittance Advice Line. Debit_ Line Amount. Amount
     *  The amount debited on this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Debit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\DebitLineAmount $debitLineAmount
     * @return self
     */
    public function setDebitLineAmount(\Greenter\Ubl\Entity\CommonBasic\DebitLineAmount $debitLineAmount)
    {
        $this->debitLineAmount = $debitLineAmount;
        return $this;
    }

    /**
     * Gets as creditLineAmount
     *
     * BBIE
     *  Remittance Advice Line. Credit_ Line Amount. Amount
     *  The amount credited on this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Credit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\CreditLineAmount
     */
    public function getCreditLineAmount()
    {
        return $this->creditLineAmount;
    }

    /**
     * Sets a new creditLineAmount
     *
     * BBIE
     *  Remittance Advice Line. Credit_ Line Amount. Amount
     *  The amount credited on this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Credit
     *  Line Amount
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\CreditLineAmount $creditLineAmount
     * @return self
     */
    public function setCreditLineAmount(\Greenter\Ubl\Entity\CommonBasic\CreditLineAmount $creditLineAmount)
    {
        $this->creditLineAmount = $creditLineAmount;
        return $this;
    }

    /**
     * Gets as balanceAmount
     *
     * BBIE
     *  Remittance Advice Line. Balance Amount. Amount
     *  The monetary balance associated with this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Balance Amount
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\BalanceAmount
     */
    public function getBalanceAmount()
    {
        return $this->balanceAmount;
    }

    /**
     * Sets a new balanceAmount
     *
     * BBIE
     *  Remittance Advice Line. Balance Amount. Amount
     *  The monetary balance associated with this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Balance Amount
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\BalanceAmount $balanceAmount
     * @return self
     */
    public function setBalanceAmount(\Greenter\Ubl\Entity\CommonBasic\BalanceAmount $balanceAmount)
    {
        $this->balanceAmount = $balanceAmount;
        return $this;
    }

    /**
     * Gets as paymentPurposeCode
     *
     * BBIE
     *  Remittance Advice Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Remittance Advice Line
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
     * Gets as invoicingPartyReference
     *
     * BBIE
     *  Remittance Advice Line. Invoicing Party_ Reference. Text
     *  A reference to the order for payment used by the invoicing party. This may have been requested of the payer by the payee to accompany its remittance.
     *  0..1
     *  Remittance Advice Line
     *  Invoicing Party
     *  Reference
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\InvoicingPartyReference
     */
    public function getInvoicingPartyReference()
    {
        return $this->invoicingPartyReference;
    }

    /**
     * Sets a new invoicingPartyReference
     *
     * BBIE
     *  Remittance Advice Line. Invoicing Party_ Reference. Text
     *  A reference to the order for payment used by the invoicing party. This may have been requested of the payer by the payee to accompany its remittance.
     *  0..1
     *  Remittance Advice Line
     *  Invoicing Party
     *  Reference
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\InvoicingPartyReference $invoicingPartyReference
     * @return self
     */
    public function setInvoicingPartyReference(\Greenter\Ubl\Entity\CommonBasic\InvoicingPartyReference $invoicingPartyReference)
    {
        $this->invoicingPartyReference = $invoicingPartyReference;
        return $this;
    }

    /**
     * Gets as accountingSupplierParty
     *
     * ASBIE
     *  Remittance Advice Line. Accounting_ Supplier Party. Supplier Party
     *  The Accounting Supplier Party related to the remittance information reported on this Remittance Advice Line.
     *  0..1
     *  Remittance Advice Line
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\AccountingSupplierParty
     */
    public function getAccountingSupplierParty()
    {
        return $this->accountingSupplierParty;
    }

    /**
     * Sets a new accountingSupplierParty
     *
     * ASBIE
     *  Remittance Advice Line. Accounting_ Supplier Party. Supplier Party
     *  The Accounting Supplier Party related to the remittance information reported on this Remittance Advice Line.
     *  0..1
     *  Remittance Advice Line
     *  Accounting
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AccountingSupplierParty $accountingSupplierParty
     * @return self
     */
    public function setAccountingSupplierParty(\Greenter\Ubl\Entity\CommonAggregateComponents\AccountingSupplierParty $accountingSupplierParty)
    {
        $this->accountingSupplierParty = $accountingSupplierParty;
        return $this;
    }

    /**
     * Gets as accountingCustomerParty
     *
     * ASBIE
     *  Remittance Advice Line. Accounting_ Customer Party. Customer Party
     *  The Accounting Customer Party related to the remittance information reported on this Remittance Advice Line.
     *  0..1
     *  Remittance Advice Line
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\AccountingCustomerParty
     */
    public function getAccountingCustomerParty()
    {
        return $this->accountingCustomerParty;
    }

    /**
     * Sets a new accountingCustomerParty
     *
     * ASBIE
     *  Remittance Advice Line. Accounting_ Customer Party. Customer Party
     *  The Accounting Customer Party related to the remittance information reported on this Remittance Advice Line.
     *  0..1
     *  Remittance Advice Line
     *  Accounting
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AccountingCustomerParty $accountingCustomerParty
     * @return self
     */
    public function setAccountingCustomerParty(\Greenter\Ubl\Entity\CommonAggregateComponents\AccountingCustomerParty $accountingCustomerParty)
    {
        $this->accountingCustomerParty = $accountingCustomerParty;
        return $this;
    }

    /**
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Remittance Advice Line. Buyer_ Customer Party. Customer Party
     *  The buyer associated with this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\BuyerCustomerParty
     */
    public function getBuyerCustomerParty()
    {
        return $this->buyerCustomerParty;
    }

    /**
     * Sets a new buyerCustomerParty
     *
     * ASBIE
     *  Remittance Advice Line. Buyer_ Customer Party. Customer Party
     *  The buyer associated with this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Buyer
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty
     * @return self
     */
    public function setBuyerCustomerParty(\Greenter\Ubl\Entity\CommonAggregateComponents\BuyerCustomerParty $buyerCustomerParty)
    {
        $this->buyerCustomerParty = $buyerCustomerParty;
        return $this;
    }

    /**
     * Gets as sellerSupplierParty
     *
     * ASBIE
     *  Remittance Advice Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier associated with this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\SellerSupplierParty
     */
    public function getSellerSupplierParty()
    {
        return $this->sellerSupplierParty;
    }

    /**
     * Sets a new sellerSupplierParty
     *
     * ASBIE
     *  Remittance Advice Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier associated with this remittance advice line.
     *  0..1
     *  Remittance Advice Line
     *  Seller
     *  Supplier Party
     *  Supplier Party
     *  Supplier Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty
     * @return self
     */
    public function setSellerSupplierParty(\Greenter\Ubl\Entity\CommonAggregateComponents\SellerSupplierParty $sellerSupplierParty)
    {
        $this->sellerSupplierParty = $sellerSupplierParty;
        return $this;
    }

    /**
     * Gets as originatorCustomerParty
     *
     * ASBIE
     *  Remittance Advice Line. Originator_ Customer Party. Customer Party
     *  The originating party.
     *  0..1
     *  Remittance Advice Line
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\OriginatorCustomerParty
     */
    public function getOriginatorCustomerParty()
    {
        return $this->originatorCustomerParty;
    }

    /**
     * Sets a new originatorCustomerParty
     *
     * ASBIE
     *  Remittance Advice Line. Originator_ Customer Party. Customer Party
     *  The originating party.
     *  0..1
     *  Remittance Advice Line
     *  Originator
     *  Customer Party
     *  Customer Party
     *  Customer Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\OriginatorCustomerParty $originatorCustomerParty
     * @return self
     */
    public function setOriginatorCustomerParty(\Greenter\Ubl\Entity\CommonAggregateComponents\OriginatorCustomerParty $originatorCustomerParty)
    {
        $this->originatorCustomerParty = $originatorCustomerParty;
        return $this;
    }

    /**
     * Gets as payeeParty
     *
     * ASBIE
     *  Remittance Advice Line. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Remittance Advice Line
     *  Payee
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PayeeParty
     */
    public function getPayeeParty()
    {
        return $this->payeeParty;
    }

    /**
     * Sets a new payeeParty
     *
     * ASBIE
     *  Remittance Advice Line. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Remittance Advice Line
     *  Payee
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PayeeParty $payeeParty
     * @return self
     */
    public function setPayeeParty(\Greenter\Ubl\Entity\CommonAggregateComponents\PayeeParty $payeeParty)
    {
        $this->payeeParty = $payeeParty;
        return $this;
    }

    /**
     * Adds as invoicePeriod
     *
     * ASBIE
     *  Remittance Advice Line. Invoice_ Period. Period
     *  An invoice period to which this remittance advice line applies.
     *  0..n
     *  Remittance Advice Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\InvoicePeriod $invoicePeriod
     */
    public function addToInvoicePeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\InvoicePeriod $invoicePeriod)
    {
        $this->invoicePeriod[] = $invoicePeriod;
        return $this;
    }

    /**
     * isset invoicePeriod
     *
     * ASBIE
     *  Remittance Advice Line. Invoice_ Period. Period
     *  An invoice period to which this remittance advice line applies.
     *  0..n
     *  Remittance Advice Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInvoicePeriod($index)
    {
        return isset($this->invoicePeriod[$index]);
    }

    /**
     * unset invoicePeriod
     *
     * ASBIE
     *  Remittance Advice Line. Invoice_ Period. Period
     *  An invoice period to which this remittance advice line applies.
     *  0..n
     *  Remittance Advice Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInvoicePeriod($index)
    {
        unset($this->invoicePeriod[$index]);
    }

    /**
     * Gets as invoicePeriod
     *
     * ASBIE
     *  Remittance Advice Line. Invoice_ Period. Period
     *  An invoice period to which this remittance advice line applies.
     *  0..n
     *  Remittance Advice Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\InvoicePeriod[]
     */
    public function getInvoicePeriod()
    {
        return $this->invoicePeriod;
    }

    /**
     * Sets a new invoicePeriod
     *
     * ASBIE
     *  Remittance Advice Line. Invoice_ Period. Period
     *  An invoice period to which this remittance advice line applies.
     *  0..n
     *  Remittance Advice Line
     *  Invoice
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\InvoicePeriod[] $invoicePeriod
     * @return self
     */
    public function setInvoicePeriod(array $invoicePeriod)
    {
        $this->invoicePeriod = $invoicePeriod;
        return $this;
    }

    /**
     * Adds as billingReference
     *
     * ASBIE
     *  Remittance Advice Line. Billing Reference
     *  A reference to a billing document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Billing Reference
     *  A reference to a billing document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Billing Reference
     *  A reference to a billing document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Billing Reference
     *  A reference to a billing document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Billing Reference
     *  A reference to a billing document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Document Reference
     *  A reference to a document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Document Reference
     *  A reference to a document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Document Reference
     *  A reference to a document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Document Reference
     *  A reference to a document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     *  Remittance Advice Line. Document Reference
     *  A reference to a document associated with this remittance advice line.
     *  0..n
     *  Remittance Advice Line
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
     * Gets as exchangeRate
     *
     * ASBIE
     *  Remittance Advice Line. Exchange Rate
     *  The rate of exchange between the currency of the Remittance Advice and the currency of the document described in the BillingReference.
     *  0..1
     *  Remittance Advice Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ExchangeRate
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * ASBIE
     *  Remittance Advice Line. Exchange Rate
     *  The rate of exchange between the currency of the Remittance Advice and the currency of the document described in the BillingReference.
     *  0..1
     *  Remittance Advice Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ExchangeRate $exchangeRate
     * @return self
     */
    public function setExchangeRate(\Greenter\Ubl\Entity\CommonAggregateComponents\ExchangeRate $exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;
        return $this;
    }


}

