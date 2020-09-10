<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing CustomerPartyType
 *
 * ABIE
 *  Customer Party. Details
 *  A class to describe a customer party.
 *  Customer Party
 * XSD Type: CustomerPartyType
 */
class CustomerPartyType
{

    /**
     * BBIE
     *  Customer Party. Customer Assigned_ Account Identifier. Identifier
     *  An identifier for the customer's account, assigned by the customer itself.
     *  0..1
     *  Customer Party
     *  Customer Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\CustomerAssignedAccountID $customerAssignedAccountID
     */
    private $customerAssignedAccountID = null;

    /**
     * BBIE
     *  Customer Party. Supplier Assigned_ Account Identifier. Identifier
     *  An identifier for the customer's account, assigned by the supplier.
     *  0..1
     *  Customer Party
     *  Supplier Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SupplierAssignedAccountID $supplierAssignedAccountID
     */
    private $supplierAssignedAccountID = null;

    /**
     * BBIE
     *  Customer Party. Additional_ Account Identifier. Identifier
     *  An identifier for the customer's account, assigned by a third party.
     *  0..n
     *  Customer Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\AdditionalAccountID[] $additionalAccountID
     */
    private $additionalAccountID = [
        
    ];

    /**
     * ASBIE
     *  Customer Party. Party
     *  The customer party itself.
     *  0..1
     *  Customer Party
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Party $party
     */
    private $party = null;

    /**
     * ASBIE
     *  Customer Party. Delivery_ Contact. Contact
     *  A customer contact for deliveries.
     *  0..1
     *  Customer Party
     *  Delivery
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\DeliveryContact $deliveryContact
     */
    private $deliveryContact = null;

    /**
     * ASBIE
     *  Customer Party. Accounting_ Contact. Contact
     *  A customer contact for accounting.
     *  0..1
     *  Customer Party
     *  Accounting
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\AccountingContact $accountingContact
     */
    private $accountingContact = null;

    /**
     * ASBIE
     *  Customer Party. Buyer_ Contact. Contact
     *  A customer contact for purchasing.
     *  0..1
     *  Customer Party
     *  Buyer
     *  Contact
     *  Contact
     *  Contact
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\BuyerContact $buyerContact
     */
    private $buyerContact = null;

    /**
     * Gets as customerAssignedAccountID
     *
     * BBIE
     *  Customer Party. Customer Assigned_ Account Identifier. Identifier
     *  An identifier for the customer's account, assigned by the customer itself.
     *  0..1
     *  Customer Party
     *  Customer Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\CustomerAssignedAccountID
     */
    public function getCustomerAssignedAccountID()
    {
        return $this->customerAssignedAccountID;
    }

    /**
     * Sets a new customerAssignedAccountID
     *
     * BBIE
     *  Customer Party. Customer Assigned_ Account Identifier. Identifier
     *  An identifier for the customer's account, assigned by the customer itself.
     *  0..1
     *  Customer Party
     *  Customer Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\CustomerAssignedAccountID $customerAssignedAccountID
     * @return self
     */
    public function setCustomerAssignedAccountID(\Greenter\Ubl\Entity\CommonBasic\CustomerAssignedAccountID $customerAssignedAccountID)
    {
        $this->customerAssignedAccountID = $customerAssignedAccountID;
        return $this;
    }

    /**
     * Gets as supplierAssignedAccountID
     *
     * BBIE
     *  Customer Party. Supplier Assigned_ Account Identifier. Identifier
     *  An identifier for the customer's account, assigned by the supplier.
     *  0..1
     *  Customer Party
     *  Supplier Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SupplierAssignedAccountID
     */
    public function getSupplierAssignedAccountID()
    {
        return $this->supplierAssignedAccountID;
    }

    /**
     * Sets a new supplierAssignedAccountID
     *
     * BBIE
     *  Customer Party. Supplier Assigned_ Account Identifier. Identifier
     *  An identifier for the customer's account, assigned by the supplier.
     *  0..1
     *  Customer Party
     *  Supplier Assigned
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SupplierAssignedAccountID $supplierAssignedAccountID
     * @return self
     */
    public function setSupplierAssignedAccountID(\Greenter\Ubl\Entity\CommonBasic\SupplierAssignedAccountID $supplierAssignedAccountID)
    {
        $this->supplierAssignedAccountID = $supplierAssignedAccountID;
        return $this;
    }

    /**
     * Adds as additionalAccountID
     *
     * BBIE
     *  Customer Party. Additional_ Account Identifier. Identifier
     *  An identifier for the customer's account, assigned by a third party.
     *  0..n
     *  Customer Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\AdditionalAccountID $additionalAccountID
     */
    public function addToAdditionalAccountID(\Greenter\Ubl\Entity\CommonBasic\AdditionalAccountID $additionalAccountID)
    {
        $this->additionalAccountID[] = $additionalAccountID;
        return $this;
    }

    /**
     * isset additionalAccountID
     *
     * BBIE
     *  Customer Party. Additional_ Account Identifier. Identifier
     *  An identifier for the customer's account, assigned by a third party.
     *  0..n
     *  Customer Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalAccountID($index)
    {
        return isset($this->additionalAccountID[$index]);
    }

    /**
     * unset additionalAccountID
     *
     * BBIE
     *  Customer Party. Additional_ Account Identifier. Identifier
     *  An identifier for the customer's account, assigned by a third party.
     *  0..n
     *  Customer Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalAccountID($index)
    {
        unset($this->additionalAccountID[$index]);
    }

    /**
     * Gets as additionalAccountID
     *
     * BBIE
     *  Customer Party. Additional_ Account Identifier. Identifier
     *  An identifier for the customer's account, assigned by a third party.
     *  0..n
     *  Customer Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\AdditionalAccountID[]
     */
    public function getAdditionalAccountID()
    {
        return $this->additionalAccountID;
    }

    /**
     * Sets a new additionalAccountID
     *
     * BBIE
     *  Customer Party. Additional_ Account Identifier. Identifier
     *  An identifier for the customer's account, assigned by a third party.
     *  0..n
     *  Customer Party
     *  Additional
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\AdditionalAccountID[] $additionalAccountID
     * @return self
     */
    public function setAdditionalAccountID(array $additionalAccountID)
    {
        $this->additionalAccountID = $additionalAccountID;
        return $this;
    }

    /**
     * Gets as party
     *
     * ASBIE
     *  Customer Party. Party
     *  The customer party itself.
     *  0..1
     *  Customer Party
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Party
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * Sets a new party
     *
     * ASBIE
     *  Customer Party. Party
     *  The customer party itself.
     *  0..1
     *  Customer Party
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Party $party
     * @return self
     */
    public function setParty(\Greenter\Ubl\Entity\CommonAggregateComponents\Party $party)
    {
        $this->party = $party;
        return $this;
    }

    /**
     * Gets as deliveryContact
     *
     * ASBIE
     *  Customer Party. Delivery_ Contact. Contact
     *  A customer contact for deliveries.
     *  0..1
     *  Customer Party
     *  Delivery
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\DeliveryContact
     */
    public function getDeliveryContact()
    {
        return $this->deliveryContact;
    }

    /**
     * Sets a new deliveryContact
     *
     * ASBIE
     *  Customer Party. Delivery_ Contact. Contact
     *  A customer contact for deliveries.
     *  0..1
     *  Customer Party
     *  Delivery
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DeliveryContact $deliveryContact
     * @return self
     */
    public function setDeliveryContact(\Greenter\Ubl\Entity\CommonAggregateComponents\DeliveryContact $deliveryContact)
    {
        $this->deliveryContact = $deliveryContact;
        return $this;
    }

    /**
     * Gets as accountingContact
     *
     * ASBIE
     *  Customer Party. Accounting_ Contact. Contact
     *  A customer contact for accounting.
     *  0..1
     *  Customer Party
     *  Accounting
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\AccountingContact
     */
    public function getAccountingContact()
    {
        return $this->accountingContact;
    }

    /**
     * Sets a new accountingContact
     *
     * ASBIE
     *  Customer Party. Accounting_ Contact. Contact
     *  A customer contact for accounting.
     *  0..1
     *  Customer Party
     *  Accounting
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AccountingContact $accountingContact
     * @return self
     */
    public function setAccountingContact(\Greenter\Ubl\Entity\CommonAggregateComponents\AccountingContact $accountingContact)
    {
        $this->accountingContact = $accountingContact;
        return $this;
    }

    /**
     * Gets as buyerContact
     *
     * ASBIE
     *  Customer Party. Buyer_ Contact. Contact
     *  A customer contact for purchasing.
     *  0..1
     *  Customer Party
     *  Buyer
     *  Contact
     *  Contact
     *  Contact
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\BuyerContact
     */
    public function getBuyerContact()
    {
        return $this->buyerContact;
    }

    /**
     * Sets a new buyerContact
     *
     * ASBIE
     *  Customer Party. Buyer_ Contact. Contact
     *  A customer contact for purchasing.
     *  0..1
     *  Customer Party
     *  Buyer
     *  Contact
     *  Contact
     *  Contact
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\BuyerContact $buyerContact
     * @return self
     */
    public function setBuyerContact(\Greenter\Ubl\Entity\CommonAggregateComponents\BuyerContact $buyerContact)
    {
        $this->buyerContact = $buyerContact;
        return $this;
    }


}

