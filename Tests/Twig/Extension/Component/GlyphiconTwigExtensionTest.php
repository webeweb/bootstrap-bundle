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

use Twig\Extension\ExtensionInterface;
use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\GlyphiconTwigExtension;

/**
 * Glyphicon Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class GlyphiconTwigExtensionTest extends AbstractTestCase {

    /**
     * Test bootstrapGlyphiconFunction()
     *
     * @return void
     */
    public function testBootstrapGlyphiconFunction(): void {

        $obj = new GlyphiconTwigExtension($this->twigEnvironment);

        $arg = ["name" => "asterisk"];
        $res = '<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>';

        $this->assertEquals($res, $obj->bootstrapGlyphiconFunction($arg));
    }

    /**
     * Test bootstrapGlyphiconFunction()
     *
     * @return void
     */
    public function testBootstrapGlyphiconFunctionWithoutArguments(): void {

        $obj = new GlyphiconTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';

        $this->assertEquals($res, $obj->bootstrapGlyphiconFunction($arg));
    }

    /**
     * Test getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new GlyphiconTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Test getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new GlyphiconTwigExtension($this->twigEnvironment);
        $obj->setVersion(3);

        $res = $obj->getFunctions();
        $this->assertCount(2, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapGlyphicon", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapGlyphiconFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsGlyphicon", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapGlyphiconFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.component.glyphicon", GlyphiconTwigExtension::SERVICE_NAME);

        $obj = new GlyphiconTwigExtension($this->twigEnvironment);

        $this->assertInstanceOf(ExtensionInterface::class, $obj);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
