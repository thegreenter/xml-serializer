<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ExternalReferenceType
 *
 * ABIE
 *  External Reference. Details
 *  A class to describe an external object, such as a document stored at a remote location.
 *  External Reference
 * XSD Type: ExternalReferenceType
 */
class ExternalReferenceType
{

    /**
     * BBIE
     *  External Reference. URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies the external object as an Internet resource.
     *  0..1
     *  External Reference
     *  URI
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\URI $uRI
     */
    private $uRI = null;

    /**
     * BBIE
     *  External Reference. Document Hash. Text
     *  A hash value for the externally stored object.
     *  0..1
     *  External Reference
     *  Document Hash
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\DocumentHash $documentHash
     */
    private $documentHash = null;

    /**
     * BBIE
     *  External Reference. Hash Algorithm Method. Text
     *  A hash algorithm used to calculate the hash value of the externally stored object.
     *  0..1
     *  External Reference
     *  Hash Algorithm Method
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\HashAlgorithmMethod $hashAlgorithmMethod
     */
    private $hashAlgorithmMethod = null;

    /**
     * BBIE
     *  External Reference. Expiry Date. Date
     *  The date on which availability of the resource can no longer be relied upon.
     *  0..1
     *  External Reference
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $expiryDate
     */
    private $expiryDate = null;

    /**
     * BBIE
     *  External Reference. Expiry Time. Time
     *  The time after which availability of the resource can no longer be relied upon.
     *  0..1
     *  External Reference
     *  Expiry Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $expiryTime
     */
    private $expiryTime = null;

    /**
     * BBIE
     *  External Reference. Mime Code. Code
     *  A code signifying the mime type of the external object.
     *  0..1
     *  External Reference
     *  Mime Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\MimeCode $mimeCode
     */
    private $mimeCode = null;

    /**
     * BBIE
     *  External Reference. Format Code. Code
     *  A code signifying the format of the external object.
     *  0..1
     *  External Reference
     *  Format Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\FormatCode $formatCode
     */
    private $formatCode = null;

    /**
     * BBIE
     *  External Reference. Encoding Code. Code
     *  A code signifying the encoding/decoding algorithm used with the external object.
     *  0..1
     *  External Reference
     *  Encoding Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\EncodingCode $encodingCode
     */
    private $encodingCode = null;

    /**
     * BBIE
     *  External Reference. Character Set Code. Code
     *  A code signifying the character set of an external document.
     *  0..1
     *  External Reference
     *  Character Set Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\CharacterSetCode $characterSetCode
     */
    private $characterSetCode = null;

    /**
     * BBIE
     *  External Reference. File Name. Name
     *  The file name of the external object.
     *  0..1
     *  External Reference
     *  File Name
     *  Name
     *  Name. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\FileName $fileName
     */
    private $fileName = null;

    /**
     * BBIE
     *  External Reference. Description. Text
     *  Text describing the external object.
     *  0..n
     *  External Reference
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as uRI
     *
     * BBIE
     *  External Reference. URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies the external object as an Internet resource.
     *  0..1
     *  External Reference
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
     *  External Reference. URI. Identifier
     *  The Uniform Resource Identifier (URI) that identifies the external object as an Internet resource.
     *  0..1
     *  External Reference
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
     * Gets as documentHash
     *
     * BBIE
     *  External Reference. Document Hash. Text
     *  A hash value for the externally stored object.
     *  0..1
     *  External Reference
     *  Document Hash
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\DocumentHash
     */
    public function getDocumentHash()
    {
        return $this->documentHash;
    }

    /**
     * Sets a new documentHash
     *
     * BBIE
     *  External Reference. Document Hash. Text
     *  A hash value for the externally stored object.
     *  0..1
     *  External Reference
     *  Document Hash
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\DocumentHash $documentHash
     * @return self
     */
    public function setDocumentHash(\Greenter\Ubl\Entity\CommonBasic\DocumentHash $documentHash)
    {
        $this->documentHash = $documentHash;
        return $this;
    }

    /**
     * Gets as hashAlgorithmMethod
     *
     * BBIE
     *  External Reference. Hash Algorithm Method. Text
     *  A hash algorithm used to calculate the hash value of the externally stored object.
     *  0..1
     *  External Reference
     *  Hash Algorithm Method
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\HashAlgorithmMethod
     */
    public function getHashAlgorithmMethod()
    {
        return $this->hashAlgorithmMethod;
    }

    /**
     * Sets a new hashAlgorithmMethod
     *
     * BBIE
     *  External Reference. Hash Algorithm Method. Text
     *  A hash algorithm used to calculate the hash value of the externally stored object.
     *  0..1
     *  External Reference
     *  Hash Algorithm Method
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\HashAlgorithmMethod $hashAlgorithmMethod
     * @return self
     */
    public function setHashAlgorithmMethod(\Greenter\Ubl\Entity\CommonBasic\HashAlgorithmMethod $hashAlgorithmMethod)
    {
        $this->hashAlgorithmMethod = $hashAlgorithmMethod;
        return $this;
    }

    /**
     * Gets as expiryDate
     *
     * BBIE
     *  External Reference. Expiry Date. Date
     *  The date on which availability of the resource can no longer be relied upon.
     *  0..1
     *  External Reference
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Sets a new expiryDate
     *
     * BBIE
     *  External Reference. Expiry Date. Date
     *  The date on which availability of the resource can no longer be relied upon.
     *  0..1
     *  External Reference
     *  Expiry Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $expiryDate
     * @return self
     */
    public function setExpiryDate(\DateTime $expiryDate)
    {
        $this->expiryDate = $expiryDate;
        return $this;
    }

    /**
     * Gets as expiryTime
     *
     * BBIE
     *  External Reference. Expiry Time. Time
     *  The time after which availability of the resource can no longer be relied upon.
     *  0..1
     *  External Reference
     *  Expiry Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getExpiryTime()
    {
        return $this->expiryTime;
    }

    /**
     * Sets a new expiryTime
     *
     * BBIE
     *  External Reference. Expiry Time. Time
     *  The time after which availability of the resource can no longer be relied upon.
     *  0..1
     *  External Reference
     *  Expiry Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $expiryTime
     * @return self
     */
    public function setExpiryTime(\DateTime $expiryTime)
    {
        $this->expiryTime = $expiryTime;
        return $this;
    }

    /**
     * Gets as mimeCode
     *
     * BBIE
     *  External Reference. Mime Code. Code
     *  A code signifying the mime type of the external object.
     *  0..1
     *  External Reference
     *  Mime Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\MimeCode
     */
    public function getMimeCode()
    {
        return $this->mimeCode;
    }

    /**
     * Sets a new mimeCode
     *
     * BBIE
     *  External Reference. Mime Code. Code
     *  A code signifying the mime type of the external object.
     *  0..1
     *  External Reference
     *  Mime Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\MimeCode $mimeCode
     * @return self
     */
    public function setMimeCode(\Greenter\Ubl\Entity\CommonBasic\MimeCode $mimeCode)
    {
        $this->mimeCode = $mimeCode;
        return $this;
    }

    /**
     * Gets as formatCode
     *
     * BBIE
     *  External Reference. Format Code. Code
     *  A code signifying the format of the external object.
     *  0..1
     *  External Reference
     *  Format Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\FormatCode
     */
    public function getFormatCode()
    {
        return $this->formatCode;
    }

    /**
     * Sets a new formatCode
     *
     * BBIE
     *  External Reference. Format Code. Code
     *  A code signifying the format of the external object.
     *  0..1
     *  External Reference
     *  Format Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\FormatCode $formatCode
     * @return self
     */
    public function setFormatCode(\Greenter\Ubl\Entity\CommonBasic\FormatCode $formatCode)
    {
        $this->formatCode = $formatCode;
        return $this;
    }

    /**
     * Gets as encodingCode
     *
     * BBIE
     *  External Reference. Encoding Code. Code
     *  A code signifying the encoding/decoding algorithm used with the external object.
     *  0..1
     *  External Reference
     *  Encoding Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\EncodingCode
     */
    public function getEncodingCode()
    {
        return $this->encodingCode;
    }

    /**
     * Sets a new encodingCode
     *
     * BBIE
     *  External Reference. Encoding Code. Code
     *  A code signifying the encoding/decoding algorithm used with the external object.
     *  0..1
     *  External Reference
     *  Encoding Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\EncodingCode $encodingCode
     * @return self
     */
    public function setEncodingCode(\Greenter\Ubl\Entity\CommonBasic\EncodingCode $encodingCode)
    {
        $this->encodingCode = $encodingCode;
        return $this;
    }

    /**
     * Gets as characterSetCode
     *
     * BBIE
     *  External Reference. Character Set Code. Code
     *  A code signifying the character set of an external document.
     *  0..1
     *  External Reference
     *  Character Set Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\CharacterSetCode
     */
    public function getCharacterSetCode()
    {
        return $this->characterSetCode;
    }

    /**
     * Sets a new characterSetCode
     *
     * BBIE
     *  External Reference. Character Set Code. Code
     *  A code signifying the character set of an external document.
     *  0..1
     *  External Reference
     *  Character Set Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\CharacterSetCode $characterSetCode
     * @return self
     */
    public function setCharacterSetCode(\Greenter\Ubl\Entity\CommonBasic\CharacterSetCode $characterSetCode)
    {
        $this->characterSetCode = $characterSetCode;
        return $this;
    }

    /**
     * Gets as fileName
     *
     * BBIE
     *  External Reference. File Name. Name
     *  The file name of the external object.
     *  0..1
     *  External Reference
     *  File Name
     *  Name
     *  Name. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\FileName
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Sets a new fileName
     *
     * BBIE
     *  External Reference. File Name. Name
     *  The file name of the external object.
     *  0..1
     *  External Reference
     *  File Name
     *  Name
     *  Name. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\FileName $fileName
     * @return self
     */
    public function setFileName(\Greenter\Ubl\Entity\CommonBasic\FileName $fileName)
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  External Reference. Description. Text
     *  Text describing the external object.
     *  0..n
     *  External Reference
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
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
     *  External Reference. Description. Text
     *  Text describing the external object.
     *  0..n
     *  External Reference
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
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
     *  External Reference. Description. Text
     *  Text describing the external object.
     *  0..n
     *  External Reference
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
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
     *  External Reference. Description. Text
     *  Text describing the external object.
     *  0..n
     *  External Reference
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
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
     *  External Reference. Description. Text
     *  Text describing the external object.
     *  0..n
     *  External Reference
     *  Description
     *  Text
     *  Text. Type
     *  computer accessories for laptops
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }


}

