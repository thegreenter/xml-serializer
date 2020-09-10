<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing BillingReferenceType
 *
 * ABIE
 *  Billing Reference. Details
 *  A class to define a reference to a billing document.
 *  Billing Reference
 * XSD Type: BillingReferenceType
 */
class BillingReferenceType
{

    /**
     * ASBIE
     *  Billing Reference. Invoice_ Document Reference. Document Reference
     *  A reference to an invoice.
     *  0..1
     *  Billing Reference
     *  Invoice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\InvoiceDocumentReference $invoiceDocumentReference
     */
    private $invoiceDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Self Billed Invoice_ Document Reference. Document Reference
     *  A reference to a self billed invoice.
     *  0..1
     *  Billing Reference
     *  Self Billed Invoice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\SelfBilledInvoiceDocumentReference $selfBilledInvoiceDocumentReference
     */
    private $selfBilledInvoiceDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Credit Note_ Document Reference. Document Reference
     *  A reference to a credit note.
     *  0..1
     *  Billing Reference
     *  Credit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\CreditNoteDocumentReference $creditNoteDocumentReference
     */
    private $creditNoteDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Self Billed Credit Note_ Document Reference. Document Reference
     *  A reference to a self billed credit note.
     *  0..1
     *  Billing Reference
     *  Self Billed Credit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\SelfBilledCreditNoteDocumentReference $selfBilledCreditNoteDocumentReference
     */
    private $selfBilledCreditNoteDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Debit Note_ Document Reference. Document Reference
     *  A reference to a debit note.
     *  0..1
     *  Billing Reference
     *  Debit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\DebitNoteDocumentReference $debitNoteDocumentReference
     */
    private $debitNoteDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Reminder_ Document Reference. Document Reference
     *  A reference to a billing reminder.
     *  0..1
     *  Billing Reference
     *  Reminder
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ReminderDocumentReference $reminderDocumentReference
     */
    private $reminderDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Additional_ Document Reference. Document Reference
     *  A reference to an additional document.
     *  0..1
     *  Billing Reference
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\AdditionalDocumentReference $additionalDocumentReference
     */
    private $additionalDocumentReference = null;

    /**
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  A reference to a transaction line in the billing document.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\BillingReferenceLine[] $billingReferenceLine
     */
    private $billingReferenceLine = [
        
    ];

    /**
     * Gets as invoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Invoice_ Document Reference. Document Reference
     *  A reference to an invoice.
     *  0..1
     *  Billing Reference
     *  Invoice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\InvoiceDocumentReference
     */
    public function getInvoiceDocumentReference()
    {
        return $this->invoiceDocumentReference;
    }

    /**
     * Sets a new invoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Invoice_ Document Reference. Document Reference
     *  A reference to an invoice.
     *  0..1
     *  Billing Reference
     *  Invoice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\InvoiceDocumentReference $invoiceDocumentReference
     * @return self
     */
    public function setInvoiceDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\InvoiceDocumentReference $invoiceDocumentReference)
    {
        $this->invoiceDocumentReference = $invoiceDocumentReference;
        return $this;
    }

    /**
     * Gets as selfBilledInvoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Invoice_ Document Reference. Document Reference
     *  A reference to a self billed invoice.
     *  0..1
     *  Billing Reference
     *  Self Billed Invoice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\SelfBilledInvoiceDocumentReference
     */
    public function getSelfBilledInvoiceDocumentReference()
    {
        return $this->selfBilledInvoiceDocumentReference;
    }

    /**
     * Sets a new selfBilledInvoiceDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Invoice_ Document Reference. Document Reference
     *  A reference to a self billed invoice.
     *  0..1
     *  Billing Reference
     *  Self Billed Invoice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SelfBilledInvoiceDocumentReference $selfBilledInvoiceDocumentReference
     * @return self
     */
    public function setSelfBilledInvoiceDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\SelfBilledInvoiceDocumentReference $selfBilledInvoiceDocumentReference)
    {
        $this->selfBilledInvoiceDocumentReference = $selfBilledInvoiceDocumentReference;
        return $this;
    }

    /**
     * Gets as creditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Credit Note_ Document Reference. Document Reference
     *  A reference to a credit note.
     *  0..1
     *  Billing Reference
     *  Credit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\CreditNoteDocumentReference
     */
    public function getCreditNoteDocumentReference()
    {
        return $this->creditNoteDocumentReference;
    }

    /**
     * Sets a new creditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Credit Note_ Document Reference. Document Reference
     *  A reference to a credit note.
     *  0..1
     *  Billing Reference
     *  Credit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\CreditNoteDocumentReference $creditNoteDocumentReference
     * @return self
     */
    public function setCreditNoteDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\CreditNoteDocumentReference $creditNoteDocumentReference)
    {
        $this->creditNoteDocumentReference = $creditNoteDocumentReference;
        return $this;
    }

    /**
     * Gets as selfBilledCreditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Credit Note_ Document Reference. Document Reference
     *  A reference to a self billed credit note.
     *  0..1
     *  Billing Reference
     *  Self Billed Credit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\SelfBilledCreditNoteDocumentReference
     */
    public function getSelfBilledCreditNoteDocumentReference()
    {
        return $this->selfBilledCreditNoteDocumentReference;
    }

    /**
     * Sets a new selfBilledCreditNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Self Billed Credit Note_ Document Reference. Document Reference
     *  A reference to a self billed credit note.
     *  0..1
     *  Billing Reference
     *  Self Billed Credit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SelfBilledCreditNoteDocumentReference $selfBilledCreditNoteDocumentReference
     * @return self
     */
    public function setSelfBilledCreditNoteDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\SelfBilledCreditNoteDocumentReference $selfBilledCreditNoteDocumentReference)
    {
        $this->selfBilledCreditNoteDocumentReference = $selfBilledCreditNoteDocumentReference;
        return $this;
    }

    /**
     * Gets as debitNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Debit Note_ Document Reference. Document Reference
     *  A reference to a debit note.
     *  0..1
     *  Billing Reference
     *  Debit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\DebitNoteDocumentReference
     */
    public function getDebitNoteDocumentReference()
    {
        return $this->debitNoteDocumentReference;
    }

    /**
     * Sets a new debitNoteDocumentReference
     *
     * ASBIE
     *  Billing Reference. Debit Note_ Document Reference. Document Reference
     *  A reference to a debit note.
     *  0..1
     *  Billing Reference
     *  Debit Note
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DebitNoteDocumentReference $debitNoteDocumentReference
     * @return self
     */
    public function setDebitNoteDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\DebitNoteDocumentReference $debitNoteDocumentReference)
    {
        $this->debitNoteDocumentReference = $debitNoteDocumentReference;
        return $this;
    }

    /**
     * Gets as reminderDocumentReference
     *
     * ASBIE
     *  Billing Reference. Reminder_ Document Reference. Document Reference
     *  A reference to a billing reminder.
     *  0..1
     *  Billing Reference
     *  Reminder
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ReminderDocumentReference
     */
    public function getReminderDocumentReference()
    {
        return $this->reminderDocumentReference;
    }

    /**
     * Sets a new reminderDocumentReference
     *
     * ASBIE
     *  Billing Reference. Reminder_ Document Reference. Document Reference
     *  A reference to a billing reminder.
     *  0..1
     *  Billing Reference
     *  Reminder
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ReminderDocumentReference $reminderDocumentReference
     * @return self
     */
    public function setReminderDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\ReminderDocumentReference $reminderDocumentReference)
    {
        $this->reminderDocumentReference = $reminderDocumentReference;
        return $this;
    }

    /**
     * Gets as additionalDocumentReference
     *
     * ASBIE
     *  Billing Reference. Additional_ Document Reference. Document Reference
     *  A reference to an additional document.
     *  0..1
     *  Billing Reference
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\AdditionalDocumentReference
     */
    public function getAdditionalDocumentReference()
    {
        return $this->additionalDocumentReference;
    }

    /**
     * Sets a new additionalDocumentReference
     *
     * ASBIE
     *  Billing Reference. Additional_ Document Reference. Document Reference
     *  A reference to an additional document.
     *  0..1
     *  Billing Reference
     *  Additional
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AdditionalDocumentReference $additionalDocumentReference
     * @return self
     */
    public function setAdditionalDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\AdditionalDocumentReference $additionalDocumentReference)
    {
        $this->additionalDocumentReference = $additionalDocumentReference;
        return $this;
    }

    /**
     * Adds as billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  A reference to a transaction line in the billing document.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\BillingReferenceLine $billingReferenceLine
     */
    public function addToBillingReferenceLine(\Greenter\Ubl\Entity\CommonAggregateComponents\BillingReferenceLine $billingReferenceLine)
    {
        $this->billingReferenceLine[] = $billingReferenceLine;
        return $this;
    }

    /**
     * isset billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  A reference to a transaction line in the billing document.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBillingReferenceLine($index)
    {
        return isset($this->billingReferenceLine[$index]);
    }

    /**
     * unset billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  A reference to a transaction line in the billing document.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBillingReferenceLine($index)
    {
        unset($this->billingReferenceLine[$index]);
    }

    /**
     * Gets as billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  A reference to a transaction line in the billing document.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\BillingReferenceLine[]
     */
    public function getBillingReferenceLine()
    {
        return $this->billingReferenceLine;
    }

    /**
     * Sets a new billingReferenceLine
     *
     * ASBIE
     *  Billing Reference. Billing Reference Line
     *  A reference to a transaction line in the billing document.
     *  0..n
     *  Billing Reference
     *  Billing Reference Line
     *  Billing Reference Line
     *  Billing Reference Line
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\BillingReferenceLine[] $billingReferenceLine
     * @return self
     */
    public function setBillingReferenceLine(array $billingReferenceLine)
    {
        $this->billingReferenceLine = $billingReferenceLine;
        return $this;
    }


}

