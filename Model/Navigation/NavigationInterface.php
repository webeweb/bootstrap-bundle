<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Model\Navigation;

/**
 * Navigation interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Model\Navigation
 */
interface NavigationInterface {

    /**
     * Navigation HREF "default".
     *
     * @var string
     */
    const NAVIGATION_HREF_DEFAULT = "javascript:void(0);";

    /**
     * Navigation matcher "Reg exp".
     *
     * @var string
     */
    const NAVIGATION_MATCHER_REGEXP = "regexp";

    /**
     * Navigation matcher "Router".
     *
     * @var string
     */
    const NAVIGATION_MATCHER_ROUTER = "router";

    /**
     * Navigation matcher "URL".
     *
     * @var string
     */
    const NAVIGATION_MATCHER_URL = "url";

}
