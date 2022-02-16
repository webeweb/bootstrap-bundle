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
use WBW\Bundle\BootstrapBundle\Asset\Badge\DangerBadge;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Danger badge test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Asset\Badge
 */
class DangerBadgeTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DangerBadge();

        $this->assertEquals(BadgeInterface::BADGE_TYPE_DANGER, $obj->getType());
    }
}
