<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Event;

use WBW\Bundle\BootstrapBundle\Event\NotificationEvents;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;

/**
 * Notification events test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Event
 * @final
 */
final class NotificationEventsTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("webeweb.bootstrap.event.notification.danger", NotificationEvents::NOTIFICATION_DANGER);
        $this->assertEquals("webeweb.bootstrap.event.notification.info", NotificationEvents::NOTIFICATION_INFO);
        $this->assertEquals("webeweb.bootstrap.event.notification.success", NotificationEvents::NOTIFICATION_SUCCESS);
        $this->assertEquals("webeweb.bootstrap.event.notification.warning", NotificationEvents::NOTIFICATION_WARNING);
    }

}
