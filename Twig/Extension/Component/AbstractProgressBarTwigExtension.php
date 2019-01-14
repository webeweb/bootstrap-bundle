<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Component;

use Twig_Environment;
use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Abstract progress bar Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractProgressBarTwigExtension extends AbstractTwigExtension {

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     */
    protected function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Displays a Bootstrap progress bar.
     *
     * @param string $content The content.
     * @param int $value The value.
     * @param int $min The min.
     * @param int $max The max.
     * @param bool $striped Striped ?
     * @param bool $animated Animated ?
     * @param string $class The class.
     * @return string Returns the Bootstrap progress bar.
     */
    protected function bootstrapProgressBar($content, $value, $min, $max, $striped, $animated, $class = null) {

        // Initialize the template.
        $span = static::coreHTMLElement("span", $value . "%", ["class" => "sr-only"]);

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]         = ["progress-bar", $class];
        $attributes["class"][]       = true === $striped ? "progress-bar-striped" : null;
        $attributes["class"][]       = true === $animated ? "active" : null;
        $attributes["style"]         = "width: " . $value . "%;";
        $attributes["role"]          = "progressbar";
        $attributes["aria-valuenow"] = $value;
        $attributes["aria-valuemin"] = $min;
        $attributes["aria-valuemax"] = $max . "%";

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : $span;

        // Initialize the template.
        $div = static::coreHTMLElement("div", $innerHTML, $attributes);

        // Return the HTML.
        return static::coreHTMLElement("div", $div, ["class" => "progress"]);
    }
}
