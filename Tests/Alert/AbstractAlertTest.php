<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Alert;

use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Alert\TestAlert;

/**
 * Abstract alert test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Alert
 */
class AbstractAlertTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestAlert("danger");

        $this->assertNull($obj->getContent());
        $this->assertNull($obj->getDismissible());
        $this->assertEquals("alert-", $obj->getPrefix());
        $this->assertEquals("danger", $obj->getType());
    }

    /**
     * Tests the setContent() method.
     *
     * @return void
     */
    public function testSetContent() {

        $obj = new TestAlert("danger");

        $obj->setContent("content");
        $this->assertEquals("content", $obj->getContent());
    }

    /**
     * Tests the setDismissible() method.
     *
     * @return void
     */
    public function testSetDismissible() {

        $obj = new TestAlert("danger");

        $obj->setDismissible(true);
        $this->assertTrue($obj->getDismissible());
    }

}
