DOCUMENTATION
=============

### Template with Bootstrap 3

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

### Template with Bootstrap 4

```html
{# AppBundle/Resources/views/layout.html.twig #}
{% extends "@WBWBootstrap/layout4.html.twig" %}

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
