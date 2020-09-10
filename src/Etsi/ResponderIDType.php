<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing ResponderIDType
 *
 * 
 * XSD Type: ResponderIDType
 */
class ResponderIDType
{

    /**
     * @var string $byName
     */
    private $byName = null;

    /**
     * @var mixed $byKey
     */
    private $byKey = null;

    /**
     * Gets as byName
     *
     * @return string
     */
    public function getByName()
    {
        return $this->byName;
    }

    /**
     * Sets a new byName
     *
     * @param string $byName
     * @return self
     */
    public function setByName($byName)
    {
        $this->byName = $byName;
        return $this;
    }

    /**
     * Gets as byKey
     *
     * @return mixed
     */
    public function getByKey()
    {
        return $this->byKey;
    }

    /**
     * Sets a new byKey
     *
     * @param mixed $byKey
     * @return self
     */
    public function setByKey($byKey)
    {
        $this->byKey = $byKey;
        return $this;
    }


}

