<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing PickupType
 *
 * ABIE
 *  Pickup. Details
 *  A class to describe a pickup for delivery.
 *  Pickup
 *  Collection
 * XSD Type: PickupType
 */
class PickupType
{

    /**
     * BBIE
     *  Pickup. Identifier
     *  An identifier for this pickup.
     *  0..1
     *  Pickup
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Pickup. Actual_ Pickup Date. Date
     *  The actual pickup date.
     *  0..1
     *  Pickup
     *  Actual
     *  Pickup Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $actualPickupDate
     */
    private $actualPickupDate = null;

    /**
     * BBIE
     *  Pickup. Actual_ Pickup Time. Time
     *  The actual pickup time.
     *  0..1
     *  Pickup
     *  Actual
     *  Pickup Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $actualPickupTime
     */
    private $actualPickupTime = null;

    /**
     * BBIE
     *  Pickup. Earliest_ Pickup Date. Date
     *  The earliest pickup date.
     *  0..1
     *  Pickup
     *  Earliest
     *  Pickup Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $earliestPickupDate
     */
    private $earliestPickupDate = null;

    /**
     * BBIE
     *  Pickup. Earliest_ Pickup Time. Time
     *  The earliest pickup time.
     *  0..1
     *  Pickup
     *  Earliest
     *  Pickup Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $earliestPickupTime
     */
    private $earliestPickupTime = null;

    /**
     * BBIE
     *  Pickup. Latest_ Pickup Date. Date
     *  The latest pickup date.
     *  0..1
     *  Pickup
     *  Latest
     *  Pickup Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $latestPickupDate
     */
    private $latestPickupDate = null;

    /**
     * BBIE
     *  Pickup. Latest_ Pickup Time. Time
     *  The latest pickup time.
     *  0..1
     *  Pickup
     *  Latest
     *  Pickup Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $latestPickupTime
     */
    private $latestPickupTime = null;

    /**
     * ASBIE
     *  Pickup. Pickup_ Location. Location
     *  The pickup location.
     *  0..1
     *  Pickup
     *  Pickup
     *  Location
     *  Location
     *  Location
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PickupLocation $pickupLocation
     */
    private $pickupLocation = null;

    /**
     * ASBIE
     *  Pickup. Pickup_ Party. Party
     *  The party responsible for picking up a delivery.
     *  0..1
     *  Pickup
     *  Pickup
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PickupParty $pickupParty
     */
    private $pickupParty = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Pickup. Identifier
     *  An identifier for this pickup.
     *  0..1
     *  Pickup
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
     *  Pickup. Identifier
     *  An identifier for this pickup.
     *  0..1
     *  Pickup
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
     * Gets as actualPickupDate
     *
     * BBIE
     *  Pickup. Actual_ Pickup Date. Date
     *  The actual pickup date.
     *  0..1
     *  Pickup
     *  Actual
     *  Pickup Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getActualPickupDate()
    {
        return $this->actualPickupDate;
    }

    /**
     * Sets a new actualPickupDate
     *
     * BBIE
     *  Pickup. Actual_ Pickup Date. Date
     *  The actual pickup date.
     *  0..1
     *  Pickup
     *  Actual
     *  Pickup Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $actualPickupDate
     * @return self
     */
    public function setActualPickupDate(\DateTime $actualPickupDate)
    {
        $this->actualPickupDate = $actualPickupDate;
        return $this;
    }

    /**
     * Gets as actualPickupTime
     *
     * BBIE
     *  Pickup. Actual_ Pickup Time. Time
     *  The actual pickup time.
     *  0..1
     *  Pickup
     *  Actual
     *  Pickup Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getActualPickupTime()
    {
        return $this->actualPickupTime;
    }

    /**
     * Sets a new actualPickupTime
     *
     * BBIE
     *  Pickup. Actual_ Pickup Time. Time
     *  The actual pickup time.
     *  0..1
     *  Pickup
     *  Actual
     *  Pickup Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $actualPickupTime
     * @return self
     */
    public function setActualPickupTime(\DateTime $actualPickupTime)
    {
        $this->actualPickupTime = $actualPickupTime;
        return $this;
    }

    /**
     * Gets as earliestPickupDate
     *
     * BBIE
     *  Pickup. Earliest_ Pickup Date. Date
     *  The earliest pickup date.
     *  0..1
     *  Pickup
     *  Earliest
     *  Pickup Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getEarliestPickupDate()
    {
        return $this->earliestPickupDate;
    }

    /**
     * Sets a new earliestPickupDate
     *
     * BBIE
     *  Pickup. Earliest_ Pickup Date. Date
     *  The earliest pickup date.
     *  0..1
     *  Pickup
     *  Earliest
     *  Pickup Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $earliestPickupDate
     * @return self
     */
    public function setEarliestPickupDate(\DateTime $earliestPickupDate)
    {
        $this->earliestPickupDate = $earliestPickupDate;
        return $this;
    }

    /**
     * Gets as earliestPickupTime
     *
     * BBIE
     *  Pickup. Earliest_ Pickup Time. Time
     *  The earliest pickup time.
     *  0..1
     *  Pickup
     *  Earliest
     *  Pickup Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getEarliestPickupTime()
    {
        return $this->earliestPickupTime;
    }

    /**
     * Sets a new earliestPickupTime
     *
     * BBIE
     *  Pickup. Earliest_ Pickup Time. Time
     *  The earliest pickup time.
     *  0..1
     *  Pickup
     *  Earliest
     *  Pickup Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $earliestPickupTime
     * @return self
     */
    public function setEarliestPickupTime(\DateTime $earliestPickupTime)
    {
        $this->earliestPickupTime = $earliestPickupTime;
        return $this;
    }

    /**
     * Gets as latestPickupDate
     *
     * BBIE
     *  Pickup. Latest_ Pickup Date. Date
     *  The latest pickup date.
     *  0..1
     *  Pickup
     *  Latest
     *  Pickup Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getLatestPickupDate()
    {
        return $this->latestPickupDate;
    }

    /**
     * Sets a new latestPickupDate
     *
     * BBIE
     *  Pickup. Latest_ Pickup Date. Date
     *  The latest pickup date.
     *  0..1
     *  Pickup
     *  Latest
     *  Pickup Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $latestPickupDate
     * @return self
     */
    public function setLatestPickupDate(\DateTime $latestPickupDate)
    {
        $this->latestPickupDate = $latestPickupDate;
        return $this;
    }

    /**
     * Gets as latestPickupTime
     *
     * BBIE
     *  Pickup. Latest_ Pickup Time. Time
     *  The latest pickup time.
     *  0..1
     *  Pickup
     *  Latest
     *  Pickup Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getLatestPickupTime()
    {
        return $this->latestPickupTime;
    }

    /**
     * Sets a new latestPickupTime
     *
     * BBIE
     *  Pickup. Latest_ Pickup Time. Time
     *  The latest pickup time.
     *  0..1
     *  Pickup
     *  Latest
     *  Pickup Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $latestPickupTime
     * @return self
     */
    public function setLatestPickupTime(\DateTime $latestPickupTime)
    {
        $this->latestPickupTime = $latestPickupTime;
        return $this;
    }

    /**
     * Gets as pickupLocation
     *
     * ASBIE
     *  Pickup. Pickup_ Location. Location
     *  The pickup location.
     *  0..1
     *  Pickup
     *  Pickup
     *  Location
     *  Location
     *  Location
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PickupLocation
     */
    public function getPickupLocation()
    {
        return $this->pickupLocation;
    }

    /**
     * Sets a new pickupLocation
     *
     * ASBIE
     *  Pickup. Pickup_ Location. Location
     *  The pickup location.
     *  0..1
     *  Pickup
     *  Pickup
     *  Location
     *  Location
     *  Location
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PickupLocation $pickupLocation
     * @return self
     */
    public function setPickupLocation(\Greenter\Ubl\Entity\CommonAggregateComponents\PickupLocation $pickupLocation)
    {
        $this->pickupLocation = $pickupLocation;
        return $this;
    }

    /**
     * Gets as pickupParty
     *
     * ASBIE
     *  Pickup. Pickup_ Party. Party
     *  The party responsible for picking up a delivery.
     *  0..1
     *  Pickup
     *  Pickup
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PickupParty
     */
    public function getPickupParty()
    {
        return $this->pickupParty;
    }

    /**
     * Sets a new pickupParty
     *
     * ASBIE
     *  Pickup. Pickup_ Party. Party
     *  The party responsible for picking up a delivery.
     *  0..1
     *  Pickup
     *  Pickup
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PickupParty $pickupParty
     * @return self
     */
    public function setPickupParty(\Greenter\Ubl\Entity\CommonAggregateComponents\PickupParty $pickupParty)
    {
        $this->pickupParty = $pickupParty;
        return $this;
    }


}

