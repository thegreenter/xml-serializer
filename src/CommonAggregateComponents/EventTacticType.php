<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing EventTacticType
 *
 * ABIE
 *  Event Tactic. Details
 *  A class defining a specific type of action or situation arranged by the Buyer or the Seller to promote the product or products.
 *  Event Tactic
 * XSD Type: EventTacticType
 */
class EventTacticType
{

    /**
     * BBIE
     *  Event Tactic. Comment. Text
     *  Generic field to add additional information or to specify mutually defined eventTacticTypes that are not currently listed.
     *  0..1
     *  Event Tactic
     *  Comment
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Comment $comment
     */
    private $comment = null;

    /**
     * BBIE
     *  Event Tactic. Quantity
     *  The currencies, units, etc. that describes what is need for the event or promotion Usage example: Number of pallets per store for a stack display
     *  0..1
     *  Event Tactic
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Quantity $quantity
     */
    private $quantity = null;

    /**
     * ASBIE
     *  Event Tactic. Event Tactic Enumeration
     *  The set of codes that describes this event tactic.
     *  1
     *  Event Tactic
     *  Event Tactic Enumeration
     *  Event Tactic Enumeration
     *  Event Tactic Enumeration
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\EventTacticEnumeration $eventTacticEnumeration
     */
    private $eventTacticEnumeration = null;

    /**
     * ASBIE
     *  Event Tactic. Period
     *  The period covered by this event tactic.
     *  0..1
     *  Event Tactic
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Period $period
     */
    private $period = null;

    /**
     * Gets as comment
     *
     * BBIE
     *  Event Tactic. Comment. Text
     *  Generic field to add additional information or to specify mutually defined eventTacticTypes that are not currently listed.
     *  0..1
     *  Event Tactic
     *  Comment
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * BBIE
     *  Event Tactic. Comment. Text
     *  Generic field to add additional information or to specify mutually defined eventTacticTypes that are not currently listed.
     *  0..1
     *  Event Tactic
     *  Comment
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Comment $comment
     * @return self
     */
    public function setComment(\Greenter\Ubl\Entity\CommonBasic\Comment $comment)
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Event Tactic. Quantity
     *  The currencies, units, etc. that describes what is need for the event or promotion Usage example: Number of pallets per store for a stack display
     *  0..1
     *  Event Tactic
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Event Tactic. Quantity
     *  The currencies, units, etc. that describes what is need for the event or promotion Usage example: Number of pallets per store for a stack display
     *  0..1
     *  Event Tactic
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Quantity $quantity
     * @return self
     */
    public function setQuantity(\Greenter\Ubl\Entity\CommonBasic\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as eventTacticEnumeration
     *
     * ASBIE
     *  Event Tactic. Event Tactic Enumeration
     *  The set of codes that describes this event tactic.
     *  1
     *  Event Tactic
     *  Event Tactic Enumeration
     *  Event Tactic Enumeration
     *  Event Tactic Enumeration
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\EventTacticEnumeration
     */
    public function getEventTacticEnumeration()
    {
        return $this->eventTacticEnumeration;
    }

    /**
     * Sets a new eventTacticEnumeration
     *
     * ASBIE
     *  Event Tactic. Event Tactic Enumeration
     *  The set of codes that describes this event tactic.
     *  1
     *  Event Tactic
     *  Event Tactic Enumeration
     *  Event Tactic Enumeration
     *  Event Tactic Enumeration
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\EventTacticEnumeration $eventTacticEnumeration
     * @return self
     */
    public function setEventTacticEnumeration(\Greenter\Ubl\Entity\CommonAggregateComponents\EventTacticEnumeration $eventTacticEnumeration)
    {
        $this->eventTacticEnumeration = $eventTacticEnumeration;
        return $this;
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Event Tactic. Period
     *  The period covered by this event tactic.
     *  0..1
     *  Event Tactic
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Period
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * ASBIE
     *  Event Tactic. Period
     *  The period covered by this event tactic.
     *  0..1
     *  Event Tactic
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Period $period
     * @return self
     */
    public function setPeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\Period $period)
    {
        $this->period = $period;
        return $this;
    }


}

