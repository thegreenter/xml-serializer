<?php

declare(strict_types=1);

namespace Tests\Greenter\Ubl;

use DateTime;
use Greenter\Ubl\Entity\Invoice\Invoice;
use Greenter\Ubl\Entity\Common\{ExtensionContent, UBLExtension};
use Greenter\Ubl\Entity\CommonAggregateComponents\{AccountingCustomerParty, AccountingSupplierParty, AddressLine, AlternativeConditionPrice, Country, DigitalSignatureAttachment, ExternalReference, InvoiceLine, Item, LegalMonetaryTotal, Party, PartyIdentification, PartyLegalEntity, PartyName, Price, PricingReference, RegistrationAddress, SellersItemIdentification, SignatoryParty, Signature, TaxCategory, TaxScheme, TaxSubtotal, TaxTotal};
use Greenter\Ubl\Entity\CommonBasic\{AddressTypeCode, CityName, CitySubdivisionName, CountrySubentity, CustomizationID, Description, DocumentCurrencyCode, ID, IdentificationCode, InvoicedQuantity, InvoiceTypeCode, Line, LineExtensionAmount, Name, Note, PayableAmount, Percent, PriceAmount, PriceTypeCode, RegistrationName, TaxableAmount, TaxAmount, TaxExemptionReasonCode, TaxInclusiveAmount, TaxTypeCode, UBLVersionID, URI};
use PHPUnit\Framework\TestCase;

class InvoiceTest extends TestCase
{
    use JmsTrait;

    /**
     * @var \JMS\Serializer\Serializer
     */
    private $serializer;

    protected function setUp(): void
    {
        $this->serializer = $this->createSerializer();
    }

    public function testCreateInvoice()
    {
        $invoice = $this->newInvoice();

        $xml = $this->serializer->serialize($invoice, 'xml');

        $this->assertNotEmpty($xml);
        file_put_contents('output.xml', $xml);
    }

    private function newInvoice(): Invoice
    {
        $invoice = new Invoice();
        $invoice->setUBLExtensions([
            (new UBLExtension())
                ->setExtensionContent(new ExtensionContent())
        ]);

        $invoice->setUBLVersionID(new UBLVersionID('2.1'))
            ->setCustomizationID(new CustomizationID('2.0'))
            ->setID(new ID('F001-2121'))
            ->setInvoiceTypeCode((new InvoiceTypeCode('01'))->setListID('0101'))
            ->setIssueDate((new DateTime('2020-04-02')))
            ->setIssueTime(new DateTime('18:25:13'))
            ->setNote([ (new Note('SON CIEN SOLES'))->setLanguageID('1000')])
            ->setDocumentCurrencyCode(new DocumentCurrencyCode('PEN'))
            ->setSignature([
                (new Signature())
                    ->setID(new ID('20604473081'))
                    ->setSignatoryParty((new SignatoryParty())
                        ->setPartyIdentification([(new PartyIdentification())->setID(new ID('20604473081'))])
                        ->setPartyName([(new PartyName())->setName(new Name('ASIU COSTA SAC'))]))
                    ->setDigitalSignatureAttachment((new DigitalSignatureAttachment())
                        ->setExternalReference((new ExternalReference())
                            ->setURI(new URI('#GREENTER-SIGN'))))
            ])
            ->setAccountingSupplierParty((new AccountingSupplierParty())
                ->setParty((new Party())
                    ->setPartyIdentification([(new PartyIdentification())->setID((new ID('20604473081'))->setSchemeID('6'))])
                    ->setPartyName([(new PartyName())->setName(new Name('ASIU COSTA SAC'))])
                    ->setPartyLegalEntity([(new PartyLegalEntity())
                        ->setRegistrationName(new RegistrationName('ASIU COSTA SAC'))
                        ->setRegistrationAddress((new RegistrationAddress())
                            ->setID(new ID('140105'))
                            ->setAddressTypeCode(new AddressTypeCode('0000'))
                            ->setCitySubdivisionName(new CitySubdivisionName('-'))
                            ->setCityName(new CityName('-'))
                            ->setCountrySubentity(new CountrySubentity('-'))
                            ->setAddressLine([(new AddressLine())
                                ->setLine(new Line('PRINCIPAL:CAL.CARLOS CASTAÑEDA NRO. 261 P.J. FRANCISCO CABRERA LAMBAYEQUE '))])
                            ->setCountry((new Country())
                                ->setIdentificationCode(new IdentificationCode('PE')))
                        )
                    ])))
            ->setAccountingCustomerParty((new AccountingCustomerParty())
                ->setParty((new Party())
                    ->setPartyIdentification([(new PartyIdentification())->setID((new ID('20604473081'))->setSchemeID('6'))])
                    ->setPartyName([(new PartyName())->setName(new Name('ASIU COSTA SAC'))])
                    ->setPartyLegalEntity([(new PartyLegalEntity())
                        ->setRegistrationName(new RegistrationName('ASIU COSTA SAC'))
                        ->setRegistrationAddress((new RegistrationAddress())
                            ->setID(new ID('140105'))
                            ->setAddressLine([(new AddressLine())
                                ->setLine(new Line('AV. MARIANO CORNEJO NRO. 425 C.P. CPM. NUEVO SAN LORENZO'))])
                            ->setCountry((new Country())
                                ->setIdentificationCode(new IdentificationCode('PE')))
                        )
                    ])))
            ->setTaxTotal([(new TaxTotal())
                ->setTaxAmount((new TaxAmount(18.00))->setCurrencyID('PEN'))
                ->setTaxSubtotal([(new TaxSubtotal())
                    ->setTaxableAmount((new TaxableAmount(100.00))->setCurrencyID('PEN'))
                    ->setTaxAmount((new TaxAmount(18.00))->setCurrencyID('PEN'))
                    ->setTaxCategory((new TaxCategory())
                        ->setTaxScheme((new TaxScheme())
                            ->setID(new ID('1000'))
                            ->setName(new Name('IGV'))
                            ->setTaxTypeCode(new TaxTypeCode('VAT'))))
                ])
            ])
            ->setLegalMonetaryTotal((new LegalMonetaryTotal())
                ->setLineExtensionAmount((new LineExtensionAmount(100))->setCurrencyID('PEN'))
                ->setTaxInclusiveAmount((new TaxInclusiveAmount(118))->setCurrencyID('PEN'))
                ->setPayableAmount((new PayableAmount(118))->setCurrencyID('PEN'))
            );


        $line = new InvoiceLine();
        $line
            ->setID(new ID('1'))
            ->setInvoicedQuantity((new InvoicedQuantity(2))->setUnitCode('NIU'))
            ->setLineExtensionAmount((new LineExtensionAmount(100))->setCurrencyID('PEN'))
            ->setPricingReference((new PricingReference())
                ->setAlternativeConditionPrice([(new AlternativeConditionPrice())
                    ->setPriceAmount((new PriceAmount(59))->setCurrencyID('PEN'))
                    ->setPriceTypeCode(new PriceTypeCode('01'))
                ]))
            ->setTaxTotal([(new TaxTotal())
                ->setTaxAmount((new TaxAmount(18.00))->setCurrencyID('PEN'))
                ->setTaxSubtotal([(new TaxSubtotal())
                    ->setTaxableAmount((new TaxableAmount(100.00))->setCurrencyID('PEN'))
                    ->setTaxAmount((new TaxAmount(18.00))->setCurrencyID('PEN'))
                    ->setTaxCategory((new TaxCategory())
                        ->setPercent(new Percent(18.00))
                        ->setTaxExemptionReasonCode(new TaxExemptionReasonCode('10'))
                        ->setTaxScheme((new TaxScheme())
                            ->setID(new ID('1000'))
                            ->setName(new Name('IGV'))
                            ->setTaxTypeCode(new TaxTypeCode('VAT'))))
                ])
            ])
            ->setItem((new Item())
                ->setDescription([new Description('PRODUCTO PRUEBA')])
                ->setSellersItemIdentification((new SellersItemIdentification())
                    ->setID(new ID('P001'))
                )
            )
            ->setPrice((new Price())
                ->setPriceAmount((new PriceAmount(50))->setCurrencyID('PEN'))
            )
        ;

        $invoice->setInvoiceLine([$line]);

        return $invoice;
    }
}