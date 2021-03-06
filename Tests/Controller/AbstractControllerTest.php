<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Controller;

use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Controller\TestAbstractController;
use WBW\Bundle\CoreBundle\Event\NotificationEvent;
use WBW\Bundle\CoreBundle\Notification\NotificationInterface;
use WBW\Bundle\CoreBundle\WBWCoreEvents;

/**
 * Abstract controller test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Controller
 */
class AbstractControllerTest extends AbstractTestCase {

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a dispatch function.
        $dispatchFunction = static::getEventDispatcherDispatchFunction();

        // Set the Event dispatcher mock.
        $this->eventDispatcher->expects($this->any())->method("hasListeners")->willReturn(true);
        $this->eventDispatcher->expects($this->any())->method("dispatch")->willReturnCallback($dispatchFunction);
    }

    /**
     * Tests the notifyDanger() method.
     *
     * @return void
     */
    public function testNotifyDanger(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->notifyDanger("danger");
        $this->assertNotNull($res);

        $this->assertInstanceOf(NotificationEvent::class, $res);
        $this->assertEquals(WBWCoreEvents::NOTIFICATION_DANGER, $res->getEventName());

        $this->assertEquals("danger", $res->getNotification()->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_DANGER, $res->getNotification()->getType());
    }

    /**
     * Tests the notifyInfo() method.
     *
     * @return void
     */
    public function testNotifyInfo(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->notifyInfo("info");
        $this->assertNotNull($res);

        $this->assertInstanceOf(NotificationEvent::class, $res);
        $this->assertEquals(WBWCoreEvents::NOTIFICATION_INFO, $res->getEventName());

        $this->assertEquals("info", $res->getNotification()->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_INFO, $res->getNotification()->getType());
    }

    /**
     * Tests the notifySuccess() method.
     *
     * @return void
     */
    public function testNotifySuccess(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->notifySuccess("success");
        $this->assertNotNull($res);

        $this->assertInstanceOf(NotificationEvent::class, $res);
        $this->assertEquals(WBWCoreEvents::NOTIFICATION_SUCCESS, $res->getEventName());

        $this->assertEquals("success", $res->getNotification()->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_SUCCESS, $res->getNotification()->getType());
    }

    /**
     * Tests the notifyWarning() method.
     *
     * @return void
     */
    public function testNotifyWarning(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->notifyWarning("warning");
        $this->assertNotNull($res);

        $this->assertInstanceOf(NotificationEvent::class, $res);
        $this->assertEquals(WBWCoreEvents::NOTIFICATION_WARNING, $res->getEventName());

        $this->assertEquals("warning", $res->getNotification()->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_WARNING, $res->getNotification()->getType());
    }
}
