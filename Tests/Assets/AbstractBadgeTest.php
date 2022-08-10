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

use WBW\Bundle\BootstrapBundle\Assets\AbstractBadge;
use WBW\Bundle\BootstrapBundle\Assets\BadgeInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Assets\TestBadge;
use WBW\Library\Serializer\SerializerKeys as BaseSerializerKeys;
use WBW\Library\Symfony\Assets\BadgeInterface as BaseBadgeInterface;

/**
 * Abstract badge test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Assets
 */
class AbstractBadgeTest extends AbstractTestCase {

    /**
     * Tests enumTypes()
     *
     * @return void
     */
    public function testEnumTypes(): void {

        $res = [
            BaseBadgeInterface::BADGE_TYPE_DANGER,
            BadgeInterface::BADGE_TYPE_DARK,
            BaseBadgeInterface::BADGE_TYPE_INFO,
            BadgeInterface::BADGE_TYPE_LIGHT,
            BadgeInterface::BADGE_TYPE_PRIMARY,
            BadgeInterface::BADGE_TYPE_SECONDARY,
            BaseBadgeInterface::BADGE_TYPE_SUCCESS,
            BaseBadgeInterface::BADGE_TYPE_WARNING,
        ];
        $this->assertEquals($res, AbstractBadge::enumTypes());
    }

    /**
     * Tests jsonSerialize()
     *
     * @return void
     */
    public function testJsonSerialize(): void {

        // Set the expected data.
        $data = file_get_contents(__DIR__ . "/AbstractBadgeTest.testJsonSerialize.json");
        $json = json_decode($data, true);

        $obj = new TestBadge("test");
        $obj->setContent(BaseSerializerKeys::CONTENT);
        $obj->setPill(true);

        $res = $obj->jsonSerialize();
        $this->assertCount(4, $res);

        $this->assertEquals($json, $res);
    }

    /**
     * Tests setPill()
     *
     * @return void
     */
    public function testSetPill(): void {

        $obj = new TestBadge("danger");

        $obj->setPill(true);
        $this->assertTrue($obj->getPill());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestBadge("danger");

        $this->assertInstanceOf(BadgeInterface::class, $obj);

        $this->assertNull($obj->getContent());
        $this->assertEquals("danger", $obj->getType());

        $this->assertNull($obj->getPill());
        $this->assertEquals("badge-", $obj->getPrefix());
    }

}
