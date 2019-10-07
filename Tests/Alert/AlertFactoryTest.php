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

use WBW\Bundle\BootstrapBundle\Alert\AlertFactory;
use WBW\Bundle\BootstrapBundle\Alert\AlertInterface;
use WBW\Bundle\BootstrapBundle\Alert\DangerAlert;
use WBW\Bundle\BootstrapBundle\Alert\DarkAlert;
use WBW\Bundle\BootstrapBundle\Alert\InfoAlert;
use WBW\Bundle\BootstrapBundle\Alert\LightAlert;
use WBW\Bundle\BootstrapBundle\Alert\PrimaryAlert;
use WBW\Bundle\BootstrapBundle\Alert\SecondaryAlert;
use WBW\Bundle\BootstrapBundle\Alert\SuccessAlert;
use WBW\Bundle\BootstrapBundle\Alert\WarningAlert;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Alert factory test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Alert
 */
class AlertFactoryTest extends AbstractTestCase {

    /**
     * Arguments.
     *
     * @var array
     */
    private $args;

    /**
     * {@inheritDoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set the Arguments mock.
        $this->args = [
            "content"     => "content",
            "dismissible" => true,
        ];
    }

    /**
     * Tests the newDangerAlert() method.
     *
     * @return void
     */
    public function testNewDangerAlert() {

        $obj = AlertFactory::newDangerAlert();

        $this->assertInstanceOf(DangerAlert::class, $obj);
    }

    /**
     * Tests the newDarkAlert() method.
     *
     * @return void
     */
    public function testNewDarkAlert() {

        $obj = AlertFactory::newDarkAlert();

        $this->assertInstanceOf(DarkAlert::class, $obj);
    }

    /**
     * Tests the newInfoAlert() method.
     *
     * @return void
     */
    public function testNewInfoAlert() {

        $obj = AlertFactory::newInfoAlert();

        $this->assertInstanceOf(InfoAlert::class, $obj);
    }

    /**
     * Tests the newLightAlert() method.
     *
     * @return void
     */
    public function testNewLightAlert() {

        $obj = AlertFactory::newLightAlert();

        $this->assertInstanceOf(LightAlert::class, $obj);
    }

    /**
     * Tests the newPrimaryAlert() method.
     *
     * @return void
     */
    public function testNewPrimaryAlert() {

        $obj = AlertFactory::newPrimaryAlert();

        $this->assertInstanceOf(PrimaryAlert::class, $obj);
    }

    /**
     * Tests the newSecondaryAlert() method.
     *
     * @return void
     */
    public function testNewSecondaryAlert() {

        $obj = AlertFactory::newSecondaryAlert();

        $this->assertInstanceOf(SecondaryAlert::class, $obj);
    }

    /**
     * Tests the newSuccessAlert() method.
     *
     * @return void
     */
    public function testNewSuccessAlert() {

        $obj = AlertFactory::newSuccessAlert();

        $this->assertInstanceOf(SuccessAlert::class, $obj);
    }

    /**
     * Tests the newWarningAlert() method.
     *
     * @return void
     */
    public function testNewWarningAlert() {

        $obj = AlertFactory::newWarningAlert();

        $this->assertInstanceOf(WarningAlert::class, $obj);
    }

    /**
     * Tests the parseDangerAlert() method.
     *
     * @return void
     */
    public function testParseDangerAlert() {

        $obj = AlertFactory::parseDangerAlert($this->args);

        $this->assertInstanceOf(DangerAlert::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["dismissible"], $obj->getDismissible());

        $this->assertEquals(AlertInterface::ALERT_TYPE_DANGER, $obj->getType());
    }

    /**
     * Tests the parseDarkAlert() method.
     *
     * @return void
     */
    public function testParseDarkAlert() {

        $obj = AlertFactory::parseDarkAlert($this->args);

        $this->assertInstanceOf(DarkAlert::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["dismissible"], $obj->getDismissible());

        $this->assertEquals(AlertInterface::ALERT_TYPE_DARK, $obj->getType());
    }

    /**
     * Tests the parseInfoAlert() method.
     *
     * @return void
     */
    public function testParseInfoAlert() {

        $obj = AlertFactory::parseInfoAlert($this->args);

        $this->assertInstanceOf(InfoAlert::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["dismissible"], $obj->getDismissible());

        $this->assertEquals(AlertInterface::ALERT_TYPE_INFO, $obj->getType());
    }

    /**
     * Tests the parseLightAlert() method.
     *
     * @return void
     */
    public function testParseLightAlert() {

        $obj = AlertFactory::parseLightAlert($this->args);

        $this->assertInstanceOf(LightAlert::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["dismissible"], $obj->getDismissible());

        $this->assertEquals(AlertInterface::ALERT_TYPE_LIGHT, $obj->getType());
    }

    /**
     * Tests the parsePrimaryAlert() method.
     *
     * @return void
     */
    public function testParsePrimaryAlert() {

        $obj = AlertFactory::parsePrimaryAlert($this->args);

        $this->assertInstanceOf(PrimaryAlert::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["dismissible"], $obj->getDismissible());

        $this->assertEquals(AlertInterface::ALERT_TYPE_PRIMARY, $obj->getType());
    }

    /**
     * Tests the parseSecondaryAlert() method.
     *
     * @return void
     */
    public function testParseSecondaryAlert() {

        $obj = AlertFactory::parseSecondaryAlert($this->args);

        $this->assertInstanceOf(SecondaryAlert::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["dismissible"], $obj->getDismissible());

        $this->assertEquals(AlertInterface::ALERT_TYPE_SECONDARY, $obj->getType());
    }

    /**
     * Tests the parseSuccessAlert() method.
     *
     * @return void
     */
    public function testParseSuccessAlert() {

        $obj = AlertFactory::parseSuccessAlert($this->args);

        $this->assertInstanceOf(SuccessAlert::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["dismissible"], $obj->getDismissible());

        $this->assertEquals(AlertInterface::ALERT_TYPE_SUCCESS, $obj->getType());
    }

    /**
     * Tests the parseWarningAlert() method.
     *
     * @return void
     */
    public function testParseWarningAlert() {

        $obj = AlertFactory::parseWarningAlert($this->args);

        $this->assertInstanceOf(WarningAlert::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["dismissible"], $obj->getDismissible());

        $this->assertEquals(AlertInterface::ALERT_TYPE_WARNING, $obj->getType());
    }
}
