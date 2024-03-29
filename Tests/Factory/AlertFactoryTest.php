<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Factory;

use WBW\Bundle\BootstrapBundle\Assets\Alert\DangerAlert;
use WBW\Bundle\BootstrapBundle\Assets\Alert\DarkAlert;
use WBW\Bundle\BootstrapBundle\Assets\Alert\InfoAlert;
use WBW\Bundle\BootstrapBundle\Assets\Alert\LightAlert;
use WBW\Bundle\BootstrapBundle\Assets\Alert\PrimaryAlert;
use WBW\Bundle\BootstrapBundle\Assets\Alert\SecondaryAlert;
use WBW\Bundle\BootstrapBundle\Assets\Alert\SuccessAlert;
use WBW\Bundle\BootstrapBundle\Assets\Alert\WarningAlert;
use WBW\Bundle\BootstrapBundle\Assets\AlertInterface;
use WBW\Bundle\BootstrapBundle\Factory\AlertFactory;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Assets\AlertInterface as BaseAlertInterface;

/**
 * Alert factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Factory
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
    protected function setUp(): void {
        parent::setUp();

        // Set the Arguments mock.
        $this->args = [
            "content"     => "content",
            "dismissible" => true,
        ];
    }

    /**
     * Test newDangerAlert()
     *
     * @return void
     */
    public function testNewDangerAlert(): void {

        $obj = AlertFactory::newDangerAlert();

        $this->assertInstanceOf(DangerAlert::class, $obj);
    }

    /**
     * Test newDarkAlert()
     *
     * @return void
     */
    public function testNewDarkAlert(): void {

        $obj = AlertFactory::newDarkAlert();

        $this->assertInstanceOf(DarkAlert::class, $obj);
    }

    /**
     * Test newInfoAlert()
     *
     * @return void
     */
    public function testNewInfoAlert(): void {

        $obj = AlertFactory::newInfoAlert();

        $this->assertInstanceOf(InfoAlert::class, $obj);
    }

    /**
     * Test newLightAlert()
     *
     * @return void
     */
    public function testNewLightAlert(): void {

        $obj = AlertFactory::newLightAlert();

        $this->assertInstanceOf(LightAlert::class, $obj);
    }

    /**
     * Test newPrimaryAlert()
     *
     * @return void
     */
    public function testNewPrimaryAlert(): void {

        $obj = AlertFactory::newPrimaryAlert();

        $this->assertInstanceOf(PrimaryAlert::class, $obj);
    }

    /**
     * Test newSecondaryAlert()
     *
     * @return void
     */
    public function testNewSecondaryAlert(): void {

        $obj = AlertFactory::newSecondaryAlert();

        $this->assertInstanceOf(SecondaryAlert::class, $obj);
    }

    /**
     * Test newSuccessAlert()
     *
     * @return void
     */
    public function testNewSuccessAlert(): void {

        $obj = AlertFactory::newSuccessAlert();

        $this->assertInstanceOf(SuccessAlert::class, $obj);
    }

    /**
     * Test newWarningAlert()
     *
     * @return void
     */
    public function testNewWarningAlert(): void {

        $obj = AlertFactory::newWarningAlert();

        $this->assertInstanceOf(WarningAlert::class, $obj);
    }

    /**
     * Test parseDangerAlert()
     *
     * @return void
     */
    public function testParseDangerAlert(): void {

        $obj = AlertFactory::parseDangerAlert($this->args);

        $this->assertInstanceOf(DangerAlert::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["dismissible"], $obj->getDismissible());

        $this->assertEquals(BaseAlertInterface::ALERT_TYPE_DANGER, $obj->getType());
    }

    /**
     * Test parseDarkAlert()
     *
     * @return void
     */
    public function testParseDarkAlert(): void {

        $obj = AlertFactory::parseDarkAlert($this->args);

        $this->assertInstanceOf(DarkAlert::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["dismissible"], $obj->getDismissible());

        $this->assertEquals(AlertInterface::ALERT_TYPE_DARK, $obj->getType());
    }

    /**
     * Test parseInfoAlert()
     *
     * @return void
     */
    public function testParseInfoAlert(): void {

        $obj = AlertFactory::parseInfoAlert($this->args);

        $this->assertInstanceOf(InfoAlert::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["dismissible"], $obj->getDismissible());

        $this->assertEquals(BaseAlertInterface::ALERT_TYPE_INFO, $obj->getType());
    }

    /**
     * Test parseLightAlert()
     *
     * @return void
     */
    public function testParseLightAlert(): void {

        $obj = AlertFactory::parseLightAlert($this->args);

        $this->assertInstanceOf(LightAlert::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["dismissible"], $obj->getDismissible());

        $this->assertEquals(AlertInterface::ALERT_TYPE_LIGHT, $obj->getType());
    }

    /**
     * Test parsePrimaryAlert()
     *
     * @return void
     */
    public function testParsePrimaryAlert(): void {

        $obj = AlertFactory::parsePrimaryAlert($this->args);

        $this->assertInstanceOf(PrimaryAlert::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["dismissible"], $obj->getDismissible());

        $this->assertEquals(AlertInterface::ALERT_TYPE_PRIMARY, $obj->getType());
    }

    /**
     * Test parseSecondaryAlert()
     *
     * @return void
     */
    public function testParseSecondaryAlert(): void {

        $obj = AlertFactory::parseSecondaryAlert($this->args);

        $this->assertInstanceOf(SecondaryAlert::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["dismissible"], $obj->getDismissible());

        $this->assertEquals(AlertInterface::ALERT_TYPE_SECONDARY, $obj->getType());
    }

    /**
     * Test parseSuccessAlert()
     *
     * @return void
     */
    public function testParseSuccessAlert(): void {

        $obj = AlertFactory::parseSuccessAlert($this->args);

        $this->assertInstanceOf(SuccessAlert::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["dismissible"], $obj->getDismissible());

        $this->assertEquals(BaseAlertInterface::ALERT_TYPE_SUCCESS, $obj->getType());
    }

    /**
     * Test parseWarningAlert()
     *
     * @return void
     */
    public function testParseWarningAlert(): void {

        $obj = AlertFactory::parseWarningAlert($this->args);

        $this->assertInstanceOf(WarningAlert::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["dismissible"], $obj->getDismissible());

        $this->assertEquals(BaseAlertInterface::ALERT_TYPE_WARNING, $obj->getType());
    }
}
