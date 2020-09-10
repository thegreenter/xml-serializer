<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing StatementLineType
 *
 * ABIE
 *  Statement Line. Details
 *  A class to define a line in a Statement of account.
 *  Statement Line
 * XSD Type: StatementLineType
 */
class StatementLineType
{

    /**
     * BBIE
     *  Statement Line. Identifier
     *  An identifier for this statement line.
     *  1
     *  Statement Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Statement Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Statement Line
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
     *  Statement Line. UUID. Identifier
     *  A universally unique identifier for this statement line.
     *  0..1
     *  Statement Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Statement Line. Balance Brought Forward_ Indicator. Indicator
     *  An indication that this statement line contains an outstanding balance from the previous bill(s) (true) or does not (false).
     *  0..1
     *  Statement Line
     *  Balance Brought Forward
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $balanceBroughtForwardIndicator
     */
    private $balanceBroughtForwardIndicator = null;

    /**
     * BBIE
     *  Statement Line. Debit_ Line Amount. Amount
     *  The amount debited on this statement line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Credit_ Line Amount. Amount
     *  The amount credited on this statement line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Balance Amount. Amount
     *  The balance amount on this statement line.
     *  0..1
     *  Statement Line
     *  Balance Amount
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\BalanceAmount $balanceAmount
     */
    private $balanceAmount = null;

    /**
     * BBIE
     *  Statement Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Statement Line
     *  Payment Purpose Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PaymentPurposeCode $paymentPurposeCode
     */
    private $paymentPurposeCode = null;

    /**
     * ASBIE
     *  Statement Line. Payment Means
     *  A means of payment associated with this statement line.
     *  0..1
     *  Statement Line
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentMeans $paymentMeans
     */
    private $paymentMeans = null;

    /**
     * ASBIE
     *  Statement Line. Payment Terms
     *  A specification of payment terms associated with this statement line.
     *  0..n
     *  Statement Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Statement Line. Buyer_ Customer Party. Customer Party
     *  The buyer associated with this statement line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier associated with this statement line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Originator_ Customer Party. Customer Party
     *  The originating party.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Accounting_ Customer Party. Customer Party
     *  The Accounting Customer Party related to the statement information reported on this Statement Line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Accounting_ Supplier Party. Supplier Party
     *  The Accounting Supplier Party related to the statement information reported on this Statement Line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Invoice_ Period. Period
     *  An invoice period to which this statement line applies.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Billing Reference
     *  A reference to a billing document associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Document Reference
     *  A reference to a document associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Exchange Rate
     *  The rate of exchange between the currency of the Statement and the currency of the document described in the BillingReference.
     *  0..1
     *  Statement Line
     *  Exchange Rate
     *  Exchange Rate
     *  Exchange Rate
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ExchangeRate $exchangeRate
     */
    private $exchangeRate = null;

    /**
     * ASBIE
     *  Statement Line. Allowance Charge
     *  A charge or discount price component associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Collected_ Payment. Payment
     *  A collected payment.
     *  0..n
     *  Statement Line
     *  Collected
     *  Payment
     *  Payment
     *  Payment
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\CollectedPayment[] $collectedPayment
     */
    private $collectedPayment = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Statement Line. Identifier
     *  An identifier for this statement line.
     *  1
     *  Statement Line
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
     *  Statement Line. Identifier
     *  An identifier for this statement line.
     *  1
     *  Statement Line
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
     *  Statement Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Statement Line
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
     *  Statement Line. UUID. Identifier
     *  A universally unique identifier for this statement line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. UUID. Identifier
     *  A universally unique identifier for this statement line.
     *  0..1
     *  Statement Line
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
     * Gets as balanceBroughtForwardIndicator
     *
     * BBIE
     *  Statement Line. Balance Brought Forward_ Indicator. Indicator
     *  An indication that this statement line contains an outstanding balance from the previous bill(s) (true) or does not (false).
     *  0..1
     *  Statement Line
     *  Balance Brought Forward
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getBalanceBroughtForwardIndicator()
    {
        return $this->balanceBroughtForwardIndicator;
    }

    /**
     * Sets a new balanceBroughtForwardIndicator
     *
     * BBIE
     *  Statement Line. Balance Brought Forward_ Indicator. Indicator
     *  An indication that this statement line contains an outstanding balance from the previous bill(s) (true) or does not (false).
     *  0..1
     *  Statement Line
     *  Balance Brought Forward
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $balanceBroughtForwardIndicator
     * @return self
     */
    public function setBalanceBroughtForwardIndicator($balanceBroughtForwardIndicator)
    {
        $this->balanceBroughtForwardIndicator = $balanceBroughtForwardIndicator;
        return $this;
    }

    /**
     * Gets as debitLineAmount
     *
     * BBIE
     *  Statement Line. Debit_ Line Amount. Amount
     *  The amount debited on this statement line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Debit_ Line Amount. Amount
     *  The amount debited on this statement line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Credit_ Line Amount. Amount
     *  The amount credited on this statement line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Credit_ Line Amount. Amount
     *  The amount credited on this statement line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Balance Amount. Amount
     *  The balance amount on this statement line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Balance Amount. Amount
     *  The balance amount on this statement line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Payment Purpose Code. Code
     *  A code signifying the business purpose for this payment.
     *  0..1
     *  Statement Line
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
     * Gets as paymentMeans
     *
     * ASBIE
     *  Statement Line. Payment Means
     *  A means of payment associated with this statement line.
     *  0..1
     *  Statement Line
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentMeans
     */
    public function getPaymentMeans()
    {
        return $this->paymentMeans;
    }

    /**
     * Sets a new paymentMeans
     *
     * ASBIE
     *  Statement Line. Payment Means
     *  A means of payment associated with this statement line.
     *  0..1
     *  Statement Line
     *  Payment Means
     *  Payment Means
     *  Payment Means
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentMeans $paymentMeans
     * @return self
     */
    public function setPaymentMeans(\Greenter\Ubl\Entity\CommonAggregateComponents\PaymentMeans $paymentMeans)
    {
        $this->paymentMeans = $paymentMeans;
        return $this;
    }

    /**
     * Adds as paymentTerms
     *
     * ASBIE
     *  Statement Line. Payment Terms
     *  A specification of payment terms associated with this statement line.
     *  0..n
     *  Statement Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\Greenter\Ubl\Entity\CommonAggregateComponents\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * ASBIE
     *  Statement Line. Payment Terms
     *  A specification of payment terms associated with this statement line.
     *  0..n
     *  Statement Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentTerms($index)
    {
        return isset($this->paymentTerms[$index]);
    }

    /**
     * unset paymentTerms
     *
     * ASBIE
     *  Statement Line. Payment Terms
     *  A specification of payment terms associated with this statement line.
     *  0..n
     *  Statement Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentTerms($index)
    {
        unset($this->paymentTerms[$index]);
    }

    /**
     * Gets as paymentTerms
     *
     * ASBIE
     *  Statement Line. Payment Terms
     *  A specification of payment terms associated with this statement line.
     *  0..n
     *  Statement Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * ASBIE
     *  Statement Line. Payment Terms
     *  A specification of payment terms associated with this statement line.
     *  0..n
     *  Statement Line
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(array $paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Gets as buyerCustomerParty
     *
     * ASBIE
     *  Statement Line. Buyer_ Customer Party. Customer Party
     *  The buyer associated with this statement line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Buyer_ Customer Party. Customer Party
     *  The buyer associated with this statement line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier associated with this statement line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Seller_ Supplier Party. Supplier Party
     *  The seller/supplier associated with this statement line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Originator_ Customer Party. Customer Party
     *  The originating party.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Originator_ Customer Party. Customer Party
     *  The originating party.
     *  0..1
     *  Statement Line
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
     * Gets as accountingCustomerParty
     *
     * ASBIE
     *  Statement Line. Accounting_ Customer Party. Customer Party
     *  The Accounting Customer Party related to the statement information reported on this Statement Line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Accounting_ Customer Party. Customer Party
     *  The Accounting Customer Party related to the statement information reported on this Statement Line.
     *  0..1
     *  Statement Line
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
     * Gets as accountingSupplierParty
     *
     * ASBIE
     *  Statement Line. Accounting_ Supplier Party. Supplier Party
     *  The Accounting Supplier Party related to the statement information reported on this Statement Line.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Accounting_ Supplier Party. Supplier Party
     *  The Accounting Supplier Party related to the statement information reported on this Statement Line.
     *  0..1
     *  Statement Line
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
     * Gets as payeeParty
     *
     * ASBIE
     *  Statement Line. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Payee_ Party. Party
     *  The payee.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Invoice_ Period. Period
     *  An invoice period to which this statement line applies.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Invoice_ Period. Period
     *  An invoice period to which this statement line applies.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Invoice_ Period. Period
     *  An invoice period to which this statement line applies.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Invoice_ Period. Period
     *  An invoice period to which this statement line applies.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Invoice_ Period. Period
     *  An invoice period to which this statement line applies.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Billing Reference
     *  A reference to a billing document associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Billing Reference
     *  A reference to a billing document associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Billing Reference
     *  A reference to a billing document associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Billing Reference
     *  A reference to a billing document associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Billing Reference
     *  A reference to a billing document associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Document Reference
     *  A reference to a document associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Document Reference
     *  A reference to a document associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Document Reference
     *  A reference to a document associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Document Reference
     *  A reference to a document associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Document Reference
     *  A reference to a document associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Exchange Rate
     *  The rate of exchange between the currency of the Statement and the currency of the document described in the BillingReference.
     *  0..1
     *  Statement Line
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
     *  Statement Line. Exchange Rate
     *  The rate of exchange between the currency of the Statement and the currency of the document described in the BillingReference.
     *  0..1
     *  Statement Line
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

    /**
     * Adds as allowanceCharge
     *
     * ASBIE
     *  Statement Line. Allowance Charge
     *  A charge or discount price component associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Allowance Charge
     *  A charge or discount price component associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Allowance Charge
     *  A charge or discount price component associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Allowance Charge
     *  A charge or discount price component associated with this statement line.
     *  0..n
     *  Statement Line
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
     *  Statement Line. Allowance Charge
     *  A charge or discount price component associated with this statement line.
     *  0..n
     *  Statement Line
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
     * Adds as collectedPayment
     *
     * ASBIE
     *  Statement Line. Collected_ Payment. Payment
     *  A collected payment.
     *  0..n
     *  Statement Line
     *  Collected
     *  Payment
     *  Payment
     *  Payment
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\CollectedPayment $collectedPayment
     */
    public function addToCollectedPayment(\Greenter\Ubl\Entity\CommonAggregateComponents\CollectedPayment $collectedPayment)
    {
        $this->collectedPayment[] = $collectedPayment;
        return $this;
    }

    /**
     * isset collectedPayment
     *
     * ASBIE
     *  Statement Line. Collected_ Payment. Payment
     *  A collected payment.
     *  0..n
     *  Statement Line
     *  Collected
     *  Payment
     *  Payment
     *  Payment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCollectedPayment($index)
    {
        return isset($this->collectedPayment[$index]);
    }

    /**
     * unset collectedPayment
     *
     * ASBIE
     *  Statement Line. Collected_ Payment. Payment
     *  A collected payment.
     *  0..n
     *  Statement Line
     *  Collected
     *  Payment
     *  Payment
     *  Payment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCollectedPayment($index)
    {
        unset($this->collectedPayment[$index]);
    }

    /**
     * Gets as collectedPayment
     *
     * ASBIE
     *  Statement Line. Collected_ Payment. Payment
     *  A collected payment.
     *  0..n
     *  Statement Line
     *  Collected
     *  Payment
     *  Payment
     *  Payment
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\CollectedPayment[]
     */
    public function getCollectedPayment()
    {
        return $this->collectedPayment;
    }

    /**
     * Sets a new collectedPayment
     *
     * ASBIE
     *  Statement Line. Collected_ Payment. Payment
     *  A collected payment.
     *  0..n
     *  Statement Line
     *  Collected
     *  Payment
     *  Payment
     *  Payment
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\CollectedPayment[] $collectedPayment
     * @return self
     */
    public function setCollectedPayment(array $collectedPayment)
    {
        $this->collectedPayment = $collectedPayment;
        return $this;
    }


}

