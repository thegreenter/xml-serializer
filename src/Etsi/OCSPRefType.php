<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing OCSPRefType
 *
 * 
 * XSD Type: OCSPRefType
 */
class OCSPRefType
{

    /**
     * @var \Greenter\Ubl\Entity\Etsi\OCSPIdentifierType $oCSPIdentifier
     */
    private $oCSPIdentifier = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\DigestAlgAndValueType $digestAlgAndValue
     */
    private $digestAlgAndValue = null;

    /**
     * Gets as oCSPIdentifier
     *
     * @return \Greenter\Ubl\Entity\Etsi\OCSPIdentifierType
     */
    public function getOCSPIdentifier()
    {
        return $this->oCSPIdentifier;
    }

    /**
     * Sets a new oCSPIdentifier
     *
     * @param \Greenter\Ubl\Entity\Etsi\OCSPIdentifierType $oCSPIdentifier
     * @return self
     */
    public function setOCSPIdentifier(\Greenter\Ubl\Entity\Etsi\OCSPIdentifierType $oCSPIdentifier)
    {
        $this->oCSPIdentifier = $oCSPIdentifier;
        return $this;
    }

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


}

