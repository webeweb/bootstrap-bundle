<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Asset\Alert;

use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Asset\Alert\TestAlert;

/**
 * Abstract alert test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Asset\Alert
 */
class AbstractAlertTest extends AbstractTestCase {

    /**
     * Tests setContent()
     *
     * @return void
     */
    public function testSetContent(): void {

        $obj = new TestAlert("danger");

        $obj->setContent("content");
        $this->assertEquals("content", $obj->getContent());
    }

    /**
     * Tests setDismissible()
     *
     * @return void
     */
    public function testSetDismissible(): void {

        $obj = new TestAlert("danger");

        $obj->setDismissible(true);
        $this->assertTrue($obj->getDismissible());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestAlert("danger");

        $this->assertNull($obj->getContent());
        $this->assertNull($obj->getDismissible());
        $this->assertEquals("alert-", $obj->getPrefix());
        $this->assertEquals("danger", $obj->getType());
    }

}
