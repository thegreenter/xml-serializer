<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ItemManagementProfileType
 *
 * ABIE
 *  Item Management Profile. Details
 *  A class to define a management profile for an item.
 *  Item Management Profile
 * XSD Type: ItemManagementProfileType
 */
class ItemManagementProfileType
{

    /**
     * BBIE
     *  Item Management Profile. Frozen Period Days. Numeric
     *  The number of days in the future that an order forecast quantity automatically becomes a confirmed order for a product.
     *  0..1
     *  Item Management Profile
     *  Frozen Period Days
     *  Numeric
     *  Numeric. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\FrozenPeriodDaysNumeric $frozenPeriodDaysNumeric
     */
    private $frozenPeriodDaysNumeric = null;

    /**
     * BBIE
     *  Item Management Profile. Minimum_ Inventory Quantity. Quantity
     *  The quantity of the item that should trigger a replenishment order to avoid depleting the safety stock.
     *  0..1
     *  Item Management Profile
     *  Minimum
     *  Inventory Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\MinimumInventoryQuantity $minimumInventoryQuantity
     */
    private $minimumInventoryQuantity = null;

    /**
     * BBIE
     *  Item Management Profile. Multiple_ Order Quantity. Quantity
     *  The order quantity multiples in which the product may be ordered.
     *  0..1
     *  Item Management Profile
     *  Multiple
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\MultipleOrderQuantity $multipleOrderQuantity
     */
    private $multipleOrderQuantity = null;

    /**
     * BBIE
     *  Item Management Profile. Order Interval Days. Numeric
     *  The number of days between regular replenishment orders for the product.
     *  0..1
     *  Item Management Profile
     *  Order Interval Days
     *  Numeric
     *  Numeric. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\OrderIntervalDaysNumeric $orderIntervalDaysNumeric
     */
    private $orderIntervalDaysNumeric = null;

    /**
     * BBIE
     *  Item Management Profile. Replenishment Owner Description. Text
     *  The trading partner maintaining this item management profile.
     *  0..n
     *  Item Management Profile
     *  Replenishment Owner Description
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ReplenishmentOwnerDescription[] $replenishmentOwnerDescription
     */
    private $replenishmentOwnerDescription = [
        
    ];

    /**
     * BBIE
     *  Item Management Profile. Target Service Percent. Percent
     *  The Unit Service Level the trading partners expect to be maintained, expressed as a percentage. Unite Service Level (USL) is a term used in Inventory Management, which is sometimes known as "fill rate", counts the average number of units short expressed as the percentage of the order quantity.
     *  0..1
     *  Item Management Profile
     *  Target Service Percent
     *  Percent
     *  Percent. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TargetServicePercent $targetServicePercent
     */
    private $targetServicePercent = null;

    /**
     * BBIE
     *  Item Management Profile. Target_ Inventory Quantity. Quantity
     *  The target inventory quantity.
     *  0..1
     *  Item Management Profile
     *  Target
     *  Inventory Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TargetInventoryQuantity $targetInventoryQuantity
     */
    private $targetInventoryQuantity = null;

    /**
     * ASBIE
     *  Item Management Profile. Effective_ Period. Period
     *  The period during which this profile is effective.
     *  1
     *  Item Management Profile
     *  Effective
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\EffectivePeriod $effectivePeriod
     */
    private $effectivePeriod = null;

    /**
     * ASBIE
     *  Item Management Profile. Item
     *  The item associated with this item management profile.
     *  1
     *  Item Management Profile
     *  Item
     *  Item
     *  Item
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Item $item
     */
    private $item = null;

    /**
     * ASBIE
     *  Item Management Profile. Item Location Quantity
     *  A set of location-specific properties (e.g., price and quantity) associated with the item.
     *  0..1
     *  Item Management Profile
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ItemLocationQuantity $itemLocationQuantity
     */
    private $itemLocationQuantity = null;

    /**
     * Gets as frozenPeriodDaysNumeric
     *
     * BBIE
     *  Item Management Profile. Frozen Period Days. Numeric
     *  The number of days in the future that an order forecast quantity automatically becomes a confirmed order for a product.
     *  0..1
     *  Item Management Profile
     *  Frozen Period Days
     *  Numeric
     *  Numeric. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\FrozenPeriodDaysNumeric
     */
    public function getFrozenPeriodDaysNumeric()
    {
        return $this->frozenPeriodDaysNumeric;
    }

    /**
     * Sets a new frozenPeriodDaysNumeric
     *
     * BBIE
     *  Item Management Profile. Frozen Period Days. Numeric
     *  The number of days in the future that an order forecast quantity automatically becomes a confirmed order for a product.
     *  0..1
     *  Item Management Profile
     *  Frozen Period Days
     *  Numeric
     *  Numeric. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\FrozenPeriodDaysNumeric $frozenPeriodDaysNumeric
     * @return self
     */
    public function setFrozenPeriodDaysNumeric(\Greenter\Ubl\Entity\CommonBasic\FrozenPeriodDaysNumeric $frozenPeriodDaysNumeric)
    {
        $this->frozenPeriodDaysNumeric = $frozenPeriodDaysNumeric;
        return $this;
    }

    /**
     * Gets as minimumInventoryQuantity
     *
     * BBIE
     *  Item Management Profile. Minimum_ Inventory Quantity. Quantity
     *  The quantity of the item that should trigger a replenishment order to avoid depleting the safety stock.
     *  0..1
     *  Item Management Profile
     *  Minimum
     *  Inventory Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\MinimumInventoryQuantity
     */
    public function getMinimumInventoryQuantity()
    {
        return $this->minimumInventoryQuantity;
    }

    /**
     * Sets a new minimumInventoryQuantity
     *
     * BBIE
     *  Item Management Profile. Minimum_ Inventory Quantity. Quantity
     *  The quantity of the item that should trigger a replenishment order to avoid depleting the safety stock.
     *  0..1
     *  Item Management Profile
     *  Minimum
     *  Inventory Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\MinimumInventoryQuantity $minimumInventoryQuantity
     * @return self
     */
    public function setMinimumInventoryQuantity(\Greenter\Ubl\Entity\CommonBasic\MinimumInventoryQuantity $minimumInventoryQuantity)
    {
        $this->minimumInventoryQuantity = $minimumInventoryQuantity;
        return $this;
    }

    /**
     * Gets as multipleOrderQuantity
     *
     * BBIE
     *  Item Management Profile. Multiple_ Order Quantity. Quantity
     *  The order quantity multiples in which the product may be ordered.
     *  0..1
     *  Item Management Profile
     *  Multiple
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\MultipleOrderQuantity
     */
    public function getMultipleOrderQuantity()
    {
        return $this->multipleOrderQuantity;
    }

    /**
     * Sets a new multipleOrderQuantity
     *
     * BBIE
     *  Item Management Profile. Multiple_ Order Quantity. Quantity
     *  The order quantity multiples in which the product may be ordered.
     *  0..1
     *  Item Management Profile
     *  Multiple
     *  Order Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\MultipleOrderQuantity $multipleOrderQuantity
     * @return self
     */
    public function setMultipleOrderQuantity(\Greenter\Ubl\Entity\CommonBasic\MultipleOrderQuantity $multipleOrderQuantity)
    {
        $this->multipleOrderQuantity = $multipleOrderQuantity;
        return $this;
    }

    /**
     * Gets as orderIntervalDaysNumeric
     *
     * BBIE
     *  Item Management Profile. Order Interval Days. Numeric
     *  The number of days between regular replenishment orders for the product.
     *  0..1
     *  Item Management Profile
     *  Order Interval Days
     *  Numeric
     *  Numeric. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\OrderIntervalDaysNumeric
     */
    public function getOrderIntervalDaysNumeric()
    {
        return $this->orderIntervalDaysNumeric;
    }

    /**
     * Sets a new orderIntervalDaysNumeric
     *
     * BBIE
     *  Item Management Profile. Order Interval Days. Numeric
     *  The number of days between regular replenishment orders for the product.
     *  0..1
     *  Item Management Profile
     *  Order Interval Days
     *  Numeric
     *  Numeric. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\OrderIntervalDaysNumeric $orderIntervalDaysNumeric
     * @return self
     */
    public function setOrderIntervalDaysNumeric(\Greenter\Ubl\Entity\CommonBasic\OrderIntervalDaysNumeric $orderIntervalDaysNumeric)
    {
        $this->orderIntervalDaysNumeric = $orderIntervalDaysNumeric;
        return $this;
    }

    /**
     * Adds as replenishmentOwnerDescription
     *
     * BBIE
     *  Item Management Profile. Replenishment Owner Description. Text
     *  The trading partner maintaining this item management profile.
     *  0..n
     *  Item Management Profile
     *  Replenishment Owner Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\ReplenishmentOwnerDescription $replenishmentOwnerDescription
     */
    public function addToReplenishmentOwnerDescription(\Greenter\Ubl\Entity\CommonBasic\ReplenishmentOwnerDescription $replenishmentOwnerDescription)
    {
        $this->replenishmentOwnerDescription[] = $replenishmentOwnerDescription;
        return $this;
    }

    /**
     * isset replenishmentOwnerDescription
     *
     * BBIE
     *  Item Management Profile. Replenishment Owner Description. Text
     *  The trading partner maintaining this item management profile.
     *  0..n
     *  Item Management Profile
     *  Replenishment Owner Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReplenishmentOwnerDescription($index)
    {
        return isset($this->replenishmentOwnerDescription[$index]);
    }

    /**
     * unset replenishmentOwnerDescription
     *
     * BBIE
     *  Item Management Profile. Replenishment Owner Description. Text
     *  The trading partner maintaining this item management profile.
     *  0..n
     *  Item Management Profile
     *  Replenishment Owner Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReplenishmentOwnerDescription($index)
    {
        unset($this->replenishmentOwnerDescription[$index]);
    }

    /**
     * Gets as replenishmentOwnerDescription
     *
     * BBIE
     *  Item Management Profile. Replenishment Owner Description. Text
     *  The trading partner maintaining this item management profile.
     *  0..n
     *  Item Management Profile
     *  Replenishment Owner Description
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ReplenishmentOwnerDescription[]
     */
    public function getReplenishmentOwnerDescription()
    {
        return $this->replenishmentOwnerDescription;
    }

    /**
     * Sets a new replenishmentOwnerDescription
     *
     * BBIE
     *  Item Management Profile. Replenishment Owner Description. Text
     *  The trading partner maintaining this item management profile.
     *  0..n
     *  Item Management Profile
     *  Replenishment Owner Description
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ReplenishmentOwnerDescription[] $replenishmentOwnerDescription
     * @return self
     */
    public function setReplenishmentOwnerDescription(array $replenishmentOwnerDescription)
    {
        $this->replenishmentOwnerDescription = $replenishmentOwnerDescription;
        return $this;
    }

    /**
     * Gets as targetServicePercent
     *
     * BBIE
     *  Item Management Profile. Target Service Percent. Percent
     *  The Unit Service Level the trading partners expect to be maintained, expressed as a percentage. Unite Service Level (USL) is a term used in Inventory Management, which is sometimes known as "fill rate", counts the average number of units short expressed as the percentage of the order quantity.
     *  0..1
     *  Item Management Profile
     *  Target Service Percent
     *  Percent
     *  Percent. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TargetServicePercent
     */
    public function getTargetServicePercent()
    {
        return $this->targetServicePercent;
    }

    /**
     * Sets a new targetServicePercent
     *
     * BBIE
     *  Item Management Profile. Target Service Percent. Percent
     *  The Unit Service Level the trading partners expect to be maintained, expressed as a percentage. Unite Service Level (USL) is a term used in Inventory Management, which is sometimes known as "fill rate", counts the average number of units short expressed as the percentage of the order quantity.
     *  0..1
     *  Item Management Profile
     *  Target Service Percent
     *  Percent
     *  Percent. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TargetServicePercent $targetServicePercent
     * @return self
     */
    public function setTargetServicePercent(\Greenter\Ubl\Entity\CommonBasic\TargetServicePercent $targetServicePercent)
    {
        $this->targetServicePercent = $targetServicePercent;
        return $this;
    }

    /**
     * Gets as targetInventoryQuantity
     *
     * BBIE
     *  Item Management Profile. Target_ Inventory Quantity. Quantity
     *  The target inventory quantity.
     *  0..1
     *  Item Management Profile
     *  Target
     *  Inventory Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TargetInventoryQuantity
     */
    public function getTargetInventoryQuantity()
    {
        return $this->targetInventoryQuantity;
    }

    /**
     * Sets a new targetInventoryQuantity
     *
     * BBIE
     *  Item Management Profile. Target_ Inventory Quantity. Quantity
     *  The target inventory quantity.
     *  0..1
     *  Item Management Profile
     *  Target
     *  Inventory Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TargetInventoryQuantity $targetInventoryQuantity
     * @return self
     */
    public function setTargetInventoryQuantity(\Greenter\Ubl\Entity\CommonBasic\TargetInventoryQuantity $targetInventoryQuantity)
    {
        $this->targetInventoryQuantity = $targetInventoryQuantity;
        return $this;
    }

    /**
     * Gets as effectivePeriod
     *
     * ASBIE
     *  Item Management Profile. Effective_ Period. Period
     *  The period during which this profile is effective.
     *  1
     *  Item Management Profile
     *  Effective
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\EffectivePeriod
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * ASBIE
     *  Item Management Profile. Effective_ Period. Period
     *  The period during which this profile is effective.
     *  1
     *  Item Management Profile
     *  Effective
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\EffectivePeriod $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\EffectivePeriod $effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * Gets as item
     *
     * ASBIE
     *  Item Management Profile. Item
     *  The item associated with this item management profile.
     *  1
     *  Item Management Profile
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
     *  Item Management Profile. Item
     *  The item associated with this item management profile.
     *  1
     *  Item Management Profile
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
     * Gets as itemLocationQuantity
     *
     * ASBIE
     *  Item Management Profile. Item Location Quantity
     *  A set of location-specific properties (e.g., price and quantity) associated with the item.
     *  0..1
     *  Item Management Profile
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ItemLocationQuantity
     */
    public function getItemLocationQuantity()
    {
        return $this->itemLocationQuantity;
    }

    /**
     * Sets a new itemLocationQuantity
     *
     * ASBIE
     *  Item Management Profile. Item Location Quantity
     *  A set of location-specific properties (e.g., price and quantity) associated with the item.
     *  0..1
     *  Item Management Profile
     *  Item Location Quantity
     *  Item Location Quantity
     *  Item Location Quantity
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ItemLocationQuantity $itemLocationQuantity
     * @return self
     */
    public function setItemLocationQuantity(\Greenter\Ubl\Entity\CommonAggregateComponents\ItemLocationQuantity $itemLocationQuantity)
    {
        $this->itemLocationQuantity = $itemLocationQuantity;
        return $this;
    }


}

