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
     * @param string $style The Font Awesome style.
     * @param string $name The Font Awesome name.
     * @param string $size The Font Awesome size.
     * @param boolean $fixedWidth Fixed width ?
     * @param boolean $bordered Bordered ?
     * @param string $pull The Font Awesome pull.
     * @param string $anime The Font Awesome animation.
     * @return string Returns the Font Awesome icon.
     */
    protected function fontAwesomeIcon($style, $name, $size, $fixedWidth, $bordered, $pull, $anime) {

        // Initialize the values.
        $styles   = ["", "s", "r", "l", "b"];
        $sizes    = ["xs", "sm", "lg", "2x", "3x", "4x", "5x", "6x", "7x", "8x", "9x", "10x"];
        $pulls    = ["left", "right"];
        $animates = ["spin", "pulse"];

        // Initialize the template.
        $template = "<i %attributes%></i>";

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"][] = true === in_array($style, $styles) ? "fa" . $style : "fa";
        $attributes["class"][] = null !== $name ? "fa-" . $name : null;
        $attributes["class"][] = true === in_array($size, $sizes) ? "fa-" . $size : null;
        $attributes["class"][] = true === $fixedWidth ? "fa-fw" : null;
        $attributes["class"][] = true === $bordered ? "fa-border" : null;
        $attributes["class"][] = true === in_array($pull, $pulls) ? "fa-pull-" . $pull : null;
        $attributes["class"][] = true === in_array($anime, $animates) ? "fa-" . $anime : null;

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%"], [StringUtility::parseArray($attributes)]);
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
        $template = ["$('%selector%').inputmask(\"%mask%\",%arguments%);"];
        if (true === $scriptTag) {
            array_unshift($template, "<script type=\"text/javascript\">");
            array_push($template, "</script>");
        }

        // Return the HTML.
        return StringUtility::replace(implode("\n", $template), ["%selector%", "%mask%", "%arguments%"], [$selector, $mask, json_encode($options)]);
    }

}
