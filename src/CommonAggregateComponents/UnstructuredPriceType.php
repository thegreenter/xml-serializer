<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing UnstructuredPriceType
 *
 * ABIE
 *  Unstructured Price. Details
 *  A simplified version of the Price class intended for applications such as telephone billing.
 *  Unstructured Price
 * XSD Type: UnstructuredPriceType
 */
class UnstructuredPriceType
{

    /**
     * BBIE
     *  Unstructured Price. Price Amount. Amount
     *  The price amount.
     *  0..1
     *  Unstructured Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  23.45
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PriceAmount $priceAmount
     */
    private $priceAmount = null;

    /**
     * BBIE
     *  Unstructured Price. Time Amount. Text
     *  The usage time upon which the price is based.
     *  0..1
     *  Unstructured Price
     *  Time Amount
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TimeAmount $timeAmount
     */
    private $timeAmount = null;

    /**
     * Gets as priceAmount
     *
     * BBIE
     *  Unstructured Price. Price Amount. Amount
     *  The price amount.
     *  0..1
     *  Unstructured Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  23.45
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
     *  Unstructured Price. Price Amount. Amount
     *  The price amount.
     *  0..1
     *  Unstructured Price
     *  Price Amount
     *  Amount
     *  Amount. Type
     *  23.45
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
     * Gets as timeAmount
     *
     * BBIE
     *  Unstructured Price. Time Amount. Text
     *  The usage time upon which the price is based.
     *  0..1
     *  Unstructured Price
     *  Time Amount
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TimeAmount
     */
    public function getTimeAmount()
    {
        return $this->timeAmount;
    }

    /**
     * Sets a new timeAmount
     *
     * BBIE
     *  Unstructured Price. Time Amount. Text
     *  The usage time upon which the price is based.
     *  0..1
     *  Unstructured Price
     *  Time Amount
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TimeAmount $timeAmount
     * @return self
     */
    public function setTimeAmount(\Greenter\Ubl\Entity\CommonBasic\TimeAmount $timeAmount)
    {
        $this->timeAmount = $timeAmount;
        return $this;
    }


}

