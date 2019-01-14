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
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RendererTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.bootstrap.twig.extension.renderer", RendererTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new RendererTwigExtension($this->twigEnvironment);
        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIconWithDefault() {

        $res = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "home"));
    }

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIconWithGlyphicon() {

        $res = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "b:home"));
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "g:home"));
    }

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIconWithOther() {

        $res = '<i class="fa fa-home"></i>';
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "fa:home"));
    }

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIconWithoutArguments() {

        $res = "";
        $this->assertEquals($res, RendererTwigExtension::renderIcon($this->twigEnvironment, "::"));
    }
}
