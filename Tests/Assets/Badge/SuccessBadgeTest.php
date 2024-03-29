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

use WBW\Bundle\BootstrapBundle\Assets\Badge\SuccessBadge;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Assets\BadgeInterface as BaseBadgeInterface;

/**
 * Success badge test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Assets\Badge
 */
class SuccessBadgeTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SuccessBadge();

        $this->assertEquals(BaseBadgeInterface::BADGE_TYPE_SUCCESS, $obj->getType());
    }
}
