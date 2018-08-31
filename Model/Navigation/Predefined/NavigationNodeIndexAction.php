<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Model\Navigation\Predefined;

use WBW\Bundle\BootstrapBundle\Model\Navigation\NavigationNode;

/**
 * Navigation node "Index" action.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Model\Navigation\Predefined
 */
class NavigationNodeIndexAction extends NavigationNode {

    /**
     * Constructor.
     *
     * @param string $route The route.
     * @param string $matcher The matcher.
     */
    public function __construct($route = null, $matcher = self::NAVIGATION_MATCHER_URL) {
        parent::__construct("navigation.node.action.index", "g:list", $route, $matcher);
    }

}
