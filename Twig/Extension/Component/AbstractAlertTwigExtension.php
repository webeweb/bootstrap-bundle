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
 * Abstract alert Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractAlertTwigExtension extends AbstractTwigExtension {

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     */
    protected function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
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

        $span   = static::coreHTMLElement("span", "&times;", ["aria-hidden" => "true"]);
        $button = static::coreHTMLElement("button", $span, ["class" => "close", "type" => "button", "data-dismiss" => "alert", "aria-label" => "Close"]);

        $attributes = [];

        $attributes["class"]   = ["alert", $class];
        $attributes["class"][] = true === $dismissible ? "alert-dismissible" : null;
        $attributes["role"]    = ["alert"];

        $innerHTML = (true === $dismissible ? $button : "") . (null !== $content ? $content : "");

        return static::coreHTMLElement("div", $innerHTML, $attributes);
    }
}
