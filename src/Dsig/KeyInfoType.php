<?php

namespace Greenter\Ubl\Entity\Dsig;

/**
 * Class representing KeyInfoType
 *
 * 
 * XSD Type: KeyInfoType
 */
class KeyInfoType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string[] $keyName
     */
    private $keyName = [
        
    ];

    /**
     * @var \Greenter\Ubl\Entity\Dsig\KeyValue[] $keyValue
     */
    private $keyValue = [
        
    ];

    /**
     * @var \Greenter\Ubl\Entity\Dsig\RetrievalMethod[] $retrievalMethod
     */
    private $retrievalMethod = [
        
    ];

    /**
     * @var \Greenter\Ubl\Entity\Dsig\X509Data[] $x509Data
     */
    private $x509Data = [
        
    ];

    /**
     * @var \Greenter\Ubl\Entity\Dsig\PGPData[] $pGPData
     */
    private $pGPData = [
        
    ];

    /**
     * @var mixed[] $sPKIData
     */
    private $sPKIData = null;

    /**
     * @var string[] $mgmtData
     */
    private $mgmtData = [
        
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
     * Adds as keyName
     *
     * @return self
     * @param string $keyName
     */
    public function addToKeyName($keyName)
    {
        $this->keyName[] = $keyName;
        return $this;
    }

    /**
     * isset keyName
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKeyName($index)
    {
        return isset($this->keyName[$index]);
    }

    /**
     * unset keyName
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKeyName($index)
    {
        unset($this->keyName[$index]);
    }

    /**
     * Gets as keyName
     *
     * @return string[]
     */
    public function getKeyName()
    {
        return $this->keyName;
    }

    /**
     * Sets a new keyName
     *
     * @param string $keyName
     * @return self
     */
    public function setKeyName(array $keyName)
    {
        $this->keyName = $keyName;
        return $this;
    }

    /**
     * Adds as keyValue
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Dsig\KeyValue $keyValue
     */
    public function addToKeyValue(\Greenter\Ubl\Entity\Dsig\KeyValue $keyValue)
    {
        $this->keyValue[] = $keyValue;
        return $this;
    }

    /**
     * isset keyValue
     *
     * @param int|string $index
     * @return bool
     */
    public function issetKeyValue($index)
    {
        return isset($this->keyValue[$index]);
    }

    /**
     * unset keyValue
     *
     * @param int|string $index
     * @return void
     */
    public function unsetKeyValue($index)
    {
        unset($this->keyValue[$index]);
    }

    /**
     * Gets as keyValue
     *
     * @return \Greenter\Ubl\Entity\Dsig\KeyValue[]
     */
    public function getKeyValue()
    {
        return $this->keyValue;
    }

    /**
     * Sets a new keyValue
     *
     * @param \Greenter\Ubl\Entity\Dsig\KeyValue[] $keyValue
     * @return self
     */
    public function setKeyValue(array $keyValue)
    {
        $this->keyValue = $keyValue;
        return $this;
    }

    /**
     * Adds as retrievalMethod
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Dsig\RetrievalMethod $retrievalMethod
     */
    public function addToRetrievalMethod(\Greenter\Ubl\Entity\Dsig\RetrievalMethod $retrievalMethod)
    {
        $this->retrievalMethod[] = $retrievalMethod;
        return $this;
    }

    /**
     * isset retrievalMethod
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRetrievalMethod($index)
    {
        return isset($this->retrievalMethod[$index]);
    }

    /**
     * unset retrievalMethod
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRetrievalMethod($index)
    {
        unset($this->retrievalMethod[$index]);
    }

    /**
     * Gets as retrievalMethod
     *
     * @return \Greenter\Ubl\Entity\Dsig\RetrievalMethod[]
     */
    public function getRetrievalMethod()
    {
        return $this->retrievalMethod;
    }

    /**
     * Sets a new retrievalMethod
     *
     * @param \Greenter\Ubl\Entity\Dsig\RetrievalMethod[] $retrievalMethod
     * @return self
     */
    public function setRetrievalMethod(array $retrievalMethod)
    {
        $this->retrievalMethod = $retrievalMethod;
        return $this;
    }

    /**
     * Adds as x509Data
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Dsig\X509Data $x509Data
     */
    public function addToX509Data(\Greenter\Ubl\Entity\Dsig\X509Data $x509Data)
    {
        $this->x509Data[] = $x509Data;
        return $this;
    }

    /**
     * isset x509Data
     *
     * @param int|string $index
     * @return bool
     */
    public function issetX509Data($index)
    {
        return isset($this->x509Data[$index]);
    }

    /**
     * unset x509Data
     *
     * @param int|string $index
     * @return void
     */
    public function unsetX509Data($index)
    {
        unset($this->x509Data[$index]);
    }

    /**
     * Gets as x509Data
     *
     * @return \Greenter\Ubl\Entity\Dsig\X509Data[]
     */
    public function getX509Data()
    {
        return $this->x509Data;
    }

    /**
     * Sets a new x509Data
     *
     * @param \Greenter\Ubl\Entity\Dsig\X509Data[] $x509Data
     * @return self
     */
    public function setX509Data(array $x509Data)
    {
        $this->x509Data = $x509Data;
        return $this;
    }

    /**
     * Adds as pGPData
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Dsig\PGPData $pGPData
     */
    public function addToPGPData(\Greenter\Ubl\Entity\Dsig\PGPData $pGPData)
    {
        $this->pGPData[] = $pGPData;
        return $this;
    }

    /**
     * isset pGPData
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPGPData($index)
    {
        return isset($this->pGPData[$index]);
    }

    /**
     * unset pGPData
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPGPData($index)
    {
        unset($this->pGPData[$index]);
    }

    /**
     * Gets as pGPData
     *
     * @return \Greenter\Ubl\Entity\Dsig\PGPData[]
     */
    public function getPGPData()
    {
        return $this->pGPData;
    }

    /**
     * Sets a new pGPData
     *
     * @param \Greenter\Ubl\Entity\Dsig\PGPData[] $pGPData
     * @return self
     */
    public function setPGPData(array $pGPData)
    {
        $this->pGPData = $pGPData;
        return $this;
    }

    /**
     * Adds as sPKISexp
     *
     * @return self
     * @param mixed $sPKISexp
     */
    public function addToSPKIData($sPKISexp)
    {
        $this->sPKIData[] = $sPKISexp;
        return $this;
    }

    /**
     * isset sPKIData
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSPKIData($index)
    {
        return isset($this->sPKIData[$index]);
    }

    /**
     * unset sPKIData
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSPKIData($index)
    {
        unset($this->sPKIData[$index]);
    }

    /**
     * Gets as sPKIData
     *
     * @return mixed[]
     */
    public function getSPKIData()
    {
        return $this->sPKIData;
    }

    /**
     * Sets a new sPKIData
     *
     * @param mixed $sPKIData
     * @return self
     */
    public function setSPKIData(array $sPKIData)
    {
        $this->sPKIData = $sPKIData;
        return $this;
    }

    /**
     * Adds as mgmtData
     *
     * @return self
     * @param string $mgmtData
     */
    public function addToMgmtData($mgmtData)
    {
        $this->mgmtData[] = $mgmtData;
        return $this;
    }

    /**
     * isset mgmtData
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMgmtData($index)
    {
        return isset($this->mgmtData[$index]);
    }

    /**
     * unset mgmtData
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMgmtData($index)
    {
        unset($this->mgmtData[$index]);
    }

    /**
     * Gets as mgmtData
     *
     * @return string[]
     */
    public function getMgmtData()
    {
        return $this->mgmtData;
    }

    /**
     * Sets a new mgmtData
     *
     * @param string $mgmtData
     * @return self
     */
    public function setMgmtData(array $mgmtData)
    {
        $this->mgmtData = $mgmtData;
        return $this;
    }


}

