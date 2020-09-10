<?php

namespace Greenter\Ubl\Entity\Common;

/**
 * Class representing UBLExtensionType
 *
 * A single extension for private use.
 * XSD Type: UBLExtensionType
 */
class UBLExtensionType
{

    /**
     * An identifier for the Extension assigned by the creator of the extension.
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * A name for the Extension assigned by the creator of the extension.
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Name $name
     */
    private $name = null;

    /**
     * An agency that maintains one or more Extensions.
     *
     * @var \Greenter\Ubl\Entity\Common\ExtensionAgencyID $extensionAgencyID
     */
    private $extensionAgencyID = null;

    /**
     * The name of the agency that maintains the Extension.
     *
     * @var \Greenter\Ubl\Entity\Common\ExtensionAgencyName $extensionAgencyName
     */
    private $extensionAgencyName = null;

    /**
     * The version of the Extension.
     *
     * @var \Greenter\Ubl\Entity\Common\ExtensionVersionID $extensionVersionID
     */
    private $extensionVersionID = null;

    /**
     * A URI for the Agency that maintains the Extension.
     *
     * @var \Greenter\Ubl\Entity\Common\ExtensionAgencyURI $extensionAgencyURI
     */
    private $extensionAgencyURI = null;

    /**
     * A URI for the Extension.
     *
     * @var \Greenter\Ubl\Entity\Common\ExtensionURI $extensionURI
     */
    private $extensionURI = null;

    /**
     * A code for reason the Extension is being included.
     *
     * @var \Greenter\Ubl\Entity\Common\ExtensionReasonCode $extensionReasonCode
     */
    private $extensionReasonCode = null;

    /**
     * A description of the reason for the Extension.
     *
     * @var \Greenter\Ubl\Entity\Common\ExtensionReason $extensionReason
     */
    private $extensionReason = null;

    /**
     * The definition of the extension content.
     *
     * @var \Greenter\Ubl\Entity\Common\ExtensionContent $extensionContent
     */
    private $extensionContent = null;

    /**
     * Gets as iD
     *
     * An identifier for the Extension assigned by the creator of the extension.
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
     * An identifier for the Extension assigned by the creator of the extension.
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
     * Gets as name
     *
     * A name for the Extension assigned by the creator of the extension.
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
     * A name for the Extension assigned by the creator of the extension.
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
     * Gets as extensionAgencyID
     *
     * An agency that maintains one or more Extensions.
     *
     * @return \Greenter\Ubl\Entity\Common\ExtensionAgencyID
     */
    public function getExtensionAgencyID()
    {
        return $this->extensionAgencyID;
    }

    /**
     * Sets a new extensionAgencyID
     *
     * An agency that maintains one or more Extensions.
     *
     * @param \Greenter\Ubl\Entity\Common\ExtensionAgencyID $extensionAgencyID
     * @return self
     */
    public function setExtensionAgencyID(\Greenter\Ubl\Entity\Common\ExtensionAgencyID $extensionAgencyID)
    {
        $this->extensionAgencyID = $extensionAgencyID;
        return $this;
    }

    /**
     * Gets as extensionAgencyName
     *
     * The name of the agency that maintains the Extension.
     *
     * @return \Greenter\Ubl\Entity\Common\ExtensionAgencyName
     */
    public function getExtensionAgencyName()
    {
        return $this->extensionAgencyName;
    }

    /**
     * Sets a new extensionAgencyName
     *
     * The name of the agency that maintains the Extension.
     *
     * @param \Greenter\Ubl\Entity\Common\ExtensionAgencyName $extensionAgencyName
     * @return self
     */
    public function setExtensionAgencyName(\Greenter\Ubl\Entity\Common\ExtensionAgencyName $extensionAgencyName)
    {
        $this->extensionAgencyName = $extensionAgencyName;
        return $this;
    }

    /**
     * Gets as extensionVersionID
     *
     * The version of the Extension.
     *
     * @return \Greenter\Ubl\Entity\Common\ExtensionVersionID
     */
    public function getExtensionVersionID()
    {
        return $this->extensionVersionID;
    }

    /**
     * Sets a new extensionVersionID
     *
     * The version of the Extension.
     *
     * @param \Greenter\Ubl\Entity\Common\ExtensionVersionID $extensionVersionID
     * @return self
     */
    public function setExtensionVersionID(\Greenter\Ubl\Entity\Common\ExtensionVersionID $extensionVersionID)
    {
        $this->extensionVersionID = $extensionVersionID;
        return $this;
    }

    /**
     * Gets as extensionAgencyURI
     *
     * A URI for the Agency that maintains the Extension.
     *
     * @return \Greenter\Ubl\Entity\Common\ExtensionAgencyURI
     */
    public function getExtensionAgencyURI()
    {
        return $this->extensionAgencyURI;
    }

    /**
     * Sets a new extensionAgencyURI
     *
     * A URI for the Agency that maintains the Extension.
     *
     * @param \Greenter\Ubl\Entity\Common\ExtensionAgencyURI $extensionAgencyURI
     * @return self
     */
    public function setExtensionAgencyURI(\Greenter\Ubl\Entity\Common\ExtensionAgencyURI $extensionAgencyURI)
    {
        $this->extensionAgencyURI = $extensionAgencyURI;
        return $this;
    }

    /**
     * Gets as extensionURI
     *
     * A URI for the Extension.
     *
     * @return \Greenter\Ubl\Entity\Common\ExtensionURI
     */
    public function getExtensionURI()
    {
        return $this->extensionURI;
    }

    /**
     * Sets a new extensionURI
     *
     * A URI for the Extension.
     *
     * @param \Greenter\Ubl\Entity\Common\ExtensionURI $extensionURI
     * @return self
     */
    public function setExtensionURI(\Greenter\Ubl\Entity\Common\ExtensionURI $extensionURI)
    {
        $this->extensionURI = $extensionURI;
        return $this;
    }

    /**
     * Gets as extensionReasonCode
     *
     * A code for reason the Extension is being included.
     *
     * @return \Greenter\Ubl\Entity\Common\ExtensionReasonCode
     */
    public function getExtensionReasonCode()
    {
        return $this->extensionReasonCode;
    }

    /**
     * Sets a new extensionReasonCode
     *
     * A code for reason the Extension is being included.
     *
     * @param \Greenter\Ubl\Entity\Common\ExtensionReasonCode $extensionReasonCode
     * @return self
     */
    public function setExtensionReasonCode(\Greenter\Ubl\Entity\Common\ExtensionReasonCode $extensionReasonCode)
    {
        $this->extensionReasonCode = $extensionReasonCode;
        return $this;
    }

    /**
     * Gets as extensionReason
     *
     * A description of the reason for the Extension.
     *
     * @return \Greenter\Ubl\Entity\Common\ExtensionReason
     */
    public function getExtensionReason()
    {
        return $this->extensionReason;
    }

    /**
     * Sets a new extensionReason
     *
     * A description of the reason for the Extension.
     *
     * @param \Greenter\Ubl\Entity\Common\ExtensionReason $extensionReason
     * @return self
     */
    public function setExtensionReason(\Greenter\Ubl\Entity\Common\ExtensionReason $extensionReason)
    {
        $this->extensionReason = $extensionReason;
        return $this;
    }

    /**
     * Gets as extensionContent
     *
     * The definition of the extension content.
     *
     * @return \Greenter\Ubl\Entity\Common\ExtensionContent
     */
    public function getExtensionContent()
    {
        return $this->extensionContent;
    }

    /**
     * Sets a new extensionContent
     *
     * The definition of the extension content.
     *
     * @param \Greenter\Ubl\Entity\Common\ExtensionContent $extensionContent
     * @return self
     */
    public function setExtensionContent(\Greenter\Ubl\Entity\Common\ExtensionContent $extensionContent)
    {
        $this->extensionContent = $extensionContent;
        return $this;
    }


}

