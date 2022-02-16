<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Asset\Badge;

use WBW\Bundle\BootstrapBundle\Asset\Badge\BadgeInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\WBWBootstrapInterface;

/**
 * Badge interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Asset\Badge
 */
class BadgeInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_DANGER, BadgeInterface::BADGE_TYPE_DANGER);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_DARK, BadgeInterface::BADGE_TYPE_DARK);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_INFO, BadgeInterface::BADGE_TYPE_INFO);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_LIGHT, BadgeInterface::BADGE_TYPE_LIGHT);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_PRIMARY, BadgeInterface::BADGE_TYPE_PRIMARY);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_SECONDARY, BadgeInterface::BADGE_TYPE_SECONDARY);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_SUCCESS, BadgeInterface::BADGE_TYPE_SUCCESS);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_WARNING, BadgeInterface::BADGE_TYPE_WARNING);
    }
}
