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
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set the Arguments mock.
        $this->args = [
            "content"  => "content",
            "title"    => "title",
            "size"     => "lg",
            "block"    => true,
            "active"   => true,
            "disabled" => true,
        ];
    }

    /**
     * Tests the newDangerButton() method.
     *
     * @return void
     */
    public function testNewDangerButton() {

        $obj = ButtonFactory::newDangerButton();

        $this->assertInstanceOf(ButtonInterface::class, $obj);
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_DANGER, $obj->getType());
    }

    /**
     * Tests the newDefaultButton() method.
     *
     * @return void
     */
    public function testNewDefaultButton() {

        $obj = ButtonFactory::newDefaultButton();

        $this->assertInstanceOf(ButtonInterface::class, $obj);
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_DEFAULT, $obj->getType());
    }

    /**
     * Tests the newInfoButton() method.
     *
     * @return void
     */
    public function testNewInfoButton() {

        $obj = ButtonFactory::newInfoButton();

        $this->assertInstanceOf(ButtonInterface::class, $obj);
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_INFO, $obj->getType());
    }

    /**
     * Tests the newLinkButton() method.
     *
     * @return void
     */
    public function testNewLinkButton() {

        $obj = ButtonFactory::newLinkButton();

        $this->assertInstanceOf(ButtonInterface::class, $obj);
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_LINK, $obj->getType());
    }

    /**
     * Tests the newPrimaryButton() method.
     *
     * @return void
     */
    public function testNewPrimaryButton() {

        $obj = ButtonFactory::newPrimaryButton();

        $this->assertInstanceOf(ButtonInterface::class, $obj);
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_PRIMARY, $obj->getType());
    }

    /**
     * Tests the newSuccessButton() method.
     *
     * @return void
     */
    public function testNewSuccessButton() {

        $obj = ButtonFactory::newSuccessButton();

        $this->assertInstanceOf(ButtonInterface::class, $obj);
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_SUCCESS, $obj->getType());
    }

    /**
     * Tests the newWarningButton() method.
     *
     * @return void
     */
    public function testNewWarningButton() {

        $obj = ButtonFactory::newWarningButton();

        $this->assertInstanceOf(ButtonInterface::class, $obj);
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_WARNING, $obj->getType());
    }

    /**
     * Tests the parseDangerButton() method.
     *
     * @return void
     */
    public function testParseDangerButton() {

        $obj = ButtonFactory::parseDangerButton($this->args);

        $this->assertInstanceOf(ButtonInterface::class, $obj);

        $this->assertEquals($this->args["active"], $obj->getActive());
        $this->assertEquals($this->args["block"], $obj->getBlock());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["disabled"], $obj->getDisabled());
        $this->assertEquals($this->args["size"], $obj->getSize());
        $this->assertEquals($this->args["title"], $obj->getTitle());
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_DANGER, $obj->getType());
    }

    /**
     * Tests the parseDefaultButton() method.
     *
     * @return void
     */
    public function testParseDefaultButton() {

        $obj = ButtonFactory::parseDefaultButton($this->args);

        $this->assertInstanceOf(ButtonInterface::class, $obj);

        $this->assertEquals($this->args["active"], $obj->getActive());
        $this->assertEquals($this->args["block"], $obj->getBlock());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["disabled"], $obj->getDisabled());
        $this->assertEquals($this->args["size"], $obj->getSize());
        $this->assertEquals($this->args["title"], $obj->getTitle());
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_DEFAULT, $obj->getType());
    }

    /**
     * Tests the parseInfoButton() method.
     *
     * @return void
     */
    public function testParseInfoButton() {

        $obj = ButtonFactory::parseInfoButton($this->args);

        $this->assertInstanceOf(ButtonInterface::class, $obj);

        $this->assertEquals($this->args["active"], $obj->getActive());
        $this->assertEquals($this->args["block"], $obj->getBlock());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["disabled"], $obj->getDisabled());
        $this->assertEquals($this->args["size"], $obj->getSize());
        $this->assertEquals($this->args["title"], $obj->getTitle());
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_INFO, $obj->getType());
    }

    /**
     * Tests the parseLinkButton() method.
     *
     * @return void
     */
    public function testParseLinkButton() {

        $obj = ButtonFactory::parseLinkButton($this->args);

        $this->assertInstanceOf(ButtonInterface::class, $obj);

        $this->assertEquals($this->args["active"], $obj->getActive());
        $this->assertEquals($this->args["block"], $obj->getBlock());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["disabled"], $obj->getDisabled());
        $this->assertEquals($this->args["size"], $obj->getSize());
        $this->assertEquals($this->args["title"], $obj->getTitle());
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_LINK, $obj->getType());
    }

    /**
     * Tests the parsePrimaryButton() method.
     *
     * @return void
     */
    public function testParsePrimaryButton() {

        $obj = ButtonFactory::parsePrimaryButton($this->args);

        $this->assertInstanceOf(ButtonInterface::class, $obj);

        $this->assertEquals($this->args["active"], $obj->getActive());
        $this->assertEquals($this->args["block"], $obj->getBlock());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["disabled"], $obj->getDisabled());
        $this->assertEquals($this->args["size"], $obj->getSize());
        $this->assertEquals($this->args["title"], $obj->getTitle());
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_PRIMARY, $obj->getType());
    }

    /**
     * Tests the parseSuccessButton() method.
     *
     * @return void
     */
    public function testParseSuccessButton() {

        $obj = ButtonFactory::parseSuccessButton($this->args);

        $this->assertInstanceOf(ButtonInterface::class, $obj);

        $this->assertEquals($this->args["active"], $obj->getActive());
        $this->assertEquals($this->args["block"], $obj->getBlock());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["disabled"], $obj->getDisabled());
        $this->assertEquals($this->args["size"], $obj->getSize());
        $this->assertEquals($this->args["title"], $obj->getTitle());
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_SUCCESS, $obj->getType());
    }

    /**
     * Tests the parseWarningButton() method.
     *
     * @return void
     */
    public function testParseWarningButton() {

        $obj = ButtonFactory::parseWarningButton($this->args);

        $this->assertInstanceOf(ButtonInterface::class, $obj);

        $this->assertEquals($this->args["active"], $obj->getActive());
        $this->assertEquals($this->args["block"], $obj->getBlock());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["disabled"], $obj->getDisabled());
        $this->assertEquals($this->args["size"], $obj->getSize());
        $this->assertEquals($this->args["title"], $obj->getTitle());
        $this->assertEquals(ButtonInterface::BUTTON_TYPE_WARNING, $obj->getType());
    }
}
