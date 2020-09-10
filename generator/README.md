## Generacion de jms metadata

Para generar los metadatos, se necesita instalar 
`composer require goetas-webservices/xsd2php`

luego ejecutar:

```
vendor/bin/xsd2php convert config.yml ./maindoc/UBL-Invoice-2.1.xsd
```

> Hay un [issue](https://github.com/goetas-webservices/xsd2php/issues/118), que no coloca el namespace en InvoiceLine, tenerlo en cuenta.