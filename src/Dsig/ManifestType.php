<?php

namespace Greenter\Ubl\Entity\Dsig;

/**
 * Class representing ManifestType
 *
 * 
 * XSD Type: ManifestType
 */
class ManifestType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Greenter\Ubl\Entity\Dsig\Reference[] $reference
     */
    private $reference = [
        
    ];

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
     * Adds as reference
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Dsig\Reference $reference
     */
    public function addToReference(\Greenter\Ubl\Entity\Dsig\Reference $reference)
    {
        $this->reference[] = $reference;
        return $this;
    }

    /**
     * isset reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetReference($index)
    {
        return isset($this->reference[$index]);
    }

    /**
     * unset reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetReference($index)
    {
        unset($this->reference[$index]);
    }

    /**
     * Gets as reference
     *
     * @return \Greenter\Ubl\Entity\Dsig\Reference[]
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param \Greenter\Ubl\Entity\Dsig\Reference[] $reference
     * @return self
     */
    public function setReference(array $reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

