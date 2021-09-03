<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension;

use Twig\Environment;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\GlyphiconTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\RendererTwigExtension as BaseTwigExtension;

/**
 * Renderer Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension
 */
class RendererTwigExtension extends BaseTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.renderer";

    /**
     * Render an icon.
     *
     * @param Environment $twigEnvironment The twig environment.
     * @param string $name The icon name.
     * @param string|null $style The icon style.
     * @return string Returns a rendered icon.
     */
    public static function renderIcon(Environment $twigEnvironment, string $name, ?string $style = null): string {

        // Determines the handler.
        $handler = explode(":", $name);
        if (1 === count($handler)) {
            array_unshift($handler, "g");
        }
        if (2 !== count($handler)) {
            return "";
        }

        // Swith into handler.
        switch ($handler[0]) {

            case "b": // Bootstrap
            case "g": // Glyphicon
                $output = (new GlyphiconTwigExtension($twigEnvironment))->renderIcon($handler[1], $style);
                break;

            default:
                $output = parent::renderIcon($twigEnvironment, $name, $style);
                break;
        }

        return $output;
    }
}
