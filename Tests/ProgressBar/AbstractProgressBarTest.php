<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\ProgressBar;

use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\ProgressBar\TestProgressBar;

/**
 * Abstract progress bar test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\ProgressBar
 */
class AbstractProgressBarTest extends AbstractTestCase {

    /**
     * Tests the setAnimated() method.
     *
     * @return void
     */
    public function testSetAnimated(): void {

        $obj = new TestProgressBar("type");

        $obj->setAnimated(true);
        $this->assertTrue($obj->getAnimated());
    }

    /**
     * Tests the setContent() method.
     *
     * @return void
     */
    public function testSetContent(): void {

        $obj = new TestProgressBar("type");

        $obj->setContent("content");
        $this->assertEquals("content", $obj->getContent());
    }

    /**
     * Tests the setHeight() method.
     *
     * @return void
     */
    public function testSetHeight(): void {

        $obj = new TestProgressBar("type");

        $obj->setHeight(1);
        $this->assertEquals(1, $obj->getHeight());
    }

    /**
     * Tests the setMax() method.
     *
     * @return void
     */
    public function testSetMax(): void {

        $obj = new TestProgressBar("type");

        $obj->setMax(100);
        $this->assertEquals(100, $obj->getMax());
    }

    /**
     * Tests the setMin() method.
     *
     * @return void
     */
    public function testSetMin(): void {

        $obj = new TestProgressBar("type");

        $obj->setMin(0);
        $this->assertEquals(0, $obj->getMin());
    }

    /**
     * Tests the setStriped() method.
     *
     * @return void
     */
    public function testSetStriped(): void {

        $obj = new TestProgressBar("type");

        $obj->setStriped(true);
        $this->assertTrue($obj->getStriped());
    }

    /**
     * Tests the setValue() method.
     *
     * @return void
     */
    public function testSetValue(): void {

        $obj = new TestProgressBar("type");

        $obj->setValue(50);
        $this->assertEquals(50, $obj->getValue());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestProgressBar("type");

        $this->assertNull($obj->getAnimated());
        $this->assertNull($obj->getContent());
        $this->assertNull($obj->getHeight());
        $this->assertNull($obj->getMax());
        $this->assertNull($obj->getMin());
        $this->assertEquals("progress-bar-", $obj->getPrefix());
        $this->assertNull($obj->getStriped());
        $this->assertEquals("type", $obj->getType());
        $this->assertNull($obj->getValue());
    }
}
