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

use WBW\Bundle\BootstrapBundle\Badge\BadgeInterface;
use WBW\Bundle\BootstrapBundle\BootstrapInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Badge interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Badge
 */
class BadgeInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals(BootstrapInterface::BOOTSTRAP_DANGER, BadgeInterface::BADGE_TYPE_DANGER);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_DARK, BadgeInterface::BADGE_TYPE_DARK);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_INFO, BadgeInterface::BADGE_TYPE_INFO);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_LIGHT, BadgeInterface::BADGE_TYPE_LIGHT);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_PRIMARY, BadgeInterface::BADGE_TYPE_PRIMARY);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_SECONDARY, BadgeInterface::BADGE_TYPE_SECONDARY);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_SUCCESS, BadgeInterface::BADGE_TYPE_SUCCESS);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_WARNING, BadgeInterface::BADGE_TYPE_WARNING);
    }
}
