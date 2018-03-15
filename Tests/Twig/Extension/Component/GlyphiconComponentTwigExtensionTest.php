<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\GlyphiconComponentTwigExtension;

/**
 * Glyphicon component Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 * @final
 */
final class GlyphiconComponentTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new GlyphiconComponentTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals('bootstrapGlyphicon', $res[0]->getName());
        $this->assertEquals([$obj, 'bootstrapGlyphiconFunction'], $res[0]->getCallable());
        $this->assertEquals(['html'], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapGlyphiconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapGlyphiconFunction() {

        $obj = new GlyphiconComponentTwigExtension();

        $arg0 = [];
        $res0 = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res0, $obj->bootstrapGlyphiconFunction($arg0));

        $arg9 = ['name' => 'asterisk'];
        $res9 = '<span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>';
        $this->assertEquals($res9, $obj->bootstrapGlyphiconFunction($arg9));
    }

}
