<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ConsumptionHistoryType
 *
 * ABIE
 *  Consumption History. Details
 *  A class to describe the measurement of a type of consumption during a particular period, used for the subscriber to get an overview of his consumption
 *  Consumption History
 * XSD Type: ConsumptionHistoryType
 */
class ConsumptionHistoryType
{

    /**
     * BBIE
     *  Consumption History. Meter Number. Text
     *  A text identifier for the meter measuring the consumption.
     *  0..1
     *  Consumption History
     *  Meter Number
     *  Text
     *  Text. Type
     *  61722x
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\MeterNumber $meterNumber
     */
    private $meterNumber = null;

    /**
     * BBIE
     *  Consumption History. Quantity
     *  The quantity consumed.
     *  1
     *  Consumption History
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  7621.00
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Consumption History. Amount
     *  The monetary amount to be charged for the quantity consumed.
     *  0..1
     *  Consumption History
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Amount $amount
     */
    private $amount = null;

    /**
     * BBIE
     *  Consumption History. Consumption Level Code. Code
     *  The consumption level, expressed as a code used explain the consumption quantity, e.g.. diversion from the normal.
     *  0..1
     *  Consumption History
     *  Consumption Level Code
     *  Code
     *  Code. Type
     *  B
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ConsumptionLevelCode $consumptionLevelCode
     */
    private $consumptionLevelCode = null;

    /**
     * BBIE
     *  Consumption History. Consumption Level Text. Text
     *  The consumption level, expressed as text, used explain the consumption quantity, e.g.. diversion from the normal.
     *  0..1
     *  Consumption History
     *  Consumption Level Text
     *  Text
     *  Text. Type
     *  Average
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ConsumptionLevel $consumptionLevel
     */
    private $consumptionLevel = null;

    /**
     * BBIE
     *  Consumption History. Description. Text
     *  Text describing the consumption itself.
     *  0..n
     *  Consumption History
     *  Description
     *  Text
     *  Text. Type
     *  2004/2005
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Consumption History. Period
     *  The period during which the consumption took place.
     *  1
     *  Consumption History
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Period $period
     */
    private $period = null;

    /**
     * Gets as meterNumber
     *
     * BBIE
     *  Consumption History. Meter Number. Text
     *  A text identifier for the meter measuring the consumption.
     *  0..1
     *  Consumption History
     *  Meter Number
     *  Text
     *  Text. Type
     *  61722x
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\MeterNumber
     */
    public function getMeterNumber()
    {
        return $this->meterNumber;
    }

    /**
     * Sets a new meterNumber
     *
     * BBIE
     *  Consumption History. Meter Number. Text
     *  A text identifier for the meter measuring the consumption.
     *  0..1
     *  Consumption History
     *  Meter Number
     *  Text
     *  Text. Type
     *  61722x
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\MeterNumber $meterNumber
     * @return self
     */
    public function setMeterNumber(\Greenter\Ubl\Entity\CommonBasic\MeterNumber $meterNumber)
    {
        $this->meterNumber = $meterNumber;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * BBIE
     *  Consumption History. Quantity
     *  The quantity consumed.
     *  1
     *  Consumption History
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  7621.00
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
     *  Consumption History. Quantity
     *  The quantity consumed.
     *  1
     *  Consumption History
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *  7621.00
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
     * Gets as amount
     *
     * BBIE
     *  Consumption History. Amount
     *  The monetary amount to be charged for the quantity consumed.
     *  0..1
     *  Consumption History
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
     *  Consumption History. Amount
     *  The monetary amount to be charged for the quantity consumed.
     *  0..1
     *  Consumption History
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
     * Gets as consumptionLevelCode
     *
     * BBIE
     *  Consumption History. Consumption Level Code. Code
     *  The consumption level, expressed as a code used explain the consumption quantity, e.g.. diversion from the normal.
     *  0..1
     *  Consumption History
     *  Consumption Level Code
     *  Code
     *  Code. Type
     *  B
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ConsumptionLevelCode
     */
    public function getConsumptionLevelCode()
    {
        return $this->consumptionLevelCode;
    }

    /**
     * Sets a new consumptionLevelCode
     *
     * BBIE
     *  Consumption History. Consumption Level Code. Code
     *  The consumption level, expressed as a code used explain the consumption quantity, e.g.. diversion from the normal.
     *  0..1
     *  Consumption History
     *  Consumption Level Code
     *  Code
     *  Code. Type
     *  B
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ConsumptionLevelCode $consumptionLevelCode
     * @return self
     */
    public function setConsumptionLevelCode(\Greenter\Ubl\Entity\CommonBasic\ConsumptionLevelCode $consumptionLevelCode)
    {
        $this->consumptionLevelCode = $consumptionLevelCode;
        return $this;
    }

    /**
     * Gets as consumptionLevel
     *
     * BBIE
     *  Consumption History. Consumption Level Text. Text
     *  The consumption level, expressed as text, used explain the consumption quantity, e.g.. diversion from the normal.
     *  0..1
     *  Consumption History
     *  Consumption Level Text
     *  Text
     *  Text. Type
     *  Average
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ConsumptionLevel
     */
    public function getConsumptionLevel()
    {
        return $this->consumptionLevel;
    }

    /**
     * Sets a new consumptionLevel
     *
     * BBIE
     *  Consumption History. Consumption Level Text. Text
     *  The consumption level, expressed as text, used explain the consumption quantity, e.g.. diversion from the normal.
     *  0..1
     *  Consumption History
     *  Consumption Level Text
     *  Text
     *  Text. Type
     *  Average
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ConsumptionLevel $consumptionLevel
     * @return self
     */
    public function setConsumptionLevel(\Greenter\Ubl\Entity\CommonBasic\ConsumptionLevel $consumptionLevel)
    {
        $this->consumptionLevel = $consumptionLevel;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Consumption History. Description. Text
     *  Text describing the consumption itself.
     *  0..n
     *  Consumption History
     *  Description
     *  Text
     *  Text. Type
     *  2004/2005
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\Description $description
     */
    public function addToDescription(\Greenter\Ubl\Entity\CommonBasic\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Consumption History. Description. Text
     *  Text describing the consumption itself.
     *  0..n
     *  Consumption History
     *  Description
     *  Text
     *  Text. Type
     *  2004/2005
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Consumption History. Description. Text
     *  Text describing the consumption itself.
     *  0..n
     *  Consumption History
     *  Description
     *  Text
     *  Text. Type
     *  2004/2005
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Consumption History. Description. Text
     *  Text describing the consumption itself.
     *  0..n
     *  Consumption History
     *  Description
     *  Text
     *  Text. Type
     *  2004/2005
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Consumption History. Description. Text
     *  Text describing the consumption itself.
     *  0..n
     *  Consumption History
     *  Description
     *  Text
     *  Text. Type
     *  2004/2005
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Consumption History. Period
     *  The period during which the consumption took place.
     *  1
     *  Consumption History
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
     *  Consumption History. Period
     *  The period during which the consumption took place.
     *  1
     *  Consumption History
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

