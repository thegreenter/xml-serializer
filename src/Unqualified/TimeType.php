<?php

namespace Greenter\Ubl\Entity\Unqualified;

/**
 * Class representing TimeType
 *
 * UBLUDT0000010
 *  UDT
 *  Time. Type
 *  1.0
 *  An instance of time that occurs every day.
 *  Time
 *  string
 * XSD Type: TimeType
 */
class TimeType
{

    /**
     * @var \DateTime $__value
     */
    private $__value = null;

    /**
     * Construct
     *
     * @param \DateTime $value
     */
    public function __construct(\DateTime $value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param \DateTime $value
     * @return \DateTime
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }


}

