<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing CertificateType
 *
 * ABIE
 *  Certificate. Details
 *  A class to define a certificate applied to the item. Certificated can be a requirement to sell goods or services in a jurisdiction.
 *  Certificate
 * XSD Type: CertificateType
 */
class CertificateType
{

    /**
     * BBIE
     *  Certificate. Identifier
     *  An identifier for this certificate.
     *  1
     *  Certificate
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Certificate. Certificate Type Code. Code
     *  The type of this certificate, expressed as a code. The type specifies what array it belongs to, e.g.. Environmental, security, health improvement etc.
     *  1
     *  Certificate
     *  Certificate Type Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\CertificateTypeCode $certificateTypeCode
     */
    private $certificateTypeCode = null;

    /**
     * BBIE
     *  Certificate. Certificate Type. Text
     *  The type of this certificate, expressed as a code. The type specifies what array it belongs to, e.g.. Environmental, security, health improvement etc.
     *  1
     *  Certificate
     *  Certificate Type
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\CertificateType $certificateType
     */
    private $certificateType = null;

    /**
     * BBIE
     *  Certificate. Remarks. Text
     *  Remarks by the applicant for this certificate.
     *  0..n
     *  Certificate
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Remarks[] $remarks
     */
    private $remarks = [
        
    ];

    /**
     * ASBIE
     *  Certificate. Issuer_ Party. Party
     *  The authorized organization that issued this certificate, the provider of the certificate.
     *  1
     *  Certificate
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
     *  Certificate. Document Reference
     *  A reference to a document relevant to this certificate or an application for this certificate.
     *  0..n
     *  Certificate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\DocumentReference[] $documentReference
     */
    private $documentReference = [
        
    ];

    /**
     * ASBIE
     *  Certificate. Signature
     *  A signature applied to this certificate.
     *  0..n
     *  Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Signature[] $signature
     */
    private $signature = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Certificate. Identifier
     *  An identifier for this certificate.
     *  1
     *  Certificate
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
     *  Certificate. Identifier
     *  An identifier for this certificate.
     *  1
     *  Certificate
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
     * Gets as certificateTypeCode
     *
     * BBIE
     *  Certificate. Certificate Type Code. Code
     *  The type of this certificate, expressed as a code. The type specifies what array it belongs to, e.g.. Environmental, security, health improvement etc.
     *  1
     *  Certificate
     *  Certificate Type Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\CertificateTypeCode
     */
    public function getCertificateTypeCode()
    {
        return $this->certificateTypeCode;
    }

    /**
     * Sets a new certificateTypeCode
     *
     * BBIE
     *  Certificate. Certificate Type Code. Code
     *  The type of this certificate, expressed as a code. The type specifies what array it belongs to, e.g.. Environmental, security, health improvement etc.
     *  1
     *  Certificate
     *  Certificate Type Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\CertificateTypeCode $certificateTypeCode
     * @return self
     */
    public function setCertificateTypeCode(\Greenter\Ubl\Entity\CommonBasic\CertificateTypeCode $certificateTypeCode)
    {
        $this->certificateTypeCode = $certificateTypeCode;
        return $this;
    }

    /**
     * Gets as certificateType
     *
     * BBIE
     *  Certificate. Certificate Type. Text
     *  The type of this certificate, expressed as a code. The type specifies what array it belongs to, e.g.. Environmental, security, health improvement etc.
     *  1
     *  Certificate
     *  Certificate Type
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\CertificateType
     */
    public function getCertificateType()
    {
        return $this->certificateType;
    }

    /**
     * Sets a new certificateType
     *
     * BBIE
     *  Certificate. Certificate Type. Text
     *  The type of this certificate, expressed as a code. The type specifies what array it belongs to, e.g.. Environmental, security, health improvement etc.
     *  1
     *  Certificate
     *  Certificate Type
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\CertificateType $certificateType
     * @return self
     */
    public function setCertificateType(\Greenter\Ubl\Entity\CommonBasic\CertificateType $certificateType)
    {
        $this->certificateType = $certificateType;
        return $this;
    }

    /**
     * Adds as remarks
     *
     * BBIE
     *  Certificate. Remarks. Text
     *  Remarks by the applicant for this certificate.
     *  0..n
     *  Certificate
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\Remarks $remarks
     */
    public function addToRemarks(\Greenter\Ubl\Entity\CommonBasic\Remarks $remarks)
    {
        $this->remarks[] = $remarks;
        return $this;
    }

    /**
     * isset remarks
     *
     * BBIE
     *  Certificate. Remarks. Text
     *  Remarks by the applicant for this certificate.
     *  0..n
     *  Certificate
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemarks($index)
    {
        return isset($this->remarks[$index]);
    }

    /**
     * unset remarks
     *
     * BBIE
     *  Certificate. Remarks. Text
     *  Remarks by the applicant for this certificate.
     *  0..n
     *  Certificate
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemarks($index)
    {
        unset($this->remarks[$index]);
    }

    /**
     * Gets as remarks
     *
     * BBIE
     *  Certificate. Remarks. Text
     *  Remarks by the applicant for this certificate.
     *  0..n
     *  Certificate
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Remarks[]
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * BBIE
     *  Certificate. Remarks. Text
     *  Remarks by the applicant for this certificate.
     *  0..n
     *  Certificate
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Remarks[] $remarks
     * @return self
     */
    public function setRemarks(array $remarks)
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Gets as issuerParty
     *
     * ASBIE
     *  Certificate. Issuer_ Party. Party
     *  The authorized organization that issued this certificate, the provider of the certificate.
     *  1
     *  Certificate
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
     *  Certificate. Issuer_ Party. Party
     *  The authorized organization that issued this certificate, the provider of the certificate.
     *  1
     *  Certificate
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
     * Adds as documentReference
     *
     * ASBIE
     *  Certificate. Document Reference
     *  A reference to a document relevant to this certificate or an application for this certificate.
     *  0..n
     *  Certificate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DocumentReference $documentReference
     */
    public function addToDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\DocumentReference $documentReference)
    {
        $this->documentReference[] = $documentReference;
        return $this;
    }

    /**
     * isset documentReference
     *
     * ASBIE
     *  Certificate. Document Reference
     *  A reference to a document relevant to this certificate or an application for this certificate.
     *  0..n
     *  Certificate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentReference($index)
    {
        return isset($this->documentReference[$index]);
    }

    /**
     * unset documentReference
     *
     * ASBIE
     *  Certificate. Document Reference
     *  A reference to a document relevant to this certificate or an application for this certificate.
     *  0..n
     *  Certificate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentReference($index)
    {
        unset($this->documentReference[$index]);
    }

    /**
     * Gets as documentReference
     *
     * ASBIE
     *  Certificate. Document Reference
     *  A reference to a document relevant to this certificate or an application for this certificate.
     *  0..n
     *  Certificate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\DocumentReference[]
     */
    public function getDocumentReference()
    {
        return $this->documentReference;
    }

    /**
     * Sets a new documentReference
     *
     * ASBIE
     *  Certificate. Document Reference
     *  A reference to a document relevant to this certificate or an application for this certificate.
     *  0..n
     *  Certificate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DocumentReference[] $documentReference
     * @return self
     */
    public function setDocumentReference(array $documentReference)
    {
        $this->documentReference = $documentReference;
        return $this;
    }

    /**
     * Adds as signature
     *
     * ASBIE
     *  Certificate. Signature
     *  A signature applied to this certificate.
     *  0..n
     *  Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Signature $signature
     */
    public function addToSignature(\Greenter\Ubl\Entity\CommonAggregateComponents\Signature $signature)
    {
        $this->signature[] = $signature;
        return $this;
    }

    /**
     * isset signature
     *
     * ASBIE
     *  Certificate. Signature
     *  A signature applied to this certificate.
     *  0..n
     *  Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignature($index)
    {
        return isset($this->signature[$index]);
    }

    /**
     * unset signature
     *
     * ASBIE
     *  Certificate. Signature
     *  A signature applied to this certificate.
     *  0..n
     *  Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignature($index)
    {
        unset($this->signature[$index]);
    }

    /**
     * Gets as signature
     *
     * ASBIE
     *  Certificate. Signature
     *  A signature applied to this certificate.
     *  0..n
     *  Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Signature[]
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * ASBIE
     *  Certificate. Signature
     *  A signature applied to this certificate.
     *  0..n
     *  Certificate
     *  Signature
     *  Signature
     *  Signature
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Signature[] $signature
     * @return self
     */
    public function setSignature(array $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

