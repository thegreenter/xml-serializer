<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing TenderResultType
 *
 * ABIE
 *  Tender Result. Details
 *  A class to describe the awarding of a tender in a tendering process.
 *  Tender Result
 * XSD Type: TenderResultType
 */
class TenderResultType
{

    /**
     * BBIE
     *  Tender Result. Tender_ Result Code. Code
     *  A code signifying the result of the tendering process.
     *  0..1
     *  Tender Result
     *  Tender
     *  Result Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TenderResultCode $tenderResultCode
     */
    private $tenderResultCode = null;

    /**
     * BBIE
     *  Tender Result. Description. Text
     *  Text describing the result of the tendering process.
     *  0..n
     *  Tender Result
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
     *  Tender Result. Advertisement. Amount
     *  The monetary value of the advertisement for this tendering process. 
     *  0..1
     *  Tender Result
     *  Advertisement
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\AdvertisementAmount $advertisementAmount
     */
    private $advertisementAmount = null;

    /**
     * BBIE
     *  Tender Result. Award Date. Date
     *  The date on which this result was formalized.
     *  1
     *  Tender Result
     *  Award Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $awardDate
     */
    private $awardDate = null;

    /**
     * BBIE
     *  Tender Result. Award Time. Time
     *  The time at which this result was formalized.
     *  0..1
     *  Tender Result
     *  Award Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $awardTime
     */
    private $awardTime = null;

    /**
     * BBIE
     *  Tender Result. Received_ Tender. Quantity
     *  The total number of tenders received in this tendering process.
     *  0..1
     *  Tender Result
     *  Received
     *  Tender
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ReceivedTenderQuantity $receivedTenderQuantity
     */
    private $receivedTenderQuantity = null;

    /**
     * BBIE
     *  Tender Result. Lower_ Tender. Amount
     *  The least expensive tender received in the tendering process.
     *  0..1
     *  Tender Result
     *  Lower
     *  Tender
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\LowerTenderAmount $lowerTenderAmount
     */
    private $lowerTenderAmount = null;

    /**
     * BBIE
     *  Tender Result. Higher_ Tender. Amount
     *  The most expensive tender received in this tendering process.
     *  0..1
     *  Tender Result
     *  Higher
     *  Tender
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\HigherTenderAmount $higherTenderAmount
     */
    private $higherTenderAmount = null;

    /**
     * BBIE
     *  Tender Result. Start Date. Date
     *  The date on which the awarded contract begins.
     *  0..1
     *  Tender Result
     *  Start Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * BBIE
     *  Tender Result. Received_ Electronic Tender Quantity. Quantity
     *  The number of electronic tenders received.
     *  0..1
     *  Tender Result
     *  Received
     *  Electronic Tender Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ReceivedElectronicTenderQuantity $receivedElectronicTenderQuantity
     */
    private $receivedElectronicTenderQuantity = null;

    /**
     * BBIE
     *  Tender Result. Received_ Foreign Tender Quantity. Quantity
     *  The number of foreing tenders received.
     *  0..1
     *  Tender Result
     *  Received
     *  Foreign Tender Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ReceivedForeignTenderQuantity $receivedForeignTenderQuantity
     */
    private $receivedForeignTenderQuantity = null;

    /**
     * ASBIE
     *  Tender Result. Contract
     *  A contract governing this tender result.
     *  0..1
     *  Tender Result
     *  Contract
     *  Contract
     *  Contract
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Contract $contract
     */
    private $contract = null;

    /**
     * ASBIE
     *  Tender Result. Awarded_ Tendered Project. Tendered Project
     *  The awarded tendered project associated with this tender result.
     *  0..1
     *  Tender Result
     *  Awarded
     *  Tendered Project
     *  Tendered Project
     *  Tendered Project
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\AwardedTenderedProject $awardedTenderedProject
     */
    private $awardedTenderedProject = null;

    /**
     * ASBIE
     *  Tender Result. Contract Formalization_ Period. Period
     *  The period during which a contract associated with the awarded project is to be formalized.
     *  0..1
     *  Tender Result
     *  Contract Formalization
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ContractFormalizationPeriod $contractFormalizationPeriod
     */
    private $contractFormalizationPeriod = null;

    /**
     * ASBIE
     *  Tender Result. Subcontract Terms
     *  Subcontract terms for this tender result.
     *  0..n
     *  Tender Result
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\SubcontractTerms[] $subcontractTerms
     */
    private $subcontractTerms = [
        
    ];

    /**
     * ASBIE
     *  Tender Result. Winning Party
     *  A party that is identified as the awarded by a tender result.
     *  0..n
     *  Tender Result
     *  Winning Party
     *  Winning Party
     *  Winning Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\WinningParty[] $winningParty
     */
    private $winningParty = [
        
    ];

    /**
     * Gets as tenderResultCode
     *
     * BBIE
     *  Tender Result. Tender_ Result Code. Code
     *  A code signifying the result of the tendering process.
     *  0..1
     *  Tender Result
     *  Tender
     *  Result Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TenderResultCode
     */
    public function getTenderResultCode()
    {
        return $this->tenderResultCode;
    }

    /**
     * Sets a new tenderResultCode
     *
     * BBIE
     *  Tender Result. Tender_ Result Code. Code
     *  A code signifying the result of the tendering process.
     *  0..1
     *  Tender Result
     *  Tender
     *  Result Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TenderResultCode $tenderResultCode
     * @return self
     */
    public function setTenderResultCode(\Greenter\Ubl\Entity\CommonBasic\TenderResultCode $tenderResultCode)
    {
        $this->tenderResultCode = $tenderResultCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Tender Result. Description. Text
     *  Text describing the result of the tendering process.
     *  0..n
     *  Tender Result
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
     *  Tender Result. Description. Text
     *  Text describing the result of the tendering process.
     *  0..n
     *  Tender Result
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
     *  Tender Result. Description. Text
     *  Text describing the result of the tendering process.
     *  0..n
     *  Tender Result
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
     *  Tender Result. Description. Text
     *  Text describing the result of the tendering process.
     *  0..n
     *  Tender Result
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
     *  Tender Result. Description. Text
     *  Text describing the result of the tendering process.
     *  0..n
     *  Tender Result
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
     * Gets as advertisementAmount
     *
     * BBIE
     *  Tender Result. Advertisement. Amount
     *  The monetary value of the advertisement for this tendering process. 
     *  0..1
     *  Tender Result
     *  Advertisement
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\AdvertisementAmount
     */
    public function getAdvertisementAmount()
    {
        return $this->advertisementAmount;
    }

    /**
     * Sets a new advertisementAmount
     *
     * BBIE
     *  Tender Result. Advertisement. Amount
     *  The monetary value of the advertisement for this tendering process. 
     *  0..1
     *  Tender Result
     *  Advertisement
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\AdvertisementAmount $advertisementAmount
     * @return self
     */
    public function setAdvertisementAmount(\Greenter\Ubl\Entity\CommonBasic\AdvertisementAmount $advertisementAmount)
    {
        $this->advertisementAmount = $advertisementAmount;
        return $this;
    }

    /**
     * Gets as awardDate
     *
     * BBIE
     *  Tender Result. Award Date. Date
     *  The date on which this result was formalized.
     *  1
     *  Tender Result
     *  Award Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getAwardDate()
    {
        return $this->awardDate;
    }

    /**
     * Sets a new awardDate
     *
     * BBIE
     *  Tender Result. Award Date. Date
     *  The date on which this result was formalized.
     *  1
     *  Tender Result
     *  Award Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $awardDate
     * @return self
     */
    public function setAwardDate(\DateTime $awardDate)
    {
        $this->awardDate = $awardDate;
        return $this;
    }

    /**
     * Gets as awardTime
     *
     * BBIE
     *  Tender Result. Award Time. Time
     *  The time at which this result was formalized.
     *  0..1
     *  Tender Result
     *  Award Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getAwardTime()
    {
        return $this->awardTime;
    }

    /**
     * Sets a new awardTime
     *
     * BBIE
     *  Tender Result. Award Time. Time
     *  The time at which this result was formalized.
     *  0..1
     *  Tender Result
     *  Award Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $awardTime
     * @return self
     */
    public function setAwardTime(\DateTime $awardTime)
    {
        $this->awardTime = $awardTime;
        return $this;
    }

    /**
     * Gets as receivedTenderQuantity
     *
     * BBIE
     *  Tender Result. Received_ Tender. Quantity
     *  The total number of tenders received in this tendering process.
     *  0..1
     *  Tender Result
     *  Received
     *  Tender
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ReceivedTenderQuantity
     */
    public function getReceivedTenderQuantity()
    {
        return $this->receivedTenderQuantity;
    }

    /**
     * Sets a new receivedTenderQuantity
     *
     * BBIE
     *  Tender Result. Received_ Tender. Quantity
     *  The total number of tenders received in this tendering process.
     *  0..1
     *  Tender Result
     *  Received
     *  Tender
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ReceivedTenderQuantity $receivedTenderQuantity
     * @return self
     */
    public function setReceivedTenderQuantity(\Greenter\Ubl\Entity\CommonBasic\ReceivedTenderQuantity $receivedTenderQuantity)
    {
        $this->receivedTenderQuantity = $receivedTenderQuantity;
        return $this;
    }

    /**
     * Gets as lowerTenderAmount
     *
     * BBIE
     *  Tender Result. Lower_ Tender. Amount
     *  The least expensive tender received in the tendering process.
     *  0..1
     *  Tender Result
     *  Lower
     *  Tender
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\LowerTenderAmount
     */
    public function getLowerTenderAmount()
    {
        return $this->lowerTenderAmount;
    }

    /**
     * Sets a new lowerTenderAmount
     *
     * BBIE
     *  Tender Result. Lower_ Tender. Amount
     *  The least expensive tender received in the tendering process.
     *  0..1
     *  Tender Result
     *  Lower
     *  Tender
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\LowerTenderAmount $lowerTenderAmount
     * @return self
     */
    public function setLowerTenderAmount(\Greenter\Ubl\Entity\CommonBasic\LowerTenderAmount $lowerTenderAmount)
    {
        $this->lowerTenderAmount = $lowerTenderAmount;
        return $this;
    }

    /**
     * Gets as higherTenderAmount
     *
     * BBIE
     *  Tender Result. Higher_ Tender. Amount
     *  The most expensive tender received in this tendering process.
     *  0..1
     *  Tender Result
     *  Higher
     *  Tender
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\HigherTenderAmount
     */
    public function getHigherTenderAmount()
    {
        return $this->higherTenderAmount;
    }

    /**
     * Sets a new higherTenderAmount
     *
     * BBIE
     *  Tender Result. Higher_ Tender. Amount
     *  The most expensive tender received in this tendering process.
     *  0..1
     *  Tender Result
     *  Higher
     *  Tender
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\HigherTenderAmount $higherTenderAmount
     * @return self
     */
    public function setHigherTenderAmount(\Greenter\Ubl\Entity\CommonBasic\HigherTenderAmount $higherTenderAmount)
    {
        $this->higherTenderAmount = $higherTenderAmount;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * BBIE
     *  Tender Result. Start Date. Date
     *  The date on which the awarded contract begins.
     *  0..1
     *  Tender Result
     *  Start Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * BBIE
     *  Tender Result. Start Date. Date
     *  The date on which the awarded contract begins.
     *  0..1
     *  Tender Result
     *  Start Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as receivedElectronicTenderQuantity
     *
     * BBIE
     *  Tender Result. Received_ Electronic Tender Quantity. Quantity
     *  The number of electronic tenders received.
     *  0..1
     *  Tender Result
     *  Received
     *  Electronic Tender Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ReceivedElectronicTenderQuantity
     */
    public function getReceivedElectronicTenderQuantity()
    {
        return $this->receivedElectronicTenderQuantity;
    }

    /**
     * Sets a new receivedElectronicTenderQuantity
     *
     * BBIE
     *  Tender Result. Received_ Electronic Tender Quantity. Quantity
     *  The number of electronic tenders received.
     *  0..1
     *  Tender Result
     *  Received
     *  Electronic Tender Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ReceivedElectronicTenderQuantity $receivedElectronicTenderQuantity
     * @return self
     */
    public function setReceivedElectronicTenderQuantity(\Greenter\Ubl\Entity\CommonBasic\ReceivedElectronicTenderQuantity $receivedElectronicTenderQuantity)
    {
        $this->receivedElectronicTenderQuantity = $receivedElectronicTenderQuantity;
        return $this;
    }

    /**
     * Gets as receivedForeignTenderQuantity
     *
     * BBIE
     *  Tender Result. Received_ Foreign Tender Quantity. Quantity
     *  The number of foreing tenders received.
     *  0..1
     *  Tender Result
     *  Received
     *  Foreign Tender Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ReceivedForeignTenderQuantity
     */
    public function getReceivedForeignTenderQuantity()
    {
        return $this->receivedForeignTenderQuantity;
    }

    /**
     * Sets a new receivedForeignTenderQuantity
     *
     * BBIE
     *  Tender Result. Received_ Foreign Tender Quantity. Quantity
     *  The number of foreing tenders received.
     *  0..1
     *  Tender Result
     *  Received
     *  Foreign Tender Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ReceivedForeignTenderQuantity $receivedForeignTenderQuantity
     * @return self
     */
    public function setReceivedForeignTenderQuantity(\Greenter\Ubl\Entity\CommonBasic\ReceivedForeignTenderQuantity $receivedForeignTenderQuantity)
    {
        $this->receivedForeignTenderQuantity = $receivedForeignTenderQuantity;
        return $this;
    }

    /**
     * Gets as contract
     *
     * ASBIE
     *  Tender Result. Contract
     *  A contract governing this tender result.
     *  0..1
     *  Tender Result
     *  Contract
     *  Contract
     *  Contract
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Contract
     */
    public function getContract()
    {
        return $this->contract;
    }

    /**
     * Sets a new contract
     *
     * ASBIE
     *  Tender Result. Contract
     *  A contract governing this tender result.
     *  0..1
     *  Tender Result
     *  Contract
     *  Contract
     *  Contract
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Contract $contract
     * @return self
     */
    public function setContract(\Greenter\Ubl\Entity\CommonAggregateComponents\Contract $contract)
    {
        $this->contract = $contract;
        return $this;
    }

    /**
     * Gets as awardedTenderedProject
     *
     * ASBIE
     *  Tender Result. Awarded_ Tendered Project. Tendered Project
     *  The awarded tendered project associated with this tender result.
     *  0..1
     *  Tender Result
     *  Awarded
     *  Tendered Project
     *  Tendered Project
     *  Tendered Project
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\AwardedTenderedProject
     */
    public function getAwardedTenderedProject()
    {
        return $this->awardedTenderedProject;
    }

    /**
     * Sets a new awardedTenderedProject
     *
     * ASBIE
     *  Tender Result. Awarded_ Tendered Project. Tendered Project
     *  The awarded tendered project associated with this tender result.
     *  0..1
     *  Tender Result
     *  Awarded
     *  Tendered Project
     *  Tendered Project
     *  Tendered Project
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AwardedTenderedProject $awardedTenderedProject
     * @return self
     */
    public function setAwardedTenderedProject(\Greenter\Ubl\Entity\CommonAggregateComponents\AwardedTenderedProject $awardedTenderedProject)
    {
        $this->awardedTenderedProject = $awardedTenderedProject;
        return $this;
    }

    /**
     * Gets as contractFormalizationPeriod
     *
     * ASBIE
     *  Tender Result. Contract Formalization_ Period. Period
     *  The period during which a contract associated with the awarded project is to be formalized.
     *  0..1
     *  Tender Result
     *  Contract Formalization
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ContractFormalizationPeriod
     */
    public function getContractFormalizationPeriod()
    {
        return $this->contractFormalizationPeriod;
    }

    /**
     * Sets a new contractFormalizationPeriod
     *
     * ASBIE
     *  Tender Result. Contract Formalization_ Period. Period
     *  The period during which a contract associated with the awarded project is to be formalized.
     *  0..1
     *  Tender Result
     *  Contract Formalization
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ContractFormalizationPeriod $contractFormalizationPeriod
     * @return self
     */
    public function setContractFormalizationPeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\ContractFormalizationPeriod $contractFormalizationPeriod)
    {
        $this->contractFormalizationPeriod = $contractFormalizationPeriod;
        return $this;
    }

    /**
     * Adds as subcontractTerms
     *
     * ASBIE
     *  Tender Result. Subcontract Terms
     *  Subcontract terms for this tender result.
     *  0..n
     *  Tender Result
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SubcontractTerms $subcontractTerms
     */
    public function addToSubcontractTerms(\Greenter\Ubl\Entity\CommonAggregateComponents\SubcontractTerms $subcontractTerms)
    {
        $this->subcontractTerms[] = $subcontractTerms;
        return $this;
    }

    /**
     * isset subcontractTerms
     *
     * ASBIE
     *  Tender Result. Subcontract Terms
     *  Subcontract terms for this tender result.
     *  0..n
     *  Tender Result
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubcontractTerms($index)
    {
        return isset($this->subcontractTerms[$index]);
    }

    /**
     * unset subcontractTerms
     *
     * ASBIE
     *  Tender Result. Subcontract Terms
     *  Subcontract terms for this tender result.
     *  0..n
     *  Tender Result
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubcontractTerms($index)
    {
        unset($this->subcontractTerms[$index]);
    }

    /**
     * Gets as subcontractTerms
     *
     * ASBIE
     *  Tender Result. Subcontract Terms
     *  Subcontract terms for this tender result.
     *  0..n
     *  Tender Result
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\SubcontractTerms[]
     */
    public function getSubcontractTerms()
    {
        return $this->subcontractTerms;
    }

    /**
     * Sets a new subcontractTerms
     *
     * ASBIE
     *  Tender Result. Subcontract Terms
     *  Subcontract terms for this tender result.
     *  0..n
     *  Tender Result
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SubcontractTerms[] $subcontractTerms
     * @return self
     */
    public function setSubcontractTerms(array $subcontractTerms)
    {
        $this->subcontractTerms = $subcontractTerms;
        return $this;
    }

    /**
     * Adds as winningParty
     *
     * ASBIE
     *  Tender Result. Winning Party
     *  A party that is identified as the awarded by a tender result.
     *  0..n
     *  Tender Result
     *  Winning Party
     *  Winning Party
     *  Winning Party
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\WinningParty $winningParty
     */
    public function addToWinningParty(\Greenter\Ubl\Entity\CommonAggregateComponents\WinningParty $winningParty)
    {
        $this->winningParty[] = $winningParty;
        return $this;
    }

    /**
     * isset winningParty
     *
     * ASBIE
     *  Tender Result. Winning Party
     *  A party that is identified as the awarded by a tender result.
     *  0..n
     *  Tender Result
     *  Winning Party
     *  Winning Party
     *  Winning Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWinningParty($index)
    {
        return isset($this->winningParty[$index]);
    }

    /**
     * unset winningParty
     *
     * ASBIE
     *  Tender Result. Winning Party
     *  A party that is identified as the awarded by a tender result.
     *  0..n
     *  Tender Result
     *  Winning Party
     *  Winning Party
     *  Winning Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWinningParty($index)
    {
        unset($this->winningParty[$index]);
    }

    /**
     * Gets as winningParty
     *
     * ASBIE
     *  Tender Result. Winning Party
     *  A party that is identified as the awarded by a tender result.
     *  0..n
     *  Tender Result
     *  Winning Party
     *  Winning Party
     *  Winning Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\WinningParty[]
     */
    public function getWinningParty()
    {
        return $this->winningParty;
    }

    /**
     * Sets a new winningParty
     *
     * ASBIE
     *  Tender Result. Winning Party
     *  A party that is identified as the awarded by a tender result.
     *  0..n
     *  Tender Result
     *  Winning Party
     *  Winning Party
     *  Winning Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\WinningParty[] $winningParty
     * @return self
     */
    public function setWinningParty(array $winningParty)
    {
        $this->winningParty = $winningParty;
        return $this;
    }


}

