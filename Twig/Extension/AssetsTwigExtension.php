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
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\IconTwigExtension;
use WBW\Bundle\CoreBundle\Twig\Extension\AssetsTwigExtension as BaseTwigExtension;

/**
 * Assets Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension
 */
class AssetsTwigExtension extends BaseTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.assets";

    /**
     * {@inheritDoc}
     */
    public static function renderIcon(Environment $twigEnvironment, ?string $name, string $style = null): ?string {

        // Determines the handler.
        $handler = explode(":", $name);
        if (1 === count($handler)) {
            array_unshift($handler, "g");
        }
        if (2 !== count($handler)) {
            return null;
        }

        switch ($handler[0]) {

            case "b": // Bootstrap
            case "bi": // Bootstrap icons
                $output = (new IconTwigExtension($twigEnvironment))->renderIcon($handler[1], $style);
                break;

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
