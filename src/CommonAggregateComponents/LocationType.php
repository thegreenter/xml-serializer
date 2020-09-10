<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing LocationType
 *
 * ABIE
 *  Location. Details
 *  A class to describe a location.
 *  Location
 * XSD Type: LocationType
 */
class LocationType
{

    /**
     * BBIE
     *  Location. Identifier
     *  An identifier for this location, e.g., the EAN Location Number, GLN.
     *  0..1
     *  Location
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Location. Description. Text
     *  Text describing this location.
     *  0..n
     *  Location
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
     *  Location. Conditions. Text
     *  Free-form text describing the physical conditions of the location.
     *  0..n
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Conditions[] $conditions
     */
    private $conditions = [
        
    ];

    /**
     * BBIE
     *  Location. Country Subentity. Text
     *  A territorial division of a country, such as a county or state, expressed as text.
     *  0..1
     *  Location
     *  Country Subentity
     *  Text
     *  Text. Type
     *  AdministrativeArea, State, Country, Shire, Canton
     *  Florida , Tamilnadu
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\CountrySubentity $countrySubentity
     */
    private $countrySubentity = null;

    /**
     * BBIE
     *  Location. Country Subentity Code. Code
     *  A territorial division of a country, such as a county or state, expressed as a code.
     *  0..1
     *  Location
     *  Country Subentity Code
     *  Code
     *  Code. Type
     *  AdministrativeAreaCode, State Code
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\CountrySubentityCode $countrySubentityCode
     */
    private $countrySubentityCode = null;

    /**
     * BBIE
     *  Location. Location Type Code. Code
     *  A code signifying the type of location.
     *  0..1
     *  Location
     *  Location Type Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\LocationTypeCode $locationTypeCode
     */
    private $locationTypeCode = null;

    /**
     * BBIE
     *  Location. Information_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of a document providing information about this location.
     *  0..1
     *  Location
     *  Information
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\InformationURI $informationURI
     */
    private $informationURI = null;

    /**
     * BBIE
     *  Location. Name
     *  The name of this location.
     *  0..1
     *  Location
     *  Name
     *  Name
     *  Name. Type
     *  winter 2005 collection
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Name $name
     */
    private $name = null;

    /**
     * ASBIE
     *  Location. Validity_ Period. Period
     *  A period during which this location can be used (e.g., for delivery).
     *  0..n
     *  Location
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ValidityPeriod[] $validityPeriod
     */
    private $validityPeriod = [
        
    ];

    /**
     * ASBIE
     *  Location. Address
     *  The address of this location.
     *  0..1
     *  Location
     *  Address
     *  Address
     *  Address
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Address $address
     */
    private $address = null;

    /**
     * ASBIE
     *  Location. Subsidiary_ Location. Location
     *  A location subsidiary to this location.
     *  0..n
     *  Location
     *  Subsidiary
     *  Location
     *  Location
     *  Location
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\SubsidiaryLocation[] $subsidiaryLocation
     */
    private $subsidiaryLocation = [
        
    ];

    /**
     * ASBIE
     *  Location. Location Coordinate
     *  The geographical coordinates of this location.
     *  0..n
     *  Location
     *  Location Coordinate
     *  Location Coordinate
     *  Location Coordinate
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\LocationCoordinate[] $locationCoordinate
     */
    private $locationCoordinate = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Location. Identifier
     *  An identifier for this location, e.g., the EAN Location Number, GLN.
     *  0..1
     *  Location
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
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
     *  Location. Identifier
     *  An identifier for this location, e.g., the EAN Location Number, GLN.
     *  0..1
     *  Location
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  5790002221134
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
     * Adds as description
     *
     * BBIE
     *  Location. Description. Text
     *  Text describing this location.
     *  0..n
     *  Location
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
     *  Location. Description. Text
     *  Text describing this location.
     *  0..n
     *  Location
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
     *  Location. Description. Text
     *  Text describing this location.
     *  0..n
     *  Location
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
     *  Location. Description. Text
     *  Text describing this location.
     *  0..n
     *  Location
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
     *  Location. Description. Text
     *  Text describing this location.
     *  0..n
     *  Location
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
     * Adds as conditions
     *
     * BBIE
     *  Location. Conditions. Text
     *  Free-form text describing the physical conditions of the location.
     *  0..n
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\Conditions $conditions
     */
    public function addToConditions(\Greenter\Ubl\Entity\CommonBasic\Conditions $conditions)
    {
        $this->conditions[] = $conditions;
        return $this;
    }

    /**
     * isset conditions
     *
     * BBIE
     *  Location. Conditions. Text
     *  Free-form text describing the physical conditions of the location.
     *  0..n
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConditions($index)
    {
        return isset($this->conditions[$index]);
    }

    /**
     * unset conditions
     *
     * BBIE
     *  Location. Conditions. Text
     *  Free-form text describing the physical conditions of the location.
     *  0..n
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConditions($index)
    {
        unset($this->conditions[$index]);
    }

    /**
     * Gets as conditions
     *
     * BBIE
     *  Location. Conditions. Text
     *  Free-form text describing the physical conditions of the location.
     *  0..n
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Conditions[]
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Sets a new conditions
     *
     * BBIE
     *  Location. Conditions. Text
     *  Free-form text describing the physical conditions of the location.
     *  0..n
     *  Location
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Conditions[] $conditions
     * @return self
     */
    public function setConditions(array $conditions)
    {
        $this->conditions = $conditions;
        return $this;
    }

    /**
     * Gets as countrySubentity
     *
     * BBIE
     *  Location. Country Subentity. Text
     *  A territorial division of a country, such as a county or state, expressed as text.
     *  0..1
     *  Location
     *  Country Subentity
     *  Text
     *  Text. Type
     *  AdministrativeArea, State, Country, Shire, Canton
     *  Florida , Tamilnadu
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\CountrySubentity
     */
    public function getCountrySubentity()
    {
        return $this->countrySubentity;
    }

    /**
     * Sets a new countrySubentity
     *
     * BBIE
     *  Location. Country Subentity. Text
     *  A territorial division of a country, such as a county or state, expressed as text.
     *  0..1
     *  Location
     *  Country Subentity
     *  Text
     *  Text. Type
     *  AdministrativeArea, State, Country, Shire, Canton
     *  Florida , Tamilnadu
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\CountrySubentity $countrySubentity
     * @return self
     */
    public function setCountrySubentity(\Greenter\Ubl\Entity\CommonBasic\CountrySubentity $countrySubentity)
    {
        $this->countrySubentity = $countrySubentity;
        return $this;
    }

    /**
     * Gets as countrySubentityCode
     *
     * BBIE
     *  Location. Country Subentity Code. Code
     *  A territorial division of a country, such as a county or state, expressed as a code.
     *  0..1
     *  Location
     *  Country Subentity Code
     *  Code
     *  Code. Type
     *  AdministrativeAreaCode, State Code
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\CountrySubentityCode
     */
    public function getCountrySubentityCode()
    {
        return $this->countrySubentityCode;
    }

    /**
     * Sets a new countrySubentityCode
     *
     * BBIE
     *  Location. Country Subentity Code. Code
     *  A territorial division of a country, such as a county or state, expressed as a code.
     *  0..1
     *  Location
     *  Country Subentity Code
     *  Code
     *  Code. Type
     *  AdministrativeAreaCode, State Code
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\CountrySubentityCode $countrySubentityCode
     * @return self
     */
    public function setCountrySubentityCode(\Greenter\Ubl\Entity\CommonBasic\CountrySubentityCode $countrySubentityCode)
    {
        $this->countrySubentityCode = $countrySubentityCode;
        return $this;
    }

    /**
     * Gets as locationTypeCode
     *
     * BBIE
     *  Location. Location Type Code. Code
     *  A code signifying the type of location.
     *  0..1
     *  Location
     *  Location Type Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\LocationTypeCode
     */
    public function getLocationTypeCode()
    {
        return $this->locationTypeCode;
    }

    /**
     * Sets a new locationTypeCode
     *
     * BBIE
     *  Location. Location Type Code. Code
     *  A code signifying the type of location.
     *  0..1
     *  Location
     *  Location Type Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\LocationTypeCode $locationTypeCode
     * @return self
     */
    public function setLocationTypeCode(\Greenter\Ubl\Entity\CommonBasic\LocationTypeCode $locationTypeCode)
    {
        $this->locationTypeCode = $locationTypeCode;
        return $this;
    }

    /**
     * Gets as informationURI
     *
     * BBIE
     *  Location. Information_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of a document providing information about this location.
     *  0..1
     *  Location
     *  Information
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\InformationURI
     */
    public function getInformationURI()
    {
        return $this->informationURI;
    }

    /**
     * Sets a new informationURI
     *
     * BBIE
     *  Location. Information_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of a document providing information about this location.
     *  0..1
     *  Location
     *  Information
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\InformationURI $informationURI
     * @return self
     */
    public function setInformationURI(\Greenter\Ubl\Entity\CommonBasic\InformationURI $informationURI)
    {
        $this->informationURI = $informationURI;
        return $this;
    }

    /**
     * Gets as name
     *
     * BBIE
     *  Location. Name
     *  The name of this location.
     *  0..1
     *  Location
     *  Name
     *  Name
     *  Name. Type
     *  winter 2005 collection
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
     *  Location. Name
     *  The name of this location.
     *  0..1
     *  Location
     *  Name
     *  Name
     *  Name. Type
     *  winter 2005 collection
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
     * Adds as validityPeriod
     *
     * ASBIE
     *  Location. Validity_ Period. Period
     *  A period during which this location can be used (e.g., for delivery).
     *  0..n
     *  Location
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ValidityPeriod $validityPeriod
     */
    public function addToValidityPeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod[] = $validityPeriod;
        return $this;
    }

    /**
     * isset validityPeriod
     *
     * ASBIE
     *  Location. Validity_ Period. Period
     *  A period during which this location can be used (e.g., for delivery).
     *  0..n
     *  Location
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetValidityPeriod($index)
    {
        return isset($this->validityPeriod[$index]);
    }

    /**
     * unset validityPeriod
     *
     * ASBIE
     *  Location. Validity_ Period. Period
     *  A period during which this location can be used (e.g., for delivery).
     *  0..n
     *  Location
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetValidityPeriod($index)
    {
        unset($this->validityPeriod[$index]);
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Location. Validity_ Period. Period
     *  A period during which this location can be used (e.g., for delivery).
     *  0..n
     *  Location
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ValidityPeriod[]
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Location. Validity_ Period. Period
     *  A period during which this location can be used (e.g., for delivery).
     *  0..n
     *  Location
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ValidityPeriod[] $validityPeriod
     * @return self
     */
    public function setValidityPeriod(array $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as address
     *
     * ASBIE
     *  Location. Address
     *  The address of this location.
     *  0..1
     *  Location
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
     *  Location. Address
     *  The address of this location.
     *  0..1
     *  Location
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

    /**
     * Adds as subsidiaryLocation
     *
     * ASBIE
     *  Location. Subsidiary_ Location. Location
     *  A location subsidiary to this location.
     *  0..n
     *  Location
     *  Subsidiary
     *  Location
     *  Location
     *  Location
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SubsidiaryLocation $subsidiaryLocation
     */
    public function addToSubsidiaryLocation(\Greenter\Ubl\Entity\CommonAggregateComponents\SubsidiaryLocation $subsidiaryLocation)
    {
        $this->subsidiaryLocation[] = $subsidiaryLocation;
        return $this;
    }

    /**
     * isset subsidiaryLocation
     *
     * ASBIE
     *  Location. Subsidiary_ Location. Location
     *  A location subsidiary to this location.
     *  0..n
     *  Location
     *  Subsidiary
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSubsidiaryLocation($index)
    {
        return isset($this->subsidiaryLocation[$index]);
    }

    /**
     * unset subsidiaryLocation
     *
     * ASBIE
     *  Location. Subsidiary_ Location. Location
     *  A location subsidiary to this location.
     *  0..n
     *  Location
     *  Subsidiary
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSubsidiaryLocation($index)
    {
        unset($this->subsidiaryLocation[$index]);
    }

    /**
     * Gets as subsidiaryLocation
     *
     * ASBIE
     *  Location. Subsidiary_ Location. Location
     *  A location subsidiary to this location.
     *  0..n
     *  Location
     *  Subsidiary
     *  Location
     *  Location
     *  Location
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\SubsidiaryLocation[]
     */
    public function getSubsidiaryLocation()
    {
        return $this->subsidiaryLocation;
    }

    /**
     * Sets a new subsidiaryLocation
     *
     * ASBIE
     *  Location. Subsidiary_ Location. Location
     *  A location subsidiary to this location.
     *  0..n
     *  Location
     *  Subsidiary
     *  Location
     *  Location
     *  Location
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SubsidiaryLocation[] $subsidiaryLocation
     * @return self
     */
    public function setSubsidiaryLocation(array $subsidiaryLocation)
    {
        $this->subsidiaryLocation = $subsidiaryLocation;
        return $this;
    }

    /**
     * Adds as locationCoordinate
     *
     * ASBIE
     *  Location. Location Coordinate
     *  The geographical coordinates of this location.
     *  0..n
     *  Location
     *  Location Coordinate
     *  Location Coordinate
     *  Location Coordinate
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\LocationCoordinate $locationCoordinate
     */
    public function addToLocationCoordinate(\Greenter\Ubl\Entity\CommonAggregateComponents\LocationCoordinate $locationCoordinate)
    {
        $this->locationCoordinate[] = $locationCoordinate;
        return $this;
    }

    /**
     * isset locationCoordinate
     *
     * ASBIE
     *  Location. Location Coordinate
     *  The geographical coordinates of this location.
     *  0..n
     *  Location
     *  Location Coordinate
     *  Location Coordinate
     *  Location Coordinate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocationCoordinate($index)
    {
        return isset($this->locationCoordinate[$index]);
    }

    /**
     * unset locationCoordinate
     *
     * ASBIE
     *  Location. Location Coordinate
     *  The geographical coordinates of this location.
     *  0..n
     *  Location
     *  Location Coordinate
     *  Location Coordinate
     *  Location Coordinate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocationCoordinate($index)
    {
        unset($this->locationCoordinate[$index]);
    }

    /**
     * Gets as locationCoordinate
     *
     * ASBIE
     *  Location. Location Coordinate
     *  The geographical coordinates of this location.
     *  0..n
     *  Location
     *  Location Coordinate
     *  Location Coordinate
     *  Location Coordinate
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\LocationCoordinate[]
     */
    public function getLocationCoordinate()
    {
        return $this->locationCoordinate;
    }

    /**
     * Sets a new locationCoordinate
     *
     * ASBIE
     *  Location. Location Coordinate
     *  The geographical coordinates of this location.
     *  0..n
     *  Location
     *  Location Coordinate
     *  Location Coordinate
     *  Location Coordinate
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\LocationCoordinate[] $locationCoordinate
     * @return self
     */
    public function setLocationCoordinate(array $locationCoordinate)
    {
        $this->locationCoordinate = $locationCoordinate;
        return $this;
    }


}

