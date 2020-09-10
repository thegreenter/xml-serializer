<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing TenderingTermsType
 *
 * ABIE
 *  Tendering Terms. Details
 *  A class to describe tendering terms for a tendering process.
 *  Tendering Terms
 * XSD Type: TenderingTermsType
 */
class TenderingTermsType
{

    /**
     * BBIE
     *  Tendering Terms. Awarding Method Type Code. Code
     *  A code signifying the awarding method in a tendering process (e.g., a method favoring the tender with the lowest price or the tender that is most economically advantageous).
     *  0..1
     *  Tendering Terms
     *  Awarding Method Type Code
     *  Code
     *  Code. Type
     *  Price, Multiple criteria
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\AwardingMethodTypeCode $awardingMethodTypeCode
     */
    private $awardingMethodTypeCode = null;

    /**
     * BBIE
     *  Tendering Terms. Price Evaluation Code. Code
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tendering Terms
     *  Price Evaluation Code
     *  Code
     *  Code. Type
     *  Unit prices, global price
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PriceEvaluationCode $priceEvaluationCode
     */
    private $priceEvaluationCode = null;

    /**
     * BBIE
     *  Tendering Terms. Maximum Variant_ Quantity. Quantity
     *  Maximum number of variants the tenderer is allowed to present for this tendering project.
     *  0..1
     *  Tendering Terms
     *  Maximum Variant
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\MaximumVariantQuantity $maximumVariantQuantity
     */
    private $maximumVariantQuantity = null;

    /**
     * BBIE
     *  Tendering Terms. Variant_ Constraint. Indicator
     *  An indicator that variants are allowed and unconstrained in number (true) or not allowed (false).
     *  0..1
     *  Tendering Terms
     *  Variant
     *  Constraint
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $variantConstraintIndicator
     */
    private $variantConstraintIndicator = null;

    /**
     * BBIE
     *  Tendering Terms. Accepted Variants_ Description. Text
     *  Text specifying the things for which variants are accepted.
     *  0..n
     *  Tendering Terms
     *  Accepted Variants
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\AcceptedVariantsDescription[] $acceptedVariantsDescription
     */
    private $acceptedVariantsDescription = [
        
    ];

    /**
     * BBIE
     *  Tendering Terms. Price Revision_ Formula Description. Text
     *  Text describing the formula for price revision.
     *  0..n
     *  Tendering Terms
     *  Price Revision
     *  Formula Description
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PriceRevisionFormulaDescription[] $priceRevisionFormulaDescription
     */
    private $priceRevisionFormulaDescription = [
        
    ];

    /**
     * BBIE
     *  Tendering Terms. Funding_ Program Code. Code
     *  The program that funds the tendering process (e.g., "National", "European"), expressed as a code.
     *  0..1
     *  Tendering Terms
     *  Funding
     *  Program Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\FundingProgramCode $fundingProgramCode
     */
    private $fundingProgramCode = null;

    /**
     * BBIE
     *  Tendering Terms. Funding_ Program. Text
     *  The program that funds the tendering process (e.g., EU 6th Framework Program) expressed as text.
     *  0..n
     *  Tendering Terms
     *  Funding
     *  Program
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\FundingProgram[] $fundingProgram
     */
    private $fundingProgram = [
        
    ];

    /**
     * BBIE
     *  Tendering Terms. Maximum_ Advertisement. Amount
     *  The maximum advertised monetary value of the tendering process.
     *  0..1
     *  Tendering Terms
     *  Maximum
     *  Advertisement
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\MaximumAdvertisementAmount $maximumAdvertisementAmount
     */
    private $maximumAdvertisementAmount = null;

    /**
     * BBIE
     *  Tendering Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tendering Terms
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
     *  Tendering Terms. Payment Frequency Code. Code
     *  A code signifying the frequency of payment in the contract associated with the tendering process.
     *  0..1
     *  Tendering Terms
     *  Payment Frequency Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PaymentFrequencyCode $paymentFrequencyCode
     */
    private $paymentFrequencyCode = null;

    /**
     * BBIE
     *  Tendering Terms. Economic Operator Registry_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of an electronic registry of economic operators.
     *  0..1
     *  Tendering Terms
     *  Economic Operator Registry
     *  URI
     *  Identifier
     *  Identifier. Type
     *  Web site
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\EconomicOperatorRegistryURI $economicOperatorRegistryURI
     */
    private $economicOperatorRegistryURI = null;

    /**
     * BBIE
     *  Tendering Terms. Required Curricula. Indicator
     *  An indicator that tenderers are required to provide a curriculum vitae for each participant in the project (true) or are not so required (false).
     *  0..1
     *  Tendering Terms
     *  Required Curricula
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $requiredCurriculaIndicator
     */
    private $requiredCurriculaIndicator = null;

    /**
     * BBIE
     *  Tendering Terms. Other_ Conditions. Indicator
     *  Indicates whether other conditions exist (true) or not (false). If the indicator is true, the description may be provided.
     *  0..1
     *  Tendering Terms
     *  Other
     *  Conditions
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $otherConditionsIndicator
     */
    private $otherConditionsIndicator = null;

    /**
     * BBIE
     *  Tendering Terms. Additional_ Conditions. Text
     *  Other existing conditions.
     *  0..n
     *  Tendering Terms
     *  Additional
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\AdditionalConditions[] $additionalConditions
     */
    private $additionalConditions = [
        
    ];

    /**
     * BBIE
     *  Tendering Terms. Latest_ Security Clearance Date. Date
     *  The end date until which the candidates can obtain the necessary level of security clearance.
     *  0..1
     *  Tendering Terms
     *  Latest
     *  Security Clearance Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $latestSecurityClearanceDate
     */
    private $latestSecurityClearanceDate = null;

    /**
     * BBIE
     *  Tendering Terms. Documentation Fee Amount. Amount
     *  The amount to be paid to obtain the contract documents and additional documentation.
     *  0..1
     *  Tendering Terms
     *  Documentation Fee Amount
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\DocumentationFeeAmount $documentationFeeAmount
     */
    private $documentationFeeAmount = null;

    /**
     * ASBIE
     *  Tendering Terms. Penalty_ Clause. Clause
     *  The penalty clauses
     *  0..n
     *  Tendering Terms
     *  Penalty
     *  Clause
     *  Clause
     *  Clause
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PenaltyClause[] $penaltyClause
     */
    private $penaltyClause = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Required_ Financial Guarantee. Financial Guarantee
     *  A financial guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
     *  0..n
     *  Tendering Terms
     *  Required
     *  Financial Guarantee
     *  Financial Guarantee
     *  Financial Guarantee
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\RequiredFinancialGuarantee[] $requiredFinancialGuarantee
     */
    private $requiredFinancialGuarantee = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Procurement Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to procurement legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Procurement Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ProcurementLegislationDocumentReference $procurementLegislationDocumentReference
     */
    private $procurementLegislationDocumentReference = null;

    /**
     * ASBIE
     *  Tendering Terms. Fiscal Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to fiscal legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Fiscal Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\FiscalLegislationDocumentReference $fiscalLegislationDocumentReference
     */
    private $fiscalLegislationDocumentReference = null;

    /**
     * ASBIE
     *  Tendering Terms. Environmental Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to environmental legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Environmental Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\EnvironmentalLegislationDocumentReference $environmentalLegislationDocumentReference
     */
    private $environmentalLegislationDocumentReference = null;

    /**
     * ASBIE
     *  Tendering Terms. Employment Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to employment legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Employment Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\EmploymentLegislationDocumentReference $employmentLegislationDocumentReference
     */
    private $employmentLegislationDocumentReference = null;

    /**
     * ASBIE
     *  Tendering Terms. Contractual_ Document Reference. Document Reference
     *  A reference to a document that will become part of the awarded contract.
     *  0..n
     *  Tendering Terms
     *  Contractual
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ContractualDocumentReference[] $contractualDocumentReference
     */
    private $contractualDocumentReference = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Call For Tenders_ Document Reference. Document Reference
     *  A reference to the Call for Tender associated with these tendering terms.
     *  0..1
     *  Tendering Terms
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\CallForTendersDocumentReference $callForTendersDocumentReference
     */
    private $callForTendersDocumentReference = null;

    /**
     * ASBIE
     *  Tendering Terms. Warranty Validity_ Period. Period
     *  The period during which a warranty for work, service, or goods associated with these tendering terms is valid.
     *  0..1
     *  Tendering Terms
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod
     */
    private $warrantyValidityPeriod = null;

    /**
     * ASBIE
     *  Tendering Terms. Payment Terms
     *  A specification of payment terms associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentTerms[] $paymentTerms
     */
    private $paymentTerms = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Tenderer Qualification Request
     *  Required set of qualifications for a tenderer in this tendering process.
     *  0..n
     *  Tendering Terms
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\TendererQualificationRequest[] $tendererQualificationRequest
     */
    private $tendererQualificationRequest = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Allowed_ Subcontract Terms. Subcontract Terms
     *  Subcontract terms for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Allowed
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\AllowedSubcontractTerms[] $allowedSubcontractTerms
     */
    private $allowedSubcontractTerms = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Tender Preparation
     *  Directions for preparing a tender for the+D2057 tendering process.
     *  0..n
     *  Tendering Terms
     *  Tender Preparation
     *  Tender Preparation
     *  Tender Preparation
     *  Curricula required, Experience required, ....
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\TenderPreparation[] $tenderPreparation
     */
    private $tenderPreparation = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Contract Execution Requirement
     *  A requirement relating to execution of the contract that will be awarded as a result of the tendering process.
     *  0..n
     *  Tendering Terms
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ContractExecutionRequirement[] $contractExecutionRequirement
     */
    private $contractExecutionRequirement = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Awarding Terms
     *  The terms in the tendering process for awarding the contract for a project.
     *  0..1
     *  Tendering Terms
     *  Awarding Terms
     *  Awarding Terms
     *  Awarding Terms
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\AwardingTerms $awardingTerms
     */
    private $awardingTerms = null;

    /**
     * ASBIE
     *  Tendering Terms. Additional Information_ Party. Party
     *  A party that has additional information about the tendering process.
     *  0..1
     *  Tendering Terms
     *  Additional Information
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\AdditionalInformationParty $additionalInformationParty
     */
    private $additionalInformationParty = null;

    /**
     * ASBIE
     *  Tendering Terms. Document Provider_ Party. Party
     *  The party that has the contract documents for the tendering process.
     *  0..1
     *  Tendering Terms
     *  Document Provider
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\DocumentProviderParty $documentProviderParty
     */
    private $documentProviderParty = null;

    /**
     * ASBIE
     *  Tendering Terms. Tender Recipient_ Party. Party
     *  The party to which tenders should be presented.
     *  0..1
     *  Tendering Terms
     *  Tender Recipient
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\TenderRecipientParty $tenderRecipientParty
     */
    private $tenderRecipientParty = null;

    /**
     * ASBIE
     *  Tendering Terms. Contract Responsible_ Party. Party
     *  The party responsible for the execution of the contract.
     *  0..1
     *  Tendering Terms
     *  Contract Responsible
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ContractResponsibleParty $contractResponsibleParty
     */
    private $contractResponsibleParty = null;

    /**
     * ASBIE
     *  Tendering Terms. Tender Evaluation_ Party. Party
     *  A party in the contracting authority responsible for evaluating tenders received.
     *  0..n
     *  Tendering Terms
     *  Tender Evaluation
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\TenderEvaluationParty[] $tenderEvaluationParty
     */
    private $tenderEvaluationParty = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Tender Validity_ Period. Period
     *  The period during which tenders submitted for this tendering process must remain valid.
     *  0..1
     *  Tendering Terms
     *  Tender Validity
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\TenderValidityPeriod $tenderValidityPeriod
     */
    private $tenderValidityPeriod = null;

    /**
     * ASBIE
     *  Tendering Terms. Contract Acceptance_ Period. Period
     *  The period of time during which the contracting authority may accept a contract.
     *  0..1
     *  Tendering Terms
     *  Contract Acceptance
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ContractAcceptancePeriod $contractAcceptancePeriod
     */
    private $contractAcceptancePeriod = null;

    /**
     * ASBIE
     *  Tendering Terms. Appeal Terms
     *  Information about the terms to present for an appeal against a tender award.
     *  0..1
     *  Tendering Terms
     *  Appeal Terms
     *  Appeal Terms
     *  Appeal Terms
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\AppealTerms $appealTerms
     */
    private $appealTerms = null;

    /**
     * ASBIE
     *  Tendering Terms. Language
     *  One of the default languages specified for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Language
     *  Language
     *  Language
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Language[] $language
     */
    private $language = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Budget Account Line
     *  A budget account line associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Budget Account Line
     *  Budget Account Line
     *  Budget Account Line
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\BudgetAccountLine[] $budgetAccountLine
     */
    private $budgetAccountLine = [
        
    ];

    /**
     * ASBIE
     *  Tendering Terms. Replaced Notice_ Document Reference. Document Reference
     *  A class defining a reference to the notice that is being replaced.
     *  0..1
     *  Tendering Terms
     *  Replaced Notice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ReplacedNoticeDocumentReference $replacedNoticeDocumentReference
     */
    private $replacedNoticeDocumentReference = null;

    /**
     * Gets as awardingMethodTypeCode
     *
     * BBIE
     *  Tendering Terms. Awarding Method Type Code. Code
     *  A code signifying the awarding method in a tendering process (e.g., a method favoring the tender with the lowest price or the tender that is most economically advantageous).
     *  0..1
     *  Tendering Terms
     *  Awarding Method Type Code
     *  Code
     *  Code. Type
     *  Price, Multiple criteria
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\AwardingMethodTypeCode
     */
    public function getAwardingMethodTypeCode()
    {
        return $this->awardingMethodTypeCode;
    }

    /**
     * Sets a new awardingMethodTypeCode
     *
     * BBIE
     *  Tendering Terms. Awarding Method Type Code. Code
     *  A code signifying the awarding method in a tendering process (e.g., a method favoring the tender with the lowest price or the tender that is most economically advantageous).
     *  0..1
     *  Tendering Terms
     *  Awarding Method Type Code
     *  Code
     *  Code. Type
     *  Price, Multiple criteria
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\AwardingMethodTypeCode $awardingMethodTypeCode
     * @return self
     */
    public function setAwardingMethodTypeCode(\Greenter\Ubl\Entity\CommonBasic\AwardingMethodTypeCode $awardingMethodTypeCode)
    {
        $this->awardingMethodTypeCode = $awardingMethodTypeCode;
        return $this;
    }

    /**
     * Gets as priceEvaluationCode
     *
     * BBIE
     *  Tendering Terms. Price Evaluation Code. Code
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tendering Terms
     *  Price Evaluation Code
     *  Code
     *  Code. Type
     *  Unit prices, global price
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PriceEvaluationCode
     */
    public function getPriceEvaluationCode()
    {
        return $this->priceEvaluationCode;
    }

    /**
     * Sets a new priceEvaluationCode
     *
     * BBIE
     *  Tendering Terms. Price Evaluation Code. Code
     *  Textual description of the legal form required for potential tenderers.
     *  0..1
     *  Tendering Terms
     *  Price Evaluation Code
     *  Code
     *  Code. Type
     *  Unit prices, global price
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PriceEvaluationCode $priceEvaluationCode
     * @return self
     */
    public function setPriceEvaluationCode(\Greenter\Ubl\Entity\CommonBasic\PriceEvaluationCode $priceEvaluationCode)
    {
        $this->priceEvaluationCode = $priceEvaluationCode;
        return $this;
    }

    /**
     * Gets as maximumVariantQuantity
     *
     * BBIE
     *  Tendering Terms. Maximum Variant_ Quantity. Quantity
     *  Maximum number of variants the tenderer is allowed to present for this tendering project.
     *  0..1
     *  Tendering Terms
     *  Maximum Variant
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\MaximumVariantQuantity
     */
    public function getMaximumVariantQuantity()
    {
        return $this->maximumVariantQuantity;
    }

    /**
     * Sets a new maximumVariantQuantity
     *
     * BBIE
     *  Tendering Terms. Maximum Variant_ Quantity. Quantity
     *  Maximum number of variants the tenderer is allowed to present for this tendering project.
     *  0..1
     *  Tendering Terms
     *  Maximum Variant
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\MaximumVariantQuantity $maximumVariantQuantity
     * @return self
     */
    public function setMaximumVariantQuantity(\Greenter\Ubl\Entity\CommonBasic\MaximumVariantQuantity $maximumVariantQuantity)
    {
        $this->maximumVariantQuantity = $maximumVariantQuantity;
        return $this;
    }

    /**
     * Gets as variantConstraintIndicator
     *
     * BBIE
     *  Tendering Terms. Variant_ Constraint. Indicator
     *  An indicator that variants are allowed and unconstrained in number (true) or not allowed (false).
     *  0..1
     *  Tendering Terms
     *  Variant
     *  Constraint
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getVariantConstraintIndicator()
    {
        return $this->variantConstraintIndicator;
    }

    /**
     * Sets a new variantConstraintIndicator
     *
     * BBIE
     *  Tendering Terms. Variant_ Constraint. Indicator
     *  An indicator that variants are allowed and unconstrained in number (true) or not allowed (false).
     *  0..1
     *  Tendering Terms
     *  Variant
     *  Constraint
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $variantConstraintIndicator
     * @return self
     */
    public function setVariantConstraintIndicator($variantConstraintIndicator)
    {
        $this->variantConstraintIndicator = $variantConstraintIndicator;
        return $this;
    }

    /**
     * Adds as acceptedVariantsDescription
     *
     * BBIE
     *  Tendering Terms. Accepted Variants_ Description. Text
     *  Text specifying the things for which variants are accepted.
     *  0..n
     *  Tendering Terms
     *  Accepted Variants
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\AcceptedVariantsDescription $acceptedVariantsDescription
     */
    public function addToAcceptedVariantsDescription(\Greenter\Ubl\Entity\CommonBasic\AcceptedVariantsDescription $acceptedVariantsDescription)
    {
        $this->acceptedVariantsDescription[] = $acceptedVariantsDescription;
        return $this;
    }

    /**
     * isset acceptedVariantsDescription
     *
     * BBIE
     *  Tendering Terms. Accepted Variants_ Description. Text
     *  Text specifying the things for which variants are accepted.
     *  0..n
     *  Tendering Terms
     *  Accepted Variants
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptedVariantsDescription($index)
    {
        return isset($this->acceptedVariantsDescription[$index]);
    }

    /**
     * unset acceptedVariantsDescription
     *
     * BBIE
     *  Tendering Terms. Accepted Variants_ Description. Text
     *  Text specifying the things for which variants are accepted.
     *  0..n
     *  Tendering Terms
     *  Accepted Variants
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptedVariantsDescription($index)
    {
        unset($this->acceptedVariantsDescription[$index]);
    }

    /**
     * Gets as acceptedVariantsDescription
     *
     * BBIE
     *  Tendering Terms. Accepted Variants_ Description. Text
     *  Text specifying the things for which variants are accepted.
     *  0..n
     *  Tendering Terms
     *  Accepted Variants
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\AcceptedVariantsDescription[]
     */
    public function getAcceptedVariantsDescription()
    {
        return $this->acceptedVariantsDescription;
    }

    /**
     * Sets a new acceptedVariantsDescription
     *
     * BBIE
     *  Tendering Terms. Accepted Variants_ Description. Text
     *  Text specifying the things for which variants are accepted.
     *  0..n
     *  Tendering Terms
     *  Accepted Variants
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\AcceptedVariantsDescription[] $acceptedVariantsDescription
     * @return self
     */
    public function setAcceptedVariantsDescription(array $acceptedVariantsDescription)
    {
        $this->acceptedVariantsDescription = $acceptedVariantsDescription;
        return $this;
    }

    /**
     * Adds as priceRevisionFormulaDescription
     *
     * BBIE
     *  Tendering Terms. Price Revision_ Formula Description. Text
     *  Text describing the formula for price revision.
     *  0..n
     *  Tendering Terms
     *  Price Revision
     *  Formula Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\PriceRevisionFormulaDescription $priceRevisionFormulaDescription
     */
    public function addToPriceRevisionFormulaDescription(\Greenter\Ubl\Entity\CommonBasic\PriceRevisionFormulaDescription $priceRevisionFormulaDescription)
    {
        $this->priceRevisionFormulaDescription[] = $priceRevisionFormulaDescription;
        return $this;
    }

    /**
     * isset priceRevisionFormulaDescription
     *
     * BBIE
     *  Tendering Terms. Price Revision_ Formula Description. Text
     *  Text describing the formula for price revision.
     *  0..n
     *  Tendering Terms
     *  Price Revision
     *  Formula Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriceRevisionFormulaDescription($index)
    {
        return isset($this->priceRevisionFormulaDescription[$index]);
    }

    /**
     * unset priceRevisionFormulaDescription
     *
     * BBIE
     *  Tendering Terms. Price Revision_ Formula Description. Text
     *  Text describing the formula for price revision.
     *  0..n
     *  Tendering Terms
     *  Price Revision
     *  Formula Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriceRevisionFormulaDescription($index)
    {
        unset($this->priceRevisionFormulaDescription[$index]);
    }

    /**
     * Gets as priceRevisionFormulaDescription
     *
     * BBIE
     *  Tendering Terms. Price Revision_ Formula Description. Text
     *  Text describing the formula for price revision.
     *  0..n
     *  Tendering Terms
     *  Price Revision
     *  Formula Description
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PriceRevisionFormulaDescription[]
     */
    public function getPriceRevisionFormulaDescription()
    {
        return $this->priceRevisionFormulaDescription;
    }

    /**
     * Sets a new priceRevisionFormulaDescription
     *
     * BBIE
     *  Tendering Terms. Price Revision_ Formula Description. Text
     *  Text describing the formula for price revision.
     *  0..n
     *  Tendering Terms
     *  Price Revision
     *  Formula Description
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PriceRevisionFormulaDescription[] $priceRevisionFormulaDescription
     * @return self
     */
    public function setPriceRevisionFormulaDescription(array $priceRevisionFormulaDescription)
    {
        $this->priceRevisionFormulaDescription = $priceRevisionFormulaDescription;
        return $this;
    }

    /**
     * Gets as fundingProgramCode
     *
     * BBIE
     *  Tendering Terms. Funding_ Program Code. Code
     *  The program that funds the tendering process (e.g., "National", "European"), expressed as a code.
     *  0..1
     *  Tendering Terms
     *  Funding
     *  Program Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\FundingProgramCode
     */
    public function getFundingProgramCode()
    {
        return $this->fundingProgramCode;
    }

    /**
     * Sets a new fundingProgramCode
     *
     * BBIE
     *  Tendering Terms. Funding_ Program Code. Code
     *  The program that funds the tendering process (e.g., "National", "European"), expressed as a code.
     *  0..1
     *  Tendering Terms
     *  Funding
     *  Program Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\FundingProgramCode $fundingProgramCode
     * @return self
     */
    public function setFundingProgramCode(\Greenter\Ubl\Entity\CommonBasic\FundingProgramCode $fundingProgramCode)
    {
        $this->fundingProgramCode = $fundingProgramCode;
        return $this;
    }

    /**
     * Adds as fundingProgram
     *
     * BBIE
     *  Tendering Terms. Funding_ Program. Text
     *  The program that funds the tendering process (e.g., EU 6th Framework Program) expressed as text.
     *  0..n
     *  Tendering Terms
     *  Funding
     *  Program
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\FundingProgram $fundingProgram
     */
    public function addToFundingProgram(\Greenter\Ubl\Entity\CommonBasic\FundingProgram $fundingProgram)
    {
        $this->fundingProgram[] = $fundingProgram;
        return $this;
    }

    /**
     * isset fundingProgram
     *
     * BBIE
     *  Tendering Terms. Funding_ Program. Text
     *  The program that funds the tendering process (e.g., EU 6th Framework Program) expressed as text.
     *  0..n
     *  Tendering Terms
     *  Funding
     *  Program
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFundingProgram($index)
    {
        return isset($this->fundingProgram[$index]);
    }

    /**
     * unset fundingProgram
     *
     * BBIE
     *  Tendering Terms. Funding_ Program. Text
     *  The program that funds the tendering process (e.g., EU 6th Framework Program) expressed as text.
     *  0..n
     *  Tendering Terms
     *  Funding
     *  Program
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFundingProgram($index)
    {
        unset($this->fundingProgram[$index]);
    }

    /**
     * Gets as fundingProgram
     *
     * BBIE
     *  Tendering Terms. Funding_ Program. Text
     *  The program that funds the tendering process (e.g., EU 6th Framework Program) expressed as text.
     *  0..n
     *  Tendering Terms
     *  Funding
     *  Program
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\FundingProgram[]
     */
    public function getFundingProgram()
    {
        return $this->fundingProgram;
    }

    /**
     * Sets a new fundingProgram
     *
     * BBIE
     *  Tendering Terms. Funding_ Program. Text
     *  The program that funds the tendering process (e.g., EU 6th Framework Program) expressed as text.
     *  0..n
     *  Tendering Terms
     *  Funding
     *  Program
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\FundingProgram[] $fundingProgram
     * @return self
     */
    public function setFundingProgram(array $fundingProgram)
    {
        $this->fundingProgram = $fundingProgram;
        return $this;
    }

    /**
     * Gets as maximumAdvertisementAmount
     *
     * BBIE
     *  Tendering Terms. Maximum_ Advertisement. Amount
     *  The maximum advertised monetary value of the tendering process.
     *  0..1
     *  Tendering Terms
     *  Maximum
     *  Advertisement
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\MaximumAdvertisementAmount
     */
    public function getMaximumAdvertisementAmount()
    {
        return $this->maximumAdvertisementAmount;
    }

    /**
     * Sets a new maximumAdvertisementAmount
     *
     * BBIE
     *  Tendering Terms. Maximum_ Advertisement. Amount
     *  The maximum advertised monetary value of the tendering process.
     *  0..1
     *  Tendering Terms
     *  Maximum
     *  Advertisement
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\MaximumAdvertisementAmount $maximumAdvertisementAmount
     * @return self
     */
    public function setMaximumAdvertisementAmount(\Greenter\Ubl\Entity\CommonBasic\MaximumAdvertisementAmount $maximumAdvertisementAmount)
    {
        $this->maximumAdvertisementAmount = $maximumAdvertisementAmount;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Tendering Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tendering Terms
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
     *  Tendering Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tendering Terms
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
     *  Tendering Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tendering Terms
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
     *  Tendering Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tendering Terms
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
     *  Tendering Terms. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Tendering Terms
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
     * Gets as paymentFrequencyCode
     *
     * BBIE
     *  Tendering Terms. Payment Frequency Code. Code
     *  A code signifying the frequency of payment in the contract associated with the tendering process.
     *  0..1
     *  Tendering Terms
     *  Payment Frequency Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PaymentFrequencyCode
     */
    public function getPaymentFrequencyCode()
    {
        return $this->paymentFrequencyCode;
    }

    /**
     * Sets a new paymentFrequencyCode
     *
     * BBIE
     *  Tendering Terms. Payment Frequency Code. Code
     *  A code signifying the frequency of payment in the contract associated with the tendering process.
     *  0..1
     *  Tendering Terms
     *  Payment Frequency Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PaymentFrequencyCode $paymentFrequencyCode
     * @return self
     */
    public function setPaymentFrequencyCode(\Greenter\Ubl\Entity\CommonBasic\PaymentFrequencyCode $paymentFrequencyCode)
    {
        $this->paymentFrequencyCode = $paymentFrequencyCode;
        return $this;
    }

    /**
     * Gets as economicOperatorRegistryURI
     *
     * BBIE
     *  Tendering Terms. Economic Operator Registry_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of an electronic registry of economic operators.
     *  0..1
     *  Tendering Terms
     *  Economic Operator Registry
     *  URI
     *  Identifier
     *  Identifier. Type
     *  Web site
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\EconomicOperatorRegistryURI
     */
    public function getEconomicOperatorRegistryURI()
    {
        return $this->economicOperatorRegistryURI;
    }

    /**
     * Sets a new economicOperatorRegistryURI
     *
     * BBIE
     *  Tendering Terms. Economic Operator Registry_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of an electronic registry of economic operators.
     *  0..1
     *  Tendering Terms
     *  Economic Operator Registry
     *  URI
     *  Identifier
     *  Identifier. Type
     *  Web site
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\EconomicOperatorRegistryURI $economicOperatorRegistryURI
     * @return self
     */
    public function setEconomicOperatorRegistryURI(\Greenter\Ubl\Entity\CommonBasic\EconomicOperatorRegistryURI $economicOperatorRegistryURI)
    {
        $this->economicOperatorRegistryURI = $economicOperatorRegistryURI;
        return $this;
    }

    /**
     * Gets as requiredCurriculaIndicator
     *
     * BBIE
     *  Tendering Terms. Required Curricula. Indicator
     *  An indicator that tenderers are required to provide a curriculum vitae for each participant in the project (true) or are not so required (false).
     *  0..1
     *  Tendering Terms
     *  Required Curricula
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getRequiredCurriculaIndicator()
    {
        return $this->requiredCurriculaIndicator;
    }

    /**
     * Sets a new requiredCurriculaIndicator
     *
     * BBIE
     *  Tendering Terms. Required Curricula. Indicator
     *  An indicator that tenderers are required to provide a curriculum vitae for each participant in the project (true) or are not so required (false).
     *  0..1
     *  Tendering Terms
     *  Required Curricula
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $requiredCurriculaIndicator
     * @return self
     */
    public function setRequiredCurriculaIndicator($requiredCurriculaIndicator)
    {
        $this->requiredCurriculaIndicator = $requiredCurriculaIndicator;
        return $this;
    }

    /**
     * Gets as otherConditionsIndicator
     *
     * BBIE
     *  Tendering Terms. Other_ Conditions. Indicator
     *  Indicates whether other conditions exist (true) or not (false). If the indicator is true, the description may be provided.
     *  0..1
     *  Tendering Terms
     *  Other
     *  Conditions
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getOtherConditionsIndicator()
    {
        return $this->otherConditionsIndicator;
    }

    /**
     * Sets a new otherConditionsIndicator
     *
     * BBIE
     *  Tendering Terms. Other_ Conditions. Indicator
     *  Indicates whether other conditions exist (true) or not (false). If the indicator is true, the description may be provided.
     *  0..1
     *  Tendering Terms
     *  Other
     *  Conditions
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $otherConditionsIndicator
     * @return self
     */
    public function setOtherConditionsIndicator($otherConditionsIndicator)
    {
        $this->otherConditionsIndicator = $otherConditionsIndicator;
        return $this;
    }

    /**
     * Adds as additionalConditions
     *
     * BBIE
     *  Tendering Terms. Additional_ Conditions. Text
     *  Other existing conditions.
     *  0..n
     *  Tendering Terms
     *  Additional
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\AdditionalConditions $additionalConditions
     */
    public function addToAdditionalConditions(\Greenter\Ubl\Entity\CommonBasic\AdditionalConditions $additionalConditions)
    {
        $this->additionalConditions[] = $additionalConditions;
        return $this;
    }

    /**
     * isset additionalConditions
     *
     * BBIE
     *  Tendering Terms. Additional_ Conditions. Text
     *  Other existing conditions.
     *  0..n
     *  Tendering Terms
     *  Additional
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalConditions($index)
    {
        return isset($this->additionalConditions[$index]);
    }

    /**
     * unset additionalConditions
     *
     * BBIE
     *  Tendering Terms. Additional_ Conditions. Text
     *  Other existing conditions.
     *  0..n
     *  Tendering Terms
     *  Additional
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalConditions($index)
    {
        unset($this->additionalConditions[$index]);
    }

    /**
     * Gets as additionalConditions
     *
     * BBIE
     *  Tendering Terms. Additional_ Conditions. Text
     *  Other existing conditions.
     *  0..n
     *  Tendering Terms
     *  Additional
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\AdditionalConditions[]
     */
    public function getAdditionalConditions()
    {
        return $this->additionalConditions;
    }

    /**
     * Sets a new additionalConditions
     *
     * BBIE
     *  Tendering Terms. Additional_ Conditions. Text
     *  Other existing conditions.
     *  0..n
     *  Tendering Terms
     *  Additional
     *  Conditions
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\AdditionalConditions[] $additionalConditions
     * @return self
     */
    public function setAdditionalConditions(array $additionalConditions)
    {
        $this->additionalConditions = $additionalConditions;
        return $this;
    }

    /**
     * Gets as latestSecurityClearanceDate
     *
     * BBIE
     *  Tendering Terms. Latest_ Security Clearance Date. Date
     *  The end date until which the candidates can obtain the necessary level of security clearance.
     *  0..1
     *  Tendering Terms
     *  Latest
     *  Security Clearance Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getLatestSecurityClearanceDate()
    {
        return $this->latestSecurityClearanceDate;
    }

    /**
     * Sets a new latestSecurityClearanceDate
     *
     * BBIE
     *  Tendering Terms. Latest_ Security Clearance Date. Date
     *  The end date until which the candidates can obtain the necessary level of security clearance.
     *  0..1
     *  Tendering Terms
     *  Latest
     *  Security Clearance Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $latestSecurityClearanceDate
     * @return self
     */
    public function setLatestSecurityClearanceDate(\DateTime $latestSecurityClearanceDate)
    {
        $this->latestSecurityClearanceDate = $latestSecurityClearanceDate;
        return $this;
    }

    /**
     * Gets as documentationFeeAmount
     *
     * BBIE
     *  Tendering Terms. Documentation Fee Amount. Amount
     *  The amount to be paid to obtain the contract documents and additional documentation.
     *  0..1
     *  Tendering Terms
     *  Documentation Fee Amount
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\DocumentationFeeAmount
     */
    public function getDocumentationFeeAmount()
    {
        return $this->documentationFeeAmount;
    }

    /**
     * Sets a new documentationFeeAmount
     *
     * BBIE
     *  Tendering Terms. Documentation Fee Amount. Amount
     *  The amount to be paid to obtain the contract documents and additional documentation.
     *  0..1
     *  Tendering Terms
     *  Documentation Fee Amount
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\DocumentationFeeAmount $documentationFeeAmount
     * @return self
     */
    public function setDocumentationFeeAmount(\Greenter\Ubl\Entity\CommonBasic\DocumentationFeeAmount $documentationFeeAmount)
    {
        $this->documentationFeeAmount = $documentationFeeAmount;
        return $this;
    }

    /**
     * Adds as penaltyClause
     *
     * ASBIE
     *  Tendering Terms. Penalty_ Clause. Clause
     *  The penalty clauses
     *  0..n
     *  Tendering Terms
     *  Penalty
     *  Clause
     *  Clause
     *  Clause
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PenaltyClause $penaltyClause
     */
    public function addToPenaltyClause(\Greenter\Ubl\Entity\CommonAggregateComponents\PenaltyClause $penaltyClause)
    {
        $this->penaltyClause[] = $penaltyClause;
        return $this;
    }

    /**
     * isset penaltyClause
     *
     * ASBIE
     *  Tendering Terms. Penalty_ Clause. Clause
     *  The penalty clauses
     *  0..n
     *  Tendering Terms
     *  Penalty
     *  Clause
     *  Clause
     *  Clause
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPenaltyClause($index)
    {
        return isset($this->penaltyClause[$index]);
    }

    /**
     * unset penaltyClause
     *
     * ASBIE
     *  Tendering Terms. Penalty_ Clause. Clause
     *  The penalty clauses
     *  0..n
     *  Tendering Terms
     *  Penalty
     *  Clause
     *  Clause
     *  Clause
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPenaltyClause($index)
    {
        unset($this->penaltyClause[$index]);
    }

    /**
     * Gets as penaltyClause
     *
     * ASBIE
     *  Tendering Terms. Penalty_ Clause. Clause
     *  The penalty clauses
     *  0..n
     *  Tendering Terms
     *  Penalty
     *  Clause
     *  Clause
     *  Clause
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PenaltyClause[]
     */
    public function getPenaltyClause()
    {
        return $this->penaltyClause;
    }

    /**
     * Sets a new penaltyClause
     *
     * ASBIE
     *  Tendering Terms. Penalty_ Clause. Clause
     *  The penalty clauses
     *  0..n
     *  Tendering Terms
     *  Penalty
     *  Clause
     *  Clause
     *  Clause
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PenaltyClause[] $penaltyClause
     * @return self
     */
    public function setPenaltyClause(array $penaltyClause)
    {
        $this->penaltyClause = $penaltyClause;
        return $this;
    }

    /**
     * Adds as requiredFinancialGuarantee
     *
     * ASBIE
     *  Tendering Terms. Required_ Financial Guarantee. Financial Guarantee
     *  A financial guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
     *  0..n
     *  Tendering Terms
     *  Required
     *  Financial Guarantee
     *  Financial Guarantee
     *  Financial Guarantee
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\RequiredFinancialGuarantee $requiredFinancialGuarantee
     */
    public function addToRequiredFinancialGuarantee(\Greenter\Ubl\Entity\CommonAggregateComponents\RequiredFinancialGuarantee $requiredFinancialGuarantee)
    {
        $this->requiredFinancialGuarantee[] = $requiredFinancialGuarantee;
        return $this;
    }

    /**
     * isset requiredFinancialGuarantee
     *
     * ASBIE
     *  Tendering Terms. Required_ Financial Guarantee. Financial Guarantee
     *  A financial guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
     *  0..n
     *  Tendering Terms
     *  Required
     *  Financial Guarantee
     *  Financial Guarantee
     *  Financial Guarantee
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredFinancialGuarantee($index)
    {
        return isset($this->requiredFinancialGuarantee[$index]);
    }

    /**
     * unset requiredFinancialGuarantee
     *
     * ASBIE
     *  Tendering Terms. Required_ Financial Guarantee. Financial Guarantee
     *  A financial guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
     *  0..n
     *  Tendering Terms
     *  Required
     *  Financial Guarantee
     *  Financial Guarantee
     *  Financial Guarantee
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredFinancialGuarantee($index)
    {
        unset($this->requiredFinancialGuarantee[$index]);
    }

    /**
     * Gets as requiredFinancialGuarantee
     *
     * ASBIE
     *  Tendering Terms. Required_ Financial Guarantee. Financial Guarantee
     *  A financial guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
     *  0..n
     *  Tendering Terms
     *  Required
     *  Financial Guarantee
     *  Financial Guarantee
     *  Financial Guarantee
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\RequiredFinancialGuarantee[]
     */
    public function getRequiredFinancialGuarantee()
    {
        return $this->requiredFinancialGuarantee;
    }

    /**
     * Sets a new requiredFinancialGuarantee
     *
     * ASBIE
     *  Tendering Terms. Required_ Financial Guarantee. Financial Guarantee
     *  A financial guarantee of a tenderer or bid submitter's actual entry into a contract in the event that it is the successful bidder.
     *  0..n
     *  Tendering Terms
     *  Required
     *  Financial Guarantee
     *  Financial Guarantee
     *  Financial Guarantee
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\RequiredFinancialGuarantee[] $requiredFinancialGuarantee
     * @return self
     */
    public function setRequiredFinancialGuarantee(array $requiredFinancialGuarantee)
    {
        $this->requiredFinancialGuarantee = $requiredFinancialGuarantee;
        return $this;
    }

    /**
     * Gets as procurementLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Procurement Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to procurement legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Procurement Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ProcurementLegislationDocumentReference
     */
    public function getProcurementLegislationDocumentReference()
    {
        return $this->procurementLegislationDocumentReference;
    }

    /**
     * Sets a new procurementLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Procurement Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to procurement legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Procurement Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ProcurementLegislationDocumentReference $procurementLegislationDocumentReference
     * @return self
     */
    public function setProcurementLegislationDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\ProcurementLegislationDocumentReference $procurementLegislationDocumentReference)
    {
        $this->procurementLegislationDocumentReference = $procurementLegislationDocumentReference;
        return $this;
    }

    /**
     * Gets as fiscalLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Fiscal Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to fiscal legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Fiscal Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\FiscalLegislationDocumentReference
     */
    public function getFiscalLegislationDocumentReference()
    {
        return $this->fiscalLegislationDocumentReference;
    }

    /**
     * Sets a new fiscalLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Fiscal Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to fiscal legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Fiscal Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\FiscalLegislationDocumentReference $fiscalLegislationDocumentReference
     * @return self
     */
    public function setFiscalLegislationDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\FiscalLegislationDocumentReference $fiscalLegislationDocumentReference)
    {
        $this->fiscalLegislationDocumentReference = $fiscalLegislationDocumentReference;
        return $this;
    }

    /**
     * Gets as environmentalLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Environmental Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to environmental legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Environmental Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\EnvironmentalLegislationDocumentReference
     */
    public function getEnvironmentalLegislationDocumentReference()
    {
        return $this->environmentalLegislationDocumentReference;
    }

    /**
     * Sets a new environmentalLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Environmental Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to environmental legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Environmental Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\EnvironmentalLegislationDocumentReference $environmentalLegislationDocumentReference
     * @return self
     */
    public function setEnvironmentalLegislationDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\EnvironmentalLegislationDocumentReference $environmentalLegislationDocumentReference)
    {
        $this->environmentalLegislationDocumentReference = $environmentalLegislationDocumentReference;
        return $this;
    }

    /**
     * Gets as employmentLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Employment Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to employment legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Employment Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\EmploymentLegislationDocumentReference
     */
    public function getEmploymentLegislationDocumentReference()
    {
        return $this->employmentLegislationDocumentReference;
    }

    /**
     * Sets a new employmentLegislationDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Employment Legislation_ Document Reference. Document Reference
     *  A reference to a document providing references to employment legislation applicable to the tendering process.
     *  0..1
     *  Tendering Terms
     *  Employment Legislation
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\EmploymentLegislationDocumentReference $employmentLegislationDocumentReference
     * @return self
     */
    public function setEmploymentLegislationDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\EmploymentLegislationDocumentReference $employmentLegislationDocumentReference)
    {
        $this->employmentLegislationDocumentReference = $employmentLegislationDocumentReference;
        return $this;
    }

    /**
     * Adds as contractualDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Contractual_ Document Reference. Document Reference
     *  A reference to a document that will become part of the awarded contract.
     *  0..n
     *  Tendering Terms
     *  Contractual
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ContractualDocumentReference $contractualDocumentReference
     */
    public function addToContractualDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\ContractualDocumentReference $contractualDocumentReference)
    {
        $this->contractualDocumentReference[] = $contractualDocumentReference;
        return $this;
    }

    /**
     * isset contractualDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Contractual_ Document Reference. Document Reference
     *  A reference to a document that will become part of the awarded contract.
     *  0..n
     *  Tendering Terms
     *  Contractual
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractualDocumentReference($index)
    {
        return isset($this->contractualDocumentReference[$index]);
    }

    /**
     * unset contractualDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Contractual_ Document Reference. Document Reference
     *  A reference to a document that will become part of the awarded contract.
     *  0..n
     *  Tendering Terms
     *  Contractual
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractualDocumentReference($index)
    {
        unset($this->contractualDocumentReference[$index]);
    }

    /**
     * Gets as contractualDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Contractual_ Document Reference. Document Reference
     *  A reference to a document that will become part of the awarded contract.
     *  0..n
     *  Tendering Terms
     *  Contractual
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ContractualDocumentReference[]
     */
    public function getContractualDocumentReference()
    {
        return $this->contractualDocumentReference;
    }

    /**
     * Sets a new contractualDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Contractual_ Document Reference. Document Reference
     *  A reference to a document that will become part of the awarded contract.
     *  0..n
     *  Tendering Terms
     *  Contractual
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ContractualDocumentReference[] $contractualDocumentReference
     * @return self
     */
    public function setContractualDocumentReference(array $contractualDocumentReference)
    {
        $this->contractualDocumentReference = $contractualDocumentReference;
        return $this;
    }

    /**
     * Gets as callForTendersDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Call For Tenders_ Document Reference. Document Reference
     *  A reference to the Call for Tender associated with these tendering terms.
     *  0..1
     *  Tendering Terms
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\CallForTendersDocumentReference
     */
    public function getCallForTendersDocumentReference()
    {
        return $this->callForTendersDocumentReference;
    }

    /**
     * Sets a new callForTendersDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Call For Tenders_ Document Reference. Document Reference
     *  A reference to the Call for Tender associated with these tendering terms.
     *  0..1
     *  Tendering Terms
     *  Call For Tenders
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\CallForTendersDocumentReference $callForTendersDocumentReference
     * @return self
     */
    public function setCallForTendersDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\CallForTendersDocumentReference $callForTendersDocumentReference)
    {
        $this->callForTendersDocumentReference = $callForTendersDocumentReference;
        return $this;
    }

    /**
     * Gets as warrantyValidityPeriod
     *
     * ASBIE
     *  Tendering Terms. Warranty Validity_ Period. Period
     *  The period during which a warranty for work, service, or goods associated with these tendering terms is valid.
     *  0..1
     *  Tendering Terms
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\WarrantyValidityPeriod
     */
    public function getWarrantyValidityPeriod()
    {
        return $this->warrantyValidityPeriod;
    }

    /**
     * Sets a new warrantyValidityPeriod
     *
     * ASBIE
     *  Tendering Terms. Warranty Validity_ Period. Period
     *  The period during which a warranty for work, service, or goods associated with these tendering terms is valid.
     *  0..1
     *  Tendering Terms
     *  Warranty Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod
     * @return self
     */
    public function setWarrantyValidityPeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\WarrantyValidityPeriod $warrantyValidityPeriod)
    {
        $this->warrantyValidityPeriod = $warrantyValidityPeriod;
        return $this;
    }

    /**
     * Adds as paymentTerms
     *
     * ASBIE
     *  Tendering Terms. Payment Terms
     *  A specification of payment terms associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentTerms $paymentTerms
     */
    public function addToPaymentTerms(\Greenter\Ubl\Entity\CommonAggregateComponents\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms[] = $paymentTerms;
        return $this;
    }

    /**
     * isset paymentTerms
     *
     * ASBIE
     *  Tendering Terms. Payment Terms
     *  A specification of payment terms associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentTerms($index)
    {
        return isset($this->paymentTerms[$index]);
    }

    /**
     * unset paymentTerms
     *
     * ASBIE
     *  Tendering Terms. Payment Terms
     *  A specification of payment terms associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentTerms($index)
    {
        unset($this->paymentTerms[$index]);
    }

    /**
     * Gets as paymentTerms
     *
     * ASBIE
     *  Tendering Terms. Payment Terms
     *  A specification of payment terms associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentTerms[]
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * ASBIE
     *  Tendering Terms. Payment Terms
     *  A specification of payment terms associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentTerms[] $paymentTerms
     * @return self
     */
    public function setPaymentTerms(array $paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Adds as tendererQualificationRequest
     *
     * ASBIE
     *  Tendering Terms. Tenderer Qualification Request
     *  Required set of qualifications for a tenderer in this tendering process.
     *  0..n
     *  Tendering Terms
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TendererQualificationRequest $tendererQualificationRequest
     */
    public function addToTendererQualificationRequest(\Greenter\Ubl\Entity\CommonAggregateComponents\TendererQualificationRequest $tendererQualificationRequest)
    {
        $this->tendererQualificationRequest[] = $tendererQualificationRequest;
        return $this;
    }

    /**
     * isset tendererQualificationRequest
     *
     * ASBIE
     *  Tendering Terms. Tenderer Qualification Request
     *  Required set of qualifications for a tenderer in this tendering process.
     *  0..n
     *  Tendering Terms
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTendererQualificationRequest($index)
    {
        return isset($this->tendererQualificationRequest[$index]);
    }

    /**
     * unset tendererQualificationRequest
     *
     * ASBIE
     *  Tendering Terms. Tenderer Qualification Request
     *  Required set of qualifications for a tenderer in this tendering process.
     *  0..n
     *  Tendering Terms
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTendererQualificationRequest($index)
    {
        unset($this->tendererQualificationRequest[$index]);
    }

    /**
     * Gets as tendererQualificationRequest
     *
     * ASBIE
     *  Tendering Terms. Tenderer Qualification Request
     *  Required set of qualifications for a tenderer in this tendering process.
     *  0..n
     *  Tendering Terms
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\TendererQualificationRequest[]
     */
    public function getTendererQualificationRequest()
    {
        return $this->tendererQualificationRequest;
    }

    /**
     * Sets a new tendererQualificationRequest
     *
     * ASBIE
     *  Tendering Terms. Tenderer Qualification Request
     *  Required set of qualifications for a tenderer in this tendering process.
     *  0..n
     *  Tendering Terms
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *  Tenderer Qualification Request
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TendererQualificationRequest[] $tendererQualificationRequest
     * @return self
     */
    public function setTendererQualificationRequest(array $tendererQualificationRequest)
    {
        $this->tendererQualificationRequest = $tendererQualificationRequest;
        return $this;
    }

    /**
     * Adds as allowedSubcontractTerms
     *
     * ASBIE
     *  Tendering Terms. Allowed_ Subcontract Terms. Subcontract Terms
     *  Subcontract terms for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Allowed
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AllowedSubcontractTerms $allowedSubcontractTerms
     */
    public function addToAllowedSubcontractTerms(\Greenter\Ubl\Entity\CommonAggregateComponents\AllowedSubcontractTerms $allowedSubcontractTerms)
    {
        $this->allowedSubcontractTerms[] = $allowedSubcontractTerms;
        return $this;
    }

    /**
     * isset allowedSubcontractTerms
     *
     * ASBIE
     *  Tendering Terms. Allowed_ Subcontract Terms. Subcontract Terms
     *  Subcontract terms for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Allowed
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllowedSubcontractTerms($index)
    {
        return isset($this->allowedSubcontractTerms[$index]);
    }

    /**
     * unset allowedSubcontractTerms
     *
     * ASBIE
     *  Tendering Terms. Allowed_ Subcontract Terms. Subcontract Terms
     *  Subcontract terms for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Allowed
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllowedSubcontractTerms($index)
    {
        unset($this->allowedSubcontractTerms[$index]);
    }

    /**
     * Gets as allowedSubcontractTerms
     *
     * ASBIE
     *  Tendering Terms. Allowed_ Subcontract Terms. Subcontract Terms
     *  Subcontract terms for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Allowed
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\AllowedSubcontractTerms[]
     */
    public function getAllowedSubcontractTerms()
    {
        return $this->allowedSubcontractTerms;
    }

    /**
     * Sets a new allowedSubcontractTerms
     *
     * ASBIE
     *  Tendering Terms. Allowed_ Subcontract Terms. Subcontract Terms
     *  Subcontract terms for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Allowed
     *  Subcontract Terms
     *  Subcontract Terms
     *  Subcontract Terms
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AllowedSubcontractTerms[] $allowedSubcontractTerms
     * @return self
     */
    public function setAllowedSubcontractTerms(array $allowedSubcontractTerms)
    {
        $this->allowedSubcontractTerms = $allowedSubcontractTerms;
        return $this;
    }

    /**
     * Adds as tenderPreparation
     *
     * ASBIE
     *  Tendering Terms. Tender Preparation
     *  Directions for preparing a tender for the+D2057 tendering process.
     *  0..n
     *  Tendering Terms
     *  Tender Preparation
     *  Tender Preparation
     *  Tender Preparation
     *  Curricula required, Experience required, ....
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TenderPreparation $tenderPreparation
     */
    public function addToTenderPreparation(\Greenter\Ubl\Entity\CommonAggregateComponents\TenderPreparation $tenderPreparation)
    {
        $this->tenderPreparation[] = $tenderPreparation;
        return $this;
    }

    /**
     * isset tenderPreparation
     *
     * ASBIE
     *  Tendering Terms. Tender Preparation
     *  Directions for preparing a tender for the+D2057 tendering process.
     *  0..n
     *  Tendering Terms
     *  Tender Preparation
     *  Tender Preparation
     *  Tender Preparation
     *  Curricula required, Experience required, ....
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderPreparation($index)
    {
        return isset($this->tenderPreparation[$index]);
    }

    /**
     * unset tenderPreparation
     *
     * ASBIE
     *  Tendering Terms. Tender Preparation
     *  Directions for preparing a tender for the+D2057 tendering process.
     *  0..n
     *  Tendering Terms
     *  Tender Preparation
     *  Tender Preparation
     *  Tender Preparation
     *  Curricula required, Experience required, ....
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderPreparation($index)
    {
        unset($this->tenderPreparation[$index]);
    }

    /**
     * Gets as tenderPreparation
     *
     * ASBIE
     *  Tendering Terms. Tender Preparation
     *  Directions for preparing a tender for the+D2057 tendering process.
     *  0..n
     *  Tendering Terms
     *  Tender Preparation
     *  Tender Preparation
     *  Tender Preparation
     *  Curricula required, Experience required, ....
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\TenderPreparation[]
     */
    public function getTenderPreparation()
    {
        return $this->tenderPreparation;
    }

    /**
     * Sets a new tenderPreparation
     *
     * ASBIE
     *  Tendering Terms. Tender Preparation
     *  Directions for preparing a tender for the+D2057 tendering process.
     *  0..n
     *  Tendering Terms
     *  Tender Preparation
     *  Tender Preparation
     *  Tender Preparation
     *  Curricula required, Experience required, ....
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TenderPreparation[] $tenderPreparation
     * @return self
     */
    public function setTenderPreparation(array $tenderPreparation)
    {
        $this->tenderPreparation = $tenderPreparation;
        return $this;
    }

    /**
     * Adds as contractExecutionRequirement
     *
     * ASBIE
     *  Tendering Terms. Contract Execution Requirement
     *  A requirement relating to execution of the contract that will be awarded as a result of the tendering process.
     *  0..n
     *  Tendering Terms
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ContractExecutionRequirement $contractExecutionRequirement
     */
    public function addToContractExecutionRequirement(\Greenter\Ubl\Entity\CommonAggregateComponents\ContractExecutionRequirement $contractExecutionRequirement)
    {
        $this->contractExecutionRequirement[] = $contractExecutionRequirement;
        return $this;
    }

    /**
     * isset contractExecutionRequirement
     *
     * ASBIE
     *  Tendering Terms. Contract Execution Requirement
     *  A requirement relating to execution of the contract that will be awarded as a result of the tendering process.
     *  0..n
     *  Tendering Terms
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContractExecutionRequirement($index)
    {
        return isset($this->contractExecutionRequirement[$index]);
    }

    /**
     * unset contractExecutionRequirement
     *
     * ASBIE
     *  Tendering Terms. Contract Execution Requirement
     *  A requirement relating to execution of the contract that will be awarded as a result of the tendering process.
     *  0..n
     *  Tendering Terms
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContractExecutionRequirement($index)
    {
        unset($this->contractExecutionRequirement[$index]);
    }

    /**
     * Gets as contractExecutionRequirement
     *
     * ASBIE
     *  Tendering Terms. Contract Execution Requirement
     *  A requirement relating to execution of the contract that will be awarded as a result of the tendering process.
     *  0..n
     *  Tendering Terms
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ContractExecutionRequirement[]
     */
    public function getContractExecutionRequirement()
    {
        return $this->contractExecutionRequirement;
    }

    /**
     * Sets a new contractExecutionRequirement
     *
     * ASBIE
     *  Tendering Terms. Contract Execution Requirement
     *  A requirement relating to execution of the contract that will be awarded as a result of the tendering process.
     *  0..n
     *  Tendering Terms
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *  Contract Execution Requirement
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ContractExecutionRequirement[] $contractExecutionRequirement
     * @return self
     */
    public function setContractExecutionRequirement(array $contractExecutionRequirement)
    {
        $this->contractExecutionRequirement = $contractExecutionRequirement;
        return $this;
    }

    /**
     * Gets as awardingTerms
     *
     * ASBIE
     *  Tendering Terms. Awarding Terms
     *  The terms in the tendering process for awarding the contract for a project.
     *  0..1
     *  Tendering Terms
     *  Awarding Terms
     *  Awarding Terms
     *  Awarding Terms
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\AwardingTerms
     */
    public function getAwardingTerms()
    {
        return $this->awardingTerms;
    }

    /**
     * Sets a new awardingTerms
     *
     * ASBIE
     *  Tendering Terms. Awarding Terms
     *  The terms in the tendering process for awarding the contract for a project.
     *  0..1
     *  Tendering Terms
     *  Awarding Terms
     *  Awarding Terms
     *  Awarding Terms
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AwardingTerms $awardingTerms
     * @return self
     */
    public function setAwardingTerms(\Greenter\Ubl\Entity\CommonAggregateComponents\AwardingTerms $awardingTerms)
    {
        $this->awardingTerms = $awardingTerms;
        return $this;
    }

    /**
     * Gets as additionalInformationParty
     *
     * ASBIE
     *  Tendering Terms. Additional Information_ Party. Party
     *  A party that has additional information about the tendering process.
     *  0..1
     *  Tendering Terms
     *  Additional Information
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\AdditionalInformationParty
     */
    public function getAdditionalInformationParty()
    {
        return $this->additionalInformationParty;
    }

    /**
     * Sets a new additionalInformationParty
     *
     * ASBIE
     *  Tendering Terms. Additional Information_ Party. Party
     *  A party that has additional information about the tendering process.
     *  0..1
     *  Tendering Terms
     *  Additional Information
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AdditionalInformationParty $additionalInformationParty
     * @return self
     */
    public function setAdditionalInformationParty(\Greenter\Ubl\Entity\CommonAggregateComponents\AdditionalInformationParty $additionalInformationParty)
    {
        $this->additionalInformationParty = $additionalInformationParty;
        return $this;
    }

    /**
     * Gets as documentProviderParty
     *
     * ASBIE
     *  Tendering Terms. Document Provider_ Party. Party
     *  The party that has the contract documents for the tendering process.
     *  0..1
     *  Tendering Terms
     *  Document Provider
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\DocumentProviderParty
     */
    public function getDocumentProviderParty()
    {
        return $this->documentProviderParty;
    }

    /**
     * Sets a new documentProviderParty
     *
     * ASBIE
     *  Tendering Terms. Document Provider_ Party. Party
     *  The party that has the contract documents for the tendering process.
     *  0..1
     *  Tendering Terms
     *  Document Provider
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DocumentProviderParty $documentProviderParty
     * @return self
     */
    public function setDocumentProviderParty(\Greenter\Ubl\Entity\CommonAggregateComponents\DocumentProviderParty $documentProviderParty)
    {
        $this->documentProviderParty = $documentProviderParty;
        return $this;
    }

    /**
     * Gets as tenderRecipientParty
     *
     * ASBIE
     *  Tendering Terms. Tender Recipient_ Party. Party
     *  The party to which tenders should be presented.
     *  0..1
     *  Tendering Terms
     *  Tender Recipient
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\TenderRecipientParty
     */
    public function getTenderRecipientParty()
    {
        return $this->tenderRecipientParty;
    }

    /**
     * Sets a new tenderRecipientParty
     *
     * ASBIE
     *  Tendering Terms. Tender Recipient_ Party. Party
     *  The party to which tenders should be presented.
     *  0..1
     *  Tendering Terms
     *  Tender Recipient
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TenderRecipientParty $tenderRecipientParty
     * @return self
     */
    public function setTenderRecipientParty(\Greenter\Ubl\Entity\CommonAggregateComponents\TenderRecipientParty $tenderRecipientParty)
    {
        $this->tenderRecipientParty = $tenderRecipientParty;
        return $this;
    }

    /**
     * Gets as contractResponsibleParty
     *
     * ASBIE
     *  Tendering Terms. Contract Responsible_ Party. Party
     *  The party responsible for the execution of the contract.
     *  0..1
     *  Tendering Terms
     *  Contract Responsible
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ContractResponsibleParty
     */
    public function getContractResponsibleParty()
    {
        return $this->contractResponsibleParty;
    }

    /**
     * Sets a new contractResponsibleParty
     *
     * ASBIE
     *  Tendering Terms. Contract Responsible_ Party. Party
     *  The party responsible for the execution of the contract.
     *  0..1
     *  Tendering Terms
     *  Contract Responsible
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ContractResponsibleParty $contractResponsibleParty
     * @return self
     */
    public function setContractResponsibleParty(\Greenter\Ubl\Entity\CommonAggregateComponents\ContractResponsibleParty $contractResponsibleParty)
    {
        $this->contractResponsibleParty = $contractResponsibleParty;
        return $this;
    }

    /**
     * Adds as tenderEvaluationParty
     *
     * ASBIE
     *  Tendering Terms. Tender Evaluation_ Party. Party
     *  A party in the contracting authority responsible for evaluating tenders received.
     *  0..n
     *  Tendering Terms
     *  Tender Evaluation
     *  Party
     *  Party
     *  Party
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TenderEvaluationParty $tenderEvaluationParty
     */
    public function addToTenderEvaluationParty(\Greenter\Ubl\Entity\CommonAggregateComponents\TenderEvaluationParty $tenderEvaluationParty)
    {
        $this->tenderEvaluationParty[] = $tenderEvaluationParty;
        return $this;
    }

    /**
     * isset tenderEvaluationParty
     *
     * ASBIE
     *  Tendering Terms. Tender Evaluation_ Party. Party
     *  A party in the contracting authority responsible for evaluating tenders received.
     *  0..n
     *  Tendering Terms
     *  Tender Evaluation
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTenderEvaluationParty($index)
    {
        return isset($this->tenderEvaluationParty[$index]);
    }

    /**
     * unset tenderEvaluationParty
     *
     * ASBIE
     *  Tendering Terms. Tender Evaluation_ Party. Party
     *  A party in the contracting authority responsible for evaluating tenders received.
     *  0..n
     *  Tendering Terms
     *  Tender Evaluation
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTenderEvaluationParty($index)
    {
        unset($this->tenderEvaluationParty[$index]);
    }

    /**
     * Gets as tenderEvaluationParty
     *
     * ASBIE
     *  Tendering Terms. Tender Evaluation_ Party. Party
     *  A party in the contracting authority responsible for evaluating tenders received.
     *  0..n
     *  Tendering Terms
     *  Tender Evaluation
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\TenderEvaluationParty[]
     */
    public function getTenderEvaluationParty()
    {
        return $this->tenderEvaluationParty;
    }

    /**
     * Sets a new tenderEvaluationParty
     *
     * ASBIE
     *  Tendering Terms. Tender Evaluation_ Party. Party
     *  A party in the contracting authority responsible for evaluating tenders received.
     *  0..n
     *  Tendering Terms
     *  Tender Evaluation
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TenderEvaluationParty[] $tenderEvaluationParty
     * @return self
     */
    public function setTenderEvaluationParty(array $tenderEvaluationParty)
    {
        $this->tenderEvaluationParty = $tenderEvaluationParty;
        return $this;
    }

    /**
     * Gets as tenderValidityPeriod
     *
     * ASBIE
     *  Tendering Terms. Tender Validity_ Period. Period
     *  The period during which tenders submitted for this tendering process must remain valid.
     *  0..1
     *  Tendering Terms
     *  Tender Validity
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\TenderValidityPeriod
     */
    public function getTenderValidityPeriod()
    {
        return $this->tenderValidityPeriod;
    }

    /**
     * Sets a new tenderValidityPeriod
     *
     * ASBIE
     *  Tendering Terms. Tender Validity_ Period. Period
     *  The period during which tenders submitted for this tendering process must remain valid.
     *  0..1
     *  Tendering Terms
     *  Tender Validity
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TenderValidityPeriod $tenderValidityPeriod
     * @return self
     */
    public function setTenderValidityPeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\TenderValidityPeriod $tenderValidityPeriod)
    {
        $this->tenderValidityPeriod = $tenderValidityPeriod;
        return $this;
    }

    /**
     * Gets as contractAcceptancePeriod
     *
     * ASBIE
     *  Tendering Terms. Contract Acceptance_ Period. Period
     *  The period of time during which the contracting authority may accept a contract.
     *  0..1
     *  Tendering Terms
     *  Contract Acceptance
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ContractAcceptancePeriod
     */
    public function getContractAcceptancePeriod()
    {
        return $this->contractAcceptancePeriod;
    }

    /**
     * Sets a new contractAcceptancePeriod
     *
     * ASBIE
     *  Tendering Terms. Contract Acceptance_ Period. Period
     *  The period of time during which the contracting authority may accept a contract.
     *  0..1
     *  Tendering Terms
     *  Contract Acceptance
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ContractAcceptancePeriod $contractAcceptancePeriod
     * @return self
     */
    public function setContractAcceptancePeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\ContractAcceptancePeriod $contractAcceptancePeriod)
    {
        $this->contractAcceptancePeriod = $contractAcceptancePeriod;
        return $this;
    }

    /**
     * Gets as appealTerms
     *
     * ASBIE
     *  Tendering Terms. Appeal Terms
     *  Information about the terms to present for an appeal against a tender award.
     *  0..1
     *  Tendering Terms
     *  Appeal Terms
     *  Appeal Terms
     *  Appeal Terms
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\AppealTerms
     */
    public function getAppealTerms()
    {
        return $this->appealTerms;
    }

    /**
     * Sets a new appealTerms
     *
     * ASBIE
     *  Tendering Terms. Appeal Terms
     *  Information about the terms to present for an appeal against a tender award.
     *  0..1
     *  Tendering Terms
     *  Appeal Terms
     *  Appeal Terms
     *  Appeal Terms
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AppealTerms $appealTerms
     * @return self
     */
    public function setAppealTerms(\Greenter\Ubl\Entity\CommonAggregateComponents\AppealTerms $appealTerms)
    {
        $this->appealTerms = $appealTerms;
        return $this;
    }

    /**
     * Adds as language
     *
     * ASBIE
     *  Tendering Terms. Language
     *  One of the default languages specified for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Language
     *  Language
     *  Language
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Language $language
     */
    public function addToLanguage(\Greenter\Ubl\Entity\CommonAggregateComponents\Language $language)
    {
        $this->language[] = $language;
        return $this;
    }

    /**
     * isset language
     *
     * ASBIE
     *  Tendering Terms. Language
     *  One of the default languages specified for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Language
     *  Language
     *  Language
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLanguage($index)
    {
        return isset($this->language[$index]);
    }

    /**
     * unset language
     *
     * ASBIE
     *  Tendering Terms. Language
     *  One of the default languages specified for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Language
     *  Language
     *  Language
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLanguage($index)
    {
        unset($this->language[$index]);
    }

    /**
     * Gets as language
     *
     * ASBIE
     *  Tendering Terms. Language
     *  One of the default languages specified for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Language
     *  Language
     *  Language
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Language[]
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * ASBIE
     *  Tendering Terms. Language
     *  One of the default languages specified for the tendering process.
     *  0..n
     *  Tendering Terms
     *  Language
     *  Language
     *  Language
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Language[] $language
     * @return self
     */
    public function setLanguage(array $language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Adds as budgetAccountLine
     *
     * ASBIE
     *  Tendering Terms. Budget Account Line
     *  A budget account line associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Budget Account Line
     *  Budget Account Line
     *  Budget Account Line
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\BudgetAccountLine $budgetAccountLine
     */
    public function addToBudgetAccountLine(\Greenter\Ubl\Entity\CommonAggregateComponents\BudgetAccountLine $budgetAccountLine)
    {
        $this->budgetAccountLine[] = $budgetAccountLine;
        return $this;
    }

    /**
     * isset budgetAccountLine
     *
     * ASBIE
     *  Tendering Terms. Budget Account Line
     *  A budget account line associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Budget Account Line
     *  Budget Account Line
     *  Budget Account Line
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBudgetAccountLine($index)
    {
        return isset($this->budgetAccountLine[$index]);
    }

    /**
     * unset budgetAccountLine
     *
     * ASBIE
     *  Tendering Terms. Budget Account Line
     *  A budget account line associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Budget Account Line
     *  Budget Account Line
     *  Budget Account Line
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBudgetAccountLine($index)
    {
        unset($this->budgetAccountLine[$index]);
    }

    /**
     * Gets as budgetAccountLine
     *
     * ASBIE
     *  Tendering Terms. Budget Account Line
     *  A budget account line associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Budget Account Line
     *  Budget Account Line
     *  Budget Account Line
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\BudgetAccountLine[]
     */
    public function getBudgetAccountLine()
    {
        return $this->budgetAccountLine;
    }

    /**
     * Sets a new budgetAccountLine
     *
     * ASBIE
     *  Tendering Terms. Budget Account Line
     *  A budget account line associated with the tendering process.
     *  0..n
     *  Tendering Terms
     *  Budget Account Line
     *  Budget Account Line
     *  Budget Account Line
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\BudgetAccountLine[] $budgetAccountLine
     * @return self
     */
    public function setBudgetAccountLine(array $budgetAccountLine)
    {
        $this->budgetAccountLine = $budgetAccountLine;
        return $this;
    }

    /**
     * Gets as replacedNoticeDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Replaced Notice_ Document Reference. Document Reference
     *  A class defining a reference to the notice that is being replaced.
     *  0..1
     *  Tendering Terms
     *  Replaced Notice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ReplacedNoticeDocumentReference
     */
    public function getReplacedNoticeDocumentReference()
    {
        return $this->replacedNoticeDocumentReference;
    }

    /**
     * Sets a new replacedNoticeDocumentReference
     *
     * ASBIE
     *  Tendering Terms. Replaced Notice_ Document Reference. Document Reference
     *  A class defining a reference to the notice that is being replaced.
     *  0..1
     *  Tendering Terms
     *  Replaced Notice
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ReplacedNoticeDocumentReference $replacedNoticeDocumentReference
     * @return self
     */
    public function setReplacedNoticeDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\ReplacedNoticeDocumentReference $replacedNoticeDocumentReference)
    {
        $this->replacedNoticeDocumentReference = $replacedNoticeDocumentReference;
        return $this;
    }


}

