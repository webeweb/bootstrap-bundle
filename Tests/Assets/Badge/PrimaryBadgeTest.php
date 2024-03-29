<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Assets\Badge;

use WBW\Bundle\BootstrapBundle\Assets\Badge\PrimaryBadge;
use WBW\Bundle\BootstrapBundle\Assets\BadgeInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Primary badge test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Assets\Badge
 */
class PrimaryBadgeTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new PrimaryBadge();

        $this->assertEquals(BadgeInterface::BADGE_TYPE_PRIMARY, $obj->getType());
    }
}
