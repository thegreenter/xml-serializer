<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing SignedPropertiesType
 *
 * 
 * XSD Type: SignedPropertiesType
 */
class SignedPropertiesType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\SignedSignaturePropertiesType $signedSignatureProperties
     */
    private $signedSignatureProperties = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\SignedDataObjectPropertiesType $signedDataObjectProperties
     */
    private $signedDataObjectProperties = null;

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
     * Gets as signedSignatureProperties
     *
     * @return \Greenter\Ubl\Entity\Etsi\SignedSignaturePropertiesType
     */
    public function getSignedSignatureProperties()
    {
        return $this->signedSignatureProperties;
    }

    /**
     * Sets a new signedSignatureProperties
     *
     * @param \Greenter\Ubl\Entity\Etsi\SignedSignaturePropertiesType $signedSignatureProperties
     * @return self
     */
    public function setSignedSignatureProperties(\Greenter\Ubl\Entity\Etsi\SignedSignaturePropertiesType $signedSignatureProperties)
    {
        $this->signedSignatureProperties = $signedSignatureProperties;
        return $this;
    }

    /**
     * Gets as signedDataObjectProperties
     *
     * @return \Greenter\Ubl\Entity\Etsi\SignedDataObjectPropertiesType
     */
    public function getSignedDataObjectProperties()
    {
        return $this->signedDataObjectProperties;
    }

    /**
     * Sets a new signedDataObjectProperties
     *
     * @param \Greenter\Ubl\Entity\Etsi\SignedDataObjectPropertiesType $signedDataObjectProperties
     * @return self
     */
    public function setSignedDataObjectProperties(\Greenter\Ubl\Entity\Etsi\SignedDataObjectPropertiesType $signedDataObjectProperties)
    {
        $this->signedDataObjectProperties = $signedDataObjectProperties;
        return $this;
    }


}

