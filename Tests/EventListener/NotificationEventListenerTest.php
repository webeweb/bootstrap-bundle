<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\EventListener;

use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Session;
use WBW\Bundle\BootstrapBundle\Event\NotificationEvent;
use WBW\Bundle\BootstrapBundle\EventListener\NotificationEventListener;
use WBW\Bundle\BootstrapBundle\Tests\AbstractFrameworkTestCase;

/**
 * Notification event listener.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\EventListener
 * @final
 */
final class NotificationEventListenerTest extends AbstractFrameworkTestCase {

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Session mock.
        $this->session = $this->getMockBuilder(Session::class)->getMock();
        $this->session->expects($this->any())->method("getFlashBag")->willReturn(new FlashBag());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new NotificationEventListener($this->session);

        $this->assertSame($this->session, $obj->getSession());
    }

    /**
     * Tests the onNotify() method.
     *
     * @return void
     */
    public function testOnNotify() {

        $obj = new NotificationEventListener($this->session);

        $this->assertNull($obj->onNotify(new NotificationEvent("", "", "")));
    }

}
