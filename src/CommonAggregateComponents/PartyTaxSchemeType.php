<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing PartyTaxSchemeType
 *
 * ABIE
 *  Party Tax Scheme. Details
 *  A class to describe a taxation scheme applying to a party.
 *  Party Tax Scheme
 * XSD Type: PartyTaxSchemeType
 */
class PartyTaxSchemeType
{

    /**
     * BBIE
     *  Party Tax Scheme. Registration_ Name. Name
     *  The name of the party as registered with the relevant fiscal authority.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft Corporation
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\RegistrationName $registrationName
     */
    private $registrationName = null;

    /**
     * BBIE
     *  Party Tax Scheme. Company Identifier. Identifier
     *  An identifier for the party assigned for tax purposes by the taxation authority.
     *  0..1
     *  Party Tax Scheme
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  VAT Number
     *  3556625
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\CompanyID $companyID
     */
    private $companyID = null;

    /**
     * BBIE
     *  Party Tax Scheme. Tax Level Code. Code
     *  A code signifying the tax level applicable to the party within this taxation scheme.
     *  0..1
     *  Party Tax Scheme
     *  Tax Level Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TaxLevelCode $taxLevelCode
     */
    private $taxLevelCode = null;

    /**
     * BBIE
     *  Party Tax Scheme. Exemption Reason Code. Code
     *  A reason for the party's exemption from tax, expressed as a code.
     *  0..1
     *  Party Tax Scheme
     *  Exemption Reason Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ExemptionReasonCode $exemptionReasonCode
     */
    private $exemptionReasonCode = null;

    /**
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for the party's exemption from tax, expressed as text.
     *  0..n
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ExemptionReason[] $exemptionReason
     */
    private $exemptionReason = [
        
    ];

    /**
     * ASBIE
     *  Party Tax Scheme. Registration_ Address. Address
     *  The address of the party as registered for tax purposes.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Address
     *  Address
     *  Address
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\RegistrationAddress $registrationAddress
     */
    private $registrationAddress = null;

    /**
     * ASBIE
     *  Party Tax Scheme. Tax Scheme
     *  The taxation scheme applicable to the party.
     *  1
     *  Party Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\TaxScheme $taxScheme
     */
    private $taxScheme = null;

    /**
     * Gets as registrationName
     *
     * BBIE
     *  Party Tax Scheme. Registration_ Name. Name
     *  The name of the party as registered with the relevant fiscal authority.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft Corporation
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\RegistrationName
     */
    public function getRegistrationName()
    {
        return $this->registrationName;
    }

    /**
     * Sets a new registrationName
     *
     * BBIE
     *  Party Tax Scheme. Registration_ Name. Name
     *  The name of the party as registered with the relevant fiscal authority.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Name
     *  Name
     *  Name. Type
     *  Microsoft Corporation
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\RegistrationName $registrationName
     * @return self
     */
    public function setRegistrationName(\Greenter\Ubl\Entity\CommonBasic\RegistrationName $registrationName)
    {
        $this->registrationName = $registrationName;
        return $this;
    }

    /**
     * Gets as companyID
     *
     * BBIE
     *  Party Tax Scheme. Company Identifier. Identifier
     *  An identifier for the party assigned for tax purposes by the taxation authority.
     *  0..1
     *  Party Tax Scheme
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  VAT Number
     *  3556625
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\CompanyID
     */
    public function getCompanyID()
    {
        return $this->companyID;
    }

    /**
     * Sets a new companyID
     *
     * BBIE
     *  Party Tax Scheme. Company Identifier. Identifier
     *  An identifier for the party assigned for tax purposes by the taxation authority.
     *  0..1
     *  Party Tax Scheme
     *  Company Identifier
     *  Identifier
     *  Identifier. Type
     *  VAT Number
     *  3556625
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\CompanyID $companyID
     * @return self
     */
    public function setCompanyID(\Greenter\Ubl\Entity\CommonBasic\CompanyID $companyID)
    {
        $this->companyID = $companyID;
        return $this;
    }

    /**
     * Gets as taxLevelCode
     *
     * BBIE
     *  Party Tax Scheme. Tax Level Code. Code
     *  A code signifying the tax level applicable to the party within this taxation scheme.
     *  0..1
     *  Party Tax Scheme
     *  Tax Level Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TaxLevelCode
     */
    public function getTaxLevelCode()
    {
        return $this->taxLevelCode;
    }

    /**
     * Sets a new taxLevelCode
     *
     * BBIE
     *  Party Tax Scheme. Tax Level Code. Code
     *  A code signifying the tax level applicable to the party within this taxation scheme.
     *  0..1
     *  Party Tax Scheme
     *  Tax Level Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TaxLevelCode $taxLevelCode
     * @return self
     */
    public function setTaxLevelCode(\Greenter\Ubl\Entity\CommonBasic\TaxLevelCode $taxLevelCode)
    {
        $this->taxLevelCode = $taxLevelCode;
        return $this;
    }

    /**
     * Gets as exemptionReasonCode
     *
     * BBIE
     *  Party Tax Scheme. Exemption Reason Code. Code
     *  A reason for the party's exemption from tax, expressed as a code.
     *  0..1
     *  Party Tax Scheme
     *  Exemption Reason Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ExemptionReasonCode
     */
    public function getExemptionReasonCode()
    {
        return $this->exemptionReasonCode;
    }

    /**
     * Sets a new exemptionReasonCode
     *
     * BBIE
     *  Party Tax Scheme. Exemption Reason Code. Code
     *  A reason for the party's exemption from tax, expressed as a code.
     *  0..1
     *  Party Tax Scheme
     *  Exemption Reason Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ExemptionReasonCode $exemptionReasonCode
     * @return self
     */
    public function setExemptionReasonCode(\Greenter\Ubl\Entity\CommonBasic\ExemptionReasonCode $exemptionReasonCode)
    {
        $this->exemptionReasonCode = $exemptionReasonCode;
        return $this;
    }

    /**
     * Adds as exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for the party's exemption from tax, expressed as text.
     *  0..n
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\ExemptionReason $exemptionReason
     */
    public function addToExemptionReason(\Greenter\Ubl\Entity\CommonBasic\ExemptionReason $exemptionReason)
    {
        $this->exemptionReason[] = $exemptionReason;
        return $this;
    }

    /**
     * isset exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for the party's exemption from tax, expressed as text.
     *  0..n
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExemptionReason($index)
    {
        return isset($this->exemptionReason[$index]);
    }

    /**
     * unset exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for the party's exemption from tax, expressed as text.
     *  0..n
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExemptionReason($index)
    {
        unset($this->exemptionReason[$index]);
    }

    /**
     * Gets as exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for the party's exemption from tax, expressed as text.
     *  0..n
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ExemptionReason[]
     */
    public function getExemptionReason()
    {
        return $this->exemptionReason;
    }

    /**
     * Sets a new exemptionReason
     *
     * BBIE
     *  Party Tax Scheme. Exemption_ Reason. Text
     *  A reason for the party's exemption from tax, expressed as text.
     *  0..n
     *  Party Tax Scheme
     *  Exemption
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ExemptionReason[] $exemptionReason
     * @return self
     */
    public function setExemptionReason(array $exemptionReason)
    {
        $this->exemptionReason = $exemptionReason;
        return $this;
    }

    /**
     * Gets as registrationAddress
     *
     * ASBIE
     *  Party Tax Scheme. Registration_ Address. Address
     *  The address of the party as registered for tax purposes.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Address
     *  Address
     *  Address
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\RegistrationAddress
     */
    public function getRegistrationAddress()
    {
        return $this->registrationAddress;
    }

    /**
     * Sets a new registrationAddress
     *
     * ASBIE
     *  Party Tax Scheme. Registration_ Address. Address
     *  The address of the party as registered for tax purposes.
     *  0..1
     *  Party Tax Scheme
     *  Registration
     *  Address
     *  Address
     *  Address
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\RegistrationAddress $registrationAddress
     * @return self
     */
    public function setRegistrationAddress(\Greenter\Ubl\Entity\CommonAggregateComponents\RegistrationAddress $registrationAddress)
    {
        $this->registrationAddress = $registrationAddress;
        return $this;
    }

    /**
     * Gets as taxScheme
     *
     * ASBIE
     *  Party Tax Scheme. Tax Scheme
     *  The taxation scheme applicable to the party.
     *  1
     *  Party Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\TaxScheme
     */
    public function getTaxScheme()
    {
        return $this->taxScheme;
    }

    /**
     * Sets a new taxScheme
     *
     * ASBIE
     *  Party Tax Scheme. Tax Scheme
     *  The taxation scheme applicable to the party.
     *  1
     *  Party Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *  Tax Scheme
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TaxScheme $taxScheme
     * @return self
     */
    public function setTaxScheme(\Greenter\Ubl\Entity\CommonAggregateComponents\TaxScheme $taxScheme)
    {
        $this->taxScheme = $taxScheme;
        return $this;
    }


}

