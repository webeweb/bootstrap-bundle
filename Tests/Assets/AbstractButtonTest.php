<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Assets;

use WBW\Bundle\BootstrapBundle\Assets\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Assets\TestButton;

/**
 * Abstract button test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Assets
 */
class AbstractButtonTest extends AbstractTestCase {

    /**
     * Tests setActive()
     *
     * @return void
     */
    public function testSetActive(): void {

        $obj = new TestButton("danger");

        $obj->setActive(true);
        $this->assertTrue($obj->getActive());
    }

    /**
     * Tests setBlock()
     *
     * @return void
     */
    public function testSetBlock(): void {

        $obj = new TestButton("danger");

        $obj->setBlock(true);
        $this->assertTrue($obj->getBlock());
    }

    /**
     * Tests setDisabled()
     *
     * @return void
     */
    public function testSetDisabled(): void {

        $obj = new TestButton("danger");

        $obj->setDisabled(true);
        $this->assertTrue($obj->getDisabled());
    }

    /**
     * Tests setOutline()
     *
     * @return void
     */
    public function testSetOutline(): void {

        $obj = new TestButton("danger");

        $obj->setOutline(true);
        $this->assertTrue($obj->getOutline());
    }

    /**
     * Tests setSize()
     *
     * @return void
     */
    public function testSetSize(): void {

        $obj = new TestButton("danger");

        $obj->setSize(ButtonInterface::BUTTON_SIZE_LG);
        $this->assertEquals(ButtonInterface::BUTTON_SIZE_LG, $obj->getSize());
    }

    /**
     * Tests setTitle()
     *
     * @return void
     */
    public function testSetTitle(): void {

        $obj = new TestButton("danger");

        $obj->setTitle("title");
        $this->assertEquals("title", $obj->getTitle());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestButton("danger");

        $this->assertNull($obj->getContent());
        $this->assertEquals("danger", $obj->getType());

        $this->assertNull($obj->getActive());
        $this->assertNull($obj->getBlock());
        $this->assertNull($obj->getDisabled());
        $this->assertNull($obj->getOutline());
        $this->assertEquals("btn-", $obj->getPrefix());
        $this->assertNull($obj->getSize());
        $this->assertNull($obj->getTitle());
    }
}
