<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing DependentPriceReferenceType
 *
 * ABIE
 *  Dependent Price Reference. Details
 *  A class to define the price of an item as a percentage of the price of a different item.
 *  Dependent Price Reference
 * XSD Type: DependentPriceReferenceType
 */
class DependentPriceReferenceType
{

    /**
     * BBIE
     *  Dependent Price Reference. Percent
     *  The percentage by which the price of the different item is multiplied to calculate the price of the item.
     *  0..1
     *  Dependent Price Reference
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Percent $percent
     */
    private $percent = null;

    /**
     * ASBIE
     *  Dependent Price Reference. Location_ Address. Address
     *  The reference location for this dependent price reference.
     *  0..1
     *  Dependent Price Reference
     *  Location
     *  Address
     *  Address
     *  Address
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\LocationAddress $locationAddress
     */
    private $locationAddress = null;

    /**
     * ASBIE
     *  Dependent Price Reference. Dependent_ Line Reference. Line Reference
     *  A reference to a line that the price is depended of.
     *  0..1
     *  Dependent Price Reference
     *  Dependent
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\DependentLineReference $dependentLineReference
     */
    private $dependentLineReference = null;

    /**
     * Gets as percent
     *
     * BBIE
     *  Dependent Price Reference. Percent
     *  The percentage by which the price of the different item is multiplied to calculate the price of the item.
     *  0..1
     *  Dependent Price Reference
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Percent
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * BBIE
     *  Dependent Price Reference. Percent
     *  The percentage by which the price of the different item is multiplied to calculate the price of the item.
     *  0..1
     *  Dependent Price Reference
     *  Percent
     *  Percent
     *  Percent. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Percent $percent
     * @return self
     */
    public function setPercent(\Greenter\Ubl\Entity\CommonBasic\Percent $percent)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Gets as locationAddress
     *
     * ASBIE
     *  Dependent Price Reference. Location_ Address. Address
     *  The reference location for this dependent price reference.
     *  0..1
     *  Dependent Price Reference
     *  Location
     *  Address
     *  Address
     *  Address
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\LocationAddress
     */
    public function getLocationAddress()
    {
        return $this->locationAddress;
    }

    /**
     * Sets a new locationAddress
     *
     * ASBIE
     *  Dependent Price Reference. Location_ Address. Address
     *  The reference location for this dependent price reference.
     *  0..1
     *  Dependent Price Reference
     *  Location
     *  Address
     *  Address
     *  Address
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\LocationAddress $locationAddress
     * @return self
     */
    public function setLocationAddress(\Greenter\Ubl\Entity\CommonAggregateComponents\LocationAddress $locationAddress)
    {
        $this->locationAddress = $locationAddress;
        return $this;
    }

    /**
     * Gets as dependentLineReference
     *
     * ASBIE
     *  Dependent Price Reference. Dependent_ Line Reference. Line Reference
     *  A reference to a line that the price is depended of.
     *  0..1
     *  Dependent Price Reference
     *  Dependent
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\DependentLineReference
     */
    public function getDependentLineReference()
    {
        return $this->dependentLineReference;
    }

    /**
     * Sets a new dependentLineReference
     *
     * ASBIE
     *  Dependent Price Reference. Dependent_ Line Reference. Line Reference
     *  A reference to a line that the price is depended of.
     *  0..1
     *  Dependent Price Reference
     *  Dependent
     *  Line Reference
     *  Line Reference
     *  Line Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DependentLineReference $dependentLineReference
     * @return self
     */
    public function setDependentLineReference(\Greenter\Ubl\Entity\CommonAggregateComponents\DependentLineReference $dependentLineReference)
    {
        $this->dependentLineReference = $dependentLineReference;
        return $this;
    }


}

