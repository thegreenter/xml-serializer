<?php

namespace Greenter\Ubl\Entity\Dsig;

/**
 * Class representing SignatureType
 *
 * 
 * XSD Type: SignatureType
 */
class SignatureType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Greenter\Ubl\Entity\Dsig\SignedInfo $signedInfo
     */
    private $signedInfo = null;

    /**
     * @var \Greenter\Ubl\Entity\Dsig\SignatureValue $signatureValue
     */
    private $signatureValue = null;

    /**
     * @var \Greenter\Ubl\Entity\Dsig\KeyInfo $keyInfo
     */
    private $keyInfo = null;

    /**
     * @var \Greenter\Ubl\Entity\Dsig\ObjectXsd[] $object
     */
    private $object = [
        
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
     * Gets as signedInfo
     *
     * @return \Greenter\Ubl\Entity\Dsig\SignedInfo
     */
    public function getSignedInfo()
    {
        return $this->signedInfo;
    }

    /**
     * Sets a new signedInfo
     *
     * @param \Greenter\Ubl\Entity\Dsig\SignedInfo $signedInfo
     * @return self
     */
    public function setSignedInfo(\Greenter\Ubl\Entity\Dsig\SignedInfo $signedInfo)
    {
        $this->signedInfo = $signedInfo;
        return $this;
    }

    /**
     * Gets as signatureValue
     *
     * @return \Greenter\Ubl\Entity\Dsig\SignatureValue
     */
    public function getSignatureValue()
    {
        return $this->signatureValue;
    }

    /**
     * Sets a new signatureValue
     *
     * @param \Greenter\Ubl\Entity\Dsig\SignatureValue $signatureValue
     * @return self
     */
    public function setSignatureValue(\Greenter\Ubl\Entity\Dsig\SignatureValue $signatureValue)
    {
        $this->signatureValue = $signatureValue;
        return $this;
    }

    /**
     * Gets as keyInfo
     *
     * @return \Greenter\Ubl\Entity\Dsig\KeyInfo
     */
    public function getKeyInfo()
    {
        return $this->keyInfo;
    }

    /**
     * Sets a new keyInfo
     *
     * @param \Greenter\Ubl\Entity\Dsig\KeyInfo $keyInfo
     * @return self
     */
    public function setKeyInfo(\Greenter\Ubl\Entity\Dsig\KeyInfo $keyInfo)
    {
        $this->keyInfo = $keyInfo;
        return $this;
    }

    /**
     * Adds as object
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Dsig\ObjectXsd $object
     */
    public function addToObject(\Greenter\Ubl\Entity\Dsig\ObjectXsd $object)
    {
        $this->object[] = $object;
        return $this;
    }

    /**
     * isset object
     *
     * @param int|string $index
     * @return bool
     */
    public function issetObject($index)
    {
        return isset($this->object[$index]);
    }

    /**
     * unset object
     *
     * @param int|string $index
     * @return void
     */
    public function unsetObject($index)
    {
        unset($this->object[$index]);
    }

    /**
     * Gets as object
     *
     * @return \Greenter\Ubl\Entity\Dsig\ObjectXsd[]
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Sets a new object
     *
     * @param \Greenter\Ubl\Entity\Dsig\ObjectXsd[] $object
     * @return self
     */
    public function setObject(array $object)
    {
        $this->object = $object;
        return $this;
    }


}

