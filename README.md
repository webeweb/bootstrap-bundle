bootstrap-bundle
================

[![Build Status](https://travis-ci.org/webeweb/bootstrap-bundle.svg?branch=master)](https://travis-ci.org/webeweb/bootstrap-bundle) [![Coverage Status](https://coveralls.io/repos/github/webeweb/bootstrap-bundle/badge.svg?branch=master)](https://coveralls.io/github/webeweb/bootstrap-bundle?branch=master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/webeweb/bootstrap-bundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/webeweb/bootstrap-bundle/?branch=master) [![Latest Stable Version](https://poser.pugx.org/webeweb/bootstrap-bundle/v/stable)](https://packagist.org/packages/webeweb/bootstrap-bundle) [![Latest Unstable Version](https://poser.pugx.org/webeweb/bootstrap-bundle/v/unstable)](https://packagist.org/packages/webeweb/bootstrap-bundle) [![License](https://poser.pugx.org/webeweb/bootstrap-bundle/license)](https://packagist.org/packages/webeweb/bootstrap-bundle) [![composer.lock](https://poser.pugx.org/webeweb/bootstrap-bundle/composerlock)](https://packagist.org/packages/webeweb/bootstrap-bundle)

Integrate Bootstrap theme with Symfony2.

> IMPORTANT NOTICE: This package is still under development. Any changes will be
> done without prior notice to consumers of this package. Of course this code
> will become stable at a certain point, but for now, use at your own risk.

Includes :

- [jQuery 3.2.1](http://jquery.com/) (Bootstrap dependency)
- [Bootstrap 3.3.7](https://getbootstrap.com/docs/3.3/)
- [Bootstrap Colorpicker 2.5.1](https://github.com/farbelous/bootstrap-colorpicker/)
- [Bootstrap Notify 3.1.3](https://github.com/mouse0270/bootstrap-notify)
- [Bootstrap Select 1.12.4](https://silviomoreto.github.io/bootstrap-select/)
- [Bootstrap Tagsinput 0.8.0](https://github.com/bootstrap-tagsinput/bootstrap-tagsinput/)
- [Bootstrap WYSIWYG 0.3.3](https://github.com/bootstrap-wysiwyg/bootstrap3-wysiwyg/)
- [Handlebars 1.3.0](http://handlebarsjs.com/) (Bootstrap WYSIWYG dependency)
- [WYSIHTML 0.4.15](https://github.com/Edicy/wysihtml5/) (Bootstrap WYSIWYG dependency)

---

## Compatibility

[![PHP](https://img.shields.io/badge/PHP-%5E5.6%7C%5E7.0-blue.svg)](http://php.net) [![HHVM](https://img.shields.io/badge/HHVM-ready-orange.svg)](https://hhvm.com/) [![Symfony](https://img.shields.io/badge/Symfony-%5E2.6%7C%5E3.0-brightgreen.svg)](https://symfony.com)

---

## Installation

Open a command console, enter your project directory and execute the following
command to download the latest stable version of this package:

```bash
$ composer require webeweb/bootstrap-bundle "~1.0@dev"
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the
Composer documentation.

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
	public function registerBundles() {
		$bundles = [
			// ...
			new WBW\Bundle\BootstrapBundle\BootstrapBundle(),
		];

		// ...

		return $bundles;
    }
```

Once the bundle is added then do:

```bash
$ php bin/console assets:install
```

---

## Testing

To test the package, is better to clone this repository on your computer.
Open a command console and execute the following commands to download the latest
stable version of this package:

```bash
$ mkdir bootstrap-bundle
$ cd bootstrap-bundle
$ git clone git@github.com:webeweb/bootstrap-bundle.git .
$ composer install
```

Once all required libraries are installed then do:

```bash
$ vendor/bin/phpunit
```

---

## License

bootstrap-bundle is released under the LGPL License. See the bundled
[LICENSE](LICENSE) file for details.
