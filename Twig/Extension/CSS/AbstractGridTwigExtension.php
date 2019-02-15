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
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 * @abstract
 */
abstract class AbstractGridTwigExtension extends AbstractTwigExtension {

    /**
     * Displays a Bootstrap grid.
     *
     * @param string $lg The large column size.
     * @param string $md The medium column size.
     * @param string $sm The small column size.
     * @param string $xs The extra-small column size.
     * @param string $recopy Recopy ?
     * @param string $prefix The column prefix.
     * @return string Returns the Bootstrap grid.
     */
    protected function bootstrapGrid($lg, $md, $sm, $xs, $recopy, $prefix) {

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

        $columns = [];

        $columns[] = GridHelper::getCSSClassname("lg", $lg, $prefix, 1, 12);
        $columns[] = GridHelper::getCSSClassname("md", $md, $prefix, 1, 12);;
        $columns[] = GridHelper::getCSSClassname("sm", $sm, $prefix, 1, 12);;
        $columns[] = GridHelper::getCSSClassname("xs", $xs, $prefix, 1, 12);;

        return trim(implode(" ", $columns));
    }
}
