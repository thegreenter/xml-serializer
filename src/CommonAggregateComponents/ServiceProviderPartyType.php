<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ServiceProviderPartyType
 *
 * ABIE
 *  Service Provider Party. Details
 *  A class to describe a party contracting to provide services, such as transportation, finance, etc.
 *  Service Provider Party
 * XSD Type: ServiceProviderPartyType
 */
class ServiceProviderPartyType
{

    /**
     * BBIE
     *  Service Provider Party. Identifier
     *  An identifier for this service provider.
     *  0..1
     *  Service Provider Party
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Service Provider Party. Service Type Code. Code
     *  The type of service provided, expressed as a code.
     *  0..1
     *  Service Provider Party
     *  Service Type Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ServiceTypeCode $serviceTypeCode
     */
    private $serviceTypeCode = null;

    /**
     * BBIE
     *  Service Provider Party. Service Type. Text
     *  The type of service provided, expressed as text.
     *  0..n
     *  Service Provider Party
     *  Service Type
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ServiceType[] $serviceType
     */
    private $serviceType = [
        
    ];

    /**
     * ASBIE
     *  Service Provider Party. Party
     *  The party providing the service.
     *  1
     *  Service Provider Party
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Party $party
     */
    private $party = null;

    /**
     * ASBIE
     *  Service Provider Party. Seller_ Contact. Contact
     *  The contact for the service provider.
     *  0..1
     *  Service Provider Party
     *  Seller
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\SellerContact $sellerContact
     */
    private $sellerContact = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Service Provider Party. Identifier
     *  An identifier for this service provider.
     *  0..1
     *  Service Provider Party
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
     *  Service Provider Party. Identifier
     *  An identifier for this service provider.
     *  0..1
     *  Service Provider Party
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
     * Gets as serviceTypeCode
     *
     * BBIE
     *  Service Provider Party. Service Type Code. Code
     *  The type of service provided, expressed as a code.
     *  0..1
     *  Service Provider Party
     *  Service Type Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ServiceTypeCode
     */
    public function getServiceTypeCode()
    {
        return $this->serviceTypeCode;
    }

    /**
     * Sets a new serviceTypeCode
     *
     * BBIE
     *  Service Provider Party. Service Type Code. Code
     *  The type of service provided, expressed as a code.
     *  0..1
     *  Service Provider Party
     *  Service Type Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ServiceTypeCode $serviceTypeCode
     * @return self
     */
    public function setServiceTypeCode(\Greenter\Ubl\Entity\CommonBasic\ServiceTypeCode $serviceTypeCode)
    {
        $this->serviceTypeCode = $serviceTypeCode;
        return $this;
    }

    /**
     * Adds as serviceType
     *
     * BBIE
     *  Service Provider Party. Service Type. Text
     *  The type of service provided, expressed as text.
     *  0..n
     *  Service Provider Party
     *  Service Type
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\ServiceType $serviceType
     */
    public function addToServiceType(\Greenter\Ubl\Entity\CommonBasic\ServiceType $serviceType)
    {
        $this->serviceType[] = $serviceType;
        return $this;
    }

    /**
     * isset serviceType
     *
     * BBIE
     *  Service Provider Party. Service Type. Text
     *  The type of service provided, expressed as text.
     *  0..n
     *  Service Provider Party
     *  Service Type
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceType($index)
    {
        return isset($this->serviceType[$index]);
    }

    /**
     * unset serviceType
     *
     * BBIE
     *  Service Provider Party. Service Type. Text
     *  The type of service provided, expressed as text.
     *  0..n
     *  Service Provider Party
     *  Service Type
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceType($index)
    {
        unset($this->serviceType[$index]);
    }

    /**
     * Gets as serviceType
     *
     * BBIE
     *  Service Provider Party. Service Type. Text
     *  The type of service provided, expressed as text.
     *  0..n
     *  Service Provider Party
     *  Service Type
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ServiceType[]
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * Sets a new serviceType
     *
     * BBIE
     *  Service Provider Party. Service Type. Text
     *  The type of service provided, expressed as text.
     *  0..n
     *  Service Provider Party
     *  Service Type
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ServiceType[] $serviceType
     * @return self
     */
    public function setServiceType(array $serviceType)
    {
        $this->serviceType = $serviceType;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Service Provider Party. Party
     *  The party providing the service.
     *  1
     *  Service Provider Party
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
     *  Service Provider Party. Party
     *  The party providing the service.
     *  1
     *  Service Provider Party
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

    /**
     * Gets as sellerContact
     *
     * ASBIE
     *  Service Provider Party. Seller_ Contact. Contact
     *  The contact for the service provider.
     *  0..1
     *  Service Provider Party
     *  Seller
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\SellerContact
     */
    public function getSellerContact()
    {
        return $this->sellerContact;
    }

    /**
     * Sets a new sellerContact
     *
     * ASBIE
     *  Service Provider Party. Seller_ Contact. Contact
     *  The contact for the service provider.
     *  0..1
     *  Service Provider Party
     *  Seller
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SellerContact $sellerContact
     * @return self
     */
    public function setSellerContact(\Greenter\Ubl\Entity\CommonAggregateComponents\SellerContact $sellerContact)
    {
        $this->sellerContact = $sellerContact;
        return $this;
    }


}

