<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing SignedDataObjectPropertiesType
 *
 * 
 * XSD Type: SignedDataObjectPropertiesType
 */
class SignedDataObjectPropertiesType
{

    /**
     * @var string $id
     */
    private $id = null;

    /**
     * @var \Greenter\Ubl\Entity\Etsi\DataObjectFormatType[] $dataObjectFormat
     */
    private $dataObjectFormat = [
        
    ];

    /**
     * @var \Greenter\Ubl\Entity\Etsi\CommitmentTypeIndicationType[] $commitmentTypeIndication
     */
    private $commitmentTypeIndication = [
        
    ];

    /**
     * @var \Greenter\Ubl\Entity\Etsi\XAdESTimeStampType[] $allDataObjectsTimeStamp
     */
    private $allDataObjectsTimeStamp = [
        
    ];

    /**
     * @var \Greenter\Ubl\Entity\Etsi\XAdESTimeStampType[] $individualDataObjectsTimeStamp
     */
    private $individualDataObjectsTimeStamp = [
        
    ];

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
     * Adds as dataObjectFormat
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Etsi\DataObjectFormatType $dataObjectFormat
     */
    public function addToDataObjectFormat(\Greenter\Ubl\Entity\Etsi\DataObjectFormatType $dataObjectFormat)
    {
        $this->dataObjectFormat[] = $dataObjectFormat;
        return $this;
    }

    /**
     * isset dataObjectFormat
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDataObjectFormat($index)
    {
        return isset($this->dataObjectFormat[$index]);
    }

    /**
     * unset dataObjectFormat
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDataObjectFormat($index)
    {
        unset($this->dataObjectFormat[$index]);
    }

    /**
     * Gets as dataObjectFormat
     *
     * @return \Greenter\Ubl\Entity\Etsi\DataObjectFormatType[]
     */
    public function getDataObjectFormat()
    {
        return $this->dataObjectFormat;
    }

    /**
     * Sets a new dataObjectFormat
     *
     * @param \Greenter\Ubl\Entity\Etsi\DataObjectFormatType[] $dataObjectFormat
     * @return self
     */
    public function setDataObjectFormat(array $dataObjectFormat)
    {
        $this->dataObjectFormat = $dataObjectFormat;
        return $this;
    }

    /**
     * Adds as commitmentTypeIndication
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Etsi\CommitmentTypeIndicationType $commitmentTypeIndication
     */
    public function addToCommitmentTypeIndication(\Greenter\Ubl\Entity\Etsi\CommitmentTypeIndicationType $commitmentTypeIndication)
    {
        $this->commitmentTypeIndication[] = $commitmentTypeIndication;
        return $this;
    }

    /**
     * isset commitmentTypeIndication
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommitmentTypeIndication($index)
    {
        return isset($this->commitmentTypeIndication[$index]);
    }

    /**
     * unset commitmentTypeIndication
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommitmentTypeIndication($index)
    {
        unset($this->commitmentTypeIndication[$index]);
    }

    /**
     * Gets as commitmentTypeIndication
     *
     * @return \Greenter\Ubl\Entity\Etsi\CommitmentTypeIndicationType[]
     */
    public function getCommitmentTypeIndication()
    {
        return $this->commitmentTypeIndication;
    }

    /**
     * Sets a new commitmentTypeIndication
     *
     * @param \Greenter\Ubl\Entity\Etsi\CommitmentTypeIndicationType[] $commitmentTypeIndication
     * @return self
     */
    public function setCommitmentTypeIndication(array $commitmentTypeIndication)
    {
        $this->commitmentTypeIndication = $commitmentTypeIndication;
        return $this;
    }

    /**
     * Adds as allDataObjectsTimeStamp
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Etsi\XAdESTimeStampType $allDataObjectsTimeStamp
     */
    public function addToAllDataObjectsTimeStamp(\Greenter\Ubl\Entity\Etsi\XAdESTimeStampType $allDataObjectsTimeStamp)
    {
        $this->allDataObjectsTimeStamp[] = $allDataObjectsTimeStamp;
        return $this;
    }

    /**
     * isset allDataObjectsTimeStamp
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllDataObjectsTimeStamp($index)
    {
        return isset($this->allDataObjectsTimeStamp[$index]);
    }

    /**
     * unset allDataObjectsTimeStamp
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllDataObjectsTimeStamp($index)
    {
        unset($this->allDataObjectsTimeStamp[$index]);
    }

    /**
     * Gets as allDataObjectsTimeStamp
     *
     * @return \Greenter\Ubl\Entity\Etsi\XAdESTimeStampType[]
     */
    public function getAllDataObjectsTimeStamp()
    {
        return $this->allDataObjectsTimeStamp;
    }

    /**
     * Sets a new allDataObjectsTimeStamp
     *
     * @param \Greenter\Ubl\Entity\Etsi\XAdESTimeStampType[] $allDataObjectsTimeStamp
     * @return self
     */
    public function setAllDataObjectsTimeStamp(array $allDataObjectsTimeStamp)
    {
        $this->allDataObjectsTimeStamp = $allDataObjectsTimeStamp;
        return $this;
    }

    /**
     * Adds as individualDataObjectsTimeStamp
     *
     * @return self
     * @param \Greenter\Ubl\Entity\Etsi\XAdESTimeStampType $individualDataObjectsTimeStamp
     */
    public function addToIndividualDataObjectsTimeStamp(\Greenter\Ubl\Entity\Etsi\XAdESTimeStampType $individualDataObjectsTimeStamp)
    {
        $this->individualDataObjectsTimeStamp[] = $individualDataObjectsTimeStamp;
        return $this;
    }

    /**
     * isset individualDataObjectsTimeStamp
     *
     * @param int|string $index
     * @return bool
     */
    public function issetIndividualDataObjectsTimeStamp($index)
    {
        return isset($this->individualDataObjectsTimeStamp[$index]);
    }

    /**
     * unset individualDataObjectsTimeStamp
     *
     * @param int|string $index
     * @return void
     */
    public function unsetIndividualDataObjectsTimeStamp($index)
    {
        unset($this->individualDataObjectsTimeStamp[$index]);
    }

    /**
     * Gets as individualDataObjectsTimeStamp
     *
     * @return \Greenter\Ubl\Entity\Etsi\XAdESTimeStampType[]
     */
    public function getIndividualDataObjectsTimeStamp()
    {
        return $this->individualDataObjectsTimeStamp;
    }

    /**
     * Sets a new individualDataObjectsTimeStamp
     *
     * @param \Greenter\Ubl\Entity\Etsi\XAdESTimeStampType[] $individualDataObjectsTimeStamp
     * @return self
     */
    public function setIndividualDataObjectsTimeStamp(array $individualDataObjectsTimeStamp)
    {
        $this->individualDataObjectsTimeStamp = $individualDataObjectsTimeStamp;
        return $this;
    }


}

