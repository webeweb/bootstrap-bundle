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

use WBW\Bundle\BootstrapBundle\Helper\GridHelper;
use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Abstract grid Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 * @abstract
 */
abstract class AbstractGridTwigExtension extends AbstractTwigExtension {

    /**
     * Display a Bootstrap grid.
     *
     * @param string|null $lg The large column size.
     * @param string|null $md The medium column size.
     * @param string|null $sm The small column size.
     * @param string|null $xs The extra-small column size.
     * @param bool|null $recopy Recopy ?
     * @param string|null $prefix The column prefix.
     * @return string Returns the Bootstrap grid.
     */
    protected function bootstrapGrid(?string $lg, ?string $md, ?string $sm, ?string $xs, ?bool $recopy, ?string $prefix): string {

        $found  = null;
        $values = [&$lg, &$md, &$sm, &$xs];

        foreach ($values as &$current) {
            if (1 <= $current && $current <= 12) {
                $found = $current;
            }
            if (null === $current && true === $recopy && null !== $found) {
                $current = $found;
            }
        }

        $columns = [
            GridHelper::getCSSClassname("lg", $lg, $prefix),
            GridHelper::getCSSClassname("md", $md, $prefix),
            GridHelper::getCSSClassname("sm", $sm, $prefix),
            GridHelper::getCSSClassname("xs", $xs, $prefix),
        ];

        return trim(implode(" ", $columns));
    }
}
