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
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.eventlistener.notification";

    /**
     * Kernel event listener.
     *
     * @var KernelEventListener
     */
    private $kernelEventListener;

    /**
     * Constructor.
     *
     * @param KernelEventListener $kernelEventListener The kernel event listener.
     */
    public function __construct(KernelEventListener $kernelEventListener) {
        $this->kernelEventListener = $kernelEventListener;
    }

    /**
     * On notify.
     *
     * @param NotificationEvent $event The notification event.
     * @return void
     */
    public function onNotify(NotificationEvent $event) {
        $this->kernelEventListener->getRequest()->getSession()->getFlashBag()->add($event->getType(), $event->getNotification());
    }

}
