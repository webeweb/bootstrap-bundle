<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Component;

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Abstract icon Twig Extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractIconTwigExtension extends AbstractTwigExtension {

    /**
     * Display a Bootstrap icon.
     *
     * @param string|null $name The name.
     * @param string|null $style The style.
     * @return string Returns the Bootstrap icon.
     */
    protected function bootstrapIcon(?string $name, ?string $style): string {

        $attributes = [
            "class" => [
                "bi",
                null !== $name ? "bi-" . $name : null,
                null !== $style ? $style : null,
            ],
        ];

        return static::coreHtmlElement("i", null, $attributes);
    }

}
