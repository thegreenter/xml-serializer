<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing TendererPartyQualificationType
 *
 * ABIE
 *  Tenderer Party Qualification. Details
 *  A class to describe the qualifications of a tenderer party.
 *  Tenderer Party Qualification
 * XSD Type: TendererPartyQualificationType
 */
class TendererPartyQualificationType
{

    /**
     * ASBIE
     *  Tenderer Party Qualification. Interested_ Procurement Project Lot. Procurement Project Lot
     *  The procurement project lot the party is interested in.
     *  0..n
     *  Tenderer Party Qualification
     *  Interested
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\InterestedProcurementProjectLot[] $interestedProcurementProjectLot
     */
    private $interestedProcurementProjectLot = [
        
    ];

    /**
     * ASBIE
     *  Tenderer Party Qualification. Main_ Qualifying Party. Qualifying Party
     *  The qualifications of the main tenderer party.
     *  1
     *  Tenderer Party Qualification
     *  Main
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\MainQualifyingParty $mainQualifyingParty
     */
    private $mainQualifyingParty = null;

    /**
     * ASBIE
     *  Tenderer Party Qualification. Additional_ Qualifying Party. Qualifying Party
     *  The qualifications of a tenderer party other than the main tenderer party when bidding as a consortium.
     *  0..n
     *  Tenderer Party Qualification
     *  Additional
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\AdditionalQualifyingParty[] $additionalQualifyingParty
     */
    private $additionalQualifyingParty = [
        
    ];

    /**
     * Adds as interestedProcurementProjectLot
     *
     * ASBIE
     *  Tenderer Party Qualification. Interested_ Procurement Project Lot. Procurement Project Lot
     *  The procurement project lot the party is interested in.
     *  0..n
     *  Tenderer Party Qualification
     *  Interested
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\InterestedProcurementProjectLot $interestedProcurementProjectLot
     */
    public function addToInterestedProcurementProjectLot(\Greenter\Ubl\Entity\CommonAggregateComponents\InterestedProcurementProjectLot $interestedProcurementProjectLot)
    {
        $this->interestedProcurementProjectLot[] = $interestedProcurementProjectLot;
        return $this;
    }

    /**
     * isset interestedProcurementProjectLot
     *
     * ASBIE
     *  Tenderer Party Qualification. Interested_ Procurement Project Lot. Procurement Project Lot
     *  The procurement project lot the party is interested in.
     *  0..n
     *  Tenderer Party Qualification
     *  Interested
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInterestedProcurementProjectLot($index)
    {
        return isset($this->interestedProcurementProjectLot[$index]);
    }

    /**
     * unset interestedProcurementProjectLot
     *
     * ASBIE
     *  Tenderer Party Qualification. Interested_ Procurement Project Lot. Procurement Project Lot
     *  The procurement project lot the party is interested in.
     *  0..n
     *  Tenderer Party Qualification
     *  Interested
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInterestedProcurementProjectLot($index)
    {
        unset($this->interestedProcurementProjectLot[$index]);
    }

    /**
     * Gets as interestedProcurementProjectLot
     *
     * ASBIE
     *  Tenderer Party Qualification. Interested_ Procurement Project Lot. Procurement Project Lot
     *  The procurement project lot the party is interested in.
     *  0..n
     *  Tenderer Party Qualification
     *  Interested
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\InterestedProcurementProjectLot[]
     */
    public function getInterestedProcurementProjectLot()
    {
        return $this->interestedProcurementProjectLot;
    }

    /**
     * Sets a new interestedProcurementProjectLot
     *
     * ASBIE
     *  Tenderer Party Qualification. Interested_ Procurement Project Lot. Procurement Project Lot
     *  The procurement project lot the party is interested in.
     *  0..n
     *  Tenderer Party Qualification
     *  Interested
     *  Procurement Project Lot
     *  Procurement Project Lot
     *  Procurement Project Lot
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\InterestedProcurementProjectLot[] $interestedProcurementProjectLot
     * @return self
     */
    public function setInterestedProcurementProjectLot(array $interestedProcurementProjectLot)
    {
        $this->interestedProcurementProjectLot = $interestedProcurementProjectLot;
        return $this;
    }

    /**
     * Gets as mainQualifyingParty
     *
     * ASBIE
     *  Tenderer Party Qualification. Main_ Qualifying Party. Qualifying Party
     *  The qualifications of the main tenderer party.
     *  1
     *  Tenderer Party Qualification
     *  Main
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\MainQualifyingParty
     */
    public function getMainQualifyingParty()
    {
        return $this->mainQualifyingParty;
    }

    /**
     * Sets a new mainQualifyingParty
     *
     * ASBIE
     *  Tenderer Party Qualification. Main_ Qualifying Party. Qualifying Party
     *  The qualifications of the main tenderer party.
     *  1
     *  Tenderer Party Qualification
     *  Main
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\MainQualifyingParty $mainQualifyingParty
     * @return self
     */
    public function setMainQualifyingParty(\Greenter\Ubl\Entity\CommonAggregateComponents\MainQualifyingParty $mainQualifyingParty)
    {
        $this->mainQualifyingParty = $mainQualifyingParty;
        return $this;
    }

    /**
     * Adds as additionalQualifyingParty
     *
     * ASBIE
     *  Tenderer Party Qualification. Additional_ Qualifying Party. Qualifying Party
     *  The qualifications of a tenderer party other than the main tenderer party when bidding as a consortium.
     *  0..n
     *  Tenderer Party Qualification
     *  Additional
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AdditionalQualifyingParty $additionalQualifyingParty
     */
    public function addToAdditionalQualifyingParty(\Greenter\Ubl\Entity\CommonAggregateComponents\AdditionalQualifyingParty $additionalQualifyingParty)
    {
        $this->additionalQualifyingParty[] = $additionalQualifyingParty;
        return $this;
    }

    /**
     * isset additionalQualifyingParty
     *
     * ASBIE
     *  Tenderer Party Qualification. Additional_ Qualifying Party. Qualifying Party
     *  The qualifications of a tenderer party other than the main tenderer party when bidding as a consortium.
     *  0..n
     *  Tenderer Party Qualification
     *  Additional
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalQualifyingParty($index)
    {
        return isset($this->additionalQualifyingParty[$index]);
    }

    /**
     * unset additionalQualifyingParty
     *
     * ASBIE
     *  Tenderer Party Qualification. Additional_ Qualifying Party. Qualifying Party
     *  The qualifications of a tenderer party other than the main tenderer party when bidding as a consortium.
     *  0..n
     *  Tenderer Party Qualification
     *  Additional
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalQualifyingParty($index)
    {
        unset($this->additionalQualifyingParty[$index]);
    }

    /**
     * Gets as additionalQualifyingParty
     *
     * ASBIE
     *  Tenderer Party Qualification. Additional_ Qualifying Party. Qualifying Party
     *  The qualifications of a tenderer party other than the main tenderer party when bidding as a consortium.
     *  0..n
     *  Tenderer Party Qualification
     *  Additional
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\AdditionalQualifyingParty[]
     */
    public function getAdditionalQualifyingParty()
    {
        return $this->additionalQualifyingParty;
    }

    /**
     * Sets a new additionalQualifyingParty
     *
     * ASBIE
     *  Tenderer Party Qualification. Additional_ Qualifying Party. Qualifying Party
     *  The qualifications of a tenderer party other than the main tenderer party when bidding as a consortium.
     *  0..n
     *  Tenderer Party Qualification
     *  Additional
     *  Qualifying Party
     *  Qualifying Party
     *  Qualifying Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\AdditionalQualifyingParty[] $additionalQualifyingParty
     * @return self
     */
    public function setAdditionalQualifyingParty(array $additionalQualifyingParty)
    {
        $this->additionalQualifyingParty = $additionalQualifyingParty;
        return $this;
    }


}

