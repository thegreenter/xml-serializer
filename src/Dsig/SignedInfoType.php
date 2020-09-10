<?php

namespace Greenter\Ubl\Entity\Dsig;

/**
 * Class representing SignedInfoType
 *
 * 
 * XSD Type: SignedInfoType
 */
class SignedInfoType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Greenter\Ubl\Entity\Dsig\CanonicalizationMethod $canonicalizationMethod
     */
    private $canonicalizationMethod = null;

    /**
     * @var \Greenter\Ubl\Entity\Dsig\SignatureMethod $signatureMethod
     */
    private $signatureMethod = null;

    /**
     * @var \Greenter\Ubl\Entity\Dsig\Reference[] $reference
     */
    private $reference = [
        
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
     * Gets as signatureMethod
     *
     * @return \Greenter\Ubl\Entity\Dsig\SignatureMethod
     */
    public function getSignatureMethod()
    {
        return $this->signatureMethod;
    }

    /**
     * Sets a new signatureMethod
     *
     * @param \Greenter\Ubl\Entity\Dsig\SignatureMethod $signatureMethod
     * @return self
     */
    public function setSignatureMethod(\Greenter\Ubl\Entity\Dsig\SignatureMethod $signatureMethod)
    {
        $this->signatureMethod = $signatureMethod;
        return $this;
    }

    /**
     * Adds as reference
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Dsig\Reference $reference
     */
    public function addToReference(\Greenter\Ubl\Entity\Dsig\Reference $reference)
    {
        $this->reference[] = $reference;
        return $this;
    }

    /**
     * isset reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReference($index)
    {
        return isset($this->reference[$index]);
    }

    /**
     * unset reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReference($index)
    {
        unset($this->reference[$index]);
    }

    /**
     * Gets as reference
     *
     * @return \Greenter\Ubl\Entity\Dsig\Reference[]
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param \Greenter\Ubl\Entity\Dsig\Reference[] $reference
     * @return self
     */
    public function setReference(array $reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

