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
use WBW\Library\Core\Helper\Argument\StringHelper;

/**
 * Abstract Material Design Iconic Font Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin
 * @abstract
 */
abstract class AbstractMaterialDesignIconicFontTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Material Design Iconic Font icon.
     *
     * @param string $name The name.
     * @param string $size The size.
     * @param boolean $fixedWidth Fixed width ?
     * @param string $border The border
     * @param string $pull The pull.
     * @param string $spin The spin.
     * @param string $rotate The rotate.
     * @param string $flip The flip.
     * @param string $style The style.
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
     * Displays a Material Design Iconic Font list.
     *
     * @param array|string $items The items.
     * @return string Returns the Material Design Iconic Font list.
     */
    protected function materialDesignIconicFontList($items) {

        // Initialize the parameters.
        $innerHTML = true === is_array($items) ? implode("\n", $items) : $items;

        // Return the HTML.
        return self::bootstrapHTMLElement("ul", $innerHTML, ["class" => "zmdi-hc-ul"]);
    }

    /**
     * Displays a Material Design Iconic Font list icon.
     *
     * @param string $icon The icon.
     * @param string $content The content.
     * @return string Returns the Material Design Iconic Font list icon.
     */
    protected function materialDesignIconicFontListIcon($icon, $content) {

        // Initialize the parameters.
        $glyphicon = null !== $icon ? StringHelper::replace($icon, ["class=\"zmdi"], ["class=\"zmdi-hc-li zmdi"]) : "";
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return self::bootstrapHTMLElement("li", $glyphicon . $innerHTML);
    }

}
