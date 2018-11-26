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

use Twig_Environment;
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
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     */
    protected function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

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

        // Initialize the values.
        $found  = null;
        $values = [&$lg, &$md, &$sm, &$xs];

        // Handle each value.
        foreach ($values as &$current) {
            if (1 <= $current && $current <= 12) {
                $found = $current;
            }
            if (null === $current && true === $recopy && null !== $found) {
                $current = $found;
            }
        }

        // Initialize the columns.
        $columns = [];

        $columns[] = 1 <= $lg && $lg <= 12 ? "col-lg-" . $prefix . $lg : null;
        $columns[] = 1 <= $md && $md <= 12 ? "col-md-" . $prefix . $md : null;
        $columns[] = 1 <= $sm && $sm <= 12 ? "col-sm-" . $prefix . $sm : null;
        $columns[] = 1 <= $xs && $xs <= 12 ? "col-xs-" . $prefix . $xs : null;

        // Return the columns.
        return trim(implode(" ", $columns));
    }

}
