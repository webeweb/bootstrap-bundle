<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Theme;

use WBW\Bundle\CoreBundle\Theme\DefaultNavigationThemeProvider as BaseNavigationThemeProvider;

/**
 * Default navigation theme provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Theme
 */
class DefaultNavigationThemeProvider extends BaseNavigationThemeProvider {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }
}
