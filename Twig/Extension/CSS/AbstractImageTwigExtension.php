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

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Library\Types\Helper\StringHelper;

/**
 * Abstract image Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 * @abstract
 */
abstract class AbstractImageTwigExtension extends AbstractTwigExtension {

    /**
     * Displays a Bootstrap image.
     *
     * @param string|null $src The source
     * @param string|null $alt The alternative text.
     * @param string|null $width The width.
     * @param string|null $height The height.
     * @param string|null $class The class.
     * @param string|null $useMap The use map.
     * @return string Returns the Bootstrap image.
     */
    protected function bootstrapImage(?string $src, ?string $alt, ?string $width, ?string $height, ?string $class, ?string $useMap): string {

        $template = "<img %attributes%/>";

        $attributes = [
            "src"    => $src,
            "alt"    => $alt,
            "width"  => $width,
            "height" => $height,
            "class"  => $class,
            "usemap" => $useMap,
        ];

        return str_replace(["%attributes%"], [StringHelper::parseArray($attributes)], $template);
    }
}
