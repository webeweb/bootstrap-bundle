bootstrap-bundle
================

[![Build Status](https://travis-ci.org/webeweb/bootstrap-bundle.svg?branch=master)](https://travis-ci.org/webeweb/bootstrap-bundle)
[![Coverage Status](https://coveralls.io/repos/github/webeweb/bootstrap-bundle/badge.svg?branch=master)](https://coveralls.io/github/webeweb/bootstrap-bundle?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/webeweb/bootstrap-bundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/webeweb/bootstrap-bundle/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/webeweb/bootstrap-bundle/v/stable)](https://packagist.org/packages/webeweb/bootstrap-bundle)
[![Latest Unstable Version](https://poser.pugx.org/webeweb/bootstrap-bundle/v/unstable)](https://packagist.org/packages/webeweb/bootstrap-bundle)
[![License](https://poser.pugx.org/webeweb/bootstrap-bundle/license)](https://packagist.org/packages/webeweb/bootstrap-bundle)
[![composer.lock](https://poser.pugx.org/webeweb/bootstrap-bundle/composerlock)](https://packagist.org/packages/webeweb/bootstrap-bundle)

Integrate Bootstrap theme with Symfony 2 and more.

> IMPORTANT NOTICE: This package is still under development. Any changes will be
> done without prior notice to consumers of this package. Of course this code
> will become stable at a certain point, but for now, use at your own risk.

<img src="https://raw.githubusercontent.com/webeweb/bootstrap-bundle/master/Resources/doc/images/bootstrap-stack_1024x0860.png" alt="Bootstrap bundle" align="right" width="416"/>

Includes:

- [Animate.css 3.5.2](https://daneden.github.io/animate.css/)
- [Bootstrap 3.3.7](https://getbootstrap.com/docs/3.3/)
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
- [Font Awesome 5.3.1](https://fontawesome.com/)
- [Handlebars 1.3.0](http://handlebarsjs.com/) (Bootstrap WYSIWYG dependency)
- [jQuery 3.2.1](http://jquery.com/) (Bootstrap dependency)
- [jQuery EasyAutocomplete 1.3.4](http://www.easyautocomplete.com/) (jQuery plug-in)
- [jQuery InputMask 3.3.11](https://robinherbots.github.io/Inputmask/) (jQuery plug-in)
- [jQuery Select2 4.0.5](https://select2.org/) (jQuery plug-in)
- [Material Design Color Palette 1.1.0](http://zavoloklom.github.io/material-design-color-palette/)
- [Material Design Hierarchical Display 1.0.1](http://zavoloklom.github.io/material-design-hierarchical-display/)
- [Material Design Iconic Font 2.2.0](http://zavoloklom.github.io/material-design-iconic-font/)
- [Meteocons](http://www.alessioatzeni.com/meteocons/)
- [Moment.js 2.20.1](http://momentjs.com/) (Bootstrap Daterangepicker dependency)
- [SweetAlert 2.1.0](https://sweetalert.js.org/)
- [waitMe 1.19](http://vadimsva.github.io/waitMe/) (jQuery plug-in)
- [WYSIHTML 0.4.15](http://wysihtml.com/) (Bootstrap WYSIWYG dependency)

---

## Compatibility

[![PHP](https://img.shields.io/badge/PHP-%5E5.6%7C%5E7.0-blue.svg)](http://php.net)
[![Symfony](https://img.shields.io/badge/Symfony-%5E2.6%7C%5E3.0%7C%5E4.0-brightgreen.svg)](https://symfony.com)

---

## Installation

Open a command console, enter your project directory and execute the following
command to download the latest stable version of this package:

```bash
$ composer require webeweb/bootstrap-bundle "^1.0"
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
            new WBW\Bundle\CoreBundle\CoreBundle(),
            new WBW\Bundle\BootstrapBundle\BootstrapBundle(),
            new WBW\Bundle\SyntaxHighlighterBundle\SyntaxHighlighterBundle(),
        ];

        // ...

        return $bundles;
    }
```

Once the bundle is added then do:

```bash
$ php bin/console assets:install
```

Add the wiki routing into the `app/config/routing_dev.yml` file of your project:

```yaml
# ...
_bootstrap_wiki:
    prefix:   "/bootstrap"
    resource: "@BootstrapBundle/Resources/config/routing/wiki.yml"
```

Open your browser at http://localhost:8000/app_dev.php/bootstrap/wiki/twig-extension/code/basic-block

---

## Usage

### Template

```html
{# AppBundle/Resources/views/layout.html.twig #}
{% extends "@Bootstrap/layout.html.twig" %}

{% block bootstrapFormTheme %}
    {# your form theme #}
{% endblock %}

{% block bootstrapHeadFavicon %}
    {# your favicons #}
{% endblock %}

{% block bootstrapHeadStyles %}
    {{ parent() }}
    {# your styles #}
{% endblock %}

{% block bootstrapHeadTitle %}{{ parent() }}{# your title #}{% endblock %}

{% block bootstrapBodyClasses %}{{ parent() }}{# your attributes #}{% endblock %}

{% block bootstrapBodyContent %}
    {{ parent() }}
    {# your content #}
{% endblock %}

{% block bootstrapBodyScripts %}
    {{ parent() }}
    {# your scripts #}
{% endblock %}
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

`bootstrap-bundle` is released under the LGPL License. See the bundled [LICENSE](LICENSE)
file for details.
