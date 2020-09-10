<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing SignaturePolicyIdentifierType
 *
 * 
 * XSD Type: SignaturePolicyIdentifierType
 */
class SignaturePolicyIdentifierType
{

    /**
     * @var \Greenter\Ubl\Entity\Etsi\SignaturePolicyIdType $signaturePolicyId
     */
    private $signaturePolicyId = null;

    /**
     * @var mixed $signaturePolicyImplied
     */
    private $signaturePolicyImplied = null;

    /**
     * Gets as signaturePolicyId
     *
     * @return \Greenter\Ubl\Entity\Etsi\SignaturePolicyIdType
     */
    public function getSignaturePolicyId()
    {
        return $this->signaturePolicyId;
    }

    /**
     * Sets a new signaturePolicyId
     *
     * @param \Greenter\Ubl\Entity\Etsi\SignaturePolicyIdType $signaturePolicyId
     * @return self
     */
    public function setSignaturePolicyId(\Greenter\Ubl\Entity\Etsi\SignaturePolicyIdType $signaturePolicyId)
    {
        $this->signaturePolicyId = $signaturePolicyId;
        return $this;
    }

    /**
     * Gets as signaturePolicyImplied
     *
     * @return mixed
     */
    public function getSignaturePolicyImplied()
    {
        return $this->signaturePolicyImplied;
    }

    /**
     * Sets a new signaturePolicyImplied
     *
     * @param mixed $signaturePolicyImplied
     * @return self
     */
    public function setSignaturePolicyImplied($signaturePolicyImplied)
    {
        $this->signaturePolicyImplied = $signaturePolicyImplied;
        return $this;
    }


}

