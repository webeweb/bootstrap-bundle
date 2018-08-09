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
 * Abstract alert Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractAlertTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap alert.
     *
     * @param string $content The content.
     * @param bool $dismissible Dismissible ?
     * @param string $class The class.
     * @return string Returns the Bootstrap alert.
     */
    protected function bootstrapAlert($content, $dismissible, $class) {

        // Initialize the templates.
        $span   = self::bootstrapHTMLElement("span", "&times;", ["aria-hidden" => "true"]);
        $button = self::bootstrapHTMLElement("button", $span, ["class" => "close", "type" => "button", "data-dismiss" => "alert", "aria-label" => "Close"]);

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]   = ["alert", $class];
        $attributes["class"][] = true === $dismissible ? "alert-dismissible" : null;
        $attributes["role"]    = ["alert"];

        // Initialize the parameters.
        $innerHTML = (true === $dismissible ? $button : "") . (null !== $content ? $content : "");

        // Return the HTML.
        return self::bootstrapHTMLElement("div", $innerHTML, $attributes);
    }

}
