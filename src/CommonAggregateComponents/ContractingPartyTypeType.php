<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ContractingPartyTypeType
 *
 * ABIE
 *  Contracting Party Type. Details
 *  The type of contracting party that is independent of its role.
 *  Contracting Party Type
 * XSD Type: ContractingPartyTypeType
 */
class ContractingPartyTypeType
{

    /**
     * BBIE
     *  Contracting Party Type. Party Type Code. Code
     *  A code specifying the type of party that is independent of its role.
     *  0..1
     *  Contracting Party Type
     *  Party Type Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PartyTypeCode $partyTypeCode
     */
    private $partyTypeCode = null;

    /**
     * BBIE
     *  Contracting Party Type. Party Type. Text
     *  The type of party that is independent of its role, expressed as text.
     *  0..1
     *  Contracting Party Type
     *  Party Type
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PartyType $partyType
     */
    private $partyType = null;

    /**
     * Gets as partyTypeCode
     *
     * BBIE
     *  Contracting Party Type. Party Type Code. Code
     *  A code specifying the type of party that is independent of its role.
     *  0..1
     *  Contracting Party Type
     *  Party Type Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PartyTypeCode
     */
    public function getPartyTypeCode()
    {
        return $this->partyTypeCode;
    }

    /**
     * Sets a new partyTypeCode
     *
     * BBIE
     *  Contracting Party Type. Party Type Code. Code
     *  A code specifying the type of party that is independent of its role.
     *  0..1
     *  Contracting Party Type
     *  Party Type Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PartyTypeCode $partyTypeCode
     * @return self
     */
    public function setPartyTypeCode(\Greenter\Ubl\Entity\CommonBasic\PartyTypeCode $partyTypeCode)
    {
        $this->partyTypeCode = $partyTypeCode;
        return $this;
    }

    /**
     * Gets as partyType
     *
     * BBIE
     *  Contracting Party Type. Party Type. Text
     *  The type of party that is independent of its role, expressed as text.
     *  0..1
     *  Contracting Party Type
     *  Party Type
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PartyType
     */
    public function getPartyType()
    {
        return $this->partyType;
    }

    /**
     * Sets a new partyType
     *
     * BBIE
     *  Contracting Party Type. Party Type. Text
     *  The type of party that is independent of its role, expressed as text.
     *  0..1
     *  Contracting Party Type
     *  Party Type
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PartyType $partyType
     * @return self
     */
    public function setPartyType(\Greenter\Ubl\Entity\CommonBasic\PartyType $partyType)
    {
        $this->partyType = $partyType;
        return $this;
    }


}

