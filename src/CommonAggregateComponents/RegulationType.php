<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing RegulationType
 *
 * ABIE
 *  Regulation. Details
 *  A class to describe a regulation.
 *  Regulation
 *  Points to regulation at atomic level
 * XSD Type: RegulationType
 */
class RegulationType
{

    /**
     * BBIE
     *  Regulation. Name
     *  A name for this regulation.
     *  1
     *  Regulation
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Regulation. Legal Reference. Text
     *  Text describing a legal reference.
     *  0..1
     *  Regulation
     *  Legal Reference
     *  Text
     *  Text. Type
     *  Art. 45 2 b
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\LegalReference $legalReference
     */
    private $legalReference = null;

    /**
     * BBIE
     *  Regulation. Ontology URI. Identifier
     *  The Uniform Resource Identifier (URI) of an ontology related to this regulation.
     *  0..1
     *  Regulation
     *  Ontology URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\OntologyURI $ontologyURI
     */
    private $ontologyURI = null;

    /**
     * Gets as name
     *
     * BBIE
     *  Regulation. Name
     *  A name for this regulation.
     *  1
     *  Regulation
     *  Name
     *  Name
     *  Name. Type
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
     *  Regulation. Name
     *  A name for this regulation.
     *  1
     *  Regulation
     *  Name
     *  Name
     *  Name. Type
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
     * Gets as legalReference
     *
     * BBIE
     *  Regulation. Legal Reference. Text
     *  Text describing a legal reference.
     *  0..1
     *  Regulation
     *  Legal Reference
     *  Text
     *  Text. Type
     *  Art. 45 2 b
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\LegalReference
     */
    public function getLegalReference()
    {
        return $this->legalReference;
    }

    /**
     * Sets a new legalReference
     *
     * BBIE
     *  Regulation. Legal Reference. Text
     *  Text describing a legal reference.
     *  0..1
     *  Regulation
     *  Legal Reference
     *  Text
     *  Text. Type
     *  Art. 45 2 b
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\LegalReference $legalReference
     * @return self
     */
    public function setLegalReference(\Greenter\Ubl\Entity\CommonBasic\LegalReference $legalReference)
    {
        $this->legalReference = $legalReference;
        return $this;
    }

    /**
     * Gets as ontologyURI
     *
     * BBIE
     *  Regulation. Ontology URI. Identifier
     *  The Uniform Resource Identifier (URI) of an ontology related to this regulation.
     *  0..1
     *  Regulation
     *  Ontology URI
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\OntologyURI
     */
    public function getOntologyURI()
    {
        return $this->ontologyURI;
    }

    /**
     * Sets a new ontologyURI
     *
     * BBIE
     *  Regulation. Ontology URI. Identifier
     *  The Uniform Resource Identifier (URI) of an ontology related to this regulation.
     *  0..1
     *  Regulation
     *  Ontology URI
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\OntologyURI $ontologyURI
     * @return self
     */
    public function setOntologyURI(\Greenter\Ubl\Entity\CommonBasic\OntologyURI $ontologyURI)
    {
        $this->ontologyURI = $ontologyURI;
        return $this;
    }


}

