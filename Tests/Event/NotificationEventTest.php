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

use PHPUnit_Framework_TestCase;
use WBW\Bundle\BootstrapBundle\Event\NotificationEvent;

/**
 * Notification event test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Event
 * @final
 */
final class NotificationEventTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new NotificationEvent("name", "notification", "type");

        $this->assertEquals("name", $obj->getEventName());
        $this->assertEquals("notification", $obj->getNotification());
        $this->assertEquals("type", $obj->getType());
    }

}
