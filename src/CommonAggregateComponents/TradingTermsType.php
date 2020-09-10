<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing TradingTermsType
 *
 * ABIE
 *  Trading Terms. Details
 *  A class for describing the terms of a trade agreement.
 *  Trading Terms
 * XSD Type: TradingTermsType
 */
class TradingTermsType
{

    /**
     * BBIE
     *  Trading Terms. Information. Text
     *  Text describing the terms of a trade agreement.
     *  0..n
     *  Trading Terms
     *  Information
     *  Text
     *  Text. Type
     *  Unless credit terms have been expressly agreed by Dell, payment for the products or services shall be made in full before physical delivery of products or services. Customer shall pay for all shipping and handling charges.
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Information[] $information
     */
    private $information = [
        
    ];

    /**
     * BBIE
     *  Trading Terms. Reference. Text
     *  A reference quoting the basis of the terms
     *  0..1
     *  Trading Terms
     *  Reference
     *  Text
     *  Text. Type
     *  http://www1.ap.dell.com/content/topics/topic.aspx/ap/policy/en/au/sales_terms_au?c=au&l=en&s=gen
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Reference $reference
     */
    private $reference = null;

    /**
     * ASBIE
     *  Trading Terms. Applicable_ Address. Address
     *  The address at which these trading terms apply.
     *  0..1
     *  Trading Terms
     *  Applicable
     *  Address
     *  Address
     *  Address
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ApplicableAddress $applicableAddress
     */
    private $applicableAddress = null;

    /**
     * Adds as information
     *
     * BBIE
     *  Trading Terms. Information. Text
     *  Text describing the terms of a trade agreement.
     *  0..n
     *  Trading Terms
     *  Information
     *  Text
     *  Text. Type
     *  Unless credit terms have been expressly agreed by Dell, payment for the products or services shall be made in full before physical delivery of products or services. Customer shall pay for all shipping and handling charges.
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\Information $information
     */
    public function addToInformation(\Greenter\Ubl\Entity\CommonBasic\Information $information)
    {
        $this->information[] = $information;
        return $this;
    }

    /**
     * isset information
     *
     * BBIE
     *  Trading Terms. Information. Text
     *  Text describing the terms of a trade agreement.
     *  0..n
     *  Trading Terms
     *  Information
     *  Text
     *  Text. Type
     *  Unless credit terms have been expressly agreed by Dell, payment for the products or services shall be made in full before physical delivery of products or services. Customer shall pay for all shipping and handling charges.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformation($index)
    {
        return isset($this->information[$index]);
    }

    /**
     * unset information
     *
     * BBIE
     *  Trading Terms. Information. Text
     *  Text describing the terms of a trade agreement.
     *  0..n
     *  Trading Terms
     *  Information
     *  Text
     *  Text. Type
     *  Unless credit terms have been expressly agreed by Dell, payment for the products or services shall be made in full before physical delivery of products or services. Customer shall pay for all shipping and handling charges.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformation($index)
    {
        unset($this->information[$index]);
    }

    /**
     * Gets as information
     *
     * BBIE
     *  Trading Terms. Information. Text
     *  Text describing the terms of a trade agreement.
     *  0..n
     *  Trading Terms
     *  Information
     *  Text
     *  Text. Type
     *  Unless credit terms have been expressly agreed by Dell, payment for the products or services shall be made in full before physical delivery of products or services. Customer shall pay for all shipping and handling charges.
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Information[]
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * BBIE
     *  Trading Terms. Information. Text
     *  Text describing the terms of a trade agreement.
     *  0..n
     *  Trading Terms
     *  Information
     *  Text
     *  Text. Type
     *  Unless credit terms have been expressly agreed by Dell, payment for the products or services shall be made in full before physical delivery of products or services. Customer shall pay for all shipping and handling charges.
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Information[] $information
     * @return self
     */
    public function setInformation(array $information)
    {
        $this->information = $information;
        return $this;
    }

    /**
     * Gets as reference
     *
     * BBIE
     *  Trading Terms. Reference. Text
     *  A reference quoting the basis of the terms
     *  0..1
     *  Trading Terms
     *  Reference
     *  Text
     *  Text. Type
     *  http://www1.ap.dell.com/content/topics/topic.aspx/ap/policy/en/au/sales_terms_au?c=au&l=en&s=gen
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Reference
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * BBIE
     *  Trading Terms. Reference. Text
     *  A reference quoting the basis of the terms
     *  0..1
     *  Trading Terms
     *  Reference
     *  Text
     *  Text. Type
     *  http://www1.ap.dell.com/content/topics/topic.aspx/ap/policy/en/au/sales_terms_au?c=au&l=en&s=gen
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Reference $reference
     * @return self
     */
    public function setReference(\Greenter\Ubl\Entity\CommonBasic\Reference $reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Gets as applicableAddress
     *
     * ASBIE
     *  Trading Terms. Applicable_ Address. Address
     *  The address at which these trading terms apply.
     *  0..1
     *  Trading Terms
     *  Applicable
     *  Address
     *  Address
     *  Address
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ApplicableAddress
     */
    public function getApplicableAddress()
    {
        return $this->applicableAddress;
    }

    /**
     * Sets a new applicableAddress
     *
     * ASBIE
     *  Trading Terms. Applicable_ Address. Address
     *  The address at which these trading terms apply.
     *  0..1
     *  Trading Terms
     *  Applicable
     *  Address
     *  Address
     *  Address
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ApplicableAddress $applicableAddress
     * @return self
     */
    public function setApplicableAddress(\Greenter\Ubl\Entity\CommonAggregateComponents\ApplicableAddress $applicableAddress)
    {
        $this->applicableAddress = $applicableAddress;
        return $this;
    }


}

