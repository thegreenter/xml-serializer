<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing TransportMeansType
 *
 * ABIE
 *  Transport Means. Details
 *  A class to describe a particular vehicle or vessel used for the conveyance of goods or persons.
 *  Transport Means
 *  Conveyance
 * XSD Type: TransportMeansType
 */
class TransportMeansType
{

    /**
     * BBIE
     *  Transport Means. Journey Identifier. Identifier
     *  An identifier for the regular service schedule of this means of transport.
     *  0..1
     *  Transport Means
     *  Journey Identifier
     *  Identifier
     *  Identifier. Type
     *  Voyage Number, Scheduled Conveyance Identifier (WCO ID 205), Flight Number
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\JourneyID $journeyID
     */
    private $journeyID = null;

    /**
     * BBIE
     *  Transport Means. Registration_ Nationality Identifier. Identifier
     *  An identifier for the country in which this means of transport is registered.
     *  0..1
     *  Transport Means
     *  Registration
     *  Nationality Identifier
     *  Identifier
     *  Identifier. Type
     *  Nationality of Means of Transport (WCO 175, 178 and 179)
     *  LIB
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\RegistrationNationalityID $registrationNationalityID
     */
    private $registrationNationalityID = null;

    /**
     * BBIE
     *  Transport Means. Registration_ Nationality. Text
     *  Text describing the country in which this means of transport is registered.
     *  0..n
     *  Transport Means
     *  Registration
     *  Nationality
     *  Text
     *  Text. Type
     *  Flag of Vessel, Nationality of Ship
     *  Liberia
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\RegistrationNationality[] $registrationNationality
     */
    private $registrationNationality = [
        
    ];

    /**
     * BBIE
     *  Transport Means. Direction Code. Code
     *  A code signifying the direction of this means of transport.
     *  0..1
     *  Transport Means
     *  Direction Code
     *  Code
     *  Code. Type
     *  Transit Direction
     *  North , East
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\DirectionCode $directionCode
     */
    private $directionCode = null;

    /**
     * BBIE
     *  Transport Means. Transport Means Type Code. Code
     *  A code signifying the type of this means of transport (truck, vessel, etc.).
     *  0..1
     *  Transport Means
     *  Transport Means Type Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TransportMeansTypeCode $transportMeansTypeCode
     */
    private $transportMeansTypeCode = null;

    /**
     * BBIE
     *  Transport Means. Trade Service Code. Code
     *  A code signifying the service regularly provided by the carrier operating this means of transport.
     *  0..1
     *  Transport Means
     *  Trade Service Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TradeServiceCode $tradeServiceCode
     */
    private $tradeServiceCode = null;

    /**
     * ASBIE
     *  Transport Means. Stowage
     *  The location within the means of transport where goods are to be or have been stowed.
     *  0..1
     *  Transport Means
     *  Stowage
     *  Stowage
     *  Stowage
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Stowage $stowage
     */
    private $stowage = null;

    /**
     * ASBIE
     *  Transport Means. Air Transport
     *  An aircraft used for transport.
     *  0..1
     *  Transport Means
     *  Air Transport
     *  Air Transport
     *  Air Transport
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\AirTransport $airTransport
     */
    private $airTransport = null;

    /**
     * ASBIE
     *  Transport Means. Road Transport
     *  A vehicle used for road transport.
     *  0..1
     *  Transport Means
     *  Road Transport
     *  Road Transport
     *  Road Transport
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\RoadTransport $roadTransport
     */
    private $roadTransport = null;

    /**
     * ASBIE
     *  Transport Means. Rail Transport
     *  Equipment used for rail transport.
     *  0..1
     *  Transport Means
     *  Rail Transport
     *  Rail Transport
     *  Rail Transport
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\RailTransport $railTransport
     */
    private $railTransport = null;

    /**
     * ASBIE
     *  Transport Means. Maritime Transport
     *  A vessel used for transport by water (not only by sea).
     *  0..1
     *  Transport Means
     *  Maritime Transport
     *  Maritime Transport
     *  Maritime Transport
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\MaritimeTransport $maritimeTransport
     */
    private $maritimeTransport = null;

    /**
     * ASBIE
     *  Transport Means. Owner_ Party. Party
     *  The party that owns this means of transport.
     *  0..1
     *  Transport Means
     *  Owner
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\OwnerParty $ownerParty
     */
    private $ownerParty = null;

    /**
     * ASBIE
     *  Transport Means. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this means of transport.
     *  0..n
     *  Transport Means
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\MeasurementDimension[] $measurementDimension
     */
    private $measurementDimension = [
        
    ];

    /**
     * Gets as journeyID
     *
     * BBIE
     *  Transport Means. Journey Identifier. Identifier
     *  An identifier for the regular service schedule of this means of transport.
     *  0..1
     *  Transport Means
     *  Journey Identifier
     *  Identifier
     *  Identifier. Type
     *  Voyage Number, Scheduled Conveyance Identifier (WCO ID 205), Flight Number
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\JourneyID
     */
    public function getJourneyID()
    {
        return $this->journeyID;
    }

    /**
     * Sets a new journeyID
     *
     * BBIE
     *  Transport Means. Journey Identifier. Identifier
     *  An identifier for the regular service schedule of this means of transport.
     *  0..1
     *  Transport Means
     *  Journey Identifier
     *  Identifier
     *  Identifier. Type
     *  Voyage Number, Scheduled Conveyance Identifier (WCO ID 205), Flight Number
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\JourneyID $journeyID
     * @return self
     */
    public function setJourneyID(\Greenter\Ubl\Entity\CommonBasic\JourneyID $journeyID)
    {
        $this->journeyID = $journeyID;
        return $this;
    }

    /**
     * Gets as registrationNationalityID
     *
     * BBIE
     *  Transport Means. Registration_ Nationality Identifier. Identifier
     *  An identifier for the country in which this means of transport is registered.
     *  0..1
     *  Transport Means
     *  Registration
     *  Nationality Identifier
     *  Identifier
     *  Identifier. Type
     *  Nationality of Means of Transport (WCO 175, 178 and 179)
     *  LIB
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\RegistrationNationalityID
     */
    public function getRegistrationNationalityID()
    {
        return $this->registrationNationalityID;
    }

    /**
     * Sets a new registrationNationalityID
     *
     * BBIE
     *  Transport Means. Registration_ Nationality Identifier. Identifier
     *  An identifier for the country in which this means of transport is registered.
     *  0..1
     *  Transport Means
     *  Registration
     *  Nationality Identifier
     *  Identifier
     *  Identifier. Type
     *  Nationality of Means of Transport (WCO 175, 178 and 179)
     *  LIB
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\RegistrationNationalityID $registrationNationalityID
     * @return self
     */
    public function setRegistrationNationalityID(\Greenter\Ubl\Entity\CommonBasic\RegistrationNationalityID $registrationNationalityID)
    {
        $this->registrationNationalityID = $registrationNationalityID;
        return $this;
    }

    /**
     * Adds as registrationNationality
     *
     * BBIE
     *  Transport Means. Registration_ Nationality. Text
     *  Text describing the country in which this means of transport is registered.
     *  0..n
     *  Transport Means
     *  Registration
     *  Nationality
     *  Text
     *  Text. Type
     *  Flag of Vessel, Nationality of Ship
     *  Liberia
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\RegistrationNationality $registrationNationality
     */
    public function addToRegistrationNationality(\Greenter\Ubl\Entity\CommonBasic\RegistrationNationality $registrationNationality)
    {
        $this->registrationNationality[] = $registrationNationality;
        return $this;
    }

    /**
     * isset registrationNationality
     *
     * BBIE
     *  Transport Means. Registration_ Nationality. Text
     *  Text describing the country in which this means of transport is registered.
     *  0..n
     *  Transport Means
     *  Registration
     *  Nationality
     *  Text
     *  Text. Type
     *  Flag of Vessel, Nationality of Ship
     *  Liberia
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRegistrationNationality($index)
    {
        return isset($this->registrationNationality[$index]);
    }

    /**
     * unset registrationNationality
     *
     * BBIE
     *  Transport Means. Registration_ Nationality. Text
     *  Text describing the country in which this means of transport is registered.
     *  0..n
     *  Transport Means
     *  Registration
     *  Nationality
     *  Text
     *  Text. Type
     *  Flag of Vessel, Nationality of Ship
     *  Liberia
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRegistrationNationality($index)
    {
        unset($this->registrationNationality[$index]);
    }

    /**
     * Gets as registrationNationality
     *
     * BBIE
     *  Transport Means. Registration_ Nationality. Text
     *  Text describing the country in which this means of transport is registered.
     *  0..n
     *  Transport Means
     *  Registration
     *  Nationality
     *  Text
     *  Text. Type
     *  Flag of Vessel, Nationality of Ship
     *  Liberia
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\RegistrationNationality[]
     */
    public function getRegistrationNationality()
    {
        return $this->registrationNationality;
    }

    /**
     * Sets a new registrationNationality
     *
     * BBIE
     *  Transport Means. Registration_ Nationality. Text
     *  Text describing the country in which this means of transport is registered.
     *  0..n
     *  Transport Means
     *  Registration
     *  Nationality
     *  Text
     *  Text. Type
     *  Flag of Vessel, Nationality of Ship
     *  Liberia
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\RegistrationNationality[] $registrationNationality
     * @return self
     */
    public function setRegistrationNationality(array $registrationNationality)
    {
        $this->registrationNationality = $registrationNationality;
        return $this;
    }

    /**
     * Gets as directionCode
     *
     * BBIE
     *  Transport Means. Direction Code. Code
     *  A code signifying the direction of this means of transport.
     *  0..1
     *  Transport Means
     *  Direction Code
     *  Code
     *  Code. Type
     *  Transit Direction
     *  North , East
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\DirectionCode
     */
    public function getDirectionCode()
    {
        return $this->directionCode;
    }

    /**
     * Sets a new directionCode
     *
     * BBIE
     *  Transport Means. Direction Code. Code
     *  A code signifying the direction of this means of transport.
     *  0..1
     *  Transport Means
     *  Direction Code
     *  Code
     *  Code. Type
     *  Transit Direction
     *  North , East
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\DirectionCode $directionCode
     * @return self
     */
    public function setDirectionCode(\Greenter\Ubl\Entity\CommonBasic\DirectionCode $directionCode)
    {
        $this->directionCode = $directionCode;
        return $this;
    }

    /**
     * Gets as transportMeansTypeCode
     *
     * BBIE
     *  Transport Means. Transport Means Type Code. Code
     *  A code signifying the type of this means of transport (truck, vessel, etc.).
     *  0..1
     *  Transport Means
     *  Transport Means Type Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TransportMeansTypeCode
     */
    public function getTransportMeansTypeCode()
    {
        return $this->transportMeansTypeCode;
    }

    /**
     * Sets a new transportMeansTypeCode
     *
     * BBIE
     *  Transport Means. Transport Means Type Code. Code
     *  A code signifying the type of this means of transport (truck, vessel, etc.).
     *  0..1
     *  Transport Means
     *  Transport Means Type Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TransportMeansTypeCode $transportMeansTypeCode
     * @return self
     */
    public function setTransportMeansTypeCode(\Greenter\Ubl\Entity\CommonBasic\TransportMeansTypeCode $transportMeansTypeCode)
    {
        $this->transportMeansTypeCode = $transportMeansTypeCode;
        return $this;
    }

    /**
     * Gets as tradeServiceCode
     *
     * BBIE
     *  Transport Means. Trade Service Code. Code
     *  A code signifying the service regularly provided by the carrier operating this means of transport.
     *  0..1
     *  Transport Means
     *  Trade Service Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TradeServiceCode
     */
    public function getTradeServiceCode()
    {
        return $this->tradeServiceCode;
    }

    /**
     * Sets a new tradeServiceCode
     *
     * BBIE
     *  Transport Means. Trade Service Code. Code
     *  A code signifying the service regularly provided by the carrier operating this means of transport.
     *  0..1
     *  Transport Means
     *  Trade Service Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TradeServiceCode $tradeServiceCode
     * @return self
     */
    public function setTradeServiceCode(\Greenter\Ubl\Entity\CommonBasic\TradeServiceCode $tradeServiceCode)
    {
        $this->tradeServiceCode = $tradeServiceCode;
        return $this;
    }

    /**
     * Gets as stowage
     *
     * ASBIE
     *  Transport Means. Stowage
     *  The location within the means of transport where goods are to be or have been stowed.
     *  0..1
     *  Transport Means
     *  Stowage
     *  Stowage
     *  Stowage
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Stowage
     */
    public function getStowage()
    {
        return $this->stowage;
    }

    /**
     * Sets a new stowage
     *
     * ASBIE
     *  Transport Means. Stowage
     *  The location within the means of transport where goods are to be or have been stowed.
     *  0..1
     *  Transport Means
     *  Stowage
     *  Stowage
     *  Stowage
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Stowage $stowage
     * @return self
     */
    public function setStowage(\Greenter\Ubl\Entity\CommonAggregateComponents\Stowage $stowage)
    {
        $this->stowage = $stowage;
        return $this;
    }

    /**
     * Gets as airTransport
     *
     * ASBIE
     *  Transport Means. Air Transport
     *  An aircraft used for transport.
     *  0..1
     *  Transport Means
     *  Air Transport
     *  Air Transport
     *  Air Transport
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\AirTransport
     */
    public function getAirTransport()
    {
        return $this->airTransport;
    }

    /**
     * Sets a new airTransport
     *
     * ASBIE
     *  Transport Means. Air Transport
     *  An aircraft used for transport.
     *  0..1
     *  Transport Means
     *  Air Transport
     *  Air Transport
     *  Air Transport
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AirTransport $airTransport
     * @return self
     */
    public function setAirTransport(\Greenter\Ubl\Entity\CommonAggregateComponents\AirTransport $airTransport)
    {
        $this->airTransport = $airTransport;
        return $this;
    }

    /**
     * Gets as roadTransport
     *
     * ASBIE
     *  Transport Means. Road Transport
     *  A vehicle used for road transport.
     *  0..1
     *  Transport Means
     *  Road Transport
     *  Road Transport
     *  Road Transport
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\RoadTransport
     */
    public function getRoadTransport()
    {
        return $this->roadTransport;
    }

    /**
     * Sets a new roadTransport
     *
     * ASBIE
     *  Transport Means. Road Transport
     *  A vehicle used for road transport.
     *  0..1
     *  Transport Means
     *  Road Transport
     *  Road Transport
     *  Road Transport
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\RoadTransport $roadTransport
     * @return self
     */
    public function setRoadTransport(\Greenter\Ubl\Entity\CommonAggregateComponents\RoadTransport $roadTransport)
    {
        $this->roadTransport = $roadTransport;
        return $this;
    }

    /**
     * Gets as railTransport
     *
     * ASBIE
     *  Transport Means. Rail Transport
     *  Equipment used for rail transport.
     *  0..1
     *  Transport Means
     *  Rail Transport
     *  Rail Transport
     *  Rail Transport
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\RailTransport
     */
    public function getRailTransport()
    {
        return $this->railTransport;
    }

    /**
     * Sets a new railTransport
     *
     * ASBIE
     *  Transport Means. Rail Transport
     *  Equipment used for rail transport.
     *  0..1
     *  Transport Means
     *  Rail Transport
     *  Rail Transport
     *  Rail Transport
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\RailTransport $railTransport
     * @return self
     */
    public function setRailTransport(\Greenter\Ubl\Entity\CommonAggregateComponents\RailTransport $railTransport)
    {
        $this->railTransport = $railTransport;
        return $this;
    }

    /**
     * Gets as maritimeTransport
     *
     * ASBIE
     *  Transport Means. Maritime Transport
     *  A vessel used for transport by water (not only by sea).
     *  0..1
     *  Transport Means
     *  Maritime Transport
     *  Maritime Transport
     *  Maritime Transport
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\MaritimeTransport
     */
    public function getMaritimeTransport()
    {
        return $this->maritimeTransport;
    }

    /**
     * Sets a new maritimeTransport
     *
     * ASBIE
     *  Transport Means. Maritime Transport
     *  A vessel used for transport by water (not only by sea).
     *  0..1
     *  Transport Means
     *  Maritime Transport
     *  Maritime Transport
     *  Maritime Transport
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\MaritimeTransport $maritimeTransport
     * @return self
     */
    public function setMaritimeTransport(\Greenter\Ubl\Entity\CommonAggregateComponents\MaritimeTransport $maritimeTransport)
    {
        $this->maritimeTransport = $maritimeTransport;
        return $this;
    }

    /**
     * Gets as ownerParty
     *
     * ASBIE
     *  Transport Means. Owner_ Party. Party
     *  The party that owns this means of transport.
     *  0..1
     *  Transport Means
     *  Owner
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\OwnerParty
     */
    public function getOwnerParty()
    {
        return $this->ownerParty;
    }

    /**
     * Sets a new ownerParty
     *
     * ASBIE
     *  Transport Means. Owner_ Party. Party
     *  The party that owns this means of transport.
     *  0..1
     *  Transport Means
     *  Owner
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\OwnerParty $ownerParty
     * @return self
     */
    public function setOwnerParty(\Greenter\Ubl\Entity\CommonAggregateComponents\OwnerParty $ownerParty)
    {
        $this->ownerParty = $ownerParty;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * ASBIE
     *  Transport Means. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this means of transport.
     *  0..n
     *  Transport Means
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\MeasurementDimension $measurementDimension
     */
    public function addToMeasurementDimension(\Greenter\Ubl\Entity\CommonAggregateComponents\MeasurementDimension $measurementDimension)
    {
        $this->measurementDimension[] = $measurementDimension;
        return $this;
    }

    /**
     * isset measurementDimension
     *
     * ASBIE
     *  Transport Means. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this means of transport.
     *  0..n
     *  Transport Means
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeasurementDimension($index)
    {
        return isset($this->measurementDimension[$index]);
    }

    /**
     * unset measurementDimension
     *
     * ASBIE
     *  Transport Means. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this means of transport.
     *  0..n
     *  Transport Means
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeasurementDimension($index)
    {
        unset($this->measurementDimension[$index]);
    }

    /**
     * Gets as measurementDimension
     *
     * ASBIE
     *  Transport Means. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this means of transport.
     *  0..n
     *  Transport Means
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\MeasurementDimension[]
     */
    public function getMeasurementDimension()
    {
        return $this->measurementDimension;
    }

    /**
     * Sets a new measurementDimension
     *
     * ASBIE
     *  Transport Means. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this means of transport.
     *  0..n
     *  Transport Means
     *  Measurement
     *  Dimension
     *  Dimension
     *  Dimension
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\MeasurementDimension[] $measurementDimension
     * @return self
     */
    public function setMeasurementDimension(array $measurementDimension)
    {
        $this->measurementDimension = $measurementDimension;
        return $this;
    }


}

