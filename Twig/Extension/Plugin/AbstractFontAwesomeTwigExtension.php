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

/**
 * Abstract Font Awesome Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin
 * @abstract
 */
abstract class AbstractFontAwesomeTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Font Awesome icon.
     *
     * @param string $font The font.
     * @param string $name The name.
     * @param string $size The size.
     * @param bool $fixedWidth Fixed width ?
     * @param bool $bordered Bordered ?
     * @param string $pull The pull.
     * @param string $anime The animation.
     * @param string $style The style.
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
     * Displays a Font Awesome list.
     *
     * @param array|string $items The items.
     * @return string Returns the Font Awesome list.
     */
    protected function fontAwesomeList($items) {

        // Initialize the parameters.
        $innerHTML = true === is_array($items) ? implode("\n", $items) : $items;

        // Return the HTML.
        return self::bootstrapHTMLElement("ul", $innerHTML, ["class" => "fa-ul"]);
    }

    /**
     * Displays a Font Awesome list icon.
     *
     * @param string $icon The icon.
     * @param string $content The content.
     * @return string Returns the Font Awesome list icon.
     */
    protected function fontAwesomeListIcon($icon, $content) {

        // Initialize the parameters.
        $glyphicon = self::bootstrapHTMLElement("span", $icon, ["class" => "fa-li"]);
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return self::bootstrapHTMLElement("li", $glyphicon . $innerHTML);
    }

}
