<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Asset\ProgressBar;

use WBW\Bundle\BootstrapBundle\Asset\ProgressBar\BasicProgressBar;
use WBW\Bundle\BootstrapBundle\Asset\ProgressBar\DangerProgressBar;
use WBW\Bundle\BootstrapBundle\Asset\ProgressBar\InfoProgressBar;
use WBW\Bundle\BootstrapBundle\Asset\ProgressBar\ProgressBarFactory;
use WBW\Bundle\BootstrapBundle\Asset\ProgressBar\ProgressBarInterface;
use WBW\Bundle\BootstrapBundle\Asset\ProgressBar\SuccessProgressBar;
use WBW\Bundle\BootstrapBundle\Asset\ProgressBar\WarningProgressBar;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Progress bar factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Asset\ProgressBar
 */
class ProgressBarFactoryTest extends AbstractTestCase {

    /**
     * Arguments.
     *
     * @var array
     */
    private $args;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the Arguments mock.
        $this->args = [
            "content"  => "content",
            "value"    => 25,
            "min"      => 0,
            "max"      => 1000,
            "animated" => true,
            "striped"  => true,
        ];
    }

    /**
     * Tests newBasicProgressBar()
     *
     * @return void
     */
    public function testNewBasicProgressBar(): void {

        $obj = ProgressBarFactory::newBasicProgressBar();

        $this->assertInstanceOf(BasicProgressBar::class, $obj);
    }

    /**
     * Tests newDangerProgressBar()
     *
     * @return void
     */
    public function testNewDangerProgressBar(): void {

        $obj = ProgressBarFactory::newDangerProgressBar();

        $this->assertInstanceOf(DangerProgressBar::class, $obj);
    }

    /**
     * Tests newInfoProgressBar()
     *
     * @return void
     */
    public function testNewInfoProgressBar(): void {

        $obj = ProgressBarFactory::newInfoProgressBar();

        $this->assertInstanceOf(InfoProgressBar::class, $obj);
    }

    /**
     * Tests newSuccessProgressBar()
     *
     * @return void
     */
    public function testNewSuccessProgressBar(): void {

        $obj = ProgressBarFactory::newSuccessProgressBar();

        $this->assertInstanceOf(SuccessProgressBar::class, $obj);
    }

    /**
     * Tests newWarningProgressBar()
     *
     * @return void
     */
    public function testNewWarningProgressBar(): void {

        $obj = ProgressBarFactory::newWarningProgressBar();

        $this->assertInstanceOf(WarningProgressBar::class, $obj);
    }

    /**
     * Tests parseBasicProgressBar()
     *
     * @return void
     */
    public function testParseBasicProgressBar(): void {

        $obj = ProgressBarFactory::parseBasicProgressBar($this->args);

        $this->assertInstanceOf(BasicProgressBar::class, $obj);

        $this->assertEquals($this->args["animated"], $obj->getAnimated());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["max"], $obj->getMax());
        $this->assertEquals($this->args["min"], $obj->getMin());
        $this->assertEquals($this->args["striped"], $obj->getStriped());
        $this->assertEquals($this->args["value"], $obj->getValue());
        $this->assertNull($obj->getType());
    }

    /**
     * Tests parseDangerProgressBar()
     *
     * @return void
     */
    public function testParseDangerProgressBar(): void {

        $obj = ProgressBarFactory::parseDangerProgressBar($this->args);

        $this->assertInstanceOf(DangerProgressBar::class, $obj);

        $this->assertEquals($this->args["animated"], $obj->getAnimated());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["max"], $obj->getMax());
        $this->assertEquals($this->args["min"], $obj->getMin());
        $this->assertEquals($this->args["striped"], $obj->getStriped());
        $this->assertEquals($this->args["value"], $obj->getValue());
        $this->assertEquals(ProgressBarInterface::PROGRESS_BAR_TYPE_DANGER, $obj->getType());
    }

    /**
     * Tests parseInfoProgressBar()
     *
     * @return void
     */
    public function testParseInfoProgressBar(): void {

        $obj = ProgressBarFactory::parseInfoProgressBar($this->args);

        $this->assertInstanceOf(InfoProgressBar::class, $obj);

        $this->assertEquals($this->args["animated"], $obj->getAnimated());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["max"], $obj->getMax());
        $this->assertEquals($this->args["min"], $obj->getMin());
        $this->assertEquals($this->args["striped"], $obj->getStriped());
        $this->assertEquals($this->args["value"], $obj->getValue());
        $this->assertEquals(ProgressBarInterface::PROGRESS_BAR_TYPE_INFO, $obj->getType());
    }

    /**
     * Tests parseSuccessProgressBar()
     *
     * @return void
     */
    public function testParseSuccessProgressBar(): void {

        $obj = ProgressBarFactory::parseSuccessProgressBar($this->args);

        $this->assertInstanceOf(SuccessProgressBar::class, $obj);

        $this->assertEquals($this->args["animated"], $obj->getAnimated());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["max"], $obj->getMax());
        $this->assertEquals($this->args["min"], $obj->getMin());
        $this->assertEquals($this->args["striped"], $obj->getStriped());
        $this->assertEquals($this->args["value"], $obj->getValue());
        $this->assertEquals(ProgressBarInterface::PROGRESS_BAR_TYPE_SUCCESS, $obj->getType());
    }

    /**
     * Tests parseWarningProgressBar()
     *
     * @return void
     */
    public function testParseWarningProgressBar(): void {

        $obj = ProgressBarFactory::parseWarningProgressBar($this->args);

        $this->assertInstanceOf(WarningProgressBar::class, $obj);

        $this->assertEquals($this->args["animated"], $obj->getAnimated());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["max"], $obj->getMax());
        $this->assertEquals($this->args["min"], $obj->getMin());
        $this->assertEquals($this->args["striped"], $obj->getStriped());
        $this->assertEquals($this->args["value"], $obj->getValue());
        $this->assertEquals(ProgressBarInterface::PROGRESS_BAR_TYPE_WARNING, $obj->getType());
    }
}
