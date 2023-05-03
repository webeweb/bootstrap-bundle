<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component;

use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\Component\TestIconTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\IconTwigExtension;
use WBW\Bundle\CoreBundle\Tests\AbstractTestCase;

/**
 * Icon Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class IconTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Test setIconTwigExtension()
     *
     * @return void
     */
    public function testSetIconTwigExtension(): void {

        // Set an Icon Twig extension mock.
        $iconTwigExtension = new IconTwigExtension($this->twigEnvironment);

        $obj = new TestIconTwigExtensionTrait();

        $obj->setIconTwigExtension($iconTwigExtension);
        $this->assertSame($iconTwigExtension, $obj->getIconTwigExtension());
    }
}
