<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin;

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;
use WBW\Library\Core\Utility\Argument\StringUtility;

/**
 * Abstract plugin Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin
 * @abstract
 */
abstract class AbstractPluginTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Displays a Font Awesome icon.
     *
     * @param string $font The Font Awesome font.
     * @param string $name The Font Awesome name.
     * @param string $size The Font Awesome size.
     * @param boolean $fixedWidth Fixed width ?
     * @param boolean $bordered Bordered ?
     * @param string $pull The Font Awesome pull.
     * @param string $anime The Font Awesome animation.
     * @param string $style The Font Awesome style.
     * @return string Returns the Font Awesome icon.
     */
    protected function fontAwesomeIcon($font, $name, $size, $fixedWidth, $bordered, $pull, $anime, $style) {

        // Initialize the values.
        $fonts    = ["", "s", "r", "l", "b"];
        $sizes    = ["xs", "sm", "lg", "2x", "3x", "4x", "5x", "6x", "7x", "8x", "9x", "10x"];
        $pulls    = ["left", "right"];
        $animates = ["spin", "pulse"];

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"][] = true === in_array($font, $fonts) ? "fa" . $font : "fa";
        $attributes["class"][] = null !== $name ? "fa-" . $name : null;
        $attributes["class"][] = true === in_array($size, $sizes) ? "fa-" . $size : null;
        $attributes["class"][] = true === $fixedWidth ? "fa-fw" : null;
        $attributes["class"][] = true === $bordered ? "fa-border" : null;
        $attributes["class"][] = true === in_array($pull, $pulls) ? "fa-pull-" . $pull : null;
        $attributes["class"][] = true === in_array($anime, $animates) ? "fa-" . $anime : null;
        $attributes["style"]   = $style;

        // Return the HTML.
        return self::bootstrapHTMLElement("i", null, $attributes);
    }

    /**
     * Displays a jQuery input mask.
     *
     * @param string $selector The input mask selector.
     * @param string $mask The input mask.
     * @param boolean $scriptTag Script tag ?
     * @param array $options The input mask options.
     * @return string Returns the jQuery input mask.
     */
    protected function jQueryInputMask($selector, $mask, $scriptTag, array $options) {

        // Initialize the template.
        $template = "$('%selector%').inputmask(\"%mask%\",%arguments%);";

        // Initialize the parameters.
        $innerHTML = StringUtility::replace($template, ["%selector%", "%mask%", "%arguments%"], [$selector, $mask, json_encode($options)]);

        // Return the HTML
        if (true === $scriptTag) {
            return self::bootstrapHTMLElement("script", "\n" . $innerHTML . "\n", ["type" => "text/javascript"]);
        }
        return $innerHTML;
    }

    /**
     * Displays a Material Design Iconic Font icon.
     *
     * @param string $name The Material Design Iconic Font name.
     * @param string $size The Material Design Iconic Font size.
     * @param boolean $fixedWidth Fixed width ?
     * @param string $border The Material Design Iconic Font border
     * @param string $pull The Material Design Iconic Font pull.
     * @param string $spin The Material Design Iconic Font spin.
     * @param string $rotate The Material Design Iconic Font rotate.
     * @param string $flip The Material Design Iconic Font flip.
     * @param string $style The Material Design Iconic Font style.
     * @return string Returns the Material Design Iconic Font icon.
     */
    protected function materialDesignIconicFontIcon($name, $size, $fixedWidth, $border, $pull, $spin, $rotate, $flip, $style) {

        // Initialize the values.
        $sizes   = ["lg", "2x", "3x", "4x", "5x"];
        $borders = ["border", "border-circle"];
        $pulls   = ["left", "right"];
        $spins   = ["spin", "spin-reverse"];
        $rotates = ["90", "180", "270"];
        $flips   = ["horizontal", "vertical"];

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"][] = "zmdi";
        $attributes["class"][] = null !== $name ? "zmdi-" . $name : null;
        $attributes["class"][] = true === in_array($size, $sizes) ? "zmdi-hc-" . $size : null;
        $attributes["class"][] = true === $fixedWidth ? "zmdi-hc-fw" : null;
        $attributes["class"][] = true === in_array($border, $borders) ? "zmdi-hc-" . $border : null;
        $attributes["class"][] = true === in_array($pull, $pulls) ? "pull-" . $pull : null;
        $attributes["class"][] = true === in_array($spin, $spins) ? "zmdi-hc-" . $spin : null;
        $attributes["class"][] = true === in_array($rotate, $rotates) ? "zmdi-hc-rotate-" . $rotate : null;
        $attributes["class"][] = true === in_array($flip, $flips) ? "zmdi-hc-flip-" . $flip : null;
        $attributes["style"]   = $style;

        // Return the HTML.
        return self::bootstrapHTMLElement("i", null, $attributes);
    }

    /**
     * Displays a Meteocons icon.
     *
     * @param string $name The Meteocons name.
     * @param string $style The Meteocons style.
     * @return string Returns the Meteocons icon.
     */
    protected function meteoconsIcon($name, $style) {

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]          = "meteocons";
        $attributes["data-meteocons"] = $name;
        $attributes["style"]          = $style;

        // Return the HTML.
        return self::bootstrapHTMLElement("i", null, $attributes);
    }

}
