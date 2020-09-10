<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing OnAccountPaymentType
 *
 * ABIE
 *  On Account Payment. Details
 *  A scheduled prepayment (on-account payment) for a estimated utility consumption
 *  On Account Payment
 * XSD Type: OnAccountPaymentType
 */
class OnAccountPaymentType
{

    /**
     * BBIE
     *  On Account Payment. Estimated_ Consumed Quantity. Quantity
     *  The estimated consumed quantity covered by the payment.
     *  1
     *  On Account Payment
     *  Estimated
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\EstimatedConsumedQuantity $estimatedConsumedQuantity
     */
    private $estimatedConsumedQuantity = null;

    /**
     * BBIE
     *  On Account Payment. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  On Account Payment
     *  Note
     *  Text
     *  Text. Type
     *  We make a reservation for price regulations. You will receive you next yearly statement about one year from today.
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * ASBIE
     *  On Account Payment. Payment Terms
     *  A specification of payment terms associated with this payment.
     *  1..n
     *  On Account Payment
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * Gets as estimatedConsumedQuantity
     *
     * BBIE
     *  On Account Payment. Estimated_ Consumed Quantity. Quantity
     *  The estimated consumed quantity covered by the payment.
     *  1
     *  On Account Payment
     *  Estimated
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\EstimatedConsumedQuantity
     */
    public function getEstimatedConsumedQuantity()
    {
        return $this->estimatedConsumedQuantity;
    }

    /**
     * Sets a new estimatedConsumedQuantity
     *
     * BBIE
     *  On Account Payment. Estimated_ Consumed Quantity. Quantity
     *  The estimated consumed quantity covered by the payment.
     *  1
     *  On Account Payment
     *  Estimated
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\EstimatedConsumedQuantity $estimatedConsumedQuantity
     * @return self
     */
    public function setEstimatedConsumedQuantity(\Greenter\Ubl\Entity\CommonBasic\EstimatedConsumedQuantity $estimatedConsumedQuantity)
    {
        $this->estimatedConsumedQuantity = $estimatedConsumedQuantity;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  On Account Payment. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  On Account Payment
     *  Note
     *  Text
     *  Text. Type
     *  We make a reservation for price regulations. You will receive you next yearly statement about one year from today.
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
     *  On Account Payment. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  On Account Payment
     *  Note
     *  Text
     *  Text. Type
     *  We make a reservation for price regulations. You will receive you next yearly statement about one year from today.
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
     *  On Account Payment. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  On Account Payment
     *  Note
     *  Text
     *  Text. Type
     *  We make a reservation for price regulations. You will receive you next yearly statement about one year from today.
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
     *  On Account Payment. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  On Account Payment
     *  Note
     *  Text
     *  Text. Type
     *  We make a reservation for price regulations. You will receive you next yearly statement about one year from today.
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
     *  On Account Payment. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  On Account Payment
     *  Note
     *  Text
     *  Text. Type
     *  We make a reservation for price regulations. You will receive you next yearly statement about one year from today.
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
     * Adds as paymentTerms
     *
     * ASBIE
     *  On Account Payment. Payment Terms
     *  A specification of payment terms associated with this payment.
     *  1..n
     *  On Account Payment
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
     *  On Account Payment. Payment Terms
     *  A specification of payment terms associated with this payment.
     *  1..n
     *  On Account Payment
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
     *  On Account Payment. Payment Terms
     *  A specification of payment terms associated with this payment.
     *  1..n
     *  On Account Payment
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
     *  On Account Payment. Payment Terms
     *  A specification of payment terms associated with this payment.
     *  1..n
     *  On Account Payment
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
     *  On Account Payment. Payment Terms
     *  A specification of payment terms associated with this payment.
     *  1..n
     *  On Account Payment
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


}

