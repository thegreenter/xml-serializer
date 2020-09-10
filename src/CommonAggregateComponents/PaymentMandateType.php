<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing PaymentMandateType
 *
 * ABIE
 *  Payment Mandate. Details
 *  A class to describe a payment mandate.
 *  Payment Mandate
 * XSD Type: PaymentMandateType
 */
class PaymentMandateType
{

    /**
     * BBIE
     *  Payment Mandate. Identifier
     *  An identifier for this payment mandate.
     *  0..1
     *  Payment Mandate
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Payment Mandate. Mandate Type Code. Code
     *  A code signifying the type of this payment mandate.
     *  0..1
     *  Payment Mandate
     *  Mandate Type Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\MandateTypeCode $mandateTypeCode
     */
    private $mandateTypeCode = null;

    /**
     * BBIE
     *  Payment Mandate. Maximum Payment Instructions. Numeric
     *  The number of maximum payment instructions allowed within the validity period.
     *  0..1
     *  Payment Mandate
     *  Maximum Payment Instructions
     *  Numeric
     *  Numeric. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\MaximumPaymentInstructionsNumeric $maximumPaymentInstructionsNumeric
     */
    private $maximumPaymentInstructionsNumeric = null;

    /**
     * BBIE
     *  Payment Mandate. Maximum_ Paid Amount. Amount
     *  The maximum amount to be paid within a single instruction.
     *  0..1
     *  Payment Mandate
     *  Maximum
     *  Paid Amount
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\MaximumPaidAmount $maximumPaidAmount
     */
    private $maximumPaidAmount = null;

    /**
     * BBIE
     *  Payment Mandate. Signature Identifier. Identifier
     *  An identifier for a signature applied by a signatory party.
     *  0..1
     *  Payment Mandate
     *  Signature Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SignatureID $signatureID
     */
    private $signatureID = null;

    /**
     * ASBIE
     *  Payment Mandate. Payer_ Party. Party
     *  The payer party (if different from the debtor).
     *  0..1
     *  Payment Mandate
     *  Payer
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PayerParty $payerParty
     */
    private $payerParty = null;

    /**
     * ASBIE
     *  Payment Mandate. Payer_ Financial Account. Financial Account
     *  The payer's financial account.
     *  0..1
     *  Payment Mandate
     *  Payer
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PayerFinancialAccount $payerFinancialAccount
     */
    private $payerFinancialAccount = null;

    /**
     * ASBIE
     *  Payment Mandate. Validity_ Period. Period
     *  The period during which this mandate is valid.
     *  0..1
     *  Payment Mandate
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ValidityPeriod $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * ASBIE
     *  Payment Mandate. Payment Reversal_ Period. Period
     *  The period of the reverse payment.
     *  0..1
     *  Payment Mandate
     *  Payment Reversal
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentReversalPeriod $paymentReversalPeriod
     */
    private $paymentReversalPeriod = null;

    /**
     * ASBIE
     *  Payment Mandate. Clause
     *  A clause applicable to this payment mandate.
     *  0..n
     *  Payment Mandate
     *  Clause
     *  Clause
     *  Clause
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Clause[] $clause
     */
    private $clause = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Payment Mandate. Identifier
     *  An identifier for this payment mandate.
     *  0..1
     *  Payment Mandate
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
     *  Payment Mandate. Identifier
     *  An identifier for this payment mandate.
     *  0..1
     *  Payment Mandate
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
     * Gets as mandateTypeCode
     *
     * BBIE
     *  Payment Mandate. Mandate Type Code. Code
     *  A code signifying the type of this payment mandate.
     *  0..1
     *  Payment Mandate
     *  Mandate Type Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\MandateTypeCode
     */
    public function getMandateTypeCode()
    {
        return $this->mandateTypeCode;
    }

    /**
     * Sets a new mandateTypeCode
     *
     * BBIE
     *  Payment Mandate. Mandate Type Code. Code
     *  A code signifying the type of this payment mandate.
     *  0..1
     *  Payment Mandate
     *  Mandate Type Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\MandateTypeCode $mandateTypeCode
     * @return self
     */
    public function setMandateTypeCode(\Greenter\Ubl\Entity\CommonBasic\MandateTypeCode $mandateTypeCode)
    {
        $this->mandateTypeCode = $mandateTypeCode;
        return $this;
    }

    /**
     * Gets as maximumPaymentInstructionsNumeric
     *
     * BBIE
     *  Payment Mandate. Maximum Payment Instructions. Numeric
     *  The number of maximum payment instructions allowed within the validity period.
     *  0..1
     *  Payment Mandate
     *  Maximum Payment Instructions
     *  Numeric
     *  Numeric. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\MaximumPaymentInstructionsNumeric
     */
    public function getMaximumPaymentInstructionsNumeric()
    {
        return $this->maximumPaymentInstructionsNumeric;
    }

    /**
     * Sets a new maximumPaymentInstructionsNumeric
     *
     * BBIE
     *  Payment Mandate. Maximum Payment Instructions. Numeric
     *  The number of maximum payment instructions allowed within the validity period.
     *  0..1
     *  Payment Mandate
     *  Maximum Payment Instructions
     *  Numeric
     *  Numeric. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\MaximumPaymentInstructionsNumeric $maximumPaymentInstructionsNumeric
     * @return self
     */
    public function setMaximumPaymentInstructionsNumeric(\Greenter\Ubl\Entity\CommonBasic\MaximumPaymentInstructionsNumeric $maximumPaymentInstructionsNumeric)
    {
        $this->maximumPaymentInstructionsNumeric = $maximumPaymentInstructionsNumeric;
        return $this;
    }

    /**
     * Gets as maximumPaidAmount
     *
     * BBIE
     *  Payment Mandate. Maximum_ Paid Amount. Amount
     *  The maximum amount to be paid within a single instruction.
     *  0..1
     *  Payment Mandate
     *  Maximum
     *  Paid Amount
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\MaximumPaidAmount
     */
    public function getMaximumPaidAmount()
    {
        return $this->maximumPaidAmount;
    }

    /**
     * Sets a new maximumPaidAmount
     *
     * BBIE
     *  Payment Mandate. Maximum_ Paid Amount. Amount
     *  The maximum amount to be paid within a single instruction.
     *  0..1
     *  Payment Mandate
     *  Maximum
     *  Paid Amount
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\MaximumPaidAmount $maximumPaidAmount
     * @return self
     */
    public function setMaximumPaidAmount(\Greenter\Ubl\Entity\CommonBasic\MaximumPaidAmount $maximumPaidAmount)
    {
        $this->maximumPaidAmount = $maximumPaidAmount;
        return $this;
    }

    /**
     * Gets as signatureID
     *
     * BBIE
     *  Payment Mandate. Signature Identifier. Identifier
     *  An identifier for a signature applied by a signatory party.
     *  0..1
     *  Payment Mandate
     *  Signature Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SignatureID
     */
    public function getSignatureID()
    {
        return $this->signatureID;
    }

    /**
     * Sets a new signatureID
     *
     * BBIE
     *  Payment Mandate. Signature Identifier. Identifier
     *  An identifier for a signature applied by a signatory party.
     *  0..1
     *  Payment Mandate
     *  Signature Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SignatureID $signatureID
     * @return self
     */
    public function setSignatureID(\Greenter\Ubl\Entity\CommonBasic\SignatureID $signatureID)
    {
        $this->signatureID = $signatureID;
        return $this;
    }

    /**
     * Gets as payerParty
     *
     * ASBIE
     *  Payment Mandate. Payer_ Party. Party
     *  The payer party (if different from the debtor).
     *  0..1
     *  Payment Mandate
     *  Payer
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PayerParty
     */
    public function getPayerParty()
    {
        return $this->payerParty;
    }

    /**
     * Sets a new payerParty
     *
     * ASBIE
     *  Payment Mandate. Payer_ Party. Party
     *  The payer party (if different from the debtor).
     *  0..1
     *  Payment Mandate
     *  Payer
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PayerParty $payerParty
     * @return self
     */
    public function setPayerParty(\Greenter\Ubl\Entity\CommonAggregateComponents\PayerParty $payerParty)
    {
        $this->payerParty = $payerParty;
        return $this;
    }

    /**
     * Gets as payerFinancialAccount
     *
     * ASBIE
     *  Payment Mandate. Payer_ Financial Account. Financial Account
     *  The payer's financial account.
     *  0..1
     *  Payment Mandate
     *  Payer
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PayerFinancialAccount
     */
    public function getPayerFinancialAccount()
    {
        return $this->payerFinancialAccount;
    }

    /**
     * Sets a new payerFinancialAccount
     *
     * ASBIE
     *  Payment Mandate. Payer_ Financial Account. Financial Account
     *  The payer's financial account.
     *  0..1
     *  Payment Mandate
     *  Payer
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PayerFinancialAccount $payerFinancialAccount
     * @return self
     */
    public function setPayerFinancialAccount(\Greenter\Ubl\Entity\CommonAggregateComponents\PayerFinancialAccount $payerFinancialAccount)
    {
        $this->payerFinancialAccount = $payerFinancialAccount;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Payment Mandate. Validity_ Period. Period
     *  The period during which this mandate is valid.
     *  0..1
     *  Payment Mandate
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ValidityPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Payment Mandate. Validity_ Period. Period
     *  The period during which this mandate is valid.
     *  0..1
     *  Payment Mandate
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as paymentReversalPeriod
     *
     * ASBIE
     *  Payment Mandate. Payment Reversal_ Period. Period
     *  The period of the reverse payment.
     *  0..1
     *  Payment Mandate
     *  Payment Reversal
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentReversalPeriod
     */
    public function getPaymentReversalPeriod()
    {
        return $this->paymentReversalPeriod;
    }

    /**
     * Sets a new paymentReversalPeriod
     *
     * ASBIE
     *  Payment Mandate. Payment Reversal_ Period. Period
     *  The period of the reverse payment.
     *  0..1
     *  Payment Mandate
     *  Payment Reversal
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentReversalPeriod $paymentReversalPeriod
     * @return self
     */
    public function setPaymentReversalPeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\PaymentReversalPeriod $paymentReversalPeriod)
    {
        $this->paymentReversalPeriod = $paymentReversalPeriod;
        return $this;
    }

    /**
     * Adds as clause
     *
     * ASBIE
     *  Payment Mandate. Clause
     *  A clause applicable to this payment mandate.
     *  0..n
     *  Payment Mandate
     *  Clause
     *  Clause
     *  Clause
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Clause $clause
     */
    public function addToClause(\Greenter\Ubl\Entity\CommonAggregateComponents\Clause $clause)
    {
        $this->clause[] = $clause;
        return $this;
    }

    /**
     * isset clause
     *
     * ASBIE
     *  Payment Mandate. Clause
     *  A clause applicable to this payment mandate.
     *  0..n
     *  Payment Mandate
     *  Clause
     *  Clause
     *  Clause
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClause($index)
    {
        return isset($this->clause[$index]);
    }

    /**
     * unset clause
     *
     * ASBIE
     *  Payment Mandate. Clause
     *  A clause applicable to this payment mandate.
     *  0..n
     *  Payment Mandate
     *  Clause
     *  Clause
     *  Clause
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClause($index)
    {
        unset($this->clause[$index]);
    }

    /**
     * Gets as clause
     *
     * ASBIE
     *  Payment Mandate. Clause
     *  A clause applicable to this payment mandate.
     *  0..n
     *  Payment Mandate
     *  Clause
     *  Clause
     *  Clause
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Clause[]
     */
    public function getClause()
    {
        return $this->clause;
    }

    /**
     * Sets a new clause
     *
     * ASBIE
     *  Payment Mandate. Clause
     *  A clause applicable to this payment mandate.
     *  0..n
     *  Payment Mandate
     *  Clause
     *  Clause
     *  Clause
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Clause[] $clause
     * @return self
     */
    public function setClause(array $clause)
    {
        $this->clause = $clause;
        return $this;
    }


}

