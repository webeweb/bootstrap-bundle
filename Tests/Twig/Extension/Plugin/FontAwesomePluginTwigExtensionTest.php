<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Plugin;

use Twig_Node;
use Twig_SimpleFilter;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\FontAwesomePluginTwigExtension;

/**
 * Font Awesome plugin Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Plugin
 * @final
 */
final class FontAwesomePluginTwigExtensionTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new FontAwesomePluginTwigExtension();

        $res = $obj->getFilters();

        $this->assertCount(2, $res);

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[0]);
        $this->assertEquals("fontAwesomeList", $res[0]->getName());
        $this->assertEquals([$obj, "fontAwesomeListFilter"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[1]);
        $this->assertEquals("fontAwesomeListIcon", $res[1]->getName());
        $this->assertEquals([$obj, "fontAwesomeListIconFilter"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new FontAwesomePluginTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("fontAwesomeIcon", $res[0]->getName());
        $this->assertEquals([$obj, "fontAwesomeIconFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the fontAwesomeListFilter() method.
     *
     * @return void
     * @depends testGetFilters
     */
    public function testFontAwesomeListFilter() {

        $obj = new FontAwesomePluginTwigExtension();

        $arg = $obj->fontAwesomeListIconFilter($obj->fontAwesomeIconFunction([]), "content");

        $res9 = '<ul class="fa-ul"><li><span class="fa-li"><i class="fa fa-home"></i></span>content</li></ul>';
        $this->assertEquals($res9, $obj->fontAwesomeListFilter($arg));
    }

    /**
     * Tests the fontAwesomeListIconFilter() method.
     *
     * @return void
     * @depends testGetFilters
     */
    public function testFontAwesomeListIconFilter() {

        $obj = new FontAwesomePluginTwigExtension();

        $arg = $obj->fontAwesomeIconFunction([]);

        $res0 = '<li><span class="fa-li"><i class="fa fa-home"></i></span></li>';
        $this->assertEquals($res0, $obj->fontAwesomeListIconFilter($arg, null));

        $res9 = '<li><span class="fa-li"><i class="fa fa-home"></i></span>content</li>';
        $this->assertEquals($res9, $obj->fontAwesomeListIconFilter($arg, "content"));
    }

    /**
     * Tests the fontAwesomeIconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testFontAwesomeIconFunction() {

        $obj = new FontAwesomePluginTwigExtension();

        $arg0 = [];
        $res0 = '<i class="fa fa-home"></i>';
        $this->assertEquals($res0, $obj->fontAwesomeIconFunction($arg0));

        $arg1 = ["style" => "s"];
        $res1 = '<i class="fas fa-home"></i>';
        $this->assertEquals($res1, $obj->fontAwesomeIconFunction($arg1));

        $arg2 = ["name" => "camera-retro"];
        $res2 = '<i class="fa fa-camera-retro"></i>';
        $this->assertEquals($res2, $obj->fontAwesomeIconFunction($arg2));

        $arg3 = ["size" => "xs"];
        $res3 = '<i class="fa fa-home fa-xs"></i>';
        $this->assertEquals($res3, $obj->fontAwesomeIconFunction($arg3));

        $arg4 = ["fixedWidth" => true];
        $res4 = '<i class="fa fa-home fa-fw"></i>';
        $this->assertEquals($res4, $obj->fontAwesomeIconFunction($arg4));

        $arg5 = ["bordered" => true];
        $res5 = '<i class="fa fa-home fa-border"></i>';
        $this->assertEquals($res5, $obj->fontAwesomeIconFunction($arg5));

        $arg6 = ["pull" => "right"];
        $res6 = '<i class="fa fa-home fa-pull-right"></i>';
        $this->assertEquals($res6, $obj->fontAwesomeIconFunction($arg6));

        $arg7 = ["animated" => "pulse"];
        $res7 = '<i class="fa fa-home fa-pulse"></i>';
        $this->assertEquals($res7, $obj->fontAwesomeIconFunction($arg7));

        $arg9 = ["style" => "s", "name" => "camera-retro", "size" => "lg", "fixedWidth" => true, "bordered" => true, "pull" => "left", "animated" => "spin"];
        $res9 = '<i class="fas fa-camera-retro fa-lg fa-fw fa-border fa-pull-left fa-spin"></i>';
        $this->assertEquals($res9, $obj->fontAwesomeIconFunction($arg9));
    }

}
