<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing RetailPlannedImpactType
 *
 * ABIE
 *  Retail Planned Impact. Details
 *  A class to describe a planned effect of a retail event (e.g., a promotion or a change in inventory policy) upon supply or demand.
 *  Retail Planned Impact
 * XSD Type: RetailPlannedImpactType
 */
class RetailPlannedImpactType
{

    /**
     * BBIE
     *  Retail Planned Impact. Amount
     *  Estimated monetary value of the planned event as an impact
     *  1
     *  Retail Planned Impact
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Amount $amount
     */
    private $amount = null;

    /**
     * BBIE
     *  Retail Planned Impact. Forecast_ Purpose Code. Code
     *  It will have impact on either Sales forecast or Order Forecast
     *  1
     *  Retail Planned Impact
     *  Forecast
     *  Purpose Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ForecastPurposeCode $forecastPurposeCode
     */
    private $forecastPurposeCode = null;

    /**
     * BBIE
     *  Retail Planned Impact. Forecast Type Code. Code
     *  A code signifying the type of forecast. Examples of values are: BASE PROMOTIONAL SEASONAL TOTAL
     *  1
     *  Retail Planned Impact
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ForecastTypeCode $forecastTypeCode
     */
    private $forecastTypeCode = null;

    /**
     * ASBIE
     *  Retail Planned Impact. Period
     *  The period to which this impact applies.
     *  0..1
     *  Retail Planned Impact
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
     *  Retail Planned Impact. Amount
     *  Estimated monetary value of the planned event as an impact
     *  1
     *  Retail Planned Impact
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
     *  Retail Planned Impact. Amount
     *  Estimated monetary value of the planned event as an impact
     *  1
     *  Retail Planned Impact
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
     * Gets as forecastPurposeCode
     *
     * BBIE
     *  Retail Planned Impact. Forecast_ Purpose Code. Code
     *  It will have impact on either Sales forecast or Order Forecast
     *  1
     *  Retail Planned Impact
     *  Forecast
     *  Purpose Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ForecastPurposeCode
     */
    public function getForecastPurposeCode()
    {
        return $this->forecastPurposeCode;
    }

    /**
     * Sets a new forecastPurposeCode
     *
     * BBIE
     *  Retail Planned Impact. Forecast_ Purpose Code. Code
     *  It will have impact on either Sales forecast or Order Forecast
     *  1
     *  Retail Planned Impact
     *  Forecast
     *  Purpose Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ForecastPurposeCode $forecastPurposeCode
     * @return self
     */
    public function setForecastPurposeCode(\Greenter\Ubl\Entity\CommonBasic\ForecastPurposeCode $forecastPurposeCode)
    {
        $this->forecastPurposeCode = $forecastPurposeCode;
        return $this;
    }

    /**
     * Gets as forecastTypeCode
     *
     * BBIE
     *  Retail Planned Impact. Forecast Type Code. Code
     *  A code signifying the type of forecast. Examples of values are: BASE PROMOTIONAL SEASONAL TOTAL
     *  1
     *  Retail Planned Impact
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ForecastTypeCode
     */
    public function getForecastTypeCode()
    {
        return $this->forecastTypeCode;
    }

    /**
     * Sets a new forecastTypeCode
     *
     * BBIE
     *  Retail Planned Impact. Forecast Type Code. Code
     *  A code signifying the type of forecast. Examples of values are: BASE PROMOTIONAL SEASONAL TOTAL
     *  1
     *  Retail Planned Impact
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ForecastTypeCode $forecastTypeCode
     * @return self
     */
    public function setForecastTypeCode(\Greenter\Ubl\Entity\CommonBasic\ForecastTypeCode $forecastTypeCode)
    {
        $this->forecastTypeCode = $forecastTypeCode;
        return $this;
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Retail Planned Impact. Period
     *  The period to which this impact applies.
     *  0..1
     *  Retail Planned Impact
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
     *  Retail Planned Impact. Period
     *  The period to which this impact applies.
     *  0..1
     *  Retail Planned Impact
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

