<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing PaymentMeansType
 *
 * ABIE
 *  Payment Means. Details
 *  A class to describe a means of payment.
 *  Payment Means
 * XSD Type: PaymentMeansType
 */
class PaymentMeansType
{

    /**
     * BBIE
     *  Payment Means. Identifier
     *  An identifier for this means of payment.
     *  0..1
     *  Payment Means
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Payment Means. Payment Means Code. Code
     *  A code signifying the type of this means of payment.
     *  1
     *  Payment Means
     *  Payment Means Code
     *  Code
     *  Payment Means
     *  Payment Means_ Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PaymentMeansCode $paymentMeansCode
     */
    private $paymentMeansCode = null;

    /**
     * BBIE
     *  Payment Means. Payment Due Date. Date
     *  The date on which payment is due for this means of payment.
     *  0..1
     *  Payment Means
     *  Payment Due Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $paymentDueDate
     */
    private $paymentDueDate = null;

    /**
     * BBIE
     *  Payment Means. Payment Channel Code. Code
     *  A code signifying the payment channel for this means of payment.
     *  0..1
     *  Payment Means
     *  Payment Channel Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PaymentChannelCode $paymentChannelCode
     */
    private $paymentChannelCode = null;

    /**
     * BBIE
     *  Payment Means. Instruction Identifier. Identifier
     *  An identifier for the payment instruction.
     *  0..1
     *  Payment Means
     *  Instruction Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\InstructionID $instructionID
     */
    private $instructionID = null;

    /**
     * BBIE
     *  Payment Means. Instruction_ Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Payment Means
     *  Instruction
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\InstructionNote[] $instructionNote
     */
    private $instructionNote = [
        
    ];

    /**
     * BBIE
     *  Payment Means. Payment Identifier. Identifier
     *  An identifier for a payment made using this means of payment.
     *  0..n
     *  Payment Means
     *  Payment Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PaymentID[] $paymentID
     */
    private $paymentID = [
        
    ];

    /**
     * ASBIE
     *  Payment Means. Card Account
     *  A credit card, debit card, or charge card account that constitutes this means of payment.
     *  0..1
     *  Payment Means
     *  Card Account
     *  Card Account
     *  Card Account
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\CardAccount $cardAccount
     */
    private $cardAccount = null;

    /**
     * ASBIE
     *  Payment Means. Payer_ Financial Account. Financial Account
     *  The payer's financial account.
     *  0..1
     *  Payment Means
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
     *  Payment Means. Payee_ Financial Account. Financial Account
     *  The payee's financial account.
     *  0..1
     *  Payment Means
     *  Payee
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PayeeFinancialAccount $payeeFinancialAccount
     */
    private $payeeFinancialAccount = null;

    /**
     * ASBIE
     *  Payment Means. Credit Account
     *  A credit account associated with this means of payment.
     *  0..1
     *  Payment Means
     *  Credit Account
     *  Credit Account
     *  Credit Account
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\CreditAccount $creditAccount
     */
    private $creditAccount = null;

    /**
     * ASBIE
     *  Payment Means. Payment Mandate
     *  The payment mandate associated with this means of payment.
     *  0..1
     *  Payment Means
     *  Payment Mandate
     *  Payment Mandate
     *  Payment Mandate
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentMandate $paymentMandate
     */
    private $paymentMandate = null;

    /**
     * ASBIE
     *  Payment Means. Trade Financing
     *  A trade finance agreement applicable to this means of payment.
     *  0..1
     *  Payment Means
     *  Trade Financing
     *  Trade Financing
     *  Trade Financing
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\TradeFinancing $tradeFinancing
     */
    private $tradeFinancing = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Payment Means. Identifier
     *  An identifier for this means of payment.
     *  0..1
     *  Payment Means
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
     *  Payment Means. Identifier
     *  An identifier for this means of payment.
     *  0..1
     *  Payment Means
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
     * Gets as paymentMeansCode
     *
     * BBIE
     *  Payment Means. Payment Means Code. Code
     *  A code signifying the type of this means of payment.
     *  1
     *  Payment Means
     *  Payment Means Code
     *  Code
     *  Payment Means
     *  Payment Means_ Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PaymentMeansCode
     */
    public function getPaymentMeansCode()
    {
        return $this->paymentMeansCode;
    }

    /**
     * Sets a new paymentMeansCode
     *
     * BBIE
     *  Payment Means. Payment Means Code. Code
     *  A code signifying the type of this means of payment.
     *  1
     *  Payment Means
     *  Payment Means Code
     *  Code
     *  Payment Means
     *  Payment Means_ Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PaymentMeansCode $paymentMeansCode
     * @return self
     */
    public function setPaymentMeansCode(\Greenter\Ubl\Entity\CommonBasic\PaymentMeansCode $paymentMeansCode)
    {
        $this->paymentMeansCode = $paymentMeansCode;
        return $this;
    }

    /**
     * Gets as paymentDueDate
     *
     * BBIE
     *  Payment Means. Payment Due Date. Date
     *  The date on which payment is due for this means of payment.
     *  0..1
     *  Payment Means
     *  Payment Due Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getPaymentDueDate()
    {
        return $this->paymentDueDate;
    }

    /**
     * Sets a new paymentDueDate
     *
     * BBIE
     *  Payment Means. Payment Due Date. Date
     *  The date on which payment is due for this means of payment.
     *  0..1
     *  Payment Means
     *  Payment Due Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $paymentDueDate
     * @return self
     */
    public function setPaymentDueDate(\DateTime $paymentDueDate)
    {
        $this->paymentDueDate = $paymentDueDate;
        return $this;
    }

    /**
     * Gets as paymentChannelCode
     *
     * BBIE
     *  Payment Means. Payment Channel Code. Code
     *  A code signifying the payment channel for this means of payment.
     *  0..1
     *  Payment Means
     *  Payment Channel Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PaymentChannelCode
     */
    public function getPaymentChannelCode()
    {
        return $this->paymentChannelCode;
    }

    /**
     * Sets a new paymentChannelCode
     *
     * BBIE
     *  Payment Means. Payment Channel Code. Code
     *  A code signifying the payment channel for this means of payment.
     *  0..1
     *  Payment Means
     *  Payment Channel Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PaymentChannelCode $paymentChannelCode
     * @return self
     */
    public function setPaymentChannelCode(\Greenter\Ubl\Entity\CommonBasic\PaymentChannelCode $paymentChannelCode)
    {
        $this->paymentChannelCode = $paymentChannelCode;
        return $this;
    }

    /**
     * Gets as instructionID
     *
     * BBIE
     *  Payment Means. Instruction Identifier. Identifier
     *  An identifier for the payment instruction.
     *  0..1
     *  Payment Means
     *  Instruction Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\InstructionID
     */
    public function getInstructionID()
    {
        return $this->instructionID;
    }

    /**
     * Sets a new instructionID
     *
     * BBIE
     *  Payment Means. Instruction Identifier. Identifier
     *  An identifier for the payment instruction.
     *  0..1
     *  Payment Means
     *  Instruction Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\InstructionID $instructionID
     * @return self
     */
    public function setInstructionID(\Greenter\Ubl\Entity\CommonBasic\InstructionID $instructionID)
    {
        $this->instructionID = $instructionID;
        return $this;
    }

    /**
     * Adds as instructionNote
     *
     * BBIE
     *  Payment Means. Instruction_ Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Payment Means
     *  Instruction
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\InstructionNote $instructionNote
     */
    public function addToInstructionNote(\Greenter\Ubl\Entity\CommonBasic\InstructionNote $instructionNote)
    {
        $this->instructionNote[] = $instructionNote;
        return $this;
    }

    /**
     * isset instructionNote
     *
     * BBIE
     *  Payment Means. Instruction_ Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Payment Means
     *  Instruction
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInstructionNote($index)
    {
        return isset($this->instructionNote[$index]);
    }

    /**
     * unset instructionNote
     *
     * BBIE
     *  Payment Means. Instruction_ Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Payment Means
     *  Instruction
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInstructionNote($index)
    {
        unset($this->instructionNote[$index]);
    }

    /**
     * Gets as instructionNote
     *
     * BBIE
     *  Payment Means. Instruction_ Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Payment Means
     *  Instruction
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\InstructionNote[]
     */
    public function getInstructionNote()
    {
        return $this->instructionNote;
    }

    /**
     * Sets a new instructionNote
     *
     * BBIE
     *  Payment Means. Instruction_ Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Payment Means
     *  Instruction
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\InstructionNote[] $instructionNote
     * @return self
     */
    public function setInstructionNote(array $instructionNote)
    {
        $this->instructionNote = $instructionNote;
        return $this;
    }

    /**
     * Adds as paymentID
     *
     * BBIE
     *  Payment Means. Payment Identifier. Identifier
     *  An identifier for a payment made using this means of payment.
     *  0..n
     *  Payment Means
     *  Payment Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\PaymentID $paymentID
     */
    public function addToPaymentID(\Greenter\Ubl\Entity\CommonBasic\PaymentID $paymentID)
    {
        $this->paymentID[] = $paymentID;
        return $this;
    }

    /**
     * isset paymentID
     *
     * BBIE
     *  Payment Means. Payment Identifier. Identifier
     *  An identifier for a payment made using this means of payment.
     *  0..n
     *  Payment Means
     *  Payment Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentID($index)
    {
        return isset($this->paymentID[$index]);
    }

    /**
     * unset paymentID
     *
     * BBIE
     *  Payment Means. Payment Identifier. Identifier
     *  An identifier for a payment made using this means of payment.
     *  0..n
     *  Payment Means
     *  Payment Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentID($index)
    {
        unset($this->paymentID[$index]);
    }

    /**
     * Gets as paymentID
     *
     * BBIE
     *  Payment Means. Payment Identifier. Identifier
     *  An identifier for a payment made using this means of payment.
     *  0..n
     *  Payment Means
     *  Payment Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PaymentID[]
     */
    public function getPaymentID()
    {
        return $this->paymentID;
    }

    /**
     * Sets a new paymentID
     *
     * BBIE
     *  Payment Means. Payment Identifier. Identifier
     *  An identifier for a payment made using this means of payment.
     *  0..n
     *  Payment Means
     *  Payment Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PaymentID[] $paymentID
     * @return self
     */
    public function setPaymentID(array $paymentID)
    {
        $this->paymentID = $paymentID;
        return $this;
    }

    /**
     * Gets as cardAccount
     *
     * ASBIE
     *  Payment Means. Card Account
     *  A credit card, debit card, or charge card account that constitutes this means of payment.
     *  0..1
     *  Payment Means
     *  Card Account
     *  Card Account
     *  Card Account
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\CardAccount
     */
    public function getCardAccount()
    {
        return $this->cardAccount;
    }

    /**
     * Sets a new cardAccount
     *
     * ASBIE
     *  Payment Means. Card Account
     *  A credit card, debit card, or charge card account that constitutes this means of payment.
     *  0..1
     *  Payment Means
     *  Card Account
     *  Card Account
     *  Card Account
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\CardAccount $cardAccount
     * @return self
     */
    public function setCardAccount(\Greenter\Ubl\Entity\CommonAggregateComponents\CardAccount $cardAccount)
    {
        $this->cardAccount = $cardAccount;
        return $this;
    }

    /**
     * Gets as payerFinancialAccount
     *
     * ASBIE
     *  Payment Means. Payer_ Financial Account. Financial Account
     *  The payer's financial account.
     *  0..1
     *  Payment Means
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
     *  Payment Means. Payer_ Financial Account. Financial Account
     *  The payer's financial account.
     *  0..1
     *  Payment Means
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
     * Gets as payeeFinancialAccount
     *
     * ASBIE
     *  Payment Means. Payee_ Financial Account. Financial Account
     *  The payee's financial account.
     *  0..1
     *  Payment Means
     *  Payee
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PayeeFinancialAccount
     */
    public function getPayeeFinancialAccount()
    {
        return $this->payeeFinancialAccount;
    }

    /**
     * Sets a new payeeFinancialAccount
     *
     * ASBIE
     *  Payment Means. Payee_ Financial Account. Financial Account
     *  The payee's financial account.
     *  0..1
     *  Payment Means
     *  Payee
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PayeeFinancialAccount $payeeFinancialAccount
     * @return self
     */
    public function setPayeeFinancialAccount(\Greenter\Ubl\Entity\CommonAggregateComponents\PayeeFinancialAccount $payeeFinancialAccount)
    {
        $this->payeeFinancialAccount = $payeeFinancialAccount;
        return $this;
    }

    /**
     * Gets as creditAccount
     *
     * ASBIE
     *  Payment Means. Credit Account
     *  A credit account associated with this means of payment.
     *  0..1
     *  Payment Means
     *  Credit Account
     *  Credit Account
     *  Credit Account
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\CreditAccount
     */
    public function getCreditAccount()
    {
        return $this->creditAccount;
    }

    /**
     * Sets a new creditAccount
     *
     * ASBIE
     *  Payment Means. Credit Account
     *  A credit account associated with this means of payment.
     *  0..1
     *  Payment Means
     *  Credit Account
     *  Credit Account
     *  Credit Account
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\CreditAccount $creditAccount
     * @return self
     */
    public function setCreditAccount(\Greenter\Ubl\Entity\CommonAggregateComponents\CreditAccount $creditAccount)
    {
        $this->creditAccount = $creditAccount;
        return $this;
    }

    /**
     * Gets as paymentMandate
     *
     * ASBIE
     *  Payment Means. Payment Mandate
     *  The payment mandate associated with this means of payment.
     *  0..1
     *  Payment Means
     *  Payment Mandate
     *  Payment Mandate
     *  Payment Mandate
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentMandate
     */
    public function getPaymentMandate()
    {
        return $this->paymentMandate;
    }

    /**
     * Sets a new paymentMandate
     *
     * ASBIE
     *  Payment Means. Payment Mandate
     *  The payment mandate associated with this means of payment.
     *  0..1
     *  Payment Means
     *  Payment Mandate
     *  Payment Mandate
     *  Payment Mandate
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentMandate $paymentMandate
     * @return self
     */
    public function setPaymentMandate(\Greenter\Ubl\Entity\CommonAggregateComponents\PaymentMandate $paymentMandate)
    {
        $this->paymentMandate = $paymentMandate;
        return $this;
    }

    /**
     * Gets as tradeFinancing
     *
     * ASBIE
     *  Payment Means. Trade Financing
     *  A trade finance agreement applicable to this means of payment.
     *  0..1
     *  Payment Means
     *  Trade Financing
     *  Trade Financing
     *  Trade Financing
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\TradeFinancing
     */
    public function getTradeFinancing()
    {
        return $this->tradeFinancing;
    }

    /**
     * Sets a new tradeFinancing
     *
     * ASBIE
     *  Payment Means. Trade Financing
     *  A trade finance agreement applicable to this means of payment.
     *  0..1
     *  Payment Means
     *  Trade Financing
     *  Trade Financing
     *  Trade Financing
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TradeFinancing $tradeFinancing
     * @return self
     */
    public function setTradeFinancing(\Greenter\Ubl\Entity\CommonAggregateComponents\TradeFinancing $tradeFinancing)
    {
        $this->tradeFinancing = $tradeFinancing;
        return $this;
    }


}

