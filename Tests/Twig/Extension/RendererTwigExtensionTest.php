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
use WBW\Bundle\BootstrapBundle\Twig\Extension\RendererTwigExtension;

/**
 * Renderer Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension
 */
class RendererTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIconWithDefault(): void {

        $res = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "home"));
    }

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIconWithGlyphicon(): void {

        $res = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "b:home"));
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "g:home"));
    }

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIconWithOther(): void {

        $res = '<i class="fa fa-home"></i>';
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "fa:home"));
    }

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIconWithoutArguments(): void {

        $res = "";
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "::"));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.renderer", RendererTwigExtension::SERVICE_NAME);

        $obj = new RendererTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
