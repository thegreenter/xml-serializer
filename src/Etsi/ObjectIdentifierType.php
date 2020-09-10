<?php

namespace Greenter\Ubl\Entity\Etsi;

/**
 * Class representing ObjectIdentifierType
 *
 * 
 * XSD Type: ObjectIdentifierType
 */
class ObjectIdentifierType
{

    /**
     * @var \Greenter\Ubl\Entity\Etsi\IdentifierType $identifier
     */
    private $identifier = null;

    /**
     * @var string $description
     */
    private $description = null;

    /**
     * @var string[] $documentationReferences
     */
    private $documentationReferences = null;

    /**
     * Gets as identifier
     *
     * @return \Greenter\Ubl\Entity\Etsi\IdentifierType
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets a new identifier
     *
     * @param \Greenter\Ubl\Entity\Etsi\IdentifierType $identifier
     * @return self
     */
    public function setIdentifier(\Greenter\Ubl\Entity\Etsi\IdentifierType $identifier)
    {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * Gets as description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Adds as documentationReference
     *
     * @return self
     * @param string $documentationReference
     */
    public function addToDocumentationReferences($documentationReference)
    {
        $this->documentationReferences[] = $documentationReference;
        return $this;
    }

    /**
     * isset documentationReferences
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDocumentationReferences($index)
    {
        return isset($this->documentationReferences[$index]);
    }

    /**
     * unset documentationReferences
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDocumentationReferences($index)
    {
        unset($this->documentationReferences[$index]);
    }

    /**
     * Gets as documentationReferences
     *
     * @return string[]
     */
    public function getDocumentationReferences()
    {
        return $this->documentationReferences;
    }

    /**
     * Sets a new documentationReferences
     *
     * @param string[] $documentationReferences
     * @return self
     */
    public function setDocumentationReferences(array $documentationReferences)
    {
        $this->documentationReferences = $documentationReferences;
        return $this;
    }


}

