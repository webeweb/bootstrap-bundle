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

use WBW\Bundle\BootstrapBundle\Asset\Button\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Asset\Button\ButtonRenderer;
use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\RendererTwigExtension;

/**
 * Abstract button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 * @abstract
 */
abstract class AbstractButtonTwigExtension extends AbstractTwigExtension {

    /**
     * Displays a Bootstrap button.
     *
     * @param ButtonInterface $button The button.
     * @param string|null $icon The icon.
     * @return string Returns the Bootstrap button.
     */
    protected function bootstrapButton(ButtonInterface $button, ?string $icon): string {

        $attributes = [
            "class"          => [
                "btn",
                ButtonRenderer::renderType($button),
                ButtonRenderer::renderBlock($button),
                ButtonRenderer::renderSize($button),
                ButtonRenderer::renderActive($button),
            ],
            "title"          => ButtonRenderer::renderTitle($button),
            "type"           => "button",
            "data-toggle"    => ButtonRenderer::renderDataToggle($button),
            "data-placement" => ButtonRenderer::renderDataPLacement($button),
            "disabled"       => ButtonRenderer::renderDisabled($button),
        ];

        $glyphicon = null !== $icon ? RendererTwigExtension::renderIcon($this->getTwigEnvironment(), $icon) : "";
        $innerHTML = ButtonRenderer::renderContent($button);

        return static::coreHTMLElement("button", implode(" ", [$glyphicon, $innerHTML]), $attributes);
    }
}
