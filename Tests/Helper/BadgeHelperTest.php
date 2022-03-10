<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Helper;

use WBW\Bundle\BootstrapBundle\Assets\BadgeInterface;
use WBW\Bundle\BootstrapBundle\Helper\BadgeHelper;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Badge helper test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Helper
 */
class BadgeHelperTest extends AbstractTestCase {

    /**
     * Tests enumTypes()
     *
     * @return void
     */
    public function testEnumTypes(): void {

        $res = [
            BadgeInterface::BADGE_TYPE_DANGER,
            BadgeInterface::BADGE_TYPE_DARK,
            BadgeInterface::BADGE_TYPE_INFO,
            BadgeInterface::BADGE_TYPE_LIGHT,
            BadgeInterface::BADGE_TYPE_PRIMARY,
            BadgeInterface::BADGE_TYPE_SECONDARY,
            BadgeInterface::BADGE_TYPE_SUCCESS,
            BadgeInterface::BADGE_TYPE_WARNING,
        ];
        $this->assertEquals($res, BadgeHelper::enumTypes());
    }

}
