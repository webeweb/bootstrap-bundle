<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Navigation;

use WBW\Bundle\CoreBundle\Navigation\BreadcrumbNode;
use WBW\Bundle\CoreBundle\Navigation\NavigationInterface;

/**
 * FOSUser breadcrumb nodes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Navigation
 */
class FOSUserBreadcrumbNodes {

    /**
     * Get a FOSUser breadcrumb node with Glyphicon icons.
     *
     * @return BreadcrumbNode[] Returns the FOSUser breadcrumb node.
     */
    public static function getGlyphiconBreadcrumbNodes() {

        $breadcrumbNodes = [];

        $breadcrumbNodes[] = new BreadcrumbNode("label.edit_profile", "g:user", "fos_user_profile_edit", NavigationInterface::NAVIGATION_MATCHER_ROUTER);
        $breadcrumbNodes[] = new BreadcrumbNode("label.show_profile", "g:user", "fos_user_profile_show", NavigationInterface::NAVIGATION_MATCHER_ROUTER);
        $breadcrumbNodes[] = new BreadcrumbNode("label.change_password", "g:lock", "fos_user_change_password", NavigationInterface::NAVIGATION_MATCHER_ROUTER);

        return $breadcrumbNodes;
    }
}
