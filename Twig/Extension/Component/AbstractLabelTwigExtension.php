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

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Abstract label Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractLabelTwigExtension extends AbstractTwigExtension {

    /**
     * Display a Bootstrap label.
     *
     * @param string|null $content The content.
     * @param string|null $class The class.
     * @return string Returns the Bootstrap label.
     */
    protected function bootstrapLabel(?string $content, ?string $class): string {

        $attributes = [
            "class" => [
                "label",
                $class,
            ],
        ];

        return static::coreHtmlElement("span", $content, $attributes);
    }
}
