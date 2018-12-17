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

use Twig_Node;
use Twig_SimpleFunction;
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
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new GlyphiconTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapGlyphicon", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapGlyphiconFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

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

}
