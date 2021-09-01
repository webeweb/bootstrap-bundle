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
use WBW\Bundle\BootstrapBundle\Asset\Badge\SuccessBadge;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Success badge test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Asset\Badge
 */
class SuccessBadgeTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SuccessBadge();

        $this->assertEquals(BadgeInterface::BADGE_TYPE_SUCCESS, $obj->getType());
    }
}
