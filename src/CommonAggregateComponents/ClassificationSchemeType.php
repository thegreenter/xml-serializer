<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ClassificationSchemeType
 *
 * ABIE
 *  Classification Scheme. Details
 *  A class to define a classification scheme, such as a taxonomy for classifying goods or services.
 *  Classification Scheme
 * XSD Type: ClassificationSchemeType
 */
class ClassificationSchemeType
{

    /**
     * BBIE
     *  Classification Scheme. Identifier
     *  An identifier for this classification scheme.
     *  1
     *  Classification Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Classification Scheme. UUID. Identifier
     *  A universally unique identifier for this classification scheme.
     *  0..1
     *  Classification Scheme
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\UUID $uUID
     */
    private $uUID = null;

    /**
     * BBIE
     *  Classification Scheme. Last_ Revision Date. Date
     *  The date on which this classification scheme was last revised.
     *  0..1
     *  Classification Scheme
     *  Last
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $lastRevisionDate
     */
    private $lastRevisionDate = null;

    /**
     * BBIE
     *  Classification Scheme. Last_ Revision Time. Time
     *  The time at which this classification scheme was last revised.
     *  0..1
     *  Classification Scheme
     *  Last
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $lastRevisionTime
     */
    private $lastRevisionTime = null;

    /**
     * BBIE
     *  Classification Scheme. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Classification Scheme
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
     *  Classification Scheme. Name
     *  The name of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Name
     *  Name
     *  Name. Type
     *  UNSPSC
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Classification Scheme. Description. Text
     *  Text describing this classification scheme.
     *  0..n
     *  Classification Scheme
     *  Description
     *  Text
     *  Text. Type
     *  an open, global multi-sector standard for classification of products and services
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Classification Scheme. Agency Identifier. Identifier
     *  An identifier for the agency that maintains this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Agency Identifier
     *  Identifier
     *  Identifier. Type
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\AgencyID $agencyID
     */
    private $agencyID = null;

    /**
     * BBIE
     *  Classification Scheme. Agency Name. Text
     *  The name of the agency that maintains the classification scheme.
     *  0..1
     *  Classification Scheme
     *  Agency Name
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\AgencyName $agencyName
     */
    private $agencyName = null;

    /**
     * BBIE
     *  Classification Scheme. Version. Identifier
     *  An identifier for the version of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\VersionID $versionID
     */
    private $versionID = null;

    /**
     * BBIE
     *  Classification Scheme. URI. Identifier
     *  The Uniform Resource Identifier (URI) of the documentation for this classification scheme.
     *  0..1
     *  Classification Scheme
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\URI $uRI
     */
    private $uRI = null;

    /**
     * BBIE
     *  Classification Scheme. Scheme_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Scheme
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SchemeURI $schemeURI
     */
    private $schemeURI = null;

    /**
     * BBIE
     *  Classification Scheme. Language. Identifier
     *  An identifier for the language of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Language
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\LanguageID $languageID
     */
    private $languageID = null;

    /**
     * ASBIE
     *  Classification Scheme. Classification Category
     *  A description of a category within this classification scheme.
     *  1..n
     *  Classification Scheme
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ClassificationCategory[] $classificationCategory
     */
    private $classificationCategory = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Classification Scheme. Identifier
     *  An identifier for this classification scheme.
     *  1
     *  Classification Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ID
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * BBIE
     *  Classification Scheme. Identifier
     *  An identifier for this classification scheme.
     *  1
     *  Classification Scheme
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ID $iD
     * @return self
     */
    public function setID(\Greenter\Ubl\Entity\CommonBasic\ID $iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as uUID
     *
     * BBIE
     *  Classification Scheme. UUID. Identifier
     *  A universally unique identifier for this classification scheme.
     *  0..1
     *  Classification Scheme
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\UUID
     */
    public function getUUID()
    {
        return $this->uUID;
    }

    /**
     * Sets a new uUID
     *
     * BBIE
     *  Classification Scheme. UUID. Identifier
     *  A universally unique identifier for this classification scheme.
     *  0..1
     *  Classification Scheme
     *  UUID
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\UUID $uUID
     * @return self
     */
    public function setUUID(\Greenter\Ubl\Entity\CommonBasic\UUID $uUID)
    {
        $this->uUID = $uUID;
        return $this;
    }

    /**
     * Gets as lastRevisionDate
     *
     * BBIE
     *  Classification Scheme. Last_ Revision Date. Date
     *  The date on which this classification scheme was last revised.
     *  0..1
     *  Classification Scheme
     *  Last
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getLastRevisionDate()
    {
        return $this->lastRevisionDate;
    }

    /**
     * Sets a new lastRevisionDate
     *
     * BBIE
     *  Classification Scheme. Last_ Revision Date. Date
     *  The date on which this classification scheme was last revised.
     *  0..1
     *  Classification Scheme
     *  Last
     *  Revision Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $lastRevisionDate
     * @return self
     */
    public function setLastRevisionDate(\DateTime $lastRevisionDate)
    {
        $this->lastRevisionDate = $lastRevisionDate;
        return $this;
    }

    /**
     * Gets as lastRevisionTime
     *
     * BBIE
     *  Classification Scheme. Last_ Revision Time. Time
     *  The time at which this classification scheme was last revised.
     *  0..1
     *  Classification Scheme
     *  Last
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getLastRevisionTime()
    {
        return $this->lastRevisionTime;
    }

    /**
     * Sets a new lastRevisionTime
     *
     * BBIE
     *  Classification Scheme. Last_ Revision Time. Time
     *  The time at which this classification scheme was last revised.
     *  0..1
     *  Classification Scheme
     *  Last
     *  Revision Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $lastRevisionTime
     * @return self
     */
    public function setLastRevisionTime(\DateTime $lastRevisionTime)
    {
        $this->lastRevisionTime = $lastRevisionTime;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Classification Scheme. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Classification Scheme
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
     *  Classification Scheme. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Classification Scheme
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
     *  Classification Scheme. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Classification Scheme
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
     *  Classification Scheme. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Classification Scheme
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
     *  Classification Scheme. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Classification Scheme
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
     * Gets as name
     *
     * BBIE
     *  Classification Scheme. Name
     *  The name of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Name
     *  Name
     *  Name. Type
     *  UNSPSC
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Classification Scheme. Name
     *  The name of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Name
     *  Name
     *  Name. Type
     *  UNSPSC
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Name $name
     * @return self
     */
    public function setName(\Greenter\Ubl\Entity\CommonBasic\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Classification Scheme. Description. Text
     *  Text describing this classification scheme.
     *  0..n
     *  Classification Scheme
     *  Description
     *  Text
     *  Text. Type
     *  an open, global multi-sector standard for classification of products and services
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\Description $description
     */
    public function addToDescription(\Greenter\Ubl\Entity\CommonBasic\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Classification Scheme. Description. Text
     *  Text describing this classification scheme.
     *  0..n
     *  Classification Scheme
     *  Description
     *  Text
     *  Text. Type
     *  an open, global multi-sector standard for classification of products and services
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Classification Scheme. Description. Text
     *  Text describing this classification scheme.
     *  0..n
     *  Classification Scheme
     *  Description
     *  Text
     *  Text. Type
     *  an open, global multi-sector standard for classification of products and services
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Classification Scheme. Description. Text
     *  Text describing this classification scheme.
     *  0..n
     *  Classification Scheme
     *  Description
     *  Text
     *  Text. Type
     *  an open, global multi-sector standard for classification of products and services
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Classification Scheme. Description. Text
     *  Text describing this classification scheme.
     *  0..n
     *  Classification Scheme
     *  Description
     *  Text
     *  Text. Type
     *  an open, global multi-sector standard for classification of products and services
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as agencyID
     *
     * BBIE
     *  Classification Scheme. Agency Identifier. Identifier
     *  An identifier for the agency that maintains this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Agency Identifier
     *  Identifier
     *  Identifier. Type
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\AgencyID
     */
    public function getAgencyID()
    {
        return $this->agencyID;
    }

    /**
     * Sets a new agencyID
     *
     * BBIE
     *  Classification Scheme. Agency Identifier. Identifier
     *  An identifier for the agency that maintains this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Agency Identifier
     *  Identifier
     *  Identifier. Type
     *  Defaults to the UN/EDIFACT data element 3055 code list.
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\AgencyID $agencyID
     * @return self
     */
    public function setAgencyID(\Greenter\Ubl\Entity\CommonBasic\AgencyID $agencyID)
    {
        $this->agencyID = $agencyID;
        return $this;
    }

    /**
     * Gets as agencyName
     *
     * BBIE
     *  Classification Scheme. Agency Name. Text
     *  The name of the agency that maintains the classification scheme.
     *  0..1
     *  Classification Scheme
     *  Agency Name
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\AgencyName
     */
    public function getAgencyName()
    {
        return $this->agencyName;
    }

    /**
     * Sets a new agencyName
     *
     * BBIE
     *  Classification Scheme. Agency Name. Text
     *  The name of the agency that maintains the classification scheme.
     *  0..1
     *  Classification Scheme
     *  Agency Name
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\AgencyName $agencyName
     * @return self
     */
    public function setAgencyName(\Greenter\Ubl\Entity\CommonBasic\AgencyName $agencyName)
    {
        $this->agencyName = $agencyName;
        return $this;
    }

    /**
     * Gets as versionID
     *
     * BBIE
     *  Classification Scheme. Version. Identifier
     *  An identifier for the version of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\VersionID
     */
    public function getVersionID()
    {
        return $this->versionID;
    }

    /**
     * Sets a new versionID
     *
     * BBIE
     *  Classification Scheme. Version. Identifier
     *  An identifier for the version of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Version
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\VersionID $versionID
     * @return self
     */
    public function setVersionID(\Greenter\Ubl\Entity\CommonBasic\VersionID $versionID)
    {
        $this->versionID = $versionID;
        return $this;
    }

    /**
     * Gets as uRI
     *
     * BBIE
     *  Classification Scheme. URI. Identifier
     *  The Uniform Resource Identifier (URI) of the documentation for this classification scheme.
     *  0..1
     *  Classification Scheme
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\URI
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * BBIE
     *  Classification Scheme. URI. Identifier
     *  The Uniform Resource Identifier (URI) of the documentation for this classification scheme.
     *  0..1
     *  Classification Scheme
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\URI $uRI
     * @return self
     */
    public function setURI(\Greenter\Ubl\Entity\CommonBasic\URI $uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

    /**
     * Gets as schemeURI
     *
     * BBIE
     *  Classification Scheme. Scheme_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Scheme
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SchemeURI
     */
    public function getSchemeURI()
    {
        return $this->schemeURI;
    }

    /**
     * Sets a new schemeURI
     *
     * BBIE
     *  Classification Scheme. Scheme_ URI. Identifier
     *  The Uniform Resource Identifier (URI) of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Scheme
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SchemeURI $schemeURI
     * @return self
     */
    public function setSchemeURI(\Greenter\Ubl\Entity\CommonBasic\SchemeURI $schemeURI)
    {
        $this->schemeURI = $schemeURI;
        return $this;
    }

    /**
     * Gets as languageID
     *
     * BBIE
     *  Classification Scheme. Language. Identifier
     *  An identifier for the language of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Language
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\LanguageID
     */
    public function getLanguageID()
    {
        return $this->languageID;
    }

    /**
     * Sets a new languageID
     *
     * BBIE
     *  Classification Scheme. Language. Identifier
     *  An identifier for the language of this classification scheme.
     *  0..1
     *  Classification Scheme
     *  Language
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\LanguageID $languageID
     * @return self
     */
    public function setLanguageID(\Greenter\Ubl\Entity\CommonBasic\LanguageID $languageID)
    {
        $this->languageID = $languageID;
        return $this;
    }

    /**
     * Adds as classificationCategory
     *
     * ASBIE
     *  Classification Scheme. Classification Category
     *  A description of a category within this classification scheme.
     *  1..n
     *  Classification Scheme
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ClassificationCategory $classificationCategory
     */
    public function addToClassificationCategory(\Greenter\Ubl\Entity\CommonAggregateComponents\ClassificationCategory $classificationCategory)
    {
        $this->classificationCategory[] = $classificationCategory;
        return $this;
    }

    /**
     * isset classificationCategory
     *
     * ASBIE
     *  Classification Scheme. Classification Category
     *  A description of a category within this classification scheme.
     *  1..n
     *  Classification Scheme
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassificationCategory($index)
    {
        return isset($this->classificationCategory[$index]);
    }

    /**
     * unset classificationCategory
     *
     * ASBIE
     *  Classification Scheme. Classification Category
     *  A description of a category within this classification scheme.
     *  1..n
     *  Classification Scheme
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassificationCategory($index)
    {
        unset($this->classificationCategory[$index]);
    }

    /**
     * Gets as classificationCategory
     *
     * ASBIE
     *  Classification Scheme. Classification Category
     *  A description of a category within this classification scheme.
     *  1..n
     *  Classification Scheme
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ClassificationCategory[]
     */
    public function getClassificationCategory()
    {
        return $this->classificationCategory;
    }

    /**
     * Sets a new classificationCategory
     *
     * ASBIE
     *  Classification Scheme. Classification Category
     *  A description of a category within this classification scheme.
     *  1..n
     *  Classification Scheme
     *  Classification Category
     *  Classification Category
     *  Classification Category
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ClassificationCategory[] $classificationCategory
     * @return self
     */
    public function setClassificationCategory(array $classificationCategory)
    {
        $this->classificationCategory = $classificationCategory;
        return $this;
    }


}

