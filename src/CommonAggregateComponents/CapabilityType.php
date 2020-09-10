<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing CapabilityType
 *
 * ABIE
 *  Capability. Details
 *  A class to describe a specific capability of an organization.
 *  Capability
 * XSD Type: CapabilityType
 */
class CapabilityType
{

    /**
     * BBIE
     *  Capability. Capability Type Code. Code
     *  This class can be used as Financial or Technical capabilities. For instance, "Turnover" or "Qualified Engineers" are two possible codes.
     *  0..1
     *  Capability
     *  Capability Type Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\CapabilityTypeCode $capabilityTypeCode
     */
    private $capabilityTypeCode = null;

    /**
     * BBIE
     *  Capability. Description. Text
     *  Text describing this capability.
     *  0..n
     *  Capability
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
     *  Capability. Value. Amount
     *  A monetary amount as a measure of this capability.
     *  0..1
     *  Capability
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ValueAmount $valueAmount
     */
    private $valueAmount = null;

    /**
     * BBIE
     *  Capability. Value_ Quantity. Quantity
     *  A quantity as a measure of this capability.
     *  0..1
     *  Capability
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ValueQuantity $valueQuantity
     */
    private $valueQuantity = null;

    /**
     * ASBIE
     *  Capability. Evidence Supplied
     *  The evidence that supports the capability claim.
     *  0..n
     *  Capability
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\EvidenceSupplied[] $evidenceSupplied
     */
    private $evidenceSupplied = [
        
    ];

    /**
     * ASBIE
     *  Capability. Validity_ Period. Period
     *  The period of time for which this capability is (or has been) valid.
     *  0..1
     *  Capability
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ValidityPeriod $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * Gets as capabilityTypeCode
     *
     * BBIE
     *  Capability. Capability Type Code. Code
     *  This class can be used as Financial or Technical capabilities. For instance, "Turnover" or "Qualified Engineers" are two possible codes.
     *  0..1
     *  Capability
     *  Capability Type Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\CapabilityTypeCode
     */
    public function getCapabilityTypeCode()
    {
        return $this->capabilityTypeCode;
    }

    /**
     * Sets a new capabilityTypeCode
     *
     * BBIE
     *  Capability. Capability Type Code. Code
     *  This class can be used as Financial or Technical capabilities. For instance, "Turnover" or "Qualified Engineers" are two possible codes.
     *  0..1
     *  Capability
     *  Capability Type Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\CapabilityTypeCode $capabilityTypeCode
     * @return self
     */
    public function setCapabilityTypeCode(\Greenter\Ubl\Entity\CommonBasic\CapabilityTypeCode $capabilityTypeCode)
    {
        $this->capabilityTypeCode = $capabilityTypeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Capability. Description. Text
     *  Text describing this capability.
     *  0..n
     *  Capability
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
     *  Capability. Description. Text
     *  Text describing this capability.
     *  0..n
     *  Capability
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
     *  Capability. Description. Text
     *  Text describing this capability.
     *  0..n
     *  Capability
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
     *  Capability. Description. Text
     *  Text describing this capability.
     *  0..n
     *  Capability
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
     *  Capability. Description. Text
     *  Text describing this capability.
     *  0..n
     *  Capability
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
     * Gets as valueAmount
     *
     * BBIE
     *  Capability. Value. Amount
     *  A monetary amount as a measure of this capability.
     *  0..1
     *  Capability
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ValueAmount
     */
    public function getValueAmount()
    {
        return $this->valueAmount;
    }

    /**
     * Sets a new valueAmount
     *
     * BBIE
     *  Capability. Value. Amount
     *  A monetary amount as a measure of this capability.
     *  0..1
     *  Capability
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ValueAmount $valueAmount
     * @return self
     */
    public function setValueAmount(\Greenter\Ubl\Entity\CommonBasic\ValueAmount $valueAmount)
    {
        $this->valueAmount = $valueAmount;
        return $this;
    }

    /**
     * Gets as valueQuantity
     *
     * BBIE
     *  Capability. Value_ Quantity. Quantity
     *  A quantity as a measure of this capability.
     *  0..1
     *  Capability
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ValueQuantity
     */
    public function getValueQuantity()
    {
        return $this->valueQuantity;
    }

    /**
     * Sets a new valueQuantity
     *
     * BBIE
     *  Capability. Value_ Quantity. Quantity
     *  A quantity as a measure of this capability.
     *  0..1
     *  Capability
     *  Value
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ValueQuantity $valueQuantity
     * @return self
     */
    public function setValueQuantity(\Greenter\Ubl\Entity\CommonBasic\ValueQuantity $valueQuantity)
    {
        $this->valueQuantity = $valueQuantity;
        return $this;
    }

    /**
     * Adds as evidenceSupplied
     *
     * ASBIE
     *  Capability. Evidence Supplied
     *  The evidence that supports the capability claim.
     *  0..n
     *  Capability
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\EvidenceSupplied $evidenceSupplied
     */
    public function addToEvidenceSupplied(\Greenter\Ubl\Entity\CommonAggregateComponents\EvidenceSupplied $evidenceSupplied)
    {
        $this->evidenceSupplied[] = $evidenceSupplied;
        return $this;
    }

    /**
     * isset evidenceSupplied
     *
     * ASBIE
     *  Capability. Evidence Supplied
     *  The evidence that supports the capability claim.
     *  0..n
     *  Capability
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvidenceSupplied($index)
    {
        return isset($this->evidenceSupplied[$index]);
    }

    /**
     * unset evidenceSupplied
     *
     * ASBIE
     *  Capability. Evidence Supplied
     *  The evidence that supports the capability claim.
     *  0..n
     *  Capability
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvidenceSupplied($index)
    {
        unset($this->evidenceSupplied[$index]);
    }

    /**
     * Gets as evidenceSupplied
     *
     * ASBIE
     *  Capability. Evidence Supplied
     *  The evidence that supports the capability claim.
     *  0..n
     *  Capability
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\EvidenceSupplied[]
     */
    public function getEvidenceSupplied()
    {
        return $this->evidenceSupplied;
    }

    /**
     * Sets a new evidenceSupplied
     *
     * ASBIE
     *  Capability. Evidence Supplied
     *  The evidence that supports the capability claim.
     *  0..n
     *  Capability
     *  Evidence Supplied
     *  Evidence Supplied
     *  Evidence Supplied
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\EvidenceSupplied[] $evidenceSupplied
     * @return self
     */
    public function setEvidenceSupplied(array $evidenceSupplied)
    {
        $this->evidenceSupplied = $evidenceSupplied;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Capability. Validity_ Period. Period
     *  The period of time for which this capability is (or has been) valid.
     *  0..1
     *  Capability
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ValidityPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Capability. Validity_ Period. Period
     *  The period of time for which this capability is (or has been) valid.
     *  0..1
     *  Capability
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }


}

