<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing SignedSignaturePropertiesType
 *
 * 
 * XSD Type: SignedSignaturePropertiesType
 */
class SignedSignaturePropertiesType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \DateTime $signingTime
     */
    private $signingTime = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\CertIDType[] $signingCertificate
     */
    private $signingCertificate = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\SignaturePolicyIdentifierType $signaturePolicyIdentifier
     */
    private $signaturePolicyIdentifier = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\SignatureProductionPlaceType $signatureProductionPlace
     */
    private $signatureProductionPlace = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\SignerRoleType $signerRole
     */
    private $signerRole = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as signingTime
     *
     * @return \DateTime
     */
    public function getSigningTime()
    {
        return $this->signingTime;
    }

    /**
     * Sets a new signingTime
     *
     * @param \DateTime $signingTime
     * @return self
     */
    public function setSigningTime(\DateTime $signingTime)
    {
        $this->signingTime = $signingTime;
        return $this;
    }

    /**
     * Adds as cert
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Etsi\CertIDType $cert
     */
    public function addToSigningCertificate(\Greenter\Ubl\Entity\Etsi\CertIDType $cert)
    {
        $this->signingCertificate[] = $cert;
        return $this;
    }

    /**
     * isset signingCertificate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSigningCertificate($index)
    {
        return isset($this->signingCertificate[$index]);
    }

    /**
     * unset signingCertificate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSigningCertificate($index)
    {
        unset($this->signingCertificate[$index]);
    }

    /**
     * Gets as signingCertificate
     *
     * @return \Greenter\Ubl\Entity\Etsi\CertIDType[]
     */
    public function getSigningCertificate()
    {
        return $this->signingCertificate;
    }

    /**
     * Sets a new signingCertificate
     *
     * @param \Greenter\Ubl\Entity\Etsi\CertIDType[] $signingCertificate
     * @return self
     */
    public function setSigningCertificate(array $signingCertificate)
    {
        $this->signingCertificate = $signingCertificate;
        return $this;
    }

    /**
     * Gets as signaturePolicyIdentifier
     *
     * @return \Greenter\Ubl\Entity\Etsi\SignaturePolicyIdentifierType
     */
    public function getSignaturePolicyIdentifier()
    {
        return $this->signaturePolicyIdentifier;
    }

    /**
     * Sets a new signaturePolicyIdentifier
     *
     * @param \Greenter\Ubl\Entity\Etsi\SignaturePolicyIdentifierType $signaturePolicyIdentifier
     * @return self
     */
    public function setSignaturePolicyIdentifier(\Greenter\Ubl\Entity\Etsi\SignaturePolicyIdentifierType $signaturePolicyIdentifier)
    {
        $this->signaturePolicyIdentifier = $signaturePolicyIdentifier;
        return $this;
    }

    /**
     * Gets as signatureProductionPlace
     *
     * @return \Greenter\Ubl\Entity\Etsi\SignatureProductionPlaceType
     */
    public function getSignatureProductionPlace()
    {
        return $this->signatureProductionPlace;
    }

    /**
     * Sets a new signatureProductionPlace
     *
     * @param \Greenter\Ubl\Entity\Etsi\SignatureProductionPlaceType $signatureProductionPlace
     * @return self
     */
    public function setSignatureProductionPlace(\Greenter\Ubl\Entity\Etsi\SignatureProductionPlaceType $signatureProductionPlace)
    {
        $this->signatureProductionPlace = $signatureProductionPlace;
        return $this;
    }

    /**
     * Gets as signerRole
     *
     * @return \Greenter\Ubl\Entity\Etsi\SignerRoleType
     */
    public function getSignerRole()
    {
        return $this->signerRole;
    }

    /**
     * Sets a new signerRole
     *
     * @param \Greenter\Ubl\Entity\Etsi\SignerRoleType $signerRole
     * @return self
     */
    public function setSignerRole(\Greenter\Ubl\Entity\Etsi\SignerRoleType $signerRole)
    {
        $this->signerRole = $signerRole;
        return $this;
    }


}

