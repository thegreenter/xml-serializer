<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing RevocationValuesType
 *
 * 
 * XSD Type: RevocationValuesType
 */
class RevocationValuesType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType[] $cRLValues
     */
    private $cRLValues = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType[] $oCSPValues
     */
    private $oCSPValues = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\AnyType[] $otherValues
     */
    private $otherValues = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Adds as encapsulatedCRLValue
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType $encapsulatedCRLValue
     */
    public function addToCRLValues(\Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType $encapsulatedCRLValue)
    {
        $this->cRLValues[] = $encapsulatedCRLValue;
        return $this;
    }

    /**
     * isset cRLValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCRLValues($index)
    {
        return isset($this->cRLValues[$index]);
    }

    /**
     * unset cRLValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCRLValues($index)
    {
        unset($this->cRLValues[$index]);
    }

    /**
     * Gets as cRLValues
     *
     * @return \Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType[]
     */
    public function getCRLValues()
    {
        return $this->cRLValues;
    }

    /**
     * Sets a new cRLValues
     *
     * @param \Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType[] $cRLValues
     * @return self
     */
    public function setCRLValues(array $cRLValues)
    {
        $this->cRLValues = $cRLValues;
        return $this;
    }

    /**
     * Adds as encapsulatedOCSPValue
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType $encapsulatedOCSPValue
     */
    public function addToOCSPValues(\Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType $encapsulatedOCSPValue)
    {
        $this->oCSPValues[] = $encapsulatedOCSPValue;
        return $this;
    }

    /**
     * isset oCSPValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOCSPValues($index)
    {
        return isset($this->oCSPValues[$index]);
    }

    /**
     * unset oCSPValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOCSPValues($index)
    {
        unset($this->oCSPValues[$index]);
    }

    /**
     * Gets as oCSPValues
     *
     * @return \Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType[]
     */
    public function getOCSPValues()
    {
        return $this->oCSPValues;
    }

    /**
     * Sets a new oCSPValues
     *
     * @param \Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType[] $oCSPValues
     * @return self
     */
    public function setOCSPValues(array $oCSPValues)
    {
        $this->oCSPValues = $oCSPValues;
        return $this;
    }

    /**
     * Adds as otherValue
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Etsi\AnyType $otherValue
     */
    public function addToOtherValues(\Greenter\Ubl\Entity\Etsi\AnyType $otherValue)
    {
        $this->otherValues[] = $otherValue;
        return $this;
    }

    /**
     * isset otherValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherValues($index)
    {
        return isset($this->otherValues[$index]);
    }

    /**
     * unset otherValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherValues($index)
    {
        unset($this->otherValues[$index]);
    }

    /**
     * Gets as otherValues
     *
     * @return \Greenter\Ubl\Entity\Etsi\AnyType[]
     */
    public function getOtherValues()
    {
        return $this->otherValues;
    }

    /**
     * Sets a new otherValues
     *
     * @param \Greenter\Ubl\Entity\Etsi\AnyType[] $otherValues
     * @return self
     */
    public function setOtherValues(array $otherValues)
    {
        $this->otherValues = $otherValues;
        return $this;
    }


}

