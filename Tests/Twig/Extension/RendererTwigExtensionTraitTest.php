<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension;

use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Tests\Fixtures\Twig\Extension\TestRendererTwigExtensionTrait;
use WBW\Bundle\BootstrapBundle\Twig\Extension\RendererTwigExtension;

/**
 * Renderer Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension
 */
class RendererTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the setUser() method.
     *
     * @return void
     */
    public function testSetUser(): void {

        // Set a Renderer Twig extension mock.
        $rendererTwigExtension = new RendererTwigExtension($this->twigEnvironment);

        $obj = new TestRendererTwigExtensionTrait();

        $obj->setRendererTwigExtension($rendererTwigExtension);
        $this->assertSame($rendererTwigExtension, $obj->getRendererTwigExtension());
    }
}
