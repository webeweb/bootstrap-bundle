<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\EventListener;

use Symfony\Component\HttpFoundation\Session\SessionInterface;
use WBW\Bundle\BootstrapBundle\Event\NotificationEvent;

/**
 * Notification event listener.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\EventListener
 */
class NotificationEventListener {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.eventlistener.notification";

    /**
     * Session.
     *
     * @var SessionInterface
     */
    private $session;

    /**
     * Constructor.
     *
     * @param SessionInterface $session The session.
     */
    public function __construct(SessionInterface $session) {
        $this->setSession($session);
    }

    /**
     * Get the session.
     *
     * @return SessionInterface Returns the session.
     */
    public function getSession() {
        return $this->session;
    }

    /**
     * On notify.
     *
     * @param NotificationEvent $event The notification event.
     * @return void
     */
    public function onNotify(NotificationEvent $event) {
        $this->getSession()->getFlashBag()->add($event->getType(), $event->getNotification());
    }

    /**
     * Set the session.
     *
     * @param SessionInterface $session The session.
     * @return NotificationEventListener Returns this notification event listener.
     */
    protected function setSession(SessionInterface $session) {
        $this->session = $session;
        return $this;
    }

}
