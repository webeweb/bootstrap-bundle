<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Component;

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;

/**
 * Abstract progress bar Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractProgressBarTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap progress bar.
     *
     * @param string $content The progress bar content.
     * @param integer $value The progress bar value.
     * @param integer $min The progress bar min.
     * @param integer $max The progress bar max.
     * @param boolean $striped Progress bar striped ?
     * @param boolean $animated Progress bar animated ?
     * @param string $class The progress bar class.
     * @return string Returns the Bootstrap progress bar.
     */
    protected function bootstrapProgressBar($content, $value, $min, $max, $striped, $animated, $class = null) {

        // Initialize the template.
        $span = self::bootstrapHTMLElement("span", $value . "%", ["class" => "sr-only"]);

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
        $div = self::bootstrapHTMLElement("div", $innerHTML, $attributes);

        // Return the HTML.
        return self::bootstrapHTMLElement("div", $div, ["class" => "progress"]);
    }

}
