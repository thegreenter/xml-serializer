<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ContactType
 *
 * ABIE
 *  Contact. Details
 *  A class to describe a contactable person or department in an organization.
 *  Contact
 * XSD Type: ContactType
 */
class ContactType
{

    /**
     * BBIE
     *  Contact. Identifier
     *  An identifier for this contact.
     *  0..1
     *  Contact
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Receivals Clerk
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Contact. Name
     *  The name of this contact. It is recommended that this be used for a functional name and not a personal name.
     *  0..1
     *  Contact
     *  Name
     *  Name
     *  Name. Type
     *  Delivery Dock
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Contact. Telephone. Text
     *  The primary telephone number of this contact.
     *  0..1
     *  Contact
     *  Telephone
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Telephone $telephone
     */
    private $telephone = null;

    /**
     * BBIE
     *  Contact. Telefax. Text
     *  The primary fax number of this contact.
     *  0..1
     *  Contact
     *  Telefax
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Telefax $telefax
     */
    private $telefax = null;

    /**
     * BBIE
     *  Contact. Electronic_ Mail. Text
     *  The primary email address of this contact.
     *  0..1
     *  Contact
     *  Electronic
     *  Mail
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ElectronicMail $electronicMail
     */
    private $electronicMail = null;

    /**
     * BBIE
     *  Contact. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, a textual description of the circumstances under which this contact can be used (e.g., "emergency" or "after hours").
     *  0..n
     *  Contact
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  Another means of communication with this contact.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *  Communication
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\OtherCommunication[] $otherCommunication
     */
    private $otherCommunication = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Contact. Identifier
     *  An identifier for this contact.
     *  0..1
     *  Contact
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Receivals Clerk
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
     *  Contact. Identifier
     *  An identifier for this contact.
     *  0..1
     *  Contact
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Receivals Clerk
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
     * BBIE
     *  Contact. Name
     *  The name of this contact. It is recommended that this be used for a functional name and not a personal name.
     *  0..1
     *  Contact
     *  Name
     *  Name
     *  Name. Type
     *  Delivery Dock
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
     *  Contact. Name
     *  The name of this contact. It is recommended that this be used for a functional name and not a personal name.
     *  0..1
     *  Contact
     *  Name
     *  Name
     *  Name. Type
     *  Delivery Dock
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
     * Gets as telephone
     *
     * BBIE
     *  Contact. Telephone. Text
     *  The primary telephone number of this contact.
     *  0..1
     *  Contact
     *  Telephone
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Telephone
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * BBIE
     *  Contact. Telephone. Text
     *  The primary telephone number of this contact.
     *  0..1
     *  Contact
     *  Telephone
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Telephone $telephone
     * @return self
     */
    public function setTelephone(\Greenter\Ubl\Entity\CommonBasic\Telephone $telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Gets as telefax
     *
     * BBIE
     *  Contact. Telefax. Text
     *  The primary fax number of this contact.
     *  0..1
     *  Contact
     *  Telefax
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Telefax
     */
    public function getTelefax()
    {
        return $this->telefax;
    }

    /**
     * Sets a new telefax
     *
     * BBIE
     *  Contact. Telefax. Text
     *  The primary fax number of this contact.
     *  0..1
     *  Contact
     *  Telefax
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Telefax $telefax
     * @return self
     */
    public function setTelefax(\Greenter\Ubl\Entity\CommonBasic\Telefax $telefax)
    {
        $this->telefax = $telefax;
        return $this;
    }

    /**
     * Gets as electronicMail
     *
     * BBIE
     *  Contact. Electronic_ Mail. Text
     *  The primary email address of this contact.
     *  0..1
     *  Contact
     *  Electronic
     *  Mail
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ElectronicMail
     */
    public function getElectronicMail()
    {
        return $this->electronicMail;
    }

    /**
     * Sets a new electronicMail
     *
     * BBIE
     *  Contact. Electronic_ Mail. Text
     *  The primary email address of this contact.
     *  0..1
     *  Contact
     *  Electronic
     *  Mail
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ElectronicMail $electronicMail
     * @return self
     */
    public function setElectronicMail(\Greenter\Ubl\Entity\CommonBasic\ElectronicMail $electronicMail)
    {
        $this->electronicMail = $electronicMail;
        return $this;
    }

    /**
     * Adds as note
     *
     * BBIE
     *  Contact. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, a textual description of the circumstances under which this contact can be used (e.g., "emergency" or "after hours").
     *  0..n
     *  Contact
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
     *  Contact. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, a textual description of the circumstances under which this contact can be used (e.g., "emergency" or "after hours").
     *  0..n
     *  Contact
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
     *  Contact. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, a textual description of the circumstances under which this contact can be used (e.g., "emergency" or "after hours").
     *  0..n
     *  Contact
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
     *  Contact. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, a textual description of the circumstances under which this contact can be used (e.g., "emergency" or "after hours").
     *  0..n
     *  Contact
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
     *  Contact. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures; in particular, a textual description of the circumstances under which this contact can be used (e.g., "emergency" or "after hours").
     *  0..n
     *  Contact
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
     * Adds as otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  Another means of communication with this contact.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *  Communication
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\OtherCommunication $otherCommunication
     */
    public function addToOtherCommunication(\Greenter\Ubl\Entity\CommonAggregateComponents\OtherCommunication $otherCommunication)
    {
        $this->otherCommunication[] = $otherCommunication;
        return $this;
    }

    /**
     * isset otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  Another means of communication with this contact.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *  Communication
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherCommunication($index)
    {
        return isset($this->otherCommunication[$index]);
    }

    /**
     * unset otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  Another means of communication with this contact.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *  Communication
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherCommunication($index)
    {
        unset($this->otherCommunication[$index]);
    }

    /**
     * Gets as otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  Another means of communication with this contact.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *  Communication
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\OtherCommunication[]
     */
    public function getOtherCommunication()
    {
        return $this->otherCommunication;
    }

    /**
     * Sets a new otherCommunication
     *
     * ASBIE
     *  Contact. Other_ Communication. Communication
     *  Another means of communication with this contact.
     *  0..n
     *  Contact
     *  Other
     *  Communication
     *  Communication
     *  Communication
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\OtherCommunication[] $otherCommunication
     * @return self
     */
    public function setOtherCommunication(array $otherCommunication)
    {
        $this->otherCommunication = $otherCommunication;
        return $this;
    }


}

