<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing PackageType
 *
 * ABIE
 *  Package. Details
 *  A class to describe a package.
 *  Package
 * XSD Type: PackageType
 */
class PackageType
{

    /**
     * BBIE
     *  Package. Identifier
     *  An identifier for this package.
     *  0..1
     *  Package
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Package. Quantity
     *  The quantity of items contained in this package.
     *  0..1
     *  Package
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Quantity $quantity
     */
    private $quantity = null;

    /**
     * BBIE
     *  Package. Returnable Material_ Indicator. Indicator
     *  An indicator that the packaging material is returnable (true) or not (false).
     *  0..1
     *  Package
     *  Returnable Material
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $returnableMaterialIndicator
     */
    private $returnableMaterialIndicator = null;

    /**
     * BBIE
     *  Package. Package Level Code. Code
     *  A code signifying a level of packaging.
     *  0..1
     *  Package
     *  Package Level Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PackageLevelCode $packageLevelCode
     */
    private $packageLevelCode = null;

    /**
     * BBIE
     *  Package. Packaging Type Code. Code
     *  A code signifying a type of packaging.
     *  0..1
     *  Package
     *  Packaging Type Code
     *  Code
     *  Packaging Type
     *  Packaging Type_ Code. Type
     *  Package classification code
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PackagingTypeCode $packagingTypeCode
     */
    private $packagingTypeCode = null;

    /**
     * BBIE
     *  Package. Packing Material. Text
     *  Text describing the packaging material.
     *  0..n
     *  Package
     *  Packing Material
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PackingMaterial[] $packingMaterial
     */
    private $packingMaterial = [
        
    ];

    /**
     * BBIE
     *  Package. Trace_ Identifier. Identifier
     *  An identifier for use in tracing this package, such as the EPC number used in RFID.
     *  0..1
     *  Package
     *  Trace
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TraceID $traceID
     */
    private $traceID = null;

    /**
     * ASBIE
     *  Package. Contained_ Package. Package
     *  A package contained within this package.
     *  0..n
     *  Package
     *  Contained
     *  Package
     *  Package
     *  Package
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ContainedPackage[] $containedPackage
     */
    private $containedPackage = [
        
    ];

    /**
     * ASBIE
     *  Package. Containing_ Transport Equipment. Transport Equipment
     *  The piece of transport equipment containing this package.
     *  0..1
     *  Package
     *  Containing
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ContainingTransportEquipment $containingTransportEquipment
     */
    private $containingTransportEquipment = null;

    /**
     * ASBIE
     *  Package. Goods Item
     *  A goods item included in this package.
     *  0..n
     *  Package
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\GoodsItem[] $goodsItem
     */
    private $goodsItem = [
        
    ];

    /**
     * ASBIE
     *  Package. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this package.
     *  0..n
     *  Package
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
     * ASBIE
     *  Package. Delivery Unit
     *  A delivery unit within this package.
     *  0..n
     *  Package
     *  Delivery Unit
     *  Delivery Unit
     *  Delivery Unit
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\DeliveryUnit[] $deliveryUnit
     */
    private $deliveryUnit = [
        
    ];

    /**
     * ASBIE
     *  Package. Delivery
     *  The delivery of this package.
     *  0..1
     *  Package
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Delivery $delivery
     */
    private $delivery = null;

    /**
     * ASBIE
     *  Package. Pickup
     *  The pickup of this package.
     *  0..1
     *  Package
     *  Pickup
     *  Pickup
     *  Pickup
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Pickup $pickup
     */
    private $pickup = null;

    /**
     * ASBIE
     *  Package. Despatch
     *  The despatch of this package.
     *  0..1
     *  Package
     *  Despatch
     *  Despatch
     *  Despatch
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Despatch $despatch
     */
    private $despatch = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Package. Identifier
     *  An identifier for this package.
     *  0..1
     *  Package
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
     *  Package. Identifier
     *  An identifier for this package.
     *  0..1
     *  Package
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
     * Gets as quantity
     *
     * BBIE
     *  Package. Quantity
     *  The quantity of items contained in this package.
     *  0..1
     *  Package
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * BBIE
     *  Package. Quantity
     *  The quantity of items contained in this package.
     *  0..1
     *  Package
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Quantity $quantity
     * @return self
     */
    public function setQuantity(\Greenter\Ubl\Entity\CommonBasic\Quantity $quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as returnableMaterialIndicator
     *
     * BBIE
     *  Package. Returnable Material_ Indicator. Indicator
     *  An indicator that the packaging material is returnable (true) or not (false).
     *  0..1
     *  Package
     *  Returnable Material
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getReturnableMaterialIndicator()
    {
        return $this->returnableMaterialIndicator;
    }

    /**
     * Sets a new returnableMaterialIndicator
     *
     * BBIE
     *  Package. Returnable Material_ Indicator. Indicator
     *  An indicator that the packaging material is returnable (true) or not (false).
     *  0..1
     *  Package
     *  Returnable Material
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $returnableMaterialIndicator
     * @return self
     */
    public function setReturnableMaterialIndicator($returnableMaterialIndicator)
    {
        $this->returnableMaterialIndicator = $returnableMaterialIndicator;
        return $this;
    }

    /**
     * Gets as packageLevelCode
     *
     * BBIE
     *  Package. Package Level Code. Code
     *  A code signifying a level of packaging.
     *  0..1
     *  Package
     *  Package Level Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PackageLevelCode
     */
    public function getPackageLevelCode()
    {
        return $this->packageLevelCode;
    }

    /**
     * Sets a new packageLevelCode
     *
     * BBIE
     *  Package. Package Level Code. Code
     *  A code signifying a level of packaging.
     *  0..1
     *  Package
     *  Package Level Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PackageLevelCode $packageLevelCode
     * @return self
     */
    public function setPackageLevelCode(\Greenter\Ubl\Entity\CommonBasic\PackageLevelCode $packageLevelCode)
    {
        $this->packageLevelCode = $packageLevelCode;
        return $this;
    }

    /**
     * Gets as packagingTypeCode
     *
     * BBIE
     *  Package. Packaging Type Code. Code
     *  A code signifying a type of packaging.
     *  0..1
     *  Package
     *  Packaging Type Code
     *  Code
     *  Packaging Type
     *  Packaging Type_ Code. Type
     *  Package classification code
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PackagingTypeCode
     */
    public function getPackagingTypeCode()
    {
        return $this->packagingTypeCode;
    }

    /**
     * Sets a new packagingTypeCode
     *
     * BBIE
     *  Package. Packaging Type Code. Code
     *  A code signifying a type of packaging.
     *  0..1
     *  Package
     *  Packaging Type Code
     *  Code
     *  Packaging Type
     *  Packaging Type_ Code. Type
     *  Package classification code
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PackagingTypeCode $packagingTypeCode
     * @return self
     */
    public function setPackagingTypeCode(\Greenter\Ubl\Entity\CommonBasic\PackagingTypeCode $packagingTypeCode)
    {
        $this->packagingTypeCode = $packagingTypeCode;
        return $this;
    }

    /**
     * Adds as packingMaterial
     *
     * BBIE
     *  Package. Packing Material. Text
     *  Text describing the packaging material.
     *  0..n
     *  Package
     *  Packing Material
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\PackingMaterial $packingMaterial
     */
    public function addToPackingMaterial(\Greenter\Ubl\Entity\CommonBasic\PackingMaterial $packingMaterial)
    {
        $this->packingMaterial[] = $packingMaterial;
        return $this;
    }

    /**
     * isset packingMaterial
     *
     * BBIE
     *  Package. Packing Material. Text
     *  Text describing the packaging material.
     *  0..n
     *  Package
     *  Packing Material
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPackingMaterial($index)
    {
        return isset($this->packingMaterial[$index]);
    }

    /**
     * unset packingMaterial
     *
     * BBIE
     *  Package. Packing Material. Text
     *  Text describing the packaging material.
     *  0..n
     *  Package
     *  Packing Material
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPackingMaterial($index)
    {
        unset($this->packingMaterial[$index]);
    }

    /**
     * Gets as packingMaterial
     *
     * BBIE
     *  Package. Packing Material. Text
     *  Text describing the packaging material.
     *  0..n
     *  Package
     *  Packing Material
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PackingMaterial[]
     */
    public function getPackingMaterial()
    {
        return $this->packingMaterial;
    }

    /**
     * Sets a new packingMaterial
     *
     * BBIE
     *  Package. Packing Material. Text
     *  Text describing the packaging material.
     *  0..n
     *  Package
     *  Packing Material
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PackingMaterial[] $packingMaterial
     * @return self
     */
    public function setPackingMaterial(array $packingMaterial)
    {
        $this->packingMaterial = $packingMaterial;
        return $this;
    }

    /**
     * Gets as traceID
     *
     * BBIE
     *  Package. Trace_ Identifier. Identifier
     *  An identifier for use in tracing this package, such as the EPC number used in RFID.
     *  0..1
     *  Package
     *  Trace
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TraceID
     */
    public function getTraceID()
    {
        return $this->traceID;
    }

    /**
     * Sets a new traceID
     *
     * BBIE
     *  Package. Trace_ Identifier. Identifier
     *  An identifier for use in tracing this package, such as the EPC number used in RFID.
     *  0..1
     *  Package
     *  Trace
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TraceID $traceID
     * @return self
     */
    public function setTraceID(\Greenter\Ubl\Entity\CommonBasic\TraceID $traceID)
    {
        $this->traceID = $traceID;
        return $this;
    }

    /**
     * Adds as containedPackage
     *
     * ASBIE
     *  Package. Contained_ Package. Package
     *  A package contained within this package.
     *  0..n
     *  Package
     *  Contained
     *  Package
     *  Package
     *  Package
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ContainedPackage $containedPackage
     */
    public function addToContainedPackage(\Greenter\Ubl\Entity\CommonAggregateComponents\ContainedPackage $containedPackage)
    {
        $this->containedPackage[] = $containedPackage;
        return $this;
    }

    /**
     * isset containedPackage
     *
     * ASBIE
     *  Package. Contained_ Package. Package
     *  A package contained within this package.
     *  0..n
     *  Package
     *  Contained
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContainedPackage($index)
    {
        return isset($this->containedPackage[$index]);
    }

    /**
     * unset containedPackage
     *
     * ASBIE
     *  Package. Contained_ Package. Package
     *  A package contained within this package.
     *  0..n
     *  Package
     *  Contained
     *  Package
     *  Package
     *  Package
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContainedPackage($index)
    {
        unset($this->containedPackage[$index]);
    }

    /**
     * Gets as containedPackage
     *
     * ASBIE
     *  Package. Contained_ Package. Package
     *  A package contained within this package.
     *  0..n
     *  Package
     *  Contained
     *  Package
     *  Package
     *  Package
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ContainedPackage[]
     */
    public function getContainedPackage()
    {
        return $this->containedPackage;
    }

    /**
     * Sets a new containedPackage
     *
     * ASBIE
     *  Package. Contained_ Package. Package
     *  A package contained within this package.
     *  0..n
     *  Package
     *  Contained
     *  Package
     *  Package
     *  Package
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ContainedPackage[] $containedPackage
     * @return self
     */
    public function setContainedPackage(array $containedPackage)
    {
        $this->containedPackage = $containedPackage;
        return $this;
    }

    /**
     * Gets as containingTransportEquipment
     *
     * ASBIE
     *  Package. Containing_ Transport Equipment. Transport Equipment
     *  The piece of transport equipment containing this package.
     *  0..1
     *  Package
     *  Containing
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ContainingTransportEquipment
     */
    public function getContainingTransportEquipment()
    {
        return $this->containingTransportEquipment;
    }

    /**
     * Sets a new containingTransportEquipment
     *
     * ASBIE
     *  Package. Containing_ Transport Equipment. Transport Equipment
     *  The piece of transport equipment containing this package.
     *  0..1
     *  Package
     *  Containing
     *  Transport Equipment
     *  Transport Equipment
     *  Transport Equipment
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ContainingTransportEquipment $containingTransportEquipment
     * @return self
     */
    public function setContainingTransportEquipment(\Greenter\Ubl\Entity\CommonAggregateComponents\ContainingTransportEquipment $containingTransportEquipment)
    {
        $this->containingTransportEquipment = $containingTransportEquipment;
        return $this;
    }

    /**
     * Adds as goodsItem
     *
     * ASBIE
     *  Package. Goods Item
     *  A goods item included in this package.
     *  0..n
     *  Package
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\GoodsItem $goodsItem
     */
    public function addToGoodsItem(\Greenter\Ubl\Entity\CommonAggregateComponents\GoodsItem $goodsItem)
    {
        $this->goodsItem[] = $goodsItem;
        return $this;
    }

    /**
     * isset goodsItem
     *
     * ASBIE
     *  Package. Goods Item
     *  A goods item included in this package.
     *  0..n
     *  Package
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGoodsItem($index)
    {
        return isset($this->goodsItem[$index]);
    }

    /**
     * unset goodsItem
     *
     * ASBIE
     *  Package. Goods Item
     *  A goods item included in this package.
     *  0..n
     *  Package
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGoodsItem($index)
    {
        unset($this->goodsItem[$index]);
    }

    /**
     * Gets as goodsItem
     *
     * ASBIE
     *  Package. Goods Item
     *  A goods item included in this package.
     *  0..n
     *  Package
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\GoodsItem[]
     */
    public function getGoodsItem()
    {
        return $this->goodsItem;
    }

    /**
     * Sets a new goodsItem
     *
     * ASBIE
     *  Package. Goods Item
     *  A goods item included in this package.
     *  0..n
     *  Package
     *  Goods Item
     *  Goods Item
     *  Goods Item
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\GoodsItem[] $goodsItem
     * @return self
     */
    public function setGoodsItem(array $goodsItem)
    {
        $this->goodsItem = $goodsItem;
        return $this;
    }

    /**
     * Adds as measurementDimension
     *
     * ASBIE
     *  Package. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this package.
     *  0..n
     *  Package
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
     *  Package. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this package.
     *  0..n
     *  Package
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
     *  Package. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this package.
     *  0..n
     *  Package
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
     *  Package. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this package.
     *  0..n
     *  Package
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
     *  Package. Measurement_ Dimension. Dimension
     *  A measurable dimension (length, mass, weight, or volume) of this package.
     *  0..n
     *  Package
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

    /**
     * Adds as deliveryUnit
     *
     * ASBIE
     *  Package. Delivery Unit
     *  A delivery unit within this package.
     *  0..n
     *  Package
     *  Delivery Unit
     *  Delivery Unit
     *  Delivery Unit
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DeliveryUnit $deliveryUnit
     */
    public function addToDeliveryUnit(\Greenter\Ubl\Entity\CommonAggregateComponents\DeliveryUnit $deliveryUnit)
    {
        $this->deliveryUnit[] = $deliveryUnit;
        return $this;
    }

    /**
     * isset deliveryUnit
     *
     * ASBIE
     *  Package. Delivery Unit
     *  A delivery unit within this package.
     *  0..n
     *  Package
     *  Delivery Unit
     *  Delivery Unit
     *  Delivery Unit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryUnit($index)
    {
        return isset($this->deliveryUnit[$index]);
    }

    /**
     * unset deliveryUnit
     *
     * ASBIE
     *  Package. Delivery Unit
     *  A delivery unit within this package.
     *  0..n
     *  Package
     *  Delivery Unit
     *  Delivery Unit
     *  Delivery Unit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryUnit($index)
    {
        unset($this->deliveryUnit[$index]);
    }

    /**
     * Gets as deliveryUnit
     *
     * ASBIE
     *  Package. Delivery Unit
     *  A delivery unit within this package.
     *  0..n
     *  Package
     *  Delivery Unit
     *  Delivery Unit
     *  Delivery Unit
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\DeliveryUnit[]
     */
    public function getDeliveryUnit()
    {
        return $this->deliveryUnit;
    }

    /**
     * Sets a new deliveryUnit
     *
     * ASBIE
     *  Package. Delivery Unit
     *  A delivery unit within this package.
     *  0..n
     *  Package
     *  Delivery Unit
     *  Delivery Unit
     *  Delivery Unit
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DeliveryUnit[] $deliveryUnit
     * @return self
     */
    public function setDeliveryUnit(array $deliveryUnit)
    {
        $this->deliveryUnit = $deliveryUnit;
        return $this;
    }

    /**
     * Gets as delivery
     *
     * ASBIE
     *  Package. Delivery
     *  The delivery of this package.
     *  0..1
     *  Package
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Delivery
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Sets a new delivery
     *
     * ASBIE
     *  Package. Delivery
     *  The delivery of this package.
     *  0..1
     *  Package
     *  Delivery
     *  Delivery
     *  Delivery
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Delivery $delivery
     * @return self
     */
    public function setDelivery(\Greenter\Ubl\Entity\CommonAggregateComponents\Delivery $delivery)
    {
        $this->delivery = $delivery;
        return $this;
    }

    /**
     * Gets as pickup
     *
     * ASBIE
     *  Package. Pickup
     *  The pickup of this package.
     *  0..1
     *  Package
     *  Pickup
     *  Pickup
     *  Pickup
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Pickup
     */
    public function getPickup()
    {
        return $this->pickup;
    }

    /**
     * Sets a new pickup
     *
     * ASBIE
     *  Package. Pickup
     *  The pickup of this package.
     *  0..1
     *  Package
     *  Pickup
     *  Pickup
     *  Pickup
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Pickup $pickup
     * @return self
     */
    public function setPickup(\Greenter\Ubl\Entity\CommonAggregateComponents\Pickup $pickup)
    {
        $this->pickup = $pickup;
        return $this;
    }

    /**
     * Gets as despatch
     *
     * ASBIE
     *  Package. Despatch
     *  The despatch of this package.
     *  0..1
     *  Package
     *  Despatch
     *  Despatch
     *  Despatch
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Despatch
     */
    public function getDespatch()
    {
        return $this->despatch;
    }

    /**
     * Sets a new despatch
     *
     * ASBIE
     *  Package. Despatch
     *  The despatch of this package.
     *  0..1
     *  Package
     *  Despatch
     *  Despatch
     *  Despatch
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Despatch $despatch
     * @return self
     */
    public function setDespatch(\Greenter\Ubl\Entity\CommonAggregateComponents\Despatch $despatch)
    {
        $this->despatch = $despatch;
        return $this;
    }


}

