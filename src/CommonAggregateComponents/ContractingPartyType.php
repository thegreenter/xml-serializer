<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ContractingPartyType
 *
 * ABIE
 *  Contracting Party. Details
 *  A class to describe an individual, a group, or a body having a procurement role in a tendering process.
 *  Contracting Party
 * XSD Type: ContractingPartyType
 */
class ContractingPartyType
{

    /**
     * BBIE
     *  Contracting Party. Buyer Profile_ URI. Identifier
     *  The buyer profile is typically located on a web site where the contracting party publishes its procurement opportunities
     *  0..1
     *  Contracting Party
     *  Buyer Profile
     *  URI
     *  Identifier
     *  Identifier. Type
     *  Buyer Profile
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\BuyerProfileURI $buyerProfileURI
     */
    private $buyerProfileURI = null;

    /**
     * ASBIE
     *  Contracting Party. Contracting Party Type
     *  The type of contracting party that is independent of its role.
     *  0..n
     *  Contracting Party
     *  Contracting Party Type
     *  Contracting Party Type
     *  Contracting Party Type
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ContractingPartyType[] $contractingPartyType
     */
    private $contractingPartyType = [
        
    ];

    /**
     * ASBIE
     *  Contracting Party. Contracting Activity
     *  The nature of the type of business of the organization
     *  0..n
     *  Contracting Party
     *  Contracting Activity
     *  Contracting Activity
     *  Contracting Activity
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ContractingActivity[] $contractingActivity
     */
    private $contractingActivity = [
        
    ];

    /**
     * ASBIE
     *  Contracting Party. Party
     *  The contracting party itself.
     *  1
     *  Contracting Party
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Party $party
     */
    private $party = null;

    /**
     * Gets as buyerProfileURI
     *
     * BBIE
     *  Contracting Party. Buyer Profile_ URI. Identifier
     *  The buyer profile is typically located on a web site where the contracting party publishes its procurement opportunities
     *  0..1
     *  Contracting Party
     *  Buyer Profile
     *  URI
     *  Identifier
     *  Identifier. Type
     *  Buyer Profile
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\BuyerProfileURI
     */
    public function getBuyerProfileURI()
    {
        return $this->buyerProfileURI;
    }

    /**
     * Sets a new buyerProfileURI
     *
     * BBIE
     *  Contracting Party. Buyer Profile_ URI. Identifier
     *  The buyer profile is typically located on a web site where the contracting party publishes its procurement opportunities
     *  0..1
     *  Contracting Party
     *  Buyer Profile
     *  URI
     *  Identifier
     *  Identifier. Type
     *  Buyer Profile
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\BuyerProfileURI $buyerProfileURI
     * @return self
     */
    public function setBuyerProfileURI(\Greenter\Ubl\Entity\CommonBasic\BuyerProfileURI $buyerProfileURI)
    {
        $this->buyerProfileURI = $buyerProfileURI;
        return $this;
    }

    /**
     * Adds as contractingPartyType
     *
     * ASBIE
     *  Contracting Party. Contracting Party Type
     *  The type of contracting party that is independent of its role.
     *  0..n
     *  Contracting Party
     *  Contracting Party Type
     *  Contracting Party Type
     *  Contracting Party Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ContractingPartyType $contractingPartyType
     */
    public function addToContractingPartyType(\Greenter\Ubl\Entity\CommonAggregateComponents\ContractingPartyType $contractingPartyType)
    {
        $this->contractingPartyType[] = $contractingPartyType;
        return $this;
    }

    /**
     * isset contractingPartyType
     *
     * ASBIE
     *  Contracting Party. Contracting Party Type
     *  The type of contracting party that is independent of its role.
     *  0..n
     *  Contracting Party
     *  Contracting Party Type
     *  Contracting Party Type
     *  Contracting Party Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractingPartyType($index)
    {
        return isset($this->contractingPartyType[$index]);
    }

    /**
     * unset contractingPartyType
     *
     * ASBIE
     *  Contracting Party. Contracting Party Type
     *  The type of contracting party that is independent of its role.
     *  0..n
     *  Contracting Party
     *  Contracting Party Type
     *  Contracting Party Type
     *  Contracting Party Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractingPartyType($index)
    {
        unset($this->contractingPartyType[$index]);
    }

    /**
     * Gets as contractingPartyType
     *
     * ASBIE
     *  Contracting Party. Contracting Party Type
     *  The type of contracting party that is independent of its role.
     *  0..n
     *  Contracting Party
     *  Contracting Party Type
     *  Contracting Party Type
     *  Contracting Party Type
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ContractingPartyType[]
     */
    public function getContractingPartyType()
    {
        return $this->contractingPartyType;
    }

    /**
     * Sets a new contractingPartyType
     *
     * ASBIE
     *  Contracting Party. Contracting Party Type
     *  The type of contracting party that is independent of its role.
     *  0..n
     *  Contracting Party
     *  Contracting Party Type
     *  Contracting Party Type
     *  Contracting Party Type
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ContractingPartyType[] $contractingPartyType
     * @return self
     */
    public function setContractingPartyType(array $contractingPartyType)
    {
        $this->contractingPartyType = $contractingPartyType;
        return $this;
    }

    /**
     * Adds as contractingActivity
     *
     * ASBIE
     *  Contracting Party. Contracting Activity
     *  The nature of the type of business of the organization
     *  0..n
     *  Contracting Party
     *  Contracting Activity
     *  Contracting Activity
     *  Contracting Activity
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ContractingActivity $contractingActivity
     */
    public function addToContractingActivity(\Greenter\Ubl\Entity\CommonAggregateComponents\ContractingActivity $contractingActivity)
    {
        $this->contractingActivity[] = $contractingActivity;
        return $this;
    }

    /**
     * isset contractingActivity
     *
     * ASBIE
     *  Contracting Party. Contracting Activity
     *  The nature of the type of business of the organization
     *  0..n
     *  Contracting Party
     *  Contracting Activity
     *  Contracting Activity
     *  Contracting Activity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractingActivity($index)
    {
        return isset($this->contractingActivity[$index]);
    }

    /**
     * unset contractingActivity
     *
     * ASBIE
     *  Contracting Party. Contracting Activity
     *  The nature of the type of business of the organization
     *  0..n
     *  Contracting Party
     *  Contracting Activity
     *  Contracting Activity
     *  Contracting Activity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractingActivity($index)
    {
        unset($this->contractingActivity[$index]);
    }

    /**
     * Gets as contractingActivity
     *
     * ASBIE
     *  Contracting Party. Contracting Activity
     *  The nature of the type of business of the organization
     *  0..n
     *  Contracting Party
     *  Contracting Activity
     *  Contracting Activity
     *  Contracting Activity
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ContractingActivity[]
     */
    public function getContractingActivity()
    {
        return $this->contractingActivity;
    }

    /**
     * Sets a new contractingActivity
     *
     * ASBIE
     *  Contracting Party. Contracting Activity
     *  The nature of the type of business of the organization
     *  0..n
     *  Contracting Party
     *  Contracting Activity
     *  Contracting Activity
     *  Contracting Activity
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ContractingActivity[] $contractingActivity
     * @return self
     */
    public function setContractingActivity(array $contractingActivity)
    {
        $this->contractingActivity = $contractingActivity;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Contracting Party. Party
     *  The contracting party itself.
     *  1
     *  Contracting Party
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Contracting Party. Party
     *  The contracting party itself.
     *  1
     *  Contracting Party
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Party $party
     * @return self
     */
    public function setParty(\Greenter\Ubl\Entity\CommonAggregateComponents\Party $party)
    {
        $this->party = $party;
        return $this;
    }


}

