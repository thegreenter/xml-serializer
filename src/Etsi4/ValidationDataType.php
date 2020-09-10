<?php

namespace Greenter\Ubl\Entity\Etsi4;

/**
 * Class representing ValidationDataType
 *
 * 
 * XSD Type: ValidationDataType
 */
class ValidationDataType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var string $uR
     */
    private $uR = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\CertificateValues $certificateValues
     */
    private $certificateValues = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\RevocationValues $revocationValues
     */
    private $revocationValues = null;

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
     * Gets as uR
     *
     * @return string
     */
    public function getUR()
    {
        return $this->uR;
    }

    /**
     * Sets a new uR
     *
     * @param string $uR
     * @return self
     */
    public function setUR($uR)
    {
        $this->uR = $uR;
        return $this;
    }

    /**
     * Gets as certificateValues
     *
     * @return \Greenter\Ubl\Entity\Etsi\CertificateValues
     */
    public function getCertificateValues()
    {
        return $this->certificateValues;
    }

    /**
     * Sets a new certificateValues
     *
     * @param \Greenter\Ubl\Entity\Etsi\CertificateValues $certificateValues
     * @return self
     */
    public function setCertificateValues(\Greenter\Ubl\Entity\Etsi\CertificateValues $certificateValues)
    {
        $this->certificateValues = $certificateValues;
        return $this;
    }

    /**
     * Gets as revocationValues
     *
     * @return \Greenter\Ubl\Entity\Etsi\RevocationValues
     */
    public function getRevocationValues()
    {
        return $this->revocationValues;
    }

    /**
     * Sets a new revocationValues
     *
     * @param \Greenter\Ubl\Entity\Etsi\RevocationValues $revocationValues
     * @return self
     */
    public function setRevocationValues(\Greenter\Ubl\Entity\Etsi\RevocationValues $revocationValues)
    {
        $this->revocationValues = $revocationValues;
        return $this;
    }


}

