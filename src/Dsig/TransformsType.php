<?php

namespace Greenter\Ubl\Entity\Dsig;

/**
 * Class representing TransformsType
 *
 * 
 * XSD Type: TransformsType
 */
class TransformsType
{

    /**
     * @var \Greenter\Ubl\Entity\Dsig\Transform[] $transform
     */
    private $transform = [
        
    ];

    /**
     * Adds as transform
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Dsig\Transform $transform
     */
    public function addToTransform(\Greenter\Ubl\Entity\Dsig\Transform $transform)
    {
        $this->transform[] = $transform;
        return $this;
    }

    /**
     * isset transform
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransform($index)
    {
        return isset($this->transform[$index]);
    }

    /**
     * unset transform
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransform($index)
    {
        unset($this->transform[$index]);
    }

    /**
     * Gets as transform
     *
     * @return \Greenter\Ubl\Entity\Dsig\Transform[]
     */
    public function getTransform()
    {
        return $this->transform;
    }

    /**
     * Sets a new transform
     *
     * @param \Greenter\Ubl\Entity\Dsig\Transform[] $transform
     * @return self
     */
    public function setTransform(array $transform)
    {
        $this->transform = $transform;
        return $this;
    }


}

