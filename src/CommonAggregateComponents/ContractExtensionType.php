<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ContractExtensionType
 *
 * ABIE
 *  Contract Extension. Details
 *  A class to describe possible extensions to a contract.
 *  Contract Extension
 * XSD Type: ContractExtensionType
 */
class ContractExtensionType
{

    /**
     * BBIE
     *  Contract Extension. Options Description. Text
     *  A description for the possible options that can be carried out during the execution of the contract.
     *  0..n
     *  Contract Extension
     *  Options Description
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\OptionsDescription[] $optionsDescription
     */
    private $optionsDescription = [
        
    ];

    /**
     * BBIE
     *  Contract Extension. Minimum_ Number. Numeric
     *  The fixed minimum number of contract extensions or renewals.
     *  0..1
     *  Contract Extension
     *  Minimum
     *  Number
     *  Numeric
     *  Numeric. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\MinimumNumberNumeric $minimumNumberNumeric
     */
    private $minimumNumberNumeric = null;

    /**
     * BBIE
     *  Contract Extension. Maximum_ Number. Numeric
     *  The maximum allowed number of contract extensions.
     *  0..1
     *  Contract Extension
     *  Maximum
     *  Number
     *  Numeric
     *  Numeric. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\MaximumNumberNumeric $maximumNumberNumeric
     */
    private $maximumNumberNumeric = null;

    /**
     * ASBIE
     *  Contract Extension. Option Validity_ Period. Period
     *  The period during which the option for extending the contract is available.
     *  0..1
     *  Contract Extension
     *  Option Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\OptionValidityPeriod $optionValidityPeriod
     */
    private $optionValidityPeriod = null;

    /**
     * ASBIE
     *  Contract Extension. Renewal
     *  The period allowed for each contract extension.
     *  0..n
     *  Contract Extension
     *  Renewal
     *  Renewal
     *  Renewal
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Renewal[] $renewal
     */
    private $renewal = [
        
    ];

    /**
     * Adds as optionsDescription
     *
     * BBIE
     *  Contract Extension. Options Description. Text
     *  A description for the possible options that can be carried out during the execution of the contract.
     *  0..n
     *  Contract Extension
     *  Options Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\OptionsDescription $optionsDescription
     */
    public function addToOptionsDescription(\Greenter\Ubl\Entity\CommonBasic\OptionsDescription $optionsDescription)
    {
        $this->optionsDescription[] = $optionsDescription;
        return $this;
    }

    /**
     * isset optionsDescription
     *
     * BBIE
     *  Contract Extension. Options Description. Text
     *  A description for the possible options that can be carried out during the execution of the contract.
     *  0..n
     *  Contract Extension
     *  Options Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOptionsDescription($index)
    {
        return isset($this->optionsDescription[$index]);
    }

    /**
     * unset optionsDescription
     *
     * BBIE
     *  Contract Extension. Options Description. Text
     *  A description for the possible options that can be carried out during the execution of the contract.
     *  0..n
     *  Contract Extension
     *  Options Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOptionsDescription($index)
    {
        unset($this->optionsDescription[$index]);
    }

    /**
     * Gets as optionsDescription
     *
     * BBIE
     *  Contract Extension. Options Description. Text
     *  A description for the possible options that can be carried out during the execution of the contract.
     *  0..n
     *  Contract Extension
     *  Options Description
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\OptionsDescription[]
     */
    public function getOptionsDescription()
    {
        return $this->optionsDescription;
    }

    /**
     * Sets a new optionsDescription
     *
     * BBIE
     *  Contract Extension. Options Description. Text
     *  A description for the possible options that can be carried out during the execution of the contract.
     *  0..n
     *  Contract Extension
     *  Options Description
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\OptionsDescription[] $optionsDescription
     * @return self
     */
    public function setOptionsDescription(array $optionsDescription)
    {
        $this->optionsDescription = $optionsDescription;
        return $this;
    }

    /**
     * Gets as minimumNumberNumeric
     *
     * BBIE
     *  Contract Extension. Minimum_ Number. Numeric
     *  The fixed minimum number of contract extensions or renewals.
     *  0..1
     *  Contract Extension
     *  Minimum
     *  Number
     *  Numeric
     *  Numeric. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\MinimumNumberNumeric
     */
    public function getMinimumNumberNumeric()
    {
        return $this->minimumNumberNumeric;
    }

    /**
     * Sets a new minimumNumberNumeric
     *
     * BBIE
     *  Contract Extension. Minimum_ Number. Numeric
     *  The fixed minimum number of contract extensions or renewals.
     *  0..1
     *  Contract Extension
     *  Minimum
     *  Number
     *  Numeric
     *  Numeric. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\MinimumNumberNumeric $minimumNumberNumeric
     * @return self
     */
    public function setMinimumNumberNumeric(\Greenter\Ubl\Entity\CommonBasic\MinimumNumberNumeric $minimumNumberNumeric)
    {
        $this->minimumNumberNumeric = $minimumNumberNumeric;
        return $this;
    }

    /**
     * Gets as maximumNumberNumeric
     *
     * BBIE
     *  Contract Extension. Maximum_ Number. Numeric
     *  The maximum allowed number of contract extensions.
     *  0..1
     *  Contract Extension
     *  Maximum
     *  Number
     *  Numeric
     *  Numeric. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\MaximumNumberNumeric
     */
    public function getMaximumNumberNumeric()
    {
        return $this->maximumNumberNumeric;
    }

    /**
     * Sets a new maximumNumberNumeric
     *
     * BBIE
     *  Contract Extension. Maximum_ Number. Numeric
     *  The maximum allowed number of contract extensions.
     *  0..1
     *  Contract Extension
     *  Maximum
     *  Number
     *  Numeric
     *  Numeric. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\MaximumNumberNumeric $maximumNumberNumeric
     * @return self
     */
    public function setMaximumNumberNumeric(\Greenter\Ubl\Entity\CommonBasic\MaximumNumberNumeric $maximumNumberNumeric)
    {
        $this->maximumNumberNumeric = $maximumNumberNumeric;
        return $this;
    }

    /**
     * Gets as optionValidityPeriod
     *
     * ASBIE
     *  Contract Extension. Option Validity_ Period. Period
     *  The period during which the option for extending the contract is available.
     *  0..1
     *  Contract Extension
     *  Option Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\OptionValidityPeriod
     */
    public function getOptionValidityPeriod()
    {
        return $this->optionValidityPeriod;
    }

    /**
     * Sets a new optionValidityPeriod
     *
     * ASBIE
     *  Contract Extension. Option Validity_ Period. Period
     *  The period during which the option for extending the contract is available.
     *  0..1
     *  Contract Extension
     *  Option Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\OptionValidityPeriod $optionValidityPeriod
     * @return self
     */
    public function setOptionValidityPeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\OptionValidityPeriod $optionValidityPeriod)
    {
        $this->optionValidityPeriod = $optionValidityPeriod;
        return $this;
    }

    /**
     * Adds as renewal
     *
     * ASBIE
     *  Contract Extension. Renewal
     *  The period allowed for each contract extension.
     *  0..n
     *  Contract Extension
     *  Renewal
     *  Renewal
     *  Renewal
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Renewal $renewal
     */
    public function addToRenewal(\Greenter\Ubl\Entity\CommonAggregateComponents\Renewal $renewal)
    {
        $this->renewal[] = $renewal;
        return $this;
    }

    /**
     * isset renewal
     *
     * ASBIE
     *  Contract Extension. Renewal
     *  The period allowed for each contract extension.
     *  0..n
     *  Contract Extension
     *  Renewal
     *  Renewal
     *  Renewal
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRenewal($index)
    {
        return isset($this->renewal[$index]);
    }

    /**
     * unset renewal
     *
     * ASBIE
     *  Contract Extension. Renewal
     *  The period allowed for each contract extension.
     *  0..n
     *  Contract Extension
     *  Renewal
     *  Renewal
     *  Renewal
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRenewal($index)
    {
        unset($this->renewal[$index]);
    }

    /**
     * Gets as renewal
     *
     * ASBIE
     *  Contract Extension. Renewal
     *  The period allowed for each contract extension.
     *  0..n
     *  Contract Extension
     *  Renewal
     *  Renewal
     *  Renewal
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Renewal[]
     */
    public function getRenewal()
    {
        return $this->renewal;
    }

    /**
     * Sets a new renewal
     *
     * ASBIE
     *  Contract Extension. Renewal
     *  The period allowed for each contract extension.
     *  0..n
     *  Contract Extension
     *  Renewal
     *  Renewal
     *  Renewal
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Renewal[] $renewal
     * @return self
     */
    public function setRenewal(array $renewal)
    {
        $this->renewal = $renewal;
        return $this;
    }


}

