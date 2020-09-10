<?php

namespace Greenter\Ubl\Entity\Dsig;

/**
 * Class representing DSAKeyValueType
 *
 * 
 * XSD Type: DSAKeyValueType
 */
class DSAKeyValueType
{

    /**
     * @var mixed $p
     */
    private $p = null;

    /**
     * @var mixed $q
     */
    private $q = null;

    /**
     * @var mixed $g
     */
    private $g = null;

    /**
     * @var mixed $y
     */
    private $y = null;

    /**
     * @var mixed $j
     */
    private $j = null;

    /**
     * @var mixed $seed
     */
    private $seed = null;

    /**
     * @var mixed $pgenCounter
     */
    private $pgenCounter = null;

    /**
     * Gets as p
     *
     * @return mixed
     */
    public function getP()
    {
        return $this->p;
    }

    /**
     * Sets a new p
     *
     * @param mixed $p
     * @return self
     */
    public function setP($p)
    {
        $this->p = $p;
        return $this;
    }

    /**
     * Gets as q
     *
     * @return mixed
     */
    public function getQ()
    {
        return $this->q;
    }

    /**
     * Sets a new q
     *
     * @param mixed $q
     * @return self
     */
    public function setQ($q)
    {
        $this->q = $q;
        return $this;
    }

    /**
     * Gets as g
     *
     * @return mixed
     */
    public function getG()
    {
        return $this->g;
    }

    /**
     * Sets a new g
     *
     * @param mixed $g
     * @return self
     */
    public function setG($g)
    {
        $this->g = $g;
        return $this;
    }

    /**
     * Gets as y
     *
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Sets a new y
     *
     * @param mixed $y
     * @return self
     */
    public function setY($y)
    {
        $this->y = $y;
        return $this;
    }

    /**
     * Gets as j
     *
     * @return mixed
     */
    public function getJ()
    {
        return $this->j;
    }

    /**
     * Sets a new j
     *
     * @param mixed $j
     * @return self
     */
    public function setJ($j)
    {
        $this->j = $j;
        return $this;
    }

    /**
     * Gets as seed
     *
     * @return mixed
     */
    public function getSeed()
    {
        return $this->seed;
    }

    /**
     * Sets a new seed
     *
     * @param mixed $seed
     * @return self
     */
    public function setSeed($seed)
    {
        $this->seed = $seed;
        return $this;
    }

    /**
     * Gets as pgenCounter
     *
     * @return mixed
     */
    public function getPgenCounter()
    {
        return $this->pgenCounter;
    }

    /**
     * Sets a new pgenCounter
     *
     * @param mixed $pgenCounter
     * @return self
     */
    public function setPgenCounter($pgenCounter)
    {
        $this->pgenCounter = $pgenCounter;
        return $this;
    }


}

