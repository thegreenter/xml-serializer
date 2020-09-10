<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing CertIDListType
 *
 * 
 * XSD Type: CertIDListType
 */
class CertIDListType
{

    /**
     * @var \Greenter\Ubl\Entity\Etsi\CertIDType[] $cert
     */
    private $cert = [
        
    ];

    /**
     * Adds as cert
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Etsi\CertIDType $cert
     */
    public function addToCert(\Greenter\Ubl\Entity\Etsi\CertIDType $cert)
    {
        $this->cert[] = $cert;
        return $this;
    }

    /**
     * isset cert
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCert($index)
    {
        return isset($this->cert[$index]);
    }

    /**
     * unset cert
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCert($index)
    {
        unset($this->cert[$index]);
    }

    /**
     * Gets as cert
     *
     * @return \Greenter\Ubl\Entity\Etsi\CertIDType[]
     */
    public function getCert()
    {
        return $this->cert;
    }

    /**
     * Sets a new cert
     *
     * @param \Greenter\Ubl\Entity\Etsi\CertIDType[] $cert
     * @return self
     */
    public function setCert(array $cert)
    {
        $this->cert = $cert;
        return $this;
    }


}

