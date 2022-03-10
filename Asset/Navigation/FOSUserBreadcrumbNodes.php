<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Asset\Navigation;

use WBW\Library\Symfony\Assets\Navigation\BreadcrumbNode;
use WBW\Library\Symfony\Assets\NavigationNodeInterface;

/**
 * FOSUser breadcrumb nodes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Asset\Navigation
 */
class FOSUserBreadcrumbNodes {

    /**
     * Get the FOSUser breadcrumb nodes with Glyphicon icons.
     *
     * @return BreadcrumbNode[] Returns the FOSUser breadcrumb nodes.
     */
    public static function getGlyphiconBreadcrumbNodes(): array {
        return [
            new BreadcrumbNode("label.edit_profile", "g:user", "fos_user_profile_edit", NavigationNodeInterface::MATCHER_ROUTER),
            new BreadcrumbNode("label.show_profile", "g:user", "fos_user_profile_show", NavigationNodeInterface::MATCHER_ROUTER),
            new BreadcrumbNode("label.change_password", "g:lock", "fos_user_change_password", NavigationNodeInterface::MATCHER_ROUTER),
        ];
    }
}
