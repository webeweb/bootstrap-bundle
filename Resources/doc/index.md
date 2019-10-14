DOCUMENTATION
=============

### 1) Configuration

Add the following lines into the `app/config/config.yml` file of your project:

```yaml
wbw_bootstrap:
    version: 4
    locales:
        bootstrap_markdown: "fr"
        bootstrap_wysiwyg:  "fr-FR"
        summernote:         "fr-FR"
    plugins:
        - "bootstrap_colorpicker"
        - "bootstrap_datepicker"
        - "bootstrap_daterangepicker"
        - "bootstrap_markdown"
        - "bootstrap_notify"
        - "bootstrap_select"
        - "bootstrap_slider"
        - "bootstrap_social"
        - "bootstrap_tagsinput"
        - "bootstrap_timepicker"
        - "bootstrap_wysiwyg"
        - "summernote"
```

The example below is complete and you can adapt this with your needs.

The different parameters (optionals) are explained below:

| Parameter          | Type     | Description                                                 |
|:-------------------|:---------|:------------------------------------------------------------|
| version            | int      | The Bootstrap version (by default: 4)                       |
| bootstrap_markdown | string   | The Bootstrap Markdown plug-in locale (by default: "en")    |
| bootstrap_wysiwyg  | string   | The Bootstrap WYSISYG plug-in locale (by default: "en-US")  | 
| summernote         | string   | The Summernote plug-in locale (by default: "en-US")         |
| plugins            | string[] | The plugins list                                            |

Available parameters (locales and plug-ins lists) can be found into [assets.yml](../config/assets.yml) 

### 2) Template

```html
{# AppBundle/Resources/views/layout.html.twig #}
{% extends "@WBWBootstrap/layout.html.twig" %}

{% block bootstrapFormTheme %}
    {# form theme #}
{% endblock %}

{% block bootstrapFavicons %}
    {# favicons #}
{% endblock %}

{% block bootstrapStylesheets %}
    {{ parent() }}
    {# stylesheets #}
{% endblock %}

{% block bootstrapTitle %}{# title #}{% endblock %}

{% block bootstrapAttributes %}{# body attributes #}{% endblock %}

{% block bootstrapContent %}
    {{ parent() }}
    {# content #}
{% endblock %}

{% block bootstrapJavascripts %}
    {{ parent() }}
    {# javascripts #}
{% endblock %}
```

### 3) Twig extensions

Redaction in progress...
