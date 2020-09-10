<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing OrderedShipmentType
 *
 * ABIE
 *  Ordered Shipment. Details
 *  A class to describe an ordered shipment.
 *  Ordered Shipment
 * XSD Type: OrderedShipmentType
 */
class OrderedShipmentType
{

    /**
     * ASBIE
     *  Ordered Shipment. Shipment
     *  The ordered shipment.
     *  1
     *  Ordered Shipment
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Shipment $shipment
     */
    private $shipment = null;

    /**
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Package[] $package
     */
    private $package = [
        
    ];

    /**
     * Gets as shipment
     *
     * ASBIE
     *  Ordered Shipment. Shipment
     *  The ordered shipment.
     *  1
     *  Ordered Shipment
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Shipment
     */
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Sets a new shipment
     *
     * ASBIE
     *  Ordered Shipment. Shipment
     *  The ordered shipment.
     *  1
     *  Ordered Shipment
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Shipment $shipment
     * @return self
     */
    public function setShipment(\Greenter\Ubl\Entity\CommonAggregateComponents\Shipment $shipment)
    {
        $this->shipment = $shipment;
        return $this;
    }

    /**
     * Adds as package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Package $package
     */
    public function addToPackage(\Greenter\Ubl\Entity\CommonAggregateComponents\Package $package)
    {
        $this->package[] = $package;
        return $this;
    }

    /**
     * isset package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackage($index)
    {
        return isset($this->package[$index]);
    }

    /**
     * unset package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackage($index)
    {
        unset($this->package[$index]);
    }

    /**
     * Gets as package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Package[]
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Sets a new package
     *
     * ASBIE
     *  Ordered Shipment. Package
     *  A package in this ordered shipment.
     *  0..n
     *  Ordered Shipment
     *  Package
     *  Package
     *  Package
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Package[] $package
     * @return self
     */
    public function setPackage(array $package)
    {
        $this->package = $package;
        return $this;
    }


}

