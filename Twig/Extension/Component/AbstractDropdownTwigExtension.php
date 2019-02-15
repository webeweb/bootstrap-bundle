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

use WBW\Bundle\BootstrapBundle\BootstrapBundle;
use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Library\Core\Argument\StringHelper;

/**
 * Abstract dropdown Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractDropdownTwigExtension extends AbstractTwigExtension {

    /**
     * Displays a Bootstrap dropdown "Button".
     *
     * @param string $content The content.
     * @param string $id The id.
     * @param bool $expanded Expanded ?
     * @param string $class The class.
     * @return string Returns the Bootstrap dropdown "Button".
     */
    protected function bootstrapDropdownButton($content, $id, $expanded, $class) {

        $classes = BootstrapBundle::getBootstrapConstants();

        $attributes = [];

        $attributes["class"][]         = "btn";
        $attributes["class"][]         = true === in_array($class, $classes) ? "btn-" . $class : "btn-default";
        $attributes["class"][]         = "dropdown-toggle";
        $attributes["type"][]          = "button";
        $attributes["id"][]            = null !== $id ? $id : "";
        $attributes["data-toggle"][]   = "dropdown";
        $attributes["aria-haspopup"][] = "true";
        $attributes["aria-expanded"][] = StringHelper::parseBoolean($expanded);

        $innerHTML = (null !== $content ? $content : "") . "<span class=\"caret\"></span>";

        return static::coreHTMLElement("button", $innerHTML, $attributes);
    }

    /**
     * Displays a Bootstrap dropdown "Divider".
     *
     * @return string Returns the Bootstrap dropdown "Divider".
     */
    protected function bootstrapDropdownDivider() {

        $attributes = [];

        $attributes["class"] = "divider";
        $attributes["role"]  = "separator";

        return static::coreHTMLElement("li", null, $attributes);
    }

    /**
     * Displays a Bootstrap dropdown "Header".
     *
     * @param string $content The content.
     * @return string Returns the Bootstrap dropdown "Header".
     */
    protected function bootstrapDropdownHeader($content) {

        $attributes = [];

        $attributes["class"] = "dropdown-header";

        return static::coreHTMLElement("li", $content, $attributes);
    }
}
