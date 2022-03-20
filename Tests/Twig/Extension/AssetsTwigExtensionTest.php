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
use WBW\Bundle\BootstrapBundle\Twig\Extension\AssetsTwigExtension;

/**
 * Assets Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension
 */
class AssetsTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithDefault(): void {

        $res = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';

        $this->assertEquals($res, AssetsTwigExtension::renderIcon($this->twigEnvironment, "home"));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithGlyphicon(): void {

        $res = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';

        $this->assertEquals($res, AssetsTwigExtension::renderIcon($this->twigEnvironment, "b:home"));
        $this->assertEquals($res, AssetsTwigExtension::renderIcon($this->twigEnvironment, "g:home"));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithIcon(): void {

        $res = '<i class="bi bi-house"></i>';

        $this->assertEquals($res, AssetsTwigExtension::renderIcon($this->twigEnvironment, "bi:house"));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithOther(): void {

        $res = '<i class="fa fa-home"></i>';

        $this->assertEquals($res, AssetsTwigExtension::renderIcon($this->twigEnvironment, "fa:home"));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithoutArguments(): void {

        $res = "";

        $this->assertEquals($res, AssetsTwigExtension::renderIcon($this->twigEnvironment, "::"));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.assets", AssetsTwigExtension::SERVICE_NAME);

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
