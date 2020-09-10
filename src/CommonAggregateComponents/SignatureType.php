<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing SignatureType
 *
 * ABIE
 *  Signature. Details
 *  A class to define a signature.
 *  Signature
 * XSD Type: SignatureType
 */
class SignatureType
{

    /**
     * BBIE
     *  Signature. Identifier
     *  An identifier for this signature.
     *  1
     *  Signature
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Signature. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, information regarding the circumstances in which the signature is being used.
     *  0..n
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Signature. Validation Date. Date
     *  The date upon which this signature was verified.
     *  0..1
     *  Signature
     *  Validation Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $validationDate
     */
    private $validationDate = null;

    /**
     * BBIE
     *  Signature. Validation Time. Time
     *  The time at which this signature was verified.
     *  0..1
     *  Signature
     *  Validation Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $validationTime
     */
    private $validationTime = null;

    /**
     * BBIE
     *  Signature. Validator. Identifier
     *  An identifier for the organization, person, service, or server that verified this signature.
     *  0..1
     *  Signature
     *  Validator
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ValidatorID $validatorID
     */
    private $validatorID = null;

    /**
     * BBIE
     *  Signature. Canonicalization Method. Text
     *  The method used to perform XML canonicalization of this signature.
     *  0..1
     *  Signature
     *  Canonicalization Method
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\CanonicalizationMethod $canonicalizationMethod
     */
    private $canonicalizationMethod = null;

    /**
     * BBIE
     *  Signature. Signature Method. Text
     *  Text describing the method of signature.
     *  0..1
     *  Signature
     *  Signature Method
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SignatureMethod $signatureMethod
     */
    private $signatureMethod = null;

    /**
     * ASBIE
     *  Signature. Signatory_ Party. Party
     *  The signing party.
     *  0..1
     *  Signature
     *  Signatory
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\SignatoryParty $signatoryParty
     */
    private $signatoryParty = null;

    /**
     * ASBIE
     *  Signature. Digital Signature_ Attachment. Attachment
     *  The actual encoded signature (e.g., in XMLDsig format).
     *  0..1
     *  Signature
     *  Digital Signature
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\DigitalSignatureAttachment $digitalSignatureAttachment
     */
    private $digitalSignatureAttachment = null;

    /**
     * ASBIE
     *  Signature. Original_ Document Reference. Document Reference
     *  A reference to the document that the signature applies to. For evidentiary purposes, this may be the document image that the signatory party saw when applying their signature.
     *  0..1
     *  Signature
     *  Original
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\OriginalDocumentReference $originalDocumentReference
     */
    private $originalDocumentReference = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Signature. Identifier
     *  An identifier for this signature.
     *  1
     *  Signature
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     *  Signature. Identifier
     *  An identifier for this signature.
     *  1
     *  Signature
     *  Identifier
     *  Identifier
     *  Identifier. Type
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
     * Adds as note
     *
     * BBIE
     *  Signature. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, information regarding the circumstances in which the signature is being used.
     *  0..n
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\Note $note
     */
    public function addToNote(\Greenter\Ubl\Entity\CommonBasic\Note $note)
    {
        $this->note[] = $note;
        return $this;
    }

    /**
     * isset note
     *
     * BBIE
     *  Signature. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, information regarding the circumstances in which the signature is being used.
     *  0..n
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNote($index)
    {
        return isset($this->note[$index]);
    }

    /**
     * unset note
     *
     * BBIE
     *  Signature. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, information regarding the circumstances in which the signature is being used.
     *  0..n
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNote($index)
    {
        unset($this->note[$index]);
    }

    /**
     * Gets as note
     *
     * BBIE
     *  Signature. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, information regarding the circumstances in which the signature is being used.
     *  0..n
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Note[]
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * BBIE
     *  Signature. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, information regarding the circumstances in which the signature is being used.
     *  0..n
     *  Signature
     *  Note
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Note[] $note
     * @return self
     */
    public function setNote(array $note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as validationDate
     *
     * BBIE
     *  Signature. Validation Date. Date
     *  The date upon which this signature was verified.
     *  0..1
     *  Signature
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
     *  Signature. Validation Date. Date
     *  The date upon which this signature was verified.
     *  0..1
     *  Signature
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
     *  Signature. Validation Time. Time
     *  The time at which this signature was verified.
     *  0..1
     *  Signature
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
     *  Signature. Validation Time. Time
     *  The time at which this signature was verified.
     *  0..1
     *  Signature
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
     * Gets as validatorID
     *
     * BBIE
     *  Signature. Validator. Identifier
     *  An identifier for the organization, person, service, or server that verified this signature.
     *  0..1
     *  Signature
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
     *  Signature. Validator. Identifier
     *  An identifier for the organization, person, service, or server that verified this signature.
     *  0..1
     *  Signature
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
     * Gets as canonicalizationMethod
     *
     * BBIE
     *  Signature. Canonicalization Method. Text
     *  The method used to perform XML canonicalization of this signature.
     *  0..1
     *  Signature
     *  Canonicalization Method
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\CanonicalizationMethod
     */
    public function getCanonicalizationMethod()
    {
        return $this->canonicalizationMethod;
    }

    /**
     * Sets a new canonicalizationMethod
     *
     * BBIE
     *  Signature. Canonicalization Method. Text
     *  The method used to perform XML canonicalization of this signature.
     *  0..1
     *  Signature
     *  Canonicalization Method
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\CanonicalizationMethod $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(\Greenter\Ubl\Entity\CommonBasic\CanonicalizationMethod $canonicalizationMethod)
    {
        $this->canonicalizationMethod = $canonicalizationMethod;
        return $this;
    }

    /**
     * Gets as signatureMethod
     *
     * BBIE
     *  Signature. Signature Method. Text
     *  Text describing the method of signature.
     *  0..1
     *  Signature
     *  Signature Method
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SignatureMethod
     */
    public function getSignatureMethod()
    {
        return $this->signatureMethod;
    }

    /**
     * Sets a new signatureMethod
     *
     * BBIE
     *  Signature. Signature Method. Text
     *  Text describing the method of signature.
     *  0..1
     *  Signature
     *  Signature Method
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SignatureMethod $signatureMethod
     * @return self
     */
    public function setSignatureMethod(\Greenter\Ubl\Entity\CommonBasic\SignatureMethod $signatureMethod)
    {
        $this->signatureMethod = $signatureMethod;
        return $this;
    }

    /**
     * Gets as signatoryParty
     *
     * ASBIE
     *  Signature. Signatory_ Party. Party
     *  The signing party.
     *  0..1
     *  Signature
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
     *  Signature. Signatory_ Party. Party
     *  The signing party.
     *  0..1
     *  Signature
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

    /**
     * Gets as digitalSignatureAttachment
     *
     * ASBIE
     *  Signature. Digital Signature_ Attachment. Attachment
     *  The actual encoded signature (e.g., in XMLDsig format).
     *  0..1
     *  Signature
     *  Digital Signature
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\DigitalSignatureAttachment
     */
    public function getDigitalSignatureAttachment()
    {
        return $this->digitalSignatureAttachment;
    }

    /**
     * Sets a new digitalSignatureAttachment
     *
     * ASBIE
     *  Signature. Digital Signature_ Attachment. Attachment
     *  The actual encoded signature (e.g., in XMLDsig format).
     *  0..1
     *  Signature
     *  Digital Signature
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DigitalSignatureAttachment $digitalSignatureAttachment
     * @return self
     */
    public function setDigitalSignatureAttachment(\Greenter\Ubl\Entity\CommonAggregateComponents\DigitalSignatureAttachment $digitalSignatureAttachment)
    {
        $this->digitalSignatureAttachment = $digitalSignatureAttachment;
        return $this;
    }

    /**
     * Gets as originalDocumentReference
     *
     * ASBIE
     *  Signature. Original_ Document Reference. Document Reference
     *  A reference to the document that the signature applies to. For evidentiary purposes, this may be the document image that the signatory party saw when applying their signature.
     *  0..1
     *  Signature
     *  Original
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\OriginalDocumentReference
     */
    public function getOriginalDocumentReference()
    {
        return $this->originalDocumentReference;
    }

    /**
     * Sets a new originalDocumentReference
     *
     * ASBIE
     *  Signature. Original_ Document Reference. Document Reference
     *  A reference to the document that the signature applies to. For evidentiary purposes, this may be the document image that the signatory party saw when applying their signature.
     *  0..1
     *  Signature
     *  Original
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\OriginalDocumentReference $originalDocumentReference
     * @return self
     */
    public function setOriginalDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\OriginalDocumentReference $originalDocumentReference)
    {
        $this->originalDocumentReference = $originalDocumentReference;
        return $this;
    }


}

