<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing QualifyingPropertiesType
 *
 * 
 * XSD Type: QualifyingPropertiesType
 */
class QualifyingPropertiesType
{

    /**
     * @var string $target
     */
    private $target = null;

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\SignedPropertiesType $signedProperties
     */
    private $signedProperties = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\UnsignedPropertiesType $unsignedProperties
     */
    private $unsignedProperties = null;

    /**
     * Gets as target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * @param string $target
     * @return self
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }

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
     * Gets as signedProperties
     *
     * @return \Greenter\Ubl\Entity\Etsi\SignedPropertiesType
     */
    public function getSignedProperties()
    {
        return $this->signedProperties;
    }

    /**
     * Sets a new signedProperties
     *
     * @param \Greenter\Ubl\Entity\Etsi\SignedPropertiesType $signedProperties
     * @return self
     */
    public function setSignedProperties(\Greenter\Ubl\Entity\Etsi\SignedPropertiesType $signedProperties)
    {
        $this->signedProperties = $signedProperties;
        return $this;
    }

    /**
     * Gets as unsignedProperties
     *
     * @return \Greenter\Ubl\Entity\Etsi\UnsignedPropertiesType
     */
    public function getUnsignedProperties()
    {
        return $this->unsignedProperties;
    }

    /**
     * Sets a new unsignedProperties
     *
     * @param \Greenter\Ubl\Entity\Etsi\UnsignedPropertiesType $unsignedProperties
     * @return self
     */
    public function setUnsignedProperties(\Greenter\Ubl\Entity\Etsi\UnsignedPropertiesType $unsignedProperties)
    {
        $this->unsignedProperties = $unsignedProperties;
        return $this;
    }


}

