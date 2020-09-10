<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ConsumptionPointType
 *
 * ABIE
 *  Consumption Point. Details
 *  A class to define the point of consumption for a utility, such as a meter.
 *  Consumption Point
 * XSD Type: ConsumptionPointType
 */
class ConsumptionPointType
{

    /**
     * BBIE
     *  Consumption Point. Identifier
     *  An identifier for this point of consumption.
     *  1
     *  Consumption Point
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  7411013716x
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Consumption Point. Description. Text
     *  Text describing this consumption point.
     *  0..n
     *  Consumption Point
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations concerning the consumption point
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Consumption Point. Subscriber Identifier. Identifier
     *  An identifier for the subscriber responsible for the consumption at this consumption point.
     *  0..1
     *  Consumption Point
     *  Subscriber Identifier
     *  Identifier
     *  Identifier. Type
     *  98143211
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SubscriberID $subscriberID
     */
    private $subscriberID = null;

    /**
     * BBIE
     *  Consumption Point. Subscriber Type. Text
     *  The type of subscriber, expressed as text.
     *  0..1
     *  Consumption Point
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SubscriberType $subscriberType
     */
    private $subscriberType = null;

    /**
     * BBIE
     *  Consumption Point. Subscriber Type Code. Code
     *  The type of subscriber, expressed as a code.
     *  0..1
     *  Consumption Point
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *  APL
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SubscriberTypeCode $subscriberTypeCode
     */
    private $subscriberTypeCode = null;

    /**
     * BBIE
     *  Consumption Point. Total_ Delivered Quantity. Quantity
     *  The total quantity delivered, calculated at this consumption point.
     *  0..1
     *  Consumption Point
     *  Total
     *  Delivered Quantity
     *  Quantity
     *  Quantity. Type
     *  5761.00
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TotalDeliveredQuantity $totalDeliveredQuantity
     */
    private $totalDeliveredQuantity = null;

    /**
     * ASBIE
     *  Consumption Point. Address
     *  The address of this consumption point.
     *  0..1
     *  Consumption Point
     *  Address
     *  Address
     *  Address
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Address $address
     */
    private $address = null;

    /**
     * ASBIE
     *  Consumption Point. Web Site Access
     *  Access information for the website of this consumption point.
     *  0..1
     *  Consumption Point
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\WebSiteAccess $webSiteAccess
     */
    private $webSiteAccess = null;

    /**
     * ASBIE
     *  Consumption Point. Utility_ Meter. Meter
     *  A meter at this consumption point.
     *  0..n
     *  Consumption Point
     *  Utility
     *  Meter
     *  Meter
     *  Meter
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\UtilityMeter[] $utilityMeter
     */
    private $utilityMeter = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Consumption Point. Identifier
     *  An identifier for this point of consumption.
     *  1
     *  Consumption Point
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  7411013716x
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
     *  Consumption Point. Identifier
     *  An identifier for this point of consumption.
     *  1
     *  Consumption Point
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  7411013716x
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
     *  Consumption Point. Description. Text
     *  Text describing this consumption point.
     *  0..n
     *  Consumption Point
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations concerning the consumption point
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
     *  Consumption Point. Description. Text
     *  Text describing this consumption point.
     *  0..n
     *  Consumption Point
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations concerning the consumption point
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
     *  Consumption Point. Description. Text
     *  Text describing this consumption point.
     *  0..n
     *  Consumption Point
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations concerning the consumption point
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
     *  Consumption Point. Description. Text
     *  Text describing this consumption point.
     *  0..n
     *  Consumption Point
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations concerning the consumption point
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
     *  Consumption Point. Description. Text
     *  Text describing this consumption point.
     *  0..n
     *  Consumption Point
     *  Description
     *  Text
     *  Text. Type
     *  Additional informations concerning the consumption point
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
     * Gets as subscriberID
     *
     * BBIE
     *  Consumption Point. Subscriber Identifier. Identifier
     *  An identifier for the subscriber responsible for the consumption at this consumption point.
     *  0..1
     *  Consumption Point
     *  Subscriber Identifier
     *  Identifier
     *  Identifier. Type
     *  98143211
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SubscriberID
     */
    public function getSubscriberID()
    {
        return $this->subscriberID;
    }

    /**
     * Sets a new subscriberID
     *
     * BBIE
     *  Consumption Point. Subscriber Identifier. Identifier
     *  An identifier for the subscriber responsible for the consumption at this consumption point.
     *  0..1
     *  Consumption Point
     *  Subscriber Identifier
     *  Identifier
     *  Identifier. Type
     *  98143211
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SubscriberID $subscriberID
     * @return self
     */
    public function setSubscriberID(\Greenter\Ubl\Entity\CommonBasic\SubscriberID $subscriberID)
    {
        $this->subscriberID = $subscriberID;
        return $this;
    }

    /**
     * Gets as subscriberType
     *
     * BBIE
     *  Consumption Point. Subscriber Type. Text
     *  The type of subscriber, expressed as text.
     *  0..1
     *  Consumption Point
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SubscriberType
     */
    public function getSubscriberType()
    {
        return $this->subscriberType;
    }

    /**
     * Sets a new subscriberType
     *
     * BBIE
     *  Consumption Point. Subscriber Type. Text
     *  The type of subscriber, expressed as text.
     *  0..1
     *  Consumption Point
     *  Subscriber Type
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SubscriberType $subscriberType
     * @return self
     */
    public function setSubscriberType(\Greenter\Ubl\Entity\CommonBasic\SubscriberType $subscriberType)
    {
        $this->subscriberType = $subscriberType;
        return $this;
    }

    /**
     * Gets as subscriberTypeCode
     *
     * BBIE
     *  Consumption Point. Subscriber Type Code. Code
     *  The type of subscriber, expressed as a code.
     *  0..1
     *  Consumption Point
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *  APL
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SubscriberTypeCode
     */
    public function getSubscriberTypeCode()
    {
        return $this->subscriberTypeCode;
    }

    /**
     * Sets a new subscriberTypeCode
     *
     * BBIE
     *  Consumption Point. Subscriber Type Code. Code
     *  The type of subscriber, expressed as a code.
     *  0..1
     *  Consumption Point
     *  Subscriber Type Code
     *  Code
     *  Code. Type
     *  APL
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SubscriberTypeCode $subscriberTypeCode
     * @return self
     */
    public function setSubscriberTypeCode(\Greenter\Ubl\Entity\CommonBasic\SubscriberTypeCode $subscriberTypeCode)
    {
        $this->subscriberTypeCode = $subscriberTypeCode;
        return $this;
    }

    /**
     * Gets as totalDeliveredQuantity
     *
     * BBIE
     *  Consumption Point. Total_ Delivered Quantity. Quantity
     *  The total quantity delivered, calculated at this consumption point.
     *  0..1
     *  Consumption Point
     *  Total
     *  Delivered Quantity
     *  Quantity
     *  Quantity. Type
     *  5761.00
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TotalDeliveredQuantity
     */
    public function getTotalDeliveredQuantity()
    {
        return $this->totalDeliveredQuantity;
    }

    /**
     * Sets a new totalDeliveredQuantity
     *
     * BBIE
     *  Consumption Point. Total_ Delivered Quantity. Quantity
     *  The total quantity delivered, calculated at this consumption point.
     *  0..1
     *  Consumption Point
     *  Total
     *  Delivered Quantity
     *  Quantity
     *  Quantity. Type
     *  5761.00
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TotalDeliveredQuantity $totalDeliveredQuantity
     * @return self
     */
    public function setTotalDeliveredQuantity(\Greenter\Ubl\Entity\CommonBasic\TotalDeliveredQuantity $totalDeliveredQuantity)
    {
        $this->totalDeliveredQuantity = $totalDeliveredQuantity;
        return $this;
    }

    /**
     * Gets as address
     *
     * ASBIE
     *  Consumption Point. Address
     *  The address of this consumption point.
     *  0..1
     *  Consumption Point
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
     *  Consumption Point. Address
     *  The address of this consumption point.
     *  0..1
     *  Consumption Point
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
     * Gets as webSiteAccess
     *
     * ASBIE
     *  Consumption Point. Web Site Access
     *  Access information for the website of this consumption point.
     *  0..1
     *  Consumption Point
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\WebSiteAccess
     */
    public function getWebSiteAccess()
    {
        return $this->webSiteAccess;
    }

    /**
     * Sets a new webSiteAccess
     *
     * ASBIE
     *  Consumption Point. Web Site Access
     *  Access information for the website of this consumption point.
     *  0..1
     *  Consumption Point
     *  Web Site Access
     *  Web Site Access
     *  Web Site Access
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\WebSiteAccess $webSiteAccess
     * @return self
     */
    public function setWebSiteAccess(\Greenter\Ubl\Entity\CommonAggregateComponents\WebSiteAccess $webSiteAccess)
    {
        $this->webSiteAccess = $webSiteAccess;
        return $this;
    }

    /**
     * Adds as utilityMeter
     *
     * ASBIE
     *  Consumption Point. Utility_ Meter. Meter
     *  A meter at this consumption point.
     *  0..n
     *  Consumption Point
     *  Utility
     *  Meter
     *  Meter
     *  Meter
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\UtilityMeter $utilityMeter
     */
    public function addToUtilityMeter(\Greenter\Ubl\Entity\CommonAggregateComponents\UtilityMeter $utilityMeter)
    {
        $this->utilityMeter[] = $utilityMeter;
        return $this;
    }

    /**
     * isset utilityMeter
     *
     * ASBIE
     *  Consumption Point. Utility_ Meter. Meter
     *  A meter at this consumption point.
     *  0..n
     *  Consumption Point
     *  Utility
     *  Meter
     *  Meter
     *  Meter
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUtilityMeter($index)
    {
        return isset($this->utilityMeter[$index]);
    }

    /**
     * unset utilityMeter
     *
     * ASBIE
     *  Consumption Point. Utility_ Meter. Meter
     *  A meter at this consumption point.
     *  0..n
     *  Consumption Point
     *  Utility
     *  Meter
     *  Meter
     *  Meter
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUtilityMeter($index)
    {
        unset($this->utilityMeter[$index]);
    }

    /**
     * Gets as utilityMeter
     *
     * ASBIE
     *  Consumption Point. Utility_ Meter. Meter
     *  A meter at this consumption point.
     *  0..n
     *  Consumption Point
     *  Utility
     *  Meter
     *  Meter
     *  Meter
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\UtilityMeter[]
     */
    public function getUtilityMeter()
    {
        return $this->utilityMeter;
    }

    /**
     * Sets a new utilityMeter
     *
     * ASBIE
     *  Consumption Point. Utility_ Meter. Meter
     *  A meter at this consumption point.
     *  0..n
     *  Consumption Point
     *  Utility
     *  Meter
     *  Meter
     *  Meter
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\UtilityMeter[] $utilityMeter
     * @return self
     */
    public function setUtilityMeter(array $utilityMeter)
    {
        $this->utilityMeter = $utilityMeter;
        return $this;
    }


}

