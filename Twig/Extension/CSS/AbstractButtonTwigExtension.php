<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\CSS;

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\BootstrapRendererTwigExtension;

/**
 * Abstract button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 * @abstract
 */
abstract class AbstractButtonTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap button.
     *
     * @param string $content The content.
     * @param string $title The title.
     * @param string $size The size.
     * @param bool $block Block ?
     * @param booelan $active Active ?
     * @param booelan $disable Disable ?
     * @param string $class The class.
     * @param string $icon The icon.
     * @return string Returns the Bootstrap button.
     */
    protected function bootstrapButton($content, $title, $size, $block, $active, $disable, $class, $icon) {

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]          = ["btn", $class];
        $attributes["class"][]        = true === $block ? "btn-block" : null;
        $attributes["class"][]        = true === in_array($size, ["lg", "sm", "xs"]) ? "btn-" . $size : null;
        $attributes["class"][]        = true === $active ? "active" : null;
        $attributes["title"]          = $title;
        $attributes["type"]           = "button";
        $attributes["data-toggle"]    = null !== $title ? "tooltip" : null;
        $attributes["data-placement"] = null !== $title ? "top" : null;
        $attributes["disabled"]       = true === $disable ? "disabled" : null;

        // Handle the parameters.
        $glyphicon = null !== $icon ? BootstrapRendererTwigExtension::renderIcon($icon) : "";
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return self::bootstrapHTMLElement("button", implode(" ", [$glyphicon, $innerHTML]), $attributes);
    }

}
