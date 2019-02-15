<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\CSS;

use WBW\Bundle\BootstrapBundle\Button\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Button\ButtonRenderer;
use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\RendererTwigExtension;

/**
 * Abstract button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 * @abstract
 */
abstract class AbstractButtonTwigExtension extends AbstractTwigExtension {

    /**
     * Displays a Bootstrap button.
     *
     * @param ButtonInterface $button The button.
     * @param string $icon The icon.
     * @return string Returns the Bootstrap button.
     */
    protected function bootstrapButton(ButtonInterface $button, $icon) {

        $attributes = [];

        $attributes["class"]          = ["btn", ButtonRenderer::renderType($button)];
        $attributes["class"][]        = ButtonRenderer::renderBlock($button);
        $attributes["class"][]        = ButtonRenderer::renderSize($button);
        $attributes["class"][]        = ButtonRenderer::renderActive($button);
        $attributes["title"]          = ButtonRenderer::renderTitle($button);
        $attributes["type"]           = "button";
        $attributes["data-toggle"]    = ButtonRenderer::renderDataToggle($button);
        $attributes["data-placement"] = ButtonRenderer::renderDataPLacement($button);
        $attributes["disabled"]       = ButtonRenderer::renderDisabled($button);

        $glyphicon = null !== $icon ? RendererTwigExtension::renderIcon($this->getTwigEnvironment(), $icon) : "";
        $innerHTML = ButtonRenderer::renderContent($button);

        return static::coreHTMLElement("button", implode(" ", [$glyphicon, $innerHTML]), $attributes);
    }
}
