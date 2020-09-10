<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ImmobilizedSecurityType
 *
 * ABIE
 *  Immobilized Security. Details
 *  A class to describe an immobilized security to be used as a guarantee.
 *  Immobilized Security
 * XSD Type: ImmobilizedSecurityType
 */
class ImmobilizedSecurityType
{

    /**
     * BBIE
     *  Immobilized Security. Immobilization Certificate Identifier. Identifier
     *  An identifier for the certificate of this immobilized security.
     *  0..1
     *  Immobilized Security
     *  Immobilization Certificate Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ImmobilizationCertificateID $immobilizationCertificateID
     */
    private $immobilizationCertificateID = null;

    /**
     * BBIE
     *  Immobilized Security. Security Identifier. Identifier
     *  An identifier for the security being immobilized.
     *  0..1
     *  Immobilized Security
     *  Security Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SecurityID $securityID
     */
    private $securityID = null;

    /**
     * BBIE
     *  Immobilized Security. Issue Date. Date
     *  The date on which this immobilized security was issued.
     *  0..1
     *  Immobilized Security
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $issueDate
     */
    private $issueDate = null;

    /**
     * BBIE
     *  Immobilized Security. Face Value. Amount
     *  The value of the security on the day it was immobilized.
     *  0..1
     *  Immobilized Security
     *  Face Value
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\FaceValueAmount $faceValueAmount
     */
    private $faceValueAmount = null;

    /**
     * BBIE
     *  Immobilized Security. Market Value. Amount
     *  The current market value of the immobilized security.
     *  0..1
     *  Immobilized Security
     *  Market Value
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\MarketValueAmount $marketValueAmount
     */
    private $marketValueAmount = null;

    /**
     * BBIE
     *  Immobilized Security. Shares Number. Quantity
     *  The number of shares immobilized.
     *  0..1
     *  Immobilized Security
     *  Shares Number
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SharesNumberQuantity $sharesNumberQuantity
     */
    private $sharesNumberQuantity = null;

    /**
     * ASBIE
     *  Immobilized Security. Issuer_ Party. Party
     *  The party issuing the immobilized security certificate.
     *  0..1
     *  Immobilized Security
     *  Issuer
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\IssuerParty $issuerParty
     */
    private $issuerParty = null;

    /**
     * Gets as immobilizationCertificateID
     *
     * BBIE
     *  Immobilized Security. Immobilization Certificate Identifier. Identifier
     *  An identifier for the certificate of this immobilized security.
     *  0..1
     *  Immobilized Security
     *  Immobilization Certificate Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ImmobilizationCertificateID
     */
    public function getImmobilizationCertificateID()
    {
        return $this->immobilizationCertificateID;
    }

    /**
     * Sets a new immobilizationCertificateID
     *
     * BBIE
     *  Immobilized Security. Immobilization Certificate Identifier. Identifier
     *  An identifier for the certificate of this immobilized security.
     *  0..1
     *  Immobilized Security
     *  Immobilization Certificate Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ImmobilizationCertificateID $immobilizationCertificateID
     * @return self
     */
    public function setImmobilizationCertificateID(\Greenter\Ubl\Entity\CommonBasic\ImmobilizationCertificateID $immobilizationCertificateID)
    {
        $this->immobilizationCertificateID = $immobilizationCertificateID;
        return $this;
    }

    /**
     * Gets as securityID
     *
     * BBIE
     *  Immobilized Security. Security Identifier. Identifier
     *  An identifier for the security being immobilized.
     *  0..1
     *  Immobilized Security
     *  Security Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SecurityID
     */
    public function getSecurityID()
    {
        return $this->securityID;
    }

    /**
     * Sets a new securityID
     *
     * BBIE
     *  Immobilized Security. Security Identifier. Identifier
     *  An identifier for the security being immobilized.
     *  0..1
     *  Immobilized Security
     *  Security Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SecurityID $securityID
     * @return self
     */
    public function setSecurityID(\Greenter\Ubl\Entity\CommonBasic\SecurityID $securityID)
    {
        $this->securityID = $securityID;
        return $this;
    }

    /**
     * Gets as issueDate
     *
     * BBIE
     *  Immobilized Security. Issue Date. Date
     *  The date on which this immobilized security was issued.
     *  0..1
     *  Immobilized Security
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
     *  Immobilized Security. Issue Date. Date
     *  The date on which this immobilized security was issued.
     *  0..1
     *  Immobilized Security
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
     * Gets as faceValueAmount
     *
     * BBIE
     *  Immobilized Security. Face Value. Amount
     *  The value of the security on the day it was immobilized.
     *  0..1
     *  Immobilized Security
     *  Face Value
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\FaceValueAmount
     */
    public function getFaceValueAmount()
    {
        return $this->faceValueAmount;
    }

    /**
     * Sets a new faceValueAmount
     *
     * BBIE
     *  Immobilized Security. Face Value. Amount
     *  The value of the security on the day it was immobilized.
     *  0..1
     *  Immobilized Security
     *  Face Value
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\FaceValueAmount $faceValueAmount
     * @return self
     */
    public function setFaceValueAmount(\Greenter\Ubl\Entity\CommonBasic\FaceValueAmount $faceValueAmount)
    {
        $this->faceValueAmount = $faceValueAmount;
        return $this;
    }

    /**
     * Gets as marketValueAmount
     *
     * BBIE
     *  Immobilized Security. Market Value. Amount
     *  The current market value of the immobilized security.
     *  0..1
     *  Immobilized Security
     *  Market Value
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\MarketValueAmount
     */
    public function getMarketValueAmount()
    {
        return $this->marketValueAmount;
    }

    /**
     * Sets a new marketValueAmount
     *
     * BBIE
     *  Immobilized Security. Market Value. Amount
     *  The current market value of the immobilized security.
     *  0..1
     *  Immobilized Security
     *  Market Value
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\MarketValueAmount $marketValueAmount
     * @return self
     */
    public function setMarketValueAmount(\Greenter\Ubl\Entity\CommonBasic\MarketValueAmount $marketValueAmount)
    {
        $this->marketValueAmount = $marketValueAmount;
        return $this;
    }

    /**
     * Gets as sharesNumberQuantity
     *
     * BBIE
     *  Immobilized Security. Shares Number. Quantity
     *  The number of shares immobilized.
     *  0..1
     *  Immobilized Security
     *  Shares Number
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SharesNumberQuantity
     */
    public function getSharesNumberQuantity()
    {
        return $this->sharesNumberQuantity;
    }

    /**
     * Sets a new sharesNumberQuantity
     *
     * BBIE
     *  Immobilized Security. Shares Number. Quantity
     *  The number of shares immobilized.
     *  0..1
     *  Immobilized Security
     *  Shares Number
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SharesNumberQuantity $sharesNumberQuantity
     * @return self
     */
    public function setSharesNumberQuantity(\Greenter\Ubl\Entity\CommonBasic\SharesNumberQuantity $sharesNumberQuantity)
    {
        $this->sharesNumberQuantity = $sharesNumberQuantity;
        return $this;
    }

    /**
     * Gets as issuerParty
     *
     * ASBIE
     *  Immobilized Security. Issuer_ Party. Party
     *  The party issuing the immobilized security certificate.
     *  0..1
     *  Immobilized Security
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
     *  Immobilized Security. Issuer_ Party. Party
     *  The party issuing the immobilized security certificate.
     *  0..1
     *  Immobilized Security
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


}

