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
 * Abstract nav Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractNavTwigExtension extends AbstractTwigExtension {

    /**
     * Displays a Bootstrap nav item.
     *
     * @param string|null $item The item.
     * @return string Returns the Bootstrap nav item.
     */
    private function bootstrapNav(?string $item): string {
        return static::coreHTMLElement("li", $item, ["role" => "presentation"]);
    }

    /**
     * Displays a Bootstrap navs.
     *
     * @param array $items The items.
     * @param string|null $class The class.
     * @param bool|null $stacked Stacked ?
     * @return string Returns the Bootstrap nav.
     */
    protected function bootstrapNavs(array $items, ?string $class, ?bool $stacked): string {

        $attributes = [
            "class" => [
                "nav",
                $class,
                true === $stacked ? "nav-stacked" : null,
            ],
        ];

        $innerHTML = [];
        foreach ($items as $current) {
            $innerHTML[] = $this->bootstrapNav($current);
        }

        return static::coreHTMLElement("ul", "\n" . implode("\n", $innerHTML) . "\n", $attributes);
    }
}
