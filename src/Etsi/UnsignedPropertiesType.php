<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing UnsignedPropertiesType
 *
 * 
 * XSD Type: UnsignedPropertiesType
 */
class UnsignedPropertiesType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\UnsignedSignaturePropertiesType $unsignedSignatureProperties
     */
    private $unsignedSignatureProperties = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\UnsignedDataObjectPropertiesType $unsignedDataObjectProperties
     */
    private $unsignedDataObjectProperties = null;

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
     * Gets as unsignedSignatureProperties
     *
     * @return \Greenter\Ubl\Entity\Etsi\UnsignedSignaturePropertiesType
     */
    public function getUnsignedSignatureProperties()
    {
        return $this->unsignedSignatureProperties;
    }

    /**
     * Sets a new unsignedSignatureProperties
     *
     * @param \Greenter\Ubl\Entity\Etsi\UnsignedSignaturePropertiesType $unsignedSignatureProperties
     * @return self
     */
    public function setUnsignedSignatureProperties(\Greenter\Ubl\Entity\Etsi\UnsignedSignaturePropertiesType $unsignedSignatureProperties)
    {
        $this->unsignedSignatureProperties = $unsignedSignatureProperties;
        return $this;
    }

    /**
     * Gets as unsignedDataObjectProperties
     *
     * @return \Greenter\Ubl\Entity\Etsi\UnsignedDataObjectPropertiesType
     */
    public function getUnsignedDataObjectProperties()
    {
        return $this->unsignedDataObjectProperties;
    }

    /**
     * Sets a new unsignedDataObjectProperties
     *
     * @param \Greenter\Ubl\Entity\Etsi\UnsignedDataObjectPropertiesType $unsignedDataObjectProperties
     * @return self
     */
    public function setUnsignedDataObjectProperties(\Greenter\Ubl\Entity\Etsi\UnsignedDataObjectPropertiesType $unsignedDataObjectProperties)
    {
        $this->unsignedDataObjectProperties = $unsignedDataObjectProperties;
        return $this;
    }


}

