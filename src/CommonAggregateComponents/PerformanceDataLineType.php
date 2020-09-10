<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing PerformanceDataLineType
 *
 * ABIE
 *  Performance Data Line. Details
 *  A class to define a line in a Performance History.
 *  Performance Data Line
 * XSD Type: PerformanceDataLineType
 */
class PerformanceDataLineType
{

    /**
     * BBIE
     *  Performance Data Line. Identifier
     *  An identifier for this performance data line.
     *  1
     *  Performance Data Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Performance Data Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Performance Data Line
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
     *  Performance Data Line. Performance Value. Quantity
     *  The value of the reported attribute.
     *  1
     *  Performance Data Line
     *  Performance Value
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PerformanceValueQuantity $performanceValueQuantity
     */
    private $performanceValueQuantity = null;

    /**
     * BBIE
     *  Performance Data Line. Performance Metric Type Code. Code
     *  A code signifying the measure of performance applicable to the reported attribute.
     *  1
     *  Performance Data Line
     *  Performance Metric Type Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PerformanceMetricTypeCode $performanceMetricTypeCode
     */
    private $performanceMetricTypeCode = null;

    /**
     * ASBIE
     *  Performance Data Line. Period
     *  The period to which this performance data line applies.
     *  0..1
     *  Performance Data Line
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Period $period
     */
    private $period = null;

    /**
     * ASBIE
     *  Performance Data Line. Item
     *  The item whose performance is reported in this data line.
     *  0..1
     *  Performance Data Line
     *  Item
     *  Item
     *  Item
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Item $item
     */
    private $item = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Performance Data Line. Identifier
     *  An identifier for this performance data line.
     *  1
     *  Performance Data Line
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
     *  Performance Data Line. Identifier
     *  An identifier for this performance data line.
     *  1
     *  Performance Data Line
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
     * Adds as note
     *
     * BBIE
     *  Performance Data Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Performance Data Line
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
     *  Performance Data Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Performance Data Line
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
     *  Performance Data Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Performance Data Line
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
     *  Performance Data Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Performance Data Line
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
     *  Performance Data Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Performance Data Line
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
     * Gets as performanceValueQuantity
     *
     * BBIE
     *  Performance Data Line. Performance Value. Quantity
     *  The value of the reported attribute.
     *  1
     *  Performance Data Line
     *  Performance Value
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PerformanceValueQuantity
     */
    public function getPerformanceValueQuantity()
    {
        return $this->performanceValueQuantity;
    }

    /**
     * Sets a new performanceValueQuantity
     *
     * BBIE
     *  Performance Data Line. Performance Value. Quantity
     *  The value of the reported attribute.
     *  1
     *  Performance Data Line
     *  Performance Value
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PerformanceValueQuantity $performanceValueQuantity
     * @return self
     */
    public function setPerformanceValueQuantity(\Greenter\Ubl\Entity\CommonBasic\PerformanceValueQuantity $performanceValueQuantity)
    {
        $this->performanceValueQuantity = $performanceValueQuantity;
        return $this;
    }

    /**
     * Gets as performanceMetricTypeCode
     *
     * BBIE
     *  Performance Data Line. Performance Metric Type Code. Code
     *  A code signifying the measure of performance applicable to the reported attribute.
     *  1
     *  Performance Data Line
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
     *  Performance Data Line. Performance Metric Type Code. Code
     *  A code signifying the measure of performance applicable to the reported attribute.
     *  1
     *  Performance Data Line
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
     * Gets as period
     *
     * ASBIE
     *  Performance Data Line. Period
     *  The period to which this performance data line applies.
     *  0..1
     *  Performance Data Line
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
     *  Performance Data Line. Period
     *  The period to which this performance data line applies.
     *  0..1
     *  Performance Data Line
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

    /**
     * Gets as item
     *
     * ASBIE
     *  Performance Data Line. Item
     *  The item whose performance is reported in this data line.
     *  0..1
     *  Performance Data Line
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
     *  Performance Data Line. Item
     *  The item whose performance is reported in this data line.
     *  0..1
     *  Performance Data Line
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


}

