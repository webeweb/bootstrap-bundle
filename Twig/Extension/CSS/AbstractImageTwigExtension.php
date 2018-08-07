<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\CSS;

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;
use WBW\Library\Core\Helper\Argument\StringHelper;

/**
 * Abstract image Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 * @abstract
 */
abstract class AbstractImageTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap image.
     *
     * @param string $src The source
     * @param string $alt The alternative text.
     * @param string $width The width.
     * @param string $height The height.
     * @param string $class The class.
     * @param string $usemap The usemap.
     * @return string Returns the Bootstrap image.
     */
    protected function bootstrapImage($src, $alt, $width, $height, $class, $usemap) {

        // Initialize the template.
        $template = "<img %attributes%/>";

        // Initialize the attributes.
        $attributes = [];

        $attributes["src"]    = $src;
        $attributes["alt"]    = $alt;
        $attributes["width"]  = $width;
        $attributes["height"] = $height;
        $attributes["class"]  = $class;
        $attributes["usemap"] = $usemap;

        // Return the HTML.
        return StringHelper::replace($template, ["%attributes%"], [StringHelper::parseArray($attributes)]);
    }

}
