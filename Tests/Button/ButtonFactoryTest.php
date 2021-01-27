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

use WBW\Bundle\BootstrapBundle\Button\ButtonFactory;
use WBW\Bundle\BootstrapBundle\Button\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Button\DangerButton;
use WBW\Bundle\BootstrapBundle\Button\DarkButton;
use WBW\Bundle\BootstrapBundle\Button\DefaultButton;
use WBW\Bundle\BootstrapBundle\Button\InfoButton;
use WBW\Bundle\BootstrapBundle\Button\LightButton;
use WBW\Bundle\BootstrapBundle\Button\LinkButton;
use WBW\Bundle\BootstrapBundle\Button\PrimaryButton;
use WBW\Bundle\BootstrapBundle\Button\SecondaryButton;
use WBW\Bundle\BootstrapBundle\Button\SuccessButton;
use WBW\Bundle\BootstrapBundle\Button\WarningButton;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Button factory test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Button
 */
class ButtonFactoryTest extends AbstractTestCase {

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
            "title"    => "title",
            "size"     => "lg",
            "block"    => true,
            "active"   => true,
            "disabled" => true,
            "outline"  => true,
        ];
    }

    /**
     * Tests the newDangerButton() method.
     *
     * @return void
     */
    public function testNewDangerButton(): void {

        $obj = ButtonFactory::newDangerButton();

        $this->assertInstanceOf(DangerButton::class, $obj);
    }

    /**
     * Tests the newDarkButton() method.
     *
     * @return void
     */
    public function testNewDarkButton(): void {

        $obj = ButtonFactory::newDarkButton();

        $this->assertInstanceOf(DarkButton::class, $obj);
    }

    /**
     * Tests the newDefaultButton() method.
     *
     * @return void
     */
    public function testNewDefaultButton(): void {

        $obj = ButtonFactory::newDefaultButton();

        $this->assertInstanceOf(DefaultButton::class, $obj);
    }

    /**
     * Tests the newInfoButton() method.
     *
     * @return void
     */
    public function testNewInfoButton(): void {

        $obj = ButtonFactory::newInfoButton();

        $this->assertInstanceOf(InfoButton::class, $obj);
    }

    /**
     * Tests the newLightButton() method.
     *
     * @return void
     */
    public function testNewLightButton(): void {

        $obj = ButtonFactory::newLightButton();

        $this->assertInstanceOf(LightButton::class, $obj);
    }

    /**
     * Tests the newLinkButton() method.
     *
     * @return void
     */
    public function testNewLinkButton(): void {

        $obj = ButtonFactory::newLinkButton();

        $this->assertInstanceOf(LinkButton::class, $obj);
    }

    /**
     * Tests the newPrimaryButton() method.
     *
     * @return void
     */
    public function testNewPrimaryButton(): void {

        $obj = ButtonFactory::newPrimaryButton();

        $this->assertInstanceOf(PrimaryButton::class, $obj);
    }

    /**
     * Tests the newSecondaryButton() method.
     *
     * @return void
     */
    public function testNewSecondaryButton(): void {

        $obj = ButtonFactory::newSecondaryButton();

        $this->assertInstanceOf(SecondaryButton::class, $obj);
    }

    /**
     * Tests the newSuccessButton() method.
     *
     * @return void
     */
    public function testNewSuccessButton(): void {

        $obj = ButtonFactory::newSuccessButton();

        $this->assertInstanceOf(SuccessButton::class, $obj);
    }

    /**
     * Tests the newWarningButton() method.
     *
     * @return void
     */
    public function testNewWarningButton(): void {

        $obj = ButtonFactory::newWarningButton();

        $this->assertInstanceOf(WarningButton::class, $obj);
    }

    /**
     * Tests the parseDangerButton() method.
     *
     * @return void
     */
    public function testParseDangerButton(): void {

        $obj = ButtonFactory::parseDangerButton($this->args);

        $this->assertInstanceOf(DangerButton::class, $obj);

        $this->assertEquals($this->args["active"], $obj->getActive());
        $this->assertEquals($this->args["block"], $obj->getBlock());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["disabled"], $obj->getDisabled());
        $this->assertEquals($this->args["outline"], $obj->getOutline());
        $this->assertEquals($this->args["size"], $obj->getSize());
        $this->assertEquals($this->args["title"], $obj->getTitle());
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_DANGER, $obj->getType());
    }

    /**
     * Tests the parseDarkButton() method.
     *
     * @return void
     */
    public function testParseDarkButton(): void {

        $obj = ButtonFactory::parseDarkButton($this->args);

        $this->assertInstanceOf(DarkButton::class, $obj);

        $this->assertEquals($this->args["active"], $obj->getActive());
        $this->assertEquals($this->args["block"], $obj->getBlock());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["disabled"], $obj->getDisabled());
        $this->assertEquals($this->args["outline"], $obj->getOutline());
        $this->assertEquals($this->args["size"], $obj->getSize());
        $this->assertEquals($this->args["title"], $obj->getTitle());
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_DARK, $obj->getType());
    }

    /**
     * Tests the parseDefaultButton() method.
     *
     * @return void
     */
    public function testParseDefaultButton(): void {

        $obj = ButtonFactory::parseDefaultButton($this->args);

        $this->assertInstanceOf(DefaultButton::class, $obj);

        $this->assertEquals($this->args["active"], $obj->getActive());
        $this->assertEquals($this->args["block"], $obj->getBlock());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["disabled"], $obj->getDisabled());
        $this->assertEquals($this->args["outline"], $obj->getOutline());
        $this->assertEquals($this->args["size"], $obj->getSize());
        $this->assertEquals($this->args["title"], $obj->getTitle());
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_DEFAULT, $obj->getType());
    }

    /**
     * Tests the parseInfoButton() method.
     *
     * @return void
     */
    public function testParseInfoButton(): void {

        $obj = ButtonFactory::parseInfoButton($this->args);

        $this->assertInstanceOf(InfoButton::class, $obj);

        $this->assertEquals($this->args["active"], $obj->getActive());
        $this->assertEquals($this->args["block"], $obj->getBlock());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["disabled"], $obj->getDisabled());
        $this->assertEquals($this->args["outline"], $obj->getOutline());
        $this->assertEquals($this->args["size"], $obj->getSize());
        $this->assertEquals($this->args["title"], $obj->getTitle());
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_INFO, $obj->getType());
    }

    /**
     * Tests the parseLightButton() method.
     *
     * @return void
     */
    public function testParseLightButton(): void {

        $obj = ButtonFactory::parseLightButton($this->args);

        $this->assertInstanceOf(LightButton::class, $obj);

        $this->assertEquals($this->args["active"], $obj->getActive());
        $this->assertEquals($this->args["block"], $obj->getBlock());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["disabled"], $obj->getDisabled());
        $this->assertEquals($this->args["outline"], $obj->getOutline());
        $this->assertEquals($this->args["size"], $obj->getSize());
        $this->assertEquals($this->args["title"], $obj->getTitle());
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_LIGHT, $obj->getType());
    }

    /**
     * Tests the parseLinkButton() method.
     *
     * @return void
     */
    public function testParseLinkButton(): void {

        $obj = ButtonFactory::parseLinkButton($this->args);

        $this->assertInstanceOf(LinkButton::class, $obj);

        $this->assertEquals($this->args["active"], $obj->getActive());
        $this->assertEquals($this->args["block"], $obj->getBlock());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["disabled"], $obj->getDisabled());
        $this->assertEquals($this->args["outline"], $obj->getOutline());
        $this->assertEquals($this->args["size"], $obj->getSize());
        $this->assertEquals($this->args["title"], $obj->getTitle());
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_LINK, $obj->getType());
    }

    /**
     * Tests the parsePrimaryButton() method.
     *
     * @return void
     */
    public function testParsePrimaryButton(): void {

        $obj = ButtonFactory::parsePrimaryButton($this->args);

        $this->assertInstanceOf(PrimaryButton::class, $obj);

        $this->assertEquals($this->args["active"], $obj->getActive());
        $this->assertEquals($this->args["block"], $obj->getBlock());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["disabled"], $obj->getDisabled());
        $this->assertEquals($this->args["outline"], $obj->getOutline());
        $this->assertEquals($this->args["size"], $obj->getSize());
        $this->assertEquals($this->args["title"], $obj->getTitle());
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_PRIMARY, $obj->getType());
    }

    /**
     * Tests the parseSecondaryButton() method.
     *
     * @return void
     */
    public function testParseSecondaryButton(): void {

        $obj = ButtonFactory::parseSecondaryButton($this->args);

        $this->assertInstanceOf(SecondaryButton::class, $obj);

        $this->assertEquals($this->args["active"], $obj->getActive());
        $this->assertEquals($this->args["block"], $obj->getBlock());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["disabled"], $obj->getDisabled());
        $this->assertEquals($this->args["outline"], $obj->getOutline());
        $this->assertEquals($this->args["size"], $obj->getSize());
        $this->assertEquals($this->args["title"], $obj->getTitle());
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_SECONDARY, $obj->getType());
    }

    /**
     * Tests the parseSuccessButton() method.
     *
     * @return void
     */
    public function testParseSuccessButton(): void {

        $obj = ButtonFactory::parseSuccessButton($this->args);

        $this->assertInstanceOf(SuccessButton::class, $obj);

        $this->assertEquals($this->args["active"], $obj->getActive());
        $this->assertEquals($this->args["block"], $obj->getBlock());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["disabled"], $obj->getDisabled());
        $this->assertEquals($this->args["outline"], $obj->getOutline());
        $this->assertEquals($this->args["size"], $obj->getSize());
        $this->assertEquals($this->args["title"], $obj->getTitle());
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_SUCCESS, $obj->getType());
    }

    /**
     * Tests the parseWarningButton() method.
     *
     * @return void
     */
    public function testParseWarningButton(): void {

        $obj = ButtonFactory::parseWarningButton($this->args);

        $this->assertInstanceOf(WarningButton::class, $obj);

        $this->assertEquals($this->args["active"], $obj->getActive());
        $this->assertEquals($this->args["block"], $obj->getBlock());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["disabled"], $obj->getDisabled());
        $this->assertEquals($this->args["outline"], $obj->getOutline());
        $this->assertEquals($this->args["size"], $obj->getSize());
        $this->assertEquals($this->args["title"], $obj->getTitle());
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_WARNING, $obj->getType());
    }
}
