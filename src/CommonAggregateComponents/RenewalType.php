<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing RenewalType
 *
 * ABIE
 *  Renewal. Details
 *  A class to describe the renewal of a commercial arrangement, such as a contract or licence fee.
 *  Renewal
 * XSD Type: RenewalType
 */
class RenewalType
{

    /**
     * BBIE
     *  Renewal. Amount
     *  The monetary amount of this renewal.
     *  0..1
     *  Renewal
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Amount $amount
     */
    private $amount = null;

    /**
     * ASBIE
     *  Renewal. Period
     *  The period for which the arrangement is now valid
     *  0..1
     *  Renewal
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Period $period
     */
    private $period = null;

    /**
     * Gets as amount
     *
     * BBIE
     *  Renewal. Amount
     *  The monetary amount of this renewal.
     *  0..1
     *  Renewal
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
     *  Renewal. Amount
     *  The monetary amount of this renewal.
     *  0..1
     *  Renewal
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
     * Gets as period
     *
     * ASBIE
     *  Renewal. Period
     *  The period for which the arrangement is now valid
     *  0..1
     *  Renewal
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
     *  Renewal. Period
     *  The period for which the arrangement is now valid
     *  0..1
     *  Renewal
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

