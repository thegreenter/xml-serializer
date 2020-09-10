<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing PromotionalEventLineItemType
 *
 * ABIE
 *  Promotional Event Line Item. Details
 *  A class to describe a line item associated with a promotional event.
 *  Promotional Event Line Item
 * XSD Type: PromotionalEventLineItemType
 */
class PromotionalEventLineItemType
{

    /**
     * BBIE
     *  Promotional Event Line Item. Amount
     *  The amount associated with this promotional event line item.
     *  1
     *  Promotional Event Line Item
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Amount $amount
     */
    private $amount = null;

    /**
     * ASBIE
     *  Promotional Event Line Item. Event Line Item
     *  A line item describing the expected impacts associated with this promotional event for a specific product at a specific location.
     *  1
     *  Promotional Event Line Item
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\EventLineItem $eventLineItem
     */
    private $eventLineItem = null;

    /**
     * Gets as amount
     *
     * BBIE
     *  Promotional Event Line Item. Amount
     *  The amount associated with this promotional event line item.
     *  1
     *  Promotional Event Line Item
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * BBIE
     *  Promotional Event Line Item. Amount
     *  The amount associated with this promotional event line item.
     *  1
     *  Promotional Event Line Item
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Amount $amount
     * @return self
     */
    public function setAmount(\Greenter\Ubl\Entity\CommonBasic\Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as eventLineItem
     *
     * ASBIE
     *  Promotional Event Line Item. Event Line Item
     *  A line item describing the expected impacts associated with this promotional event for a specific product at a specific location.
     *  1
     *  Promotional Event Line Item
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\EventLineItem
     */
    public function getEventLineItem()
    {
        return $this->eventLineItem;
    }

    /**
     * Sets a new eventLineItem
     *
     * ASBIE
     *  Promotional Event Line Item. Event Line Item
     *  A line item describing the expected impacts associated with this promotional event for a specific product at a specific location.
     *  1
     *  Promotional Event Line Item
     *  Event Line Item
     *  Event Line Item
     *  Event Line Item
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\EventLineItem $eventLineItem
     * @return self
     */
    public function setEventLineItem(\Greenter\Ubl\Entity\CommonAggregateComponents\EventLineItem $eventLineItem)
    {
        $this->eventLineItem = $eventLineItem;
        return $this;
    }


}

