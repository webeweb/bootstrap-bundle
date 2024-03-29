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

use WBW\Bundle\BootstrapBundle\Assets\AlertInterface;
use WBW\Bundle\BootstrapBundle\Renderer\Assets\AlertRenderer;
use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Abstract alert Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractAlertTwigExtension extends AbstractTwigExtension {

    /**
     * Display a Bootstrap alert.
     *
     * @param AlertInterface $alert The alert.
     * @return string Returns the Bootstrap alert.
     */
    protected function bootstrapAlert(AlertInterface $alert): string {

        $span   = static::coreHtmlElement("span", "&times;", ["aria-hidden" => "true"]);
        $button = static::coreHtmlElement("button", $span, [
            "class"        => "close",
            "type"         => "button",
            "data-dismiss" => "alert",
            "aria-label"   => "Close",
        ]);

        $attributes = [
            "class" => [
                "alert",
                AlertRenderer::renderType($alert),
                AlertRenderer::renderDismissible($alert),
            ],
            "role"  => "alert",
        ];

        $innerHTML = [
            (true === $alert->getDismissible() ? $button : ""),
            AlertRenderer::renderContent($alert),
        ];

        return static::coreHtmlElement("div", implode("", $innerHTML), $attributes);
    }
}
