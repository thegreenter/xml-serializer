<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing DeliveryTermsType
 *
 * ABIE
 *  Delivery Terms. Details
 *  A class for describing the terms and conditions applying to the delivery of goods.
 *  Delivery Terms
 * XSD Type: DeliveryTermsType
 */
class DeliveryTermsType
{

    /**
     * BBIE
     *  Delivery Terms. Identifier
     *  An identifier for this description of delivery terms.
     *  0..1
     *  Delivery Terms
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CIF, FOB, or EXW from the INCOTERMS Terms of Delivery. (2000 version preferred.)
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Delivery Terms. Special_ Terms. Text
     *  A description of any terms or conditions relating to the delivery items.
     *  0..n
     *  Delivery Terms
     *  Special
     *  Terms
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SpecialTerms[] $specialTerms
     */
    private $specialTerms = [
        
    ];

    /**
     * BBIE
     *  Delivery Terms. Loss Risk Responsibility Code. Code
     *  A code that identifies one of various responsibilities for loss risk in the execution of the delivery.
     *  0..1
     *  Delivery Terms
     *  Loss Risk Responsibility Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\LossRiskResponsibilityCode $lossRiskResponsibilityCode
     */
    private $lossRiskResponsibilityCode = null;

    /**
     * BBIE
     *  Delivery Terms. Loss Risk. Text
     *  A description of responsibility for risk of loss in execution of the delivery, expressed as text.
     *  0..n
     *  Delivery Terms
     *  Loss Risk
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\LossRisk[] $lossRisk
     */
    private $lossRisk = [
        
    ];

    /**
     * BBIE
     *  Delivery Terms. Amount
     *  The monetary amount covered by these delivery terms.
     *  0..1
     *  Delivery Terms
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Amount $amount
     */
    private $amount = null;

    /**
     * ASBIE
     *  Delivery Terms. Delivery_ Location. Location
     *  The location for the contracted delivery.
     *  0..1
     *  Delivery Terms
     *  Delivery
     *  Location
     *  Location
     *  Location
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\DeliveryLocation $deliveryLocation
     */
    private $deliveryLocation = null;

    /**
     * ASBIE
     *  Delivery Terms. Allowance Charge
     *  An allowance or charge covered by these delivery terms.
     *  0..1
     *  Delivery Terms
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\AllowanceCharge $allowanceCharge
     */
    private $allowanceCharge = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Delivery Terms. Identifier
     *  An identifier for this description of delivery terms.
     *  0..1
     *  Delivery Terms
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CIF, FOB, or EXW from the INCOTERMS Terms of Delivery. (2000 version preferred.)
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Delivery Terms. Identifier
     *  An identifier for this description of delivery terms.
     *  0..1
     *  Delivery Terms
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  CIF, FOB, or EXW from the INCOTERMS Terms of Delivery. (2000 version preferred.)
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ID $iD
     * @return self
     */
    public function setID(\Greenter\Ubl\Entity\CommonBasic\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Adds as specialTerms
     *
     * BBIE
     *  Delivery Terms. Special_ Terms. Text
     *  A description of any terms or conditions relating to the delivery items.
     *  0..n
     *  Delivery Terms
     *  Special
     *  Terms
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\SpecialTerms $specialTerms
     */
    public function addToSpecialTerms(\Greenter\Ubl\Entity\CommonBasic\SpecialTerms $specialTerms)
    {
        $this->specialTerms[] = $specialTerms;
        return $this;
    }

    /**
     * isset specialTerms
     *
     * BBIE
     *  Delivery Terms. Special_ Terms. Text
     *  A description of any terms or conditions relating to the delivery items.
     *  0..n
     *  Delivery Terms
     *  Special
     *  Terms
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialTerms($index)
    {
        return isset($this->specialTerms[$index]);
    }

    /**
     * unset specialTerms
     *
     * BBIE
     *  Delivery Terms. Special_ Terms. Text
     *  A description of any terms or conditions relating to the delivery items.
     *  0..n
     *  Delivery Terms
     *  Special
     *  Terms
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialTerms($index)
    {
        unset($this->specialTerms[$index]);
    }

    /**
     * Gets as specialTerms
     *
     * BBIE
     *  Delivery Terms. Special_ Terms. Text
     *  A description of any terms or conditions relating to the delivery items.
     *  0..n
     *  Delivery Terms
     *  Special
     *  Terms
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SpecialTerms[]
     */
    public function getSpecialTerms()
    {
        return $this->specialTerms;
    }

    /**
     * Sets a new specialTerms
     *
     * BBIE
     *  Delivery Terms. Special_ Terms. Text
     *  A description of any terms or conditions relating to the delivery items.
     *  0..n
     *  Delivery Terms
     *  Special
     *  Terms
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SpecialTerms[] $specialTerms
     * @return self
     */
    public function setSpecialTerms(array $specialTerms)
    {
        $this->specialTerms = $specialTerms;
        return $this;
    }

    /**
     * Gets as lossRiskResponsibilityCode
     *
     * BBIE
     *  Delivery Terms. Loss Risk Responsibility Code. Code
     *  A code that identifies one of various responsibilities for loss risk in the execution of the delivery.
     *  0..1
     *  Delivery Terms
     *  Loss Risk Responsibility Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\LossRiskResponsibilityCode
     */
    public function getLossRiskResponsibilityCode()
    {
        return $this->lossRiskResponsibilityCode;
    }

    /**
     * Sets a new lossRiskResponsibilityCode
     *
     * BBIE
     *  Delivery Terms. Loss Risk Responsibility Code. Code
     *  A code that identifies one of various responsibilities for loss risk in the execution of the delivery.
     *  0..1
     *  Delivery Terms
     *  Loss Risk Responsibility Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\LossRiskResponsibilityCode $lossRiskResponsibilityCode
     * @return self
     */
    public function setLossRiskResponsibilityCode(\Greenter\Ubl\Entity\CommonBasic\LossRiskResponsibilityCode $lossRiskResponsibilityCode)
    {
        $this->lossRiskResponsibilityCode = $lossRiskResponsibilityCode;
        return $this;
    }

    /**
     * Adds as lossRisk
     *
     * BBIE
     *  Delivery Terms. Loss Risk. Text
     *  A description of responsibility for risk of loss in execution of the delivery, expressed as text.
     *  0..n
     *  Delivery Terms
     *  Loss Risk
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\LossRisk $lossRisk
     */
    public function addToLossRisk(\Greenter\Ubl\Entity\CommonBasic\LossRisk $lossRisk)
    {
        $this->lossRisk[] = $lossRisk;
        return $this;
    }

    /**
     * isset lossRisk
     *
     * BBIE
     *  Delivery Terms. Loss Risk. Text
     *  A description of responsibility for risk of loss in execution of the delivery, expressed as text.
     *  0..n
     *  Delivery Terms
     *  Loss Risk
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLossRisk($index)
    {
        return isset($this->lossRisk[$index]);
    }

    /**
     * unset lossRisk
     *
     * BBIE
     *  Delivery Terms. Loss Risk. Text
     *  A description of responsibility for risk of loss in execution of the delivery, expressed as text.
     *  0..n
     *  Delivery Terms
     *  Loss Risk
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLossRisk($index)
    {
        unset($this->lossRisk[$index]);
    }

    /**
     * Gets as lossRisk
     *
     * BBIE
     *  Delivery Terms. Loss Risk. Text
     *  A description of responsibility for risk of loss in execution of the delivery, expressed as text.
     *  0..n
     *  Delivery Terms
     *  Loss Risk
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\LossRisk[]
     */
    public function getLossRisk()
    {
        return $this->lossRisk;
    }

    /**
     * Sets a new lossRisk
     *
     * BBIE
     *  Delivery Terms. Loss Risk. Text
     *  A description of responsibility for risk of loss in execution of the delivery, expressed as text.
     *  0..n
     *  Delivery Terms
     *  Loss Risk
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\LossRisk[] $lossRisk
     * @return self
     */
    public function setLossRisk(array $lossRisk)
    {
        $this->lossRisk = $lossRisk;
        return $this;
    }

    /**
     * Gets as amount
     *
     * BBIE
     *  Delivery Terms. Amount
     *  The monetary amount covered by these delivery terms.
     *  0..1
     *  Delivery Terms
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * BBIE
     *  Delivery Terms. Amount
     *  The monetary amount covered by these delivery terms.
     *  0..1
     *  Delivery Terms
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Amount $amount
     * @return self
     */
    public function setAmount(\Greenter\Ubl\Entity\CommonBasic\Amount $amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as deliveryLocation
     *
     * ASBIE
     *  Delivery Terms. Delivery_ Location. Location
     *  The location for the contracted delivery.
     *  0..1
     *  Delivery Terms
     *  Delivery
     *  Location
     *  Location
     *  Location
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\DeliveryLocation
     */
    public function getDeliveryLocation()
    {
        return $this->deliveryLocation;
    }

    /**
     * Sets a new deliveryLocation
     *
     * ASBIE
     *  Delivery Terms. Delivery_ Location. Location
     *  The location for the contracted delivery.
     *  0..1
     *  Delivery Terms
     *  Delivery
     *  Location
     *  Location
     *  Location
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DeliveryLocation $deliveryLocation
     * @return self
     */
    public function setDeliveryLocation(\Greenter\Ubl\Entity\CommonAggregateComponents\DeliveryLocation $deliveryLocation)
    {
        $this->deliveryLocation = $deliveryLocation;
        return $this;
    }

    /**
     * Gets as allowanceCharge
     *
     * ASBIE
     *  Delivery Terms. Allowance Charge
     *  An allowance or charge covered by these delivery terms.
     *  0..1
     *  Delivery Terms
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\AllowanceCharge
     */
    public function getAllowanceCharge()
    {
        return $this->allowanceCharge;
    }

    /**
     * Sets a new allowanceCharge
     *
     * ASBIE
     *  Delivery Terms. Allowance Charge
     *  An allowance or charge covered by these delivery terms.
     *  0..1
     *  Delivery Terms
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AllowanceCharge $allowanceCharge
     * @return self
     */
    public function setAllowanceCharge(\Greenter\Ubl\Entity\CommonAggregateComponents\AllowanceCharge $allowanceCharge)
    {
        $this->allowanceCharge = $allowanceCharge;
        return $this;
    }


}

