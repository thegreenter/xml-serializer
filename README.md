# xml serializer

Demostración de serialización de XML **Invoice - UBL 2.1**

## Estructura
 
```php

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
    ->setNote([ (new Note('SON CIEN SOLES CON 00/100'))->setLanguageID('1000')])
    ->setDocumentCurrencyCode(new DocumentCurrencyCode('PEN'))
// ...
     ;   
```
## Ejecutar

```
composer install
vendor/bin/phpunit 
```
Esto dará como resultado el archivo `invoice.xml`.

> Para generar los metadatos de otros comprobantes, revisar esta [guía](/generator).
