<?php

namespace Greenter\Ubl\Entity\SignatureAggregateComponents;

/**
 * Class representing SignatureInformationType
 *
 * ABIE
 *  Signature Information. Details
 *  This class captures a single signature and optionally associates to a signature in the document with the corresponding identifier.
 *  Signature Information
 * XSD Type: SignatureInformationType
 */
class SignatureInformationType
{

    /**
     * BBIE
     *  Signature Information. Identifier
     *  This specifies the identifier of the signature distinguishing it from other signatures.
     *  0..1
     *  Signature Information
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Signature Information. Referenced Signature Identifier. Identifier
     *  This associates this signature with the identifier of a signature business object in the document.
     *  0..1
     *  Signature Information
     *  Referenced Signature Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\SignatureBasicComponents\ReferencedSignatureID $referencedSignatureID
     */
    private $referencedSignatureID = null;

    /**
     * This is a single digital signature as defined by the W3C specification.
     *
     * @var \Greenter\Ubl\Entity\Dsig\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Signature Information. Identifier
     *  This specifies the identifier of the signature distinguishing it from other signatures.
     *  0..1
     *  Signature Information
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
     *  Signature Information. Identifier
     *  This specifies the identifier of the signature distinguishing it from other signatures.
     *  0..1
     *  Signature Information
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
     * Gets as referencedSignatureID
     *
     * BBIE
     *  Signature Information. Referenced Signature Identifier. Identifier
     *  This associates this signature with the identifier of a signature business object in the document.
     *  0..1
     *  Signature Information
     *  Referenced Signature Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\SignatureBasicComponents\ReferencedSignatureID
     */
    public function getReferencedSignatureID()
    {
        return $this->referencedSignatureID;
    }

    /**
     * Sets a new referencedSignatureID
     *
     * BBIE
     *  Signature Information. Referenced Signature Identifier. Identifier
     *  This associates this signature with the identifier of a signature business object in the document.
     *  0..1
     *  Signature Information
     *  Referenced Signature Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\SignatureBasicComponents\ReferencedSignatureID $referencedSignatureID
     * @return self
     */
    public function setReferencedSignatureID(\Greenter\Ubl\Entity\SignatureBasicComponents\ReferencedSignatureID $referencedSignatureID)
    {
        $this->referencedSignatureID = $referencedSignatureID;
        return $this;
    }

    /**
     * Gets as signature
     *
     * This is a single digital signature as defined by the W3C specification.
     *
     * @return \Greenter\Ubl\Entity\Dsig\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * This is a single digital signature as defined by the W3C specification.
     *
     * @param \Greenter\Ubl\Entity\Dsig\Signature $signature
     * @return self
     */
    public function setSignature(\Greenter\Ubl\Entity\Dsig\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

