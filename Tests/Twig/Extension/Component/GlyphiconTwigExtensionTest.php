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

use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\GlyphiconTwigExtension;

/**
 * Glyphicon Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class GlyphiconTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the bootstrapGlyphiconFunction() method.
     *
     * @return void
     */
    public function testBootstrapGlyphiconFunction() {

        $obj = new GlyphiconTwigExtension($this->twigEnvironment);

        $arg = ["name" => "asterisk"];
        $res = '<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>';
        $this->assertEquals($res, $obj->bootstrapGlyphiconFunction($arg));
    }

    /**
     * Tests the bootstrapGlyphiconFunction() method.
     *
     * @return void
     */
    public function testBootstrapGlyphiconFunctionWithoutArguments() {

        $obj = new GlyphiconTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res, $obj->bootstrapGlyphiconFunction($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new GlyphiconTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.bootstrap.twig.extension.component.glyphicon", GlyphiconTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new GlyphiconTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new GlyphiconTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(2, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("bootstrapGlyphicon", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapGlyphiconFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("bsGlyphicon", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapGlyphiconFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));
    }
}
