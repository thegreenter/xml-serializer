<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ItemInformationRequestLineType
 *
 * ABIE
 *  Item Information Request Line. Details
 *  A class to define a line in an Item Information Request asking a trading partner for item information.
 *  Item Information Request Line
 * XSD Type: ItemInformationRequestLineType
 */
class ItemInformationRequestLineType
{

    /**
     * BBIE
     *  Item Information Request Line. Time Frequency Code. Code
     *  A code signifying the frequency with which item information should be sent to the requester.
     *  0..1
     *  Item Information Request Line
     *  Time Frequency Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TimeFrequencyCode $timeFrequencyCode
     */
    private $timeFrequencyCode = null;

    /**
     * BBIE
     *  Item Information Request Line. Supply Chain Activity Type Code. Code
     *  A code used to identify the type of supply chain activity about which information request is issued. Examples: CANCELED_ORDERS EMERGENCY_ORDERS ON_HAND ORDERS
     *  0..1
     *  Item Information Request Line
     *  Supply Chain Activity Type Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     */
    private $supplyChainActivityTypeCode = null;

    /**
     * BBIE
     *  Item Information Request Line. Forecast Type Code. Code
     *  The information request can be either about supply chain activity or about forecasts or about performance metrics, so it should be optional
     *  0..1
     *  Item Information Request Line
     *  Forecast Type Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ForecastTypeCode $forecastTypeCode
     */
    private $forecastTypeCode = null;

    /**
     * BBIE
     *  Item Information Request Line. Performance Metric Type Code. Code
     *  A code signifying a measure of performance.
     *  0..1
     *  Item Information Request Line
     *  Performance Metric Type Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PerformanceMetricTypeCode $performanceMetricTypeCode
     */
    private $performanceMetricTypeCode = null;

    /**
     * ASBIE
     *  Item Information Request Line. Period
     *  A period for which this information is requested.
     *  1..n
     *  Item Information Request Line
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Period[] $period
     */
    private $period = [
        
    ];

    /**
     * ASBIE
     *  Item Information Request Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  1..n
     *  Item Information Request Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\SalesItem[] $salesItem
     */
    private $salesItem = [
        
    ];

    /**
     * Gets as timeFrequencyCode
     *
     * BBIE
     *  Item Information Request Line. Time Frequency Code. Code
     *  A code signifying the frequency with which item information should be sent to the requester.
     *  0..1
     *  Item Information Request Line
     *  Time Frequency Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TimeFrequencyCode
     */
    public function getTimeFrequencyCode()
    {
        return $this->timeFrequencyCode;
    }

    /**
     * Sets a new timeFrequencyCode
     *
     * BBIE
     *  Item Information Request Line. Time Frequency Code. Code
     *  A code signifying the frequency with which item information should be sent to the requester.
     *  0..1
     *  Item Information Request Line
     *  Time Frequency Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TimeFrequencyCode $timeFrequencyCode
     * @return self
     */
    public function setTimeFrequencyCode(\Greenter\Ubl\Entity\CommonBasic\TimeFrequencyCode $timeFrequencyCode)
    {
        $this->timeFrequencyCode = $timeFrequencyCode;
        return $this;
    }

    /**
     * Gets as supplyChainActivityTypeCode
     *
     * BBIE
     *  Item Information Request Line. Supply Chain Activity Type Code. Code
     *  A code used to identify the type of supply chain activity about which information request is issued. Examples: CANCELED_ORDERS EMERGENCY_ORDERS ON_HAND ORDERS
     *  0..1
     *  Item Information Request Line
     *  Supply Chain Activity Type Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SupplyChainActivityTypeCode
     */
    public function getSupplyChainActivityTypeCode()
    {
        return $this->supplyChainActivityTypeCode;
    }

    /**
     * Sets a new supplyChainActivityTypeCode
     *
     * BBIE
     *  Item Information Request Line. Supply Chain Activity Type Code. Code
     *  A code used to identify the type of supply chain activity about which information request is issued. Examples: CANCELED_ORDERS EMERGENCY_ORDERS ON_HAND ORDERS
     *  0..1
     *  Item Information Request Line
     *  Supply Chain Activity Type Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SupplyChainActivityTypeCode $supplyChainActivityTypeCode
     * @return self
     */
    public function setSupplyChainActivityTypeCode(\Greenter\Ubl\Entity\CommonBasic\SupplyChainActivityTypeCode $supplyChainActivityTypeCode)
    {
        $this->supplyChainActivityTypeCode = $supplyChainActivityTypeCode;
        return $this;
    }

    /**
     * Gets as forecastTypeCode
     *
     * BBIE
     *  Item Information Request Line. Forecast Type Code. Code
     *  The information request can be either about supply chain activity or about forecasts or about performance metrics, so it should be optional
     *  0..1
     *  Item Information Request Line
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
     *  Item Information Request Line. Forecast Type Code. Code
     *  The information request can be either about supply chain activity or about forecasts or about performance metrics, so it should be optional
     *  0..1
     *  Item Information Request Line
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
     * Gets as performanceMetricTypeCode
     *
     * BBIE
     *  Item Information Request Line. Performance Metric Type Code. Code
     *  A code signifying a measure of performance.
     *  0..1
     *  Item Information Request Line
     *  Performance Metric Type Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PerformanceMetricTypeCode
     */
    public function getPerformanceMetricTypeCode()
    {
        return $this->performanceMetricTypeCode;
    }

    /**
     * Sets a new performanceMetricTypeCode
     *
     * BBIE
     *  Item Information Request Line. Performance Metric Type Code. Code
     *  A code signifying a measure of performance.
     *  0..1
     *  Item Information Request Line
     *  Performance Metric Type Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PerformanceMetricTypeCode $performanceMetricTypeCode
     * @return self
     */
    public function setPerformanceMetricTypeCode(\Greenter\Ubl\Entity\CommonBasic\PerformanceMetricTypeCode $performanceMetricTypeCode)
    {
        $this->performanceMetricTypeCode = $performanceMetricTypeCode;
        return $this;
    }

    /**
     * Adds as period
     *
     * ASBIE
     *  Item Information Request Line. Period
     *  A period for which this information is requested.
     *  1..n
     *  Item Information Request Line
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Period $period
     */
    public function addToPeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\Period $period)
    {
        $this->period[] = $period;
        return $this;
    }

    /**
     * isset period
     *
     * ASBIE
     *  Item Information Request Line. Period
     *  A period for which this information is requested.
     *  1..n
     *  Item Information Request Line
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPeriod($index)
    {
        return isset($this->period[$index]);
    }

    /**
     * unset period
     *
     * ASBIE
     *  Item Information Request Line. Period
     *  A period for which this information is requested.
     *  1..n
     *  Item Information Request Line
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPeriod($index)
    {
        unset($this->period[$index]);
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Item Information Request Line. Period
     *  A period for which this information is requested.
     *  1..n
     *  Item Information Request Line
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Period[]
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets a new period
     *
     * ASBIE
     *  Item Information Request Line. Period
     *  A period for which this information is requested.
     *  1..n
     *  Item Information Request Line
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Period[] $period
     * @return self
     */
    public function setPeriod(array $period)
    {
        $this->period = $period;
        return $this;
    }

    /**
     * Adds as salesItem
     *
     * ASBIE
     *  Item Information Request Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  1..n
     *  Item Information Request Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SalesItem $salesItem
     */
    public function addToSalesItem(\Greenter\Ubl\Entity\CommonAggregateComponents\SalesItem $salesItem)
    {
        $this->salesItem[] = $salesItem;
        return $this;
    }

    /**
     * isset salesItem
     *
     * ASBIE
     *  Item Information Request Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  1..n
     *  Item Information Request Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSalesItem($index)
    {
        return isset($this->salesItem[$index]);
    }

    /**
     * unset salesItem
     *
     * ASBIE
     *  Item Information Request Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  1..n
     *  Item Information Request Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSalesItem($index)
    {
        unset($this->salesItem[$index]);
    }

    /**
     * Gets as salesItem
     *
     * ASBIE
     *  Item Information Request Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  1..n
     *  Item Information Request Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\SalesItem[]
     */
    public function getSalesItem()
    {
        return $this->salesItem;
    }

    /**
     * Sets a new salesItem
     *
     * ASBIE
     *  Item Information Request Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  1..n
     *  Item Information Request Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SalesItem[] $salesItem
     * @return self
     */
    public function setSalesItem(array $salesItem)
    {
        $this->salesItem = $salesItem;
        return $this;
    }


}

