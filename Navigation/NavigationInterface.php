<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Navigation;

/**
 * Navigation interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Navigation
 */
interface NavigationInterface {

    /**
     * Navigation HREF "default".
     *
     * @var string
     */
    const NAVIGATION_HREF_DEFAULT = "javascript:void(0);";

    /**
     * Navigation type ""Reg exp".
     *
     * @var string
     */
    const NAVIGATION_TYPE_REGEXP = "regexp";

    /**
     * Navigation type ""Router".
     *
     * @var string
     */
    const NAVIGATION_TYPE_ROUTER = "router";

    /**
     * Navigation type "URL".
     *
     * @var string
     */
    const NAVIGATION_TYPE_URL = "url";

}
