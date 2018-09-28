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

use Symfony\Component\HttpFoundation\Request;

/**
 * Navigation tree helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Navigation
 */
class NavigationTreeHelper {

    /**
     * Actives the nodes.
     *
     * @param Request $request The request.
     * @param array $nodes The nodes.
     * @param int $level The node level.
     * @return boolean Returns true in case of success, false othewise.
     */
    protected static function activeNodes(Request $request, array $nodes = [], $level = 0) {

        // Initialize the result.
        $result = false;

        // Handle each node.
        foreach ($nodes as $n) {

            // Check the node.
            if (false === ($n instanceOf AbstractNavigationNode)) {
                continue;
            }

            // Determines if the current node matches the URL.
            if (true === self::nodeMatch($n, $request)) {
                $current = true;
            } else {
                $current = self::activeNodes($request, $n->getNodes(), $level + 1);
            }

            // Handle the next node.
            if (false === $current) {
                continue;
            }

            // Mark the node as active.
            $n->setActive(true);

            // Set the result.
            $result = true;
        }

        // Return the result.
        return $result;
    }

    /**
     * Active the tree.
     *
     * @param NavigationTree $tree The tree.
     * @param Request $request The request.
     * @return void
     */
    public static function activeTree(NavigationTree $tree, Request $request) {
        self::activeNodes($request, $tree->getNodes());
    }

    /**
     * Get the breadcrumbs.
     *
     * @param AbstractNavigationNode $node The tree.
     * @return AsbtractNavigationNode[] Returns the breadcrumbs.
     */
    public static function getBreadcrumbs(AbstractNavigationNode $node) {

        // Create the breadcrumbs.
        $breadcrumbs = [];

        // Check the instance.
        if (true === ($node instanceof NavigationNode || $node instanceof BreadcrumbNode) && true === $node->getActive()) {
            $breadcrumbs[] = $node;
        }

        // Handle each node.
        foreach ($node->getNodes() as $current) {
            if (false === ($current instanceof AbstractNavigationNode)) {
                continue;
            }
            $breadcrumbs = array_merge($breadcrumbs, self::getBreadcrumbs($current));
        }

        // Return the breadcrumbs.
        return $breadcrumbs;
    }

    /**
     * Determines if a node match an URL.
     *
     * @param AbstractNavigationNode $node The node.
     * @param Request $request The request.
     * @return boolean Returns true in case of success, false otherwise.
     */
    protected static function nodeMatch(AbstractNavigationNode $node, Request $request) {

        // Initialize the result.
        $result = false;

        // Switch into matcher.
        switch ($node->getMatcher()) {

            case NavigationInterface::NAVIGATION_MATCHER_REGEXP:
                $result = preg_match("/" . $node->getRoute() . "/", $request->getUri());
                break;

            case NavigationInterface::NAVIGATION_MATCHER_ROUTER:
                $result = $request->get("_route") === $node->getRoute();
                break;

            case NavigationInterface::NAVIGATION_MATCHER_URL:
                $result = $request->getUri() === $node->getRoute() || $request->getRequestUri() === $node->getRoute();
                break;
        }

        // Return the result.
        return boolval($result);
    }

}
