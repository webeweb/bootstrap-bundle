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

use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\GlyphiconComponentTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\FontAwesomePluginTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\MaterialDesignIconicFontPluginTwigExtension;

/**
 * Factory Bootstrap Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension
 */
class FactoryBootstrapTwigExtension {

    /**
     * Displays a Bootstrap icon.
     *
     * @param string $name The icon name.
     * @return string Returns the Bootstrap icon.
     */
    public static function bootstrapIcon($name) {

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
                $output = (new GlyphiconComponentTwigExtension())->bootstrapGlyphiconFunction(["name" => $handler[1]]);
                break;

            case "fa": // Font Awesome
                $output = (new FontAwesomePluginTwigExtension())->fontAwesomeIconFunction(["name" => $handler[1]]);
                break;

            case "zmdi": // Material Design Iconic Font
                $output = (new MaterialDesignIconicFontPluginTwigExtension())->materialDesignIconicFontIconFunction(["name" => $handler[1]]);
                break;
        }

        // Return the output.
        return $output;
    }

}
