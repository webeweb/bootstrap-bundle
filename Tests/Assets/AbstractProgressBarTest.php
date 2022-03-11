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

use WBW\Bundle\BootstrapBundle\Assets\ProgressBarInterface;
use WBW\Bundle\BootstrapBundle\Serializer\SerializerKeys;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Assets\TestProgressBar;

/**
 * Abstract progress bar test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Asset\ProgressBar
 */
class AbstractProgressBarTest extends AbstractTestCase {

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/AbstractProgressBarTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new TestProgressBar("test");
        $obj->setAnimated(true);
        $obj->setContent(SerializerKeys::CONTENT);
        $obj->setHeight(16);
        $obj->setMin(0);
        $obj->setMax(100);
        $obj->setStriped(true);
        $obj->setValue(50);

        $res = $obj->jsonSerialize();
        $this->assertCount(9, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests setAnimated()
     *
     * @return void
     */
    public function testSetAnimated(): void {

        $obj = new TestProgressBar("type");

        $obj->setAnimated(true);
        $this->assertTrue($obj->getAnimated());
    }

    /**
     * Tests setStriped()
     *
     * @return void
     */
    public function testSetStriped(): void {

        $obj = new TestProgressBar("type");

        $obj->setStriped(true);
        $this->assertTrue($obj->getStriped());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestProgressBar("type");

        $this->assertInstanceOf(ProgressBarInterface::class, $obj);

        $this->assertNull($obj->getContent());
        $this->assertNull($obj->getHeight());
        $this->assertNull($obj->getMax());
        $this->assertNull($obj->getMin());
        $this->assertEquals("type", $obj->getType());
        $this->assertNull($obj->getValue());

        $this->assertNull($obj->getAnimated());
        $this->assertEquals("progress-bar-", $obj->getPrefix());
        $this->assertNull($obj->getStriped());
    }
}
