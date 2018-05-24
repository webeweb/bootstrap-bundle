<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Navigation;

/**
 * Navigation tree.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Navigation
 */
class NavigationTree extends AbstractNavigationNode {

    /**
     * Constructor.
     *
     * @param $name The name.
     */
    public function __construct($name) {
        parent::__construct($name);
    }

    /**
     * Get the breadcrumbs.
     *
     * @param AbstractNavigationNode $node The navigation node.
     * @return AsbtractNavigationNode[] Returns the navigation nodes.
     */
    public function getBreadcrumbs(AbstractNavigationNode $node = null) {

        // Create the breadcrumbs.
        $breadcrumbs = [];

        // Correct the parameter if necessary.
        if (null === $node) {
            $node = $this;
        }

        // Check the instance.
        if (true === ($node instanceof NavigationNode || $node instanceof BreadcrumbNode) && true === $node->getActive()) {
            $breadcrumbs[] = $node;
        }

        // Handle each node.
        foreach ($node->getNodes() as $current) {
            if (false === ($current instanceof AbstractNavigationNode)) {
                continue;
            }
            $breadcrumbs = array_merge($breadcrumbs, $this->getBreadcrumbs($current));
        }

        // Return the breadcrumbs.
        return $breadcrumbs;
    }

}
