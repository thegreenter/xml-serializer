<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing PartyType
 *
 * ABIE
 *  Party. Details
 *  A class to describe an organization, sub-organization, or individual fulfilling a role in a business process.
 *  Party
 * XSD Type: PartyType
 */
class PartyType
{

    /**
     * BBIE
     *  Party. Mark Care_ Indicator. Indicator
     *  An indicator that this party is "care of" (c/o) (true) or not (false).
     *  0..1
     *  Party
     *  Mark Care
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $markCareIndicator
     */
    private $markCareIndicator = null;

    /**
     * BBIE
     *  Party. Mark Attention_ Indicator. Indicator
     *  An indicator that this party is "for the attention of" (FAO) (true) or not (false).
     *  0..1
     *  Party
     *  Mark Attention
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $markAttentionIndicator
     */
    private $markAttentionIndicator = null;

    /**
     * BBIE
     *  Party. Website_ URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies this party's web site; i.e., the web site's Uniform Resource Locator (URL).
     *  0..1
     *  Party
     *  Website
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\WebsiteURI $websiteURI
     */
    private $websiteURI = null;

    /**
     * BBIE
     *  Party. Logo Reference. Identifier
     *  An identifier for this party's logo.
     *  0..1
     *  Party
     *  Logo Reference
     *  Identifier
     *  Identifier. Type
     *  http://www2.coca-cola.com/images/logo.gif
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\LogoReferenceID $logoReferenceID
     */
    private $logoReferenceID = null;

    /**
     * BBIE
     *  Party. Endpoint Identifier. Identifier
     *  An identifier for the end point of the routing service (e.g., EAN Location Number, GLN).
     *  0..1
     *  Party
     *  Endpoint Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\EndpointID $endpointID
     */
    private $endpointID = null;

    /**
     * BBIE
     *  Party. Industry Classification Code. Code
     *  This party's Industry Classification Code.
     *  0..1
     *  Party
     *  Industry Classification Code
     *  Code
     *  Code. Type
     *  Public authority , NAIC codes
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\IndustryClassificationCode $industryClassificationCode
     */
    private $industryClassificationCode = null;

    /**
     * ASBIE
     *  Party. Party Identification
     *  An identifier for this party.
     *  0..n
     *  Party
     *  Party Identification
     *  Party Identification
     *  Party Identification
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PartyIdentification[] $partyIdentification
     */
    private $partyIdentification = [
        
    ];

    /**
     * ASBIE
     *  Party. Party Name
     *  A name for this party.
     *  0..n
     *  Party
     *  Party Name
     *  Party Name
     *  Party Name
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PartyName[] $partyName
     */
    private $partyName = [
        
    ];

    /**
     * ASBIE
     *  Party. Language
     *  The language associated with this party.
     *  0..1
     *  Party
     *  Language
     *  Language
     *  Language
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Language $language
     */
    private $language = null;

    /**
     * ASBIE
     *  Party. Postal_ Address. Address
     *  The party's postal address.
     *  0..1
     *  Party
     *  Postal
     *  Address
     *  Address
     *  Address
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PostalAddress $postalAddress
     */
    private $postalAddress = null;

    /**
     * ASBIE
     *  Party. Physical_ Location. Location
     *  The physical location of this party.
     *  0..1
     *  Party
     *  Physical
     *  Location
     *  Location
     *  Location
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PhysicalLocation $physicalLocation
     */
    private $physicalLocation = null;

    /**
     * ASBIE
     *  Party. Party Tax Scheme
     *  A tax scheme applying to this party.
     *  0..n
     *  Party
     *  Party Tax Scheme
     *  Party Tax Scheme
     *  Party Tax Scheme
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PartyTaxScheme[] $partyTaxScheme
     */
    private $partyTaxScheme = [
        
    ];

    /**
     * ASBIE
     *  Party. Party Legal Entity
     *  A description of this party as a legal entity.
     *  0..n
     *  Party
     *  Party Legal Entity
     *  Party Legal Entity
     *  Party Legal Entity
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PartyLegalEntity[] $partyLegalEntity
     */
    private $partyLegalEntity = [
        
    ];

    /**
     * ASBIE
     *  Party. Contact
     *  The primary contact for this party.
     *  0..1
     *  Party
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Contact $contact
     */
    private $contact = null;

    /**
     * ASBIE
     *  Party. Person
     *  A person associated with this party.
     *  0..n
     *  Party
     *  Person
     *  Person
     *  Person
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Person[] $person
     */
    private $person = [
        
    ];

    /**
     * ASBIE
     *  Party. Agent_ Party. Party
     *  A party who acts as an agent for this party.
     *  0..1
     *  Party
     *  Agent
     *  Party
     *  Party
     *  Party
     *  Customs Broker
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\AgentParty $agentParty
     */
    private $agentParty = null;

    /**
     * ASBIE
     *  Party. Service Provider Party
     *  A party providing a service to this party.
     *  0..n
     *  Party
     *  Service Provider Party
     *  Service Provider Party
     *  Service Provider Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ServiceProviderParty[] $serviceProviderParty
     */
    private $serviceProviderParty = [
        
    ];

    /**
     * ASBIE
     *  Party. Power Of Attorney
     *  A power of attorney associated with this party.
     *  0..n
     *  Party
     *  Power Of Attorney
     *  Power Of Attorney
     *  Power Of Attorney
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PowerOfAttorney[] $powerOfAttorney
     */
    private $powerOfAttorney = [
        
    ];

    /**
     * ASBIE
     *  Party. Financial Account
     *  The financial account associated with this party.
     *  0..1
     *  Party
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\FinancialAccount $financialAccount
     */
    private $financialAccount = null;

    /**
     * Gets as markCareIndicator
     *
     * BBIE
     *  Party. Mark Care_ Indicator. Indicator
     *  An indicator that this party is "care of" (c/o) (true) or not (false).
     *  0..1
     *  Party
     *  Mark Care
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getMarkCareIndicator()
    {
        return $this->markCareIndicator;
    }

    /**
     * Sets a new markCareIndicator
     *
     * BBIE
     *  Party. Mark Care_ Indicator. Indicator
     *  An indicator that this party is "care of" (c/o) (true) or not (false).
     *  0..1
     *  Party
     *  Mark Care
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $markCareIndicator
     * @return self
     */
    public function setMarkCareIndicator($markCareIndicator)
    {
        $this->markCareIndicator = $markCareIndicator;
        return $this;
    }

    /**
     * Gets as markAttentionIndicator
     *
     * BBIE
     *  Party. Mark Attention_ Indicator. Indicator
     *  An indicator that this party is "for the attention of" (FAO) (true) or not (false).
     *  0..1
     *  Party
     *  Mark Attention
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getMarkAttentionIndicator()
    {
        return $this->markAttentionIndicator;
    }

    /**
     * Sets a new markAttentionIndicator
     *
     * BBIE
     *  Party. Mark Attention_ Indicator. Indicator
     *  An indicator that this party is "for the attention of" (FAO) (true) or not (false).
     *  0..1
     *  Party
     *  Mark Attention
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $markAttentionIndicator
     * @return self
     */
    public function setMarkAttentionIndicator($markAttentionIndicator)
    {
        $this->markAttentionIndicator = $markAttentionIndicator;
        return $this;
    }

    /**
     * Gets as websiteURI
     *
     * BBIE
     *  Party. Website_ URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies this party's web site; i.e., the web site's Uniform Resource Locator (URL).
     *  0..1
     *  Party
     *  Website
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\WebsiteURI
     */
    public function getWebsiteURI()
    {
        return $this->websiteURI;
    }

    /**
     * Sets a new websiteURI
     *
     * BBIE
     *  Party. Website_ URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies this party's web site; i.e., the web site's Uniform Resource Locator (URL).
     *  0..1
     *  Party
     *  Website
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\WebsiteURI $websiteURI
     * @return self
     */
    public function setWebsiteURI(\Greenter\Ubl\Entity\CommonBasic\WebsiteURI $websiteURI)
    {
        $this->websiteURI = $websiteURI;
        return $this;
    }

    /**
     * Gets as logoReferenceID
     *
     * BBIE
     *  Party. Logo Reference. Identifier
     *  An identifier for this party's logo.
     *  0..1
     *  Party
     *  Logo Reference
     *  Identifier
     *  Identifier. Type
     *  http://www2.coca-cola.com/images/logo.gif
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\LogoReferenceID
     */
    public function getLogoReferenceID()
    {
        return $this->logoReferenceID;
    }

    /**
     * Sets a new logoReferenceID
     *
     * BBIE
     *  Party. Logo Reference. Identifier
     *  An identifier for this party's logo.
     *  0..1
     *  Party
     *  Logo Reference
     *  Identifier
     *  Identifier. Type
     *  http://www2.coca-cola.com/images/logo.gif
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\LogoReferenceID $logoReferenceID
     * @return self
     */
    public function setLogoReferenceID(\Greenter\Ubl\Entity\CommonBasic\LogoReferenceID $logoReferenceID)
    {
        $this->logoReferenceID = $logoReferenceID;
        return $this;
    }

    /**
     * Gets as endpointID
     *
     * BBIE
     *  Party. Endpoint Identifier. Identifier
     *  An identifier for the end point of the routing service (e.g., EAN Location Number, GLN).
     *  0..1
     *  Party
     *  Endpoint Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\EndpointID
     */
    public function getEndpointID()
    {
        return $this->endpointID;
    }

    /**
     * Sets a new endpointID
     *
     * BBIE
     *  Party. Endpoint Identifier. Identifier
     *  An identifier for the end point of the routing service (e.g., EAN Location Number, GLN).
     *  0..1
     *  Party
     *  Endpoint Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\EndpointID $endpointID
     * @return self
     */
    public function setEndpointID(\Greenter\Ubl\Entity\CommonBasic\EndpointID $endpointID)
    {
        $this->endpointID = $endpointID;
        return $this;
    }

    /**
     * Gets as industryClassificationCode
     *
     * BBIE
     *  Party. Industry Classification Code. Code
     *  This party's Industry Classification Code.
     *  0..1
     *  Party
     *  Industry Classification Code
     *  Code
     *  Code. Type
     *  Public authority , NAIC codes
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\IndustryClassificationCode
     */
    public function getIndustryClassificationCode()
    {
        return $this->industryClassificationCode;
    }

    /**
     * Sets a new industryClassificationCode
     *
     * BBIE
     *  Party. Industry Classification Code. Code
     *  This party's Industry Classification Code.
     *  0..1
     *  Party
     *  Industry Classification Code
     *  Code
     *  Code. Type
     *  Public authority , NAIC codes
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\IndustryClassificationCode $industryClassificationCode
     * @return self
     */
    public function setIndustryClassificationCode(\Greenter\Ubl\Entity\CommonBasic\IndustryClassificationCode $industryClassificationCode)
    {
        $this->industryClassificationCode = $industryClassificationCode;
        return $this;
    }

    /**
     * Adds as partyIdentification
     *
     * ASBIE
     *  Party. Party Identification
     *  An identifier for this party.
     *  0..n
     *  Party
     *  Party Identification
     *  Party Identification
     *  Party Identification
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PartyIdentification $partyIdentification
     */
    public function addToPartyIdentification(\Greenter\Ubl\Entity\CommonAggregateComponents\PartyIdentification $partyIdentification)
    {
        $this->partyIdentification[] = $partyIdentification;
        return $this;
    }

    /**
     * isset partyIdentification
     *
     * ASBIE
     *  Party. Party Identification
     *  An identifier for this party.
     *  0..n
     *  Party
     *  Party Identification
     *  Party Identification
     *  Party Identification
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyIdentification($index)
    {
        return isset($this->partyIdentification[$index]);
    }

    /**
     * unset partyIdentification
     *
     * ASBIE
     *  Party. Party Identification
     *  An identifier for this party.
     *  0..n
     *  Party
     *  Party Identification
     *  Party Identification
     *  Party Identification
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyIdentification($index)
    {
        unset($this->partyIdentification[$index]);
    }

    /**
     * Gets as partyIdentification
     *
     * ASBIE
     *  Party. Party Identification
     *  An identifier for this party.
     *  0..n
     *  Party
     *  Party Identification
     *  Party Identification
     *  Party Identification
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PartyIdentification[]
     */
    public function getPartyIdentification()
    {
        return $this->partyIdentification;
    }

    /**
     * Sets a new partyIdentification
     *
     * ASBIE
     *  Party. Party Identification
     *  An identifier for this party.
     *  0..n
     *  Party
     *  Party Identification
     *  Party Identification
     *  Party Identification
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PartyIdentification[] $partyIdentification
     * @return self
     */
    public function setPartyIdentification(array $partyIdentification)
    {
        $this->partyIdentification = $partyIdentification;
        return $this;
    }

    /**
     * Adds as partyName
     *
     * ASBIE
     *  Party. Party Name
     *  A name for this party.
     *  0..n
     *  Party
     *  Party Name
     *  Party Name
     *  Party Name
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PartyName $partyName
     */
    public function addToPartyName(\Greenter\Ubl\Entity\CommonAggregateComponents\PartyName $partyName)
    {
        $this->partyName[] = $partyName;
        return $this;
    }

    /**
     * isset partyName
     *
     * ASBIE
     *  Party. Party Name
     *  A name for this party.
     *  0..n
     *  Party
     *  Party Name
     *  Party Name
     *  Party Name
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyName($index)
    {
        return isset($this->partyName[$index]);
    }

    /**
     * unset partyName
     *
     * ASBIE
     *  Party. Party Name
     *  A name for this party.
     *  0..n
     *  Party
     *  Party Name
     *  Party Name
     *  Party Name
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyName($index)
    {
        unset($this->partyName[$index]);
    }

    /**
     * Gets as partyName
     *
     * ASBIE
     *  Party. Party Name
     *  A name for this party.
     *  0..n
     *  Party
     *  Party Name
     *  Party Name
     *  Party Name
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PartyName[]
     */
    public function getPartyName()
    {
        return $this->partyName;
    }

    /**
     * Sets a new partyName
     *
     * ASBIE
     *  Party. Party Name
     *  A name for this party.
     *  0..n
     *  Party
     *  Party Name
     *  Party Name
     *  Party Name
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PartyName[] $partyName
     * @return self
     */
    public function setPartyName(array $partyName)
    {
        $this->partyName = $partyName;
        return $this;
    }

    /**
     * Gets as language
     *
     * ASBIE
     *  Party. Language
     *  The language associated with this party.
     *  0..1
     *  Party
     *  Language
     *  Language
     *  Language
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * ASBIE
     *  Party. Language
     *  The language associated with this party.
     *  0..1
     *  Party
     *  Language
     *  Language
     *  Language
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Language $language
     * @return self
     */
    public function setLanguage(\Greenter\Ubl\Entity\CommonAggregateComponents\Language $language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as postalAddress
     *
     * ASBIE
     *  Party. Postal_ Address. Address
     *  The party's postal address.
     *  0..1
     *  Party
     *  Postal
     *  Address
     *  Address
     *  Address
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PostalAddress
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * Sets a new postalAddress
     *
     * ASBIE
     *  Party. Postal_ Address. Address
     *  The party's postal address.
     *  0..1
     *  Party
     *  Postal
     *  Address
     *  Address
     *  Address
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PostalAddress $postalAddress
     * @return self
     */
    public function setPostalAddress(\Greenter\Ubl\Entity\CommonAggregateComponents\PostalAddress $postalAddress)
    {
        $this->postalAddress = $postalAddress;
        return $this;
    }

    /**
     * Gets as physicalLocation
     *
     * ASBIE
     *  Party. Physical_ Location. Location
     *  The physical location of this party.
     *  0..1
     *  Party
     *  Physical
     *  Location
     *  Location
     *  Location
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PhysicalLocation
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation;
    }

    /**
     * Sets a new physicalLocation
     *
     * ASBIE
     *  Party. Physical_ Location. Location
     *  The physical location of this party.
     *  0..1
     *  Party
     *  Physical
     *  Location
     *  Location
     *  Location
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PhysicalLocation $physicalLocation
     * @return self
     */
    public function setPhysicalLocation(\Greenter\Ubl\Entity\CommonAggregateComponents\PhysicalLocation $physicalLocation)
    {
        $this->physicalLocation = $physicalLocation;
        return $this;
    }

    /**
     * Adds as partyTaxScheme
     *
     * ASBIE
     *  Party. Party Tax Scheme
     *  A tax scheme applying to this party.
     *  0..n
     *  Party
     *  Party Tax Scheme
     *  Party Tax Scheme
     *  Party Tax Scheme
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PartyTaxScheme $partyTaxScheme
     */
    public function addToPartyTaxScheme(\Greenter\Ubl\Entity\CommonAggregateComponents\PartyTaxScheme $partyTaxScheme)
    {
        $this->partyTaxScheme[] = $partyTaxScheme;
        return $this;
    }

    /**
     * isset partyTaxScheme
     *
     * ASBIE
     *  Party. Party Tax Scheme
     *  A tax scheme applying to this party.
     *  0..n
     *  Party
     *  Party Tax Scheme
     *  Party Tax Scheme
     *  Party Tax Scheme
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyTaxScheme($index)
    {
        return isset($this->partyTaxScheme[$index]);
    }

    /**
     * unset partyTaxScheme
     *
     * ASBIE
     *  Party. Party Tax Scheme
     *  A tax scheme applying to this party.
     *  0..n
     *  Party
     *  Party Tax Scheme
     *  Party Tax Scheme
     *  Party Tax Scheme
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyTaxScheme($index)
    {
        unset($this->partyTaxScheme[$index]);
    }

    /**
     * Gets as partyTaxScheme
     *
     * ASBIE
     *  Party. Party Tax Scheme
     *  A tax scheme applying to this party.
     *  0..n
     *  Party
     *  Party Tax Scheme
     *  Party Tax Scheme
     *  Party Tax Scheme
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PartyTaxScheme[]
     */
    public function getPartyTaxScheme()
    {
        return $this->partyTaxScheme;
    }

    /**
     * Sets a new partyTaxScheme
     *
     * ASBIE
     *  Party. Party Tax Scheme
     *  A tax scheme applying to this party.
     *  0..n
     *  Party
     *  Party Tax Scheme
     *  Party Tax Scheme
     *  Party Tax Scheme
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PartyTaxScheme[] $partyTaxScheme
     * @return self
     */
    public function setPartyTaxScheme(array $partyTaxScheme)
    {
        $this->partyTaxScheme = $partyTaxScheme;
        return $this;
    }

    /**
     * Adds as partyLegalEntity
     *
     * ASBIE
     *  Party. Party Legal Entity
     *  A description of this party as a legal entity.
     *  0..n
     *  Party
     *  Party Legal Entity
     *  Party Legal Entity
     *  Party Legal Entity
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PartyLegalEntity $partyLegalEntity
     */
    public function addToPartyLegalEntity(\Greenter\Ubl\Entity\CommonAggregateComponents\PartyLegalEntity $partyLegalEntity)
    {
        $this->partyLegalEntity[] = $partyLegalEntity;
        return $this;
    }

    /**
     * isset partyLegalEntity
     *
     * ASBIE
     *  Party. Party Legal Entity
     *  A description of this party as a legal entity.
     *  0..n
     *  Party
     *  Party Legal Entity
     *  Party Legal Entity
     *  Party Legal Entity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartyLegalEntity($index)
    {
        return isset($this->partyLegalEntity[$index]);
    }

    /**
     * unset partyLegalEntity
     *
     * ASBIE
     *  Party. Party Legal Entity
     *  A description of this party as a legal entity.
     *  0..n
     *  Party
     *  Party Legal Entity
     *  Party Legal Entity
     *  Party Legal Entity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartyLegalEntity($index)
    {
        unset($this->partyLegalEntity[$index]);
    }

    /**
     * Gets as partyLegalEntity
     *
     * ASBIE
     *  Party. Party Legal Entity
     *  A description of this party as a legal entity.
     *  0..n
     *  Party
     *  Party Legal Entity
     *  Party Legal Entity
     *  Party Legal Entity
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PartyLegalEntity[]
     */
    public function getPartyLegalEntity()
    {
        return $this->partyLegalEntity;
    }

    /**
     * Sets a new partyLegalEntity
     *
     * ASBIE
     *  Party. Party Legal Entity
     *  A description of this party as a legal entity.
     *  0..n
     *  Party
     *  Party Legal Entity
     *  Party Legal Entity
     *  Party Legal Entity
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PartyLegalEntity[] $partyLegalEntity
     * @return self
     */
    public function setPartyLegalEntity(array $partyLegalEntity)
    {
        $this->partyLegalEntity = $partyLegalEntity;
        return $this;
    }

    /**
     * Gets as contact
     *
     * ASBIE
     *  Party. Contact
     *  The primary contact for this party.
     *  0..1
     *  Party
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * ASBIE
     *  Party. Contact
     *  The primary contact for this party.
     *  0..1
     *  Party
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Contact $contact
     * @return self
     */
    public function setContact(\Greenter\Ubl\Entity\CommonAggregateComponents\Contact $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Adds as person
     *
     * ASBIE
     *  Party. Person
     *  A person associated with this party.
     *  0..n
     *  Party
     *  Person
     *  Person
     *  Person
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Person $person
     */
    public function addToPerson(\Greenter\Ubl\Entity\CommonAggregateComponents\Person $person)
    {
        $this->person[] = $person;
        return $this;
    }

    /**
     * isset person
     *
     * ASBIE
     *  Party. Person
     *  A person associated with this party.
     *  0..n
     *  Party
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPerson($index)
    {
        return isset($this->person[$index]);
    }

    /**
     * unset person
     *
     * ASBIE
     *  Party. Person
     *  A person associated with this party.
     *  0..n
     *  Party
     *  Person
     *  Person
     *  Person
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPerson($index)
    {
        unset($this->person[$index]);
    }

    /**
     * Gets as person
     *
     * ASBIE
     *  Party. Person
     *  A person associated with this party.
     *  0..n
     *  Party
     *  Person
     *  Person
     *  Person
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Person[]
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * ASBIE
     *  Party. Person
     *  A person associated with this party.
     *  0..n
     *  Party
     *  Person
     *  Person
     *  Person
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Person[] $person
     * @return self
     */
    public function setPerson(array $person)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Gets as agentParty
     *
     * ASBIE
     *  Party. Agent_ Party. Party
     *  A party who acts as an agent for this party.
     *  0..1
     *  Party
     *  Agent
     *  Party
     *  Party
     *  Party
     *  Customs Broker
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\AgentParty
     */
    public function getAgentParty()
    {
        return $this->agentParty;
    }

    /**
     * Sets a new agentParty
     *
     * ASBIE
     *  Party. Agent_ Party. Party
     *  A party who acts as an agent for this party.
     *  0..1
     *  Party
     *  Agent
     *  Party
     *  Party
     *  Party
     *  Customs Broker
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AgentParty $agentParty
     * @return self
     */
    public function setAgentParty(\Greenter\Ubl\Entity\CommonAggregateComponents\AgentParty $agentParty)
    {
        $this->agentParty = $agentParty;
        return $this;
    }

    /**
     * Adds as serviceProviderParty
     *
     * ASBIE
     *  Party. Service Provider Party
     *  A party providing a service to this party.
     *  0..n
     *  Party
     *  Service Provider Party
     *  Service Provider Party
     *  Service Provider Party
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ServiceProviderParty $serviceProviderParty
     */
    public function addToServiceProviderParty(\Greenter\Ubl\Entity\CommonAggregateComponents\ServiceProviderParty $serviceProviderParty)
    {
        $this->serviceProviderParty[] = $serviceProviderParty;
        return $this;
    }

    /**
     * isset serviceProviderParty
     *
     * ASBIE
     *  Party. Service Provider Party
     *  A party providing a service to this party.
     *  0..n
     *  Party
     *  Service Provider Party
     *  Service Provider Party
     *  Service Provider Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceProviderParty($index)
    {
        return isset($this->serviceProviderParty[$index]);
    }

    /**
     * unset serviceProviderParty
     *
     * ASBIE
     *  Party. Service Provider Party
     *  A party providing a service to this party.
     *  0..n
     *  Party
     *  Service Provider Party
     *  Service Provider Party
     *  Service Provider Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceProviderParty($index)
    {
        unset($this->serviceProviderParty[$index]);
    }

    /**
     * Gets as serviceProviderParty
     *
     * ASBIE
     *  Party. Service Provider Party
     *  A party providing a service to this party.
     *  0..n
     *  Party
     *  Service Provider Party
     *  Service Provider Party
     *  Service Provider Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ServiceProviderParty[]
     */
    public function getServiceProviderParty()
    {
        return $this->serviceProviderParty;
    }

    /**
     * Sets a new serviceProviderParty
     *
     * ASBIE
     *  Party. Service Provider Party
     *  A party providing a service to this party.
     *  0..n
     *  Party
     *  Service Provider Party
     *  Service Provider Party
     *  Service Provider Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ServiceProviderParty[] $serviceProviderParty
     * @return self
     */
    public function setServiceProviderParty(array $serviceProviderParty)
    {
        $this->serviceProviderParty = $serviceProviderParty;
        return $this;
    }

    /**
     * Adds as powerOfAttorney
     *
     * ASBIE
     *  Party. Power Of Attorney
     *  A power of attorney associated with this party.
     *  0..n
     *  Party
     *  Power Of Attorney
     *  Power Of Attorney
     *  Power Of Attorney
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PowerOfAttorney $powerOfAttorney
     */
    public function addToPowerOfAttorney(\Greenter\Ubl\Entity\CommonAggregateComponents\PowerOfAttorney $powerOfAttorney)
    {
        $this->powerOfAttorney[] = $powerOfAttorney;
        return $this;
    }

    /**
     * isset powerOfAttorney
     *
     * ASBIE
     *  Party. Power Of Attorney
     *  A power of attorney associated with this party.
     *  0..n
     *  Party
     *  Power Of Attorney
     *  Power Of Attorney
     *  Power Of Attorney
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPowerOfAttorney($index)
    {
        return isset($this->powerOfAttorney[$index]);
    }

    /**
     * unset powerOfAttorney
     *
     * ASBIE
     *  Party. Power Of Attorney
     *  A power of attorney associated with this party.
     *  0..n
     *  Party
     *  Power Of Attorney
     *  Power Of Attorney
     *  Power Of Attorney
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPowerOfAttorney($index)
    {
        unset($this->powerOfAttorney[$index]);
    }

    /**
     * Gets as powerOfAttorney
     *
     * ASBIE
     *  Party. Power Of Attorney
     *  A power of attorney associated with this party.
     *  0..n
     *  Party
     *  Power Of Attorney
     *  Power Of Attorney
     *  Power Of Attorney
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PowerOfAttorney[]
     */
    public function getPowerOfAttorney()
    {
        return $this->powerOfAttorney;
    }

    /**
     * Sets a new powerOfAttorney
     *
     * ASBIE
     *  Party. Power Of Attorney
     *  A power of attorney associated with this party.
     *  0..n
     *  Party
     *  Power Of Attorney
     *  Power Of Attorney
     *  Power Of Attorney
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PowerOfAttorney[] $powerOfAttorney
     * @return self
     */
    public function setPowerOfAttorney(array $powerOfAttorney)
    {
        $this->powerOfAttorney = $powerOfAttorney;
        return $this;
    }

    /**
     * Gets as financialAccount
     *
     * ASBIE
     *  Party. Financial Account
     *  The financial account associated with this party.
     *  0..1
     *  Party
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\FinancialAccount
     */
    public function getFinancialAccount()
    {
        return $this->financialAccount;
    }

    /**
     * Sets a new financialAccount
     *
     * ASBIE
     *  Party. Financial Account
     *  The financial account associated with this party.
     *  0..1
     *  Party
     *  Financial Account
     *  Financial Account
     *  Financial Account
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\FinancialAccount $financialAccount
     * @return self
     */
    public function setFinancialAccount(\Greenter\Ubl\Entity\CommonAggregateComponents\FinancialAccount $financialAccount)
    {
        $this->financialAccount = $financialAccount;
        return $this;
    }


}

