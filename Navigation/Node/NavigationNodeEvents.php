<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Navigation\Node;

use WBW\Bundle\BootstrapBundle\Navigation\NavigationNode;

/**
 * Navigation node "Events".
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Navigation\Node
 */
class NavigationNodeEvents extends NavigationNode {

    /**
     * Constructor.
     *
     * @param string $route The route.
     * @param string $matcher The matcher.
     */
    public function __construct($route = null, $matcher = self::NAVIGATION_MATCHER_URL) {
        parent::__construct("navigation.node.events", "g:calendar", $route, $matcher);
    }

}
