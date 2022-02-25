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

/**
 * Test abstract controller.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\Controller
 */
class TestAbstractController extends AbstractController {

    /**
     * {@inheritDoc}
     */
    public function notifyDanger(string $content): NotificationEvent {
        return parent::notifyDanger($content);
    }

    /**
     * {@inheritDoc}
     */
    public function notifyInfo(string $content): NotificationEvent {
        return parent::notifyInfo($content);
    }

    /**
     * {@inheritDoc}
     */
    public function notifySuccess(string $content): NotificationEvent {
        return parent::notifySuccess($content);
    }

    /**
     * {@inheritDoc}
     */
    public function notifyWarning(string $content): NotificationEvent {
        return parent::notifyWarning($content);
    }
}
