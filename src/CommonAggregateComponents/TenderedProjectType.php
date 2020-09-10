<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing TenderedProjectType
 *
 * ABIE
 *  Tendered Project. Details
 *  A class to describe a tendered project or project lot.
 *  Tendered Project
 * XSD Type: TenderedProjectType
 */
class TenderedProjectType
{

    /**
     * BBIE
     *  Tendered Project. Variant. Identifier
     *  An identifier for this variant of a tendered project.
     *  0..1
     *  Tendered Project
     *  Variant
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\VariantID $variantID
     */
    private $variantID = null;

    /**
     * BBIE
     *  Tendered Project. Fee. Amount
     *  The fee amount for tendered projects.
     *  0..1
     *  Tendered Project
     *  Fee
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\FeeAmount $feeAmount
     */
    private $feeAmount = null;

    /**
     * BBIE
     *  Tendered Project. Fee_ Description. Text
     *  Text describing the fee amount for tendered projects.
     *  0..n
     *  Tendered Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\FeeDescription[] $feeDescription
     */
    private $feeDescription = [
        
    ];

    /**
     * BBIE
     *  Tendered Project. Tender Envelope Identifier. Identifier
     *  An identifier for the tender envelope this tendered project belongs to.
     *  0..1
     *  Tendered Project
     *  Tender Envelope Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TenderEnvelopeID $tenderEnvelopeID
     */
    private $tenderEnvelopeID = null;

    /**
     * BBIE
     *  Tendered Project. Tender Envelope Type Code. Code
     *  A code signifying the type of tender envelope this tendered project belongs to.
     *  0..1
     *  Tendered Project
     *  Tender Envelope Type Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode
     */
    private $tenderEnvelopeTypeCode = null;

    /**
     * ASBIE
     *  Tendered Project. Procurement Project Lot
     *  The procurement project lot to which this Tender Line refers to. If there are no lots, this should not be defined.
     *  0..1
     *  Tendered Project
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ProcurementProjectLot $procurementProjectLot
     */
    private $procurementProjectLot = null;

    /**
     * ASBIE
     *  Tendered Project. Evidence_ Document Reference. Document Reference
     *  A reference to a non-structured evidentiary document supporting this tendered project.
     *  0..n
     *  Tendered Project
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\EvidenceDocumentReference[] $evidenceDocumentReference
     */
    private $evidenceDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Tendered Project. Tax Total
     *  A total amount of taxes of a particular kind applicable to the monetary total for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\TaxTotal[] $taxTotal
     */
    private $taxTotal = [
        
    ];

    /**
     * ASBIE
     *  Tendered Project. Legal_ Monetary Total. Monetary Total
     *  The total amount for this tendered project.
     *  0..1
     *  Tendered Project
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\LegalMonetaryTotal $legalMonetaryTotal
     */
    private $legalMonetaryTotal = null;

    /**
     * ASBIE
     *  Tendered Project. Tender Line
     *  A line in the tender for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\TenderLine[] $tenderLine
     */
    private $tenderLine = [
        
    ];

    /**
     * ASBIE
     *  Tendered Project. Awarding Criterion Response
     *  An association to an Awarding Criterion Response.
     *  0..n
     *  Tendered Project
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\AwardingCriterionResponse[] $awardingCriterionResponse
     */
    private $awardingCriterionResponse = [
        
    ];

    /**
     * Gets as variantID
     *
     * BBIE
     *  Tendered Project. Variant. Identifier
     *  An identifier for this variant of a tendered project.
     *  0..1
     *  Tendered Project
     *  Variant
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\VariantID
     */
    public function getVariantID()
    {
        return $this->variantID;
    }

    /**
     * Sets a new variantID
     *
     * BBIE
     *  Tendered Project. Variant. Identifier
     *  An identifier for this variant of a tendered project.
     *  0..1
     *  Tendered Project
     *  Variant
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\VariantID $variantID
     * @return self
     */
    public function setVariantID(\Greenter\Ubl\Entity\CommonBasic\VariantID $variantID)
    {
        $this->variantID = $variantID;
        return $this;
    }

    /**
     * Gets as feeAmount
     *
     * BBIE
     *  Tendered Project. Fee. Amount
     *  The fee amount for tendered projects.
     *  0..1
     *  Tendered Project
     *  Fee
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\FeeAmount
     */
    public function getFeeAmount()
    {
        return $this->feeAmount;
    }

    /**
     * Sets a new feeAmount
     *
     * BBIE
     *  Tendered Project. Fee. Amount
     *  The fee amount for tendered projects.
     *  0..1
     *  Tendered Project
     *  Fee
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\FeeAmount $feeAmount
     * @return self
     */
    public function setFeeAmount(\Greenter\Ubl\Entity\CommonBasic\FeeAmount $feeAmount)
    {
        $this->feeAmount = $feeAmount;
        return $this;
    }

    /**
     * Adds as feeDescription
     *
     * BBIE
     *  Tendered Project. Fee_ Description. Text
     *  Text describing the fee amount for tendered projects.
     *  0..n
     *  Tendered Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\FeeDescription $feeDescription
     */
    public function addToFeeDescription(\Greenter\Ubl\Entity\CommonBasic\FeeDescription $feeDescription)
    {
        $this->feeDescription[] = $feeDescription;
        return $this;
    }

    /**
     * isset feeDescription
     *
     * BBIE
     *  Tendered Project. Fee_ Description. Text
     *  Text describing the fee amount for tendered projects.
     *  0..n
     *  Tendered Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeeDescription($index)
    {
        return isset($this->feeDescription[$index]);
    }

    /**
     * unset feeDescription
     *
     * BBIE
     *  Tendered Project. Fee_ Description. Text
     *  Text describing the fee amount for tendered projects.
     *  0..n
     *  Tendered Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeeDescription($index)
    {
        unset($this->feeDescription[$index]);
    }

    /**
     * Gets as feeDescription
     *
     * BBIE
     *  Tendered Project. Fee_ Description. Text
     *  Text describing the fee amount for tendered projects.
     *  0..n
     *  Tendered Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\FeeDescription[]
     */
    public function getFeeDescription()
    {
        return $this->feeDescription;
    }

    /**
     * Sets a new feeDescription
     *
     * BBIE
     *  Tendered Project. Fee_ Description. Text
     *  Text describing the fee amount for tendered projects.
     *  0..n
     *  Tendered Project
     *  Fee
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\FeeDescription[] $feeDescription
     * @return self
     */
    public function setFeeDescription(array $feeDescription)
    {
        $this->feeDescription = $feeDescription;
        return $this;
    }

    /**
     * Gets as tenderEnvelopeID
     *
     * BBIE
     *  Tendered Project. Tender Envelope Identifier. Identifier
     *  An identifier for the tender envelope this tendered project belongs to.
     *  0..1
     *  Tendered Project
     *  Tender Envelope Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TenderEnvelopeID
     */
    public function getTenderEnvelopeID()
    {
        return $this->tenderEnvelopeID;
    }

    /**
     * Sets a new tenderEnvelopeID
     *
     * BBIE
     *  Tendered Project. Tender Envelope Identifier. Identifier
     *  An identifier for the tender envelope this tendered project belongs to.
     *  0..1
     *  Tendered Project
     *  Tender Envelope Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TenderEnvelopeID $tenderEnvelopeID
     * @return self
     */
    public function setTenderEnvelopeID(\Greenter\Ubl\Entity\CommonBasic\TenderEnvelopeID $tenderEnvelopeID)
    {
        $this->tenderEnvelopeID = $tenderEnvelopeID;
        return $this;
    }

    /**
     * Gets as tenderEnvelopeTypeCode
     *
     * BBIE
     *  Tendered Project. Tender Envelope Type Code. Code
     *  A code signifying the type of tender envelope this tendered project belongs to.
     *  0..1
     *  Tendered Project
     *  Tender Envelope Type Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TenderEnvelopeTypeCode
     */
    public function getTenderEnvelopeTypeCode()
    {
        return $this->tenderEnvelopeTypeCode;
    }

    /**
     * Sets a new tenderEnvelopeTypeCode
     *
     * BBIE
     *  Tendered Project. Tender Envelope Type Code. Code
     *  A code signifying the type of tender envelope this tendered project belongs to.
     *  0..1
     *  Tendered Project
     *  Tender Envelope Type Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode
     * @return self
     */
    public function setTenderEnvelopeTypeCode(\Greenter\Ubl\Entity\CommonBasic\TenderEnvelopeTypeCode $tenderEnvelopeTypeCode)
    {
        $this->tenderEnvelopeTypeCode = $tenderEnvelopeTypeCode;
        return $this;
    }

    /**
     * Gets as procurementProjectLot
     *
     * ASBIE
     *  Tendered Project. Procurement Project Lot
     *  The procurement project lot to which this Tender Line refers to. If there are no lots, this should not be defined.
     *  0..1
     *  Tendered Project
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ProcurementProjectLot
     */
    public function getProcurementProjectLot()
    {
        return $this->procurementProjectLot;
    }

    /**
     * Sets a new procurementProjectLot
     *
     * ASBIE
     *  Tendered Project. Procurement Project Lot
     *  The procurement project lot to which this Tender Line refers to. If there are no lots, this should not be defined.
     *  0..1
     *  Tendered Project
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ProcurementProjectLot $procurementProjectLot
     * @return self
     */
    public function setProcurementProjectLot(\Greenter\Ubl\Entity\CommonAggregateComponents\ProcurementProjectLot $procurementProjectLot)
    {
        $this->procurementProjectLot = $procurementProjectLot;
        return $this;
    }

    /**
     * Adds as evidenceDocumentReference
     *
     * ASBIE
     *  Tendered Project. Evidence_ Document Reference. Document Reference
     *  A reference to a non-structured evidentiary document supporting this tendered project.
     *  0..n
     *  Tendered Project
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\EvidenceDocumentReference $evidenceDocumentReference
     */
    public function addToEvidenceDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\EvidenceDocumentReference $evidenceDocumentReference)
    {
        $this->evidenceDocumentReference[] = $evidenceDocumentReference;
        return $this;
    }

    /**
     * isset evidenceDocumentReference
     *
     * ASBIE
     *  Tendered Project. Evidence_ Document Reference. Document Reference
     *  A reference to a non-structured evidentiary document supporting this tendered project.
     *  0..n
     *  Tendered Project
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEvidenceDocumentReference($index)
    {
        return isset($this->evidenceDocumentReference[$index]);
    }

    /**
     * unset evidenceDocumentReference
     *
     * ASBIE
     *  Tendered Project. Evidence_ Document Reference. Document Reference
     *  A reference to a non-structured evidentiary document supporting this tendered project.
     *  0..n
     *  Tendered Project
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEvidenceDocumentReference($index)
    {
        unset($this->evidenceDocumentReference[$index]);
    }

    /**
     * Gets as evidenceDocumentReference
     *
     * ASBIE
     *  Tendered Project. Evidence_ Document Reference. Document Reference
     *  A reference to a non-structured evidentiary document supporting this tendered project.
     *  0..n
     *  Tendered Project
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\EvidenceDocumentReference[]
     */
    public function getEvidenceDocumentReference()
    {
        return $this->evidenceDocumentReference;
    }

    /**
     * Sets a new evidenceDocumentReference
     *
     * ASBIE
     *  Tendered Project. Evidence_ Document Reference. Document Reference
     *  A reference to a non-structured evidentiary document supporting this tendered project.
     *  0..n
     *  Tendered Project
     *  Evidence
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\EvidenceDocumentReference[] $evidenceDocumentReference
     * @return self
     */
    public function setEvidenceDocumentReference(array $evidenceDocumentReference)
    {
        $this->evidenceDocumentReference = $evidenceDocumentReference;
        return $this;
    }

    /**
     * Adds as taxTotal
     *
     * ASBIE
     *  Tendered Project. Tax Total
     *  A total amount of taxes of a particular kind applicable to the monetary total for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TaxTotal $taxTotal
     */
    public function addToTaxTotal(\Greenter\Ubl\Entity\CommonAggregateComponents\TaxTotal $taxTotal)
    {
        $this->taxTotal[] = $taxTotal;
        return $this;
    }

    /**
     * isset taxTotal
     *
     * ASBIE
     *  Tendered Project. Tax Total
     *  A total amount of taxes of a particular kind applicable to the monetary total for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxTotal($index)
    {
        return isset($this->taxTotal[$index]);
    }

    /**
     * unset taxTotal
     *
     * ASBIE
     *  Tendered Project. Tax Total
     *  A total amount of taxes of a particular kind applicable to the monetary total for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxTotal($index)
    {
        unset($this->taxTotal[$index]);
    }

    /**
     * Gets as taxTotal
     *
     * ASBIE
     *  Tendered Project. Tax Total
     *  A total amount of taxes of a particular kind applicable to the monetary total for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\TaxTotal[]
     */
    public function getTaxTotal()
    {
        return $this->taxTotal;
    }

    /**
     * Sets a new taxTotal
     *
     * ASBIE
     *  Tendered Project. Tax Total
     *  A total amount of taxes of a particular kind applicable to the monetary total for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tax Total
     *  Tax Total
     *  Tax Total
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TaxTotal[] $taxTotal
     * @return self
     */
    public function setTaxTotal(array $taxTotal)
    {
        $this->taxTotal = $taxTotal;
        return $this;
    }

    /**
     * Gets as legalMonetaryTotal
     *
     * ASBIE
     *  Tendered Project. Legal_ Monetary Total. Monetary Total
     *  The total amount for this tendered project.
     *  0..1
     *  Tendered Project
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\LegalMonetaryTotal
     */
    public function getLegalMonetaryTotal()
    {
        return $this->legalMonetaryTotal;
    }

    /**
     * Sets a new legalMonetaryTotal
     *
     * ASBIE
     *  Tendered Project. Legal_ Monetary Total. Monetary Total
     *  The total amount for this tendered project.
     *  0..1
     *  Tendered Project
     *  Legal
     *  Monetary Total
     *  Monetary Total
     *  Monetary Total
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\LegalMonetaryTotal $legalMonetaryTotal
     * @return self
     */
    public function setLegalMonetaryTotal(\Greenter\Ubl\Entity\CommonAggregateComponents\LegalMonetaryTotal $legalMonetaryTotal)
    {
        $this->legalMonetaryTotal = $legalMonetaryTotal;
        return $this;
    }

    /**
     * Adds as tenderLine
     *
     * ASBIE
     *  Tendered Project. Tender Line
     *  A line in the tender for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TenderLine $tenderLine
     */
    public function addToTenderLine(\Greenter\Ubl\Entity\CommonAggregateComponents\TenderLine $tenderLine)
    {
        $this->tenderLine[] = $tenderLine;
        return $this;
    }

    /**
     * isset tenderLine
     *
     * ASBIE
     *  Tendered Project. Tender Line
     *  A line in the tender for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderLine($index)
    {
        return isset($this->tenderLine[$index]);
    }

    /**
     * unset tenderLine
     *
     * ASBIE
     *  Tendered Project. Tender Line
     *  A line in the tender for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderLine($index)
    {
        unset($this->tenderLine[$index]);
    }

    /**
     * Gets as tenderLine
     *
     * ASBIE
     *  Tendered Project. Tender Line
     *  A line in the tender for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\TenderLine[]
     */
    public function getTenderLine()
    {
        return $this->tenderLine;
    }

    /**
     * Sets a new tenderLine
     *
     * ASBIE
     *  Tendered Project. Tender Line
     *  A line in the tender for this tendered project.
     *  0..n
     *  Tendered Project
     *  Tender Line
     *  Tender Line
     *  Tender Line
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TenderLine[] $tenderLine
     * @return self
     */
    public function setTenderLine(array $tenderLine)
    {
        $this->tenderLine = $tenderLine;
        return $this;
    }

    /**
     * Adds as awardingCriterionResponse
     *
     * ASBIE
     *  Tendered Project. Awarding Criterion Response
     *  An association to an Awarding Criterion Response.
     *  0..n
     *  Tendered Project
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AwardingCriterionResponse $awardingCriterionResponse
     */
    public function addToAwardingCriterionResponse(\Greenter\Ubl\Entity\CommonAggregateComponents\AwardingCriterionResponse $awardingCriterionResponse)
    {
        $this->awardingCriterionResponse[] = $awardingCriterionResponse;
        return $this;
    }

    /**
     * isset awardingCriterionResponse
     *
     * ASBIE
     *  Tendered Project. Awarding Criterion Response
     *  An association to an Awarding Criterion Response.
     *  0..n
     *  Tendered Project
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAwardingCriterionResponse($index)
    {
        return isset($this->awardingCriterionResponse[$index]);
    }

    /**
     * unset awardingCriterionResponse
     *
     * ASBIE
     *  Tendered Project. Awarding Criterion Response
     *  An association to an Awarding Criterion Response.
     *  0..n
     *  Tendered Project
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAwardingCriterionResponse($index)
    {
        unset($this->awardingCriterionResponse[$index]);
    }

    /**
     * Gets as awardingCriterionResponse
     *
     * ASBIE
     *  Tendered Project. Awarding Criterion Response
     *  An association to an Awarding Criterion Response.
     *  0..n
     *  Tendered Project
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\AwardingCriterionResponse[]
     */
    public function getAwardingCriterionResponse()
    {
        return $this->awardingCriterionResponse;
    }

    /**
     * Sets a new awardingCriterionResponse
     *
     * ASBIE
     *  Tendered Project. Awarding Criterion Response
     *  An association to an Awarding Criterion Response.
     *  0..n
     *  Tendered Project
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *  Awarding Criterion Response
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AwardingCriterionResponse[] $awardingCriterionResponse
     * @return self
     */
    public function setAwardingCriterionResponse(array $awardingCriterionResponse)
    {
        $this->awardingCriterionResponse = $awardingCriterionResponse;
        return $this;
    }


}

