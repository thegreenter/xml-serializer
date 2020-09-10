<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing SignerRoleType
 *
 * 
 * XSD Type: SignerRoleType
 */
class SignerRoleType
{

    /**
     * @var \Greenter\Ubl\Entity\Etsi\AnyType[] $claimedRoles
     */
    private $claimedRoles = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType[] $certifiedRoles
     */
    private $certifiedRoles = null;

    /**
     * Adds as claimedRole
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Etsi\AnyType $claimedRole
     */
    public function addToClaimedRoles(\Greenter\Ubl\Entity\Etsi\AnyType $claimedRole)
    {
        $this->claimedRoles[] = $claimedRole;
        return $this;
    }

    /**
     * isset claimedRoles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClaimedRoles($index)
    {
        return isset($this->claimedRoles[$index]);
    }

    /**
     * unset claimedRoles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClaimedRoles($index)
    {
        unset($this->claimedRoles[$index]);
    }

    /**
     * Gets as claimedRoles
     *
     * @return \Greenter\Ubl\Entity\Etsi\AnyType[]
     */
    public function getClaimedRoles()
    {
        return $this->claimedRoles;
    }

    /**
     * Sets a new claimedRoles
     *
     * @param \Greenter\Ubl\Entity\Etsi\AnyType[] $claimedRoles
     * @return self
     */
    public function setClaimedRoles(array $claimedRoles)
    {
        $this->claimedRoles = $claimedRoles;
        return $this;
    }

    /**
     * Adds as certifiedRole
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType $certifiedRole
     */
    public function addToCertifiedRoles(\Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType $certifiedRole)
    {
        $this->certifiedRoles[] = $certifiedRole;
        return $this;
    }

    /**
     * isset certifiedRoles
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCertifiedRoles($index)
    {
        return isset($this->certifiedRoles[$index]);
    }

    /**
     * unset certifiedRoles
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCertifiedRoles($index)
    {
        unset($this->certifiedRoles[$index]);
    }

    /**
     * Gets as certifiedRoles
     *
     * @return \Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType[]
     */
    public function getCertifiedRoles()
    {
        return $this->certifiedRoles;
    }

    /**
     * Sets a new certifiedRoles
     *
     * @param \Greenter\Ubl\Entity\Etsi\EncapsulatedPKIDataType[] $certifiedRoles
     * @return self
     */
    public function setCertifiedRoles(array $certifiedRoles)
    {
        $this->certifiedRoles = $certifiedRoles;
        return $this;
    }


}

