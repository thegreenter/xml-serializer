<?php

namespace Greenter\Ubl\Entity\CommonSignatureComponents;

/**
 * Class representing UBLDocumentSignaturesType
 *
 * ABIE
 *  UBL Document Signatures. Details
 *  This class collects all signature information for a document.
 *  UBL Document Signatures
 * XSD Type: UBLDocumentSignaturesType
 */
class UBLDocumentSignaturesType
{

    /**
     * ASBIE
     *  UBL Document Signatures. Signature Information
     *  Each of these is scaffolding for a single digital signature.
     *  1..n
     *  UBL Document Signatures
     *  Signature Information
     *  Signature Information
     *  Signature Information
     *
     * @var \Greenter\Ubl\Entity\SignatureAggregateComponents\SignatureInformation[] $signatureInformation
     */
    private $signatureInformation = [
        
    ];

    /**
     * Adds as signatureInformation
     *
     * ASBIE
     *  UBL Document Signatures. Signature Information
     *  Each of these is scaffolding for a single digital signature.
     *  1..n
     *  UBL Document Signatures
     *  Signature Information
     *  Signature Information
     *  Signature Information
     *
     * @return self
     * @param \Greenter\Ubl\Entity\SignatureAggregateComponents\SignatureInformation $signatureInformation
     */
    public function addToSignatureInformation(\Greenter\Ubl\Entity\SignatureAggregateComponents\SignatureInformation $signatureInformation)
    {
        $this->signatureInformation[] = $signatureInformation;
        return $this;
    }

    /**
     * isset signatureInformation
     *
     * ASBIE
     *  UBL Document Signatures. Signature Information
     *  Each of these is scaffolding for a single digital signature.
     *  1..n
     *  UBL Document Signatures
     *  Signature Information
     *  Signature Information
     *  Signature Information
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSignatureInformation($index)
    {
        return isset($this->signatureInformation[$index]);
    }

    /**
     * unset signatureInformation
     *
     * ASBIE
     *  UBL Document Signatures. Signature Information
     *  Each of these is scaffolding for a single digital signature.
     *  1..n
     *  UBL Document Signatures
     *  Signature Information
     *  Signature Information
     *  Signature Information
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSignatureInformation($index)
    {
        unset($this->signatureInformation[$index]);
    }

    /**
     * Gets as signatureInformation
     *
     * ASBIE
     *  UBL Document Signatures. Signature Information
     *  Each of these is scaffolding for a single digital signature.
     *  1..n
     *  UBL Document Signatures
     *  Signature Information
     *  Signature Information
     *  Signature Information
     *
     * @return \Greenter\Ubl\Entity\SignatureAggregateComponents\SignatureInformation[]
     */
    public function getSignatureInformation()
    {
        return $this->signatureInformation;
    }

    /**
     * Sets a new signatureInformation
     *
     * ASBIE
     *  UBL Document Signatures. Signature Information
     *  Each of these is scaffolding for a single digital signature.
     *  1..n
     *  UBL Document Signatures
     *  Signature Information
     *  Signature Information
     *  Signature Information
     *
     * @param \Greenter\Ubl\Entity\SignatureAggregateComponents\SignatureInformation[] $signatureInformation
     * @return self
     */
    public function setSignatureInformation(array $signatureInformation)
    {
        $this->signatureInformation = $signatureInformation;
        return $this;
    }


}

