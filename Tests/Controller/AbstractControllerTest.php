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
use WBW\Bundle\CoreBundle\Event\ToastEvent;
use WBW\Library\Symfony\Assets\NotificationInterface;
use WBW\Library\Symfony\Assets\ToastInterface;

/**
 * Abstract controller test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Controller
 */
class AbstractControllerTest extends AbstractTestCase {

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a dispatch() callback.
        $dispatchCallback = static::getEventDispatcherDispatchFunction();

        // Set the Event dispatcher mock.
        $this->eventDispatcher->expects($this->any())->method("hasListeners")->willReturn(true);
        $this->eventDispatcher->expects($this->any())->method("dispatch")->willReturnCallback($dispatchCallback);
    }

    /**
     * Tests notifyDanger()
     *
     * @return void
     */
    public function testNotifyDanger(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->notifyDanger("danger");
        $this->assertNotNull($res);

        $this->assertInstanceOf(NotificationEvent::class, $res);
        $this->assertEquals(NotificationEvent::DANGER, $res->getEventName());

        $this->assertEquals("danger", $res->getNotification()->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_TYPE_DANGER, $res->getNotification()->getType());
    }

    /**
     * Tests notifyInfo()
     *
     * @return void
     */
    public function testNotifyInfo(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->notifyInfo("info");
        $this->assertNotNull($res);

        $this->assertInstanceOf(NotificationEvent::class, $res);
        $this->assertEquals(NotificationEvent::INFO, $res->getEventName());

        $this->assertEquals("info", $res->getNotification()->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_TYPE_INFO, $res->getNotification()->getType());
    }

    /**
     * Tests notifySuccess()
     *
     * @return void
     */
    public function testNotifySuccess(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->notifySuccess("success");
        $this->assertNotNull($res);

        $this->assertInstanceOf(NotificationEvent::class, $res);
        $this->assertEquals(NotificationEvent::SUCCESS, $res->getEventName());

        $this->assertEquals("success", $res->getNotification()->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_TYPE_SUCCESS, $res->getNotification()->getType());
    }

    /**
     * Tests notifyWarning()
     *
     * @return void
     */
    public function testNotifyWarning(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->notifyWarning("warning");
        $this->assertNotNull($res);

        $this->assertInstanceOf(NotificationEvent::class, $res);
        $this->assertEquals(NotificationEvent::WARNING, $res->getEventName());

        $this->assertEquals("warning", $res->getNotification()->getContent());
        $this->assertEquals(NotificationInterface::NOTIFICATION_TYPE_WARNING, $res->getNotification()->getType());
    }

    /**
     * Tests toastDanger()
     *
     * @return void
     */
    public function testToastDanger(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->toastDanger("danger");
        $this->assertNotNull($res);

        $this->assertInstanceOf(ToastEvent::class, $res);
        $this->assertEquals(ToastEvent::DANGER, $res->getEventName());

        $this->assertEquals("danger", $res->getToast()->getContent());
        $this->assertEquals(ToastInterface::TOAST_TYPE_DANGER, $res->getToast()->getType());
    }

    /**
     * Tests toastInfo()
     *
     * @return void
     */
    public function testToastInfo(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->toastInfo("info");
        $this->assertNotNull($res);

        $this->assertInstanceOf(ToastEvent::class, $res);
        $this->assertEquals(ToastEvent::INFO, $res->getEventName());

        $this->assertEquals("info", $res->getToast()->getContent());
        $this->assertEquals(ToastInterface::TOAST_TYPE_INFO, $res->getToast()->getType());
    }

    /**
     * Tests toastSuccess()
     *
     * @return void
     */
    public function testToastSuccess(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->toastSuccess("success");
        $this->assertNotNull($res);

        $this->assertInstanceOf(ToastEvent::class, $res);
        $this->assertEquals(ToastEvent::SUCCESS, $res->getEventName());

        $this->assertEquals("success", $res->getToast()->getContent());
        $this->assertEquals(ToastInterface::TOAST_TYPE_SUCCESS, $res->getToast()->getType());
    }

    /**
     * Tests toastWarning()
     *
     * @return void
     */
    public function testToastWarning(): void {

        $obj = new TestAbstractController();
        $obj->setContainer($this->containerBuilder);

        $res = $obj->toastWarning("warning");
        $this->assertNotNull($res);

        $this->assertInstanceOf(ToastEvent::class, $res);
        $this->assertEquals(ToastEvent::WARNING, $res->getEventName());

        $this->assertEquals("warning", $res->getToast()->getContent());
        $this->assertEquals(ToastInterface::TOAST_TYPE_WARNING, $res->getToast()->getType());
    }
}
