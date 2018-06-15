<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Translation\TranslatorInterface;
use WBW\Bundle\BootstrapBundle\BootstrapBundle;
use WBW\Bundle\BootstrapBundle\Event\NotificationEvent;
use WBW\Bundle\BootstrapBundle\Event\NotificationEvents;

/**
 * Abstract Bootstrap controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Controller
 * @abstract
 */
abstract class AbstractBootstrapController extends Controller {

    /**
     * Get the event dispatcher.
     *
     * @return EventDispatcherInterface Returns the event dispatcher.
     */
    protected function getEventDispatcher() {
        return $this->get("event_dispatcher");
    }

    /**
     * Get the logger.
     *
     * @return LoggerInterface Returns the logger.
     */
    protected function getLogger() {
        return $this->get("logger");
    }

    /**
     * Get the router.
     *
     * @return RouterInterface Returns the router.
     */
    protected function getRouter() {
        return $this->get("router");
    }

    /**
     * Get the translator.
     *
     * @return TranslatorInterface Returns the translator.
     */
    protected function getTranslator() {
        return $this->get("translator");
    }

    /**
     * Notify.
     *
     * @param string $eventName The event name.
     * @param string $notification The notification.
     * @param string $type The notification type.
     * @return void
     */
    private function notify($eventName, $notification, $type) {

        // Get the event dispatcher.
        $eventDispatcher = $this->getEventDispatcher();

        // Check the event dispatcher.
        if (null === $eventDispatcher) {
            return;
        }
        if (false === $eventDispatcher->hasListeners($eventName)) {
            return;
        }

        // Dispatch the event.
        $eventDispatcher->dispatch($eventName, new NotificationEvent($eventName, $notification, $type));
    }

    /**
     * Notify "Danger".
     *
     * @param string $notification The notification.
     * @return void
     */
    protected function notifyDanger($notification) {
        $this->notify(NotificationEvents::NOTIFICATION_DANGER, $notification, BootstrapBundle::BOOTSTRAP_DANGER);
    }

    /**
     * Notify "Info".
     *
     * @param string $notification The notification.
     * @return void
     */
    protected function notifyInfo($notification) {
        $this->notify(NotificationEvents::NOTIFICATION_INFO, $notification, BootstrapBundle::BOOTSTRAP_INFO);
    }

    /**
     * Notify "Success".
     *
     * @param string $notification The notification.
     * @return void
     */
    protected function notifySuccess($notification) {
        $this->notify(NotificationEvents::NOTIFICATION_SUCCESS, $notification, BootstrapBundle::BOOTSTRAP_SUCCESS);
    }

    /**
     * Notify "Warning".
     *
     * @param string $notification The notification.
     * @return void
     */
    protected function notifyWarning($notification) {
        $this->notify(NotificationEvents::NOTIFICATION_WARNING, $notification, BootstrapBundle::BOOTSTRAP_WARNING);
    }

}
