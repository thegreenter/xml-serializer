<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing GenericTimeStampType
 *
 * 
 * XSD Type: GenericTimeStampType
 */
class GenericTimeStampType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\IncludeXsd[] $include
     */
    private $include = [
        
    ];

    /**
     * @var \Greenter\Ubl\Entity\Etsi\ReferenceInfo[] $referenceInfo
     */
    private $referenceInfo = [
        
    ];

    /**
     * @var \Greenter\Ubl\Entity\Dsig\CanonicalizationMethod $canonicalizationMethod
     */
    private $canonicalizationMethod = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType[] $encapsulatedTimeStamp
     */
    private $encapsulatedTimeStamp = [
        
    ];

    /**
     * @var \Greenter\Ubl\Entity\Etsi\AnyType[] $xMLTimeStamp
     */
    private $xMLTimeStamp = [
        
    ];

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
     * Adds as include
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Etsi\IncludeXsd $include
     */
    public function addToInclude(\Greenter\Ubl\Entity\Etsi\IncludeXsd $include)
    {
        $this->include[] = $include;
        return $this;
    }

    /**
     * isset include
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInclude($index)
    {
        return isset($this->include[$index]);
    }

    /**
     * unset include
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInclude($index)
    {
        unset($this->include[$index]);
    }

    /**
     * Gets as include
     *
     * @return \Greenter\Ubl\Entity\Etsi\IncludeXsd[]
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * Sets a new include
     *
     * @param \Greenter\Ubl\Entity\Etsi\IncludeXsd[] $include
     * @return self
     */
    public function setInclude(array $include)
    {
        $this->include = $include;
        return $this;
    }

    /**
     * Adds as referenceInfo
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Etsi\ReferenceInfo $referenceInfo
     */
    public function addToReferenceInfo(\Greenter\Ubl\Entity\Etsi\ReferenceInfo $referenceInfo)
    {
        $this->referenceInfo[] = $referenceInfo;
        return $this;
    }

    /**
     * isset referenceInfo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReferenceInfo($index)
    {
        return isset($this->referenceInfo[$index]);
    }

    /**
     * unset referenceInfo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReferenceInfo($index)
    {
        unset($this->referenceInfo[$index]);
    }

    /**
     * Gets as referenceInfo
     *
     * @return \Greenter\Ubl\Entity\Etsi\ReferenceInfo[]
     */
    public function getReferenceInfo()
    {
        return $this->referenceInfo;
    }

    /**
     * Sets a new referenceInfo
     *
     * @param \Greenter\Ubl\Entity\Etsi\ReferenceInfo[] $referenceInfo
     * @return self
     */
    public function setReferenceInfo(array $referenceInfo)
    {
        $this->referenceInfo = $referenceInfo;
        return $this;
    }

    /**
     * Gets as canonicalizationMethod
     *
     * @return \Greenter\Ubl\Entity\Dsig\CanonicalizationMethod
     */
    public function getCanonicalizationMethod()
    {
        return $this->canonicalizationMethod;
    }

    /**
     * Sets a new canonicalizationMethod
     *
     * @param \Greenter\Ubl\Entity\Dsig\CanonicalizationMethod $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(\Greenter\Ubl\Entity\Dsig\CanonicalizationMethod $canonicalizationMethod)
    {
        $this->canonicalizationMethod = $canonicalizationMethod;
        return $this;
    }

    /**
     * Adds as encapsulatedTimeStamp
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType $encapsulatedTimeStamp
     */
    public function addToEncapsulatedTimeStamp(\Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType $encapsulatedTimeStamp)
    {
        $this->encapsulatedTimeStamp[] = $encapsulatedTimeStamp;
        return $this;
    }

    /**
     * isset encapsulatedTimeStamp
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEncapsulatedTimeStamp($index)
    {
        return isset($this->encapsulatedTimeStamp[$index]);
    }

    /**
     * unset encapsulatedTimeStamp
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEncapsulatedTimeStamp($index)
    {
        unset($this->encapsulatedTimeStamp[$index]);
    }

    /**
     * Gets as encapsulatedTimeStamp
     *
     * @return \Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType[]
     */
    public function getEncapsulatedTimeStamp()
    {
        return $this->encapsulatedTimeStamp;
    }

    /**
     * Sets a new encapsulatedTimeStamp
     *
     * @param \Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType[] $encapsulatedTimeStamp
     * @return self
     */
    public function setEncapsulatedTimeStamp(array $encapsulatedTimeStamp)
    {
        $this->encapsulatedTimeStamp = $encapsulatedTimeStamp;
        return $this;
    }

    /**
     * Adds as xMLTimeStamp
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Etsi\AnyType $xMLTimeStamp
     */
    public function addToXMLTimeStamp(\Greenter\Ubl\Entity\Etsi\AnyType $xMLTimeStamp)
    {
        $this->xMLTimeStamp[] = $xMLTimeStamp;
        return $this;
    }

    /**
     * isset xMLTimeStamp
     *
     * @param int|string $index
     * @return bool
     */
    public function issetXMLTimeStamp($index)
    {
        return isset($this->xMLTimeStamp[$index]);
    }

    /**
     * unset xMLTimeStamp
     *
     * @param int|string $index
     * @return void
     */
    public function unsetXMLTimeStamp($index)
    {
        unset($this->xMLTimeStamp[$index]);
    }

    /**
     * Gets as xMLTimeStamp
     *
     * @return \Greenter\Ubl\Entity\Etsi\AnyType[]
     */
    public function getXMLTimeStamp()
    {
        return $this->xMLTimeStamp;
    }

    /**
     * Sets a new xMLTimeStamp
     *
     * @param \Greenter\Ubl\Entity\Etsi\AnyType[] $xMLTimeStamp
     * @return self
     */
    public function setXMLTimeStamp(array $xMLTimeStamp)
    {
        $this->xMLTimeStamp = $xMLTimeStamp;
        return $this;
    }


}

