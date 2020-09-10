<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing SignaturePolicyIdType
 *
 * 
 * XSD Type: SignaturePolicyIdType
 */
class SignaturePolicyIdType
{

    /**
     * @var \Greenter\Ubl\Entity\Etsi\ObjectIdentifierType $sigPolicyId
     */
    private $sigPolicyId = null;

    /**
     * @var \Greenter\Ubl\Entity\Dsig\Transform[] $transforms
     */
    private $transforms = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\DigestAlgAndValueType $sigPolicyHash
     */
    private $sigPolicyHash = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\AnyType[] $sigPolicyQualifiers
     */
    private $sigPolicyQualifiers = null;

    /**
     * Gets as sigPolicyId
     *
     * @return \Greenter\Ubl\Entity\Etsi\ObjectIdentifierType
     */
    public function getSigPolicyId()
    {
        return $this->sigPolicyId;
    }

    /**
     * Sets a new sigPolicyId
     *
     * @param \Greenter\Ubl\Entity\Etsi\ObjectIdentifierType $sigPolicyId
     * @return self
     */
    public function setSigPolicyId(\Greenter\Ubl\Entity\Etsi\ObjectIdentifierType $sigPolicyId)
    {
        $this->sigPolicyId = $sigPolicyId;
        return $this;
    }

    /**
     * Adds as transform
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Dsig\Transform $transform
     */
    public function addToTransforms(\Greenter\Ubl\Entity\Dsig\Transform $transform)
    {
        $this->transforms[] = $transform;
        return $this;
    }

    /**
     * isset transforms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransforms($index)
    {
        return isset($this->transforms[$index]);
    }

    /**
     * unset transforms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransforms($index)
    {
        unset($this->transforms[$index]);
    }

    /**
     * Gets as transforms
     *
     * @return \Greenter\Ubl\Entity\Dsig\Transform[]
     */
    public function getTransforms()
    {
        return $this->transforms;
    }

    /**
     * Sets a new transforms
     *
     * @param \Greenter\Ubl\Entity\Dsig\Transform[] $transforms
     * @return self
     */
    public function setTransforms(array $transforms)
    {
        $this->transforms = $transforms;
        return $this;
    }

    /**
     * Gets as sigPolicyHash
     *
     * @return \Greenter\Ubl\Entity\Etsi\DigestAlgAndValueType
     */
    public function getSigPolicyHash()
    {
        return $this->sigPolicyHash;
    }

    /**
     * Sets a new sigPolicyHash
     *
     * @param \Greenter\Ubl\Entity\Etsi\DigestAlgAndValueType $sigPolicyHash
     * @return self
     */
    public function setSigPolicyHash(\Greenter\Ubl\Entity\Etsi\DigestAlgAndValueType $sigPolicyHash)
    {
        $this->sigPolicyHash = $sigPolicyHash;
        return $this;
    }

    /**
     * Adds as sigPolicyQualifier
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Etsi\AnyType $sigPolicyQualifier
     */
    public function addToSigPolicyQualifiers(\Greenter\Ubl\Entity\Etsi\AnyType $sigPolicyQualifier)
    {
        $this->sigPolicyQualifiers[] = $sigPolicyQualifier;
        return $this;
    }

    /**
     * isset sigPolicyQualifiers
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSigPolicyQualifiers($index)
    {
        return isset($this->sigPolicyQualifiers[$index]);
    }

    /**
     * unset sigPolicyQualifiers
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSigPolicyQualifiers($index)
    {
        unset($this->sigPolicyQualifiers[$index]);
    }

    /**
     * Gets as sigPolicyQualifiers
     *
     * @return \Greenter\Ubl\Entity\Etsi\AnyType[]
     */
    public function getSigPolicyQualifiers()
    {
        return $this->sigPolicyQualifiers;
    }

    /**
     * Sets a new sigPolicyQualifiers
     *
     * @param \Greenter\Ubl\Entity\Etsi\AnyType[] $sigPolicyQualifiers
     * @return self
     */
    public function setSigPolicyQualifiers(array $sigPolicyQualifiers)
    {
        $this->sigPolicyQualifiers = $sigPolicyQualifiers;
        return $this;
    }


}

