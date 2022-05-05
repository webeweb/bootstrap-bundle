<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Fixtures\Controller;

use WBW\Bundle\BootstrapBundle\Controller\AbstractController;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
use WBW\Bundle\CoreBundle\Event\ToastEvent;

/**
 * Test abstract controller.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\Controller
 */
class TestAbstractController extends AbstractController {

    /**
     * {@inheritdoc}
     */
    public function notifyDanger(string $content): NotificationEvent {
        return parent::notifyDanger($content);
    }

    /**
     * {@inheritdoc}
     */
    public function notifyInfo(string $content): NotificationEvent {
        return parent::notifyInfo($content);
    }

    /**
     * {@inheritdoc}
     */
    public function notifySuccess(string $content): NotificationEvent {
        return parent::notifySuccess($content);
    }

    /**
     * {@inheritdoc}
     */
    public function notifyWarning(string $content): NotificationEvent {
        return parent::notifyWarning($content);
    }

    /**
     * {@inheritdoc}
     */
    public function toastDanger(string $content): ToastEvent {
        return parent::toastDanger($content);
    }

    /**
     * {@inheritdoc}
     */
    public function toastInfo(string $content): ToastEvent {
        return parent::toastInfo($content);
    }

    /**
     * {@inheritdoc}
     */
    public function toastSuccess(string $content): ToastEvent {
        return parent::toastSuccess($content);
    }

    /**
     * {@inheritdoc}
     */
    public function toastWarning(string $content): ToastEvent {
        return parent::toastWarning($content);
    }
}
