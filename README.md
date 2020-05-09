# Money Bundle

**Please note** that this package it is not considered stable yet.

[![Latest Version](https://img.shields.io/github/release/moneyphp/MoneyBundle.svg?style=flat-square)](https://github.com/moneyphp/MoneyBundle/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://img.shields.io/travis/moneyphp/MoneyBundle.svg?style=flat-square)](https://travis-ci.org/moneyphp/MoneyBundle)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/moneyphp/MoneyBundle.svg?style=flat-square)](https://scrutinizer-ci.com/g/moneyphp/MoneyBundle)
[![Quality Score](https://img.shields.io/scrutinizer/g/moneyphp/MoneyBundle.svg?style=flat-square)](https://scrutinizer-ci.com/g/moneyphp/MoneyBundle)
[![Total Downloads](https://img.shields.io/packagist/dt/moneyphp/money-bundle.svg?style=flat-square)](https://packagist.org/packages/moneyphp/money-bundle)

**Symfony Bundle for the popular [Money](https://github.com/moneyphp/money) library.**


## Install

Via Composer

``` bash
$ composer require moneyphp/money-bundle
```

Enable the bundle in your kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Money\MoneyBundle\MoneyBundle(),
    );
}
```


## Usage


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
