<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ConsumptionAverageType
 *
 * ABIE
 *  Consumption Average. Details
 *  A class to define an average consumption as a monetary amount.
 *  Consumption Average
 * XSD Type: ConsumptionAverageType
 */
class ConsumptionAverageType
{

    /**
     * BBIE
     *  Consumption Average. Average_ Amount. Amount
     *  The average monetary amount of the consumption.
     *  0..1
     *  Consumption Average
     *  Average
     *  Amount
     *  Amount
     *  Amount. Type
     *  1.65
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\AverageAmount $averageAmount
     */
    private $averageAmount = null;

    /**
     * BBIE
     *  Consumption Average. Description. Text
     *  A description of the average consumed.
     *  0..n
     *  Consumption Average
     *  Description
     *  Text
     *  Text. Type
     *  Average price incl. value added tax per kilowatt-hour in the billing period.
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as averageAmount
     *
     * BBIE
     *  Consumption Average. Average_ Amount. Amount
     *  The average monetary amount of the consumption.
     *  0..1
     *  Consumption Average
     *  Average
     *  Amount
     *  Amount
     *  Amount. Type
     *  1.65
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\AverageAmount
     */
    public function getAverageAmount()
    {
        return $this->averageAmount;
    }

    /**
     * Sets a new averageAmount
     *
     * BBIE
     *  Consumption Average. Average_ Amount. Amount
     *  The average monetary amount of the consumption.
     *  0..1
     *  Consumption Average
     *  Average
     *  Amount
     *  Amount
     *  Amount. Type
     *  1.65
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\AverageAmount $averageAmount
     * @return self
     */
    public function setAverageAmount(\Greenter\Ubl\Entity\CommonBasic\AverageAmount $averageAmount)
    {
        $this->averageAmount = $averageAmount;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Consumption Average. Description. Text
     *  A description of the average consumed.
     *  0..n
     *  Consumption Average
     *  Description
     *  Text
     *  Text. Type
     *  Average price incl. value added tax per kilowatt-hour in the billing period.
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\Description $description
     */
    public function addToDescription(\Greenter\Ubl\Entity\CommonBasic\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Consumption Average. Description. Text
     *  A description of the average consumed.
     *  0..n
     *  Consumption Average
     *  Description
     *  Text
     *  Text. Type
     *  Average price incl. value added tax per kilowatt-hour in the billing period.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Consumption Average. Description. Text
     *  A description of the average consumed.
     *  0..n
     *  Consumption Average
     *  Description
     *  Text
     *  Text. Type
     *  Average price incl. value added tax per kilowatt-hour in the billing period.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Consumption Average. Description. Text
     *  A description of the average consumed.
     *  0..n
     *  Consumption Average
     *  Description
     *  Text
     *  Text. Type
     *  Average price incl. value added tax per kilowatt-hour in the billing period.
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Consumption Average. Description. Text
     *  A description of the average consumed.
     *  0..n
     *  Consumption Average
     *  Description
     *  Text
     *  Text. Type
     *  Average price incl. value added tax per kilowatt-hour in the billing period.
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }


}

