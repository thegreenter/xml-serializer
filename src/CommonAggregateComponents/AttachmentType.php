<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing AttachmentType
 *
 * ABIE
 *  Attachment. Details
 *  A class to describe an attached document. An attachment can refer to an external document or be included with the document being exchanged.
 *  Attachment
 * XSD Type: AttachmentType
 */
class AttachmentType
{

    /**
     * BBIE
     *  Attachment. Embedded_ Document. Binary Object
     *  A binary large object containing an attached document.
     *  0..1
     *  Attachment
     *  Embedded
     *  Document
     *  Binary Object
     *  Binary Object. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\EmbeddedDocumentBinaryObject $embeddedDocumentBinaryObject
     */
    private $embeddedDocumentBinaryObject = null;

    /**
     * ASBIE
     *  Attachment. External Reference
     *  A reference to an attached document that is external to the document(s) being exchanged.
     *  0..1
     *  Attachment
     *  External Reference
     *  External Reference
     *  External Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ExternalReference $externalReference
     */
    private $externalReference = null;

    /**
     * Gets as embeddedDocumentBinaryObject
     *
     * BBIE
     *  Attachment. Embedded_ Document. Binary Object
     *  A binary large object containing an attached document.
     *  0..1
     *  Attachment
     *  Embedded
     *  Document
     *  Binary Object
     *  Binary Object. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\EmbeddedDocumentBinaryObject
     */
    public function getEmbeddedDocumentBinaryObject()
    {
        return $this->embeddedDocumentBinaryObject;
    }

    /**
     * Sets a new embeddedDocumentBinaryObject
     *
     * BBIE
     *  Attachment. Embedded_ Document. Binary Object
     *  A binary large object containing an attached document.
     *  0..1
     *  Attachment
     *  Embedded
     *  Document
     *  Binary Object
     *  Binary Object. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\EmbeddedDocumentBinaryObject $embeddedDocumentBinaryObject
     * @return self
     */
    public function setEmbeddedDocumentBinaryObject(\Greenter\Ubl\Entity\CommonBasic\EmbeddedDocumentBinaryObject $embeddedDocumentBinaryObject)
    {
        $this->embeddedDocumentBinaryObject = $embeddedDocumentBinaryObject;
        return $this;
    }

    /**
     * Gets as externalReference
     *
     * ASBIE
     *  Attachment. External Reference
     *  A reference to an attached document that is external to the document(s) being exchanged.
     *  0..1
     *  Attachment
     *  External Reference
     *  External Reference
     *  External Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ExternalReference
     */
    public function getExternalReference()
    {
        return $this->externalReference;
    }

    /**
     * Sets a new externalReference
     *
     * ASBIE
     *  Attachment. External Reference
     *  A reference to an attached document that is external to the document(s) being exchanged.
     *  0..1
     *  Attachment
     *  External Reference
     *  External Reference
     *  External Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ExternalReference $externalReference
     * @return self
     */
    public function setExternalReference(\Greenter\Ubl\Entity\CommonAggregateComponents\ExternalReference $externalReference)
    {
        $this->externalReference = $externalReference;
        return $this;
    }


}

