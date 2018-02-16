# Afftrack PHP Client

[![Build Status](https://img.shields.io/travis/faustbrian/Afftrack-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Afftrack-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/afftrack-php-client.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Afftrack-PHP-Client.svg?style=flat-square)](https://github.com/faustbrian/Afftrack-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Afftrack-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Afftrack-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/afftrack-php-client
```

## Usage

``` php
<?php

use BrianFaust\Config;

$client = new BrianFaust\Afftrack\Client();
$client->setConfig(new Config([
    'username' => 'YOUR_USERNAME',
    'key' => 'YOUR_API_KEY'
]));

try {
    $response = $client->api('AdminManagers')->getAdmins();

    dd($response);
} catch (Exception $e) {
    dd($e);
}
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
