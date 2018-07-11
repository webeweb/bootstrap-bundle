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
     * Actives the nodes.
     *
     * @param string $url The active URL.
     * @param array $nodes The nodes.
     * @param integer $level The node level.
     * @return boolean Returns true in case of success, false othewise.
     */
    public function activeNodes($url, array $nodes = [], $level = 0) {

        // Initialize.
        $parent  = false;
        $current = false;
        $delete  = false;

        // Handle each node.
        foreach ($nodes as $n) {

            // Check the node.
            if (false === ($n instanceOf AbstractNavigationNode)) {
                continue;
            }

            // Determines if the current node matches the URL.
            if ($url === $n->getRoute()) {
                $current = true;
                $delete  = true;
            } else {
                $current = $this->activeNodes($url, $n->getNodes(), $level + 1);
            }

            // Handle next node.
            if (false === $current) {
                continue;
            }

            // Mark the node as active.
            $n->setActive(true);

            // Remove the icon only on the last level.
            if (true === $delete && 0 < $level) {
                $n->setIcon(null);
            }

            // Reset.
            $parent  = true;
            $current = false;
            $delete  = false;
        }

        // Return.
        return $parent;
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
