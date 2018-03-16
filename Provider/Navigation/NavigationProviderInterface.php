<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Provider\Navigation;

use WBW\Library\Core\Navigation\Tree\NavigationTree;

/**
 * Navigation provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Provider\Navigation
 */
interface NavigationProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.provider.navigation";

    /**
     * Get the template.
     *
     * @return string Returns the template.
     */
    public function getTemplate();

    /**
     * Get the tree.
     *
     * @return NavigationTree Returns the tree.
     */
    public function getTree();
}
