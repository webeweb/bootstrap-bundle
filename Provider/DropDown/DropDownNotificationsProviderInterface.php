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
 * Drop down 'Notifications' provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Provider\DropDown
 */
interface DropDownNotificationsProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = 'webeweb.bundle.bootstrapbundle.provider.dropdownnotifications';

    /**
     * Get the notifications.
     *
     * @return array Returns the notifications.
     */
    public function getNotifications();

    /**
     * Get the template.
     *
     * @return string Returns the template.
     */
    public function getTemplate();
}
