<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Badge;

use WBW\Bundle\BootstrapBundle\Badge\BadgeFactory;
use WBW\Bundle\BootstrapBundle\Badge\BadgeInterface;
use WBW\Bundle\BootstrapBundle\Badge\DangerBadge;
use WBW\Bundle\BootstrapBundle\Badge\DarkBadge;
use WBW\Bundle\BootstrapBundle\Badge\DefaultBadge;
use WBW\Bundle\BootstrapBundle\Badge\InfoBadge;
use WBW\Bundle\BootstrapBundle\Badge\LightBadge;
use WBW\Bundle\BootstrapBundle\Badge\PrimaryBadge;
use WBW\Bundle\BootstrapBundle\Badge\SecondaryBadge;
use WBW\Bundle\BootstrapBundle\Badge\SuccessBadge;
use WBW\Bundle\BootstrapBundle\Badge\WarningBadge;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Badge factory test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Badge
 */
class BadgeFactoryTest extends AbstractTestCase {

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
            "content" => "content",
            "pill"    => true,
        ];
    }

    /**
     * Tests the newDangerBadge() method.
     *
     * @return void
     */
    public function testNewDangerBadge(): void {

        $obj = BadgeFactory::newDangerBadge();

        $this->assertInstanceOf(DangerBadge::class, $obj);
    }

    /**
     * Tests the newDarkBadge() method.
     *
     * @return void
     */
    public function testNewDarkBadge(): void {

        $obj = BadgeFactory::newDarkBadge();

        $this->assertInstanceOf(DarkBadge::class, $obj);
    }

    /**
     * Tests the newDefaultBadge() method.
     *
     * @return void
     */
    public function testNewDefaultBadge(): void {

        $obj = BadgeFactory::newDefaultBadge();

        $this->assertInstanceOf(DefaultBadge::class, $obj);
    }

    /**
     * Tests the newInfoBadge() method.
     *
     * @return void
     */
    public function testNewInfoBadge(): void {

        $obj = BadgeFactory::newInfoBadge();

        $this->assertInstanceOf(InfoBadge::class, $obj);
    }

    /**
     * Tests the newLightBadge() method.
     *
     * @return void
     */
    public function testNewLightBadge(): void {

        $obj = BadgeFactory::newLightBadge();

        $this->assertInstanceOf(LightBadge::class, $obj);
    }

    /**
     * Tests the newPrimaryBadge() method.
     *
     * @return void
     */
    public function testNewPrimaryBadge(): void {

        $obj = BadgeFactory::newPrimaryBadge();

        $this->assertInstanceOf(PrimaryBadge::class, $obj);
    }

    /**
     * Tests the newSecondaryBadge() method.
     *
     * @return void
     */
    public function testNewSecondaryBadge(): void {

        $obj = BadgeFactory::newSecondaryBadge();

        $this->assertInstanceOf(SecondaryBadge::class, $obj);
    }

    /**
     * Tests the newSuccessBadge() method.
     *
     * @return void
     */
    public function testNewSuccessBadge(): void {

        $obj = BadgeFactory::newSuccessBadge();

        $this->assertInstanceOf(SuccessBadge::class, $obj);
    }

    /**
     * Tests the newWarningBadge() method.
     *
     * @return void
     */
    public function testNewWarningBadge(): void {

        $obj = BadgeFactory::newWarningBadge();

        $this->assertInstanceOf(WarningBadge::class, $obj);
    }

    /**
     * Tests the parseDangerBadge() method.
     *
     * @return void
     */
    public function testParseDangerBadge(): void {

        $obj = BadgeFactory::parseDangerBadge($this->args);

        $this->assertInstanceOf(DangerBadge::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["pill"], $obj->getPill());

        $this->assertEquals(BadgeInterface::BADGE_TYPE_DANGER, $obj->getType());
    }

    /**
     * Tests the parseDarkBadge() method.
     *
     * @return void
     */
    public function testParseDarkBadge(): void {

        $obj = BadgeFactory::parseDarkBadge($this->args);

        $this->assertInstanceOf(DarkBadge::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["pill"], $obj->getPill());

        $this->assertEquals(BadgeInterface::BADGE_TYPE_DARK, $obj->getType());
    }

    /**
     * Tests the parseDefaultBadge() method.
     *
     * @return void
     */
    public function testParseDefaultBadge(): void {

        $obj = BadgeFactory::parseDefaultBadge($this->args);

        $this->assertInstanceOf(DefaultBadge::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["pill"], $obj->getPill());

        $this->assertNull($obj->getType());
    }

    /**
     * Tests the parseInfoBadge() method.
     *
     * @return void
     */
    public function testParseInfoBadge(): void {

        $obj = BadgeFactory::parseInfoBadge($this->args);

        $this->assertInstanceOf(InfoBadge::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["pill"], $obj->getPill());

        $this->assertEquals(BadgeInterface::BADGE_TYPE_INFO, $obj->getType());
    }

    /**
     * Tests the parseLightBadge() method.
     *
     * @return void
     */
    public function testParseLightBadge(): void {

        $obj = BadgeFactory::parseLightBadge($this->args);

        $this->assertInstanceOf(LightBadge::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["pill"], $obj->getPill());

        $this->assertEquals(BadgeInterface::BADGE_TYPE_LIGHT, $obj->getType());
    }

    /**
     * Tests the parsePrimaryBadge() method.
     *
     * @return void
     */
    public function testParsePrimaryBadge(): void {

        $obj = BadgeFactory::parsePrimaryBadge($this->args);

        $this->assertInstanceOf(PrimaryBadge::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["pill"], $obj->getPill());

        $this->assertEquals(BadgeInterface::BADGE_TYPE_PRIMARY, $obj->getType());
    }

    /**
     * Tests the parseSecondaryBadge() method.
     *
     * @return void
     */
    public function testParseSecondaryBadge(): void {

        $obj = BadgeFactory::parseSecondaryBadge($this->args);

        $this->assertInstanceOf(SecondaryBadge::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["pill"], $obj->getPill());

        $this->assertEquals(BadgeInterface::BADGE_TYPE_SECONDARY, $obj->getType());
    }

    /**
     * Tests the parseSuccessBadge() method.
     *
     * @return void
     */
    public function testParseSuccessBadge(): void {

        $obj = BadgeFactory::parseSuccessBadge($this->args);

        $this->assertInstanceOf(SuccessBadge::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["pill"], $obj->getPill());

        $this->assertEquals(BadgeInterface::BADGE_TYPE_SUCCESS, $obj->getType());
    }

    /**
     * Tests the parseWarningBadge() method.
     *
     * @return void
     */
    public function testParseWarningBadge(): void {

        $obj = BadgeFactory::parseWarningBadge($this->args);

        $this->assertInstanceOf(WarningBadge::class, $obj);

        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["pill"], $obj->getPill());

        $this->assertEquals(BadgeInterface::BADGE_TYPE_WARNING, $obj->getType());
    }
}
