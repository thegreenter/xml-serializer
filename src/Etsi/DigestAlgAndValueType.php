<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing DigestAlgAndValueType
 *
 * 
 * XSD Type: DigestAlgAndValueType
 */
class DigestAlgAndValueType
{

    /**
     * @var \Greenter\Ubl\Entity\Dsig\DigestMethod $digestMethod
     */
    private $digestMethod = null;

    /**
     * @var mixed $digestValue
     */
    private $digestValue = null;

    /**
     * Gets as digestMethod
     *
     * @return \Greenter\Ubl\Entity\Dsig\DigestMethod
     */
    public function getDigestMethod()
    {
        return $this->digestMethod;
    }

    /**
     * Sets a new digestMethod
     *
     * @param \Greenter\Ubl\Entity\Dsig\DigestMethod $digestMethod
     * @return self
     */
    public function setDigestMethod(\Greenter\Ubl\Entity\Dsig\DigestMethod $digestMethod)
    {
        $this->digestMethod = $digestMethod;
        return $this;
    }

    /**
     * Gets as digestValue
     *
     * @return mixed
     */
    public function getDigestValue()
    {
        return $this->digestValue;
    }

    /**
     * Sets a new digestValue
     *
     * @param mixed $digestValue
     * @return self
     */
    public function setDigestValue($digestValue)
    {
        $this->digestValue = $digestValue;
        return $this;
    }


}

