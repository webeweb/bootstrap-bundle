<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component;

use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\Component\TestBadgeTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\BadgeTwigExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Badge Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class BadgeTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Test setBadgeTwigExtension()
     *
     * @return void
     */
    public function testSetBadgeTwigExtension(): void {

        // Set a Badge Twig extension mock.
        $badgeTwigExtension = new BadgeTwigExtension($this->twigEnvironment);

        $obj = new TestBadgeTwigExtensionTrait();

        $obj->setBadgeTwigExtension($badgeTwigExtension);
        $this->assertSame($badgeTwigExtension, $obj->getBadgeTwigExtension());
    }
}
