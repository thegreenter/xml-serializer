<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing MaritimeTransportType
 *
 * ABIE
 *  Maritime Transport. Details
 *  A class to describe a vessel used for transport by water (including sea, river, and canal).
 *  Maritime Transport
 * XSD Type: MaritimeTransportType
 */
class MaritimeTransportType
{

    /**
     * BBIE
     *  Maritime Transport. Vessel Identifier. Identifier
     *  An identifier for a specific vessel.
     *  0..1
     *  Maritime Transport
     *  Vessel Identifier
     *  Identifier
     *  Identifier. Type
     *  Lloyds Number, Registration Number (WCO ID 167)
     *  International Maritime Organisation number of a vessel
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\VesselID $vesselID
     */
    private $vesselID = null;

    /**
     * BBIE
     *  Maritime Transport. Vessel Name. Name
     *  The name of the vessel.
     *  0..1
     *  Maritime Transport
     *  Vessel Name
     *  Name
     *  Name. Type
     *  Ships Name
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\VesselName $vesselName
     */
    private $vesselName = null;

    /**
     * BBIE
     *  Maritime Transport. Radio Call Sign Identifier. Identifier
     *  The radio call sign of the vessel.
     *  0..1
     *  Maritime Transport
     *  Radio Call Sign Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\RadioCallSignID $radioCallSignID
     */
    private $radioCallSignID = null;

    /**
     * BBIE
     *  Maritime Transport. Ships Requirements. Text
     *  Information about what services a vessel will require when it arrives at a port, such as refueling, maintenance, waste disposal etc.
     *  0..n
     *  Maritime Transport
     *  Ships Requirements
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ShipsRequirements[] $shipsRequirements
     */
    private $shipsRequirements = [
        
    ];

    /**
     * BBIE
     *  Maritime Transport. Gross Tonnage. Measure
     *  Gross tonnage is calculated by measuring a ship's volume (from keel to funnel, to the outside of the hull framing) and applying a mathematical formula and is used to determine things such as a ship's manning regulations, safety rules, registration fees and port dues.
     *  0..1
     *  Maritime Transport
     *  Gross Tonnage
     *  Measure
     *  Measure. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\GrossTonnageMeasure $grossTonnageMeasure
     */
    private $grossTonnageMeasure = null;

    /**
     * BBIE
     *  Maritime Transport. Net Tonnage. Measure
     *  Net tonnage is calculated by measuring a ship's internal volume and applying a mathematical formula and is used to calculate the port duties.
     *  0..1
     *  Maritime Transport
     *  Net Tonnage
     *  Measure
     *  Measure. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\NetTonnageMeasure $netTonnageMeasure
     */
    private $netTonnageMeasure = null;

    /**
     * ASBIE
     *  Maritime Transport. Registry Certificate_ Document Reference. Document Reference
     *  The certificate issued to the ship by the ships registry in a given flag state.
     *  0..1
     *  Maritime Transport
     *  Registry Certificate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\RegistryCertificateDocumentReference $registryCertificateDocumentReference
     */
    private $registryCertificateDocumentReference = null;

    /**
     * ASBIE
     *  Maritime Transport. Registry Port_ Location. Location
     *  The port in which a vessel is registered or permanently based.
     *  0..1
     *  Maritime Transport
     *  Registry Port
     *  Location
     *  Location
     *  Location
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\RegistryPortLocation $registryPortLocation
     */
    private $registryPortLocation = null;

    /**
     * Gets as vesselID
     *
     * BBIE
     *  Maritime Transport. Vessel Identifier. Identifier
     *  An identifier for a specific vessel.
     *  0..1
     *  Maritime Transport
     *  Vessel Identifier
     *  Identifier
     *  Identifier. Type
     *  Lloyds Number, Registration Number (WCO ID 167)
     *  International Maritime Organisation number of a vessel
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\VesselID
     */
    public function getVesselID()
    {
        return $this->vesselID;
    }

    /**
     * Sets a new vesselID
     *
     * BBIE
     *  Maritime Transport. Vessel Identifier. Identifier
     *  An identifier for a specific vessel.
     *  0..1
     *  Maritime Transport
     *  Vessel Identifier
     *  Identifier
     *  Identifier. Type
     *  Lloyds Number, Registration Number (WCO ID 167)
     *  International Maritime Organisation number of a vessel
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\VesselID $vesselID
     * @return self
     */
    public function setVesselID(\Greenter\Ubl\Entity\CommonBasic\VesselID $vesselID)
    {
        $this->vesselID = $vesselID;
        return $this;
    }

    /**
     * Gets as vesselName
     *
     * BBIE
     *  Maritime Transport. Vessel Name. Name
     *  The name of the vessel.
     *  0..1
     *  Maritime Transport
     *  Vessel Name
     *  Name
     *  Name. Type
     *  Ships Name
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\VesselName
     */
    public function getVesselName()
    {
        return $this->vesselName;
    }

    /**
     * Sets a new vesselName
     *
     * BBIE
     *  Maritime Transport. Vessel Name. Name
     *  The name of the vessel.
     *  0..1
     *  Maritime Transport
     *  Vessel Name
     *  Name
     *  Name. Type
     *  Ships Name
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\VesselName $vesselName
     * @return self
     */
    public function setVesselName(\Greenter\Ubl\Entity\CommonBasic\VesselName $vesselName)
    {
        $this->vesselName = $vesselName;
        return $this;
    }

    /**
     * Gets as radioCallSignID
     *
     * BBIE
     *  Maritime Transport. Radio Call Sign Identifier. Identifier
     *  The radio call sign of the vessel.
     *  0..1
     *  Maritime Transport
     *  Radio Call Sign Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\RadioCallSignID
     */
    public function getRadioCallSignID()
    {
        return $this->radioCallSignID;
    }

    /**
     * Sets a new radioCallSignID
     *
     * BBIE
     *  Maritime Transport. Radio Call Sign Identifier. Identifier
     *  The radio call sign of the vessel.
     *  0..1
     *  Maritime Transport
     *  Radio Call Sign Identifier
     *  Identifier
     *  Identifier. Type
     *  NES
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\RadioCallSignID $radioCallSignID
     * @return self
     */
    public function setRadioCallSignID(\Greenter\Ubl\Entity\CommonBasic\RadioCallSignID $radioCallSignID)
    {
        $this->radioCallSignID = $radioCallSignID;
        return $this;
    }

    /**
     * Adds as shipsRequirements
     *
     * BBIE
     *  Maritime Transport. Ships Requirements. Text
     *  Information about what services a vessel will require when it arrives at a port, such as refueling, maintenance, waste disposal etc.
     *  0..n
     *  Maritime Transport
     *  Ships Requirements
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\ShipsRequirements $shipsRequirements
     */
    public function addToShipsRequirements(\Greenter\Ubl\Entity\CommonBasic\ShipsRequirements $shipsRequirements)
    {
        $this->shipsRequirements[] = $shipsRequirements;
        return $this;
    }

    /**
     * isset shipsRequirements
     *
     * BBIE
     *  Maritime Transport. Ships Requirements. Text
     *  Information about what services a vessel will require when it arrives at a port, such as refueling, maintenance, waste disposal etc.
     *  0..n
     *  Maritime Transport
     *  Ships Requirements
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShipsRequirements($index)
    {
        return isset($this->shipsRequirements[$index]);
    }

    /**
     * unset shipsRequirements
     *
     * BBIE
     *  Maritime Transport. Ships Requirements. Text
     *  Information about what services a vessel will require when it arrives at a port, such as refueling, maintenance, waste disposal etc.
     *  0..n
     *  Maritime Transport
     *  Ships Requirements
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShipsRequirements($index)
    {
        unset($this->shipsRequirements[$index]);
    }

    /**
     * Gets as shipsRequirements
     *
     * BBIE
     *  Maritime Transport. Ships Requirements. Text
     *  Information about what services a vessel will require when it arrives at a port, such as refueling, maintenance, waste disposal etc.
     *  0..n
     *  Maritime Transport
     *  Ships Requirements
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ShipsRequirements[]
     */
    public function getShipsRequirements()
    {
        return $this->shipsRequirements;
    }

    /**
     * Sets a new shipsRequirements
     *
     * BBIE
     *  Maritime Transport. Ships Requirements. Text
     *  Information about what services a vessel will require when it arrives at a port, such as refueling, maintenance, waste disposal etc.
     *  0..n
     *  Maritime Transport
     *  Ships Requirements
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ShipsRequirements[] $shipsRequirements
     * @return self
     */
    public function setShipsRequirements(array $shipsRequirements)
    {
        $this->shipsRequirements = $shipsRequirements;
        return $this;
    }

    /**
     * Gets as grossTonnageMeasure
     *
     * BBIE
     *  Maritime Transport. Gross Tonnage. Measure
     *  Gross tonnage is calculated by measuring a ship's volume (from keel to funnel, to the outside of the hull framing) and applying a mathematical formula and is used to determine things such as a ship's manning regulations, safety rules, registration fees and port dues.
     *  0..1
     *  Maritime Transport
     *  Gross Tonnage
     *  Measure
     *  Measure. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\GrossTonnageMeasure
     */
    public function getGrossTonnageMeasure()
    {
        return $this->grossTonnageMeasure;
    }

    /**
     * Sets a new grossTonnageMeasure
     *
     * BBIE
     *  Maritime Transport. Gross Tonnage. Measure
     *  Gross tonnage is calculated by measuring a ship's volume (from keel to funnel, to the outside of the hull framing) and applying a mathematical formula and is used to determine things such as a ship's manning regulations, safety rules, registration fees and port dues.
     *  0..1
     *  Maritime Transport
     *  Gross Tonnage
     *  Measure
     *  Measure. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\GrossTonnageMeasure $grossTonnageMeasure
     * @return self
     */
    public function setGrossTonnageMeasure(\Greenter\Ubl\Entity\CommonBasic\GrossTonnageMeasure $grossTonnageMeasure)
    {
        $this->grossTonnageMeasure = $grossTonnageMeasure;
        return $this;
    }

    /**
     * Gets as netTonnageMeasure
     *
     * BBIE
     *  Maritime Transport. Net Tonnage. Measure
     *  Net tonnage is calculated by measuring a ship's internal volume and applying a mathematical formula and is used to calculate the port duties.
     *  0..1
     *  Maritime Transport
     *  Net Tonnage
     *  Measure
     *  Measure. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\NetTonnageMeasure
     */
    public function getNetTonnageMeasure()
    {
        return $this->netTonnageMeasure;
    }

    /**
     * Sets a new netTonnageMeasure
     *
     * BBIE
     *  Maritime Transport. Net Tonnage. Measure
     *  Net tonnage is calculated by measuring a ship's internal volume and applying a mathematical formula and is used to calculate the port duties.
     *  0..1
     *  Maritime Transport
     *  Net Tonnage
     *  Measure
     *  Measure. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\NetTonnageMeasure $netTonnageMeasure
     * @return self
     */
    public function setNetTonnageMeasure(\Greenter\Ubl\Entity\CommonBasic\NetTonnageMeasure $netTonnageMeasure)
    {
        $this->netTonnageMeasure = $netTonnageMeasure;
        return $this;
    }

    /**
     * Gets as registryCertificateDocumentReference
     *
     * ASBIE
     *  Maritime Transport. Registry Certificate_ Document Reference. Document Reference
     *  The certificate issued to the ship by the ships registry in a given flag state.
     *  0..1
     *  Maritime Transport
     *  Registry Certificate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\RegistryCertificateDocumentReference
     */
    public function getRegistryCertificateDocumentReference()
    {
        return $this->registryCertificateDocumentReference;
    }

    /**
     * Sets a new registryCertificateDocumentReference
     *
     * ASBIE
     *  Maritime Transport. Registry Certificate_ Document Reference. Document Reference
     *  The certificate issued to the ship by the ships registry in a given flag state.
     *  0..1
     *  Maritime Transport
     *  Registry Certificate
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\RegistryCertificateDocumentReference $registryCertificateDocumentReference
     * @return self
     */
    public function setRegistryCertificateDocumentReference(\Greenter\Ubl\Entity\CommonAggregateComponents\RegistryCertificateDocumentReference $registryCertificateDocumentReference)
    {
        $this->registryCertificateDocumentReference = $registryCertificateDocumentReference;
        return $this;
    }

    /**
     * Gets as registryPortLocation
     *
     * ASBIE
     *  Maritime Transport. Registry Port_ Location. Location
     *  The port in which a vessel is registered or permanently based.
     *  0..1
     *  Maritime Transport
     *  Registry Port
     *  Location
     *  Location
     *  Location
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\RegistryPortLocation
     */
    public function getRegistryPortLocation()
    {
        return $this->registryPortLocation;
    }

    /**
     * Sets a new registryPortLocation
     *
     * ASBIE
     *  Maritime Transport. Registry Port_ Location. Location
     *  The port in which a vessel is registered or permanently based.
     *  0..1
     *  Maritime Transport
     *  Registry Port
     *  Location
     *  Location
     *  Location
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\RegistryPortLocation $registryPortLocation
     * @return self
     */
    public function setRegistryPortLocation(\Greenter\Ubl\Entity\CommonAggregateComponents\RegistryPortLocation $registryPortLocation)
    {
        $this->registryPortLocation = $registryPortLocation;
        return $this;
    }


}

