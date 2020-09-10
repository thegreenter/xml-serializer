<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing TendererRequirementType
 *
 * ABIE
 *  Tenderer Requirement. Details
 *  A class to describe an action or statement required of an economic operator participating in a tendering process.
 *  Tenderer Requirement
 * XSD Type: TendererRequirementType
 */
class TendererRequirementType
{

    /**
     * BBIE
     *  Tenderer Requirement. Name
     *  A name of this tenderer requirement.
     *  0..n
     *  Tenderer Requirement
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
     *  Tenderer Requirement. Tenderer Requirement_ Type Code. Code
     *  A code signifying this requirement.
     *  0..1
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TendererRequirementTypeCode $tendererRequirementTypeCode
     */
    private $tendererRequirementTypeCode = null;

    /**
     * BBIE
     *  Tenderer Requirement. Description. Text
     *  Text describing this requirement.
     *  0..n
     *  Tenderer Requirement
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
     *  Tenderer Requirement. Legal Reference. Text
     *  The legal reference of the exclusion criterion.
     *  0..1
     *  Tenderer Requirement
     *  Legal Reference
     *  Text
     *  Text. Type
     *  Art. 45 2 b
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\LegalReference $legalReference
     */
    private $legalReference = null;

    /**
     * ASBIE
     *  Tenderer Requirement. Suggested_ Evidence. Evidence
     *  An item of evidence that should be submitted to satisfy this requirement.
     *  0..n
     *  Tenderer Requirement
     *  Suggested
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\SuggestedEvidence[] $suggestedEvidence
     */
    private $suggestedEvidence = [
        
    ];

    /**
     * Adds as name
     *
     * BBIE
     *  Tenderer Requirement. Name
     *  A name of this tenderer requirement.
     *  0..n
     *  Tenderer Requirement
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
     *  Tenderer Requirement. Name
     *  A name of this tenderer requirement.
     *  0..n
     *  Tenderer Requirement
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
     *  Tenderer Requirement. Name
     *  A name of this tenderer requirement.
     *  0..n
     *  Tenderer Requirement
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
     *  Tenderer Requirement. Name
     *  A name of this tenderer requirement.
     *  0..n
     *  Tenderer Requirement
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
     *  Tenderer Requirement. Name
     *  A name of this tenderer requirement.
     *  0..n
     *  Tenderer Requirement
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
     * Gets as tendererRequirementTypeCode
     *
     * BBIE
     *  Tenderer Requirement. Tenderer Requirement_ Type Code. Code
     *  A code signifying this requirement.
     *  0..1
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TendererRequirementTypeCode
     */
    public function getTendererRequirementTypeCode()
    {
        return $this->tendererRequirementTypeCode;
    }

    /**
     * Sets a new tendererRequirementTypeCode
     *
     * BBIE
     *  Tenderer Requirement. Tenderer Requirement_ Type Code. Code
     *  A code signifying this requirement.
     *  0..1
     *  Tenderer Requirement
     *  Tenderer Requirement
     *  Type Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TendererRequirementTypeCode $tendererRequirementTypeCode
     * @return self
     */
    public function setTendererRequirementTypeCode(\Greenter\Ubl\Entity\CommonBasic\TendererRequirementTypeCode $tendererRequirementTypeCode)
    {
        $this->tendererRequirementTypeCode = $tendererRequirementTypeCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Tenderer Requirement. Description. Text
     *  Text describing this requirement.
     *  0..n
     *  Tenderer Requirement
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
     *  Tenderer Requirement. Description. Text
     *  Text describing this requirement.
     *  0..n
     *  Tenderer Requirement
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
     *  Tenderer Requirement. Description. Text
     *  Text describing this requirement.
     *  0..n
     *  Tenderer Requirement
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
     *  Tenderer Requirement. Description. Text
     *  Text describing this requirement.
     *  0..n
     *  Tenderer Requirement
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
     *  Tenderer Requirement. Description. Text
     *  Text describing this requirement.
     *  0..n
     *  Tenderer Requirement
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
     * Gets as legalReference
     *
     * BBIE
     *  Tenderer Requirement. Legal Reference. Text
     *  The legal reference of the exclusion criterion.
     *  0..1
     *  Tenderer Requirement
     *  Legal Reference
     *  Text
     *  Text. Type
     *  Art. 45 2 b
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\LegalReference
     */
    public function getLegalReference()
    {
        return $this->legalReference;
    }

    /**
     * Sets a new legalReference
     *
     * BBIE
     *  Tenderer Requirement. Legal Reference. Text
     *  The legal reference of the exclusion criterion.
     *  0..1
     *  Tenderer Requirement
     *  Legal Reference
     *  Text
     *  Text. Type
     *  Art. 45 2 b
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\LegalReference $legalReference
     * @return self
     */
    public function setLegalReference(\Greenter\Ubl\Entity\CommonBasic\LegalReference $legalReference)
    {
        $this->legalReference = $legalReference;
        return $this;
    }

    /**
     * Adds as suggestedEvidence
     *
     * ASBIE
     *  Tenderer Requirement. Suggested_ Evidence. Evidence
     *  An item of evidence that should be submitted to satisfy this requirement.
     *  0..n
     *  Tenderer Requirement
     *  Suggested
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SuggestedEvidence $suggestedEvidence
     */
    public function addToSuggestedEvidence(\Greenter\Ubl\Entity\CommonAggregateComponents\SuggestedEvidence $suggestedEvidence)
    {
        $this->suggestedEvidence[] = $suggestedEvidence;
        return $this;
    }

    /**
     * isset suggestedEvidence
     *
     * ASBIE
     *  Tenderer Requirement. Suggested_ Evidence. Evidence
     *  An item of evidence that should be submitted to satisfy this requirement.
     *  0..n
     *  Tenderer Requirement
     *  Suggested
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSuggestedEvidence($index)
    {
        return isset($this->suggestedEvidence[$index]);
    }

    /**
     * unset suggestedEvidence
     *
     * ASBIE
     *  Tenderer Requirement. Suggested_ Evidence. Evidence
     *  An item of evidence that should be submitted to satisfy this requirement.
     *  0..n
     *  Tenderer Requirement
     *  Suggested
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSuggestedEvidence($index)
    {
        unset($this->suggestedEvidence[$index]);
    }

    /**
     * Gets as suggestedEvidence
     *
     * ASBIE
     *  Tenderer Requirement. Suggested_ Evidence. Evidence
     *  An item of evidence that should be submitted to satisfy this requirement.
     *  0..n
     *  Tenderer Requirement
     *  Suggested
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\SuggestedEvidence[]
     */
    public function getSuggestedEvidence()
    {
        return $this->suggestedEvidence;
    }

    /**
     * Sets a new suggestedEvidence
     *
     * ASBIE
     *  Tenderer Requirement. Suggested_ Evidence. Evidence
     *  An item of evidence that should be submitted to satisfy this requirement.
     *  0..n
     *  Tenderer Requirement
     *  Suggested
     *  Evidence
     *  Evidence
     *  Evidence
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SuggestedEvidence[] $suggestedEvidence
     * @return self
     */
    public function setSuggestedEvidence(array $suggestedEvidence)
    {
        $this->suggestedEvidence = $suggestedEvidence;
        return $this;
    }


}

