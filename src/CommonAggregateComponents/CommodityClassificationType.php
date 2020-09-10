<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing CommodityClassificationType
 *
 * ABIE
 *  Commodity Classification. Details
 *  A class to describe the classification of a commodity.
 *  Commodity Classification
 * XSD Type: CommodityClassificationType
 */
class CommodityClassificationType
{

    /**
     * BBIE
     *  Commodity Classification. Nature Code. Code
     *  A code defined by a specific maintenance agency signifying the high-level nature of the commodity.
     *  0..1
     *  Commodity Classification
     *  Nature Code
     *  Code
     *  Code. Type
     *  wooden products
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\NatureCode $natureCode
     */
    private $natureCode = null;

    /**
     * BBIE
     *  Commodity Classification. Cargo Type Code. Code
     *  A mutually agreed code signifying the type of cargo for purposes of commodity classification.
     *  0..1
     *  Commodity Classification
     *  Cargo Type Code
     *  Code
     *  Code. Type
     *  Refrigerated
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\CargoTypeCode $cargoTypeCode
     */
    private $cargoTypeCode = null;

    /**
     * BBIE
     *  Commodity Classification. Commodity Code. Code
     *  The harmonized international commodity code for cross border and regulatory (customs and trade statistics) purposes.
     *  0..1
     *  Commodity Classification
     *  Commodity Code
     *  Code
     *  Code. Type
     *  Harmonized Code
     *  1102222883
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\CommodityCode $commodityCode
     */
    private $commodityCode = null;

    /**
     * BBIE
     *  Commodity Classification. Item Classification Code. Code
     *  A code signifying the trade classification of the commodity.
     *  0..1
     *  Commodity Classification
     *  Item Classification Code
     *  Code
     *  Code. Type
     *  UN/SPSC Code
     *  3440234
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ItemClassificationCode $itemClassificationCode
     */
    private $itemClassificationCode = null;

    /**
     * Gets as natureCode
     *
     * BBIE
     *  Commodity Classification. Nature Code. Code
     *  A code defined by a specific maintenance agency signifying the high-level nature of the commodity.
     *  0..1
     *  Commodity Classification
     *  Nature Code
     *  Code
     *  Code. Type
     *  wooden products
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\NatureCode
     */
    public function getNatureCode()
    {
        return $this->natureCode;
    }

    /**
     * Sets a new natureCode
     *
     * BBIE
     *  Commodity Classification. Nature Code. Code
     *  A code defined by a specific maintenance agency signifying the high-level nature of the commodity.
     *  0..1
     *  Commodity Classification
     *  Nature Code
     *  Code
     *  Code. Type
     *  wooden products
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\NatureCode $natureCode
     * @return self
     */
    public function setNatureCode(\Greenter\Ubl\Entity\CommonBasic\NatureCode $natureCode)
    {
        $this->natureCode = $natureCode;
        return $this;
    }

    /**
     * Gets as cargoTypeCode
     *
     * BBIE
     *  Commodity Classification. Cargo Type Code. Code
     *  A mutually agreed code signifying the type of cargo for purposes of commodity classification.
     *  0..1
     *  Commodity Classification
     *  Cargo Type Code
     *  Code
     *  Code. Type
     *  Refrigerated
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\CargoTypeCode
     */
    public function getCargoTypeCode()
    {
        return $this->cargoTypeCode;
    }

    /**
     * Sets a new cargoTypeCode
     *
     * BBIE
     *  Commodity Classification. Cargo Type Code. Code
     *  A mutually agreed code signifying the type of cargo for purposes of commodity classification.
     *  0..1
     *  Commodity Classification
     *  Cargo Type Code
     *  Code
     *  Code. Type
     *  Refrigerated
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\CargoTypeCode $cargoTypeCode
     * @return self
     */
    public function setCargoTypeCode(\Greenter\Ubl\Entity\CommonBasic\CargoTypeCode $cargoTypeCode)
    {
        $this->cargoTypeCode = $cargoTypeCode;
        return $this;
    }

    /**
     * Gets as commodityCode
     *
     * BBIE
     *  Commodity Classification. Commodity Code. Code
     *  The harmonized international commodity code for cross border and regulatory (customs and trade statistics) purposes.
     *  0..1
     *  Commodity Classification
     *  Commodity Code
     *  Code
     *  Code. Type
     *  Harmonized Code
     *  1102222883
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\CommodityCode
     */
    public function getCommodityCode()
    {
        return $this->commodityCode;
    }

    /**
     * Sets a new commodityCode
     *
     * BBIE
     *  Commodity Classification. Commodity Code. Code
     *  The harmonized international commodity code for cross border and regulatory (customs and trade statistics) purposes.
     *  0..1
     *  Commodity Classification
     *  Commodity Code
     *  Code
     *  Code. Type
     *  Harmonized Code
     *  1102222883
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\CommodityCode $commodityCode
     * @return self
     */
    public function setCommodityCode(\Greenter\Ubl\Entity\CommonBasic\CommodityCode $commodityCode)
    {
        $this->commodityCode = $commodityCode;
        return $this;
    }

    /**
     * Gets as itemClassificationCode
     *
     * BBIE
     *  Commodity Classification. Item Classification Code. Code
     *  A code signifying the trade classification of the commodity.
     *  0..1
     *  Commodity Classification
     *  Item Classification Code
     *  Code
     *  Code. Type
     *  UN/SPSC Code
     *  3440234
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ItemClassificationCode
     */
    public function getItemClassificationCode()
    {
        return $this->itemClassificationCode;
    }

    /**
     * Sets a new itemClassificationCode
     *
     * BBIE
     *  Commodity Classification. Item Classification Code. Code
     *  A code signifying the trade classification of the commodity.
     *  0..1
     *  Commodity Classification
     *  Item Classification Code
     *  Code
     *  Code. Type
     *  UN/SPSC Code
     *  3440234
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ItemClassificationCode $itemClassificationCode
     * @return self
     */
    public function setItemClassificationCode(\Greenter\Ubl\Entity\CommonBasic\ItemClassificationCode $itemClassificationCode)
    {
        $this->itemClassificationCode = $itemClassificationCode;
        return $this;
    }


}

