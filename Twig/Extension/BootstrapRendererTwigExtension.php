<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension;

use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\GlyphiconTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\FontAwesomePluginTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\MaterialDesignIconicFontPluginTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\MeteoconsPluginTwigExtension;

/**
 * Bootstrap renderer Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension
 */
class BootstrapRendererTwigExtension {

    /**
     * Render an icon.
     *
     * @param string $name The icon name.
     * @param string $style The icon style.
     * @return string Returns a rendered icon.
     */
    public static function renderIcon($name, $style = null) {

        // Determines the handler.
        $handler = explode(":", $name);

        // Get and check the parse count.
        $parseNb = count($handler);
        if ($parseNb < 1 || 2 < $parseNb) {
            return "";
        }
        if (1 === count($handler)) {
            $handler = ["g", $name];
        }

        // Initialize the output.
        $output = "";

        // Swith into handler.
        switch ($handler[0]) {

            case "b": // Bootstrap
            case "g": // Glyphicon
                $output = (new GlyphiconTwigExtension())->renderIcon($handler[1], $style);
                break;

            case "fa": // Font Awesome
                $output = (new FontAwesomePluginTwigExtension())->renderIcon($handler[1], $style);
                break;

            case "mc": // Meteocons
                $output = (new MeteoconsPluginTwigExtension())->renderIcon($handler[1], $style);
                break;

            case "zmdi": // Material Design Iconic Font
                $output = (new MaterialDesignIconicFontPluginTwigExtension())->renderIcon($handler[1], $style);
                break;
        }

        // Return the output.
        return $output;
    }

}
