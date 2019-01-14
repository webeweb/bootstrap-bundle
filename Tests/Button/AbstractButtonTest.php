<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Button;

use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Button\TestButton;

/**
 * Abstract button test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Button
 */
class AbstractButtonTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestButton("type");

        $this->assertFalse($obj->getActive());
        $this->assertFalse($obj->getBlock());
        $this->assertNull($obj->getContent());
        $this->assertFalse($obj->getDisabled());
        $this->assertNull($obj->getSize());
        $this->assertNull($obj->getTitle());
        $this->assertEquals("type", $obj->getType());
    }

    /**
     * Tests the setActive() method.
     *
     * @return void
     */
    public function testSetActive() {

        $obj = new TestButton("type");

        $obj->setActive(true);
        $this->assertTrue($obj->getActive());
    }

    /**
     * Tests the setBlock() method.
     *
     * @return void
     */
    public function testSetBlock() {

        $obj = new TestButton("type");

        $obj->setBlock(true);
        $this->assertTrue($obj->getBlock());
    }

    /**
     * Tests the setContent() method.
     *
     * @return void
     */
    public function testSetContent() {

        $obj = new TestButton("type");

        $obj->setContent("content");
        $this->assertEquals("content", $obj->getContent());
    }

    /**
     * Tests the setDisabled() method.
     *
     * @return void
     */
    public function testSetDisabled() {

        $obj = new TestButton("type");

        $obj->setDisabled(true);
        $this->assertTrue($obj->getDisabled());
    }

    /**
     * Tests the setSize() method.
     *
     * @return void
     */
    public function testSetSize() {

        $obj = new TestButton("type");

        $obj->setSize("size");
        $this->assertEquals("size", $obj->getSize());
    }

    /**
     * Tests the setTitle() method.
     *
     * @return void
     */
    public function testSetTitle() {

        $obj = new TestButton("type");

        $obj->setTitle("title");
        $this->assertEquals("title", $obj->getTitle());
    }
}
