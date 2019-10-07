<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Badge;

use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Badge\TestBadge;

/**
 * Abstract badge test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Badge
 */
class AbstractBadgeTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestBadge("danger");

        $this->assertNull($obj->getContent());
        $this->assertNull($obj->getPill());
        $this->assertEquals("danger", $obj->getType());
    }

    /**
     * Tests the setContent() method.
     *
     * @return void
     */
    public function testSetContent() {

        $obj = new TestBadge("danger");

        $obj->setContent("content");
        $this->assertEquals("content", $obj->getContent());
    }

    /**
     * Tests the setPill() method.
     *
     * @return void
     */
    public function testSetPill() {

        $obj = new TestBadge("danger");

        $obj->setPill(true);
        $this->assertTrue($obj->getPill());
    }

}
