<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing TransportEquipmentSealType
 *
 * ABIE
 *  Transport Equipment Seal. Details
 *  A class to describe a device (a transport equipment seal) for securing the doors of a shipping container.
 *  Transport Equipment Seal
 *  Container Seal
 * XSD Type: TransportEquipmentSealType
 */
class TransportEquipmentSealType
{

    /**
     * BBIE
     *  Transport Equipment Seal. Identifier
     *  An identifier for this transport equipment seal.
     *  1
     *  Transport Equipment Seal
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  ACS1234
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Transport Equipment Seal. Seal Issuer Type Code. Code
     *  A code signifying the type of party that issues and is responsible for this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Issuer Type Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SealIssuerTypeCode $sealIssuerTypeCode
     */
    private $sealIssuerTypeCode = null;

    /**
     * BBIE
     *  Transport Equipment Seal. Condition. Text
     *  The condition of this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Condition
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Condition $condition
     */
    private $condition = null;

    /**
     * BBIE
     *  Transport Equipment Seal. Seal Status Code. Code
     *  A code signifying the condition of this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Status Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SealStatusCode $sealStatusCode
     */
    private $sealStatusCode = null;

    /**
     * BBIE
     *  Transport Equipment Seal. Sealing Party Type. Text
     *  The role of the sealing party.
     *  0..1
     *  Transport Equipment Seal
     *  Sealing Party Type
     *  Text
     *  Text. Type
     *  Sealing Party
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SealingPartyType $sealingPartyType
     */
    private $sealingPartyType = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Transport Equipment Seal. Identifier
     *  An identifier for this transport equipment seal.
     *  1
     *  Transport Equipment Seal
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  ACS1234
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
     *  Transport Equipment Seal. Identifier
     *  An identifier for this transport equipment seal.
     *  1
     *  Transport Equipment Seal
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  ACS1234
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
     * Gets as sealIssuerTypeCode
     *
     * BBIE
     *  Transport Equipment Seal. Seal Issuer Type Code. Code
     *  A code signifying the type of party that issues and is responsible for this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Issuer Type Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SealIssuerTypeCode
     */
    public function getSealIssuerTypeCode()
    {
        return $this->sealIssuerTypeCode;
    }

    /**
     * Sets a new sealIssuerTypeCode
     *
     * BBIE
     *  Transport Equipment Seal. Seal Issuer Type Code. Code
     *  A code signifying the type of party that issues and is responsible for this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Issuer Type Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SealIssuerTypeCode $sealIssuerTypeCode
     * @return self
     */
    public function setSealIssuerTypeCode(\Greenter\Ubl\Entity\CommonBasic\SealIssuerTypeCode $sealIssuerTypeCode)
    {
        $this->sealIssuerTypeCode = $sealIssuerTypeCode;
        return $this;
    }

    /**
     * Gets as condition
     *
     * BBIE
     *  Transport Equipment Seal. Condition. Text
     *  The condition of this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Condition
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Condition
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * BBIE
     *  Transport Equipment Seal. Condition. Text
     *  The condition of this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Condition
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Condition $condition
     * @return self
     */
    public function setCondition(\Greenter\Ubl\Entity\CommonBasic\Condition $condition)
    {
        $this->condition = $condition;
        return $this;
    }

    /**
     * Gets as sealStatusCode
     *
     * BBIE
     *  Transport Equipment Seal. Seal Status Code. Code
     *  A code signifying the condition of this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Status Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SealStatusCode
     */
    public function getSealStatusCode()
    {
        return $this->sealStatusCode;
    }

    /**
     * Sets a new sealStatusCode
     *
     * BBIE
     *  Transport Equipment Seal. Seal Status Code. Code
     *  A code signifying the condition of this transport equipment seal.
     *  0..1
     *  Transport Equipment Seal
     *  Seal Status Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SealStatusCode $sealStatusCode
     * @return self
     */
    public function setSealStatusCode(\Greenter\Ubl\Entity\CommonBasic\SealStatusCode $sealStatusCode)
    {
        $this->sealStatusCode = $sealStatusCode;
        return $this;
    }

    /**
     * Gets as sealingPartyType
     *
     * BBIE
     *  Transport Equipment Seal. Sealing Party Type. Text
     *  The role of the sealing party.
     *  0..1
     *  Transport Equipment Seal
     *  Sealing Party Type
     *  Text
     *  Text. Type
     *  Sealing Party
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SealingPartyType
     */
    public function getSealingPartyType()
    {
        return $this->sealingPartyType;
    }

    /**
     * Sets a new sealingPartyType
     *
     * BBIE
     *  Transport Equipment Seal. Sealing Party Type. Text
     *  The role of the sealing party.
     *  0..1
     *  Transport Equipment Seal
     *  Sealing Party Type
     *  Text
     *  Text. Type
     *  Sealing Party
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SealingPartyType $sealingPartyType
     * @return self
     */
    public function setSealingPartyType(\Greenter\Ubl\Entity\CommonBasic\SealingPartyType $sealingPartyType)
    {
        $this->sealingPartyType = $sealingPartyType;
        return $this;
    }


}

