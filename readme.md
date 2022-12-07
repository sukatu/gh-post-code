# Gh Post Code

A simple laravel package to fetch digital address info from Ghana Post Code

## Installation

https://packagist.org/packages/sims/ghpostcode

```bash
composer require sims/ghpostcode
```

## Usage

```php
use Sims\GhPostCode\GhPostCode;

$ghPostCodeAddress = new GhPostCode();
return $ghPostCodeAddress->getAddress($code);
```
