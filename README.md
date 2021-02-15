bootstrap-bundle
================

[![Build Status](https://img.shields.io/github/workflow/status/webeweb/bootstrap-bundle/build?style=flat-square)](https://github.com/webeweb/bootstrap-bundle/actions)
[![Coverage Status](https://img.shields.io/coveralls/github/webeweb/bootstrap-bundle/master.svg?style=flat-square)](https://coveralls.io/github/webeweb/bootstrap-bundle?branch=master)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/quality/g/webeweb/bootstrap-bundle/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/webeweb/bootstrap-bundle/?branch=master)
[![Latest Stable Version](https://img.shields.io/packagist/v/webeweb/bootstrap-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/bootstrap-bundle)
[![Latest Unstable Version](https://img.shields.io/packagist/vpre/webeweb/bootstrap-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/bootstrap-bundle)
[![License](https://img.shields.io/packagist/l/webeweb/bootstrap-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/bootstrap-bundle)
[![composer.lock](https://img.shields.io/badge/.lock-uncommited-important.svg?style=flat-square)](https://packagist.org/packages/webeweb/bootstrap-bundle)

Integrate Bootstrap theme with Symfony 2 and more.

`bootstrap-bundle` eases the use of Bootstrap to display components in your
Symfony application by providing Twig extensions and PHP objects to do the heavy
lifting. The bundle include the excellent framework [Bootstrap](https://getbootstrap.com/)
and some useful plugins.

<img src="https://raw.githubusercontent.com/webeweb/bootstrap-bundle/master/Resources/doc/screenshot_readme.png" alt="Bootstrap bundle" align="right" width="416"/>

Includes:

- [Bootstrap 3.4.1](https://getbootstrap.com/docs/3.4/)
- [Bootstrap 4.6.0](https://getbootstrap.com/docs/4.6/)
- [Bootstrap Colorpicker 2.5.1](https://farbelous.io/bootstrap-colorpicker/) (Bootstrap plug-in)
- [Bootstrap Datepicker 1.7.1](https://uxsolutions.github.io/bootstrap-datepicker/) (Bootstrap plug-in)
- [Bootstrap Daterangepicker 2.1.27](http://www.daterangepicker.com/) (Bootstrap plug-in)
- [Bootstrap Markdown 2.10.0](http://www.codingdrama.com/bootstrap-markdown/) (Bootstrap plug-in)
- [Bootstrap Notify 3.1.3](http://bootstrap-notify.remabledesigns.com/) (Bootstrap plug-in)
- [Bootstrap Select 1.12.4](https://silviomoreto.github.io/bootstrap-select/) (Bootstrap plug-in)
- [Bootstrap Slider 10.0.0](http://seiyria.com/bootstrap-slider/) (Bootstrap plug-in)
- [Bootstrap Social 5.1.1](https://lipis.github.io/bootstrap-social/) (Bootstrap plug-in)
- [Bootstrap Tagsinput 0.8.0](http://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples/) (Bootstrap plug-in)
- [Bootstrap Timepicker 0.5.2](http://jdewit.github.io/bootstrap-timepicker/) (Bootstrap plug-in)
- [Bootstrap WYSIWYG 0.3.3](http://bootstrap-wysiwyg.github.io/bootstrap3-wysiwyg/) (Bootstrap plug-in)
- [Handlebars 1.3.0](http://handlebarsjs.com/) (Bootstrap WYSIWYG dependency)
- [Moment.js 2.20.1](http://momentjs.com/) (Bootstrap Daterangepicker dependency)
- [Popper.js 1.15.0](https://popper.js.org/) (Bootstrap dependency)
- [Summernote 0.8.12](https://summernote.org/) (Bootstrap plug-in)
- [WYSIHTML 0.4.15](http://wysihtml.com/) (Bootstrap WYSIWYG dependency)

Provides:

- Button Twig extension
- Code Twig extension
- Grid Twig extension (only for Bootstrap 3)
- Typography Twig extension
- Alert Twig extension
- Badge Twig extension
- Button group Twig extension
- Glyphicon Twig extension
- Label Twig extension
- Progress bar Twig extension

If you like this package, pay me a beer (or a coffee)
[![paypal.me](https://img.shields.io/badge/paypal.me-webeweb-0070ba.svg?style=flat-square&logo=paypal)](https://www.paypal.me/webeweb)

## Compatibility

[![PHP](https://img.shields.io/packagist/php-v/webeweb/bootstrap-bundle.svg?style=flat-square)](http://php.net)
[![Symfony](https://img.shields.io/badge/symfony-%5E3.4%7C%5E4.0-brightness.svg?style=flat-square)](https://symfony.com)

## Installation

Open a command console, enter your project directory and execute the following
command to download the latest stable version of this package:

```bash
$ composer require webeweb/bootstrap-bundle
```

This command requires you to have Composer installed globally, as explained in
the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the
Composer documentation.

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
    public function registerBundles() {
        $bundles = [
            // ...
            new WBW\Bundle\BootstrapBundle\WBWBootstrapBundle(),
            new WBW\Bundle\CoreBundle\WBWCoreBundle(),
        ];

        // ...

        return $bundles;
    }
```

Once the bundle is added then do:

```bash
$ php bin/console wbw:core:unzip-assets
$ php bin/console assets:install
```

## Usage

Read the [documentation](Resources/doc/index.md).

## Testing

To test the package, is better to clone this repository on your computer.
Open a command console and execute the following commands to download the latest
stable version of this package:

```bash
$ git clone https://github.com/webeweb/bootstrap-bundle.git
$ cd bootstrap-bundle
$ composer install
```

Once all required libraries are installed then do:

```bash
$ vendor/bin/phpunit
```

## License

`bootstrap-bundle` is released under the MIT License. See the bundled [LICENSE](LICENSE)
file for details.

## Donate

If you like this work, please consider donating at
[![paypal.me](https://img.shields.io/badge/paypal.me-webeweb-0070ba.svg?style=flat-square&logo=paypal)](https://www.paypal.me/webeweb)
