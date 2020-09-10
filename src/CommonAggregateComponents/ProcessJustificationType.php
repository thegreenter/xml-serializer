<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ProcessJustificationType
 *
 * ABIE
 *  Process Justification. Details
 *  A class to describe a justification for the choice of tendering process.
 *  Process Justification
 * XSD Type: ProcessJustificationType
 */
class ProcessJustificationType
{

    /**
     * BBIE
     *  Process Justification. Previous_ Cancellation Reason Code. Code
     *  A code signifying the type of the previous tendering process (which is now being cancelled).
     *  0..1
     *  Process Justification
     *  Previous
     *  Cancellation Reason Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PreviousCancellationReasonCode $previousCancellationReasonCode
     */
    private $previousCancellationReasonCode = null;

    /**
     * BBIE
     *  Process Justification. Process_ Reason Code. Code
     *  The reason why the contracting authority has followed a particular tendering procedure for the awarding of a contract, expressed as a code.
     *  0..1
     *  Process Justification
     *  Process
     *  Reason Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ProcessReasonCode $processReasonCode
     */
    private $processReasonCode = null;

    /**
     * BBIE
     *  Process Justification. Process_ Reason. Text
     *  The reason why the contracting authority has followed a particular tendering procedure for the awarding of a contract, expressed as text.
     *  0..n
     *  Process Justification
     *  Process
     *  Reason
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ProcessReason[] $processReason
     */
    private $processReason = [
        
    ];

    /**
     * BBIE
     *  Process Justification. Description. Text
     *  Text providing justification for the selection of this process.
     *  0..n
     *  Process Justification
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as previousCancellationReasonCode
     *
     * BBIE
     *  Process Justification. Previous_ Cancellation Reason Code. Code
     *  A code signifying the type of the previous tendering process (which is now being cancelled).
     *  0..1
     *  Process Justification
     *  Previous
     *  Cancellation Reason Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PreviousCancellationReasonCode
     */
    public function getPreviousCancellationReasonCode()
    {
        return $this->previousCancellationReasonCode;
    }

    /**
     * Sets a new previousCancellationReasonCode
     *
     * BBIE
     *  Process Justification. Previous_ Cancellation Reason Code. Code
     *  A code signifying the type of the previous tendering process (which is now being cancelled).
     *  0..1
     *  Process Justification
     *  Previous
     *  Cancellation Reason Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PreviousCancellationReasonCode $previousCancellationReasonCode
     * @return self
     */
    public function setPreviousCancellationReasonCode(\Greenter\Ubl\Entity\CommonBasic\PreviousCancellationReasonCode $previousCancellationReasonCode)
    {
        $this->previousCancellationReasonCode = $previousCancellationReasonCode;
        return $this;
    }

    /**
     * Gets as processReasonCode
     *
     * BBIE
     *  Process Justification. Process_ Reason Code. Code
     *  The reason why the contracting authority has followed a particular tendering procedure for the awarding of a contract, expressed as a code.
     *  0..1
     *  Process Justification
     *  Process
     *  Reason Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ProcessReasonCode
     */
    public function getProcessReasonCode()
    {
        return $this->processReasonCode;
    }

    /**
     * Sets a new processReasonCode
     *
     * BBIE
     *  Process Justification. Process_ Reason Code. Code
     *  The reason why the contracting authority has followed a particular tendering procedure for the awarding of a contract, expressed as a code.
     *  0..1
     *  Process Justification
     *  Process
     *  Reason Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ProcessReasonCode $processReasonCode
     * @return self
     */
    public function setProcessReasonCode(\Greenter\Ubl\Entity\CommonBasic\ProcessReasonCode $processReasonCode)
    {
        $this->processReasonCode = $processReasonCode;
        return $this;
    }

    /**
     * Adds as processReason
     *
     * BBIE
     *  Process Justification. Process_ Reason. Text
     *  The reason why the contracting authority has followed a particular tendering procedure for the awarding of a contract, expressed as text.
     *  0..n
     *  Process Justification
     *  Process
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\ProcessReason $processReason
     */
    public function addToProcessReason(\Greenter\Ubl\Entity\CommonBasic\ProcessReason $processReason)
    {
        $this->processReason[] = $processReason;
        return $this;
    }

    /**
     * isset processReason
     *
     * BBIE
     *  Process Justification. Process_ Reason. Text
     *  The reason why the contracting authority has followed a particular tendering procedure for the awarding of a contract, expressed as text.
     *  0..n
     *  Process Justification
     *  Process
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProcessReason($index)
    {
        return isset($this->processReason[$index]);
    }

    /**
     * unset processReason
     *
     * BBIE
     *  Process Justification. Process_ Reason. Text
     *  The reason why the contracting authority has followed a particular tendering procedure for the awarding of a contract, expressed as text.
     *  0..n
     *  Process Justification
     *  Process
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProcessReason($index)
    {
        unset($this->processReason[$index]);
    }

    /**
     * Gets as processReason
     *
     * BBIE
     *  Process Justification. Process_ Reason. Text
     *  The reason why the contracting authority has followed a particular tendering procedure for the awarding of a contract, expressed as text.
     *  0..n
     *  Process Justification
     *  Process
     *  Reason
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ProcessReason[]
     */
    public function getProcessReason()
    {
        return $this->processReason;
    }

    /**
     * Sets a new processReason
     *
     * BBIE
     *  Process Justification. Process_ Reason. Text
     *  The reason why the contracting authority has followed a particular tendering procedure for the awarding of a contract, expressed as text.
     *  0..n
     *  Process Justification
     *  Process
     *  Reason
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ProcessReason[] $processReason
     * @return self
     */
    public function setProcessReason(array $processReason)
    {
        $this->processReason = $processReason;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Process Justification. Description. Text
     *  Text providing justification for the selection of this process.
     *  0..n
     *  Process Justification
     *  Description
     *  Text
     *  Text. Type
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
     *  Process Justification. Description. Text
     *  Text providing justification for the selection of this process.
     *  0..n
     *  Process Justification
     *  Description
     *  Text
     *  Text. Type
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
     *  Process Justification. Description. Text
     *  Text providing justification for the selection of this process.
     *  0..n
     *  Process Justification
     *  Description
     *  Text
     *  Text. Type
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
     *  Process Justification. Description. Text
     *  Text providing justification for the selection of this process.
     *  0..n
     *  Process Justification
     *  Description
     *  Text
     *  Text. Type
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
     *  Process Justification. Description. Text
     *  Text providing justification for the selection of this process.
     *  0..n
     *  Process Justification
     *  Description
     *  Text
     *  Text. Type
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

