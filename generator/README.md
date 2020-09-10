## Generacion de jms metadata

Para generar los metadatos, se necesita instalar 
`composer require goetas-webservices/xsd2php`

luego ejecutar:

```
vendor/bin/xsd2php convert config.yml ./maindoc/UBL-Invoice-2.1.xsd
```

Más información en este [repositorio](https://github.com/goetas-webservices). 