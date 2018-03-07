<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Navigation\Node;

/**
 * Navigation node.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Navigation\Node
 */
class NavigationNode extends AbstractNavigationNode {

    /**
     * Constructor.
     *
     * @param string $name The name.
     * @param string $icon The icon.
     * @param string $route The route.
     */
    public function __construct($name, $icon = null, $route = null) {
        parent::__construct($name, $icon, $route);
    }

}
