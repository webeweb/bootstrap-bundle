<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Asset\Navigation\Glyphicon;

use WBW\Library\Symfony\Assets\Navigation\NavigationNode;

/**
 * Navigation node "parameters".
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Asset\Navigation\Glyphicon
 */
class NavigationNodeParameters extends NavigationNode {

    /**
     * Constructor.
     *
     * @param string|null $route The route.
     * @param string $matcher The matcher.
     */
    public function __construct(string $route = null, string $matcher = self::MATCHER_URL) {
        parent::__construct("navigation.node.parameters", "g:wrench", $route, $matcher);
    }
}
