bootstrap-bundle
================

[![Build Status](https://img.shields.io/github/actions/workflow/status/webeweb/bootstrap-bundle/build.yml?style=flat-square)](https://github.com/webeweb/bootstrap-bundle/actions)
[![Coverage Status](https://img.shields.io/coveralls/github/webeweb/bootstrap-bundle/master.svg?style=flat-square)](https://coveralls.io/github/webeweb/bootstrap-bundle?branch=master)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/quality/g/webeweb/bootstrap-bundle/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/webeweb/bootstrap-bundle/?branch=master)
[![Latest Stable Version](https://img.shields.io/packagist/v/webeweb/bootstrap-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/bootstrap-bundle)
[![License](https://img.shields.io/packagist/l/webeweb/bootstrap-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/bootstrap-bundle)
[![composer.lock](https://img.shields.io/badge/.lock-uncommited-important.svg?style=flat-square)](https://packagist.org/packages/webeweb/bootstrap-bundle)

Integrate Bootstrap theme with Symfony 4 and more.

`bootstrap-bundle` eases the use of Bootstrap to display components in your
Symfony application by providing Twig extensions and PHP objects to do the heavy
lifting. The bundle include the excellent framework [Bootstrap](https://getbootstrap.com/)
and some useful plugins.

<img src="https://raw.githubusercontent.com/webeweb/bootstrap-bundle/master/Resources/doc/screenshot_readme.png" alt="Bootstrap bundle" align="right" width="416"/>

Includes:

- [Bootstrap 3.4.1](https://getbootstrap.com/docs/3.4)
- [Bootstrap 4.6.2](https://getbootstrap.com/docs/4.6)
- [Bootstrap 5.2.2](https://getbootstrap.com/docs/5.2)
- [Bootstrap Colorpicker 2.5.3](https://github.com/itsjavi/bootstrap-colorpicker) (Bootstrap plug-in)
- [Bootstrap Datepicker 1.9.0](https://github.com/uxsolutions/bootstrap-datepicker) (Bootstrap plug-in)
- [Bootstrap Daterangepicker 2.1.27](https://github.com/dangrossman/daterangepicker) (Bootstrap plug-in)
- [Bootstrap Icons 1.9.1](https://icons.getbootstrap.com)
- [Bootstrap Markdown 2.10.0](https://github.com/toopay/bootstrap-markdown) (Bootstrap plug-in)
- [Bootstrap Notify 3.1.3](https://github.com/mouse0270/bootstrap-growl) (Bootstrap plug-in)
- [Bootstrap Select 1.12.4](https://github.com/silviomoreto/bootstrap-select) (Bootstrap plug-in)
- [Bootstrap Slider 10.0.0](https://github.com/seiyria/bootstrap-slider) (Bootstrap plug-in)
- [Bootstrap Social 5.1.1](https://github.com/lipis/bootstrap-social) (Bootstrap plug-in)
- [Bootstrap Tagsinput 0.8.0](https://github.com/bootstrap-tagsinput/bootstrap-tagsinput) (Bootstrap plug-in)
- [Bootstrap Timepicker 0.5.2](https://github.com/jdewit/bootstrap-timepicker) (Bootstrap plug-in)
- [Bootstrap WYSIWYG 0.3.3](https://github.com/Waxolunist/bootstrap3-wysihtml5-bower) (Bootstrap plug-in)
- [Handlebars 1.3.0](https://github.com/handlebars-lang/handlebars.js) (Bootstrap WYSIWYG dependency)
- [Moment.js 2.20.1](https://github.com/moment/moment) (Bootstrap Daterangepicker dependency)
- [Popper.js 1.15.0](https://github.com/popperjs/popper-core) (Bootstrap dependency)
- [Summernote 0.8.20](https://github.com/summernote/summernote) (Bootstrap plug-in)
- [WYSIHTML 0.4.15](https://github.com/Voog/wysihtml) (Bootstrap WYSIWYG dependency)

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
[![Symfony](https://img.shields.io/badge/symfony-%5E4.4%7C%5E5.0%7C%5E6.0-brightness.svg?style=flat-square)](https://symfony.com)

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
