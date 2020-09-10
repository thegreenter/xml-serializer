<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ConsumptionReportType
 *
 * ABIE
 *  Consumption Report. Details
 *  A class to describe utility consumption, including details of the environment in which consumption takes place.
 *  Consumption Report
 * XSD Type: ConsumptionReportType
 */
class ConsumptionReportType
{

    /**
     * BBIE
     *  Consumption Report. Identifier
     *  An identifier for this consumption report.
     *  1
     *  Consumption Report
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  n/a
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Consumption Report. Consumption Type. Text
     *  The type of consumption, expressed as text.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Consumption Type Code. Code
     *  The type of consumption, expressed as a code.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Description. Text
     *  Text reporting utility consumption.
     *  0..n
     *  Consumption Report
     *  Description
     *  Text
     *  Text. Type
     *  This report contain the latest year consumption
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Consumption Report. Total_ Consumed Quantity. Quantity
     *  The total quantity consumed.
     *  0..1
     *  Consumption Report
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
     * BBIE
     *  Consumption Report. Basic_ Consumed Quantity. Quantity
     *  The basic quantity consumed, excluding additional consumption.
     *  0..1
     *  Consumption Report
     *  Basic
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20000.00
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\BasicConsumedQuantity $basicConsumedQuantity
     */
    private $basicConsumedQuantity = null;

    /**
     * BBIE
     *  Consumption Report. Resident_ Occupants Numeric. Numeric
     *  The number of people occupying the residence covered by this report.
     *  0..1
     *  Consumption Report
     *  Resident
     *  Occupants Numeric
     *  Numeric
     *  Numeric. Type
     *  4.0
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ResidentOccupantsNumeric $residentOccupantsNumeric
     */
    private $residentOccupantsNumeric = null;

    /**
     * BBIE
     *  Consumption Report. Consumers_ Energy Level Code. Code
     *  The level of energy consumed, compared to the average for this residence type and the number of people living in the residence, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Consumers
     *  Energy Level Code
     *  Code
     *  Code. Type
     *  B
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ConsumersEnergyLevelCode $consumersEnergyLevelCode
     */
    private $consumersEnergyLevelCode = null;

    /**
     * BBIE
     *  Consumption Report. Consumers_ Energy Level. Text
     *  The level of energy consumed, compared to the average for this residence type and the number of people living in the residence, expressed as text.
     *  0..1
     *  Consumption Report
     *  Consumers
     *  Energy Level
     *  Text
     *  Text. Type
     *  Middel
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ConsumersEnergyLevel $consumersEnergyLevel
     */
    private $consumersEnergyLevel = null;

    /**
     * BBIE
     *  Consumption Report. Residence Type. Text
     *  The type of residence (house, apartment, etc.) covered in this report, expressed as text.
     *  0..1
     *  Consumption Report
     *  Residence Type
     *  Text
     *  Text. Type
     *  House
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ResidenceType $residenceType
     */
    private $residenceType = null;

    /**
     * BBIE
     *  Consumption Report. Residence Type Code. Code
     *  The type of residence (house, apartment, etc.) covered in this report, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Residence Type Code
     *  Code
     *  Code. Type
     *  House
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ResidenceTypeCode $residenceTypeCode
     */
    private $residenceTypeCode = null;

    /**
     * BBIE
     *  Consumption Report. Heating Type. Text
     *  The type of heating in the residence covered in this report, expressed as text.
     *  0..1
     *  Consumption Report
     *  Heating Type
     *  Text
     *  Text. Type
     *  District heating
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\HeatingType $heatingType
     */
    private $heatingType = null;

    /**
     * BBIE
     *  Consumption Report. Heating Type Code. Code
     *  The type of heating in the residence covered in this report, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Heating Type Code
     *  Code
     *  Code. Type
     *  DistrictHeating
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\HeatingTypeCode $heatingTypeCode
     */
    private $heatingTypeCode = null;

    /**
     * ASBIE
     *  Consumption Report. Period
     *  The period of consumption covered in this report.
     *  0..1
     *  Consumption Report
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Period $period
     */
    private $period = null;

    /**
     * ASBIE
     *  Consumption Report. Guidance_ Document Reference. Document Reference
     *  A reference to a document providing an explanation of this kind of report.
     *  0..1
     *  Consumption Report
     *  Guidance
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\GuidanceDocumentReference $guidanceDocumentReference
     */
    private $guidanceDocumentReference = null;

    /**
     * ASBIE
     *  Consumption Report. Document Reference
     *  A reference to some other document (for example, this report in another format).
     *  0..1
     *  Consumption Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\DocumentReference $documentReference
     */
    private $documentReference = null;

    /**
     * ASBIE
     *  Consumption Report. Consumption Report Reference
     *  A reference to a previous consumption report.
     *  0..n
     *  Consumption Report
     *  Consumption Report Reference
     *  Consumption Report Reference
     *  Consumption Report Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ConsumptionReportReference[] $consumptionReportReference
     */
    private $consumptionReportReference = [
        
    ];

    /**
     * ASBIE
     *  Consumption Report. Consumption History
     *  A report describing historical parameters relating to a specific instance of consumption.
     *  0..n
     *  Consumption Report
     *  Consumption History
     *  Consumption History
     *  Consumption History
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ConsumptionHistory[] $consumptionHistory
     */
    private $consumptionHistory = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Consumption Report. Identifier
     *  An identifier for this consumption report.
     *  1
     *  Consumption Report
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  n/a
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
     *  Consumption Report. Identifier
     *  An identifier for this consumption report.
     *  1
     *  Consumption Report
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  n/a
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
     * Gets as consumptionType
     *
     * BBIE
     *  Consumption Report. Consumption Type. Text
     *  The type of consumption, expressed as text.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Consumption Type. Text
     *  The type of consumption, expressed as text.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Consumption Type Code. Code
     *  The type of consumption, expressed as a code.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Consumption Type Code. Code
     *  The type of consumption, expressed as a code.
     *  0..1
     *  Consumption Report
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
     * Adds as description
     *
     * BBIE
     *  Consumption Report. Description. Text
     *  Text reporting utility consumption.
     *  0..n
     *  Consumption Report
     *  Description
     *  Text
     *  Text. Type
     *  This report contain the latest year consumption
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
     *  Consumption Report. Description. Text
     *  Text reporting utility consumption.
     *  0..n
     *  Consumption Report
     *  Description
     *  Text
     *  Text. Type
     *  This report contain the latest year consumption
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
     *  Consumption Report. Description. Text
     *  Text reporting utility consumption.
     *  0..n
     *  Consumption Report
     *  Description
     *  Text
     *  Text. Type
     *  This report contain the latest year consumption
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
     *  Consumption Report. Description. Text
     *  Text reporting utility consumption.
     *  0..n
     *  Consumption Report
     *  Description
     *  Text
     *  Text. Type
     *  This report contain the latest year consumption
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
     *  Consumption Report. Description. Text
     *  Text reporting utility consumption.
     *  0..n
     *  Consumption Report
     *  Description
     *  Text
     *  Text. Type
     *  This report contain the latest year consumption
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
     * Gets as totalConsumedQuantity
     *
     * BBIE
     *  Consumption Report. Total_ Consumed Quantity. Quantity
     *  The total quantity consumed.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Total_ Consumed Quantity. Quantity
     *  The total quantity consumed.
     *  0..1
     *  Consumption Report
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
     * Gets as basicConsumedQuantity
     *
     * BBIE
     *  Consumption Report. Basic_ Consumed Quantity. Quantity
     *  The basic quantity consumed, excluding additional consumption.
     *  0..1
     *  Consumption Report
     *  Basic
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20000.00
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\BasicConsumedQuantity
     */
    public function getBasicConsumedQuantity()
    {
        return $this->basicConsumedQuantity;
    }

    /**
     * Sets a new basicConsumedQuantity
     *
     * BBIE
     *  Consumption Report. Basic_ Consumed Quantity. Quantity
     *  The basic quantity consumed, excluding additional consumption.
     *  0..1
     *  Consumption Report
     *  Basic
     *  Consumed Quantity
     *  Quantity
     *  Quantity. Type
     *  20000.00
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\BasicConsumedQuantity $basicConsumedQuantity
     * @return self
     */
    public function setBasicConsumedQuantity(\Greenter\Ubl\Entity\CommonBasic\BasicConsumedQuantity $basicConsumedQuantity)
    {
        $this->basicConsumedQuantity = $basicConsumedQuantity;
        return $this;
    }

    /**
     * Gets as residentOccupantsNumeric
     *
     * BBIE
     *  Consumption Report. Resident_ Occupants Numeric. Numeric
     *  The number of people occupying the residence covered by this report.
     *  0..1
     *  Consumption Report
     *  Resident
     *  Occupants Numeric
     *  Numeric
     *  Numeric. Type
     *  4.0
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ResidentOccupantsNumeric
     */
    public function getResidentOccupantsNumeric()
    {
        return $this->residentOccupantsNumeric;
    }

    /**
     * Sets a new residentOccupantsNumeric
     *
     * BBIE
     *  Consumption Report. Resident_ Occupants Numeric. Numeric
     *  The number of people occupying the residence covered by this report.
     *  0..1
     *  Consumption Report
     *  Resident
     *  Occupants Numeric
     *  Numeric
     *  Numeric. Type
     *  4.0
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ResidentOccupantsNumeric $residentOccupantsNumeric
     * @return self
     */
    public function setResidentOccupantsNumeric(\Greenter\Ubl\Entity\CommonBasic\ResidentOccupantsNumeric $residentOccupantsNumeric)
    {
        $this->residentOccupantsNumeric = $residentOccupantsNumeric;
        return $this;
    }

    /**
     * Gets as consumersEnergyLevelCode
     *
     * BBIE
     *  Consumption Report. Consumers_ Energy Level Code. Code
     *  The level of energy consumed, compared to the average for this residence type and the number of people living in the residence, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Consumers
     *  Energy Level Code
     *  Code
     *  Code. Type
     *  B
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ConsumersEnergyLevelCode
     */
    public function getConsumersEnergyLevelCode()
    {
        return $this->consumersEnergyLevelCode;
    }

    /**
     * Sets a new consumersEnergyLevelCode
     *
     * BBIE
     *  Consumption Report. Consumers_ Energy Level Code. Code
     *  The level of energy consumed, compared to the average for this residence type and the number of people living in the residence, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Consumers
     *  Energy Level Code
     *  Code
     *  Code. Type
     *  B
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ConsumersEnergyLevelCode $consumersEnergyLevelCode
     * @return self
     */
    public function setConsumersEnergyLevelCode(\Greenter\Ubl\Entity\CommonBasic\ConsumersEnergyLevelCode $consumersEnergyLevelCode)
    {
        $this->consumersEnergyLevelCode = $consumersEnergyLevelCode;
        return $this;
    }

    /**
     * Gets as consumersEnergyLevel
     *
     * BBIE
     *  Consumption Report. Consumers_ Energy Level. Text
     *  The level of energy consumed, compared to the average for this residence type and the number of people living in the residence, expressed as text.
     *  0..1
     *  Consumption Report
     *  Consumers
     *  Energy Level
     *  Text
     *  Text. Type
     *  Middel
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ConsumersEnergyLevel
     */
    public function getConsumersEnergyLevel()
    {
        return $this->consumersEnergyLevel;
    }

    /**
     * Sets a new consumersEnergyLevel
     *
     * BBIE
     *  Consumption Report. Consumers_ Energy Level. Text
     *  The level of energy consumed, compared to the average for this residence type and the number of people living in the residence, expressed as text.
     *  0..1
     *  Consumption Report
     *  Consumers
     *  Energy Level
     *  Text
     *  Text. Type
     *  Middel
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ConsumersEnergyLevel $consumersEnergyLevel
     * @return self
     */
    public function setConsumersEnergyLevel(\Greenter\Ubl\Entity\CommonBasic\ConsumersEnergyLevel $consumersEnergyLevel)
    {
        $this->consumersEnergyLevel = $consumersEnergyLevel;
        return $this;
    }

    /**
     * Gets as residenceType
     *
     * BBIE
     *  Consumption Report. Residence Type. Text
     *  The type of residence (house, apartment, etc.) covered in this report, expressed as text.
     *  0..1
     *  Consumption Report
     *  Residence Type
     *  Text
     *  Text. Type
     *  House
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ResidenceType
     */
    public function getResidenceType()
    {
        return $this->residenceType;
    }

    /**
     * Sets a new residenceType
     *
     * BBIE
     *  Consumption Report. Residence Type. Text
     *  The type of residence (house, apartment, etc.) covered in this report, expressed as text.
     *  0..1
     *  Consumption Report
     *  Residence Type
     *  Text
     *  Text. Type
     *  House
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ResidenceType $residenceType
     * @return self
     */
    public function setResidenceType(\Greenter\Ubl\Entity\CommonBasic\ResidenceType $residenceType)
    {
        $this->residenceType = $residenceType;
        return $this;
    }

    /**
     * Gets as residenceTypeCode
     *
     * BBIE
     *  Consumption Report. Residence Type Code. Code
     *  The type of residence (house, apartment, etc.) covered in this report, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Residence Type Code
     *  Code
     *  Code. Type
     *  House
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ResidenceTypeCode
     */
    public function getResidenceTypeCode()
    {
        return $this->residenceTypeCode;
    }

    /**
     * Sets a new residenceTypeCode
     *
     * BBIE
     *  Consumption Report. Residence Type Code. Code
     *  The type of residence (house, apartment, etc.) covered in this report, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Residence Type Code
     *  Code
     *  Code. Type
     *  House
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ResidenceTypeCode $residenceTypeCode
     * @return self
     */
    public function setResidenceTypeCode(\Greenter\Ubl\Entity\CommonBasic\ResidenceTypeCode $residenceTypeCode)
    {
        $this->residenceTypeCode = $residenceTypeCode;
        return $this;
    }

    /**
     * Gets as heatingType
     *
     * BBIE
     *  Consumption Report. Heating Type. Text
     *  The type of heating in the residence covered in this report, expressed as text.
     *  0..1
     *  Consumption Report
     *  Heating Type
     *  Text
     *  Text. Type
     *  District heating
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\HeatingType
     */
    public function getHeatingType()
    {
        return $this->heatingType;
    }

    /**
     * Sets a new heatingType
     *
     * BBIE
     *  Consumption Report. Heating Type. Text
     *  The type of heating in the residence covered in this report, expressed as text.
     *  0..1
     *  Consumption Report
     *  Heating Type
     *  Text
     *  Text. Type
     *  District heating
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\HeatingType $heatingType
     * @return self
     */
    public function setHeatingType(\Greenter\Ubl\Entity\CommonBasic\HeatingType $heatingType)
    {
        $this->heatingType = $heatingType;
        return $this;
    }

    /**
     * Gets as heatingTypeCode
     *
     * BBIE
     *  Consumption Report. Heating Type Code. Code
     *  The type of heating in the residence covered in this report, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Heating Type Code
     *  Code
     *  Code. Type
     *  DistrictHeating
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\HeatingTypeCode
     */
    public function getHeatingTypeCode()
    {
        return $this->heatingTypeCode;
    }

    /**
     * Sets a new heatingTypeCode
     *
     * BBIE
     *  Consumption Report. Heating Type Code. Code
     *  The type of heating in the residence covered in this report, expressed as a code.
     *  0..1
     *  Consumption Report
     *  Heating Type Code
     *  Code
     *  Code. Type
     *  DistrictHeating
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\HeatingTypeCode $heatingTypeCode
     * @return self
     */
    public function setHeatingTypeCode(\Greenter\Ubl\Entity\CommonBasic\HeatingTypeCode $heatingTypeCode)
    {
        $this->heatingTypeCode = $heatingTypeCode;
        return $this;
    }

    /**
     * Gets as period
     *
     * ASBIE
     *  Consumption Report. Period
     *  The period of consumption covered in this report.
     *  0..1
     *  Consumption Report
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
     *  Consumption Report. Period
     *  The period of consumption covered in this report.
     *  0..1
     *  Consumption Report
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
     * Gets as guidanceDocumentReference
     *
     * ASBIE
     *  Consumption Report. Guidance_ Document Reference. Document Reference
     *  A reference to a document providing an explanation of this kind of report.
     *  0..1
     *  Consumption Report
     *  Guidance
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\GuidanceDocumentReference
     */
    public function getGuidanceDocumentReference()
    {
        return $this->guidanceDocumentReference;
    }

    /**
     * Sets a new guidanceDocumentReference
     *
     * ASBIE
     *  Consumption Report. Guidance_ Document Reference. Document Reference
     *  A reference to a document providing an explanation of this kind of report.
     *  0..1
     *  Consumption Report
     *  Guidance
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\GuidanceDocumentReference $guidanceDocumentReference
     * @return self
     */
    public function setGuidanceDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\GuidanceDocumentReference $guidanceDocumentReference)
    {
        $this->guidanceDocumentReference = $guidanceDocumentReference;
        return $this;
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Consumption Report. Document Reference
     *  A reference to some other document (for example, this report in another format).
     *  0..1
     *  Consumption Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\DocumentReference
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Consumption Report. Document Reference
     *  A reference to some other document (for example, this report in another format).
     *  0..1
     *  Consumption Report
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DocumentReference $documentReference
     * @return self
     */
    public function setDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\DocumentReference $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Adds as consumptionReportReference
     *
     * ASBIE
     *  Consumption Report. Consumption Report Reference
     *  A reference to a previous consumption report.
     *  0..n
     *  Consumption Report
     *  Consumption Report Reference
     *  Consumption Report Reference
     *  Consumption Report Reference
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ConsumptionReportReference $consumptionReportReference
     */
    public function addToConsumptionReportReference(\Greenter\Ubl\Entity\CommonAggregateComponents\ConsumptionReportReference $consumptionReportReference)
    {
        $this->consumptionReportReference[] = $consumptionReportReference;
        return $this;
    }

    /**
     * isset consumptionReportReference
     *
     * ASBIE
     *  Consumption Report. Consumption Report Reference
     *  A reference to a previous consumption report.
     *  0..n
     *  Consumption Report
     *  Consumption Report Reference
     *  Consumption Report Reference
     *  Consumption Report Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumptionReportReference($index)
    {
        return isset($this->consumptionReportReference[$index]);
    }

    /**
     * unset consumptionReportReference
     *
     * ASBIE
     *  Consumption Report. Consumption Report Reference
     *  A reference to a previous consumption report.
     *  0..n
     *  Consumption Report
     *  Consumption Report Reference
     *  Consumption Report Reference
     *  Consumption Report Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumptionReportReference($index)
    {
        unset($this->consumptionReportReference[$index]);
    }

    /**
     * Gets as consumptionReportReference
     *
     * ASBIE
     *  Consumption Report. Consumption Report Reference
     *  A reference to a previous consumption report.
     *  0..n
     *  Consumption Report
     *  Consumption Report Reference
     *  Consumption Report Reference
     *  Consumption Report Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ConsumptionReportReference[]
     */
    public function getConsumptionReportReference()
    {
        return $this->consumptionReportReference;
    }

    /**
     * Sets a new consumptionReportReference
     *
     * ASBIE
     *  Consumption Report. Consumption Report Reference
     *  A reference to a previous consumption report.
     *  0..n
     *  Consumption Report
     *  Consumption Report Reference
     *  Consumption Report Reference
     *  Consumption Report Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ConsumptionReportReference[] $consumptionReportReference
     * @return self
     */
    public function setConsumptionReportReference(array $consumptionReportReference)
    {
        $this->consumptionReportReference = $consumptionReportReference;
        return $this;
    }

    /**
     * Adds as consumptionHistory
     *
     * ASBIE
     *  Consumption Report. Consumption History
     *  A report describing historical parameters relating to a specific instance of consumption.
     *  0..n
     *  Consumption Report
     *  Consumption History
     *  Consumption History
     *  Consumption History
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ConsumptionHistory $consumptionHistory
     */
    public function addToConsumptionHistory(\Greenter\Ubl\Entity\CommonAggregateComponents\ConsumptionHistory $consumptionHistory)
    {
        $this->consumptionHistory[] = $consumptionHistory;
        return $this;
    }

    /**
     * isset consumptionHistory
     *
     * ASBIE
     *  Consumption Report. Consumption History
     *  A report describing historical parameters relating to a specific instance of consumption.
     *  0..n
     *  Consumption Report
     *  Consumption History
     *  Consumption History
     *  Consumption History
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsumptionHistory($index)
    {
        return isset($this->consumptionHistory[$index]);
    }

    /**
     * unset consumptionHistory
     *
     * ASBIE
     *  Consumption Report. Consumption History
     *  A report describing historical parameters relating to a specific instance of consumption.
     *  0..n
     *  Consumption Report
     *  Consumption History
     *  Consumption History
     *  Consumption History
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsumptionHistory($index)
    {
        unset($this->consumptionHistory[$index]);
    }

    /**
     * Gets as consumptionHistory
     *
     * ASBIE
     *  Consumption Report. Consumption History
     *  A report describing historical parameters relating to a specific instance of consumption.
     *  0..n
     *  Consumption Report
     *  Consumption History
     *  Consumption History
     *  Consumption History
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ConsumptionHistory[]
     */
    public function getConsumptionHistory()
    {
        return $this->consumptionHistory;
    }

    /**
     * Sets a new consumptionHistory
     *
     * ASBIE
     *  Consumption Report. Consumption History
     *  A report describing historical parameters relating to a specific instance of consumption.
     *  0..n
     *  Consumption Report
     *  Consumption History
     *  Consumption History
     *  Consumption History
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ConsumptionHistory[] $consumptionHistory
     * @return self
     */
    public function setConsumptionHistory(array $consumptionHistory)
    {
        $this->consumptionHistory = $consumptionHistory;
        return $this;
    }


}

