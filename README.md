## Backend

NStack integration for Laravel

[![Total downloads](https://img.shields.io/packagist/dt/nodes/nstack.svg)](https://packagist.org/packages/nodes/nstack)
[![Monthly downloads](https://img.shields.io/packagist/dm/nodes/nstack.svg)](https://packagist.org/packages/nodes/nstack)
[![Latest release](https://img.shields.io/packagist/v/nodes/nstack.svg)](https://packagist.org/packages/nodes/nstack)
[![Open issues](https://img.shields.io/github/issues/nodes-php/nstack.svg)](https://github.com/nodes-php/nstack/issues)
[![License](https://img.shields.io/packagist/l/nodes/nstack.svg)](https://packagist.org/packages/nodes/nstack)
[![Star repository on GitHub](https://img.shields.io/github/stars/nodes-php/nstack.svg?style=social&label=Star)](https://github.com/nodes-php/nstack/stargazers)
[![Watch repository on GitHub](https://img.shields.io/github/watchers/nodes-php/nstack.svg?style=social&label=Watch)](https://github.com/nodes-php/nstack/watchers)
[![Fork repository on GitHub](https://img.shields.io/github/forks/nodes-php/nstack.svg?style=social&label=Fork)](https://github.com/nodes-php/nstack/network)
## 📝 Introduction


## 📦 Installation

To install this package you will need:

* Laravel 5.1+
* PHP 7.0+

You must then modify your `composer.json` file and run `composer update` to include the latest version of the package in your project.

```json
"require": {
    "nodes/nstack": "1.0.*",
}
```

Or you can run the composer require command from your terminal.

```bash
composer require nodes/nstack
```
## 🔧 Setup
> In Laravel 5.5 or above, service providers and aliases are [automatically registered](https://laravel.com/docs/5.5/packages#package-discovery). If you're using Laravel 5.5 or above, skip ahead directly to *Publish config files*.

Setup service providers in config/app.php

```php
Nodes\NStack\ServiceProvider::class,
Nodes\ServiceProvider::class,
```

Setup alias in config/app.php

```php
'NStack' => Nodes\Backend\Support\Facades\NStack::class,
```

Publish config file
```bash
php artisan vendor:publish && php artisan vendor:publish --provider="Nodes\NStack\ServiceProvider" --force
```

Dump 
```bash
composer dump-autoload
```

## ⚙ Usage

Global function
```php
nstack()
$countries = nstack()->countries()
nstack()->pushLog('fcm', 'my-app', 'userNotification', true, ['request here'], ['response here'], 'Hi!', 1);
nstack()->fileUpload('private-password', $uploadedFile, str_random(8));
nstack()->validateEmail($email): bool
```

## 🏆 Credits

This package is developed and maintained by the PHP team at [Nodes](http://nodesagency.com)

[![Follow Nodes PHP on Twitter](https://img.shields.io/twitter/follow/nodesphp.svg?style=social)](https://twitter.com/nodesphp) [![Tweet Nodes PHP](https://img.shields.io/twitter/url/http/nodesphp.svg?style=social)](https://twitter.com/nodesphp)

## 📄 License

This package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
