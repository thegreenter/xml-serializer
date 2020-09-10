<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing CRLRefType
 *
 * 
 * XSD Type: CRLRefType
 */
class CRLRefType
{

    /**
     * @var \Greenter\Ubl\Entity\Etsi\DigestAlgAndValueType $digestAlgAndValue
     */
    private $digestAlgAndValue = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\CRLIdentifierType $cRLIdentifier
     */
    private $cRLIdentifier = null;

    /**
     * Gets as digestAlgAndValue
     *
     * @return \Greenter\Ubl\Entity\Etsi\DigestAlgAndValueType
     */
    public function getDigestAlgAndValue()
    {
        return $this->digestAlgAndValue;
    }

    /**
     * Sets a new digestAlgAndValue
     *
     * @param \Greenter\Ubl\Entity\Etsi\DigestAlgAndValueType $digestAlgAndValue
     * @return self
     */
    public function setDigestAlgAndValue(\Greenter\Ubl\Entity\Etsi\DigestAlgAndValueType $digestAlgAndValue)
    {
        $this->digestAlgAndValue = $digestAlgAndValue;
        return $this;
    }

    /**
     * Gets as cRLIdentifier
     *
     * @return \Greenter\Ubl\Entity\Etsi\CRLIdentifierType
     */
    public function getCRLIdentifier()
    {
        return $this->cRLIdentifier;
    }

    /**
     * Sets a new cRLIdentifier
     *
     * @param \Greenter\Ubl\Entity\Etsi\CRLIdentifierType $cRLIdentifier
     * @return self
     */
    public function setCRLIdentifier(\Greenter\Ubl\Entity\Etsi\CRLIdentifierType $cRLIdentifier)
    {
        $this->cRLIdentifier = $cRLIdentifier;
        return $this;
    }


}

