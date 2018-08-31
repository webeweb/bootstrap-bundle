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

use WBW\Bundle\BootstrapBundle\Provider\BootstrapProviderInterface;

/**
 * Drop down hook provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Provider\Theme
 */
interface DropDownHookProviderInterface extends BootstrapProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.provider.dropdownhook";

    /**
     * Get the items.
     *
     * @return array Returns the items.
     */
    public function getItems();

    /**
     * Get the view.
     *
     * @return string Returns the view.
     */
    public function getView();
}
