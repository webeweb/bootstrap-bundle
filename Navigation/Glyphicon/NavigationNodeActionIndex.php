<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Navigation\Glyphicon;

use WBW\Bundle\CoreBundle\Navigation\NavigationNode;

/**
 * Navigation node action "index".
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Navigation\Glyphicon
 */
class NavigationNodeActionIndex extends NavigationNode {

    /**
     * Constructor.
     *
     * @param string|null $route The route.
     * @param string $matcher The matcher.
     */
    public function __construct(string $route = null, string $matcher = self::NAVIGATION_MATCHER_URL) {
        parent::__construct("navigation.node.action.index", "g:list", $route, $matcher);
    }
}
