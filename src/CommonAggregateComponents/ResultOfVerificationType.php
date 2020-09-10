<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ResultOfVerificationType
 *
 * ABIE
 *  Result Of Verification. Details
 *  A class to describe the result of an attempt to verify a signature.
 *  Result Of Verification
 * XSD Type: ResultOfVerificationType
 */
class ResultOfVerificationType
{

    /**
     * BBIE
     *  Result Of Verification. Validator. Identifier
     *  An identifier for the organization, person, service, or server that verified the signature.
     *  0..1
     *  Result Of Verification
     *  Validator
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ValidatorID $validatorID
     */
    private $validatorID = null;

    /**
     * BBIE
     *  Result Of Verification. Validation_ Result Code. Code
     *  A code signifying the result of the verification.
     *  0..1
     *  Result Of Verification
     *  Validation
     *  Result Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ValidationResultCode $validationResultCode
     */
    private $validationResultCode = null;

    /**
     * BBIE
     *  Result Of Verification. Validation Date. Date
     *  The date upon which verification took place.
     *  0..1
     *  Result Of Verification
     *  Validation Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $validationDate
     */
    private $validationDate = null;

    /**
     * BBIE
     *  Result Of Verification. Validation Time. Time
     *  The time at which verification took place.
     *  0..1
     *  Result Of Verification
     *  Validation Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $validationTime
     */
    private $validationTime = null;

    /**
     * BBIE
     *  Result Of Verification. Validate_ Process. Text
     *  The verification process.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Process
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ValidateProcess $validateProcess
     */
    private $validateProcess = null;

    /**
     * BBIE
     *  Result Of Verification. Validate_ Tool. Text
     *  The tool used to verify the signature.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Tool
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ValidateTool $validateTool
     */
    private $validateTool = null;

    /**
     * BBIE
     *  Result Of Verification. Validate_ Tool Version. Text
     *  The version of the tool used to verify the signature.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Tool Version
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ValidateToolVersion $validateToolVersion
     */
    private $validateToolVersion = null;

    /**
     * ASBIE
     *  Result Of Verification. Signatory_ Party. Party
     *  The signing party.
     *  0..1
     *  Result Of Verification
     *  Signatory
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\SignatoryParty $signatoryParty
     */
    private $signatoryParty = null;

    /**
     * Gets as validatorID
     *
     * BBIE
     *  Result Of Verification. Validator. Identifier
     *  An identifier for the organization, person, service, or server that verified the signature.
     *  0..1
     *  Result Of Verification
     *  Validator
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ValidatorID
     */
    public function getValidatorID()
    {
        return $this->validatorID;
    }

    /**
     * Sets a new validatorID
     *
     * BBIE
     *  Result Of Verification. Validator. Identifier
     *  An identifier for the organization, person, service, or server that verified the signature.
     *  0..1
     *  Result Of Verification
     *  Validator
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ValidatorID $validatorID
     * @return self
     */
    public function setValidatorID(\Greenter\Ubl\Entity\CommonBasic\ValidatorID $validatorID)
    {
        $this->validatorID = $validatorID;
        return $this;
    }

    /**
     * Gets as validationResultCode
     *
     * BBIE
     *  Result Of Verification. Validation_ Result Code. Code
     *  A code signifying the result of the verification.
     *  0..1
     *  Result Of Verification
     *  Validation
     *  Result Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ValidationResultCode
     */
    public function getValidationResultCode()
    {
        return $this->validationResultCode;
    }

    /**
     * Sets a new validationResultCode
     *
     * BBIE
     *  Result Of Verification. Validation_ Result Code. Code
     *  A code signifying the result of the verification.
     *  0..1
     *  Result Of Verification
     *  Validation
     *  Result Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ValidationResultCode $validationResultCode
     * @return self
     */
    public function setValidationResultCode(\Greenter\Ubl\Entity\CommonBasic\ValidationResultCode $validationResultCode)
    {
        $this->validationResultCode = $validationResultCode;
        return $this;
    }

    /**
     * Gets as validationDate
     *
     * BBIE
     *  Result Of Verification. Validation Date. Date
     *  The date upon which verification took place.
     *  0..1
     *  Result Of Verification
     *  Validation Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getValidationDate()
    {
        return $this->validationDate;
    }

    /**
     * Sets a new validationDate
     *
     * BBIE
     *  Result Of Verification. Validation Date. Date
     *  The date upon which verification took place.
     *  0..1
     *  Result Of Verification
     *  Validation Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $validationDate
     * @return self
     */
    public function setValidationDate(\DateTime $validationDate)
    {
        $this->validationDate = $validationDate;
        return $this;
    }

    /**
     * Gets as validationTime
     *
     * BBIE
     *  Result Of Verification. Validation Time. Time
     *  The time at which verification took place.
     *  0..1
     *  Result Of Verification
     *  Validation Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getValidationTime()
    {
        return $this->validationTime;
    }

    /**
     * Sets a new validationTime
     *
     * BBIE
     *  Result Of Verification. Validation Time. Time
     *  The time at which verification took place.
     *  0..1
     *  Result Of Verification
     *  Validation Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $validationTime
     * @return self
     */
    public function setValidationTime(\DateTime $validationTime)
    {
        $this->validationTime = $validationTime;
        return $this;
    }

    /**
     * Gets as validateProcess
     *
     * BBIE
     *  Result Of Verification. Validate_ Process. Text
     *  The verification process.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Process
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ValidateProcess
     */
    public function getValidateProcess()
    {
        return $this->validateProcess;
    }

    /**
     * Sets a new validateProcess
     *
     * BBIE
     *  Result Of Verification. Validate_ Process. Text
     *  The verification process.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Process
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ValidateProcess $validateProcess
     * @return self
     */
    public function setValidateProcess(\Greenter\Ubl\Entity\CommonBasic\ValidateProcess $validateProcess)
    {
        $this->validateProcess = $validateProcess;
        return $this;
    }

    /**
     * Gets as validateTool
     *
     * BBIE
     *  Result Of Verification. Validate_ Tool. Text
     *  The tool used to verify the signature.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Tool
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ValidateTool
     */
    public function getValidateTool()
    {
        return $this->validateTool;
    }

    /**
     * Sets a new validateTool
     *
     * BBIE
     *  Result Of Verification. Validate_ Tool. Text
     *  The tool used to verify the signature.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Tool
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ValidateTool $validateTool
     * @return self
     */
    public function setValidateTool(\Greenter\Ubl\Entity\CommonBasic\ValidateTool $validateTool)
    {
        $this->validateTool = $validateTool;
        return $this;
    }

    /**
     * Gets as validateToolVersion
     *
     * BBIE
     *  Result Of Verification. Validate_ Tool Version. Text
     *  The version of the tool used to verify the signature.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Tool Version
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ValidateToolVersion
     */
    public function getValidateToolVersion()
    {
        return $this->validateToolVersion;
    }

    /**
     * Sets a new validateToolVersion
     *
     * BBIE
     *  Result Of Verification. Validate_ Tool Version. Text
     *  The version of the tool used to verify the signature.
     *  0..1
     *  Result Of Verification
     *  Validate
     *  Tool Version
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ValidateToolVersion $validateToolVersion
     * @return self
     */
    public function setValidateToolVersion(\Greenter\Ubl\Entity\CommonBasic\ValidateToolVersion $validateToolVersion)
    {
        $this->validateToolVersion = $validateToolVersion;
        return $this;
    }

    /**
     * Gets as signatoryParty
     *
     * ASBIE
     *  Result Of Verification. Signatory_ Party. Party
     *  The signing party.
     *  0..1
     *  Result Of Verification
     *  Signatory
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\SignatoryParty
     */
    public function getSignatoryParty()
    {
        return $this->signatoryParty;
    }

    /**
     * Sets a new signatoryParty
     *
     * ASBIE
     *  Result Of Verification. Signatory_ Party. Party
     *  The signing party.
     *  0..1
     *  Result Of Verification
     *  Signatory
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SignatoryParty $signatoryParty
     * @return self
     */
    public function setSignatoryParty(\Greenter\Ubl\Entity\CommonAggregateComponents\SignatoryParty $signatoryParty)
    {
        $this->signatoryParty = $signatoryParty;
        return $this;
    }


}

