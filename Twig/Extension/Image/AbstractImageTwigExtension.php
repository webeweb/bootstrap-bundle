<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Image;

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;
use WBW\Library\Core\Utility\StringUtility;

/**
 * Abstract image Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Image
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
     * @param string $src The image source
     * @param string $alt The image alternative.
     * @param string $width The image width.
     * @param string $height The image height.
     * @param string $class The image class.
     * @return string Returns the Bootstrap image.
     */
    protected function bootstrapImage($src, $alt, $width, $height, $class) {

        // Initialize the template.
        $template = '<img %attributes%/>';

        // Initialize the attributes.
        $attributes = [];

        $attributes['src']    = $src;
        $attributes['alt']    = $alt;
        $attributes['width']  = $width;
        $attributes['height'] = $height;
        $attributes['class']  = $class;

        // Return the HTML.
        return StringUtility::replace($template, ['%attributes%'], [StringUtility::parseArray($attributes)]);
    }

}
