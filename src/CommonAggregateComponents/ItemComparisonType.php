<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ItemComparisonType
 *
 * ABIE
 *  Item Comparison. Details
 *  A class to provide information about price and quantity of an item for use in price comparisons based on price, quantity, or measurements.
 *  Item Comparison
 * XSD Type: ItemComparisonType
 */
class ItemComparisonType
{

    /**
     * BBIE
     *  Item Comparison. Price Amount. Amount
     *  The price for the Item Comparison
     *  0..1
     *  Item Comparison
     *  Price Amount
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PriceAmount $priceAmount
     */
    private $priceAmount = null;

    /**
     * BBIE
     *  Item Comparison. Quantity
     *  The quantity for which this comparison is valid.
     *  0..1
     *  Item Comparison
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  per unit
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Quantity $quantity
     */
    private $quantity = null;

    /**
     * Gets as priceAmount
     *
     * BBIE
     *  Item Comparison. Price Amount. Amount
     *  The price for the Item Comparison
     *  0..1
     *  Item Comparison
     *  Price Amount
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PriceAmount
     */
    public function getPriceAmount()
    {
        return $this->priceAmount;
    }

    /**
     * Sets a new priceAmount
     *
     * BBIE
     *  Item Comparison. Price Amount. Amount
     *  The price for the Item Comparison
     *  0..1
     *  Item Comparison
     *  Price Amount
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PriceAmount $priceAmount
     * @return self
     */
    public function setPriceAmount(\Greenter\Ubl\Entity\CommonBasic\PriceAmount $priceAmount)
    {
        $this->priceAmount = $priceAmount;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Item Comparison. Quantity
     *  The quantity for which this comparison is valid.
     *  0..1
     *  Item Comparison
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  per unit
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
     *  Item Comparison. Quantity
     *  The quantity for which this comparison is valid.
     *  0..1
     *  Item Comparison
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  per unit
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Quantity $quantity
     * @return self
     */
    public function setQuantity(\Greenter\Ubl\Entity\CommonBasic\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }


}

