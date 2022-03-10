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

use WBW\Bundle\CoreBundle\Controller\AbstractController as BaseController;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
use WBW\Bundle\CoreBundle\Event\ToastEvent;
use WBW\Library\Symfony\Factory\NotificationFactory;
use WBW\Library\Symfony\Factory\ToastFactory;

/**
 * Abstract controller.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Controller
 * @abstract
 */
abstract class AbstractController extends BaseController {

    /**
     * Notify "danger".
     *
     * @param string $content The content.
     * @return NotificationEvent Returns the event.
     */
    protected function notifyDanger(string $content): NotificationEvent {
        $notification = NotificationFactory::newDangerNotification($content);
        return $this->notify(NotificationEvent::DANGER, $notification);
    }

    /**
     * Notify "info".
     *
     * @param string $content The content.
     * @return NotificationEvent Returns the event.
     */
    protected function notifyInfo(string $content): NotificationEvent {
        $notification = NotificationFactory::newInfoNotification($content);
        return $this->notify(NotificationEvent::INFO, $notification);
    }

    /**
     * Notify "success".
     *
     * @param string $content The content.
     * @return NotificationEvent Returns the event.
     */
    protected function notifySuccess(string $content): NotificationEvent {
        $notification = NotificationFactory::newSuccessNotification($content);
        return $this->notify(NotificationEvent::SUCCESS, $notification);
    }

    /**
     * Notify "warning".
     *
     * @param string $content The content.
     * @return NotificationEvent Returns the event.
     */
    protected function notifyWarning(string $content): NotificationEvent {
        $notification = NotificationFactory::newWarningNotification($content);
        return $this->notify(NotificationEvent::WARNING, $notification);
    }

    /**
     * Toast "danger".
     *
     * @param string $content The content.
     * @return ToastEvent Returns the event.
     */
    protected function toastDanger(string $content): ToastEvent {
        $toast = ToastFactory::newDangerToast($content);
        return $this->toast(ToastEvent::DANGER, $toast);
    }

    /**
     * Toast "info".
     *
     * @param string $content The content.
     * @return ToastEvent Returns the event.
     */
    protected function toastInfo(string $content): ToastEvent {
        $toast = ToastFactory::newInfoToast($content);
        return $this->toast(ToastEvent::INFO, $toast);
    }

    /**
     * Toast "success".
     *
     * @param string $content The content.
     * @return ToastEvent Returns the event.
     */
    protected function toastSuccess(string $content): ToastEvent {
        $toast = ToastFactory::newSuccessToast($content);
        return $this->toast(ToastEvent::SUCCESS, $toast);
    }

    /**
     * Toast "warning".
     *
     * @param string $content The content.
     * @return ToastEvent Returns the event.
     */
    protected function toastWarning(string $content): ToastEvent {
        $toast = ToastFactory::newWarningToast($content);
        return $this->toast(ToastEvent::WARNING, $toast);
    }
}
