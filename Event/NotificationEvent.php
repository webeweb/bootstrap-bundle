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
class NotificationEvent extends AbstractEvent {

    /**
     * Notification.
     *
     * @var string
     */
    private $notification;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Constructor.
     *
     * @param string $eventName The event name.
     * @param string $notification The notification.
     * @param string $type The notification type.
     */
    public function __construct($eventName, $notification, $type) {
        parent::__construct($eventName);
        $this->setNotification($notification);
        $this->setType($type);
    }

    /**
     * Get the notification.
     *
     * @return string Returns the notification.
     */
    public function getNotification() {
        return $this->notification;
    }

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set the notification.
     *
     * @param string $notification The notification.
     * @return NotificationEvent Returns this notification event.
     */
    protected function setNotification($notification) {
        $this->notification = $notification;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return NotificationEvent Returns this notification event.
     */
    protected function setType($type) {
        $this->type = $type;
        return $this;
    }

}
