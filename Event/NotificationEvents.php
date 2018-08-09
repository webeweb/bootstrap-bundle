<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Event;

use WBW\Bundle\BootstrapBundle\BootstrapBundle;

/**
 * Notification events.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Event
 */
class NotificationEvents {

    /**
     * Notification "Danger".
     *
     * @var string
     */
    const NOTIFICATION_DANGER = "webeweb.bootstrap.event.notification." . BootstrapBundle::BOOTSTRAP_DANGER;

    /**
     * Notification "Info".
     *
     * @var string
     */
    const NOTIFICATION_INFO = "webeweb.bootstrap.event.notification." . BootstrapBundle::BOOTSTRAP_INFO;

    /**
     * Notification "Success".
     *
     * @var string
     */
    const NOTIFICATION_SUCCESS = "webeweb.bootstrap.event.notification." . BootstrapBundle::BOOTSTRAP_SUCCESS;

    /**
     * Notification "Warning".
     *
     * @var string
     */
    const NOTIFICATION_WARNING = "webeweb.bootstrap.event.notification." . BootstrapBundle::BOOTSTRAP_WARNING;

}
