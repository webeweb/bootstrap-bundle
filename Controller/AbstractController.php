<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Controller;

use Symfony\Component\EventDispatcher\Event;
use WBW\Bundle\CoreBundle\Controller\AbstractController as BaseController;
use WBW\Bundle\CoreBundle\Event\NotificationEvents;
use WBW\Bundle\CoreBundle\Notification\NotificationFactory;

/**
 * Abstract controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Controller
 * @abstract
 */
abstract class AbstractController extends BaseController {

    /**
     * Notify "danger".
     *
     * @param string $content The content.
     * @return Event Returns the event.
     */
    protected function notifyDanger($content) {
        $notification = NotificationFactory::newDangerNotification($content);
        return $this->notify(NotificationEvents::NOTIFICATION_DANGER, $notification);
    }

    /**
     * Notify "info".
     *
     * @param string $content The content.
     * @return Event Returns the event.
     */
    protected function notifyInfo($content) {
        $notification = NotificationFactory::newInfoNotification($content);
        return $this->notify(NotificationEvents::NOTIFICATION_INFO, $notification);
    }

    /**
     * Notify "success".
     *
     * @param string $content The content.
     * @return Event Returns the event.
     */
    protected function notifySuccess($content) {
        $notification = NotificationFactory::newSuccessNotification($content);
        return $this->notify(NotificationEvents::NOTIFICATION_SUCCESS, $notification);
    }

    /**
     * Notify "warning".
     *
     * @param string $content The content.
     * @return Event Returns the event.
     */
    protected function notifyWarning($content) {
        $notification = NotificationFactory::newWarningNotification($content);
        return $this->notify(NotificationEvents::NOTIFICATION_WARNING, $notification);
    }
}
