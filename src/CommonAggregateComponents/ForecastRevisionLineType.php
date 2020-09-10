<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ForecastRevisionLineType
 *
 * ABIE
 *  Forecast Revision Line. Details
 *  A class to define a line in a Forecast Revision describing a revision to a line in a Forecast.
 *  Forecast Revision Line
 * XSD Type: ForecastRevisionLineType
 */
class ForecastRevisionLineType
{

    /**
     * BBIE
     *  Forecast Revision Line. Identifier
     *  An identifier for this forecast revision line.
     *  1
     *  Forecast Revision Line
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Forecast Revision Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Revision Line
     *  Note
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Note[] $note
     */
    private $note = [
        
    ];

    /**
     * BBIE
     *  Forecast Revision Line. Description. Text
     *  Text describing the revision to this line.
     *  0..n
     *  Forecast Revision Line
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * BBIE
     *  Forecast Revision Line. Revised_ Forecast Line Identifier. Identifier
     *  An identifier for the revised forecast line.
     *  1
     *  Forecast Revision Line
     *  Revised
     *  Forecast Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\RevisedForecastLineID $revisedForecastLineID
     */
    private $revisedForecastLineID = null;

    /**
     * BBIE
     *  Forecast Revision Line. Source Forecast_ Issue Date. Date
     *  The date on which the forecast modified by this revision was generated or created.
     *  1
     *  Forecast Revision Line
     *  Source Forecast
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @var \DateTime $sourceForecastIssueDate
     */
    private $sourceForecastIssueDate = null;

    /**
     * BBIE
     *  Forecast Revision Line. Source Forecast_ Issue Time. Time
     *  The time at which the forecast modified by this revision was generated or created.
     *  1
     *  Forecast Revision Line
     *  Source Forecast
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @var \DateTime $sourceForecastIssueTime
     */
    private $sourceForecastIssueTime = null;

    /**
     * BBIE
     *  Forecast Revision Line. Adjustment Reason Code. Code
     *  A code signifying the reason for the adjustment specified in this forecast revision line.
     *  0..1
     *  Forecast Revision Line
     *  Adjustment Reason Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\AdjustmentReasonCode $adjustmentReasonCode
     */
    private $adjustmentReasonCode = null;

    /**
     * ASBIE
     *  Forecast Revision Line. Forecast_ Period. Period
     *  The period to which this forecast revision line applies.
     *  0..1
     *  Forecast Revision Line
     *  Forecast
     *  Period
     *  Period
     *  Period
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ForecastPeriod $forecastPeriod
     */
    private $forecastPeriod = null;

    /**
     * ASBIE
     *  Forecast Revision Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  0..1
     *  Forecast Revision Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\SalesItem $salesItem
     */
    private $salesItem = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Forecast Revision Line. Identifier
     *  An identifier for this forecast revision line.
     *  1
     *  Forecast Revision Line
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
     *  Forecast Revision Line. Identifier
     *  An identifier for this forecast revision line.
     *  1
     *  Forecast Revision Line
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
     * Adds as note
     *
     * BBIE
     *  Forecast Revision Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Revision Line
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
     *  Forecast Revision Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Revision Line
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
     *  Forecast Revision Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Revision Line
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
     *  Forecast Revision Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Revision Line
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
     *  Forecast Revision Line. Note. Text
     *  Free-form text conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Forecast Revision Line
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
     * Adds as description
     *
     * BBIE
     *  Forecast Revision Line. Description. Text
     *  Text describing the revision to this line.
     *  0..n
     *  Forecast Revision Line
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
     *  Forecast Revision Line. Description. Text
     *  Text describing the revision to this line.
     *  0..n
     *  Forecast Revision Line
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
     *  Forecast Revision Line. Description. Text
     *  Text describing the revision to this line.
     *  0..n
     *  Forecast Revision Line
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
     *  Forecast Revision Line. Description. Text
     *  Text describing the revision to this line.
     *  0..n
     *  Forecast Revision Line
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
     *  Forecast Revision Line. Description. Text
     *  Text describing the revision to this line.
     *  0..n
     *  Forecast Revision Line
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

    /**
     * Gets as revisedForecastLineID
     *
     * BBIE
     *  Forecast Revision Line. Revised_ Forecast Line Identifier. Identifier
     *  An identifier for the revised forecast line.
     *  1
     *  Forecast Revision Line
     *  Revised
     *  Forecast Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\RevisedForecastLineID
     */
    public function getRevisedForecastLineID()
    {
        return $this->revisedForecastLineID;
    }

    /**
     * Sets a new revisedForecastLineID
     *
     * BBIE
     *  Forecast Revision Line. Revised_ Forecast Line Identifier. Identifier
     *  An identifier for the revised forecast line.
     *  1
     *  Forecast Revision Line
     *  Revised
     *  Forecast Line Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\RevisedForecastLineID $revisedForecastLineID
     * @return self
     */
    public function setRevisedForecastLineID(\Greenter\Ubl\Entity\CommonBasic\RevisedForecastLineID $revisedForecastLineID)
    {
        $this->revisedForecastLineID = $revisedForecastLineID;
        return $this;
    }

    /**
     * Gets as sourceForecastIssueDate
     *
     * BBIE
     *  Forecast Revision Line. Source Forecast_ Issue Date. Date
     *  The date on which the forecast modified by this revision was generated or created.
     *  1
     *  Forecast Revision Line
     *  Source Forecast
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @return \DateTime
     */
    public function getSourceForecastIssueDate()
    {
        return $this->sourceForecastIssueDate;
    }

    /**
     * Sets a new sourceForecastIssueDate
     *
     * BBIE
     *  Forecast Revision Line. Source Forecast_ Issue Date. Date
     *  The date on which the forecast modified by this revision was generated or created.
     *  1
     *  Forecast Revision Line
     *  Source Forecast
     *  Issue Date
     *  Date
     *  Date. Type
     *
     * @param \DateTime $sourceForecastIssueDate
     * @return self
     */
    public function setSourceForecastIssueDate(\DateTime $sourceForecastIssueDate)
    {
        $this->sourceForecastIssueDate = $sourceForecastIssueDate;
        return $this;
    }

    /**
     * Gets as sourceForecastIssueTime
     *
     * BBIE
     *  Forecast Revision Line. Source Forecast_ Issue Time. Time
     *  The time at which the forecast modified by this revision was generated or created.
     *  1
     *  Forecast Revision Line
     *  Source Forecast
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @return \DateTime
     */
    public function getSourceForecastIssueTime()
    {
        return $this->sourceForecastIssueTime;
    }

    /**
     * Sets a new sourceForecastIssueTime
     *
     * BBIE
     *  Forecast Revision Line. Source Forecast_ Issue Time. Time
     *  The time at which the forecast modified by this revision was generated or created.
     *  1
     *  Forecast Revision Line
     *  Source Forecast
     *  Issue Time
     *  Time
     *  Time. Type
     *
     * @param \DateTime $sourceForecastIssueTime
     * @return self
     */
    public function setSourceForecastIssueTime(\DateTime $sourceForecastIssueTime)
    {
        $this->sourceForecastIssueTime = $sourceForecastIssueTime;
        return $this;
    }

    /**
     * Gets as adjustmentReasonCode
     *
     * BBIE
     *  Forecast Revision Line. Adjustment Reason Code. Code
     *  A code signifying the reason for the adjustment specified in this forecast revision line.
     *  0..1
     *  Forecast Revision Line
     *  Adjustment Reason Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\AdjustmentReasonCode
     */
    public function getAdjustmentReasonCode()
    {
        return $this->adjustmentReasonCode;
    }

    /**
     * Sets a new adjustmentReasonCode
     *
     * BBIE
     *  Forecast Revision Line. Adjustment Reason Code. Code
     *  A code signifying the reason for the adjustment specified in this forecast revision line.
     *  0..1
     *  Forecast Revision Line
     *  Adjustment Reason Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\AdjustmentReasonCode $adjustmentReasonCode
     * @return self
     */
    public function setAdjustmentReasonCode(\Greenter\Ubl\Entity\CommonBasic\AdjustmentReasonCode $adjustmentReasonCode)
    {
        $this->adjustmentReasonCode = $adjustmentReasonCode;
        return $this;
    }

    /**
     * Gets as forecastPeriod
     *
     * ASBIE
     *  Forecast Revision Line. Forecast_ Period. Period
     *  The period to which this forecast revision line applies.
     *  0..1
     *  Forecast Revision Line
     *  Forecast
     *  Period
     *  Period
     *  Period
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ForecastPeriod
     */
    public function getForecastPeriod()
    {
        return $this->forecastPeriod;
    }

    /**
     * Sets a new forecastPeriod
     *
     * ASBIE
     *  Forecast Revision Line. Forecast_ Period. Period
     *  The period to which this forecast revision line applies.
     *  0..1
     *  Forecast Revision Line
     *  Forecast
     *  Period
     *  Period
     *  Period
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ForecastPeriod $forecastPeriod
     * @return self
     */
    public function setForecastPeriod(\Greenter\Ubl\Entity\CommonAggregateComponents\ForecastPeriod $forecastPeriod)
    {
        $this->forecastPeriod = $forecastPeriod;
        return $this;
    }

    /**
     * Gets as salesItem
     *
     * ASBIE
     *  Forecast Revision Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  0..1
     *  Forecast Revision Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\SalesItem
     */
    public function getSalesItem()
    {
        return $this->salesItem;
    }

    /**
     * Sets a new salesItem
     *
     * ASBIE
     *  Forecast Revision Line. Sales Item
     *  Sales information for the item to which this line applies.
     *  0..1
     *  Forecast Revision Line
     *  Sales Item
     *  Sales Item
     *  Sales Item
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SalesItem $salesItem
     * @return self
     */
    public function setSalesItem(\Greenter\Ubl\Entity\CommonAggregateComponents\SalesItem $salesItem)
    {
        $this->salesItem = $salesItem;
        return $this;
    }


}

