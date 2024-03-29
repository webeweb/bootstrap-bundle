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

use WBW\Bundle\BootstrapBundle\Assets\AbstractButton;
use WBW\Bundle\BootstrapBundle\Assets\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Assets\TestButton;
use WBW\Library\Serializer\SerializerKeys as BaseSerializerKeys;
use WBW\Library\Symfony\Assets\ButtonInterface as BaseButtonInterface;

/**
 * Abstract button test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Assets
 */
class AbstractButtonTest extends AbstractTestCase {

    /**
     * Test enumSizes()
     *
     * @return void
     */
    public function testEnumSizes(): void {

        $res = [
            ButtonInterface::BUTTON_SIZE_LG,
            ButtonInterface::BUTTON_SIZE_SM,
            ButtonInterface::BUTTON_SIZE_XS,
        ];
        $this->assertEquals($res, AbstractButton::enumSizes());
    }

    /**
     * Test enumTypes()
     *
     * @return void
     */
    public function testEnumTypes(): void {

        $res = [
            BaseButtonInterface::BUTTON_TYPE_DANGER,
            ButtonInterface::BUTTON_TYPE_DARK,
            ButtonInterface::BUTTON_TYPE_DEFAULT,
            BaseButtonInterface::BUTTON_TYPE_INFO,
            ButtonInterface::BUTTON_TYPE_LIGHT,
            ButtonInterface::BUTTON_TYPE_LINK,
            ButtonInterface::BUTTON_TYPE_PRIMARY,
            ButtonInterface::BUTTON_TYPE_SECONDARY,
            BaseButtonInterface::BUTTON_TYPE_SUCCESS,
            BaseButtonInterface::BUTTON_TYPE_WARNING,
        ];
        $this->assertEquals($res, AbstractButton::enumTypes());
    }

    /**
     * Test jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/AbstractButtonTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new TestButton("test");
        $obj->setActive(true);
        $obj->setBlock(true);
        $obj->setContent(BaseSerializerKeys::CONTENT);
        $obj->setDisabled(true);
        $obj->setOutline(true);
        $obj->setSize(BaseSerializerKeys::SIZE);
        $obj->setTitle(BaseSerializerKeys::TITLE);

        $res = $obj->jsonSerialize();
        $this->assertCount(10, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Test setBlock()
     *
     * @return void
     */
    public function testSetBlock(): void {

        $obj = new TestButton("test");

        $obj->setBlock(true);
        $this->assertTrue($obj->getBlock());
    }

    /**
     * Test setData()
     *
     * @return void
     */
    public function testSetData(): void {

        $obj = new TestButton("test");

        $obj->setData(["id" => 1]);
        $this->assertEquals(["id" => 1], $obj->getData());
    }

    /**
     * Test setDisabled()
     *
     * @return void
     */
    public function testSetDisabled(): void {

        $obj = new TestButton("test");

        $obj->setDisabled(true);
        $this->assertTrue($obj->getDisabled());
    }

    /**
     * Test setOutline()
     *
     * @return void
     */
    public function testSetOutline(): void {

        $obj = new TestButton("test");

        $obj->setOutline(true);
        $this->assertTrue($obj->getOutline());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestButton("test");

        $this->assertInstanceOf(ButtonInterface::class, $obj);

        $this->assertNull($obj->getActive());
        $this->assertNull($obj->getContent());
        $this->assertNull($obj->getSize());
        $this->assertNull($obj->getTitle());
        $this->assertEquals("test", $obj->getType());

        $this->assertNull($obj->getBlock());
        $this->assertEquals([], $obj->getData());
        $this->assertNull($obj->getDisabled());
        $this->assertNull($obj->getOutline());
        $this->assertEquals("btn-", $obj->getPrefix());
    }
}
