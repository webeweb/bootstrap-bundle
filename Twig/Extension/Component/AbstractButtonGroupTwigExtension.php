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
 * Abstract button group Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractButtonGroupTwigExtension extends AbstractTwigExtension {

    /**
     * Displays a Bootstrap button group.
     *
     * @param string|null $class The class.
     * @param string|null $role The role.
     * @param array $buttons The buttons.
     * @return string Returns the Bootstrap button group.
     */
    protected function bootstrapButtonGroup(?string $class, ?string $role, array $buttons): string {

        $attributes = [
            "class" => $class,
            "role"  => $role,
        ];

        $innerHTML = "\n" . implode("\n", $buttons) . "\n";

        return static::coreHTMLElement("div", $innerHTML, $attributes);
    }
}
