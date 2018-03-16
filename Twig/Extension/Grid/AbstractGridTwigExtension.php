<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Grid;

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;

/**
 * Abstract grid Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Grid
 * @abstract
 */
abstract class AbstractGridTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap column.
     *
     * @param string $lg The large column size.
     * @param string $md The medium column size.
     * @param string $sm The small column size.
     * @param string $xs The extra-small column size.
     * @param string $prefix The column prefix.
     * @return string Returns the Bootstrap grid.
     */
    final protected function bootstrapGrid($lg, $md, $sm, $xs, $prefix = "") {

        // Initialize the columns.
        $columns = [];

        // Stacked.
        $columns[] = 1 <= $lg && $lg <= 12 ? "col-lg-" . $prefix . $lg : null;
        $columns[] = 1 <= $md && $md <= 12 ? "col-md-" . $prefix . $md : null;
        $columns[] = 1 <= $sm && $sm <= 12 ? "col-sm-" . $prefix . $sm : null;
        $columns[] = 1 <= $xs && $xs <= 12 ? "col-xs-" . $prefix . $xs : null;

        // Return the columns.
        return trim(implode(" ", $columns));
    }

}
