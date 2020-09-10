<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing BudgetAccountLineType
 *
 * ABIE
 *  Budget Account Line. Details
 *  A class to define a budget account line.
 *  Budget Account Line
 * XSD Type: BudgetAccountLineType
 */
class BudgetAccountLineType
{

    /**
     * BBIE
     *  Budget Account Line. Identifier
     *  An identifier for this budget account line.
     *  0..1
     *  Budget Account Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Budget Account Line. Total_ Amount. Amount
     *  The total monetary amount for this budget account line.
     *  0..1
     *  Budget Account Line
     *  Total
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TotalAmount $totalAmount
     */
    private $totalAmount = null;

    /**
     * ASBIE
     *  Budget Account Line. Budget Account
     *  An account covering this budget account line.
     *  0..n
     *  Budget Account Line
     *  Budget Account
     *  Budget Account
     *  Budget Account
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\BudgetAccount[] $budgetAccount
     */
    private $budgetAccount = [
        
    ];

    /**
     * Gets as iD
     *
     * BBIE
     *  Budget Account Line. Identifier
     *  An identifier for this budget account line.
     *  0..1
     *  Budget Account Line
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
     *  Budget Account Line. Identifier
     *  An identifier for this budget account line.
     *  0..1
     *  Budget Account Line
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
     * Gets as totalAmount
     *
     * BBIE
     *  Budget Account Line. Total_ Amount. Amount
     *  The total monetary amount for this budget account line.
     *  0..1
     *  Budget Account Line
     *  Total
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TotalAmount
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Sets a new totalAmount
     *
     * BBIE
     *  Budget Account Line. Total_ Amount. Amount
     *  The total monetary amount for this budget account line.
     *  0..1
     *  Budget Account Line
     *  Total
     *  Amount
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TotalAmount $totalAmount
     * @return self
     */
    public function setTotalAmount(\Greenter\Ubl\Entity\CommonBasic\TotalAmount $totalAmount)
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * Adds as budgetAccount
     *
     * ASBIE
     *  Budget Account Line. Budget Account
     *  An account covering this budget account line.
     *  0..n
     *  Budget Account Line
     *  Budget Account
     *  Budget Account
     *  Budget Account
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\BudgetAccount $budgetAccount
     */
    public function addToBudgetAccount(\Greenter\Ubl\Entity\CommonAggregateComponents\BudgetAccount $budgetAccount)
    {
        $this->budgetAccount[] = $budgetAccount;
        return $this;
    }

    /**
     * isset budgetAccount
     *
     * ASBIE
     *  Budget Account Line. Budget Account
     *  An account covering this budget account line.
     *  0..n
     *  Budget Account Line
     *  Budget Account
     *  Budget Account
     *  Budget Account
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBudgetAccount($index)
    {
        return isset($this->budgetAccount[$index]);
    }

    /**
     * unset budgetAccount
     *
     * ASBIE
     *  Budget Account Line. Budget Account
     *  An account covering this budget account line.
     *  0..n
     *  Budget Account Line
     *  Budget Account
     *  Budget Account
     *  Budget Account
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBudgetAccount($index)
    {
        unset($this->budgetAccount[$index]);
    }

    /**
     * Gets as budgetAccount
     *
     * ASBIE
     *  Budget Account Line. Budget Account
     *  An account covering this budget account line.
     *  0..n
     *  Budget Account Line
     *  Budget Account
     *  Budget Account
     *  Budget Account
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\BudgetAccount[]
     */
    public function getBudgetAccount()
    {
        return $this->budgetAccount;
    }

    /**
     * Sets a new budgetAccount
     *
     * ASBIE
     *  Budget Account Line. Budget Account
     *  An account covering this budget account line.
     *  0..n
     *  Budget Account Line
     *  Budget Account
     *  Budget Account
     *  Budget Account
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\BudgetAccount[] $budgetAccount
     * @return self
     */
    public function setBudgetAccount(array $budgetAccount)
    {
        $this->budgetAccount = $budgetAccount;
        return $this;
    }


}

