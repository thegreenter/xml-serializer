<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing DocumentReferenceType
 *
 * ABIE
 *  Document Reference. Details
 *  A class to define a reference to a document.
 *  Document Reference
 * XSD Type: DocumentReferenceType
 */
class DocumentReferenceType
{

    /**
     * BBIE
     *  Document Reference. Identifier
     *  An identifier for the referenced document.
     *  1
     *  Document Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  PO-001 3333-44-123
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Document Reference. Copy_ Indicator. Indicator
     *  An indicator that the referenced document is a copy (true) or the original (false).
     *  0..1
     *  Document Reference
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $copyIndicator
     */
    private $copyIndicator = null;

    /**
     * BBIE
     *  Document Reference. UUID. Identifier
     *  A universally unique identifier for this document reference.
     *  0..1
     *  Document Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Document Reference. Issue Date. Date
     *  The date, assigned by the sender of the referenced document, on which the document was issued.
     *  0..1
     *  Document Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Document Reference. Issue Time. Time
     *  The time, assigned by the sender of the referenced document, at which the document was issued.
     *  0..1
     *  Document Reference
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $issueTime
     */
    private $issueTime = null;

    /**
     * BBIE
     *  Document Reference. Document Type Code. Code
     *  The type of document being referenced, expressed as a code.
     *  0..1
     *  Document Reference
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\DocumentTypeCode $documentTypeCode
     */
    private $documentTypeCode = null;

    /**
     * BBIE
     *  Document Reference. Document Type. Text
     *  The type of document being referenced, expressed as text.
     *  0..1
     *  Document Reference
     *  Document Type
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\DocumentType $documentType
     */
    private $documentType = null;

    /**
     * BBIE
     *  Document Reference. XPath. Text
     *  A reference to another place in the same XML document instance in which DocumentReference appears.
     *  0..n
     *  Document Reference
     *  XPath
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\XPath[] $xPath
     */
    private $xPath = [
        
    ];

    /**
     * BBIE
     *  Document Reference. Language. Identifier
     *  An identifier for the language used in the referenced document.
     *  0..1
     *  Document Reference
     *  Language
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\LanguageID $languageID
     */
    private $languageID = null;

    /**
     * BBIE
     *  Document Reference. Locale Code. Code
     *  A code signifying the locale in which the language in the referenced document is used.
     *  0..1
     *  Document Reference
     *  Locale Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\LocaleCode $localeCode
     */
    private $localeCode = null;

    /**
     * BBIE
     *  Document Reference. Version. Identifier
     *  An identifier for the current version of the referenced document.
     *  0..1
     *  Document Reference
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Document Reference. Document Status Code. Code
     *  A code signifying the status of the reference document with respect to its original state.
     *  0..1
     *  Document Reference
     *  Document Status Code
     *  Code
     *  Document Status
     *  Document Status_ Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\DocumentStatusCode $documentStatusCode
     */
    private $documentStatusCode = null;

    /**
     * BBIE
     *  Document Reference. Document_ Description. Text
     *  Text describing the referenced document.
     *  0..n
     *  Document Reference
     *  Document
     *  Description
     *  Text
     *  Text. Type
     *  stock no longer provided
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\DocumentDescription[] $documentDescription
     */
    private $documentDescription = [
        
    ];

    /**
     * ASBIE
     *  Document Reference. Attachment
     *  The referenced document as an attachment to the document from which it is referenced.
     *  0..1
     *  Document Reference
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Attachment $attachment
     */
    private $attachment = null;

    /**
     * ASBIE
     *  Document Reference. Validity_ Period. Period
     *  The period for which this document reference is valid.
     *  0..1
     *  Document Reference
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ValidityPeriod $validityPeriod
     */
    private $validityPeriod = null;

    /**
     * ASBIE
     *  Document Reference. Issuer_ Party. Party
     *  The party who issued the referenced document.
     *  0..1
     *  Document Reference
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\IssuerParty $issuerParty
     */
    private $issuerParty = null;

    /**
     * ASBIE
     *  Document Reference. Result Of Verification
     *  The result of an attempt to verify a signature associated with the referenced document.
     *  0..1
     *  Document Reference
     *  Result Of Verification
     *  Result Of Verification
     *  Result Of Verification
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ResultOfVerification $resultOfVerification
     */
    private $resultOfVerification = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Document Reference. Identifier
     *  An identifier for the referenced document.
     *  1
     *  Document Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  PO-001 3333-44-123
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
     *  Document Reference. Identifier
     *  An identifier for the referenced document.
     *  1
     *  Document Reference
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  PO-001 3333-44-123
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
     * Gets as copyIndicator
     *
     * BBIE
     *  Document Reference. Copy_ Indicator. Indicator
     *  An indicator that the referenced document is a copy (true) or the original (false).
     *  0..1
     *  Document Reference
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getCopyIndicator()
    {
        return $this->copyIndicator;
    }

    /**
     * Sets a new copyIndicator
     *
     * BBIE
     *  Document Reference. Copy_ Indicator. Indicator
     *  An indicator that the referenced document is a copy (true) or the original (false).
     *  0..1
     *  Document Reference
     *  Copy
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $copyIndicator
     * @return self
     */
    public function setCopyIndicator($copyIndicator)
    {
        $this->copyIndicator = $copyIndicator;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Document Reference. UUID. Identifier
     *  A universally unique identifier for this document reference.
     *  0..1
     *  Document Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Document Reference. UUID. Identifier
     *  A universally unique identifier for this document reference.
     *  0..1
     *  Document Reference
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\UUID $uUID
     * @return self
     */
    public function setUUID(\Greenter\Ubl\Entity\CommonBasic\UUID $uUID)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * BBIE
     *  Document Reference. Issue Date. Date
     *  The date, assigned by the sender of the referenced document, on which the document was issued.
     *  0..1
     *  Document Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * Sets a new issueDate
     *
     * BBIE
     *  Document Reference. Issue Date. Date
     *  The date, assigned by the sender of the referenced document, on which the document was issued.
     *  0..1
     *  Document Reference
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $issueDate
     * @return self
     */
    public function setIssueDate(\DateTime $issueDate)
    {
        $this->issueDate = $issueDate;
        return $this;
    }

    /**
     * Gets as issueTime
     *
     * BBIE
     *  Document Reference. Issue Time. Time
     *  The time, assigned by the sender of the referenced document, at which the document was issued.
     *  0..1
     *  Document Reference
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getIssueTime()
    {
        return $this->issueTime;
    }

    /**
     * Sets a new issueTime
     *
     * BBIE
     *  Document Reference. Issue Time. Time
     *  The time, assigned by the sender of the referenced document, at which the document was issued.
     *  0..1
     *  Document Reference
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $issueTime
     * @return self
     */
    public function setIssueTime(\DateTime $issueTime)
    {
        $this->issueTime = $issueTime;
        return $this;
    }

    /**
     * Gets as documentTypeCode
     *
     * BBIE
     *  Document Reference. Document Type Code. Code
     *  The type of document being referenced, expressed as a code.
     *  0..1
     *  Document Reference
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\DocumentTypeCode
     */
    public function getDocumentTypeCode()
    {
        return $this->documentTypeCode;
    }

    /**
     * Sets a new documentTypeCode
     *
     * BBIE
     *  Document Reference. Document Type Code. Code
     *  The type of document being referenced, expressed as a code.
     *  0..1
     *  Document Reference
     *  Document Type Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\DocumentTypeCode $documentTypeCode
     * @return self
     */
    public function setDocumentTypeCode(\Greenter\Ubl\Entity\CommonBasic\DocumentTypeCode $documentTypeCode)
    {
        $this->documentTypeCode = $documentTypeCode;
        return $this;
    }

    /**
     * Gets as documentType
     *
     * BBIE
     *  Document Reference. Document Type. Text
     *  The type of document being referenced, expressed as text.
     *  0..1
     *  Document Reference
     *  Document Type
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\DocumentType
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * Sets a new documentType
     *
     * BBIE
     *  Document Reference. Document Type. Text
     *  The type of document being referenced, expressed as text.
     *  0..1
     *  Document Reference
     *  Document Type
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\DocumentType $documentType
     * @return self
     */
    public function setDocumentType(\Greenter\Ubl\Entity\CommonBasic\DocumentType $documentType)
    {
        $this->documentType = $documentType;
        return $this;
    }

    /**
     * Adds as xPath
     *
     * BBIE
     *  Document Reference. XPath. Text
     *  A reference to another place in the same XML document instance in which DocumentReference appears.
     *  0..n
     *  Document Reference
     *  XPath
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\XPath $xPath
     */
    public function addToXPath(\Greenter\Ubl\Entity\CommonBasic\XPath $xPath)
    {
        $this->xPath[] = $xPath;
        return $this;
    }

    /**
     * isset xPath
     *
     * BBIE
     *  Document Reference. XPath. Text
     *  A reference to another place in the same XML document instance in which DocumentReference appears.
     *  0..n
     *  Document Reference
     *  XPath
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetXPath($index)
    {
        return isset($this->xPath[$index]);
    }

    /**
     * unset xPath
     *
     * BBIE
     *  Document Reference. XPath. Text
     *  A reference to another place in the same XML document instance in which DocumentReference appears.
     *  0..n
     *  Document Reference
     *  XPath
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetXPath($index)
    {
        unset($this->xPath[$index]);
    }

    /**
     * Gets as xPath
     *
     * BBIE
     *  Document Reference. XPath. Text
     *  A reference to another place in the same XML document instance in which DocumentReference appears.
     *  0..n
     *  Document Reference
     *  XPath
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\XPath[]
     */
    public function getXPath()
    {
        return $this->xPath;
    }

    /**
     * Sets a new xPath
     *
     * BBIE
     *  Document Reference. XPath. Text
     *  A reference to another place in the same XML document instance in which DocumentReference appears.
     *  0..n
     *  Document Reference
     *  XPath
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\XPath[] $xPath
     * @return self
     */
    public function setXPath(array $xPath)
    {
        $this->xPath = $xPath;
        return $this;
    }

    /**
     * Gets as languageID
     *
     * BBIE
     *  Document Reference. Language. Identifier
     *  An identifier for the language used in the referenced document.
     *  0..1
     *  Document Reference
     *  Language
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\LanguageID
     */
    public function getLanguageID()
    {
        return $this->languageID;
    }

    /**
     * Sets a new languageID
     *
     * BBIE
     *  Document Reference. Language. Identifier
     *  An identifier for the language used in the referenced document.
     *  0..1
     *  Document Reference
     *  Language
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\LanguageID $languageID
     * @return self
     */
    public function setLanguageID(\Greenter\Ubl\Entity\CommonBasic\LanguageID $languageID)
    {
        $this->languageID = $languageID;
        return $this;
    }

    /**
     * Gets as localeCode
     *
     * BBIE
     *  Document Reference. Locale Code. Code
     *  A code signifying the locale in which the language in the referenced document is used.
     *  0..1
     *  Document Reference
     *  Locale Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\LocaleCode
     */
    public function getLocaleCode()
    {
        return $this->localeCode;
    }

    /**
     * Sets a new localeCode
     *
     * BBIE
     *  Document Reference. Locale Code. Code
     *  A code signifying the locale in which the language in the referenced document is used.
     *  0..1
     *  Document Reference
     *  Locale Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\LocaleCode $localeCode
     * @return self
     */
    public function setLocaleCode(\Greenter\Ubl\Entity\CommonBasic\LocaleCode $localeCode)
    {
        $this->localeCode = $localeCode;
        return $this;
    }

    /**
     * Gets as versionID
     *
     * BBIE
     *  Document Reference. Version. Identifier
     *  An identifier for the current version of the referenced document.
     *  0..1
     *  Document Reference
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\VersionID
     */
    public function getVersionID()
    {
        return $this->versionID;
    }

    /**
     * Sets a new versionID
     *
     * BBIE
     *  Document Reference. Version. Identifier
     *  An identifier for the current version of the referenced document.
     *  0..1
     *  Document Reference
     *  Version
     *  Identifier
     *  Identifier. Type
     *  1.1
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\VersionID $versionID
     * @return self
     */
    public function setVersionID(\Greenter\Ubl\Entity\CommonBasic\VersionID $versionID)
    {
        $this->versionID = $versionID;
        return $this;
    }

    /**
     * Gets as documentStatusCode
     *
     * BBIE
     *  Document Reference. Document Status Code. Code
     *  A code signifying the status of the reference document with respect to its original state.
     *  0..1
     *  Document Reference
     *  Document Status Code
     *  Code
     *  Document Status
     *  Document Status_ Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\DocumentStatusCode
     */
    public function getDocumentStatusCode()
    {
        return $this->documentStatusCode;
    }

    /**
     * Sets a new documentStatusCode
     *
     * BBIE
     *  Document Reference. Document Status Code. Code
     *  A code signifying the status of the reference document with respect to its original state.
     *  0..1
     *  Document Reference
     *  Document Status Code
     *  Code
     *  Document Status
     *  Document Status_ Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\DocumentStatusCode $documentStatusCode
     * @return self
     */
    public function setDocumentStatusCode(\Greenter\Ubl\Entity\CommonBasic\DocumentStatusCode $documentStatusCode)
    {
        $this->documentStatusCode = $documentStatusCode;
        return $this;
    }

    /**
     * Adds as documentDescription
     *
     * BBIE
     *  Document Reference. Document_ Description. Text
     *  Text describing the referenced document.
     *  0..n
     *  Document Reference
     *  Document
     *  Description
     *  Text
     *  Text. Type
     *  stock no longer provided
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\DocumentDescription $documentDescription
     */
    public function addToDocumentDescription(\Greenter\Ubl\Entity\CommonBasic\DocumentDescription $documentDescription)
    {
        $this->documentDescription[] = $documentDescription;
        return $this;
    }

    /**
     * isset documentDescription
     *
     * BBIE
     *  Document Reference. Document_ Description. Text
     *  Text describing the referenced document.
     *  0..n
     *  Document Reference
     *  Document
     *  Description
     *  Text
     *  Text. Type
     *  stock no longer provided
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentDescription($index)
    {
        return isset($this->documentDescription[$index]);
    }

    /**
     * unset documentDescription
     *
     * BBIE
     *  Document Reference. Document_ Description. Text
     *  Text describing the referenced document.
     *  0..n
     *  Document Reference
     *  Document
     *  Description
     *  Text
     *  Text. Type
     *  stock no longer provided
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentDescription($index)
    {
        unset($this->documentDescription[$index]);
    }

    /**
     * Gets as documentDescription
     *
     * BBIE
     *  Document Reference. Document_ Description. Text
     *  Text describing the referenced document.
     *  0..n
     *  Document Reference
     *  Document
     *  Description
     *  Text
     *  Text. Type
     *  stock no longer provided
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\DocumentDescription[]
     */
    public function getDocumentDescription()
    {
        return $this->documentDescription;
    }

    /**
     * Sets a new documentDescription
     *
     * BBIE
     *  Document Reference. Document_ Description. Text
     *  Text describing the referenced document.
     *  0..n
     *  Document Reference
     *  Document
     *  Description
     *  Text
     *  Text. Type
     *  stock no longer provided
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\DocumentDescription[] $documentDescription
     * @return self
     */
    public function setDocumentDescription(array $documentDescription)
    {
        $this->documentDescription = $documentDescription;
        return $this;
    }

    /**
     * Gets as attachment
     *
     * ASBIE
     *  Document Reference. Attachment
     *  The referenced document as an attachment to the document from which it is referenced.
     *  0..1
     *  Document Reference
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Attachment
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Sets a new attachment
     *
     * ASBIE
     *  Document Reference. Attachment
     *  The referenced document as an attachment to the document from which it is referenced.
     *  0..1
     *  Document Reference
     *  Attachment
     *  Attachment
     *  Attachment
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Attachment $attachment
     * @return self
     */
    public function setAttachment(\Greenter\Ubl\Entity\CommonAggregateComponents\Attachment $attachment)
    {
        $this->attachment = $attachment;
        return $this;
    }

    /**
     * Gets as validityPeriod
     *
     * ASBIE
     *  Document Reference. Validity_ Period. Period
     *  The period for which this document reference is valid.
     *  0..1
     *  Document Reference
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ValidityPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * Sets a new validityPeriod
     *
     * ASBIE
     *  Document Reference. Validity_ Period. Period
     *  The period for which this document reference is valid.
     *  0..1
     *  Document Reference
     *  Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ValidityPeriod $validityPeriod
     * @return self
     */
    public function setValidityPeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\ValidityPeriod $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
        return $this;
    }

    /**
     * Gets as issuerParty
     *
     * ASBIE
     *  Document Reference. Issuer_ Party. Party
     *  The party who issued the referenced document.
     *  0..1
     *  Document Reference
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\IssuerParty
     */
    public function getIssuerParty()
    {
        return $this->issuerParty;
    }

    /**
     * Sets a new issuerParty
     *
     * ASBIE
     *  Document Reference. Issuer_ Party. Party
     *  The party who issued the referenced document.
     *  0..1
     *  Document Reference
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\IssuerParty $issuerParty
     * @return self
     */
    public function setIssuerParty(\Greenter\Ubl\Entity\CommonAggregateComponents\IssuerParty $issuerParty)
    {
        $this->issuerParty = $issuerParty;
        return $this;
    }

    /**
     * Gets as resultOfVerification
     *
     * ASBIE
     *  Document Reference. Result Of Verification
     *  The result of an attempt to verify a signature associated with the referenced document.
     *  0..1
     *  Document Reference
     *  Result Of Verification
     *  Result Of Verification
     *  Result Of Verification
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ResultOfVerification
     */
    public function getResultOfVerification()
    {
        return $this->resultOfVerification;
    }

    /**
     * Sets a new resultOfVerification
     *
     * ASBIE
     *  Document Reference. Result Of Verification
     *  The result of an attempt to verify a signature associated with the referenced document.
     *  0..1
     *  Document Reference
     *  Result Of Verification
     *  Result Of Verification
     *  Result Of Verification
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ResultOfVerification $resultOfVerification
     * @return self
     */
    public function setResultOfVerification(\Greenter\Ubl\Entity\CommonAggregateComponents\ResultOfVerification $resultOfVerification)
    {
        $this->resultOfVerification = $resultOfVerification;
        return $this;
    }


}

