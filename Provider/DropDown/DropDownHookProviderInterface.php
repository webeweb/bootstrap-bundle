<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Provider\DropDown;

/**
 * Drop down hook provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Provider\DropDown
 */
interface DropDownHookProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.provider.dropdownhook";

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
