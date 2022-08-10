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

use WBW\Bundle\BootstrapBundle\Assets\AbstractAlert;
use WBW\Bundle\BootstrapBundle\Assets\AlertInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Assets\TestAlert;
use WBW\Library\Serializer\SerializerKeys as BaseSerializerKeys;
use WBW\Library\Symfony\Assets\AlertInterface as BaseAlertInterface;

/**
 * Abstract alert test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Assets
 */
class AbstractAlertTest extends AbstractTestCase {

    /**
     * Tests enumTypes()
     *
     * @return void
     */
    public function testEnumTypes(): void {

        $res = [
            BaseAlertInterface::ALERT_TYPE_DANGER,
            AlertInterface::ALERT_TYPE_DARK,
            BaseAlertInterface::ALERT_TYPE_INFO,
            AlertInterface::ALERT_TYPE_LIGHT,
            AlertInterface::ALERT_TYPE_PRIMARY,
            AlertInterface::ALERT_TYPE_SECONDARY,
            BaseAlertInterface::ALERT_TYPE_SUCCESS,
            BaseAlertInterface::ALERT_TYPE_WARNING,
        ];
        $this->assertEquals($res, AbstractAlert::enumTypes());
    }

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/AbstractAlertTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new TestAlert("test");
        $obj->setContent(BaseSerializerKeys::CONTENT);
        $obj->setDismissible(true);

        $res = $obj->jsonSerialize();
        $this->assertCount(4, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests setDismissible()
     *
     * @return void
     */
    public function testSetDismissible(): void {

        $obj = new TestAlert("test");

        $obj->setDismissible(true);
        $this->assertTrue($obj->getDismissible());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestAlert("test");

        $this->assertInstanceOf(AlertInterface::class, $obj);

        $this->assertNull($obj->getContent());
        $this->assertEquals("test", $obj->getType());

        $this->assertNull($obj->getDismissible());
        $this->assertEquals("alert-", $obj->getPrefix());
    }

}
