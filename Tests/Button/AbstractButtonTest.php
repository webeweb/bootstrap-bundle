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

use WBW\Bundle\BootstrapBundle\Button\ButtonInterface;
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
     * Tests the setActive() method.
     *
     * @return void
     */
    public function testSetActive(): void {

        $obj = new TestButton("danger");

        $obj->setActive(true);
        $this->assertTrue($obj->getActive());
    }

    /**
     * Tests the setBlock() method.
     *
     * @return void
     */
    public function testSetBlock(): void {

        $obj = new TestButton("danger");

        $obj->setBlock(true);
        $this->assertTrue($obj->getBlock());
    }

    /**
     * Tests the setContent() method.
     *
     * @return void
     */
    public function testSetContent(): void {

        $obj = new TestButton("danger");

        $obj->setContent("content");
        $this->assertEquals("content", $obj->getContent());
    }

    /**
     * Tests the setDisabled() method.
     *
     * @return void
     */
    public function testSetDisabled(): void {

        $obj = new TestButton("danger");

        $obj->setDisabled(true);
        $this->assertTrue($obj->getDisabled());
    }

    /**
     * Tests the setOutline() method.
     *
     * @return void
     */
    public function testSetOutline(): void {

        $obj = new TestButton("danger");

        $obj->setOutline(true);
        $this->assertTrue($obj->getOutline());
    }

    /**
     * Tests the setSize() method.
     *
     * @return void
     */
    public function testSetSize(): void {

        $obj = new TestButton("danger");

        $obj->setSize(ButtonInterface::BUTTON_SIZE_LG);
        $this->assertEquals(ButtonInterface::BUTTON_SIZE_LG, $obj->getSize());
    }

    /**
     * Tests the setTitle() method.
     *
     * @return void
     */
    public function testSetTitle(): void {

        $obj = new TestButton("danger");

        $obj->setTitle("title");
        $this->assertEquals("title", $obj->getTitle());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestButton("danger");

        $this->assertNull($obj->getActive());
        $this->assertNull($obj->getBlock());
        $this->assertNull($obj->getContent());
        $this->assertNull($obj->getDisabled());
        $this->assertNull($obj->getOutline());
        $this->assertEquals("btn-", $obj->getPrefix());
        $this->assertNull($obj->getSize());
        $this->assertNull($obj->getTitle());
        $this->assertEquals("danger", $obj->getType());
    }
}
