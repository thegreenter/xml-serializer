<?php

namespace Greenter\Ubl\Entity\CommonAggregateComponents;

/**
 * Class representing ConsignmentType
 *
 * ABIE
 *  Consignment. Details
 *  A class to describe an identifiable collection of one or more goods items to be transported between the consignor and the consignee. This information may be defined within a transport contract. A consignment may comprise more than one shipment (e.g., when consolidated by a freight forwarder).
 *  Consignment
 * XSD Type: ConsignmentType
 */
class ConsignmentType
{

    /**
     * BBIE
     *  Consignment. Identifier
     *  An identifier assigned to a collection of goods for both import and export.
     *  1
     *  Consignment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Unique consignment reference number (UCR)
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ID $iD
     */
    private $iD = null;

    /**
     * BBIE
     *  Consignment. Carrier Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the carrier.
     *  0..1
     *  Consignment
     *  Carrier Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\CarrierAssignedID $carrierAssignedID
     */
    private $carrierAssignedID = null;

    /**
     * BBIE
     *  Consignment. Consignee Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the consignee.
     *  0..1
     *  Consignment
     *  Consignee Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ConsigneeAssignedID $consigneeAssignedID
     */
    private $consigneeAssignedID = null;

    /**
     * BBIE
     *  Consignment. Consignor Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the consignor.
     *  0..1
     *  Consignment
     *  Consignor Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ConsignorAssignedID $consignorAssignedID
     */
    private $consignorAssignedID = null;

    /**
     * BBIE
     *  Consignment. Freight Forwarder Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the freight forwarder.
     *  0..1
     *  Consignment
     *  Freight Forwarder Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\FreightForwarderAssignedID $freightForwarderAssignedID
     */
    private $freightForwarderAssignedID = null;

    /**
     * BBIE
     *  Consignment. Broker Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the broker.
     *  0..1
     *  Consignment
     *  Broker Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\BrokerAssignedID $brokerAssignedID
     */
    private $brokerAssignedID = null;

    /**
     * BBIE
     *  Consignment. Contracted Carrier Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the contracted carrier.
     *  0..1
     *  Consignment
     *  Contracted Carrier Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ContractedCarrierAssignedID $contractedCarrierAssignedID
     */
    private $contractedCarrierAssignedID = null;

    /**
     * BBIE
     *  Consignment. Performing Carrier Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the performing carrier.
     *  0..1
     *  Consignment
     *  Performing Carrier Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\PerformingCarrierAssignedID $performingCarrierAssignedID
     */
    private $performingCarrierAssignedID = null;

    /**
     * BBIE
     *  Consignment. Summary_ Description. Text
     *  A textual summary description of the consignment.
     *  0..n
     *  Consignment
     *  Summary
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SummaryDescription[] $summaryDescription
     */
    private $summaryDescription = [
        
    ];

    /**
     * BBIE
     *  Consignment. Total_ Invoice Amount. Amount
     *  The total of all invoice amounts declared in this consignment.
     *  0..1
     *  Consignment
     *  Total
     *  Invoice Amount
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TotalInvoiceAmount $totalInvoiceAmount
     */
    private $totalInvoiceAmount = null;

    /**
     * BBIE
     *  Consignment. Declared Customs_ Value. Amount
     *  The total declared value for customs purposes of all the goods in this consignment, regardless of whether they are subject to the same customs procedure, tariff/statistical categorization, country information, or duty regime.
     *  0..1
     *  Consignment
     *  Declared Customs
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\DeclaredCustomsValueAmount $declaredCustomsValueAmount
     */
    private $declaredCustomsValueAmount = null;

    /**
     * BBIE
     *  Consignment. Tariff Description. Text
     *  Text describing the tariff applied to this consignment.
     *  0..n
     *  Consignment
     *  Tariff Description
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TariffDescription[] $tariffDescription
     */
    private $tariffDescription = [
        
    ];

    /**
     * BBIE
     *  Consignment. Tariff Code. Code
     *  A code signifying the tariff applied to this consignment.
     *  0..1
     *  Consignment
     *  Tariff Code
     *  Code
     *  Code. Type
     *  Tariff code number (WCO ID 145)
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TariffCode $tariffCode
     */
    private $tariffCode = null;

    /**
     * BBIE
     *  Consignment. Insurance Premium Amount. Amount
     *  The amount of the premium payable to an insurance company for insuring the goods contained in this consignment.
     *  0..1
     *  Consignment
     *  Insurance Premium Amount
     *  Amount
     *  Amount. Type
     *  Insurance Cost
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\InsurancePremiumAmount $insurancePremiumAmount
     */
    private $insurancePremiumAmount = null;

    /**
     * BBIE
     *  Consignment. Gross_ Weight. Measure
     *  The total declared weight of the goods in this consignment, including packaging but excluding the carrier's equipment.
     *  0..1
     *  Consignment
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *  Total gross weight (WCO ID 131)
     *  Total cube of all goods items referred to as one consignment.
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\GrossWeightMeasure $grossWeightMeasure
     */
    private $grossWeightMeasure = null;

    /**
     * BBIE
     *  Consignment. Net_ Weight. Measure
     *  The total net weight of all the goods items referred to as one consignment.
     *  0..1
     *  Consignment
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\NetWeightMeasure $netWeightMeasure
     */
    private $netWeightMeasure = null;

    /**
     * BBIE
     *  Consignment. Net Net_ Weight. Measure
     *  The total net weight of the goods in this consignment, exclusive of packaging.
     *  0..1
     *  Consignment
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\NetNetWeightMeasure $netNetWeightMeasure
     */
    private $netNetWeightMeasure = null;

    /**
     * BBIE
     *  Consignment. Chargeable_ Weight. Measure
     *  The weight upon which a charge is to be based.
     *  0..1
     *  Consignment
     *  Chargeable
     *  Weight
     *  Measure
     *  Measure. Type
     *  Chargeable Weight. Basis.Measure
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ChargeableWeightMeasure $chargeableWeightMeasure
     */
    private $chargeableWeightMeasure = null;

    /**
     * BBIE
     *  Consignment. Gross_ Volume. Measure
     *  The total volume of the goods referred to as one consignment.
     *  0..1
     *  Consignment
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *  Cube
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\GrossVolumeMeasure $grossVolumeMeasure
     */
    private $grossVolumeMeasure = null;

    /**
     * BBIE
     *  Consignment. Net_ Volume. Measure
     *  The total net volume of all goods items referred to as one consignment.
     *  0..1
     *  Consignment
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\NetVolumeMeasure $netVolumeMeasure
     */
    private $netVolumeMeasure = null;

    /**
     * BBIE
     *  Consignment. Loading_ Length. Measure
     *  The total length in a means of transport or a piece of transport equipment which, given the width and height of the transport means, will accommodate all of the consignments in a single consolidation.
     *  0..1
     *  Consignment
     *  Loading
     *  Length
     *  Measure
     *  Measure. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\LoadingLengthMeasure $loadingLengthMeasure
     */
    private $loadingLengthMeasure = null;

    /**
     * BBIE
     *  Consignment. Remarks. Text
     *  Remarks concerning the complete consignment, to be printed on the transport document.
     *  0..n
     *  Consignment
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Remarks[] $remarks
     */
    private $remarks = [
        
    ];

    /**
     * BBIE
     *  Consignment. Hazardous Risk_ Indicator. Indicator
     *  An indication that the transported goods in this consignment are subject to an international regulation concerning the carriage of dangerous goods (true) or not (false).
     *  0..1
     *  Consignment
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Dangerous Goods RID Indicator
     *  default is negative
     *
     * @var bool $hazardousRiskIndicator
     */
    private $hazardousRiskIndicator = null;

    /**
     * BBIE
     *  Consignment. Animal_ Food Indicator. Indicator
     *  An indication that the transported goods in this consignment are animal foodstuffs (true) or not (false).
     *  0..1
     *  Consignment
     *  Animal
     *  Food Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @var bool $animalFoodIndicator
     */
    private $animalFoodIndicator = null;

    /**
     * BBIE
     *  Consignment. Human_ Food Indicator. Indicator
     *  An indication that the transported goods in this consignment are for human consumption (true) or not (false).
     *  0..1
     *  Consignment
     *  Human
     *  Food Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @var bool $humanFoodIndicator
     */
    private $humanFoodIndicator = null;

    /**
     * BBIE
     *  Consignment. Livestock_ Indicator. Indicator
     *  An indication that the transported goods are livestock (true) or not (false).
     *  0..1
     *  Consignment
     *  Livestock
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @var bool $livestockIndicator
     */
    private $livestockIndicator = null;

    /**
     * BBIE
     *  Consignment. Bulk Cargo_ Indicator. Indicator
     *  An indication that the transported goods in this consignment are bulk cargoes (true) or not (false).
     *  0..1
     *  Consignment
     *  Bulk Cargo
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @var bool $bulkCargoIndicator
     */
    private $bulkCargoIndicator = null;

    /**
     * BBIE
     *  Consignment. Containerized_ Indicator. Indicator
     *  An indication that the transported goods in this consignment are containerized cargoes (true) or not (false).
     *  0..1
     *  Consignment
     *  Containerized
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @var bool $containerizedIndicator
     */
    private $containerizedIndicator = null;

    /**
     * BBIE
     *  Consignment. General Cargo_ Indicator. Indicator
     *  An indication that the transported goods in this consignment are general cargoes (true) or not (false).
     *  0..1
     *  Consignment
     *  General Cargo
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @var bool $generalCargoIndicator
     */
    private $generalCargoIndicator = null;

    /**
     * BBIE
     *  Consignment. Special_ Security Indicator. Indicator
     *  An indication that the transported goods in this consignment require special security (true) or not (false).
     *  0..1
     *  Consignment
     *  Special
     *  Security Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @var bool $specialSecurityIndicator
     */
    private $specialSecurityIndicator = null;

    /**
     * BBIE
     *  Consignment. Third Party Payer_ Indicator. Indicator
     *  An indication that this consignment will be paid for by a third party (true) or not (false).
     *  0..1
     *  Consignment
     *  Third Party Payer
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @var bool $thirdPartyPayerIndicator
     */
    private $thirdPartyPayerIndicator = null;

    /**
     * BBIE
     *  Consignment. Carrier Service_ Instructions. Text
     *  Service instructions to the carrier, expressed as text.
     *  0..n
     *  Consignment
     *  Carrier Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\CarrierServiceInstructions[] $carrierServiceInstructions
     */
    private $carrierServiceInstructions = [
        
    ];

    /**
     * BBIE
     *  Consignment. Customs Clearance Service_ Instructions. Text
     *  Service instructions for customs clearance, expressed as text.
     *  0..n
     *  Consignment
     *  Customs Clearance Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\CustomsClearanceServiceInstructions[] $customsClearanceServiceInstructions
     */
    private $customsClearanceServiceInstructions = [
        
    ];

    /**
     * BBIE
     *  Consignment. Forwarder Service_ Instructions. Text
     *  Service instructions for the forwarder, expressed as text.
     *  0..n
     *  Consignment
     *  Forwarder Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ForwarderServiceInstructions[] $forwarderServiceInstructions
     */
    private $forwarderServiceInstructions = [
        
    ];

    /**
     * BBIE
     *  Consignment. Special Service_ Instructions. Text
     *  Special service instructions, expressed as text.
     *  0..n
     *  Consignment
     *  Special Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SpecialServiceInstructions[] $specialServiceInstructions
     */
    private $specialServiceInstructions = [
        
    ];

    /**
     * BBIE
     *  Consignment. Sequence Identifier. Identifier
     *  A sequence identifier for this consignment.
     *  0..1
     *  Consignment
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SequenceID $sequenceID
     */
    private $sequenceID = null;

    /**
     * BBIE
     *  Consignment. Shipping Priority Level Code. Code
     *  A code signifying the priority or level of service required for this consignment.
     *  0..1
     *  Consignment
     *  Shipping Priority Level Code
     *  Code
     *  Code. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ShippingPriorityLevelCode $shippingPriorityLevelCode
     */
    private $shippingPriorityLevelCode = null;

    /**
     * BBIE
     *  Consignment. Handling Code. Code
     *  The handling required for this consignment, expressed as a code.
     *  0..1
     *  Consignment
     *  Handling Code
     *  Code
     *  Code. Type
     *  Special Handling
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\HandlingCode $handlingCode
     */
    private $handlingCode = null;

    /**
     * BBIE
     *  Consignment. Handling_ Instructions. Text
     *  The handling required for this consignment, expressed as text.
     *  0..n
     *  Consignment
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\HandlingInstructions[] $handlingInstructions
     */
    private $handlingInstructions = [
        
    ];

    /**
     * BBIE
     *  Consignment. Information. Text
     *  Free-form text pertinent to this consignment, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Consignment
     *  Information
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\Information[] $information
     */
    private $information = [
        
    ];

    /**
     * BBIE
     *  Consignment. Total_ Goods Item Quantity. Quantity
     *  The total number of goods items in this consignment.
     *  0..1
     *  Consignment
     *  Total
     *  Goods Item Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TotalGoodsItemQuantity $totalGoodsItemQuantity
     */
    private $totalGoodsItemQuantity = null;

    /**
     * BBIE
     *  Consignment. Total_ Transport Handling Unit Quantity. Quantity
     *  The number of pieces of transport handling equipment (pallets, boxes, cases, etc.) in this consignment.
     *  0..1
     *  Consignment
     *  Total
     *  Transport Handling Unit Quantity
     *  Quantity
     *  Quantity. Type
     *  Number of THUs
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TotalTransportHandlingUnitQuantity $totalTransportHandlingUnitQuantity
     */
    private $totalTransportHandlingUnitQuantity = null;

    /**
     * BBIE
     *  Consignment. Insurance_ Value. Amount
     *  The amount covered by insurance for this consignment.
     *  0..1
     *  Consignment
     *  Insurance
     *  Value
     *  Amount
     *  Amount. Type
     *  Value Insured
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\InsuranceValueAmount $insuranceValueAmount
     */
    private $insuranceValueAmount = null;

    /**
     * BBIE
     *  Consignment. Declared For Carriage_ Value. Amount
     *  The value of this consignment, declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage, in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Consignment
     *  Declared For Carriage
     *  Value
     *  Amount
     *  Amount. Type
     *  Declared value for carriage, Interest in delivery
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount
     */
    private $declaredForCarriageValueAmount = null;

    /**
     * BBIE
     *  Consignment. Declared Statistics_ Value. Amount
     *  The value, declared for statistical purposes, of those goods in this consignment that have the same statistical heading.
     *  0..1
     *  Consignment
     *  Declared Statistics
     *  Value
     *  Amount
     *  Amount. Type
     *  Statistical Value
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount
     */
    private $declaredStatisticsValueAmount = null;

    /**
     * BBIE
     *  Consignment. Free On Board_ Value. Amount
     *  The monetary amount that has to be or has been paid as calculated under the applicable trade delivery.
     *  0..1
     *  Consignment
     *  Free On Board
     *  Value
     *  Amount
     *  Amount. Type
     *  FOB Value
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\FreeOnBoardValueAmount $freeOnBoardValueAmount
     */
    private $freeOnBoardValueAmount = null;

    /**
     * BBIE
     *  Consignment. Special_ Instructions. Text
     *  Special instructions relating to this consignment.
     *  0..n
     *  Consignment
     *  Special
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\SpecialInstructions[] $specialInstructions
     */
    private $specialInstructions = [
        
    ];

    /**
     * BBIE
     *  Consignment. Split Consignment_ Indicator. Indicator
     *  An indicator that this consignment has been split in transit (true) or not (false).
     *  0..1
     *  Consignment
     *  Split Consignment
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @var bool $splitConsignmentIndicator
     */
    private $splitConsignmentIndicator = null;

    /**
     * BBIE
     *  Consignment. Delivery_ Instructions. Text
     *  A set of delivery instructions relating to this consignment.
     *  0..n
     *  Consignment
     *  Delivery
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\DeliveryInstructions[] $deliveryInstructions
     */
    private $deliveryInstructions = [
        
    ];

    /**
     * BBIE
     *  Consignment. Consignment_ Quantity. Quantity
     *  The count in this consignment considering goods items, child consignments, shipments
     *  0..1
     *  Consignment
     *  Consignment
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ConsignmentQuantity $consignmentQuantity
     */
    private $consignmentQuantity = null;

    /**
     * BBIE
     *  Consignment. Consolidatable_ Indicator. Indicator
     *  An indicator that this consignment can be consolidated (true) or not (false).
     *  0..1
     *  Consignment
     *  Consolidatable
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @var bool $consolidatableIndicator
     */
    private $consolidatableIndicator = null;

    /**
     * BBIE
     *  Consignment. Haulage_ Instructions. Text
     *  Instructions regarding haulage of this consignment, expressed as text.
     *  0..n
     *  Consignment
     *  Haulage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\HaulageInstructions[] $haulageInstructions
     */
    private $haulageInstructions = [
        
    ];

    /**
     * BBIE
     *  Consignment. Loading_ Sequence Identifier. Identifier
     *  An identifier for the loading sequence of this consignment.
     *  0..1
     *  Consignment
     *  Loading
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\LoadingSequenceID $loadingSequenceID
     */
    private $loadingSequenceID = null;

    /**
     * BBIE
     *  Consignment. Child Consignment Quantity. Quantity
     *  The quantity of (consolidated) child consignments
     *  0..1
     *  Consignment
     *  Child Consignment Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\ChildConsignmentQuantity $childConsignmentQuantity
     */
    private $childConsignmentQuantity = null;

    /**
     * BBIE
     *  Consignment. Total_ Packages Quantity. Quantity
     *  The total number of packages associated with a Consignment.
     *  0..1
     *  Consignment
     *  Total
     *  Packages Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @var \Greenter\Ubl\Entity\CommonBasic\TotalPackagesQuantity $totalPackagesQuantity
     */
    private $totalPackagesQuantity = null;

    /**
     * ASBIE
     *  Consignment. Consolidated_ Shipment. Shipment
     *  A consolidated shipment (a shipment created by an act of consolidation).
     *  0..n
     *  Consignment
     *  Consolidated
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ConsolidatedShipment[] $consolidatedShipment
     */
    private $consolidatedShipment = [
        
    ];

    /**
     * ASBIE
     *  Consignment. Customs Declaration
     *  A class describing identifiers or references relating to customs procedures.
     *  0..n
     *  Consignment
     *  Customs Declaration
     *  Customs Declaration
     *  Customs Declaration
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\CustomsDeclaration[] $customsDeclaration
     */
    private $customsDeclaration = [
        
    ];

    /**
     * ASBIE
     *  Consignment. Requested Pickup_ Transport Event. Transport Event
     *  The pickup of this consignment requested by the party requesting a transportation service (the transport user).
     *  0..1
     *  Consignment
     *  Requested Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\RequestedPickupTransportEvent $requestedPickupTransportEvent
     */
    private $requestedPickupTransportEvent = null;

    /**
     * ASBIE
     *  Consignment. Requested Delivery_ Transport Event. Transport Event
     *  The delivery of this consignment requested by the party requesting a transportation service (the transport user).
     *  0..1
     *  Consignment
     *  Requested Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\RequestedDeliveryTransportEvent $requestedDeliveryTransportEvent
     */
    private $requestedDeliveryTransportEvent = null;

    /**
     * ASBIE
     *  Consignment. Planned Pickup_ Transport Event. Transport Event
     *  The pickup of this consignment planned by the party responsible for providing the transportation service (the transport service provider).
     *  0..1
     *  Consignment
     *  Planned Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PlannedPickupTransportEvent $plannedPickupTransportEvent
     */
    private $plannedPickupTransportEvent = null;

    /**
     * ASBIE
     *  Consignment. Planned Delivery_ Transport Event. Transport Event
     *  The delivery of this consignment planned by the party responsible for providing the transportation service (the transport service provider).
     *  0..1
     *  Consignment
     *  Planned Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PlannedDeliveryTransportEvent $plannedDeliveryTransportEvent
     */
    private $plannedDeliveryTransportEvent = null;

    /**
     * ASBIE
     *  Consignment. Status
     *  The status of a particular condition associated with this consignment.
     *  0..n
     *  Consignment
     *  Status
     *  Status
     *  Status
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\Status[] $status
     */
    private $status = [
        
    ];

    /**
     * ASBIE
     *  Consignment. Child_ Consignment. Consignment
     *  One of the child consignments of which a consolidated consignment is composed.
     *  0..n
     *  Consignment
     *  Child
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ChildConsignment[] $childConsignment
     */
    private $childConsignment = [
        
    ];

    /**
     * ASBIE
     *  Consignment. Consignee_ Party. Party
     *  A party to which goods are consigned.
     *  0..1
     *  Consignment
     *  Consignee
     *  Party
     *  Party
     *  Party
     *  Consignee (WCO ID 51 and 52)
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ConsigneeParty $consigneeParty
     */
    private $consigneeParty = null;

    /**
     * ASBIE
     *  Consignment. Exporter_ Party. Party
     *  The party that makes the export declaration, or on behalf of which the export declaration is made, and that is the owner of the goods in this consignment or has similar right of disposal over them at the time when the declaration is accepted.
     *  0..1
     *  Consignment
     *  Exporter
     *  Party
     *  Party
     *  Party
     *  Exporter (WCO ID 41 and 42)
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ExporterParty $exporterParty
     */
    private $exporterParty = null;

    /**
     * ASBIE
     *  Consignment. Consignor_ Party. Party
     *  The party consigning goods, as stipulated in the transport contract by the party ordering transport.
     *  0..1
     *  Consignment
     *  Consignor
     *  Party
     *  Party
     *  Party
     *  Consignor (WCO ID 71 and 72)
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ConsignorParty $consignorParty
     */
    private $consignorParty = null;

    /**
     * ASBIE
     *  Consignment. Importer_ Party. Party
     *  The party that makes an import declaration regarding this consignment, or on behalf of which a customs clearing agent or other authorized person makes an import declaration regarding this consignment. This may include a person who has possession of the goods or to whom the goods are consigned.
     *  0..1
     *  Consignment
     *  Importer
     *  Party
     *  Party
     *  Party
     *  Importer (WCO ID 39 and 40)
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ImporterParty $importerParty
     */
    private $importerParty = null;

    /**
     * ASBIE
     *  Consignment. Carrier_ Party. Party
     *  The party providing the transport of goods in this consignment between named points.
     *  0..1
     *  Consignment
     *  Carrier
     *  Party
     *  Party
     *  Party
     *  Transport Company, Shipping Line, NVOCC, Airline, Haulier, Courier, Carrier (WCO ID 49 and 50)
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\CarrierParty $carrierParty
     */
    private $carrierParty = null;

    /**
     * ASBIE
     *  Consignment. Freight Forwarder_ Party. Party
     *  The party combining individual smaller consignments into a single larger shipment (the consolidated shipment), which is sent to a counterpart that mirrors the consolidator's activity by dividing the consolidated consignment into its original components.
     *  0..1
     *  Consignment
     *  Freight Forwarder
     *  Party
     *  Party
     *  Party
     *  Consolidator (WCO ID 192 AND 193)
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\FreightForwarderParty $freightForwarderParty
     */
    private $freightForwarderParty = null;

    /**
     * ASBIE
     *  Consignment. Notify_ Party. Party
     *  The party to be notified upon arrival of goods and when special occurrences (usually pre-defined) take place during a transportation service.
     *  0..1
     *  Consignment
     *  Notify
     *  Party
     *  Party
     *  Party
     *  WCO ID 57 and 58
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\NotifyParty $notifyParty
     */
    private $notifyParty = null;

    /**
     * ASBIE
     *  Consignment. Original Despatch_ Party. Party
     *  The original despatch (sender) party for this consignment.
     *  0..1
     *  Consignment
     *  Original Despatch
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\OriginalDespatchParty $originalDespatchParty
     */
    private $originalDespatchParty = null;

    /**
     * ASBIE
     *  Consignment. Final Delivery_ Party. Party
     *  The final delivery party for this consignment.
     *  0..1
     *  Consignment
     *  Final Delivery
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\FinalDeliveryParty $finalDeliveryParty
     */
    private $finalDeliveryParty = null;

    /**
     * ASBIE
     *  Consignment. Performing Carrier_ Party. Party
     *  The party performing the carriage of this consignment.
     *  0..1
     *  Consignment
     *  Performing Carrier
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PerformingCarrierParty $performingCarrierParty
     */
    private $performingCarrierParty = null;

    /**
     * ASBIE
     *  Consignment. Substitute Carrier_ Party. Party
     *  A substitute party performing the carriage of this consignment.
     *  0..1
     *  Consignment
     *  Substitute Carrier
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\SubstituteCarrierParty $substituteCarrierParty
     */
    private $substituteCarrierParty = null;

    /**
     * ASBIE
     *  Consignment. Logistics Operator_ Party. Party
     *  The logistics operator party for this consignment.
     *  0..1
     *  Consignment
     *  Logistics Operator
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\LogisticsOperatorParty $logisticsOperatorParty
     */
    private $logisticsOperatorParty = null;

    /**
     * ASBIE
     *  Consignment. Transport Advisor_ Party. Party
     *  The party providing transport advice this consignment.
     *  0..1
     *  Consignment
     *  Transport Advisor
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\TransportAdvisorParty $transportAdvisorParty
     */
    private $transportAdvisorParty = null;

    /**
     * ASBIE
     *  Consignment. Hazardous Item Notification_ Party. Party
     *  The party that would be notified of a hazardous item in this consignment.
     *  0..1
     *  Consignment
     *  Hazardous Item Notification
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\HazardousItemNotificationParty $hazardousItemNotificationParty
     */
    private $hazardousItemNotificationParty = null;

    /**
     * ASBIE
     *  Consignment. Insurance_ Party. Party
     *  The party holding the insurance for this consignment.
     *  0..1
     *  Consignment
     *  Insurance
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\InsuranceParty $insuranceParty
     */
    private $insuranceParty = null;

    /**
     * ASBIE
     *  Consignment. Mortgage Holder_ Party. Party
     *  The party holding the mortgage for this consignment.
     *  0..1
     *  Consignment
     *  Mortgage Holder
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\MortgageHolderParty $mortgageHolderParty
     */
    private $mortgageHolderParty = null;

    /**
     * ASBIE
     *  Consignment. Bill Of Lading Holder_ Party. Party
     *  The party holding the bill of lading for this consignment.
     *  0..1
     *  Consignment
     *  Bill Of Lading Holder
     *  Party
     *  Party
     *  Party
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\BillOfLadingHolderParty $billOfLadingHolderParty
     */
    private $billOfLadingHolderParty = null;

    /**
     * ASBIE
     *  Consignment. Original Departure_ Country. Country
     *  The country from which the goods in this consignment were originally exported, without any commercial transaction taking place in intermediate countries.
     *  0..1
     *  Consignment
     *  Original Departure
     *  Country
     *  Country
     *  Country
     *  Country of origin (WCO ID 062)
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\OriginalDepartureCountry $originalDepartureCountry
     */
    private $originalDepartureCountry = null;

    /**
     * ASBIE
     *  Consignment. Final Destination_ Country. Country
     *  The country in which the goods in this consignment are to be delivered to the final consignee or buyer.
     *  0..1
     *  Consignment
     *  Final Destination
     *  Country
     *  Country
     *  Country
     *  Ultimate Destination Country, Country of Final Arrival, Country of Destination
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\FinalDestinationCountry $finalDestinationCountry
     */
    private $finalDestinationCountry = null;

    /**
     * ASBIE
     *  Consignment. Transit_ Country. Country
     *  One of the countries through which goods or passengers in this consignment are routed between the country of original departure and the country of final destination.
     *  0..n
     *  Consignment
     *  Transit
     *  Country
     *  Country
     *  Country
     *  Country(ies) of routing (WCO ID 064)
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\TransitCountry[] $transitCountry
     */
    private $transitCountry = [
        
    ];

    /**
     * ASBIE
     *  Consignment. Transport_ Contract. Contract
     *  A transport contract relating to this consignment.
     *  0..1
     *  Consignment
     *  Transport
     *  Contract
     *  Contract
     *  Contract
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\TransportContract $transportContract
     */
    private $transportContract = null;

    /**
     * ASBIE
     *  Consignment. Transport Event
     *  A class describing a significant occurrence or happening related to the transportation of goods.
     *  0..n
     *  Consignment
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\TransportEvent[] $transportEvent
     */
    private $transportEvent = [
        
    ];

    /**
     * ASBIE
     *  Consignment. Original Despatch_ Transportation Service. Transportation Service
     *  The service for pickup from the consignor under the transport contract for this consignment.
     *  0..1
     *  Consignment
     *  Original Despatch
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *  Door-to-door , Pier-to-door
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\OriginalDespatchTransportationService $originalDespatchTransportationService
     */
    private $originalDespatchTransportationService = null;

    /**
     * ASBIE
     *  Consignment. Final Delivery_ Transportation Service. Transportation Service
     *  The service for delivery to the consignee under the transport contract for this consignment.
     *  0..1
     *  Consignment
     *  Final Delivery
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *  Door-to-door , Pier-to-door
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\FinalDeliveryTransportationService $finalDeliveryTransportationService
     */
    private $finalDeliveryTransportationService = null;

    /**
     * ASBIE
     *  Consignment. Delivery Terms
     *  The conditions agreed upon between a seller and a buyer with regard to the delivery of goods and/or services (e.g., CIF, FOB, or EXW from the INCOTERMS Terms of Delivery).
     *  0..1
     *  Consignment
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *  Trade Terms, INCOTERMS
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\DeliveryTerms $deliveryTerms
     */
    private $deliveryTerms = null;

    /**
     * ASBIE
     *  Consignment. Payment Terms
     *  The terms of payment between the parties (such as logistics service client, logistics service provider) in a transaction.
     *  0..1
     *  Consignment
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentTerms $paymentTerms
     */
    private $paymentTerms = null;

    /**
     * ASBIE
     *  Consignment. Collect_ Payment Terms. Payment Terms
     *  The terms of payment that apply to the collection of this consignment.
     *  0..1
     *  Consignment
     *  Collect
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\CollectPaymentTerms $collectPaymentTerms
     */
    private $collectPaymentTerms = null;

    /**
     * ASBIE
     *  Consignment. Disbursement_ Payment Terms. Payment Terms
     *  The terms of payment for disbursement.
     *  0..1
     *  Consignment
     *  Disbursement
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\DisbursementPaymentTerms $disbursementPaymentTerms
     */
    private $disbursementPaymentTerms = null;

    /**
     * ASBIE
     *  Consignment. Prepaid_ Payment Terms. Payment Terms
     *  The terms of payment for prepayment.
     *  0..1
     *  Consignment
     *  Prepaid
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PrepaidPaymentTerms $prepaidPaymentTerms
     */
    private $prepaidPaymentTerms = null;

    /**
     * ASBIE
     *  Consignment. Freight_ Allowance Charge. Allowance Charge
     *  A cost incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage for this consignment. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance to the extent that they relate to the freight costs.
     *  0..n
     *  Consignment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *  Freight Costs
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\FreightAllowanceCharge[] $freightAllowanceCharge
     */
    private $freightAllowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Consignment. Extra_ Allowance Charge. Allowance Charge
     *  A charge for extra allowance.
     *  0..n
     *  Consignment
     *  Extra
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\ExtraAllowanceCharge[] $extraAllowanceCharge
     */
    private $extraAllowanceCharge = [
        
    ];

    /**
     * ASBIE
     *  Consignment. Main Carriage_ Shipment Stage. Shipment Stage
     *  A shipment stage during main carriage.
     *  0..n
     *  Consignment
     *  Main Carriage
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\MainCarriageShipmentStage[] $mainCarriageShipmentStage
     */
    private $mainCarriageShipmentStage = [
        
    ];

    /**
     * ASBIE
     *  Consignment. Pre Carriage_ Shipment Stage. Shipment Stage
     *  A shipment stage during precarriage (usually refers to movement activity that takes place prior to the container being loaded at a port of loading).
     *  0..n
     *  Consignment
     *  Pre Carriage
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\PreCarriageShipmentStage[] $preCarriageShipmentStage
     */
    private $preCarriageShipmentStage = [
        
    ];

    /**
     * ASBIE
     *  Consignment. On Carriage_ Shipment Stage. Shipment Stage
     *  A shipment stage during on-carriage (usually refers to movement activity that takes place after the container is discharged at a port of discharge).
     *  0..n
     *  Consignment
     *  On Carriage
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\OnCarriageShipmentStage[] $onCarriageShipmentStage
     */
    private $onCarriageShipmentStage = [
        
    ];

    /**
     * ASBIE
     *  Consignment. Transport Handling Unit
     *  A transport handling unit used for loose and containerized goods.
     *  0..n
     *  Consignment
     *  Transport Handling Unit
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\TransportHandlingUnit[] $transportHandlingUnit
     */
    private $transportHandlingUnit = [
        
    ];

    /**
     * ASBIE
     *  Consignment. First Arrival Port_ Location. Location
     *  The first arrival location in a transport. This would be a port for sea, an airport for air, a terminal for rail, or a border post for land crossing.
     *  0..1
     *  Consignment
     *  First Arrival Port
     *  Location
     *  Location
     *  Location
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\FirstArrivalPortLocation $firstArrivalPortLocation
     */
    private $firstArrivalPortLocation = null;

    /**
     * ASBIE
     *  Consignment. Last Exit Port_ Location. Location
     *  The final exporting location in a transport. This would be a port for sea, an airport for air, a terminal for rail, or a border post for land crossing.
     *  0..1
     *  Consignment
     *  Last Exit Port
     *  Location
     *  Location
     *  Location
     *
     * @var \Greenter\Ubl\Entity\CommonAggregateComponents\LastExitPortLocation $lastExitPortLocation
     */
    private $lastExitPortLocation = null;

    /**
     * Gets as iD
     *
     * BBIE
     *  Consignment. Identifier
     *  An identifier assigned to a collection of goods for both import and export.
     *  1
     *  Consignment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Unique consignment reference number (UCR)
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
     *  Consignment. Identifier
     *  An identifier assigned to a collection of goods for both import and export.
     *  1
     *  Consignment
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *  Unique consignment reference number (UCR)
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
     * Gets as carrierAssignedID
     *
     * BBIE
     *  Consignment. Carrier Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the carrier.
     *  0..1
     *  Consignment
     *  Carrier Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\CarrierAssignedID
     */
    public function getCarrierAssignedID()
    {
        return $this->carrierAssignedID;
    }

    /**
     * Sets a new carrierAssignedID
     *
     * BBIE
     *  Consignment. Carrier Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the carrier.
     *  0..1
     *  Consignment
     *  Carrier Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\CarrierAssignedID $carrierAssignedID
     * @return self
     */
    public function setCarrierAssignedID(\Greenter\Ubl\Entity\CommonBasic\CarrierAssignedID $carrierAssignedID)
    {
        $this->carrierAssignedID = $carrierAssignedID;
        return $this;
    }

    /**
     * Gets as consigneeAssignedID
     *
     * BBIE
     *  Consignment. Consignee Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the consignee.
     *  0..1
     *  Consignment
     *  Consignee Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ConsigneeAssignedID
     */
    public function getConsigneeAssignedID()
    {
        return $this->consigneeAssignedID;
    }

    /**
     * Sets a new consigneeAssignedID
     *
     * BBIE
     *  Consignment. Consignee Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the consignee.
     *  0..1
     *  Consignment
     *  Consignee Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ConsigneeAssignedID $consigneeAssignedID
     * @return self
     */
    public function setConsigneeAssignedID(\Greenter\Ubl\Entity\CommonBasic\ConsigneeAssignedID $consigneeAssignedID)
    {
        $this->consigneeAssignedID = $consigneeAssignedID;
        return $this;
    }

    /**
     * Gets as consignorAssignedID
     *
     * BBIE
     *  Consignment. Consignor Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the consignor.
     *  0..1
     *  Consignment
     *  Consignor Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ConsignorAssignedID
     */
    public function getConsignorAssignedID()
    {
        return $this->consignorAssignedID;
    }

    /**
     * Sets a new consignorAssignedID
     *
     * BBIE
     *  Consignment. Consignor Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the consignor.
     *  0..1
     *  Consignment
     *  Consignor Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ConsignorAssignedID $consignorAssignedID
     * @return self
     */
    public function setConsignorAssignedID(\Greenter\Ubl\Entity\CommonBasic\ConsignorAssignedID $consignorAssignedID)
    {
        $this->consignorAssignedID = $consignorAssignedID;
        return $this;
    }

    /**
     * Gets as freightForwarderAssignedID
     *
     * BBIE
     *  Consignment. Freight Forwarder Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the freight forwarder.
     *  0..1
     *  Consignment
     *  Freight Forwarder Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\FreightForwarderAssignedID
     */
    public function getFreightForwarderAssignedID()
    {
        return $this->freightForwarderAssignedID;
    }

    /**
     * Sets a new freightForwarderAssignedID
     *
     * BBIE
     *  Consignment. Freight Forwarder Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the freight forwarder.
     *  0..1
     *  Consignment
     *  Freight Forwarder Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\FreightForwarderAssignedID $freightForwarderAssignedID
     * @return self
     */
    public function setFreightForwarderAssignedID(\Greenter\Ubl\Entity\CommonBasic\FreightForwarderAssignedID $freightForwarderAssignedID)
    {
        $this->freightForwarderAssignedID = $freightForwarderAssignedID;
        return $this;
    }

    /**
     * Gets as brokerAssignedID
     *
     * BBIE
     *  Consignment. Broker Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the broker.
     *  0..1
     *  Consignment
     *  Broker Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\BrokerAssignedID
     */
    public function getBrokerAssignedID()
    {
        return $this->brokerAssignedID;
    }

    /**
     * Sets a new brokerAssignedID
     *
     * BBIE
     *  Consignment. Broker Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the broker.
     *  0..1
     *  Consignment
     *  Broker Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\BrokerAssignedID $brokerAssignedID
     * @return self
     */
    public function setBrokerAssignedID(\Greenter\Ubl\Entity\CommonBasic\BrokerAssignedID $brokerAssignedID)
    {
        $this->brokerAssignedID = $brokerAssignedID;
        return $this;
    }

    /**
     * Gets as contractedCarrierAssignedID
     *
     * BBIE
     *  Consignment. Contracted Carrier Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the contracted carrier.
     *  0..1
     *  Consignment
     *  Contracted Carrier Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ContractedCarrierAssignedID
     */
    public function getContractedCarrierAssignedID()
    {
        return $this->contractedCarrierAssignedID;
    }

    /**
     * Sets a new contractedCarrierAssignedID
     *
     * BBIE
     *  Consignment. Contracted Carrier Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the contracted carrier.
     *  0..1
     *  Consignment
     *  Contracted Carrier Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ContractedCarrierAssignedID $contractedCarrierAssignedID
     * @return self
     */
    public function setContractedCarrierAssignedID(\Greenter\Ubl\Entity\CommonBasic\ContractedCarrierAssignedID $contractedCarrierAssignedID)
    {
        $this->contractedCarrierAssignedID = $contractedCarrierAssignedID;
        return $this;
    }

    /**
     * Gets as performingCarrierAssignedID
     *
     * BBIE
     *  Consignment. Performing Carrier Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the performing carrier.
     *  0..1
     *  Consignment
     *  Performing Carrier Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\PerformingCarrierAssignedID
     */
    public function getPerformingCarrierAssignedID()
    {
        return $this->performingCarrierAssignedID;
    }

    /**
     * Sets a new performingCarrierAssignedID
     *
     * BBIE
     *  Consignment. Performing Carrier Assigned_ Identifier. Identifier
     *  An identifier for this consignment, assigned by the performing carrier.
     *  0..1
     *  Consignment
     *  Performing Carrier Assigned
     *  Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\PerformingCarrierAssignedID $performingCarrierAssignedID
     * @return self
     */
    public function setPerformingCarrierAssignedID(\Greenter\Ubl\Entity\CommonBasic\PerformingCarrierAssignedID $performingCarrierAssignedID)
    {
        $this->performingCarrierAssignedID = $performingCarrierAssignedID;
        return $this;
    }

    /**
     * Adds as summaryDescription
     *
     * BBIE
     *  Consignment. Summary_ Description. Text
     *  A textual summary description of the consignment.
     *  0..n
     *  Consignment
     *  Summary
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\SummaryDescription $summaryDescription
     */
    public function addToSummaryDescription(\Greenter\Ubl\Entity\CommonBasic\SummaryDescription $summaryDescription)
    {
        $this->summaryDescription[] = $summaryDescription;
        return $this;
    }

    /**
     * isset summaryDescription
     *
     * BBIE
     *  Consignment. Summary_ Description. Text
     *  A textual summary description of the consignment.
     *  0..n
     *  Consignment
     *  Summary
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSummaryDescription($index)
    {
        return isset($this->summaryDescription[$index]);
    }

    /**
     * unset summaryDescription
     *
     * BBIE
     *  Consignment. Summary_ Description. Text
     *  A textual summary description of the consignment.
     *  0..n
     *  Consignment
     *  Summary
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSummaryDescription($index)
    {
        unset($this->summaryDescription[$index]);
    }

    /**
     * Gets as summaryDescription
     *
     * BBIE
     *  Consignment. Summary_ Description. Text
     *  A textual summary description of the consignment.
     *  0..n
     *  Consignment
     *  Summary
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SummaryDescription[]
     */
    public function getSummaryDescription()
    {
        return $this->summaryDescription;
    }

    /**
     * Sets a new summaryDescription
     *
     * BBIE
     *  Consignment. Summary_ Description. Text
     *  A textual summary description of the consignment.
     *  0..n
     *  Consignment
     *  Summary
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SummaryDescription[] $summaryDescription
     * @return self
     */
    public function setSummaryDescription(array $summaryDescription)
    {
        $this->summaryDescription = $summaryDescription;
        return $this;
    }

    /**
     * Gets as totalInvoiceAmount
     *
     * BBIE
     *  Consignment. Total_ Invoice Amount. Amount
     *  The total of all invoice amounts declared in this consignment.
     *  0..1
     *  Consignment
     *  Total
     *  Invoice Amount
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TotalInvoiceAmount
     */
    public function getTotalInvoiceAmount()
    {
        return $this->totalInvoiceAmount;
    }

    /**
     * Sets a new totalInvoiceAmount
     *
     * BBIE
     *  Consignment. Total_ Invoice Amount. Amount
     *  The total of all invoice amounts declared in this consignment.
     *  0..1
     *  Consignment
     *  Total
     *  Invoice Amount
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TotalInvoiceAmount $totalInvoiceAmount
     * @return self
     */
    public function setTotalInvoiceAmount(\Greenter\Ubl\Entity\CommonBasic\TotalInvoiceAmount $totalInvoiceAmount)
    {
        $this->totalInvoiceAmount = $totalInvoiceAmount;
        return $this;
    }

    /**
     * Gets as declaredCustomsValueAmount
     *
     * BBIE
     *  Consignment. Declared Customs_ Value. Amount
     *  The total declared value for customs purposes of all the goods in this consignment, regardless of whether they are subject to the same customs procedure, tariff/statistical categorization, country information, or duty regime.
     *  0..1
     *  Consignment
     *  Declared Customs
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\DeclaredCustomsValueAmount
     */
    public function getDeclaredCustomsValueAmount()
    {
        return $this->declaredCustomsValueAmount;
    }

    /**
     * Sets a new declaredCustomsValueAmount
     *
     * BBIE
     *  Consignment. Declared Customs_ Value. Amount
     *  The total declared value for customs purposes of all the goods in this consignment, regardless of whether they are subject to the same customs procedure, tariff/statistical categorization, country information, or duty regime.
     *  0..1
     *  Consignment
     *  Declared Customs
     *  Value
     *  Amount
     *  Amount. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\DeclaredCustomsValueAmount $declaredCustomsValueAmount
     * @return self
     */
    public function setDeclaredCustomsValueAmount(\Greenter\Ubl\Entity\CommonBasic\DeclaredCustomsValueAmount $declaredCustomsValueAmount)
    {
        $this->declaredCustomsValueAmount = $declaredCustomsValueAmount;
        return $this;
    }

    /**
     * Adds as tariffDescription
     *
     * BBIE
     *  Consignment. Tariff Description. Text
     *  Text describing the tariff applied to this consignment.
     *  0..n
     *  Consignment
     *  Tariff Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\TariffDescription $tariffDescription
     */
    public function addToTariffDescription(\Greenter\Ubl\Entity\CommonBasic\TariffDescription $tariffDescription)
    {
        $this->tariffDescription[] = $tariffDescription;
        return $this;
    }

    /**
     * isset tariffDescription
     *
     * BBIE
     *  Consignment. Tariff Description. Text
     *  Text describing the tariff applied to this consignment.
     *  0..n
     *  Consignment
     *  Tariff Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTariffDescription($index)
    {
        return isset($this->tariffDescription[$index]);
    }

    /**
     * unset tariffDescription
     *
     * BBIE
     *  Consignment. Tariff Description. Text
     *  Text describing the tariff applied to this consignment.
     *  0..n
     *  Consignment
     *  Tariff Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTariffDescription($index)
    {
        unset($this->tariffDescription[$index]);
    }

    /**
     * Gets as tariffDescription
     *
     * BBIE
     *  Consignment. Tariff Description. Text
     *  Text describing the tariff applied to this consignment.
     *  0..n
     *  Consignment
     *  Tariff Description
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TariffDescription[]
     */
    public function getTariffDescription()
    {
        return $this->tariffDescription;
    }

    /**
     * Sets a new tariffDescription
     *
     * BBIE
     *  Consignment. Tariff Description. Text
     *  Text describing the tariff applied to this consignment.
     *  0..n
     *  Consignment
     *  Tariff Description
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TariffDescription[] $tariffDescription
     * @return self
     */
    public function setTariffDescription(array $tariffDescription)
    {
        $this->tariffDescription = $tariffDescription;
        return $this;
    }

    /**
     * Gets as tariffCode
     *
     * BBIE
     *  Consignment. Tariff Code. Code
     *  A code signifying the tariff applied to this consignment.
     *  0..1
     *  Consignment
     *  Tariff Code
     *  Code
     *  Code. Type
     *  Tariff code number (WCO ID 145)
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TariffCode
     */
    public function getTariffCode()
    {
        return $this->tariffCode;
    }

    /**
     * Sets a new tariffCode
     *
     * BBIE
     *  Consignment. Tariff Code. Code
     *  A code signifying the tariff applied to this consignment.
     *  0..1
     *  Consignment
     *  Tariff Code
     *  Code
     *  Code. Type
     *  Tariff code number (WCO ID 145)
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TariffCode $tariffCode
     * @return self
     */
    public function setTariffCode(\Greenter\Ubl\Entity\CommonBasic\TariffCode $tariffCode)
    {
        $this->tariffCode = $tariffCode;
        return $this;
    }

    /**
     * Gets as insurancePremiumAmount
     *
     * BBIE
     *  Consignment. Insurance Premium Amount. Amount
     *  The amount of the premium payable to an insurance company for insuring the goods contained in this consignment.
     *  0..1
     *  Consignment
     *  Insurance Premium Amount
     *  Amount
     *  Amount. Type
     *  Insurance Cost
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\InsurancePremiumAmount
     */
    public function getInsurancePremiumAmount()
    {
        return $this->insurancePremiumAmount;
    }

    /**
     * Sets a new insurancePremiumAmount
     *
     * BBIE
     *  Consignment. Insurance Premium Amount. Amount
     *  The amount of the premium payable to an insurance company for insuring the goods contained in this consignment.
     *  0..1
     *  Consignment
     *  Insurance Premium Amount
     *  Amount
     *  Amount. Type
     *  Insurance Cost
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\InsurancePremiumAmount $insurancePremiumAmount
     * @return self
     */
    public function setInsurancePremiumAmount(\Greenter\Ubl\Entity\CommonBasic\InsurancePremiumAmount $insurancePremiumAmount)
    {
        $this->insurancePremiumAmount = $insurancePremiumAmount;
        return $this;
    }

    /**
     * Gets as grossWeightMeasure
     *
     * BBIE
     *  Consignment. Gross_ Weight. Measure
     *  The total declared weight of the goods in this consignment, including packaging but excluding the carrier's equipment.
     *  0..1
     *  Consignment
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *  Total gross weight (WCO ID 131)
     *  Total cube of all goods items referred to as one consignment.
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\GrossWeightMeasure
     */
    public function getGrossWeightMeasure()
    {
        return $this->grossWeightMeasure;
    }

    /**
     * Sets a new grossWeightMeasure
     *
     * BBIE
     *  Consignment. Gross_ Weight. Measure
     *  The total declared weight of the goods in this consignment, including packaging but excluding the carrier's equipment.
     *  0..1
     *  Consignment
     *  Gross
     *  Weight
     *  Measure
     *  Measure. Type
     *  Total gross weight (WCO ID 131)
     *  Total cube of all goods items referred to as one consignment.
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\GrossWeightMeasure $grossWeightMeasure
     * @return self
     */
    public function setGrossWeightMeasure(\Greenter\Ubl\Entity\CommonBasic\GrossWeightMeasure $grossWeightMeasure)
    {
        $this->grossWeightMeasure = $grossWeightMeasure;
        return $this;
    }

    /**
     * Gets as netWeightMeasure
     *
     * BBIE
     *  Consignment. Net_ Weight. Measure
     *  The total net weight of all the goods items referred to as one consignment.
     *  0..1
     *  Consignment
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\NetWeightMeasure
     */
    public function getNetWeightMeasure()
    {
        return $this->netWeightMeasure;
    }

    /**
     * Sets a new netWeightMeasure
     *
     * BBIE
     *  Consignment. Net_ Weight. Measure
     *  The total net weight of all the goods items referred to as one consignment.
     *  0..1
     *  Consignment
     *  Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\NetWeightMeasure $netWeightMeasure
     * @return self
     */
    public function setNetWeightMeasure(\Greenter\Ubl\Entity\CommonBasic\NetWeightMeasure $netWeightMeasure)
    {
        $this->netWeightMeasure = $netWeightMeasure;
        return $this;
    }

    /**
     * Gets as netNetWeightMeasure
     *
     * BBIE
     *  Consignment. Net Net_ Weight. Measure
     *  The total net weight of the goods in this consignment, exclusive of packaging.
     *  0..1
     *  Consignment
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\NetNetWeightMeasure
     */
    public function getNetNetWeightMeasure()
    {
        return $this->netNetWeightMeasure;
    }

    /**
     * Sets a new netNetWeightMeasure
     *
     * BBIE
     *  Consignment. Net Net_ Weight. Measure
     *  The total net weight of the goods in this consignment, exclusive of packaging.
     *  0..1
     *  Consignment
     *  Net Net
     *  Weight
     *  Measure
     *  Measure. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\NetNetWeightMeasure $netNetWeightMeasure
     * @return self
     */
    public function setNetNetWeightMeasure(\Greenter\Ubl\Entity\CommonBasic\NetNetWeightMeasure $netNetWeightMeasure)
    {
        $this->netNetWeightMeasure = $netNetWeightMeasure;
        return $this;
    }

    /**
     * Gets as chargeableWeightMeasure
     *
     * BBIE
     *  Consignment. Chargeable_ Weight. Measure
     *  The weight upon which a charge is to be based.
     *  0..1
     *  Consignment
     *  Chargeable
     *  Weight
     *  Measure
     *  Measure. Type
     *  Chargeable Weight. Basis.Measure
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ChargeableWeightMeasure
     */
    public function getChargeableWeightMeasure()
    {
        return $this->chargeableWeightMeasure;
    }

    /**
     * Sets a new chargeableWeightMeasure
     *
     * BBIE
     *  Consignment. Chargeable_ Weight. Measure
     *  The weight upon which a charge is to be based.
     *  0..1
     *  Consignment
     *  Chargeable
     *  Weight
     *  Measure
     *  Measure. Type
     *  Chargeable Weight. Basis.Measure
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ChargeableWeightMeasure $chargeableWeightMeasure
     * @return self
     */
    public function setChargeableWeightMeasure(\Greenter\Ubl\Entity\CommonBasic\ChargeableWeightMeasure $chargeableWeightMeasure)
    {
        $this->chargeableWeightMeasure = $chargeableWeightMeasure;
        return $this;
    }

    /**
     * Gets as grossVolumeMeasure
     *
     * BBIE
     *  Consignment. Gross_ Volume. Measure
     *  The total volume of the goods referred to as one consignment.
     *  0..1
     *  Consignment
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *  Cube
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\GrossVolumeMeasure
     */
    public function getGrossVolumeMeasure()
    {
        return $this->grossVolumeMeasure;
    }

    /**
     * Sets a new grossVolumeMeasure
     *
     * BBIE
     *  Consignment. Gross_ Volume. Measure
     *  The total volume of the goods referred to as one consignment.
     *  0..1
     *  Consignment
     *  Gross
     *  Volume
     *  Measure
     *  Measure. Type
     *  Cube
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\GrossVolumeMeasure $grossVolumeMeasure
     * @return self
     */
    public function setGrossVolumeMeasure(\Greenter\Ubl\Entity\CommonBasic\GrossVolumeMeasure $grossVolumeMeasure)
    {
        $this->grossVolumeMeasure = $grossVolumeMeasure;
        return $this;
    }

    /**
     * Gets as netVolumeMeasure
     *
     * BBIE
     *  Consignment. Net_ Volume. Measure
     *  The total net volume of all goods items referred to as one consignment.
     *  0..1
     *  Consignment
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\NetVolumeMeasure
     */
    public function getNetVolumeMeasure()
    {
        return $this->netVolumeMeasure;
    }

    /**
     * Sets a new netVolumeMeasure
     *
     * BBIE
     *  Consignment. Net_ Volume. Measure
     *  The total net volume of all goods items referred to as one consignment.
     *  0..1
     *  Consignment
     *  Net
     *  Volume
     *  Measure
     *  Measure. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\NetVolumeMeasure $netVolumeMeasure
     * @return self
     */
    public function setNetVolumeMeasure(\Greenter\Ubl\Entity\CommonBasic\NetVolumeMeasure $netVolumeMeasure)
    {
        $this->netVolumeMeasure = $netVolumeMeasure;
        return $this;
    }

    /**
     * Gets as loadingLengthMeasure
     *
     * BBIE
     *  Consignment. Loading_ Length. Measure
     *  The total length in a means of transport or a piece of transport equipment which, given the width and height of the transport means, will accommodate all of the consignments in a single consolidation.
     *  0..1
     *  Consignment
     *  Loading
     *  Length
     *  Measure
     *  Measure. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\LoadingLengthMeasure
     */
    public function getLoadingLengthMeasure()
    {
        return $this->loadingLengthMeasure;
    }

    /**
     * Sets a new loadingLengthMeasure
     *
     * BBIE
     *  Consignment. Loading_ Length. Measure
     *  The total length in a means of transport or a piece of transport equipment which, given the width and height of the transport means, will accommodate all of the consignments in a single consolidation.
     *  0..1
     *  Consignment
     *  Loading
     *  Length
     *  Measure
     *  Measure. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\LoadingLengthMeasure $loadingLengthMeasure
     * @return self
     */
    public function setLoadingLengthMeasure(\Greenter\Ubl\Entity\CommonBasic\LoadingLengthMeasure $loadingLengthMeasure)
    {
        $this->loadingLengthMeasure = $loadingLengthMeasure;
        return $this;
    }

    /**
     * Adds as remarks
     *
     * BBIE
     *  Consignment. Remarks. Text
     *  Remarks concerning the complete consignment, to be printed on the transport document.
     *  0..n
     *  Consignment
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\Remarks $remarks
     */
    public function addToRemarks(\Greenter\Ubl\Entity\CommonBasic\Remarks $remarks)
    {
        $this->remarks[] = $remarks;
        return $this;
    }

    /**
     * isset remarks
     *
     * BBIE
     *  Consignment. Remarks. Text
     *  Remarks concerning the complete consignment, to be printed on the transport document.
     *  0..n
     *  Consignment
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemarks($index)
    {
        return isset($this->remarks[$index]);
    }

    /**
     * unset remarks
     *
     * BBIE
     *  Consignment. Remarks. Text
     *  Remarks concerning the complete consignment, to be printed on the transport document.
     *  0..n
     *  Consignment
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemarks($index)
    {
        unset($this->remarks[$index]);
    }

    /**
     * Gets as remarks
     *
     * BBIE
     *  Consignment. Remarks. Text
     *  Remarks concerning the complete consignment, to be printed on the transport document.
     *  0..n
     *  Consignment
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Remarks[]
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * BBIE
     *  Consignment. Remarks. Text
     *  Remarks concerning the complete consignment, to be printed on the transport document.
     *  0..n
     *  Consignment
     *  Remarks
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Remarks[] $remarks
     * @return self
     */
    public function setRemarks(array $remarks)
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Gets as hazardousRiskIndicator
     *
     * BBIE
     *  Consignment. Hazardous Risk_ Indicator. Indicator
     *  An indication that the transported goods in this consignment are subject to an international regulation concerning the carriage of dangerous goods (true) or not (false).
     *  0..1
     *  Consignment
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Dangerous Goods RID Indicator
     *  default is negative
     *
     * @return bool
     */
    public function getHazardousRiskIndicator()
    {
        return $this->hazardousRiskIndicator;
    }

    /**
     * Sets a new hazardousRiskIndicator
     *
     * BBIE
     *  Consignment. Hazardous Risk_ Indicator. Indicator
     *  An indication that the transported goods in this consignment are subject to an international regulation concerning the carriage of dangerous goods (true) or not (false).
     *  0..1
     *  Consignment
     *  Hazardous Risk
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  Dangerous Goods RID Indicator
     *  default is negative
     *
     * @param bool $hazardousRiskIndicator
     * @return self
     */
    public function setHazardousRiskIndicator($hazardousRiskIndicator)
    {
        $this->hazardousRiskIndicator = $hazardousRiskIndicator;
        return $this;
    }

    /**
     * Gets as animalFoodIndicator
     *
     * BBIE
     *  Consignment. Animal_ Food Indicator. Indicator
     *  An indication that the transported goods in this consignment are animal foodstuffs (true) or not (false).
     *  0..1
     *  Consignment
     *  Animal
     *  Food Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @return bool
     */
    public function getAnimalFoodIndicator()
    {
        return $this->animalFoodIndicator;
    }

    /**
     * Sets a new animalFoodIndicator
     *
     * BBIE
     *  Consignment. Animal_ Food Indicator. Indicator
     *  An indication that the transported goods in this consignment are animal foodstuffs (true) or not (false).
     *  0..1
     *  Consignment
     *  Animal
     *  Food Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @param bool $animalFoodIndicator
     * @return self
     */
    public function setAnimalFoodIndicator($animalFoodIndicator)
    {
        $this->animalFoodIndicator = $animalFoodIndicator;
        return $this;
    }

    /**
     * Gets as humanFoodIndicator
     *
     * BBIE
     *  Consignment. Human_ Food Indicator. Indicator
     *  An indication that the transported goods in this consignment are for human consumption (true) or not (false).
     *  0..1
     *  Consignment
     *  Human
     *  Food Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @return bool
     */
    public function getHumanFoodIndicator()
    {
        return $this->humanFoodIndicator;
    }

    /**
     * Sets a new humanFoodIndicator
     *
     * BBIE
     *  Consignment. Human_ Food Indicator. Indicator
     *  An indication that the transported goods in this consignment are for human consumption (true) or not (false).
     *  0..1
     *  Consignment
     *  Human
     *  Food Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @param bool $humanFoodIndicator
     * @return self
     */
    public function setHumanFoodIndicator($humanFoodIndicator)
    {
        $this->humanFoodIndicator = $humanFoodIndicator;
        return $this;
    }

    /**
     * Gets as livestockIndicator
     *
     * BBIE
     *  Consignment. Livestock_ Indicator. Indicator
     *  An indication that the transported goods are livestock (true) or not (false).
     *  0..1
     *  Consignment
     *  Livestock
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @return bool
     */
    public function getLivestockIndicator()
    {
        return $this->livestockIndicator;
    }

    /**
     * Sets a new livestockIndicator
     *
     * BBIE
     *  Consignment. Livestock_ Indicator. Indicator
     *  An indication that the transported goods are livestock (true) or not (false).
     *  0..1
     *  Consignment
     *  Livestock
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @param bool $livestockIndicator
     * @return self
     */
    public function setLivestockIndicator($livestockIndicator)
    {
        $this->livestockIndicator = $livestockIndicator;
        return $this;
    }

    /**
     * Gets as bulkCargoIndicator
     *
     * BBIE
     *  Consignment. Bulk Cargo_ Indicator. Indicator
     *  An indication that the transported goods in this consignment are bulk cargoes (true) or not (false).
     *  0..1
     *  Consignment
     *  Bulk Cargo
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @return bool
     */
    public function getBulkCargoIndicator()
    {
        return $this->bulkCargoIndicator;
    }

    /**
     * Sets a new bulkCargoIndicator
     *
     * BBIE
     *  Consignment. Bulk Cargo_ Indicator. Indicator
     *  An indication that the transported goods in this consignment are bulk cargoes (true) or not (false).
     *  0..1
     *  Consignment
     *  Bulk Cargo
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @param bool $bulkCargoIndicator
     * @return self
     */
    public function setBulkCargoIndicator($bulkCargoIndicator)
    {
        $this->bulkCargoIndicator = $bulkCargoIndicator;
        return $this;
    }

    /**
     * Gets as containerizedIndicator
     *
     * BBIE
     *  Consignment. Containerized_ Indicator. Indicator
     *  An indication that the transported goods in this consignment are containerized cargoes (true) or not (false).
     *  0..1
     *  Consignment
     *  Containerized
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @return bool
     */
    public function getContainerizedIndicator()
    {
        return $this->containerizedIndicator;
    }

    /**
     * Sets a new containerizedIndicator
     *
     * BBIE
     *  Consignment. Containerized_ Indicator. Indicator
     *  An indication that the transported goods in this consignment are containerized cargoes (true) or not (false).
     *  0..1
     *  Consignment
     *  Containerized
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @param bool $containerizedIndicator
     * @return self
     */
    public function setContainerizedIndicator($containerizedIndicator)
    {
        $this->containerizedIndicator = $containerizedIndicator;
        return $this;
    }

    /**
     * Gets as generalCargoIndicator
     *
     * BBIE
     *  Consignment. General Cargo_ Indicator. Indicator
     *  An indication that the transported goods in this consignment are general cargoes (true) or not (false).
     *  0..1
     *  Consignment
     *  General Cargo
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @return bool
     */
    public function getGeneralCargoIndicator()
    {
        return $this->generalCargoIndicator;
    }

    /**
     * Sets a new generalCargoIndicator
     *
     * BBIE
     *  Consignment. General Cargo_ Indicator. Indicator
     *  An indication that the transported goods in this consignment are general cargoes (true) or not (false).
     *  0..1
     *  Consignment
     *  General Cargo
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @param bool $generalCargoIndicator
     * @return self
     */
    public function setGeneralCargoIndicator($generalCargoIndicator)
    {
        $this->generalCargoIndicator = $generalCargoIndicator;
        return $this;
    }

    /**
     * Gets as specialSecurityIndicator
     *
     * BBIE
     *  Consignment. Special_ Security Indicator. Indicator
     *  An indication that the transported goods in this consignment require special security (true) or not (false).
     *  0..1
     *  Consignment
     *  Special
     *  Security Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @return bool
     */
    public function getSpecialSecurityIndicator()
    {
        return $this->specialSecurityIndicator;
    }

    /**
     * Sets a new specialSecurityIndicator
     *
     * BBIE
     *  Consignment. Special_ Security Indicator. Indicator
     *  An indication that the transported goods in this consignment require special security (true) or not (false).
     *  0..1
     *  Consignment
     *  Special
     *  Security Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @param bool $specialSecurityIndicator
     * @return self
     */
    public function setSpecialSecurityIndicator($specialSecurityIndicator)
    {
        $this->specialSecurityIndicator = $specialSecurityIndicator;
        return $this;
    }

    /**
     * Gets as thirdPartyPayerIndicator
     *
     * BBIE
     *  Consignment. Third Party Payer_ Indicator. Indicator
     *  An indication that this consignment will be paid for by a third party (true) or not (false).
     *  0..1
     *  Consignment
     *  Third Party Payer
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @return bool
     */
    public function getThirdPartyPayerIndicator()
    {
        return $this->thirdPartyPayerIndicator;
    }

    /**
     * Sets a new thirdPartyPayerIndicator
     *
     * BBIE
     *  Consignment. Third Party Payer_ Indicator. Indicator
     *  An indication that this consignment will be paid for by a third party (true) or not (false).
     *  0..1
     *  Consignment
     *  Third Party Payer
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @param bool $thirdPartyPayerIndicator
     * @return self
     */
    public function setThirdPartyPayerIndicator($thirdPartyPayerIndicator)
    {
        $this->thirdPartyPayerIndicator = $thirdPartyPayerIndicator;
        return $this;
    }

    /**
     * Adds as carrierServiceInstructions
     *
     * BBIE
     *  Consignment. Carrier Service_ Instructions. Text
     *  Service instructions to the carrier, expressed as text.
     *  0..n
     *  Consignment
     *  Carrier Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\CarrierServiceInstructions $carrierServiceInstructions
     */
    public function addToCarrierServiceInstructions(\Greenter\Ubl\Entity\CommonBasic\CarrierServiceInstructions $carrierServiceInstructions)
    {
        $this->carrierServiceInstructions[] = $carrierServiceInstructions;
        return $this;
    }

    /**
     * isset carrierServiceInstructions
     *
     * BBIE
     *  Consignment. Carrier Service_ Instructions. Text
     *  Service instructions to the carrier, expressed as text.
     *  0..n
     *  Consignment
     *  Carrier Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCarrierServiceInstructions($index)
    {
        return isset($this->carrierServiceInstructions[$index]);
    }

    /**
     * unset carrierServiceInstructions
     *
     * BBIE
     *  Consignment. Carrier Service_ Instructions. Text
     *  Service instructions to the carrier, expressed as text.
     *  0..n
     *  Consignment
     *  Carrier Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCarrierServiceInstructions($index)
    {
        unset($this->carrierServiceInstructions[$index]);
    }

    /**
     * Gets as carrierServiceInstructions
     *
     * BBIE
     *  Consignment. Carrier Service_ Instructions. Text
     *  Service instructions to the carrier, expressed as text.
     *  0..n
     *  Consignment
     *  Carrier Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\CarrierServiceInstructions[]
     */
    public function getCarrierServiceInstructions()
    {
        return $this->carrierServiceInstructions;
    }

    /**
     * Sets a new carrierServiceInstructions
     *
     * BBIE
     *  Consignment. Carrier Service_ Instructions. Text
     *  Service instructions to the carrier, expressed as text.
     *  0..n
     *  Consignment
     *  Carrier Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\CarrierServiceInstructions[] $carrierServiceInstructions
     * @return self
     */
    public function setCarrierServiceInstructions(array $carrierServiceInstructions)
    {
        $this->carrierServiceInstructions = $carrierServiceInstructions;
        return $this;
    }

    /**
     * Adds as customsClearanceServiceInstructions
     *
     * BBIE
     *  Consignment. Customs Clearance Service_ Instructions. Text
     *  Service instructions for customs clearance, expressed as text.
     *  0..n
     *  Consignment
     *  Customs Clearance Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\CustomsClearanceServiceInstructions $customsClearanceServiceInstructions
     */
    public function addToCustomsClearanceServiceInstructions(\Greenter\Ubl\Entity\CommonBasic\CustomsClearanceServiceInstructions $customsClearanceServiceInstructions)
    {
        $this->customsClearanceServiceInstructions[] = $customsClearanceServiceInstructions;
        return $this;
    }

    /**
     * isset customsClearanceServiceInstructions
     *
     * BBIE
     *  Consignment. Customs Clearance Service_ Instructions. Text
     *  Service instructions for customs clearance, expressed as text.
     *  0..n
     *  Consignment
     *  Customs Clearance Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustomsClearanceServiceInstructions($index)
    {
        return isset($this->customsClearanceServiceInstructions[$index]);
    }

    /**
     * unset customsClearanceServiceInstructions
     *
     * BBIE
     *  Consignment. Customs Clearance Service_ Instructions. Text
     *  Service instructions for customs clearance, expressed as text.
     *  0..n
     *  Consignment
     *  Customs Clearance Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustomsClearanceServiceInstructions($index)
    {
        unset($this->customsClearanceServiceInstructions[$index]);
    }

    /**
     * Gets as customsClearanceServiceInstructions
     *
     * BBIE
     *  Consignment. Customs Clearance Service_ Instructions. Text
     *  Service instructions for customs clearance, expressed as text.
     *  0..n
     *  Consignment
     *  Customs Clearance Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\CustomsClearanceServiceInstructions[]
     */
    public function getCustomsClearanceServiceInstructions()
    {
        return $this->customsClearanceServiceInstructions;
    }

    /**
     * Sets a new customsClearanceServiceInstructions
     *
     * BBIE
     *  Consignment. Customs Clearance Service_ Instructions. Text
     *  Service instructions for customs clearance, expressed as text.
     *  0..n
     *  Consignment
     *  Customs Clearance Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\CustomsClearanceServiceInstructions[] $customsClearanceServiceInstructions
     * @return self
     */
    public function setCustomsClearanceServiceInstructions(array $customsClearanceServiceInstructions)
    {
        $this->customsClearanceServiceInstructions = $customsClearanceServiceInstructions;
        return $this;
    }

    /**
     * Adds as forwarderServiceInstructions
     *
     * BBIE
     *  Consignment. Forwarder Service_ Instructions. Text
     *  Service instructions for the forwarder, expressed as text.
     *  0..n
     *  Consignment
     *  Forwarder Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\ForwarderServiceInstructions $forwarderServiceInstructions
     */
    public function addToForwarderServiceInstructions(\Greenter\Ubl\Entity\CommonBasic\ForwarderServiceInstructions $forwarderServiceInstructions)
    {
        $this->forwarderServiceInstructions[] = $forwarderServiceInstructions;
        return $this;
    }

    /**
     * isset forwarderServiceInstructions
     *
     * BBIE
     *  Consignment. Forwarder Service_ Instructions. Text
     *  Service instructions for the forwarder, expressed as text.
     *  0..n
     *  Consignment
     *  Forwarder Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetForwarderServiceInstructions($index)
    {
        return isset($this->forwarderServiceInstructions[$index]);
    }

    /**
     * unset forwarderServiceInstructions
     *
     * BBIE
     *  Consignment. Forwarder Service_ Instructions. Text
     *  Service instructions for the forwarder, expressed as text.
     *  0..n
     *  Consignment
     *  Forwarder Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetForwarderServiceInstructions($index)
    {
        unset($this->forwarderServiceInstructions[$index]);
    }

    /**
     * Gets as forwarderServiceInstructions
     *
     * BBIE
     *  Consignment. Forwarder Service_ Instructions. Text
     *  Service instructions for the forwarder, expressed as text.
     *  0..n
     *  Consignment
     *  Forwarder Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ForwarderServiceInstructions[]
     */
    public function getForwarderServiceInstructions()
    {
        return $this->forwarderServiceInstructions;
    }

    /**
     * Sets a new forwarderServiceInstructions
     *
     * BBIE
     *  Consignment. Forwarder Service_ Instructions. Text
     *  Service instructions for the forwarder, expressed as text.
     *  0..n
     *  Consignment
     *  Forwarder Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ForwarderServiceInstructions[] $forwarderServiceInstructions
     * @return self
     */
    public function setForwarderServiceInstructions(array $forwarderServiceInstructions)
    {
        $this->forwarderServiceInstructions = $forwarderServiceInstructions;
        return $this;
    }

    /**
     * Adds as specialServiceInstructions
     *
     * BBIE
     *  Consignment. Special Service_ Instructions. Text
     *  Special service instructions, expressed as text.
     *  0..n
     *  Consignment
     *  Special Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\SpecialServiceInstructions $specialServiceInstructions
     */
    public function addToSpecialServiceInstructions(\Greenter\Ubl\Entity\CommonBasic\SpecialServiceInstructions $specialServiceInstructions)
    {
        $this->specialServiceInstructions[] = $specialServiceInstructions;
        return $this;
    }

    /**
     * isset specialServiceInstructions
     *
     * BBIE
     *  Consignment. Special Service_ Instructions. Text
     *  Special service instructions, expressed as text.
     *  0..n
     *  Consignment
     *  Special Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialServiceInstructions($index)
    {
        return isset($this->specialServiceInstructions[$index]);
    }

    /**
     * unset specialServiceInstructions
     *
     * BBIE
     *  Consignment. Special Service_ Instructions. Text
     *  Special service instructions, expressed as text.
     *  0..n
     *  Consignment
     *  Special Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialServiceInstructions($index)
    {
        unset($this->specialServiceInstructions[$index]);
    }

    /**
     * Gets as specialServiceInstructions
     *
     * BBIE
     *  Consignment. Special Service_ Instructions. Text
     *  Special service instructions, expressed as text.
     *  0..n
     *  Consignment
     *  Special Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SpecialServiceInstructions[]
     */
    public function getSpecialServiceInstructions()
    {
        return $this->specialServiceInstructions;
    }

    /**
     * Sets a new specialServiceInstructions
     *
     * BBIE
     *  Consignment. Special Service_ Instructions. Text
     *  Special service instructions, expressed as text.
     *  0..n
     *  Consignment
     *  Special Service
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SpecialServiceInstructions[] $specialServiceInstructions
     * @return self
     */
    public function setSpecialServiceInstructions(array $specialServiceInstructions)
    {
        $this->specialServiceInstructions = $specialServiceInstructions;
        return $this;
    }

    /**
     * Gets as sequenceID
     *
     * BBIE
     *  Consignment. Sequence Identifier. Identifier
     *  A sequence identifier for this consignment.
     *  0..1
     *  Consignment
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SequenceID
     */
    public function getSequenceID()
    {
        return $this->sequenceID;
    }

    /**
     * Sets a new sequenceID
     *
     * BBIE
     *  Consignment. Sequence Identifier. Identifier
     *  A sequence identifier for this consignment.
     *  0..1
     *  Consignment
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SequenceID $sequenceID
     * @return self
     */
    public function setSequenceID(\Greenter\Ubl\Entity\CommonBasic\SequenceID $sequenceID)
    {
        $this->sequenceID = $sequenceID;
        return $this;
    }

    /**
     * Gets as shippingPriorityLevelCode
     *
     * BBIE
     *  Consignment. Shipping Priority Level Code. Code
     *  A code signifying the priority or level of service required for this consignment.
     *  0..1
     *  Consignment
     *  Shipping Priority Level Code
     *  Code
     *  Code. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ShippingPriorityLevelCode
     */
    public function getShippingPriorityLevelCode()
    {
        return $this->shippingPriorityLevelCode;
    }

    /**
     * Sets a new shippingPriorityLevelCode
     *
     * BBIE
     *  Consignment. Shipping Priority Level Code. Code
     *  A code signifying the priority or level of service required for this consignment.
     *  0..1
     *  Consignment
     *  Shipping Priority Level Code
     *  Code
     *  Code. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ShippingPriorityLevelCode $shippingPriorityLevelCode
     * @return self
     */
    public function setShippingPriorityLevelCode(\Greenter\Ubl\Entity\CommonBasic\ShippingPriorityLevelCode $shippingPriorityLevelCode)
    {
        $this->shippingPriorityLevelCode = $shippingPriorityLevelCode;
        return $this;
    }

    /**
     * Gets as handlingCode
     *
     * BBIE
     *  Consignment. Handling Code. Code
     *  The handling required for this consignment, expressed as a code.
     *  0..1
     *  Consignment
     *  Handling Code
     *  Code
     *  Code. Type
     *  Special Handling
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\HandlingCode
     */
    public function getHandlingCode()
    {
        return $this->handlingCode;
    }

    /**
     * Sets a new handlingCode
     *
     * BBIE
     *  Consignment. Handling Code. Code
     *  The handling required for this consignment, expressed as a code.
     *  0..1
     *  Consignment
     *  Handling Code
     *  Code
     *  Code. Type
     *  Special Handling
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\HandlingCode $handlingCode
     * @return self
     */
    public function setHandlingCode(\Greenter\Ubl\Entity\CommonBasic\HandlingCode $handlingCode)
    {
        $this->handlingCode = $handlingCode;
        return $this;
    }

    /**
     * Adds as handlingInstructions
     *
     * BBIE
     *  Consignment. Handling_ Instructions. Text
     *  The handling required for this consignment, expressed as text.
     *  0..n
     *  Consignment
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\HandlingInstructions $handlingInstructions
     */
    public function addToHandlingInstructions(\Greenter\Ubl\Entity\CommonBasic\HandlingInstructions $handlingInstructions)
    {
        $this->handlingInstructions[] = $handlingInstructions;
        return $this;
    }

    /**
     * isset handlingInstructions
     *
     * BBIE
     *  Consignment. Handling_ Instructions. Text
     *  The handling required for this consignment, expressed as text.
     *  0..n
     *  Consignment
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHandlingInstructions($index)
    {
        return isset($this->handlingInstructions[$index]);
    }

    /**
     * unset handlingInstructions
     *
     * BBIE
     *  Consignment. Handling_ Instructions. Text
     *  The handling required for this consignment, expressed as text.
     *  0..n
     *  Consignment
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHandlingInstructions($index)
    {
        unset($this->handlingInstructions[$index]);
    }

    /**
     * Gets as handlingInstructions
     *
     * BBIE
     *  Consignment. Handling_ Instructions. Text
     *  The handling required for this consignment, expressed as text.
     *  0..n
     *  Consignment
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\HandlingInstructions[]
     */
    public function getHandlingInstructions()
    {
        return $this->handlingInstructions;
    }

    /**
     * Sets a new handlingInstructions
     *
     * BBIE
     *  Consignment. Handling_ Instructions. Text
     *  The handling required for this consignment, expressed as text.
     *  0..n
     *  Consignment
     *  Handling
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\HandlingInstructions[] $handlingInstructions
     * @return self
     */
    public function setHandlingInstructions(array $handlingInstructions)
    {
        $this->handlingInstructions = $handlingInstructions;
        return $this;
    }

    /**
     * Adds as information
     *
     * BBIE
     *  Consignment. Information. Text
     *  Free-form text pertinent to this consignment, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Consignment
     *  Information
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\Information $information
     */
    public function addToInformation(\Greenter\Ubl\Entity\CommonBasic\Information $information)
    {
        $this->information[] = $information;
        return $this;
    }

    /**
     * isset information
     *
     * BBIE
     *  Consignment. Information. Text
     *  Free-form text pertinent to this consignment, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Consignment
     *  Information
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInformation($index)
    {
        return isset($this->information[$index]);
    }

    /**
     * unset information
     *
     * BBIE
     *  Consignment. Information. Text
     *  Free-form text pertinent to this consignment, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Consignment
     *  Information
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInformation($index)
    {
        unset($this->information[$index]);
    }

    /**
     * Gets as information
     *
     * BBIE
     *  Consignment. Information. Text
     *  Free-form text pertinent to this consignment, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Consignment
     *  Information
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\Information[]
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Sets a new information
     *
     * BBIE
     *  Consignment. Information. Text
     *  Free-form text pertinent to this consignment, conveying information that is not contained explicitly in other structures.
     *  0..n
     *  Consignment
     *  Information
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\Information[] $information
     * @return self
     */
    public function setInformation(array $information)
    {
        $this->information = $information;
        return $this;
    }

    /**
     * Gets as totalGoodsItemQuantity
     *
     * BBIE
     *  Consignment. Total_ Goods Item Quantity. Quantity
     *  The total number of goods items in this consignment.
     *  0..1
     *  Consignment
     *  Total
     *  Goods Item Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TotalGoodsItemQuantity
     */
    public function getTotalGoodsItemQuantity()
    {
        return $this->totalGoodsItemQuantity;
    }

    /**
     * Sets a new totalGoodsItemQuantity
     *
     * BBIE
     *  Consignment. Total_ Goods Item Quantity. Quantity
     *  The total number of goods items in this consignment.
     *  0..1
     *  Consignment
     *  Total
     *  Goods Item Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TotalGoodsItemQuantity $totalGoodsItemQuantity
     * @return self
     */
    public function setTotalGoodsItemQuantity(\Greenter\Ubl\Entity\CommonBasic\TotalGoodsItemQuantity $totalGoodsItemQuantity)
    {
        $this->totalGoodsItemQuantity = $totalGoodsItemQuantity;
        return $this;
    }

    /**
     * Gets as totalTransportHandlingUnitQuantity
     *
     * BBIE
     *  Consignment. Total_ Transport Handling Unit Quantity. Quantity
     *  The number of pieces of transport handling equipment (pallets, boxes, cases, etc.) in this consignment.
     *  0..1
     *  Consignment
     *  Total
     *  Transport Handling Unit Quantity
     *  Quantity
     *  Quantity. Type
     *  Number of THUs
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TotalTransportHandlingUnitQuantity
     */
    public function getTotalTransportHandlingUnitQuantity()
    {
        return $this->totalTransportHandlingUnitQuantity;
    }

    /**
     * Sets a new totalTransportHandlingUnitQuantity
     *
     * BBIE
     *  Consignment. Total_ Transport Handling Unit Quantity. Quantity
     *  The number of pieces of transport handling equipment (pallets, boxes, cases, etc.) in this consignment.
     *  0..1
     *  Consignment
     *  Total
     *  Transport Handling Unit Quantity
     *  Quantity
     *  Quantity. Type
     *  Number of THUs
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TotalTransportHandlingUnitQuantity $totalTransportHandlingUnitQuantity
     * @return self
     */
    public function setTotalTransportHandlingUnitQuantity(\Greenter\Ubl\Entity\CommonBasic\TotalTransportHandlingUnitQuantity $totalTransportHandlingUnitQuantity)
    {
        $this->totalTransportHandlingUnitQuantity = $totalTransportHandlingUnitQuantity;
        return $this;
    }

    /**
     * Gets as insuranceValueAmount
     *
     * BBIE
     *  Consignment. Insurance_ Value. Amount
     *  The amount covered by insurance for this consignment.
     *  0..1
     *  Consignment
     *  Insurance
     *  Value
     *  Amount
     *  Amount. Type
     *  Value Insured
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\InsuranceValueAmount
     */
    public function getInsuranceValueAmount()
    {
        return $this->insuranceValueAmount;
    }

    /**
     * Sets a new insuranceValueAmount
     *
     * BBIE
     *  Consignment. Insurance_ Value. Amount
     *  The amount covered by insurance for this consignment.
     *  0..1
     *  Consignment
     *  Insurance
     *  Value
     *  Amount
     *  Amount. Type
     *  Value Insured
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\InsuranceValueAmount $insuranceValueAmount
     * @return self
     */
    public function setInsuranceValueAmount(\Greenter\Ubl\Entity\CommonBasic\InsuranceValueAmount $insuranceValueAmount)
    {
        $this->insuranceValueAmount = $insuranceValueAmount;
        return $this;
    }

    /**
     * Gets as declaredForCarriageValueAmount
     *
     * BBIE
     *  Consignment. Declared For Carriage_ Value. Amount
     *  The value of this consignment, declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage, in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Consignment
     *  Declared For Carriage
     *  Value
     *  Amount
     *  Amount. Type
     *  Declared value for carriage, Interest in delivery
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\DeclaredForCarriageValueAmount
     */
    public function getDeclaredForCarriageValueAmount()
    {
        return $this->declaredForCarriageValueAmount;
    }

    /**
     * Sets a new declaredForCarriageValueAmount
     *
     * BBIE
     *  Consignment. Declared For Carriage_ Value. Amount
     *  The value of this consignment, declared by the shipper or his agent solely for the purpose of varying the carrier's level of liability from that provided in the contract of carriage, in case of loss or damage to goods or delayed delivery.
     *  0..1
     *  Consignment
     *  Declared For Carriage
     *  Value
     *  Amount
     *  Amount. Type
     *  Declared value for carriage, Interest in delivery
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount
     * @return self
     */
    public function setDeclaredForCarriageValueAmount(\Greenter\Ubl\Entity\CommonBasic\DeclaredForCarriageValueAmount $declaredForCarriageValueAmount)
    {
        $this->declaredForCarriageValueAmount = $declaredForCarriageValueAmount;
        return $this;
    }

    /**
     * Gets as declaredStatisticsValueAmount
     *
     * BBIE
     *  Consignment. Declared Statistics_ Value. Amount
     *  The value, declared for statistical purposes, of those goods in this consignment that have the same statistical heading.
     *  0..1
     *  Consignment
     *  Declared Statistics
     *  Value
     *  Amount
     *  Amount. Type
     *  Statistical Value
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\DeclaredStatisticsValueAmount
     */
    public function getDeclaredStatisticsValueAmount()
    {
        return $this->declaredStatisticsValueAmount;
    }

    /**
     * Sets a new declaredStatisticsValueAmount
     *
     * BBIE
     *  Consignment. Declared Statistics_ Value. Amount
     *  The value, declared for statistical purposes, of those goods in this consignment that have the same statistical heading.
     *  0..1
     *  Consignment
     *  Declared Statistics
     *  Value
     *  Amount
     *  Amount. Type
     *  Statistical Value
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount
     * @return self
     */
    public function setDeclaredStatisticsValueAmount(\Greenter\Ubl\Entity\CommonBasic\DeclaredStatisticsValueAmount $declaredStatisticsValueAmount)
    {
        $this->declaredStatisticsValueAmount = $declaredStatisticsValueAmount;
        return $this;
    }

    /**
     * Gets as freeOnBoardValueAmount
     *
     * BBIE
     *  Consignment. Free On Board_ Value. Amount
     *  The monetary amount that has to be or has been paid as calculated under the applicable trade delivery.
     *  0..1
     *  Consignment
     *  Free On Board
     *  Value
     *  Amount
     *  Amount. Type
     *  FOB Value
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\FreeOnBoardValueAmount
     */
    public function getFreeOnBoardValueAmount()
    {
        return $this->freeOnBoardValueAmount;
    }

    /**
     * Sets a new freeOnBoardValueAmount
     *
     * BBIE
     *  Consignment. Free On Board_ Value. Amount
     *  The monetary amount that has to be or has been paid as calculated under the applicable trade delivery.
     *  0..1
     *  Consignment
     *  Free On Board
     *  Value
     *  Amount
     *  Amount. Type
     *  FOB Value
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\FreeOnBoardValueAmount $freeOnBoardValueAmount
     * @return self
     */
    public function setFreeOnBoardValueAmount(\Greenter\Ubl\Entity\CommonBasic\FreeOnBoardValueAmount $freeOnBoardValueAmount)
    {
        $this->freeOnBoardValueAmount = $freeOnBoardValueAmount;
        return $this;
    }

    /**
     * Adds as specialInstructions
     *
     * BBIE
     *  Consignment. Special_ Instructions. Text
     *  Special instructions relating to this consignment.
     *  0..n
     *  Consignment
     *  Special
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\SpecialInstructions $specialInstructions
     */
    public function addToSpecialInstructions(\Greenter\Ubl\Entity\CommonBasic\SpecialInstructions $specialInstructions)
    {
        $this->specialInstructions[] = $specialInstructions;
        return $this;
    }

    /**
     * isset specialInstructions
     *
     * BBIE
     *  Consignment. Special_ Instructions. Text
     *  Special instructions relating to this consignment.
     *  0..n
     *  Consignment
     *  Special
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialInstructions($index)
    {
        return isset($this->specialInstructions[$index]);
    }

    /**
     * unset specialInstructions
     *
     * BBIE
     *  Consignment. Special_ Instructions. Text
     *  Special instructions relating to this consignment.
     *  0..n
     *  Consignment
     *  Special
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialInstructions($index)
    {
        unset($this->specialInstructions[$index]);
    }

    /**
     * Gets as specialInstructions
     *
     * BBIE
     *  Consignment. Special_ Instructions. Text
     *  Special instructions relating to this consignment.
     *  0..n
     *  Consignment
     *  Special
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\SpecialInstructions[]
     */
    public function getSpecialInstructions()
    {
        return $this->specialInstructions;
    }

    /**
     * Sets a new specialInstructions
     *
     * BBIE
     *  Consignment. Special_ Instructions. Text
     *  Special instructions relating to this consignment.
     *  0..n
     *  Consignment
     *  Special
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\SpecialInstructions[] $specialInstructions
     * @return self
     */
    public function setSpecialInstructions(array $specialInstructions)
    {
        $this->specialInstructions = $specialInstructions;
        return $this;
    }

    /**
     * Gets as splitConsignmentIndicator
     *
     * BBIE
     *  Consignment. Split Consignment_ Indicator. Indicator
     *  An indicator that this consignment has been split in transit (true) or not (false).
     *  0..1
     *  Consignment
     *  Split Consignment
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @return bool
     */
    public function getSplitConsignmentIndicator()
    {
        return $this->splitConsignmentIndicator;
    }

    /**
     * Sets a new splitConsignmentIndicator
     *
     * BBIE
     *  Consignment. Split Consignment_ Indicator. Indicator
     *  An indicator that this consignment has been split in transit (true) or not (false).
     *  0..1
     *  Consignment
     *  Split Consignment
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *
     * @param bool $splitConsignmentIndicator
     * @return self
     */
    public function setSplitConsignmentIndicator($splitConsignmentIndicator)
    {
        $this->splitConsignmentIndicator = $splitConsignmentIndicator;
        return $this;
    }

    /**
     * Adds as deliveryInstructions
     *
     * BBIE
     *  Consignment. Delivery_ Instructions. Text
     *  A set of delivery instructions relating to this consignment.
     *  0..n
     *  Consignment
     *  Delivery
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\DeliveryInstructions $deliveryInstructions
     */
    public function addToDeliveryInstructions(\Greenter\Ubl\Entity\CommonBasic\DeliveryInstructions $deliveryInstructions)
    {
        $this->deliveryInstructions[] = $deliveryInstructions;
        return $this;
    }

    /**
     * isset deliveryInstructions
     *
     * BBIE
     *  Consignment. Delivery_ Instructions. Text
     *  A set of delivery instructions relating to this consignment.
     *  0..n
     *  Consignment
     *  Delivery
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDeliveryInstructions($index)
    {
        return isset($this->deliveryInstructions[$index]);
    }

    /**
     * unset deliveryInstructions
     *
     * BBIE
     *  Consignment. Delivery_ Instructions. Text
     *  A set of delivery instructions relating to this consignment.
     *  0..n
     *  Consignment
     *  Delivery
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDeliveryInstructions($index)
    {
        unset($this->deliveryInstructions[$index]);
    }

    /**
     * Gets as deliveryInstructions
     *
     * BBIE
     *  Consignment. Delivery_ Instructions. Text
     *  A set of delivery instructions relating to this consignment.
     *  0..n
     *  Consignment
     *  Delivery
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\DeliveryInstructions[]
     */
    public function getDeliveryInstructions()
    {
        return $this->deliveryInstructions;
    }

    /**
     * Sets a new deliveryInstructions
     *
     * BBIE
     *  Consignment. Delivery_ Instructions. Text
     *  A set of delivery instructions relating to this consignment.
     *  0..n
     *  Consignment
     *  Delivery
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\DeliveryInstructions[] $deliveryInstructions
     * @return self
     */
    public function setDeliveryInstructions(array $deliveryInstructions)
    {
        $this->deliveryInstructions = $deliveryInstructions;
        return $this;
    }

    /**
     * Gets as consignmentQuantity
     *
     * BBIE
     *  Consignment. Consignment_ Quantity. Quantity
     *  The count in this consignment considering goods items, child consignments, shipments
     *  0..1
     *  Consignment
     *  Consignment
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ConsignmentQuantity
     */
    public function getConsignmentQuantity()
    {
        return $this->consignmentQuantity;
    }

    /**
     * Sets a new consignmentQuantity
     *
     * BBIE
     *  Consignment. Consignment_ Quantity. Quantity
     *  The count in this consignment considering goods items, child consignments, shipments
     *  0..1
     *  Consignment
     *  Consignment
     *  Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ConsignmentQuantity $consignmentQuantity
     * @return self
     */
    public function setConsignmentQuantity(\Greenter\Ubl\Entity\CommonBasic\ConsignmentQuantity $consignmentQuantity)
    {
        $this->consignmentQuantity = $consignmentQuantity;
        return $this;
    }

    /**
     * Gets as consolidatableIndicator
     *
     * BBIE
     *  Consignment. Consolidatable_ Indicator. Indicator
     *  An indicator that this consignment can be consolidated (true) or not (false).
     *  0..1
     *  Consignment
     *  Consolidatable
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @return bool
     */
    public function getConsolidatableIndicator()
    {
        return $this->consolidatableIndicator;
    }

    /**
     * Sets a new consolidatableIndicator
     *
     * BBIE
     *  Consignment. Consolidatable_ Indicator. Indicator
     *  An indicator that this consignment can be consolidated (true) or not (false).
     *  0..1
     *  Consignment
     *  Consolidatable
     *  Indicator
     *  Indicator
     *  Indicator. Type
     *  default is negative
     *
     * @param bool $consolidatableIndicator
     * @return self
     */
    public function setConsolidatableIndicator($consolidatableIndicator)
    {
        $this->consolidatableIndicator = $consolidatableIndicator;
        return $this;
    }

    /**
     * Adds as haulageInstructions
     *
     * BBIE
     *  Consignment. Haulage_ Instructions. Text
     *  Instructions regarding haulage of this consignment, expressed as text.
     *  0..n
     *  Consignment
     *  Haulage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonBasic\HaulageInstructions $haulageInstructions
     */
    public function addToHaulageInstructions(\Greenter\Ubl\Entity\CommonBasic\HaulageInstructions $haulageInstructions)
    {
        $this->haulageInstructions[] = $haulageInstructions;
        return $this;
    }

    /**
     * isset haulageInstructions
     *
     * BBIE
     *  Consignment. Haulage_ Instructions. Text
     *  Instructions regarding haulage of this consignment, expressed as text.
     *  0..n
     *  Consignment
     *  Haulage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHaulageInstructions($index)
    {
        return isset($this->haulageInstructions[$index]);
    }

    /**
     * unset haulageInstructions
     *
     * BBIE
     *  Consignment. Haulage_ Instructions. Text
     *  Instructions regarding haulage of this consignment, expressed as text.
     *  0..n
     *  Consignment
     *  Haulage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHaulageInstructions($index)
    {
        unset($this->haulageInstructions[$index]);
    }

    /**
     * Gets as haulageInstructions
     *
     * BBIE
     *  Consignment. Haulage_ Instructions. Text
     *  Instructions regarding haulage of this consignment, expressed as text.
     *  0..n
     *  Consignment
     *  Haulage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\HaulageInstructions[]
     */
    public function getHaulageInstructions()
    {
        return $this->haulageInstructions;
    }

    /**
     * Sets a new haulageInstructions
     *
     * BBIE
     *  Consignment. Haulage_ Instructions. Text
     *  Instructions regarding haulage of this consignment, expressed as text.
     *  0..n
     *  Consignment
     *  Haulage
     *  Instructions
     *  Text
     *  Text. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\HaulageInstructions[] $haulageInstructions
     * @return self
     */
    public function setHaulageInstructions(array $haulageInstructions)
    {
        $this->haulageInstructions = $haulageInstructions;
        return $this;
    }

    /**
     * Gets as loadingSequenceID
     *
     * BBIE
     *  Consignment. Loading_ Sequence Identifier. Identifier
     *  An identifier for the loading sequence of this consignment.
     *  0..1
     *  Consignment
     *  Loading
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\LoadingSequenceID
     */
    public function getLoadingSequenceID()
    {
        return $this->loadingSequenceID;
    }

    /**
     * Sets a new loadingSequenceID
     *
     * BBIE
     *  Consignment. Loading_ Sequence Identifier. Identifier
     *  An identifier for the loading sequence of this consignment.
     *  0..1
     *  Consignment
     *  Loading
     *  Sequence Identifier
     *  Identifier
     *  Identifier. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\LoadingSequenceID $loadingSequenceID
     * @return self
     */
    public function setLoadingSequenceID(\Greenter\Ubl\Entity\CommonBasic\LoadingSequenceID $loadingSequenceID)
    {
        $this->loadingSequenceID = $loadingSequenceID;
        return $this;
    }

    /**
     * Gets as childConsignmentQuantity
     *
     * BBIE
     *  Consignment. Child Consignment Quantity. Quantity
     *  The quantity of (consolidated) child consignments
     *  0..1
     *  Consignment
     *  Child Consignment Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\ChildConsignmentQuantity
     */
    public function getChildConsignmentQuantity()
    {
        return $this->childConsignmentQuantity;
    }

    /**
     * Sets a new childConsignmentQuantity
     *
     * BBIE
     *  Consignment. Child Consignment Quantity. Quantity
     *  The quantity of (consolidated) child consignments
     *  0..1
     *  Consignment
     *  Child Consignment Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\ChildConsignmentQuantity $childConsignmentQuantity
     * @return self
     */
    public function setChildConsignmentQuantity(\Greenter\Ubl\Entity\CommonBasic\ChildConsignmentQuantity $childConsignmentQuantity)
    {
        $this->childConsignmentQuantity = $childConsignmentQuantity;
        return $this;
    }

    /**
     * Gets as totalPackagesQuantity
     *
     * BBIE
     *  Consignment. Total_ Packages Quantity. Quantity
     *  The total number of packages associated with a Consignment.
     *  0..1
     *  Consignment
     *  Total
     *  Packages Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @return \Greenter\Ubl\Entity\CommonBasic\TotalPackagesQuantity
     */
    public function getTotalPackagesQuantity()
    {
        return $this->totalPackagesQuantity;
    }

    /**
     * Sets a new totalPackagesQuantity
     *
     * BBIE
     *  Consignment. Total_ Packages Quantity. Quantity
     *  The total number of packages associated with a Consignment.
     *  0..1
     *  Consignment
     *  Total
     *  Packages Quantity
     *  Quantity
     *  Quantity. Type
     *
     * @param \Greenter\Ubl\Entity\CommonBasic\TotalPackagesQuantity $totalPackagesQuantity
     * @return self
     */
    public function setTotalPackagesQuantity(\Greenter\Ubl\Entity\CommonBasic\TotalPackagesQuantity $totalPackagesQuantity)
    {
        $this->totalPackagesQuantity = $totalPackagesQuantity;
        return $this;
    }

    /**
     * Adds as consolidatedShipment
     *
     * ASBIE
     *  Consignment. Consolidated_ Shipment. Shipment
     *  A consolidated shipment (a shipment created by an act of consolidation).
     *  0..n
     *  Consignment
     *  Consolidated
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ConsolidatedShipment $consolidatedShipment
     */
    public function addToConsolidatedShipment(\Greenter\Ubl\Entity\CommonAggregateComponents\ConsolidatedShipment $consolidatedShipment)
    {
        $this->consolidatedShipment[] = $consolidatedShipment;
        return $this;
    }

    /**
     * isset consolidatedShipment
     *
     * ASBIE
     *  Consignment. Consolidated_ Shipment. Shipment
     *  A consolidated shipment (a shipment created by an act of consolidation).
     *  0..n
     *  Consignment
     *  Consolidated
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetConsolidatedShipment($index)
    {
        return isset($this->consolidatedShipment[$index]);
    }

    /**
     * unset consolidatedShipment
     *
     * ASBIE
     *  Consignment. Consolidated_ Shipment. Shipment
     *  A consolidated shipment (a shipment created by an act of consolidation).
     *  0..n
     *  Consignment
     *  Consolidated
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetConsolidatedShipment($index)
    {
        unset($this->consolidatedShipment[$index]);
    }

    /**
     * Gets as consolidatedShipment
     *
     * ASBIE
     *  Consignment. Consolidated_ Shipment. Shipment
     *  A consolidated shipment (a shipment created by an act of consolidation).
     *  0..n
     *  Consignment
     *  Consolidated
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ConsolidatedShipment[]
     */
    public function getConsolidatedShipment()
    {
        return $this->consolidatedShipment;
    }

    /**
     * Sets a new consolidatedShipment
     *
     * ASBIE
     *  Consignment. Consolidated_ Shipment. Shipment
     *  A consolidated shipment (a shipment created by an act of consolidation).
     *  0..n
     *  Consignment
     *  Consolidated
     *  Shipment
     *  Shipment
     *  Shipment
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ConsolidatedShipment[] $consolidatedShipment
     * @return self
     */
    public function setConsolidatedShipment(array $consolidatedShipment)
    {
        $this->consolidatedShipment = $consolidatedShipment;
        return $this;
    }

    /**
     * Adds as customsDeclaration
     *
     * ASBIE
     *  Consignment. Customs Declaration
     *  A class describing identifiers or references relating to customs procedures.
     *  0..n
     *  Consignment
     *  Customs Declaration
     *  Customs Declaration
     *  Customs Declaration
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\CustomsDeclaration $customsDeclaration
     */
    public function addToCustomsDeclaration(\Greenter\Ubl\Entity\CommonAggregateComponents\CustomsDeclaration $customsDeclaration)
    {
        $this->customsDeclaration[] = $customsDeclaration;
        return $this;
    }

    /**
     * isset customsDeclaration
     *
     * ASBIE
     *  Consignment. Customs Declaration
     *  A class describing identifiers or references relating to customs procedures.
     *  0..n
     *  Consignment
     *  Customs Declaration
     *  Customs Declaration
     *  Customs Declaration
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustomsDeclaration($index)
    {
        return isset($this->customsDeclaration[$index]);
    }

    /**
     * unset customsDeclaration
     *
     * ASBIE
     *  Consignment. Customs Declaration
     *  A class describing identifiers or references relating to customs procedures.
     *  0..n
     *  Consignment
     *  Customs Declaration
     *  Customs Declaration
     *  Customs Declaration
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustomsDeclaration($index)
    {
        unset($this->customsDeclaration[$index]);
    }

    /**
     * Gets as customsDeclaration
     *
     * ASBIE
     *  Consignment. Customs Declaration
     *  A class describing identifiers or references relating to customs procedures.
     *  0..n
     *  Consignment
     *  Customs Declaration
     *  Customs Declaration
     *  Customs Declaration
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\CustomsDeclaration[]
     */
    public function getCustomsDeclaration()
    {
        return $this->customsDeclaration;
    }

    /**
     * Sets a new customsDeclaration
     *
     * ASBIE
     *  Consignment. Customs Declaration
     *  A class describing identifiers or references relating to customs procedures.
     *  0..n
     *  Consignment
     *  Customs Declaration
     *  Customs Declaration
     *  Customs Declaration
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\CustomsDeclaration[] $customsDeclaration
     * @return self
     */
    public function setCustomsDeclaration(array $customsDeclaration)
    {
        $this->customsDeclaration = $customsDeclaration;
        return $this;
    }

    /**
     * Gets as requestedPickupTransportEvent
     *
     * ASBIE
     *  Consignment. Requested Pickup_ Transport Event. Transport Event
     *  The pickup of this consignment requested by the party requesting a transportation service (the transport user).
     *  0..1
     *  Consignment
     *  Requested Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\RequestedPickupTransportEvent
     */
    public function getRequestedPickupTransportEvent()
    {
        return $this->requestedPickupTransportEvent;
    }

    /**
     * Sets a new requestedPickupTransportEvent
     *
     * ASBIE
     *  Consignment. Requested Pickup_ Transport Event. Transport Event
     *  The pickup of this consignment requested by the party requesting a transportation service (the transport user).
     *  0..1
     *  Consignment
     *  Requested Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\RequestedPickupTransportEvent $requestedPickupTransportEvent
     * @return self
     */
    public function setRequestedPickupTransportEvent(\Greenter\Ubl\Entity\CommonAggregateComponents\RequestedPickupTransportEvent $requestedPickupTransportEvent)
    {
        $this->requestedPickupTransportEvent = $requestedPickupTransportEvent;
        return $this;
    }

    /**
     * Gets as requestedDeliveryTransportEvent
     *
     * ASBIE
     *  Consignment. Requested Delivery_ Transport Event. Transport Event
     *  The delivery of this consignment requested by the party requesting a transportation service (the transport user).
     *  0..1
     *  Consignment
     *  Requested Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\RequestedDeliveryTransportEvent
     */
    public function getRequestedDeliveryTransportEvent()
    {
        return $this->requestedDeliveryTransportEvent;
    }

    /**
     * Sets a new requestedDeliveryTransportEvent
     *
     * ASBIE
     *  Consignment. Requested Delivery_ Transport Event. Transport Event
     *  The delivery of this consignment requested by the party requesting a transportation service (the transport user).
     *  0..1
     *  Consignment
     *  Requested Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\RequestedDeliveryTransportEvent $requestedDeliveryTransportEvent
     * @return self
     */
    public function setRequestedDeliveryTransportEvent(\Greenter\Ubl\Entity\CommonAggregateComponents\RequestedDeliveryTransportEvent $requestedDeliveryTransportEvent)
    {
        $this->requestedDeliveryTransportEvent = $requestedDeliveryTransportEvent;
        return $this;
    }

    /**
     * Gets as plannedPickupTransportEvent
     *
     * ASBIE
     *  Consignment. Planned Pickup_ Transport Event. Transport Event
     *  The pickup of this consignment planned by the party responsible for providing the transportation service (the transport service provider).
     *  0..1
     *  Consignment
     *  Planned Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PlannedPickupTransportEvent
     */
    public function getPlannedPickupTransportEvent()
    {
        return $this->plannedPickupTransportEvent;
    }

    /**
     * Sets a new plannedPickupTransportEvent
     *
     * ASBIE
     *  Consignment. Planned Pickup_ Transport Event. Transport Event
     *  The pickup of this consignment planned by the party responsible for providing the transportation service (the transport service provider).
     *  0..1
     *  Consignment
     *  Planned Pickup
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PlannedPickupTransportEvent $plannedPickupTransportEvent
     * @return self
     */
    public function setPlannedPickupTransportEvent(\Greenter\Ubl\Entity\CommonAggregateComponents\PlannedPickupTransportEvent $plannedPickupTransportEvent)
    {
        $this->plannedPickupTransportEvent = $plannedPickupTransportEvent;
        return $this;
    }

    /**
     * Gets as plannedDeliveryTransportEvent
     *
     * ASBIE
     *  Consignment. Planned Delivery_ Transport Event. Transport Event
     *  The delivery of this consignment planned by the party responsible for providing the transportation service (the transport service provider).
     *  0..1
     *  Consignment
     *  Planned Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PlannedDeliveryTransportEvent
     */
    public function getPlannedDeliveryTransportEvent()
    {
        return $this->plannedDeliveryTransportEvent;
    }

    /**
     * Sets a new plannedDeliveryTransportEvent
     *
     * ASBIE
     *  Consignment. Planned Delivery_ Transport Event. Transport Event
     *  The delivery of this consignment planned by the party responsible for providing the transportation service (the transport service provider).
     *  0..1
     *  Consignment
     *  Planned Delivery
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PlannedDeliveryTransportEvent $plannedDeliveryTransportEvent
     * @return self
     */
    public function setPlannedDeliveryTransportEvent(\Greenter\Ubl\Entity\CommonAggregateComponents\PlannedDeliveryTransportEvent $plannedDeliveryTransportEvent)
    {
        $this->plannedDeliveryTransportEvent = $plannedDeliveryTransportEvent;
        return $this;
    }

    /**
     * Adds as status
     *
     * ASBIE
     *  Consignment. Status
     *  The status of a particular condition associated with this consignment.
     *  0..n
     *  Consignment
     *  Status
     *  Status
     *  Status
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Status $status
     */
    public function addToStatus(\Greenter\Ubl\Entity\CommonAggregateComponents\Status $status)
    {
        $this->status[] = $status;
        return $this;
    }

    /**
     * isset status
     *
     * ASBIE
     *  Consignment. Status
     *  The status of a particular condition associated with this consignment.
     *  0..n
     *  Consignment
     *  Status
     *  Status
     *  Status
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStatus($index)
    {
        return isset($this->status[$index]);
    }

    /**
     * unset status
     *
     * ASBIE
     *  Consignment. Status
     *  The status of a particular condition associated with this consignment.
     *  0..n
     *  Consignment
     *  Status
     *  Status
     *  Status
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStatus($index)
    {
        unset($this->status[$index]);
    }

    /**
     * Gets as status
     *
     * ASBIE
     *  Consignment. Status
     *  The status of a particular condition associated with this consignment.
     *  0..n
     *  Consignment
     *  Status
     *  Status
     *  Status
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\Status[]
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * ASBIE
     *  Consignment. Status
     *  The status of a particular condition associated with this consignment.
     *  0..n
     *  Consignment
     *  Status
     *  Status
     *  Status
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\Status[] $status
     * @return self
     */
    public function setStatus(array $status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Adds as childConsignment
     *
     * ASBIE
     *  Consignment. Child_ Consignment. Consignment
     *  One of the child consignments of which a consolidated consignment is composed.
     *  0..n
     *  Consignment
     *  Child
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ChildConsignment $childConsignment
     */
    public function addToChildConsignment(\Greenter\Ubl\Entity\CommonAggregateComponents\ChildConsignment $childConsignment)
    {
        $this->childConsignment[] = $childConsignment;
        return $this;
    }

    /**
     * isset childConsignment
     *
     * ASBIE
     *  Consignment. Child_ Consignment. Consignment
     *  One of the child consignments of which a consolidated consignment is composed.
     *  0..n
     *  Consignment
     *  Child
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetChildConsignment($index)
    {
        return isset($this->childConsignment[$index]);
    }

    /**
     * unset childConsignment
     *
     * ASBIE
     *  Consignment. Child_ Consignment. Consignment
     *  One of the child consignments of which a consolidated consignment is composed.
     *  0..n
     *  Consignment
     *  Child
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetChildConsignment($index)
    {
        unset($this->childConsignment[$index]);
    }

    /**
     * Gets as childConsignment
     *
     * ASBIE
     *  Consignment. Child_ Consignment. Consignment
     *  One of the child consignments of which a consolidated consignment is composed.
     *  0..n
     *  Consignment
     *  Child
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ChildConsignment[]
     */
    public function getChildConsignment()
    {
        return $this->childConsignment;
    }

    /**
     * Sets a new childConsignment
     *
     * ASBIE
     *  Consignment. Child_ Consignment. Consignment
     *  One of the child consignments of which a consolidated consignment is composed.
     *  0..n
     *  Consignment
     *  Child
     *  Consignment
     *  Consignment
     *  Consignment
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ChildConsignment[] $childConsignment
     * @return self
     */
    public function setChildConsignment(array $childConsignment)
    {
        $this->childConsignment = $childConsignment;
        return $this;
    }

    /**
     * Gets as consigneeParty
     *
     * ASBIE
     *  Consignment. Consignee_ Party. Party
     *  A party to which goods are consigned.
     *  0..1
     *  Consignment
     *  Consignee
     *  Party
     *  Party
     *  Party
     *  Consignee (WCO ID 51 and 52)
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ConsigneeParty
     */
    public function getConsigneeParty()
    {
        return $this->consigneeParty;
    }

    /**
     * Sets a new consigneeParty
     *
     * ASBIE
     *  Consignment. Consignee_ Party. Party
     *  A party to which goods are consigned.
     *  0..1
     *  Consignment
     *  Consignee
     *  Party
     *  Party
     *  Party
     *  Consignee (WCO ID 51 and 52)
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ConsigneeParty $consigneeParty
     * @return self
     */
    public function setConsigneeParty(\Greenter\Ubl\Entity\CommonAggregateComponents\ConsigneeParty $consigneeParty)
    {
        $this->consigneeParty = $consigneeParty;
        return $this;
    }

    /**
     * Gets as exporterParty
     *
     * ASBIE
     *  Consignment. Exporter_ Party. Party
     *  The party that makes the export declaration, or on behalf of which the export declaration is made, and that is the owner of the goods in this consignment or has similar right of disposal over them at the time when the declaration is accepted.
     *  0..1
     *  Consignment
     *  Exporter
     *  Party
     *  Party
     *  Party
     *  Exporter (WCO ID 41 and 42)
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ExporterParty
     */
    public function getExporterParty()
    {
        return $this->exporterParty;
    }

    /**
     * Sets a new exporterParty
     *
     * ASBIE
     *  Consignment. Exporter_ Party. Party
     *  The party that makes the export declaration, or on behalf of which the export declaration is made, and that is the owner of the goods in this consignment or has similar right of disposal over them at the time when the declaration is accepted.
     *  0..1
     *  Consignment
     *  Exporter
     *  Party
     *  Party
     *  Party
     *  Exporter (WCO ID 41 and 42)
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ExporterParty $exporterParty
     * @return self
     */
    public function setExporterParty(\Greenter\Ubl\Entity\CommonAggregateComponents\ExporterParty $exporterParty)
    {
        $this->exporterParty = $exporterParty;
        return $this;
    }

    /**
     * Gets as consignorParty
     *
     * ASBIE
     *  Consignment. Consignor_ Party. Party
     *  The party consigning goods, as stipulated in the transport contract by the party ordering transport.
     *  0..1
     *  Consignment
     *  Consignor
     *  Party
     *  Party
     *  Party
     *  Consignor (WCO ID 71 and 72)
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ConsignorParty
     */
    public function getConsignorParty()
    {
        return $this->consignorParty;
    }

    /**
     * Sets a new consignorParty
     *
     * ASBIE
     *  Consignment. Consignor_ Party. Party
     *  The party consigning goods, as stipulated in the transport contract by the party ordering transport.
     *  0..1
     *  Consignment
     *  Consignor
     *  Party
     *  Party
     *  Party
     *  Consignor (WCO ID 71 and 72)
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ConsignorParty $consignorParty
     * @return self
     */
    public function setConsignorParty(\Greenter\Ubl\Entity\CommonAggregateComponents\ConsignorParty $consignorParty)
    {
        $this->consignorParty = $consignorParty;
        return $this;
    }

    /**
     * Gets as importerParty
     *
     * ASBIE
     *  Consignment. Importer_ Party. Party
     *  The party that makes an import declaration regarding this consignment, or on behalf of which a customs clearing agent or other authorized person makes an import declaration regarding this consignment. This may include a person who has possession of the goods or to whom the goods are consigned.
     *  0..1
     *  Consignment
     *  Importer
     *  Party
     *  Party
     *  Party
     *  Importer (WCO ID 39 and 40)
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ImporterParty
     */
    public function getImporterParty()
    {
        return $this->importerParty;
    }

    /**
     * Sets a new importerParty
     *
     * ASBIE
     *  Consignment. Importer_ Party. Party
     *  The party that makes an import declaration regarding this consignment, or on behalf of which a customs clearing agent or other authorized person makes an import declaration regarding this consignment. This may include a person who has possession of the goods or to whom the goods are consigned.
     *  0..1
     *  Consignment
     *  Importer
     *  Party
     *  Party
     *  Party
     *  Importer (WCO ID 39 and 40)
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ImporterParty $importerParty
     * @return self
     */
    public function setImporterParty(\Greenter\Ubl\Entity\CommonAggregateComponents\ImporterParty $importerParty)
    {
        $this->importerParty = $importerParty;
        return $this;
    }

    /**
     * Gets as carrierParty
     *
     * ASBIE
     *  Consignment. Carrier_ Party. Party
     *  The party providing the transport of goods in this consignment between named points.
     *  0..1
     *  Consignment
     *  Carrier
     *  Party
     *  Party
     *  Party
     *  Transport Company, Shipping Line, NVOCC, Airline, Haulier, Courier, Carrier (WCO ID 49 and 50)
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\CarrierParty
     */
    public function getCarrierParty()
    {
        return $this->carrierParty;
    }

    /**
     * Sets a new carrierParty
     *
     * ASBIE
     *  Consignment. Carrier_ Party. Party
     *  The party providing the transport of goods in this consignment between named points.
     *  0..1
     *  Consignment
     *  Carrier
     *  Party
     *  Party
     *  Party
     *  Transport Company, Shipping Line, NVOCC, Airline, Haulier, Courier, Carrier (WCO ID 49 and 50)
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\CarrierParty $carrierParty
     * @return self
     */
    public function setCarrierParty(\Greenter\Ubl\Entity\CommonAggregateComponents\CarrierParty $carrierParty)
    {
        $this->carrierParty = $carrierParty;
        return $this;
    }

    /**
     * Gets as freightForwarderParty
     *
     * ASBIE
     *  Consignment. Freight Forwarder_ Party. Party
     *  The party combining individual smaller consignments into a single larger shipment (the consolidated shipment), which is sent to a counterpart that mirrors the consolidator's activity by dividing the consolidated consignment into its original components.
     *  0..1
     *  Consignment
     *  Freight Forwarder
     *  Party
     *  Party
     *  Party
     *  Consolidator (WCO ID 192 AND 193)
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\FreightForwarderParty
     */
    public function getFreightForwarderParty()
    {
        return $this->freightForwarderParty;
    }

    /**
     * Sets a new freightForwarderParty
     *
     * ASBIE
     *  Consignment. Freight Forwarder_ Party. Party
     *  The party combining individual smaller consignments into a single larger shipment (the consolidated shipment), which is sent to a counterpart that mirrors the consolidator's activity by dividing the consolidated consignment into its original components.
     *  0..1
     *  Consignment
     *  Freight Forwarder
     *  Party
     *  Party
     *  Party
     *  Consolidator (WCO ID 192 AND 193)
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\FreightForwarderParty $freightForwarderParty
     * @return self
     */
    public function setFreightForwarderParty(\Greenter\Ubl\Entity\CommonAggregateComponents\FreightForwarderParty $freightForwarderParty)
    {
        $this->freightForwarderParty = $freightForwarderParty;
        return $this;
    }

    /**
     * Gets as notifyParty
     *
     * ASBIE
     *  Consignment. Notify_ Party. Party
     *  The party to be notified upon arrival of goods and when special occurrences (usually pre-defined) take place during a transportation service.
     *  0..1
     *  Consignment
     *  Notify
     *  Party
     *  Party
     *  Party
     *  WCO ID 57 and 58
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\NotifyParty
     */
    public function getNotifyParty()
    {
        return $this->notifyParty;
    }

    /**
     * Sets a new notifyParty
     *
     * ASBIE
     *  Consignment. Notify_ Party. Party
     *  The party to be notified upon arrival of goods and when special occurrences (usually pre-defined) take place during a transportation service.
     *  0..1
     *  Consignment
     *  Notify
     *  Party
     *  Party
     *  Party
     *  WCO ID 57 and 58
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\NotifyParty $notifyParty
     * @return self
     */
    public function setNotifyParty(\Greenter\Ubl\Entity\CommonAggregateComponents\NotifyParty $notifyParty)
    {
        $this->notifyParty = $notifyParty;
        return $this;
    }

    /**
     * Gets as originalDespatchParty
     *
     * ASBIE
     *  Consignment. Original Despatch_ Party. Party
     *  The original despatch (sender) party for this consignment.
     *  0..1
     *  Consignment
     *  Original Despatch
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\OriginalDespatchParty
     */
    public function getOriginalDespatchParty()
    {
        return $this->originalDespatchParty;
    }

    /**
     * Sets a new originalDespatchParty
     *
     * ASBIE
     *  Consignment. Original Despatch_ Party. Party
     *  The original despatch (sender) party for this consignment.
     *  0..1
     *  Consignment
     *  Original Despatch
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\OriginalDespatchParty $originalDespatchParty
     * @return self
     */
    public function setOriginalDespatchParty(\Greenter\Ubl\Entity\CommonAggregateComponents\OriginalDespatchParty $originalDespatchParty)
    {
        $this->originalDespatchParty = $originalDespatchParty;
        return $this;
    }

    /**
     * Gets as finalDeliveryParty
     *
     * ASBIE
     *  Consignment. Final Delivery_ Party. Party
     *  The final delivery party for this consignment.
     *  0..1
     *  Consignment
     *  Final Delivery
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\FinalDeliveryParty
     */
    public function getFinalDeliveryParty()
    {
        return $this->finalDeliveryParty;
    }

    /**
     * Sets a new finalDeliveryParty
     *
     * ASBIE
     *  Consignment. Final Delivery_ Party. Party
     *  The final delivery party for this consignment.
     *  0..1
     *  Consignment
     *  Final Delivery
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\FinalDeliveryParty $finalDeliveryParty
     * @return self
     */
    public function setFinalDeliveryParty(\Greenter\Ubl\Entity\CommonAggregateComponents\FinalDeliveryParty $finalDeliveryParty)
    {
        $this->finalDeliveryParty = $finalDeliveryParty;
        return $this;
    }

    /**
     * Gets as performingCarrierParty
     *
     * ASBIE
     *  Consignment. Performing Carrier_ Party. Party
     *  The party performing the carriage of this consignment.
     *  0..1
     *  Consignment
     *  Performing Carrier
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PerformingCarrierParty
     */
    public function getPerformingCarrierParty()
    {
        return $this->performingCarrierParty;
    }

    /**
     * Sets a new performingCarrierParty
     *
     * ASBIE
     *  Consignment. Performing Carrier_ Party. Party
     *  The party performing the carriage of this consignment.
     *  0..1
     *  Consignment
     *  Performing Carrier
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PerformingCarrierParty $performingCarrierParty
     * @return self
     */
    public function setPerformingCarrierParty(\Greenter\Ubl\Entity\CommonAggregateComponents\PerformingCarrierParty $performingCarrierParty)
    {
        $this->performingCarrierParty = $performingCarrierParty;
        return $this;
    }

    /**
     * Gets as substituteCarrierParty
     *
     * ASBIE
     *  Consignment. Substitute Carrier_ Party. Party
     *  A substitute party performing the carriage of this consignment.
     *  0..1
     *  Consignment
     *  Substitute Carrier
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\SubstituteCarrierParty
     */
    public function getSubstituteCarrierParty()
    {
        return $this->substituteCarrierParty;
    }

    /**
     * Sets a new substituteCarrierParty
     *
     * ASBIE
     *  Consignment. Substitute Carrier_ Party. Party
     *  A substitute party performing the carriage of this consignment.
     *  0..1
     *  Consignment
     *  Substitute Carrier
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\SubstituteCarrierParty $substituteCarrierParty
     * @return self
     */
    public function setSubstituteCarrierParty(\Greenter\Ubl\Entity\CommonAggregateComponents\SubstituteCarrierParty $substituteCarrierParty)
    {
        $this->substituteCarrierParty = $substituteCarrierParty;
        return $this;
    }

    /**
     * Gets as logisticsOperatorParty
     *
     * ASBIE
     *  Consignment. Logistics Operator_ Party. Party
     *  The logistics operator party for this consignment.
     *  0..1
     *  Consignment
     *  Logistics Operator
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\LogisticsOperatorParty
     */
    public function getLogisticsOperatorParty()
    {
        return $this->logisticsOperatorParty;
    }

    /**
     * Sets a new logisticsOperatorParty
     *
     * ASBIE
     *  Consignment. Logistics Operator_ Party. Party
     *  The logistics operator party for this consignment.
     *  0..1
     *  Consignment
     *  Logistics Operator
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\LogisticsOperatorParty $logisticsOperatorParty
     * @return self
     */
    public function setLogisticsOperatorParty(\Greenter\Ubl\Entity\CommonAggregateComponents\LogisticsOperatorParty $logisticsOperatorParty)
    {
        $this->logisticsOperatorParty = $logisticsOperatorParty;
        return $this;
    }

    /**
     * Gets as transportAdvisorParty
     *
     * ASBIE
     *  Consignment. Transport Advisor_ Party. Party
     *  The party providing transport advice this consignment.
     *  0..1
     *  Consignment
     *  Transport Advisor
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\TransportAdvisorParty
     */
    public function getTransportAdvisorParty()
    {
        return $this->transportAdvisorParty;
    }

    /**
     * Sets a new transportAdvisorParty
     *
     * ASBIE
     *  Consignment. Transport Advisor_ Party. Party
     *  The party providing transport advice this consignment.
     *  0..1
     *  Consignment
     *  Transport Advisor
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TransportAdvisorParty $transportAdvisorParty
     * @return self
     */
    public function setTransportAdvisorParty(\Greenter\Ubl\Entity\CommonAggregateComponents\TransportAdvisorParty $transportAdvisorParty)
    {
        $this->transportAdvisorParty = $transportAdvisorParty;
        return $this;
    }

    /**
     * Gets as hazardousItemNotificationParty
     *
     * ASBIE
     *  Consignment. Hazardous Item Notification_ Party. Party
     *  The party that would be notified of a hazardous item in this consignment.
     *  0..1
     *  Consignment
     *  Hazardous Item Notification
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\HazardousItemNotificationParty
     */
    public function getHazardousItemNotificationParty()
    {
        return $this->hazardousItemNotificationParty;
    }

    /**
     * Sets a new hazardousItemNotificationParty
     *
     * ASBIE
     *  Consignment. Hazardous Item Notification_ Party. Party
     *  The party that would be notified of a hazardous item in this consignment.
     *  0..1
     *  Consignment
     *  Hazardous Item Notification
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\HazardousItemNotificationParty $hazardousItemNotificationParty
     * @return self
     */
    public function setHazardousItemNotificationParty(\Greenter\Ubl\Entity\CommonAggregateComponents\HazardousItemNotificationParty $hazardousItemNotificationParty)
    {
        $this->hazardousItemNotificationParty = $hazardousItemNotificationParty;
        return $this;
    }

    /**
     * Gets as insuranceParty
     *
     * ASBIE
     *  Consignment. Insurance_ Party. Party
     *  The party holding the insurance for this consignment.
     *  0..1
     *  Consignment
     *  Insurance
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\InsuranceParty
     */
    public function getInsuranceParty()
    {
        return $this->insuranceParty;
    }

    /**
     * Sets a new insuranceParty
     *
     * ASBIE
     *  Consignment. Insurance_ Party. Party
     *  The party holding the insurance for this consignment.
     *  0..1
     *  Consignment
     *  Insurance
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\InsuranceParty $insuranceParty
     * @return self
     */
    public function setInsuranceParty(\Greenter\Ubl\Entity\CommonAggregateComponents\InsuranceParty $insuranceParty)
    {
        $this->insuranceParty = $insuranceParty;
        return $this;
    }

    /**
     * Gets as mortgageHolderParty
     *
     * ASBIE
     *  Consignment. Mortgage Holder_ Party. Party
     *  The party holding the mortgage for this consignment.
     *  0..1
     *  Consignment
     *  Mortgage Holder
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\MortgageHolderParty
     */
    public function getMortgageHolderParty()
    {
        return $this->mortgageHolderParty;
    }

    /**
     * Sets a new mortgageHolderParty
     *
     * ASBIE
     *  Consignment. Mortgage Holder_ Party. Party
     *  The party holding the mortgage for this consignment.
     *  0..1
     *  Consignment
     *  Mortgage Holder
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\MortgageHolderParty $mortgageHolderParty
     * @return self
     */
    public function setMortgageHolderParty(\Greenter\Ubl\Entity\CommonAggregateComponents\MortgageHolderParty $mortgageHolderParty)
    {
        $this->mortgageHolderParty = $mortgageHolderParty;
        return $this;
    }

    /**
     * Gets as billOfLadingHolderParty
     *
     * ASBIE
     *  Consignment. Bill Of Lading Holder_ Party. Party
     *  The party holding the bill of lading for this consignment.
     *  0..1
     *  Consignment
     *  Bill Of Lading Holder
     *  Party
     *  Party
     *  Party
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\BillOfLadingHolderParty
     */
    public function getBillOfLadingHolderParty()
    {
        return $this->billOfLadingHolderParty;
    }

    /**
     * Sets a new billOfLadingHolderParty
     *
     * ASBIE
     *  Consignment. Bill Of Lading Holder_ Party. Party
     *  The party holding the bill of lading for this consignment.
     *  0..1
     *  Consignment
     *  Bill Of Lading Holder
     *  Party
     *  Party
     *  Party
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\BillOfLadingHolderParty $billOfLadingHolderParty
     * @return self
     */
    public function setBillOfLadingHolderParty(\Greenter\Ubl\Entity\CommonAggregateComponents\BillOfLadingHolderParty $billOfLadingHolderParty)
    {
        $this->billOfLadingHolderParty = $billOfLadingHolderParty;
        return $this;
    }

    /**
     * Gets as originalDepartureCountry
     *
     * ASBIE
     *  Consignment. Original Departure_ Country. Country
     *  The country from which the goods in this consignment were originally exported, without any commercial transaction taking place in intermediate countries.
     *  0..1
     *  Consignment
     *  Original Departure
     *  Country
     *  Country
     *  Country
     *  Country of origin (WCO ID 062)
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\OriginalDepartureCountry
     */
    public function getOriginalDepartureCountry()
    {
        return $this->originalDepartureCountry;
    }

    /**
     * Sets a new originalDepartureCountry
     *
     * ASBIE
     *  Consignment. Original Departure_ Country. Country
     *  The country from which the goods in this consignment were originally exported, without any commercial transaction taking place in intermediate countries.
     *  0..1
     *  Consignment
     *  Original Departure
     *  Country
     *  Country
     *  Country
     *  Country of origin (WCO ID 062)
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\OriginalDepartureCountry $originalDepartureCountry
     * @return self
     */
    public function setOriginalDepartureCountry(\Greenter\Ubl\Entity\CommonAggregateComponents\OriginalDepartureCountry $originalDepartureCountry)
    {
        $this->originalDepartureCountry = $originalDepartureCountry;
        return $this;
    }

    /**
     * Gets as finalDestinationCountry
     *
     * ASBIE
     *  Consignment. Final Destination_ Country. Country
     *  The country in which the goods in this consignment are to be delivered to the final consignee or buyer.
     *  0..1
     *  Consignment
     *  Final Destination
     *  Country
     *  Country
     *  Country
     *  Ultimate Destination Country, Country of Final Arrival, Country of Destination
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\FinalDestinationCountry
     */
    public function getFinalDestinationCountry()
    {
        return $this->finalDestinationCountry;
    }

    /**
     * Sets a new finalDestinationCountry
     *
     * ASBIE
     *  Consignment. Final Destination_ Country. Country
     *  The country in which the goods in this consignment are to be delivered to the final consignee or buyer.
     *  0..1
     *  Consignment
     *  Final Destination
     *  Country
     *  Country
     *  Country
     *  Ultimate Destination Country, Country of Final Arrival, Country of Destination
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\FinalDestinationCountry $finalDestinationCountry
     * @return self
     */
    public function setFinalDestinationCountry(\Greenter\Ubl\Entity\CommonAggregateComponents\FinalDestinationCountry $finalDestinationCountry)
    {
        $this->finalDestinationCountry = $finalDestinationCountry;
        return $this;
    }

    /**
     * Adds as transitCountry
     *
     * ASBIE
     *  Consignment. Transit_ Country. Country
     *  One of the countries through which goods or passengers in this consignment are routed between the country of original departure and the country of final destination.
     *  0..n
     *  Consignment
     *  Transit
     *  Country
     *  Country
     *  Country
     *  Country(ies) of routing (WCO ID 064)
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TransitCountry $transitCountry
     */
    public function addToTransitCountry(\Greenter\Ubl\Entity\CommonAggregateComponents\TransitCountry $transitCountry)
    {
        $this->transitCountry[] = $transitCountry;
        return $this;
    }

    /**
     * isset transitCountry
     *
     * ASBIE
     *  Consignment. Transit_ Country. Country
     *  One of the countries through which goods or passengers in this consignment are routed between the country of original departure and the country of final destination.
     *  0..n
     *  Consignment
     *  Transit
     *  Country
     *  Country
     *  Country
     *  Country(ies) of routing (WCO ID 064)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransitCountry($index)
    {
        return isset($this->transitCountry[$index]);
    }

    /**
     * unset transitCountry
     *
     * ASBIE
     *  Consignment. Transit_ Country. Country
     *  One of the countries through which goods or passengers in this consignment are routed between the country of original departure and the country of final destination.
     *  0..n
     *  Consignment
     *  Transit
     *  Country
     *  Country
     *  Country
     *  Country(ies) of routing (WCO ID 064)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransitCountry($index)
    {
        unset($this->transitCountry[$index]);
    }

    /**
     * Gets as transitCountry
     *
     * ASBIE
     *  Consignment. Transit_ Country. Country
     *  One of the countries through which goods or passengers in this consignment are routed between the country of original departure and the country of final destination.
     *  0..n
     *  Consignment
     *  Transit
     *  Country
     *  Country
     *  Country
     *  Country(ies) of routing (WCO ID 064)
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\TransitCountry[]
     */
    public function getTransitCountry()
    {
        return $this->transitCountry;
    }

    /**
     * Sets a new transitCountry
     *
     * ASBIE
     *  Consignment. Transit_ Country. Country
     *  One of the countries through which goods or passengers in this consignment are routed between the country of original departure and the country of final destination.
     *  0..n
     *  Consignment
     *  Transit
     *  Country
     *  Country
     *  Country
     *  Country(ies) of routing (WCO ID 064)
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TransitCountry[] $transitCountry
     * @return self
     */
    public function setTransitCountry(array $transitCountry)
    {
        $this->transitCountry = $transitCountry;
        return $this;
    }

    /**
     * Gets as transportContract
     *
     * ASBIE
     *  Consignment. Transport_ Contract. Contract
     *  A transport contract relating to this consignment.
     *  0..1
     *  Consignment
     *  Transport
     *  Contract
     *  Contract
     *  Contract
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\TransportContract
     */
    public function getTransportContract()
    {
        return $this->transportContract;
    }

    /**
     * Sets a new transportContract
     *
     * ASBIE
     *  Consignment. Transport_ Contract. Contract
     *  A transport contract relating to this consignment.
     *  0..1
     *  Consignment
     *  Transport
     *  Contract
     *  Contract
     *  Contract
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TransportContract $transportContract
     * @return self
     */
    public function setTransportContract(\Greenter\Ubl\Entity\CommonAggregateComponents\TransportContract $transportContract)
    {
        $this->transportContract = $transportContract;
        return $this;
    }

    /**
     * Adds as transportEvent
     *
     * ASBIE
     *  Consignment. Transport Event
     *  A class describing a significant occurrence or happening related to the transportation of goods.
     *  0..n
     *  Consignment
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TransportEvent $transportEvent
     */
    public function addToTransportEvent(\Greenter\Ubl\Entity\CommonAggregateComponents\TransportEvent $transportEvent)
    {
        $this->transportEvent[] = $transportEvent;
        return $this;
    }

    /**
     * isset transportEvent
     *
     * ASBIE
     *  Consignment. Transport Event
     *  A class describing a significant occurrence or happening related to the transportation of goods.
     *  0..n
     *  Consignment
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportEvent($index)
    {
        return isset($this->transportEvent[$index]);
    }

    /**
     * unset transportEvent
     *
     * ASBIE
     *  Consignment. Transport Event
     *  A class describing a significant occurrence or happening related to the transportation of goods.
     *  0..n
     *  Consignment
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportEvent($index)
    {
        unset($this->transportEvent[$index]);
    }

    /**
     * Gets as transportEvent
     *
     * ASBIE
     *  Consignment. Transport Event
     *  A class describing a significant occurrence or happening related to the transportation of goods.
     *  0..n
     *  Consignment
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\TransportEvent[]
     */
    public function getTransportEvent()
    {
        return $this->transportEvent;
    }

    /**
     * Sets a new transportEvent
     *
     * ASBIE
     *  Consignment. Transport Event
     *  A class describing a significant occurrence or happening related to the transportation of goods.
     *  0..n
     *  Consignment
     *  Transport Event
     *  Transport Event
     *  Transport Event
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TransportEvent[] $transportEvent
     * @return self
     */
    public function setTransportEvent(array $transportEvent)
    {
        $this->transportEvent = $transportEvent;
        return $this;
    }

    /**
     * Gets as originalDespatchTransportationService
     *
     * ASBIE
     *  Consignment. Original Despatch_ Transportation Service. Transportation Service
     *  The service for pickup from the consignor under the transport contract for this consignment.
     *  0..1
     *  Consignment
     *  Original Despatch
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *  Door-to-door , Pier-to-door
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\OriginalDespatchTransportationService
     */
    public function getOriginalDespatchTransportationService()
    {
        return $this->originalDespatchTransportationService;
    }

    /**
     * Sets a new originalDespatchTransportationService
     *
     * ASBIE
     *  Consignment. Original Despatch_ Transportation Service. Transportation Service
     *  The service for pickup from the consignor under the transport contract for this consignment.
     *  0..1
     *  Consignment
     *  Original Despatch
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *  Door-to-door , Pier-to-door
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\OriginalDespatchTransportationService $originalDespatchTransportationService
     * @return self
     */
    public function setOriginalDespatchTransportationService(\Greenter\Ubl\Entity\CommonAggregateComponents\OriginalDespatchTransportationService $originalDespatchTransportationService)
    {
        $this->originalDespatchTransportationService = $originalDespatchTransportationService;
        return $this;
    }

    /**
     * Gets as finalDeliveryTransportationService
     *
     * ASBIE
     *  Consignment. Final Delivery_ Transportation Service. Transportation Service
     *  The service for delivery to the consignee under the transport contract for this consignment.
     *  0..1
     *  Consignment
     *  Final Delivery
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *  Door-to-door , Pier-to-door
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\FinalDeliveryTransportationService
     */
    public function getFinalDeliveryTransportationService()
    {
        return $this->finalDeliveryTransportationService;
    }

    /**
     * Sets a new finalDeliveryTransportationService
     *
     * ASBIE
     *  Consignment. Final Delivery_ Transportation Service. Transportation Service
     *  The service for delivery to the consignee under the transport contract for this consignment.
     *  0..1
     *  Consignment
     *  Final Delivery
     *  Transportation Service
     *  Transportation Service
     *  Transportation Service
     *  Door-to-door , Pier-to-door
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\FinalDeliveryTransportationService $finalDeliveryTransportationService
     * @return self
     */
    public function setFinalDeliveryTransportationService(\Greenter\Ubl\Entity\CommonAggregateComponents\FinalDeliveryTransportationService $finalDeliveryTransportationService)
    {
        $this->finalDeliveryTransportationService = $finalDeliveryTransportationService;
        return $this;
    }

    /**
     * Gets as deliveryTerms
     *
     * ASBIE
     *  Consignment. Delivery Terms
     *  The conditions agreed upon between a seller and a buyer with regard to the delivery of goods and/or services (e.g., CIF, FOB, or EXW from the INCOTERMS Terms of Delivery).
     *  0..1
     *  Consignment
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *  Trade Terms, INCOTERMS
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\DeliveryTerms
     */
    public function getDeliveryTerms()
    {
        return $this->deliveryTerms;
    }

    /**
     * Sets a new deliveryTerms
     *
     * ASBIE
     *  Consignment. Delivery Terms
     *  The conditions agreed upon between a seller and a buyer with regard to the delivery of goods and/or services (e.g., CIF, FOB, or EXW from the INCOTERMS Terms of Delivery).
     *  0..1
     *  Consignment
     *  Delivery Terms
     *  Delivery Terms
     *  Delivery Terms
     *  Trade Terms, INCOTERMS
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DeliveryTerms $deliveryTerms
     * @return self
     */
    public function setDeliveryTerms(\Greenter\Ubl\Entity\CommonAggregateComponents\DeliveryTerms $deliveryTerms)
    {
        $this->deliveryTerms = $deliveryTerms;
        return $this;
    }

    /**
     * Gets as paymentTerms
     *
     * ASBIE
     *  Consignment. Payment Terms
     *  The terms of payment between the parties (such as logistics service client, logistics service provider) in a transaction.
     *  0..1
     *  Consignment
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentTerms
     */
    public function getPaymentTerms()
    {
        return $this->paymentTerms;
    }

    /**
     * Sets a new paymentTerms
     *
     * ASBIE
     *  Consignment. Payment Terms
     *  The terms of payment between the parties (such as logistics service client, logistics service provider) in a transaction.
     *  0..1
     *  Consignment
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PaymentTerms $paymentTerms
     * @return self
     */
    public function setPaymentTerms(\Greenter\Ubl\Entity\CommonAggregateComponents\PaymentTerms $paymentTerms)
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * Gets as collectPaymentTerms
     *
     * ASBIE
     *  Consignment. Collect_ Payment Terms. Payment Terms
     *  The terms of payment that apply to the collection of this consignment.
     *  0..1
     *  Consignment
     *  Collect
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\CollectPaymentTerms
     */
    public function getCollectPaymentTerms()
    {
        return $this->collectPaymentTerms;
    }

    /**
     * Sets a new collectPaymentTerms
     *
     * ASBIE
     *  Consignment. Collect_ Payment Terms. Payment Terms
     *  The terms of payment that apply to the collection of this consignment.
     *  0..1
     *  Consignment
     *  Collect
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\CollectPaymentTerms $collectPaymentTerms
     * @return self
     */
    public function setCollectPaymentTerms(\Greenter\Ubl\Entity\CommonAggregateComponents\CollectPaymentTerms $collectPaymentTerms)
    {
        $this->collectPaymentTerms = $collectPaymentTerms;
        return $this;
    }

    /**
     * Gets as disbursementPaymentTerms
     *
     * ASBIE
     *  Consignment. Disbursement_ Payment Terms. Payment Terms
     *  The terms of payment for disbursement.
     *  0..1
     *  Consignment
     *  Disbursement
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\DisbursementPaymentTerms
     */
    public function getDisbursementPaymentTerms()
    {
        return $this->disbursementPaymentTerms;
    }

    /**
     * Sets a new disbursementPaymentTerms
     *
     * ASBIE
     *  Consignment. Disbursement_ Payment Terms. Payment Terms
     *  The terms of payment for disbursement.
     *  0..1
     *  Consignment
     *  Disbursement
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\DisbursementPaymentTerms $disbursementPaymentTerms
     * @return self
     */
    public function setDisbursementPaymentTerms(\Greenter\Ubl\Entity\CommonAggregateComponents\DisbursementPaymentTerms $disbursementPaymentTerms)
    {
        $this->disbursementPaymentTerms = $disbursementPaymentTerms;
        return $this;
    }

    /**
     * Gets as prepaidPaymentTerms
     *
     * ASBIE
     *  Consignment. Prepaid_ Payment Terms. Payment Terms
     *  The terms of payment for prepayment.
     *  0..1
     *  Consignment
     *  Prepaid
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PrepaidPaymentTerms
     */
    public function getPrepaidPaymentTerms()
    {
        return $this->prepaidPaymentTerms;
    }

    /**
     * Sets a new prepaidPaymentTerms
     *
     * ASBIE
     *  Consignment. Prepaid_ Payment Terms. Payment Terms
     *  The terms of payment for prepayment.
     *  0..1
     *  Consignment
     *  Prepaid
     *  Payment Terms
     *  Payment Terms
     *  Payment Terms
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PrepaidPaymentTerms $prepaidPaymentTerms
     * @return self
     */
    public function setPrepaidPaymentTerms(\Greenter\Ubl\Entity\CommonAggregateComponents\PrepaidPaymentTerms $prepaidPaymentTerms)
    {
        $this->prepaidPaymentTerms = $prepaidPaymentTerms;
        return $this;
    }

    /**
     * Adds as freightAllowanceCharge
     *
     * ASBIE
     *  Consignment. Freight_ Allowance Charge. Allowance Charge
     *  A cost incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage for this consignment. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance to the extent that they relate to the freight costs.
     *  0..n
     *  Consignment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *  Freight Costs
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\FreightAllowanceCharge $freightAllowanceCharge
     */
    public function addToFreightAllowanceCharge(\Greenter\Ubl\Entity\CommonAggregateComponents\FreightAllowanceCharge $freightAllowanceCharge)
    {
        $this->freightAllowanceCharge[] = $freightAllowanceCharge;
        return $this;
    }

    /**
     * isset freightAllowanceCharge
     *
     * ASBIE
     *  Consignment. Freight_ Allowance Charge. Allowance Charge
     *  A cost incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage for this consignment. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance to the extent that they relate to the freight costs.
     *  0..n
     *  Consignment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *  Freight Costs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFreightAllowanceCharge($index)
    {
        return isset($this->freightAllowanceCharge[$index]);
    }

    /**
     * unset freightAllowanceCharge
     *
     * ASBIE
     *  Consignment. Freight_ Allowance Charge. Allowance Charge
     *  A cost incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage for this consignment. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance to the extent that they relate to the freight costs.
     *  0..n
     *  Consignment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *  Freight Costs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFreightAllowanceCharge($index)
    {
        unset($this->freightAllowanceCharge[$index]);
    }

    /**
     * Gets as freightAllowanceCharge
     *
     * ASBIE
     *  Consignment. Freight_ Allowance Charge. Allowance Charge
     *  A cost incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage for this consignment. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance to the extent that they relate to the freight costs.
     *  0..n
     *  Consignment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *  Freight Costs
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\FreightAllowanceCharge[]
     */
    public function getFreightAllowanceCharge()
    {
        return $this->freightAllowanceCharge;
    }

    /**
     * Sets a new freightAllowanceCharge
     *
     * ASBIE
     *  Consignment. Freight_ Allowance Charge. Allowance Charge
     *  A cost incurred by the shipper in moving goods, by whatever means, from one place to another under the terms of the contract of carriage for this consignment. In addition to transport costs, this may include such elements as packing, documentation, loading, unloading, and insurance to the extent that they relate to the freight costs.
     *  0..n
     *  Consignment
     *  Freight
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *  Freight Costs
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\FreightAllowanceCharge[] $freightAllowanceCharge
     * @return self
     */
    public function setFreightAllowanceCharge(array $freightAllowanceCharge)
    {
        $this->freightAllowanceCharge = $freightAllowanceCharge;
        return $this;
    }

    /**
     * Adds as extraAllowanceCharge
     *
     * ASBIE
     *  Consignment. Extra_ Allowance Charge. Allowance Charge
     *  A charge for extra allowance.
     *  0..n
     *  Consignment
     *  Extra
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ExtraAllowanceCharge $extraAllowanceCharge
     */
    public function addToExtraAllowanceCharge(\Greenter\Ubl\Entity\CommonAggregateComponents\ExtraAllowanceCharge $extraAllowanceCharge)
    {
        $this->extraAllowanceCharge[] = $extraAllowanceCharge;
        return $this;
    }

    /**
     * isset extraAllowanceCharge
     *
     * ASBIE
     *  Consignment. Extra_ Allowance Charge. Allowance Charge
     *  A charge for extra allowance.
     *  0..n
     *  Consignment
     *  Extra
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExtraAllowanceCharge($index)
    {
        return isset($this->extraAllowanceCharge[$index]);
    }

    /**
     * unset extraAllowanceCharge
     *
     * ASBIE
     *  Consignment. Extra_ Allowance Charge. Allowance Charge
     *  A charge for extra allowance.
     *  0..n
     *  Consignment
     *  Extra
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExtraAllowanceCharge($index)
    {
        unset($this->extraAllowanceCharge[$index]);
    }

    /**
     * Gets as extraAllowanceCharge
     *
     * ASBIE
     *  Consignment. Extra_ Allowance Charge. Allowance Charge
     *  A charge for extra allowance.
     *  0..n
     *  Consignment
     *  Extra
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\ExtraAllowanceCharge[]
     */
    public function getExtraAllowanceCharge()
    {
        return $this->extraAllowanceCharge;
    }

    /**
     * Sets a new extraAllowanceCharge
     *
     * ASBIE
     *  Consignment. Extra_ Allowance Charge. Allowance Charge
     *  A charge for extra allowance.
     *  0..n
     *  Consignment
     *  Extra
     *  Allowance Charge
     *  Allowance Charge
     *  Allowance Charge
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\ExtraAllowanceCharge[] $extraAllowanceCharge
     * @return self
     */
    public function setExtraAllowanceCharge(array $extraAllowanceCharge)
    {
        $this->extraAllowanceCharge = $extraAllowanceCharge;
        return $this;
    }

    /**
     * Adds as mainCarriageShipmentStage
     *
     * ASBIE
     *  Consignment. Main Carriage_ Shipment Stage. Shipment Stage
     *  A shipment stage during main carriage.
     *  0..n
     *  Consignment
     *  Main Carriage
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\MainCarriageShipmentStage $mainCarriageShipmentStage
     */
    public function addToMainCarriageShipmentStage(\Greenter\Ubl\Entity\CommonAggregateComponents\MainCarriageShipmentStage $mainCarriageShipmentStage)
    {
        $this->mainCarriageShipmentStage[] = $mainCarriageShipmentStage;
        return $this;
    }

    /**
     * isset mainCarriageShipmentStage
     *
     * ASBIE
     *  Consignment. Main Carriage_ Shipment Stage. Shipment Stage
     *  A shipment stage during main carriage.
     *  0..n
     *  Consignment
     *  Main Carriage
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMainCarriageShipmentStage($index)
    {
        return isset($this->mainCarriageShipmentStage[$index]);
    }

    /**
     * unset mainCarriageShipmentStage
     *
     * ASBIE
     *  Consignment. Main Carriage_ Shipment Stage. Shipment Stage
     *  A shipment stage during main carriage.
     *  0..n
     *  Consignment
     *  Main Carriage
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMainCarriageShipmentStage($index)
    {
        unset($this->mainCarriageShipmentStage[$index]);
    }

    /**
     * Gets as mainCarriageShipmentStage
     *
     * ASBIE
     *  Consignment. Main Carriage_ Shipment Stage. Shipment Stage
     *  A shipment stage during main carriage.
     *  0..n
     *  Consignment
     *  Main Carriage
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\MainCarriageShipmentStage[]
     */
    public function getMainCarriageShipmentStage()
    {
        return $this->mainCarriageShipmentStage;
    }

    /**
     * Sets a new mainCarriageShipmentStage
     *
     * ASBIE
     *  Consignment. Main Carriage_ Shipment Stage. Shipment Stage
     *  A shipment stage during main carriage.
     *  0..n
     *  Consignment
     *  Main Carriage
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\MainCarriageShipmentStage[] $mainCarriageShipmentStage
     * @return self
     */
    public function setMainCarriageShipmentStage(array $mainCarriageShipmentStage)
    {
        $this->mainCarriageShipmentStage = $mainCarriageShipmentStage;
        return $this;
    }

    /**
     * Adds as preCarriageShipmentStage
     *
     * ASBIE
     *  Consignment. Pre Carriage_ Shipment Stage. Shipment Stage
     *  A shipment stage during precarriage (usually refers to movement activity that takes place prior to the container being loaded at a port of loading).
     *  0..n
     *  Consignment
     *  Pre Carriage
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PreCarriageShipmentStage $preCarriageShipmentStage
     */
    public function addToPreCarriageShipmentStage(\Greenter\Ubl\Entity\CommonAggregateComponents\PreCarriageShipmentStage $preCarriageShipmentStage)
    {
        $this->preCarriageShipmentStage[] = $preCarriageShipmentStage;
        return $this;
    }

    /**
     * isset preCarriageShipmentStage
     *
     * ASBIE
     *  Consignment. Pre Carriage_ Shipment Stage. Shipment Stage
     *  A shipment stage during precarriage (usually refers to movement activity that takes place prior to the container being loaded at a port of loading).
     *  0..n
     *  Consignment
     *  Pre Carriage
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreCarriageShipmentStage($index)
    {
        return isset($this->preCarriageShipmentStage[$index]);
    }

    /**
     * unset preCarriageShipmentStage
     *
     * ASBIE
     *  Consignment. Pre Carriage_ Shipment Stage. Shipment Stage
     *  A shipment stage during precarriage (usually refers to movement activity that takes place prior to the container being loaded at a port of loading).
     *  0..n
     *  Consignment
     *  Pre Carriage
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreCarriageShipmentStage($index)
    {
        unset($this->preCarriageShipmentStage[$index]);
    }

    /**
     * Gets as preCarriageShipmentStage
     *
     * ASBIE
     *  Consignment. Pre Carriage_ Shipment Stage. Shipment Stage
     *  A shipment stage during precarriage (usually refers to movement activity that takes place prior to the container being loaded at a port of loading).
     *  0..n
     *  Consignment
     *  Pre Carriage
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\PreCarriageShipmentStage[]
     */
    public function getPreCarriageShipmentStage()
    {
        return $this->preCarriageShipmentStage;
    }

    /**
     * Sets a new preCarriageShipmentStage
     *
     * ASBIE
     *  Consignment. Pre Carriage_ Shipment Stage. Shipment Stage
     *  A shipment stage during precarriage (usually refers to movement activity that takes place prior to the container being loaded at a port of loading).
     *  0..n
     *  Consignment
     *  Pre Carriage
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\PreCarriageShipmentStage[] $preCarriageShipmentStage
     * @return self
     */
    public function setPreCarriageShipmentStage(array $preCarriageShipmentStage)
    {
        $this->preCarriageShipmentStage = $preCarriageShipmentStage;
        return $this;
    }

    /**
     * Adds as onCarriageShipmentStage
     *
     * ASBIE
     *  Consignment. On Carriage_ Shipment Stage. Shipment Stage
     *  A shipment stage during on-carriage (usually refers to movement activity that takes place after the container is discharged at a port of discharge).
     *  0..n
     *  Consignment
     *  On Carriage
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\OnCarriageShipmentStage $onCarriageShipmentStage
     */
    public function addToOnCarriageShipmentStage(\Greenter\Ubl\Entity\CommonAggregateComponents\OnCarriageShipmentStage $onCarriageShipmentStage)
    {
        $this->onCarriageShipmentStage[] = $onCarriageShipmentStage;
        return $this;
    }

    /**
     * isset onCarriageShipmentStage
     *
     * ASBIE
     *  Consignment. On Carriage_ Shipment Stage. Shipment Stage
     *  A shipment stage during on-carriage (usually refers to movement activity that takes place after the container is discharged at a port of discharge).
     *  0..n
     *  Consignment
     *  On Carriage
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOnCarriageShipmentStage($index)
    {
        return isset($this->onCarriageShipmentStage[$index]);
    }

    /**
     * unset onCarriageShipmentStage
     *
     * ASBIE
     *  Consignment. On Carriage_ Shipment Stage. Shipment Stage
     *  A shipment stage during on-carriage (usually refers to movement activity that takes place after the container is discharged at a port of discharge).
     *  0..n
     *  Consignment
     *  On Carriage
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOnCarriageShipmentStage($index)
    {
        unset($this->onCarriageShipmentStage[$index]);
    }

    /**
     * Gets as onCarriageShipmentStage
     *
     * ASBIE
     *  Consignment. On Carriage_ Shipment Stage. Shipment Stage
     *  A shipment stage during on-carriage (usually refers to movement activity that takes place after the container is discharged at a port of discharge).
     *  0..n
     *  Consignment
     *  On Carriage
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\OnCarriageShipmentStage[]
     */
    public function getOnCarriageShipmentStage()
    {
        return $this->onCarriageShipmentStage;
    }

    /**
     * Sets a new onCarriageShipmentStage
     *
     * ASBIE
     *  Consignment. On Carriage_ Shipment Stage. Shipment Stage
     *  A shipment stage during on-carriage (usually refers to movement activity that takes place after the container is discharged at a port of discharge).
     *  0..n
     *  Consignment
     *  On Carriage
     *  Shipment Stage
     *  Shipment Stage
     *  Shipment Stage
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\OnCarriageShipmentStage[] $onCarriageShipmentStage
     * @return self
     */
    public function setOnCarriageShipmentStage(array $onCarriageShipmentStage)
    {
        $this->onCarriageShipmentStage = $onCarriageShipmentStage;
        return $this;
    }

    /**
     * Adds as transportHandlingUnit
     *
     * ASBIE
     *  Consignment. Transport Handling Unit
     *  A transport handling unit used for loose and containerized goods.
     *  0..n
     *  Consignment
     *  Transport Handling Unit
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @return self
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TransportHandlingUnit $transportHandlingUnit
     */
    public function addToTransportHandlingUnit(\Greenter\Ubl\Entity\CommonAggregateComponents\TransportHandlingUnit $transportHandlingUnit)
    {
        $this->transportHandlingUnit[] = $transportHandlingUnit;
        return $this;
    }

    /**
     * isset transportHandlingUnit
     *
     * ASBIE
     *  Consignment. Transport Handling Unit
     *  A transport handling unit used for loose and containerized goods.
     *  0..n
     *  Consignment
     *  Transport Handling Unit
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportHandlingUnit($index)
    {
        return isset($this->transportHandlingUnit[$index]);
    }

    /**
     * unset transportHandlingUnit
     *
     * ASBIE
     *  Consignment. Transport Handling Unit
     *  A transport handling unit used for loose and containerized goods.
     *  0..n
     *  Consignment
     *  Transport Handling Unit
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportHandlingUnit($index)
    {
        unset($this->transportHandlingUnit[$index]);
    }

    /**
     * Gets as transportHandlingUnit
     *
     * ASBIE
     *  Consignment. Transport Handling Unit
     *  A transport handling unit used for loose and containerized goods.
     *  0..n
     *  Consignment
     *  Transport Handling Unit
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\TransportHandlingUnit[]
     */
    public function getTransportHandlingUnit()
    {
        return $this->transportHandlingUnit;
    }

    /**
     * Sets a new transportHandlingUnit
     *
     * ASBIE
     *  Consignment. Transport Handling Unit
     *  A transport handling unit used for loose and containerized goods.
     *  0..n
     *  Consignment
     *  Transport Handling Unit
     *  Transport Handling Unit
     *  Transport Handling Unit
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\TransportHandlingUnit[] $transportHandlingUnit
     * @return self
     */
    public function setTransportHandlingUnit(array $transportHandlingUnit)
    {
        $this->transportHandlingUnit = $transportHandlingUnit;
        return $this;
    }

    /**
     * Gets as firstArrivalPortLocation
     *
     * ASBIE
     *  Consignment. First Arrival Port_ Location. Location
     *  The first arrival location in a transport. This would be a port for sea, an airport for air, a terminal for rail, or a border post for land crossing.
     *  0..1
     *  Consignment
     *  First Arrival Port
     *  Location
     *  Location
     *  Location
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\FirstArrivalPortLocation
     */
    public function getFirstArrivalPortLocation()
    {
        return $this->firstArrivalPortLocation;
    }

    /**
     * Sets a new firstArrivalPortLocation
     *
     * ASBIE
     *  Consignment. First Arrival Port_ Location. Location
     *  The first arrival location in a transport. This would be a port for sea, an airport for air, a terminal for rail, or a border post for land crossing.
     *  0..1
     *  Consignment
     *  First Arrival Port
     *  Location
     *  Location
     *  Location
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\FirstArrivalPortLocation $firstArrivalPortLocation
     * @return self
     */
    public function setFirstArrivalPortLocation(\Greenter\Ubl\Entity\CommonAggregateComponents\FirstArrivalPortLocation $firstArrivalPortLocation)
    {
        $this->firstArrivalPortLocation = $firstArrivalPortLocation;
        return $this;
    }

    /**
     * Gets as lastExitPortLocation
     *
     * ASBIE
     *  Consignment. Last Exit Port_ Location. Location
     *  The final exporting location in a transport. This would be a port for sea, an airport for air, a terminal for rail, or a border post for land crossing.
     *  0..1
     *  Consignment
     *  Last Exit Port
     *  Location
     *  Location
     *  Location
     *
     * @return \Greenter\Ubl\Entity\CommonAggregateComponents\LastExitPortLocation
     */
    public function getLastExitPortLocation()
    {
        return $this->lastExitPortLocation;
    }

    /**
     * Sets a new lastExitPortLocation
     *
     * ASBIE
     *  Consignment. Last Exit Port_ Location. Location
     *  The final exporting location in a transport. This would be a port for sea, an airport for air, a terminal for rail, or a border post for land crossing.
     *  0..1
     *  Consignment
     *  Last Exit Port
     *  Location
     *  Location
     *  Location
     *
     * @param \Greenter\Ubl\Entity\CommonAggregateComponents\LastExitPortLocation $lastExitPortLocation
     * @return self
     */
    public function setLastExitPortLocation(\Greenter\Ubl\Entity\CommonAggregateComponents\LastExitPortLocation $lastExitPortLocation)
    {
        $this->lastExitPortLocation = $lastExitPortLocation;
        return $this;
    }


}

