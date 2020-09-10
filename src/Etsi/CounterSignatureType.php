<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing CounterSignatureType
 *
 * 
 * XSD Type: CounterSignatureType
 */
class CounterSignatureType
{

    /**
     * @var \Greenter\Ubl\Entity\Dsig\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as signature
     *
     * @return \Greenter\Ubl\Entity\Dsig\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \Greenter\Ubl\Entity\Dsig\Signature $signature
     * @return self
     */
    public function setSignature(\Greenter\Ubl\Entity\Dsig\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

