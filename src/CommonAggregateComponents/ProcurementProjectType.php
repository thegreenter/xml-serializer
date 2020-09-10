<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ProcurementProjectType
 *
 * ABIE
 *  Procurement Project. Details
 *  A class to describe a project to procure goods, works, or services.
 *  Procurement Project
 * XSD Type: ProcurementProjectType
 */
class ProcurementProjectType
{

    /**
     * BBIE
     *  Procurement Project. Identifier
     *  An identifier for this procurement project.
     *  0..1
     *  Procurement Project
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Procurement Project. Name
     *  A name of this procurement project.
     *  1..n
     *  Procurement Project
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Name[] $name
     */
    private $name = [
        
    ];

    /**
     * BBIE
     *  Procurement Project. Description. Text
     *  Text describing this procurement project.
     *  0..n
     *  Procurement Project
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Procurement Project. Procurement_ Type Code. Code
     *  A code signifying the type of procurement project (e.g., goods, works, services).
     *  0..1
     *  Procurement Project
     *  Procurement
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ProcurementTypeCode $procurementTypeCode
     */
    private $procurementTypeCode = null;

    /**
     * BBIE
     *  Procurement Project. Procurement Sub_ Type Code. Code
     *  A code signifying the subcategory of the type of work for this project (e.g., land surveying, IT consulting).
     *  0..1
     *  Procurement Project
     *  Procurement Sub
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ProcurementSubTypeCode $procurementSubTypeCode
     */
    private $procurementSubTypeCode = null;

    /**
     * BBIE
     *  Procurement Project. Quality Control Code. Code
     *  The indication of whether or not the control quality is included in the works project.
     *  0..1
     *  Procurement Project
     *  Quality Control Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\QualityControlCode $qualityControlCode
     */
    private $qualityControlCode = null;

    /**
     * BBIE
     *  Procurement Project. Required_ Fee. Amount
     *  The amount of the reimbursement fee for concession procurement projects.
     *  0..1
     *  Procurement Project
     *  Required
     *  Fee
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\RequiredFeeAmount $requiredFeeAmount
     */
    private $requiredFeeAmount = null;

    /**
     * BBIE
     *  Procurement Project. Fee_ Description. Text
     *  Text describing the reimbursement fee for concession procurement projects.
     *  0..n
     *  Procurement Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\FeeDescription[] $feeDescription
     */
    private $feeDescription = [
        
    ];

    /**
     * BBIE
     *  Procurement Project. Requested_ Delivery Date. Date
     *  The requested delivery date for this procurement project.
     *  0..1
     *  Procurement Project
     *  Requested
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $requestedDeliveryDate
     */
    private $requestedDeliveryDate = null;

    /**
     * BBIE
     *  Procurement Project. Estimated_ Overall Contract. Quantity
     *  The estimated overall quantity for this procurement project.
     *  0..1
     *  Procurement Project
     *  Estimated
     *  Overall Contract
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\EstimatedOverallContractQuantity $estimatedOverallContractQuantity
     */
    private $estimatedOverallContractQuantity = null;

    /**
     * BBIE
     *  Procurement Project. Note. Text
     *  Free-form text applying to the Procurement Project. This element may contain additional information about the lot/contract that is not contained explicitly in another structure.
     *  0..n
     *  Procurement Project
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * ASBIE
     *  Procurement Project. Requested Tender Total
     *  Budget monetary amounts for the project as whole.
     *  0..1
     *  Procurement Project
     *  Requested Tender Total
     *  Requested Tender Total
     *  Requested Tender Total
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\RequestedTenderTotal $requestedTenderTotal
     */
    private $requestedTenderTotal = null;

    /**
     * ASBIE
     *  Procurement Project. Main_ Commodity Classification. Commodity Classification
     *  An association to the main classification category for the deliverable requested.
     *  0..1
     *  Procurement Project
     *  Main
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\MainCommodityClassification $mainCommodityClassification
     */
    private $mainCommodityClassification = null;

    /**
     * ASBIE
     *  Procurement Project. Additional_ Commodity Classification. Commodity Classification
     *  An association to additional classification categories for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Additional
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\AdditionalCommodityClassification[] $additionalCommodityClassification
     */
    private $additionalCommodityClassification = [
        
    ];

    /**
     * ASBIE
     *  Procurement Project. Realized_ Location. Location
     *  A place where this procurement project will be physically realized.
     *  0..n
     *  Procurement Project
     *  Realized
     *  Location
     *  Location
     *  Location
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\RealizedLocation[] $realizedLocation
     */
    private $realizedLocation = [
        
    ];

    /**
     * ASBIE
     *  Procurement Project. Planned_ Period. Period
     *  The period during which this procurement project is planned to take place.
     *  0..1
     *  Procurement Project
     *  Planned
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PlannedPeriod $plannedPeriod
     */
    private $plannedPeriod = null;

    /**
     * ASBIE
     *  Procurement Project. Contract Extension
     *  The contract extension for this tendering process.
     *  0..1
     *  Procurement Project
     *  Contract Extension
     *  Contract Extension
     *  Contract Extension
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ContractExtension $contractExtension
     */
    private $contractExtension = null;

    /**
     * ASBIE
     *  Procurement Project. Request For Tender Line
     *  A good or service this project is intended to procure.
     *  0..n
     *  Procurement Project
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\RequestForTenderLine[] $requestForTenderLine
     */
    private $requestForTenderLine = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Procurement Project. Identifier
     *  An identifier for this procurement project.
     *  0..1
     *  Procurement Project
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
     *  Procurement Project. Identifier
     *  An identifier for this procurement project.
     *  0..1
     *  Procurement Project
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
     * Adds as name
     *
     * BBIE
     *  Procurement Project. Name
     *  A name of this procurement project.
     *  1..n
     *  Procurement Project
     *  Name
     *  Name
     *  Name. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\Name $name
     */
    public function addToName(\Greenter\Ubl\Entity\CommonBasic\Name $name)
    {
        $this->name[] = $name;
        return $this;
    }

    /**
     * isset name
     *
     * BBIE
     *  Procurement Project. Name
     *  A name of this procurement project.
     *  1..n
     *  Procurement Project
     *  Name
     *  Name
     *  Name. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetName($index)
    {
        return isset($this->name[$index]);
    }

    /**
     * unset name
     *
     * BBIE
     *  Procurement Project. Name
     *  A name of this procurement project.
     *  1..n
     *  Procurement Project
     *  Name
     *  Name
     *  Name. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetName($index)
    {
        unset($this->name[$index]);
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Procurement Project. Name
     *  A name of this procurement project.
     *  1..n
     *  Procurement Project
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Name[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Procurement Project. Name
     *  A name of this procurement project.
     *  1..n
     *  Procurement Project
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Name[] $name
     * @return self
     */
    public function setName(array $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Procurement Project. Description. Text
     *  Text describing this procurement project.
     *  0..n
     *  Procurement Project
     *  Description
     *  Text
     *  Text. Type
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
     *  Procurement Project. Description. Text
     *  Text describing this procurement project.
     *  0..n
     *  Procurement Project
     *  Description
     *  Text
     *  Text. Type
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
     *  Procurement Project. Description. Text
     *  Text describing this procurement project.
     *  0..n
     *  Procurement Project
     *  Description
     *  Text
     *  Text. Type
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
     *  Procurement Project. Description. Text
     *  Text describing this procurement project.
     *  0..n
     *  Procurement Project
     *  Description
     *  Text
     *  Text. Type
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
     *  Procurement Project. Description. Text
     *  Text describing this procurement project.
     *  0..n
     *  Procurement Project
     *  Description
     *  Text
     *  Text. Type
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
     * Gets as procurementTypeCode
     *
     * BBIE
     *  Procurement Project. Procurement_ Type Code. Code
     *  A code signifying the type of procurement project (e.g., goods, works, services).
     *  0..1
     *  Procurement Project
     *  Procurement
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ProcurementTypeCode
     */
    public function getProcurementTypeCode()
    {
        return $this->procurementTypeCode;
    }

    /**
     * Sets a new procurementTypeCode
     *
     * BBIE
     *  Procurement Project. Procurement_ Type Code. Code
     *  A code signifying the type of procurement project (e.g., goods, works, services).
     *  0..1
     *  Procurement Project
     *  Procurement
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ProcurementTypeCode $procurementTypeCode
     * @return self
     */
    public function setProcurementTypeCode(\Greenter\Ubl\Entity\CommonBasic\ProcurementTypeCode $procurementTypeCode)
    {
        $this->procurementTypeCode = $procurementTypeCode;
        return $this;
    }

    /**
     * Gets as procurementSubTypeCode
     *
     * BBIE
     *  Procurement Project. Procurement Sub_ Type Code. Code
     *  A code signifying the subcategory of the type of work for this project (e.g., land surveying, IT consulting).
     *  0..1
     *  Procurement Project
     *  Procurement Sub
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ProcurementSubTypeCode
     */
    public function getProcurementSubTypeCode()
    {
        return $this->procurementSubTypeCode;
    }

    /**
     * Sets a new procurementSubTypeCode
     *
     * BBIE
     *  Procurement Project. Procurement Sub_ Type Code. Code
     *  A code signifying the subcategory of the type of work for this project (e.g., land surveying, IT consulting).
     *  0..1
     *  Procurement Project
     *  Procurement Sub
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ProcurementSubTypeCode $procurementSubTypeCode
     * @return self
     */
    public function setProcurementSubTypeCode(\Greenter\Ubl\Entity\CommonBasic\ProcurementSubTypeCode $procurementSubTypeCode)
    {
        $this->procurementSubTypeCode = $procurementSubTypeCode;
        return $this;
    }

    /**
     * Gets as qualityControlCode
     *
     * BBIE
     *  Procurement Project. Quality Control Code. Code
     *  The indication of whether or not the control quality is included in the works project.
     *  0..1
     *  Procurement Project
     *  Quality Control Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\QualityControlCode
     */
    public function getQualityControlCode()
    {
        return $this->qualityControlCode;
    }

    /**
     * Sets a new qualityControlCode
     *
     * BBIE
     *  Procurement Project. Quality Control Code. Code
     *  The indication of whether or not the control quality is included in the works project.
     *  0..1
     *  Procurement Project
     *  Quality Control Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\QualityControlCode $qualityControlCode
     * @return self
     */
    public function setQualityControlCode(\Greenter\Ubl\Entity\CommonBasic\QualityControlCode $qualityControlCode)
    {
        $this->qualityControlCode = $qualityControlCode;
        return $this;
    }

    /**
     * Gets as requiredFeeAmount
     *
     * BBIE
     *  Procurement Project. Required_ Fee. Amount
     *  The amount of the reimbursement fee for concession procurement projects.
     *  0..1
     *  Procurement Project
     *  Required
     *  Fee
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\RequiredFeeAmount
     */
    public function getRequiredFeeAmount()
    {
        return $this->requiredFeeAmount;
    }

    /**
     * Sets a new requiredFeeAmount
     *
     * BBIE
     *  Procurement Project. Required_ Fee. Amount
     *  The amount of the reimbursement fee for concession procurement projects.
     *  0..1
     *  Procurement Project
     *  Required
     *  Fee
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\RequiredFeeAmount $requiredFeeAmount
     * @return self
     */
    public function setRequiredFeeAmount(\Greenter\Ubl\Entity\CommonBasic\RequiredFeeAmount $requiredFeeAmount)
    {
        $this->requiredFeeAmount = $requiredFeeAmount;
        return $this;
    }

    /**
     * Adds as feeDescription
     *
     * BBIE
     *  Procurement Project. Fee_ Description. Text
     *  Text describing the reimbursement fee for concession procurement projects.
     *  0..n
     *  Procurement Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\FeeDescription $feeDescription
     */
    public function addToFeeDescription(\Greenter\Ubl\Entity\CommonBasic\FeeDescription $feeDescription)
    {
        $this->feeDescription[] = $feeDescription;
        return $this;
    }

    /**
     * isset feeDescription
     *
     * BBIE
     *  Procurement Project. Fee_ Description. Text
     *  Text describing the reimbursement fee for concession procurement projects.
     *  0..n
     *  Procurement Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeeDescription($index)
    {
        return isset($this->feeDescription[$index]);
    }

    /**
     * unset feeDescription
     *
     * BBIE
     *  Procurement Project. Fee_ Description. Text
     *  Text describing the reimbursement fee for concession procurement projects.
     *  0..n
     *  Procurement Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeeDescription($index)
    {
        unset($this->feeDescription[$index]);
    }

    /**
     * Gets as feeDescription
     *
     * BBIE
     *  Procurement Project. Fee_ Description. Text
     *  Text describing the reimbursement fee for concession procurement projects.
     *  0..n
     *  Procurement Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\FeeDescription[]
     */
    public function getFeeDescription()
    {
        return $this->feeDescription;
    }

    /**
     * Sets a new feeDescription
     *
     * BBIE
     *  Procurement Project. Fee_ Description. Text
     *  Text describing the reimbursement fee for concession procurement projects.
     *  0..n
     *  Procurement Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\FeeDescription[] $feeDescription
     * @return self
     */
    public function setFeeDescription(array $feeDescription)
    {
        $this->feeDescription = $feeDescription;
        return $this;
    }

    /**
     * Gets as requestedDeliveryDate
     *
     * BBIE
     *  Procurement Project. Requested_ Delivery Date. Date
     *  The requested delivery date for this procurement project.
     *  0..1
     *  Procurement Project
     *  Requested
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getRequestedDeliveryDate()
    {
        return $this->requestedDeliveryDate;
    }

    /**
     * Sets a new requestedDeliveryDate
     *
     * BBIE
     *  Procurement Project. Requested_ Delivery Date. Date
     *  The requested delivery date for this procurement project.
     *  0..1
     *  Procurement Project
     *  Requested
     *  Delivery Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $requestedDeliveryDate
     * @return self
     */
    public function setRequestedDeliveryDate(\DateTime $requestedDeliveryDate)
    {
        $this->requestedDeliveryDate = $requestedDeliveryDate;
        return $this;
    }

    /**
     * Gets as estimatedOverallContractQuantity
     *
     * BBIE
     *  Procurement Project. Estimated_ Overall Contract. Quantity
     *  The estimated overall quantity for this procurement project.
     *  0..1
     *  Procurement Project
     *  Estimated
     *  Overall Contract
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\EstimatedOverallContractQuantity
     */
    public function getEstimatedOverallContractQuantity()
    {
        return $this->estimatedOverallContractQuantity;
    }

    /**
     * Sets a new estimatedOverallContractQuantity
     *
     * BBIE
     *  Procurement Project. Estimated_ Overall Contract. Quantity
     *  The estimated overall quantity for this procurement project.
     *  0..1
     *  Procurement Project
     *  Estimated
     *  Overall Contract
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\EstimatedOverallContractQuantity $estimatedOverallContractQuantity
     * @return self
     */
    public function setEstimatedOverallContractQuantity(\Greenter\Ubl\Entity\CommonBasic\EstimatedOverallContractQuantity $estimatedOverallContractQuantity)
    {
        $this->estimatedOverallContractQuantity = $estimatedOverallContractQuantity;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Procurement Project. Note. Text
     *  Free-form text applying to the Procurement Project. This element may contain additional information about the lot/contract that is not contained explicitly in another structure.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Note. Text
     *  Free-form text applying to the Procurement Project. This element may contain additional information about the lot/contract that is not contained explicitly in another structure.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Note. Text
     *  Free-form text applying to the Procurement Project. This element may contain additional information about the lot/contract that is not contained explicitly in another structure.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Note. Text
     *  Free-form text applying to the Procurement Project. This element may contain additional information about the lot/contract that is not contained explicitly in another structure.
     *  0..n
     *  Procurement Project
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
     *  Procurement Project. Note. Text
     *  Free-form text applying to the Procurement Project. This element may contain additional information about the lot/contract that is not contained explicitly in another structure.
     *  0..n
     *  Procurement Project
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
     * Gets as requestedTenderTotal
     *
     * ASBIE
     *  Procurement Project. Requested Tender Total
     *  Budget monetary amounts for the project as whole.
     *  0..1
     *  Procurement Project
     *  Requested Tender Total
     *  Requested Tender Total
     *  Requested Tender Total
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\RequestedTenderTotal
     */
    public function getRequestedTenderTotal()
    {
        return $this->requestedTenderTotal;
    }

    /**
     * Sets a new requestedTenderTotal
     *
     * ASBIE
     *  Procurement Project. Requested Tender Total
     *  Budget monetary amounts for the project as whole.
     *  0..1
     *  Procurement Project
     *  Requested Tender Total
     *  Requested Tender Total
     *  Requested Tender Total
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\RequestedTenderTotal $requestedTenderTotal
     * @return self
     */
    public function setRequestedTenderTotal(\Greenter\Ubl\Entity\CommonAggregateComponents\RequestedTenderTotal $requestedTenderTotal)
    {
        $this->requestedTenderTotal = $requestedTenderTotal;
        return $this;
    }

    /**
     * Gets as mainCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Main_ Commodity Classification. Commodity Classification
     *  An association to the main classification category for the deliverable requested.
     *  0..1
     *  Procurement Project
     *  Main
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\MainCommodityClassification
     */
    public function getMainCommodityClassification()
    {
        return $this->mainCommodityClassification;
    }

    /**
     * Sets a new mainCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Main_ Commodity Classification. Commodity Classification
     *  An association to the main classification category for the deliverable requested.
     *  0..1
     *  Procurement Project
     *  Main
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\MainCommodityClassification $mainCommodityClassification
     * @return self
     */
    public function setMainCommodityClassification(\Greenter\Ubl\Entity\CommonAggregateComponents\MainCommodityClassification $mainCommodityClassification)
    {
        $this->mainCommodityClassification = $mainCommodityClassification;
        return $this;
    }

    /**
     * Adds as additionalCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Additional_ Commodity Classification. Commodity Classification
     *  An association to additional classification categories for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Additional
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AdditionalCommodityClassification $additionalCommodityClassification
     */
    public function addToAdditionalCommodityClassification(\Greenter\Ubl\Entity\CommonAggregateComponents\AdditionalCommodityClassification $additionalCommodityClassification)
    {
        $this->additionalCommodityClassification[] = $additionalCommodityClassification;
        return $this;
    }

    /**
     * isset additionalCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Additional_ Commodity Classification. Commodity Classification
     *  An association to additional classification categories for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Additional
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalCommodityClassification($index)
    {
        return isset($this->additionalCommodityClassification[$index]);
    }

    /**
     * unset additionalCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Additional_ Commodity Classification. Commodity Classification
     *  An association to additional classification categories for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Additional
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalCommodityClassification($index)
    {
        unset($this->additionalCommodityClassification[$index]);
    }

    /**
     * Gets as additionalCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Additional_ Commodity Classification. Commodity Classification
     *  An association to additional classification categories for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Additional
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\AdditionalCommodityClassification[]
     */
    public function getAdditionalCommodityClassification()
    {
        return $this->additionalCommodityClassification;
    }

    /**
     * Sets a new additionalCommodityClassification
     *
     * ASBIE
     *  Procurement Project. Additional_ Commodity Classification. Commodity Classification
     *  An association to additional classification categories for the deliverable requested.
     *  0..n
     *  Procurement Project
     *  Additional
     *  Commodity Classification
     *  Commodity Classification
     *  Commodity Classification
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AdditionalCommodityClassification[] $additionalCommodityClassification
     * @return self
     */
    public function setAdditionalCommodityClassification(array $additionalCommodityClassification)
    {
        $this->additionalCommodityClassification = $additionalCommodityClassification;
        return $this;
    }

    /**
     * Adds as realizedLocation
     *
     * ASBIE
     *  Procurement Project. Realized_ Location. Location
     *  A place where this procurement project will be physically realized.
     *  0..n
     *  Procurement Project
     *  Realized
     *  Location
     *  Location
     *  Location
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\RealizedLocation $realizedLocation
     */
    public function addToRealizedLocation(\Greenter\Ubl\Entity\CommonAggregateComponents\RealizedLocation $realizedLocation)
    {
        $this->realizedLocation[] = $realizedLocation;
        return $this;
    }

    /**
     * isset realizedLocation
     *
     * ASBIE
     *  Procurement Project. Realized_ Location. Location
     *  A place where this procurement project will be physically realized.
     *  0..n
     *  Procurement Project
     *  Realized
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRealizedLocation($index)
    {
        return isset($this->realizedLocation[$index]);
    }

    /**
     * unset realizedLocation
     *
     * ASBIE
     *  Procurement Project. Realized_ Location. Location
     *  A place where this procurement project will be physically realized.
     *  0..n
     *  Procurement Project
     *  Realized
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRealizedLocation($index)
    {
        unset($this->realizedLocation[$index]);
    }

    /**
     * Gets as realizedLocation
     *
     * ASBIE
     *  Procurement Project. Realized_ Location. Location
     *  A place where this procurement project will be physically realized.
     *  0..n
     *  Procurement Project
     *  Realized
     *  Location
     *  Location
     *  Location
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\RealizedLocation[]
     */
    public function getRealizedLocation()
    {
        return $this->realizedLocation;
    }

    /**
     * Sets a new realizedLocation
     *
     * ASBIE
     *  Procurement Project. Realized_ Location. Location
     *  A place where this procurement project will be physically realized.
     *  0..n
     *  Procurement Project
     *  Realized
     *  Location
     *  Location
     *  Location
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\RealizedLocation[] $realizedLocation
     * @return self
     */
    public function setRealizedLocation(array $realizedLocation)
    {
        $this->realizedLocation = $realizedLocation;
        return $this;
    }

    /**
     * Gets as plannedPeriod
     *
     * ASBIE
     *  Procurement Project. Planned_ Period. Period
     *  The period during which this procurement project is planned to take place.
     *  0..1
     *  Procurement Project
     *  Planned
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PlannedPeriod
     */
    public function getPlannedPeriod()
    {
        return $this->plannedPeriod;
    }

    /**
     * Sets a new plannedPeriod
     *
     * ASBIE
     *  Procurement Project. Planned_ Period. Period
     *  The period during which this procurement project is planned to take place.
     *  0..1
     *  Procurement Project
     *  Planned
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PlannedPeriod $plannedPeriod
     * @return self
     */
    public function setPlannedPeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\PlannedPeriod $plannedPeriod)
    {
        $this->plannedPeriod = $plannedPeriod;
        return $this;
    }

    /**
     * Gets as contractExtension
     *
     * ASBIE
     *  Procurement Project. Contract Extension
     *  The contract extension for this tendering process.
     *  0..1
     *  Procurement Project
     *  Contract Extension
     *  Contract Extension
     *  Contract Extension
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ContractExtension
     */
    public function getContractExtension()
    {
        return $this->contractExtension;
    }

    /**
     * Sets a new contractExtension
     *
     * ASBIE
     *  Procurement Project. Contract Extension
     *  The contract extension for this tendering process.
     *  0..1
     *  Procurement Project
     *  Contract Extension
     *  Contract Extension
     *  Contract Extension
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ContractExtension $contractExtension
     * @return self
     */
    public function setContractExtension(\Greenter\Ubl\Entity\CommonAggregateComponents\ContractExtension $contractExtension)
    {
        $this->contractExtension = $contractExtension;
        return $this;
    }

    /**
     * Adds as requestForTenderLine
     *
     * ASBIE
     *  Procurement Project. Request For Tender Line
     *  A good or service this project is intended to procure.
     *  0..n
     *  Procurement Project
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\RequestForTenderLine $requestForTenderLine
     */
    public function addToRequestForTenderLine(\Greenter\Ubl\Entity\CommonAggregateComponents\RequestForTenderLine $requestForTenderLine)
    {
        $this->requestForTenderLine[] = $requestForTenderLine;
        return $this;
    }

    /**
     * isset requestForTenderLine
     *
     * ASBIE
     *  Procurement Project. Request For Tender Line
     *  A good or service this project is intended to procure.
     *  0..n
     *  Procurement Project
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestForTenderLine($index)
    {
        return isset($this->requestForTenderLine[$index]);
    }

    /**
     * unset requestForTenderLine
     *
     * ASBIE
     *  Procurement Project. Request For Tender Line
     *  A good or service this project is intended to procure.
     *  0..n
     *  Procurement Project
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestForTenderLine($index)
    {
        unset($this->requestForTenderLine[$index]);
    }

    /**
     * Gets as requestForTenderLine
     *
     * ASBIE
     *  Procurement Project. Request For Tender Line
     *  A good or service this project is intended to procure.
     *  0..n
     *  Procurement Project
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\RequestForTenderLine[]
     */
    public function getRequestForTenderLine()
    {
        return $this->requestForTenderLine;
    }

    /**
     * Sets a new requestForTenderLine
     *
     * ASBIE
     *  Procurement Project. Request For Tender Line
     *  A good or service this project is intended to procure.
     *  0..n
     *  Procurement Project
     *  Request For Tender Line
     *  Request For Tender Line
     *  Request For Tender Line
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\RequestForTenderLine[] $requestForTenderLine
     * @return self
     */
    public function setRequestForTenderLine(array $requestForTenderLine)
    {
        $this->requestForTenderLine = $requestForTenderLine;
        return $this;
    }


}

