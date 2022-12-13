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

use Twig\Extension\ExtensionInterface;
use Twig\Node\Node;
use Twig\TwigFunction;
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
     * Tests bootstrapRenderIconFunction()
     *
     * @return void
     */
    public function testBootstrapRenderIconRender(): void {

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $this->assertNull($obj->bootstrapRenderIconFunction(null));
        $this->assertNull($obj->bootstrapRenderIconFunction("::"));
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(2, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapRenderIcon", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapRenderIconFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsRenderIcon", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapRenderIconFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIcon(): void {

        $this->assertNull(AssetsTwigExtension::renderIcon($this->twigEnvironment, "::"));
        $this->assertNull(AssetsTwigExtension::renderIcon($this->twigEnvironment, null));
    }

    /**
     * Tests renderIcon()
     *
     * @return void
     */
    public function testRenderIconWithBootstrapIcon(): void {

        $res = '<i class="bi bi-house"></i>';

        $this->assertEquals($res, AssetsTwigExtension::renderIcon($this->twigEnvironment, "bi:house"));
    }

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
    public function testRenderIconWithOther(): void {

        $res = '<i class="fa fa-home"></i>';

        $this->assertEquals($res, AssetsTwigExtension::renderIcon($this->twigEnvironment, "fa:home"));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.assets", AssetsTwigExtension::SERVICE_NAME);

        $obj = new AssetsTwigExtension($this->twigEnvironment);

        $this->assertInstanceOf(ExtensionInterface::class, $obj);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
