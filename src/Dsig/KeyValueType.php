<?php

namespace Greenter\Ubl\Entity\Dsig;

/**
 * Class representing KeyValueType
 *
 * 
 * XSD Type: KeyValueType
 */
class KeyValueType
{

    /**
     * @var \Greenter\Ubl\Entity\Dsig\DSAKeyValue $dSAKeyValue
     */
    private $dSAKeyValue = null;

    /**
     * @var \Greenter\Ubl\Entity\Dsig\RSAKeyValue $rSAKeyValue
     */
    private $rSAKeyValue = null;

    /**
     * Gets as dSAKeyValue
     *
     * @return \Greenter\Ubl\Entity\Dsig\DSAKeyValue
     */
    public function getDSAKeyValue()
    {
        return $this->dSAKeyValue;
    }

    /**
     * Sets a new dSAKeyValue
     *
     * @param \Greenter\Ubl\Entity\Dsig\DSAKeyValue $dSAKeyValue
     * @return self
     */
    public function setDSAKeyValue(\Greenter\Ubl\Entity\Dsig\DSAKeyValue $dSAKeyValue)
    {
        $this->dSAKeyValue = $dSAKeyValue;
        return $this;
    }

    /**
     * Gets as rSAKeyValue
     *
     * @return \Greenter\Ubl\Entity\Dsig\RSAKeyValue
     */
    public function getRSAKeyValue()
    {
        return $this->rSAKeyValue;
    }

    /**
     * Sets a new rSAKeyValue
     *
     * @param \Greenter\Ubl\Entity\Dsig\RSAKeyValue $rSAKeyValue
     * @return self
     */
    public function setRSAKeyValue(\Greenter\Ubl\Entity\Dsig\RSAKeyValue $rSAKeyValue)
    {
        $this->rSAKeyValue = $rSAKeyValue;
        return $this;
    }


}

