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

use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\Component\TestNavTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\NavTwigExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Nav Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class NavTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the setNavTwigExtension() method.
     *
     * @return void
     */
    public function testSetNavTwigExtension(): void {

        // Set a Nav Twig extension mock.
        $navTwigExtension = new NavTwigExtension($this->twigEnvironment);

        $obj = new TestNavTwigExtensionTrait();

        $obj->setNavTwigExtension($navTwigExtension);
        $this->assertSame($navTwigExtension, $obj->getNavTwigExtension());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestNavTwigExtensionTrait();

        $this->assertNull($obj->getNavTwigExtension());
    }
}
