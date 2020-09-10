<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing CertIDType
 *
 * 
 * XSD Type: CertIDType
 */
class CertIDType
{

    /**
     * @var string $uRI
     */
    private $uRI = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\DigestAlgAndValueType $certDigest
     */
    private $certDigest = null;

    /**
     * @var \Greenter\Ubl\Entity\Dsig\X509IssuerSerialType $issuerSerial
     */
    private $issuerSerial = null;

    /**
     * Gets as uRI
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as certDigest
     *
     * @return \Greenter\Ubl\Entity\Etsi\DigestAlgAndValueType
     */
    public function getCertDigest()
    {
        return $this->certDigest;
    }

    /**
     * Sets a new certDigest
     *
     * @param \Greenter\Ubl\Entity\Etsi\DigestAlgAndValueType $certDigest
     * @return self
     */
    public function setCertDigest(\Greenter\Ubl\Entity\Etsi\DigestAlgAndValueType $certDigest)
    {
        $this->certDigest = $certDigest;
        return $this;
    }

    /**
     * Gets as issuerSerial
     *
     * @return \Greenter\Ubl\Entity\Dsig\X509IssuerSerialType
     */
    public function getIssuerSerial()
    {
        return $this->issuerSerial;
    }

    /**
     * Sets a new issuerSerial
     *
     * @param \Greenter\Ubl\Entity\Dsig\X509IssuerSerialType $issuerSerial
     * @return self
     */
    public function setIssuerSerial(\Greenter\Ubl\Entity\Dsig\X509IssuerSerialType $issuerSerial)
    {
        $this->issuerSerial = $issuerSerial;
        return $this;
    }


}

