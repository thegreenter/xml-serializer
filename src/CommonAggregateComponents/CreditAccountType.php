<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing CreditAccountType
 *
 * ABIE
 *  Credit Account. Details
 *  A class to identify a credit account for sales on account.
 *  Credit Account
 * XSD Type: CreditAccountType
 */
class CreditAccountType
{

    /**
     * BBIE
     *  Credit Account. Account Identifier. Identifier
     *  An identifier for this credit account.
     *  1
     *  Credit Account
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *  Customer Code 29
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\AccountID $accountID
     */
    private $accountID = null;

    /**
     * Gets as accountID
     *
     * BBIE
     *  Credit Account. Account Identifier. Identifier
     *  An identifier for this credit account.
     *  1
     *  Credit Account
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *  Customer Code 29
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\AccountID
     */
    public function getAccountID()
    {
        return $this->accountID;
    }

    /**
     * Sets a new accountID
     *
     * BBIE
     *  Credit Account. Account Identifier. Identifier
     *  An identifier for this credit account.
     *  1
     *  Credit Account
     *  Account Identifier
     *  Identifier
     *  Identifier. Type
     *  Customer Code 29
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\AccountID $accountID
     * @return self
     */
    public function setAccountID(\Greenter\Ubl\Entity\CommonBasic\AccountID $accountID)
    {
        $this->accountID = $accountID;
        return $this;
    }


}

