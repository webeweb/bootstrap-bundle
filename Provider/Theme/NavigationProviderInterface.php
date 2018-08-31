<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Provider\Theme;

use WBW\Bundle\BootstrapBundle\Model\Navigation\NavigationTree;
use WBW\Bundle\BootstrapBundle\Provider\BootstrapProviderInterface;

/**
 * Navigation provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Provider\Theme
 */
interface NavigationProviderInterface extends BootstrapProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.provider.navigation";

    /**
     * Get the tree.
     *
     * @return NavigationTree Returns the tree.
     */
    public function getTree();

    /**
     * Get the view.
     *
     * @return string Returns the view.
     */
    public function getView();
}
