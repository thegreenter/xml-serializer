<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ConsumptionReportReferenceType
 *
 * ABIE
 *  Consumption Report Reference. Details
 *  A class to define a reference to an earlier consumption report (e.g., last year's consumption).
 *  Consumption Report Reference
 * XSD Type: ConsumptionReportReferenceType
 */
class ConsumptionReportReferenceType
{

    /**
     * BBIE
     *  Consumption Report Reference. Consumption_ Report Identifier. Identifier
     *  An identifier for the referenced consumption report.
     *  1
     *  Consumption Report Reference
     *  Consumption
     *  Report Identifier
     *  Identifier
     *  Identifier. Type
     *  n/a
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ConsumptionReportID $consumptionReportID
     */
    private $consumptionReportID = null;

    /**
     * BBIE
     *  Consumption Report Reference. Consumption Type. Text
     *  The reported consumption type, expressed as text.
     *  0..1
     *  Consumption Report Reference
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ConsumptionType $consumptionType
     */
    private $consumptionType = null;

    /**
     * BBIE
     *  Consumption Report Reference. Consumption Type Code. Code
     *  The reported consumption type, expressed as a code.
     *  0..1
     *  Consumption Report Reference
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ConsumptionTypeCode $consumptionTypeCode
     */
    private $consumptionTypeCode = null;

    /**
     * BBIE
     *  Consumption Report Reference. Total_ Consumed Quantity. Quantity
     *  The total quantity consumed during the period of the referenced report.
     *  1
     *  Consumption Report Reference
     *  Total
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20479.00
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TotalConsumedQuantity $totalConsumedQuantity
     */
    private $totalConsumedQuantity = null;

    /**
     * ASBIE
     *  Consumption Report Reference. Period
     *  The period of consumption covered by the referenced report.
     *  1
     *  Consumption Report Reference
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Period $period
     */
    private $period = null;

    /**
     * Gets as consumptionReportID
     *
     * BBIE
     *  Consumption Report Reference. Consumption_ Report Identifier. Identifier
     *  An identifier for the referenced consumption report.
     *  1
     *  Consumption Report Reference
     *  Consumption
     *  Report Identifier
     *  Identifier
     *  Identifier. Type
     *  n/a
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ConsumptionReportID
     */
    public function getConsumptionReportID()
    {
        return $this->consumptionReportID;
    }

    /**
     * Sets a new consumptionReportID
     *
     * BBIE
     *  Consumption Report Reference. Consumption_ Report Identifier. Identifier
     *  An identifier for the referenced consumption report.
     *  1
     *  Consumption Report Reference
     *  Consumption
     *  Report Identifier
     *  Identifier
     *  Identifier. Type
     *  n/a
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ConsumptionReportID $consumptionReportID
     * @return self
     */
    public function setConsumptionReportID(\Greenter\Ubl\Entity\CommonBasic\ConsumptionReportID $consumptionReportID)
    {
        $this->consumptionReportID = $consumptionReportID;
        return $this;
    }

    /**
     * Gets as consumptionType
     *
     * BBIE
     *  Consumption Report Reference. Consumption Type. Text
     *  The reported consumption type, expressed as text.
     *  0..1
     *  Consumption Report Reference
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ConsumptionType
     */
    public function getConsumptionType()
    {
        return $this->consumptionType;
    }

    /**
     * Sets a new consumptionType
     *
     * BBIE
     *  Consumption Report Reference. Consumption Type. Text
     *  The reported consumption type, expressed as text.
     *  0..1
     *  Consumption Report Reference
     *  Consumption Type
     *  Text
     *  Text. Type
     *  Consumption
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ConsumptionType $consumptionType
     * @return self
     */
    public function setConsumptionType(\Greenter\Ubl\Entity\CommonBasic\ConsumptionType $consumptionType)
    {
        $this->consumptionType = $consumptionType;
        return $this;
    }

    /**
     * Gets as consumptionTypeCode
     *
     * BBIE
     *  Consumption Report Reference. Consumption Type Code. Code
     *  The reported consumption type, expressed as a code.
     *  0..1
     *  Consumption Report Reference
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ConsumptionTypeCode
     */
    public function getConsumptionTypeCode()
    {
        return $this->consumptionTypeCode;
    }

    /**
     * Sets a new consumptionTypeCode
     *
     * BBIE
     *  Consumption Report Reference. Consumption Type Code. Code
     *  The reported consumption type, expressed as a code.
     *  0..1
     *  Consumption Report Reference
     *  Consumption Type Code
     *  Code
     *  Code. Type
     *  Consumption
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ConsumptionTypeCode $consumptionTypeCode
     * @return self
     */
    public function setConsumptionTypeCode(\Greenter\Ubl\Entity\CommonBasic\ConsumptionTypeCode $consumptionTypeCode)
    {
        $this->consumptionTypeCode = $consumptionTypeCode;
        return $this;
    }

    /**
     * Gets as totalConsumedQuantity
     *
     * BBIE
     *  Consumption Report Reference. Total_ Consumed Quantity. Quantity
     *  The total quantity consumed during the period of the referenced report.
     *  1
     *  Consumption Report Reference
     *  Total
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20479.00
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TotalConsumedQuantity
     */
    public function getTotalConsumedQuantity()
    {
        return $this->totalConsumedQuantity;
    }

    /**
     * Sets a new totalConsumedQuantity
     *
     * BBIE
     *  Consumption Report Reference. Total_ Consumed Quantity. Quantity
     *  The total quantity consumed during the period of the referenced report.
     *  1
     *  Consumption Report Reference
     *  Total
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20479.00
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TotalConsumedQuantity $totalConsumedQuantity
     * @return self
     */
    public function setTotalConsumedQuantity(\Greenter\Ubl\Entity\CommonBasic\TotalConsumedQuantity $totalConsumedQuantity)
    {
        $this->totalConsumedQuantity = $totalConsumedQuantity;
        return $this;
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Consumption Report Reference. Period
     *  The period of consumption covered by the referenced report.
     *  1
     *  Consumption Report Reference
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
     *  Consumption Report Reference. Period
     *  The period of consumption covered by the referenced report.
     *  1
     *  Consumption Report Reference
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

