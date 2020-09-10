<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing BranchType
 *
 * ABIE
 *  Branch. Details
 *  A class to describe a branch or a division of an organization.
 *  Branch
 * XSD Type: BranchType
 */
class BranchType
{

    /**
     * BBIE
     *  Branch. Identifier
     *  An identifier for this branch or division of an organization.
     *  0..1
     *  Branch
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Branch. Name
     *  The name of this branch or division of an organization.
     *  0..1
     *  Branch
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Name $name
     */
    private $name = null;

    /**
     * ASBIE
     *  Branch. Financial Institution
     *  The financial institution that this branch belongs to (if applicable).
     *  0..1
     *  Branch
     *  Financial Institution
     *  Financial Institution
     *  Financial Institution
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\FinancialInstitution $financialInstitution
     */
    private $financialInstitution = null;

    /**
     * ASBIE
     *  Branch. Address
     *  The address of this branch or division.
     *  0..1
     *  Branch
     *  Address
     *  Address
     *  Address
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Address $address
     */
    private $address = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Branch. Identifier
     *  An identifier for this branch or division of an organization.
     *  0..1
     *  Branch
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
     *  Branch. Identifier
     *  An identifier for this branch or division of an organization.
     *  0..1
     *  Branch
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
     * Gets as name
     *
     * BBIE
     *  Branch. Name
     *  The name of this branch or division of an organization.
     *  0..1
     *  Branch
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Branch. Name
     *  The name of this branch or division of an organization.
     *  0..1
     *  Branch
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Name $name
     * @return self
     */
    public function setName(\Greenter\Ubl\Entity\CommonBasic\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as financialInstitution
     *
     * ASBIE
     *  Branch. Financial Institution
     *  The financial institution that this branch belongs to (if applicable).
     *  0..1
     *  Branch
     *  Financial Institution
     *  Financial Institution
     *  Financial Institution
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\FinancialInstitution
     */
    public function getFinancialInstitution()
    {
        return $this->financialInstitution;
    }

    /**
     * Sets a new financialInstitution
     *
     * ASBIE
     *  Branch. Financial Institution
     *  The financial institution that this branch belongs to (if applicable).
     *  0..1
     *  Branch
     *  Financial Institution
     *  Financial Institution
     *  Financial Institution
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\FinancialInstitution $financialInstitution
     * @return self
     */
    public function setFinancialInstitution(\Greenter\Ubl\Entity\CommonAggregateComponents\FinancialInstitution $financialInstitution)
    {
        $this->financialInstitution = $financialInstitution;
        return $this;
    }

    /**
     * Gets as address
     *
     * ASBIE
     *  Branch. Address
     *  The address of this branch or division.
     *  0..1
     *  Branch
     *  Address
     *  Address
     *  Address
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * ASBIE
     *  Branch. Address
     *  The address of this branch or division.
     *  0..1
     *  Branch
     *  Address
     *  Address
     *  Address
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Address $address
     * @return self
     */
    public function setAddress(\Greenter\Ubl\Entity\CommonAggregateComponents\Address $address)
    {
        $this->address = $address;
        return $this;
    }


}

