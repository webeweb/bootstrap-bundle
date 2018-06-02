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

/**
 * Notification event.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Event
 */
class NotificationEvent extends AbstractBootstrapEvent {

    /**
     * Notification.
     *
     * @var string
     */
    private $notification;

    /**
     * Constructor.
     *
     * @param string $eventName The event name.
     * @param string $notification The notification.
     */
    public function __construct($eventName, $notification) {
        parent::__construct($eventName);
        $this->notification = $notification;
    }

    /**
     * Get the notification.
     *
     * @return string Returns the notification.
     */
    public function getNotification() {
        return $this->notification;
    }

}
