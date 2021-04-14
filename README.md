# ETL Loader

[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.4-8892BF.svg)](https://php.net/)

## Description

Set of ETL generic Loaders

## Development

In order to install dependencies please, launch following commands:

```bash
composer install
```

## Loader - Transformer

```php 
<?php

use Flow\ETL\Loader\CallbackLoader;

$loader = new TransformerLoader(
    new Transformer(),
    new Loader(),
);
```

## Loader - Callback

```php 
<?php

use Flow\ETL\Loader\CallbackLoader;

$loader = new CallbackLoader(
    function (Rows $rows) use (&$data) : void {
        $data = $rows->toArray();
    }
));
```

## Run Tests

In order to execute full test suite, please launch following command:

```bash
composer build
```

It's recommended to use [pcov](https://pecl.php.net/package/pcov) for code coverage however you can also use
xdebug by setting `XDEBUG_MODE=coverage` env variable.
