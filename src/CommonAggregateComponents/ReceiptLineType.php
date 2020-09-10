<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ReceiptLineType
 *
 * ABIE
 *  Receipt Line. Details
 *  A class to define a line in a Receipt Advice.
 *  Receipt Line
 * XSD Type: ReceiptLineType
 */
class ReceiptLineType
{

    /**
     * BBIE
     *  Receipt Line. Identifier
     *  An identifier for this receipt line.
     *  1
     *  Receipt Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Receipt Line. UUID. Identifier
     *  A universally unique identifier for this receipt line.
     *  0..1
     *  Receipt Line
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Receipt Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Receipt Line
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
     *  Receipt Line. Received_ Quantity. Quantity
     *  The quantity received.
     *  0..1
     *  Receipt Line
     *  Received
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ReceivedQuantity $receivedQuantity
     */
    private $receivedQuantity = null;

    /**
     * BBIE
     *  Receipt Line. Short_ Quantity. Quantity
     *  The quantity received short; the difference between the quantity reported despatched and the quantity actually received.
     *  0..1
     *  Receipt Line
     *  Short
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ShortQuantity $shortQuantity
     */
    private $shortQuantity = null;

    /**
     * BBIE
     *  Receipt Line. Shortage Action Code. Code
     *  A code signifying the action that the delivery party wishes the despatch party to take as the result of a shortage.
     *  0..1
     *  Receipt Line
     *  Shortage Action Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ShortageActionCode $shortageActionCode
     */
    private $shortageActionCode = null;

    /**
     * BBIE
     *  Receipt Line. Rejected_ Quantity. Quantity
     *  The quantity rejected.
     *  0..1
     *  Receipt Line
     *  Rejected
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\RejectedQuantity $rejectedQuantity
     */
    private $rejectedQuantity = null;

    /**
     * BBIE
     *  Receipt Line. Reject Reason Code. Code
     *  The reason for a rejection, expressed as a code.
     *  0..1
     *  Receipt Line
     *  Reject Reason Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\RejectReasonCode $rejectReasonCode
     */
    private $rejectReasonCode = null;

    /**
     * BBIE
     *  Receipt Line. Reject_ Reason. Text
     *  The reason for a rejection, expressed as text.
     *  0..n
     *  Receipt Line
     *  Reject
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\RejectReason[] $rejectReason
     */
    private $rejectReason = [
        
    ];

    /**
     * BBIE
     *  Receipt Line. Reject Action Code. Code
     *  A code signifying the action that the delivery party wishes the despatch party to take as the result of a rejection.
     *  0..1
     *  Receipt Line
     *  Reject Action Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\RejectActionCode $rejectActionCode
     */
    private $rejectActionCode = null;

    /**
     * BBIE
     *  Receipt Line. Quantity Discrepancy Code. Code
     *  A code signifying the type of a discrepancy in quantity.
     *  0..1
     *  Receipt Line
     *  Quantity Discrepancy Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\QuantityDiscrepancyCode $quantityDiscrepancyCode
     */
    private $quantityDiscrepancyCode = null;

    /**
     * BBIE
     *  Receipt Line. Oversupply_ Quantity. Quantity
     *  The quantity over-supplied, i.e., the quantity over and above the quantity ordered.
     *  0..1
     *  Receipt Line
     *  Oversupply
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\OversupplyQuantity $oversupplyQuantity
     */
    private $oversupplyQuantity = null;

    /**
     * BBIE
     *  Receipt Line. Received_ Date. Date
     *  The date on which the goods or services were received.
     *  0..1
     *  Receipt Line
     *  Received
     *  Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $receivedDate
     */
    private $receivedDate = null;

    /**
     * BBIE
     *  Receipt Line. Timing Complaint Code. Code
     *  A complaint about the timing of delivery, expressed as a code.
     *  0..1
     *  Receipt Line
     *  Timing Complaint Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TimingComplaintCode $timingComplaintCode
     */
    private $timingComplaintCode = null;

    /**
     * BBIE
     *  Receipt Line. Timing Complaint. Text
     *  A complaint about the timing of delivery, expressed as text.
     *  0..1
     *  Receipt Line
     *  Timing Complaint
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TimingComplaint $timingComplaint
     */
    private $timingComplaint = null;

    /**
     * ASBIE
     *  Receipt Line. Order Line Reference
     *  A reference to the order line associated with this receipt line.
     *  0..1
     *  Receipt Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\OrderLineReference $orderLineReference
     */
    private $orderLineReference = null;

    /**
     * ASBIE
     *  Receipt Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this receipt line.
     *  0..n
     *  Receipt Line
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
     *  Receipt Line. Document Reference
     *  A reference to a document associated with this receipt line.
     *  0..n
     *  Receipt Line
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
     *  Receipt Line. Item
     *  An item associated with this receipt line.
     *  0..n
     *  Receipt Line
     *  Item
     *  Item
     *  Item
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Item[] $item
     */
    private $item = [
        
    ];

    /**
     * ASBIE
     *  Receipt Line. Shipment
     *  A shipment associated with this receipt line.
     *  0..n
     *  Receipt Line
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Shipment[] $shipment
     */
    private $shipment = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Receipt Line. Identifier
     *  An identifier for this receipt line.
     *  1
     *  Receipt Line
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
     *  Receipt Line. Identifier
     *  An identifier for this receipt line.
     *  1
     *  Receipt Line
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
     *  Receipt Line. UUID. Identifier
     *  A universally unique identifier for this receipt line.
     *  0..1
     *  Receipt Line
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
     *  Receipt Line. UUID. Identifier
     *  A universally unique identifier for this receipt line.
     *  0..1
     *  Receipt Line
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
     *  Receipt Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Receipt Line
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
     *  Receipt Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Receipt Line
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
     *  Receipt Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Receipt Line
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
     *  Receipt Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Receipt Line
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
     *  Receipt Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Receipt Line
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
     * Gets as receivedQuantity
     *
     * BBIE
     *  Receipt Line. Received_ Quantity. Quantity
     *  The quantity received.
     *  0..1
     *  Receipt Line
     *  Received
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ReceivedQuantity
     */
    public function getReceivedQuantity()
    {
        return $this->receivedQuantity;
    }

    /**
     * Sets a new receivedQuantity
     *
     * BBIE
     *  Receipt Line. Received_ Quantity. Quantity
     *  The quantity received.
     *  0..1
     *  Receipt Line
     *  Received
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ReceivedQuantity $receivedQuantity
     * @return self
     */
    public function setReceivedQuantity(\Greenter\Ubl\Entity\CommonBasic\ReceivedQuantity $receivedQuantity)
    {
        $this->receivedQuantity = $receivedQuantity;
        return $this;
    }

    /**
     * Gets as shortQuantity
     *
     * BBIE
     *  Receipt Line. Short_ Quantity. Quantity
     *  The quantity received short; the difference between the quantity reported despatched and the quantity actually received.
     *  0..1
     *  Receipt Line
     *  Short
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ShortQuantity
     */
    public function getShortQuantity()
    {
        return $this->shortQuantity;
    }

    /**
     * Sets a new shortQuantity
     *
     * BBIE
     *  Receipt Line. Short_ Quantity. Quantity
     *  The quantity received short; the difference between the quantity reported despatched and the quantity actually received.
     *  0..1
     *  Receipt Line
     *  Short
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ShortQuantity $shortQuantity
     * @return self
     */
    public function setShortQuantity(\Greenter\Ubl\Entity\CommonBasic\ShortQuantity $shortQuantity)
    {
        $this->shortQuantity = $shortQuantity;
        return $this;
    }

    /**
     * Gets as shortageActionCode
     *
     * BBIE
     *  Receipt Line. Shortage Action Code. Code
     *  A code signifying the action that the delivery party wishes the despatch party to take as the result of a shortage.
     *  0..1
     *  Receipt Line
     *  Shortage Action Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ShortageActionCode
     */
    public function getShortageActionCode()
    {
        return $this->shortageActionCode;
    }

    /**
     * Sets a new shortageActionCode
     *
     * BBIE
     *  Receipt Line. Shortage Action Code. Code
     *  A code signifying the action that the delivery party wishes the despatch party to take as the result of a shortage.
     *  0..1
     *  Receipt Line
     *  Shortage Action Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ShortageActionCode $shortageActionCode
     * @return self
     */
    public function setShortageActionCode(\Greenter\Ubl\Entity\CommonBasic\ShortageActionCode $shortageActionCode)
    {
        $this->shortageActionCode = $shortageActionCode;
        return $this;
    }

    /**
     * Gets as rejectedQuantity
     *
     * BBIE
     *  Receipt Line. Rejected_ Quantity. Quantity
     *  The quantity rejected.
     *  0..1
     *  Receipt Line
     *  Rejected
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\RejectedQuantity
     */
    public function getRejectedQuantity()
    {
        return $this->rejectedQuantity;
    }

    /**
     * Sets a new rejectedQuantity
     *
     * BBIE
     *  Receipt Line. Rejected_ Quantity. Quantity
     *  The quantity rejected.
     *  0..1
     *  Receipt Line
     *  Rejected
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\RejectedQuantity $rejectedQuantity
     * @return self
     */
    public function setRejectedQuantity(\Greenter\Ubl\Entity\CommonBasic\RejectedQuantity $rejectedQuantity)
    {
        $this->rejectedQuantity = $rejectedQuantity;
        return $this;
    }

    /**
     * Gets as rejectReasonCode
     *
     * BBIE
     *  Receipt Line. Reject Reason Code. Code
     *  The reason for a rejection, expressed as a code.
     *  0..1
     *  Receipt Line
     *  Reject Reason Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\RejectReasonCode
     */
    public function getRejectReasonCode()
    {
        return $this->rejectReasonCode;
    }

    /**
     * Sets a new rejectReasonCode
     *
     * BBIE
     *  Receipt Line. Reject Reason Code. Code
     *  The reason for a rejection, expressed as a code.
     *  0..1
     *  Receipt Line
     *  Reject Reason Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\RejectReasonCode $rejectReasonCode
     * @return self
     */
    public function setRejectReasonCode(\Greenter\Ubl\Entity\CommonBasic\RejectReasonCode $rejectReasonCode)
    {
        $this->rejectReasonCode = $rejectReasonCode;
        return $this;
    }

    /**
     * Adds as rejectReason
     *
     * BBIE
     *  Receipt Line. Reject_ Reason. Text
     *  The reason for a rejection, expressed as text.
     *  0..n
     *  Receipt Line
     *  Reject
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\RejectReason $rejectReason
     */
    public function addToRejectReason(\Greenter\Ubl\Entity\CommonBasic\RejectReason $rejectReason)
    {
        $this->rejectReason[] = $rejectReason;
        return $this;
    }

    /**
     * isset rejectReason
     *
     * BBIE
     *  Receipt Line. Reject_ Reason. Text
     *  The reason for a rejection, expressed as text.
     *  0..n
     *  Receipt Line
     *  Reject
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRejectReason($index)
    {
        return isset($this->rejectReason[$index]);
    }

    /**
     * unset rejectReason
     *
     * BBIE
     *  Receipt Line. Reject_ Reason. Text
     *  The reason for a rejection, expressed as text.
     *  0..n
     *  Receipt Line
     *  Reject
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRejectReason($index)
    {
        unset($this->rejectReason[$index]);
    }

    /**
     * Gets as rejectReason
     *
     * BBIE
     *  Receipt Line. Reject_ Reason. Text
     *  The reason for a rejection, expressed as text.
     *  0..n
     *  Receipt Line
     *  Reject
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\RejectReason[]
     */
    public function getRejectReason()
    {
        return $this->rejectReason;
    }

    /**
     * Sets a new rejectReason
     *
     * BBIE
     *  Receipt Line. Reject_ Reason. Text
     *  The reason for a rejection, expressed as text.
     *  0..n
     *  Receipt Line
     *  Reject
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\RejectReason[] $rejectReason
     * @return self
     */
    public function setRejectReason(array $rejectReason)
    {
        $this->rejectReason = $rejectReason;
        return $this;
    }

    /**
     * Gets as rejectActionCode
     *
     * BBIE
     *  Receipt Line. Reject Action Code. Code
     *  A code signifying the action that the delivery party wishes the despatch party to take as the result of a rejection.
     *  0..1
     *  Receipt Line
     *  Reject Action Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\RejectActionCode
     */
    public function getRejectActionCode()
    {
        return $this->rejectActionCode;
    }

    /**
     * Sets a new rejectActionCode
     *
     * BBIE
     *  Receipt Line. Reject Action Code. Code
     *  A code signifying the action that the delivery party wishes the despatch party to take as the result of a rejection.
     *  0..1
     *  Receipt Line
     *  Reject Action Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\RejectActionCode $rejectActionCode
     * @return self
     */
    public function setRejectActionCode(\Greenter\Ubl\Entity\CommonBasic\RejectActionCode $rejectActionCode)
    {
        $this->rejectActionCode = $rejectActionCode;
        return $this;
    }

    /**
     * Gets as quantityDiscrepancyCode
     *
     * BBIE
     *  Receipt Line. Quantity Discrepancy Code. Code
     *  A code signifying the type of a discrepancy in quantity.
     *  0..1
     *  Receipt Line
     *  Quantity Discrepancy Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\QuantityDiscrepancyCode
     */
    public function getQuantityDiscrepancyCode()
    {
        return $this->quantityDiscrepancyCode;
    }

    /**
     * Sets a new quantityDiscrepancyCode
     *
     * BBIE
     *  Receipt Line. Quantity Discrepancy Code. Code
     *  A code signifying the type of a discrepancy in quantity.
     *  0..1
     *  Receipt Line
     *  Quantity Discrepancy Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\QuantityDiscrepancyCode $quantityDiscrepancyCode
     * @return self
     */
    public function setQuantityDiscrepancyCode(\Greenter\Ubl\Entity\CommonBasic\QuantityDiscrepancyCode $quantityDiscrepancyCode)
    {
        $this->quantityDiscrepancyCode = $quantityDiscrepancyCode;
        return $this;
    }

    /**
     * Gets as oversupplyQuantity
     *
     * BBIE
     *  Receipt Line. Oversupply_ Quantity. Quantity
     *  The quantity over-supplied, i.e., the quantity over and above the quantity ordered.
     *  0..1
     *  Receipt Line
     *  Oversupply
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\OversupplyQuantity
     */
    public function getOversupplyQuantity()
    {
        return $this->oversupplyQuantity;
    }

    /**
     * Sets a new oversupplyQuantity
     *
     * BBIE
     *  Receipt Line. Oversupply_ Quantity. Quantity
     *  The quantity over-supplied, i.e., the quantity over and above the quantity ordered.
     *  0..1
     *  Receipt Line
     *  Oversupply
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\OversupplyQuantity $oversupplyQuantity
     * @return self
     */
    public function setOversupplyQuantity(\Greenter\Ubl\Entity\CommonBasic\OversupplyQuantity $oversupplyQuantity)
    {
        $this->oversupplyQuantity = $oversupplyQuantity;
        return $this;
    }

    /**
     * Gets as receivedDate
     *
     * BBIE
     *  Receipt Line. Received_ Date. Date
     *  The date on which the goods or services were received.
     *  0..1
     *  Receipt Line
     *  Received
     *  Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getReceivedDate()
    {
        return $this->receivedDate;
    }

    /**
     * Sets a new receivedDate
     *
     * BBIE
     *  Receipt Line. Received_ Date. Date
     *  The date on which the goods or services were received.
     *  0..1
     *  Receipt Line
     *  Received
     *  Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $receivedDate
     * @return self
     */
    public function setReceivedDate(\DateTime $receivedDate)
    {
        $this->receivedDate = $receivedDate;
        return $this;
    }

    /**
     * Gets as timingComplaintCode
     *
     * BBIE
     *  Receipt Line. Timing Complaint Code. Code
     *  A complaint about the timing of delivery, expressed as a code.
     *  0..1
     *  Receipt Line
     *  Timing Complaint Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TimingComplaintCode
     */
    public function getTimingComplaintCode()
    {
        return $this->timingComplaintCode;
    }

    /**
     * Sets a new timingComplaintCode
     *
     * BBIE
     *  Receipt Line. Timing Complaint Code. Code
     *  A complaint about the timing of delivery, expressed as a code.
     *  0..1
     *  Receipt Line
     *  Timing Complaint Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TimingComplaintCode $timingComplaintCode
     * @return self
     */
    public function setTimingComplaintCode(\Greenter\Ubl\Entity\CommonBasic\TimingComplaintCode $timingComplaintCode)
    {
        $this->timingComplaintCode = $timingComplaintCode;
        return $this;
    }

    /**
     * Gets as timingComplaint
     *
     * BBIE
     *  Receipt Line. Timing Complaint. Text
     *  A complaint about the timing of delivery, expressed as text.
     *  0..1
     *  Receipt Line
     *  Timing Complaint
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TimingComplaint
     */
    public function getTimingComplaint()
    {
        return $this->timingComplaint;
    }

    /**
     * Sets a new timingComplaint
     *
     * BBIE
     *  Receipt Line. Timing Complaint. Text
     *  A complaint about the timing of delivery, expressed as text.
     *  0..1
     *  Receipt Line
     *  Timing Complaint
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TimingComplaint $timingComplaint
     * @return self
     */
    public function setTimingComplaint(\Greenter\Ubl\Entity\CommonBasic\TimingComplaint $timingComplaint)
    {
        $this->timingComplaint = $timingComplaint;
        return $this;
    }

    /**
     * Gets as orderLineReference
     *
     * ASBIE
     *  Receipt Line. Order Line Reference
     *  A reference to the order line associated with this receipt line.
     *  0..1
     *  Receipt Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\OrderLineReference
     */
    public function getOrderLineReference()
    {
        return $this->orderLineReference;
    }

    /**
     * Sets a new orderLineReference
     *
     * ASBIE
     *  Receipt Line. Order Line Reference
     *  A reference to the order line associated with this receipt line.
     *  0..1
     *  Receipt Line
     *  Order Line Reference
     *  Order Line Reference
     *  Order Line Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\OrderLineReference $orderLineReference
     * @return self
     */
    public function setOrderLineReference(\Greenter\Ubl\Entity\CommonAggregateComponents\OrderLineReference $orderLineReference)
    {
        $this->orderLineReference = $orderLineReference;
        return $this;
    }

    /**
     * Adds as despatchLineReference
     *
     * ASBIE
     *  Receipt Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this receipt line.
     *  0..n
     *  Receipt Line
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
     *  Receipt Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this receipt line.
     *  0..n
     *  Receipt Line
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
     *  Receipt Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this receipt line.
     *  0..n
     *  Receipt Line
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
     *  Receipt Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this receipt line.
     *  0..n
     *  Receipt Line
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
     *  Receipt Line. Despatch_ Line Reference. Line Reference
     *  A reference to a despatch line associated with this receipt line.
     *  0..n
     *  Receipt Line
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
     * Adds as documentReference
     *
     * ASBIE
     *  Receipt Line. Document Reference
     *  A reference to a document associated with this receipt line.
     *  0..n
     *  Receipt Line
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
     *  Receipt Line. Document Reference
     *  A reference to a document associated with this receipt line.
     *  0..n
     *  Receipt Line
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
     *  Receipt Line. Document Reference
     *  A reference to a document associated with this receipt line.
     *  0..n
     *  Receipt Line
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
     *  Receipt Line. Document Reference
     *  A reference to a document associated with this receipt line.
     *  0..n
     *  Receipt Line
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
     *  Receipt Line. Document Reference
     *  A reference to a document associated with this receipt line.
     *  0..n
     *  Receipt Line
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
     * Adds as item
     *
     * ASBIE
     *  Receipt Line. Item
     *  An item associated with this receipt line.
     *  0..n
     *  Receipt Line
     *  Item
     *  Item
     *  Item
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Item $item
     */
    public function addToItem(\Greenter\Ubl\Entity\CommonAggregateComponents\Item $item)
    {
        $this->item[] = $item;
        return $this;
    }

    /**
     * isset item
     *
     * ASBIE
     *  Receipt Line. Item
     *  An item associated with this receipt line.
     *  0..n
     *  Receipt Line
     *  Item
     *  Item
     *  Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetItem($index)
    {
        return isset($this->item[$index]);
    }

    /**
     * unset item
     *
     * ASBIE
     *  Receipt Line. Item
     *  An item associated with this receipt line.
     *  0..n
     *  Receipt Line
     *  Item
     *  Item
     *  Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetItem($index)
    {
        unset($this->item[$index]);
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Receipt Line. Item
     *  An item associated with this receipt line.
     *  0..n
     *  Receipt Line
     *  Item
     *  Item
     *  Item
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Item[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Sets a new item
     *
     * ASBIE
     *  Receipt Line. Item
     *  An item associated with this receipt line.
     *  0..n
     *  Receipt Line
     *  Item
     *  Item
     *  Item
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Item[] $item
     * @return self
     */
    public function setItem(array $item)
    {
        $this->item = $item;
        return $this;
    }

    /**
     * Adds as shipment
     *
     * ASBIE
     *  Receipt Line. Shipment
     *  A shipment associated with this receipt line.
     *  0..n
     *  Receipt Line
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Shipment $shipment
     */
    public function addToShipment(\Greenter\Ubl\Entity\CommonAggregateComponents\Shipment $shipment)
    {
        $this->shipment[] = $shipment;
        return $this;
    }

    /**
     * isset shipment
     *
     * ASBIE
     *  Receipt Line. Shipment
     *  A shipment associated with this receipt line.
     *  0..n
     *  Receipt Line
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipment($index)
    {
        return isset($this->shipment[$index]);
    }

    /**
     * unset shipment
     *
     * ASBIE
     *  Receipt Line. Shipment
     *  A shipment associated with this receipt line.
     *  0..n
     *  Receipt Line
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipment($index)
    {
        unset($this->shipment[$index]);
    }

    /**
     * Gets as shipment
     *
     * ASBIE
     *  Receipt Line. Shipment
     *  A shipment associated with this receipt line.
     *  0..n
     *  Receipt Line
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Shipment[]
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * ASBIE
     *  Receipt Line. Shipment
     *  A shipment associated with this receipt line.
     *  0..n
     *  Receipt Line
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Shipment[] $shipment
     * @return self
     */
    public function setShipment(array $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }


}

