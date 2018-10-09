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
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Translation\TranslatorInterface;
use WBW\Bundle\BootstrapBundle\BootstrapBundle;
use WBW\Bundle\BootstrapBundle\Event\NotificationEvent;
use WBW\Bundle\BootstrapBundle\Event\NotificationEvents;
use WBW\Bundle\BootstrapBundle\EventListener\KernelEventListener;
use WBW\Bundle\BootstrapBundle\Exception\BadUserRoleException;
use WBW\Bundle\BootstrapBundle\Helper\UserHelper;

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
     * Get the kernel event listener.
     *
     * @return KernelEventListener Returns the kernel event listener.
     */
    protected function getKernelEventListener() {
        return $this->get(KernelEventListener::SERVICE_NAME);
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
     * Get the session.
     *
     * @return SessionInterface Returns the session.
     */
    protected function getSession() {
        return $this->get("session");
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
     * Determines if the connected user have roles or redirect.
     *
     * @param array $roles The roles.
     * @param bool $or OR ?
     * @param string $redirect The redirect.
     * @return bool Returns true.
     * @throws BadUserRoleException Throws a bad user role exception.
     */
    protected function hasRolesOrRedirect(array $roles, $or, $redirect) {

        // Get the user.
        $user = $this->getKernelEventListener()->getUser();

        // User have roles ?
        if (false === UserHelper::hasRoles($user, $roles, $or)) {

            // Throw a bad user role exception with an anonymous user if user is null.
            $user = null !== $user ? $user : new User("anonymous", "");
            throw new BadUserRoleException($user, $roles, "", $redirect);
        }

        // Return
        return true;
    }

    /**
     * Notify.
     *
     * @param string $eventName The event name.
     * @param string $notification The notification.
     * @param string $type The notification type.
     * @return Event Returns the event.
     */
    private function notify($eventName, $notification, $type) {

        // Get and check the event dispatcher.
        $eventDispatcher = $this->getEventDispatcher();
        if (null === $eventDispatcher || false === $eventDispatcher->hasListeners($eventName)) {
            return null;
        }

        // Log a debug trace.
        $this->getLogger()->debug(sprintf("Bootstrap controller dispatch a notification event with name \"%s\"", $eventName));

        // Dispatch the event.
        return $eventDispatcher->dispatch($eventName, new NotificationEvent($eventName, $notification, $type));
    }

    /**
     * Notify "Danger".
     *
     * @param string $notification The notification.
     * @return Event Returns the event.
     */
    protected function notifyDanger($notification) {
        return $this->notify(NotificationEvents::NOTIFICATION_DANGER, $notification, BootstrapBundle::BOOTSTRAP_DANGER);
    }

    /**
     * Notify "Info".
     *
     * @param string $notification The notification.
     * @return Event Returns the event.
     */
    protected function notifyInfo($notification) {
        return $this->notify(NotificationEvents::NOTIFICATION_INFO, $notification, BootstrapBundle::BOOTSTRAP_INFO);
    }

    /**
     * Notify "Success".
     *
     * @param string $notification The notification.
     * @return Event Returns the event.
     */
    protected function notifySuccess($notification) {
        return $this->notify(NotificationEvents::NOTIFICATION_SUCCESS, $notification, BootstrapBundle::BOOTSTRAP_SUCCESS);
    }

    /**
     * Notify "Warning".
     *
     * @param string $notification The notification.
     * @return Event Returns the event.
     */
    protected function notifyWarning($notification) {
        return $this->notify(NotificationEvents::NOTIFICATION_WARNING, $notification, BootstrapBundle::BOOTSTRAP_WARNING);
    }

}
