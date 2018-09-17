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

use WBW\Bundle\BootstrapBundle\Event\NotificationEvent;
use WBW\Bundle\BootstrapBundle\Tests\AbstractBootstrapFrameworkTestCase;

/**
 * Notification event test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Event
 * @final
 */
final class NotificationEventTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new NotificationEvent("name", "notification", "type");

        $this->assertEquals("name", $obj->getEventName());
        $this->assertEquals("notification", $obj->getNotification());
        $this->assertEquals("type", $obj->getType());
    }

}
