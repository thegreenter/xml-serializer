<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing StowageType
 *
 * ABIE
 *  Stowage. Details
 *  A class to describe a location on board a means of transport where specified goods or transport equipment have been stowed or are to be stowed.
 *  Stowage
 * XSD Type: StowageType
 */
class StowageType
{

    /**
     * BBIE
     *  Stowage. Location Identifier. Identifier
     *  An identifier for the location.
     *  0..1
     *  Stowage
     *  Location Identifier
     *  Identifier
     *  Identifier. Type
     *  Cell Location, coded
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\LocationID $locationID
     */
    private $locationID = null;

    /**
     * BBIE
     *  Stowage. Location. Text
     *  Text describing the location.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Location[] $location
     */
    private $location = [
        
    ];

    /**
     * ASBIE
     *  Stowage. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this stowage.
     *  0..n
     *  Stowage
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
     * Gets as locationID
     *
     * BBIE
     *  Stowage. Location Identifier. Identifier
     *  An identifier for the location.
     *  0..1
     *  Stowage
     *  Location Identifier
     *  Identifier
     *  Identifier. Type
     *  Cell Location, coded
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\LocationID
     */
    public function getLocationID()
    {
        return $this->locationID;
    }

    /**
     * Sets a new locationID
     *
     * BBIE
     *  Stowage. Location Identifier. Identifier
     *  An identifier for the location.
     *  0..1
     *  Stowage
     *  Location Identifier
     *  Identifier
     *  Identifier. Type
     *  Cell Location, coded
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\LocationID $locationID
     * @return self
     */
    public function setLocationID(\Greenter\Ubl\Entity\CommonBasic\LocationID $locationID)
    {
        $this->locationID = $locationID;
        return $this;
    }

    /**
     * Adds as location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Text describing the location.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\Location $location
     */
    public function addToLocation(\Greenter\Ubl\Entity\CommonBasic\Location $location)
    {
        $this->location[] = $location;
        return $this;
    }

    /**
     * isset location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Text describing the location.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocation($index)
    {
        return isset($this->location[$index]);
    }

    /**
     * unset location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Text describing the location.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocation($index)
    {
        unset($this->location[$index]);
    }

    /**
     * Gets as location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Text describing the location.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Location[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * BBIE
     *  Stowage. Location. Text
     *  Text describing the location.
     *  0..n
     *  Stowage
     *  Location
     *  Text
     *  Text. Type
     *  Cell Location
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Location[] $location
     * @return self
     */
    public function setLocation(array $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * ASBIE
     *  Stowage. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this stowage.
     *  0..n
     *  Stowage
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
     *  Stowage. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this stowage.
     *  0..n
     *  Stowage
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
     *  Stowage. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this stowage.
     *  0..n
     *  Stowage
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
     *  Stowage. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this stowage.
     *  0..n
     *  Stowage
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
     *  Stowage. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this stowage.
     *  0..n
     *  Stowage
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

