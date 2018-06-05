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
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new FontAwesomePluginTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("fontAwesome", $res[0]->getName());
        $this->assertEquals([$obj, "fontAwesomeFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the fontAwesomeFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testFontAwesomeFunction() {

        $obj = new FontAwesomePluginTwigExtension();

        $arg0 = [];
        $res0 = '<i class="fa fa-home"></i>';
        $this->assertEquals($res0, $obj->fontAwesomeFunction($arg0));

        $arg1 = ["style" => "s"];
        $res1 = '<i class="fas fa-home"></i>';
        $this->assertEquals($res1, $obj->fontAwesomeFunction($arg1));

        $arg2 = ["name" => "camera-retro"];
        $res2 = '<i class="fa fa-camera-retro"></i>';
        $this->assertEquals($res2, $obj->fontAwesomeFunction($arg2));

        $arg3 = ["size" => "xs"];
        $res3 = '<i class="fa fa-home fa-xs"></i>';
        $this->assertEquals($res3, $obj->fontAwesomeFunction($arg3));

        $arg4 = ["fixedWidth" => true];
        $res4 = '<i class="fa fa-home fa-fw"></i>';
        $this->assertEquals($res4, $obj->fontAwesomeFunction($arg4));

        $arg5 = ["bordered" => true];
        $res5 = '<i class="fa fa-home fa-border"></i>';
        $this->assertEquals($res5, $obj->fontAwesomeFunction($arg5));

        $arg6 = ["pull" => "right"];
        $res6 = '<i class="fa fa-home fa-pull-right"></i>';
        $this->assertEquals($res6, $obj->fontAwesomeFunction($arg6));

        $arg7 = ["animated" => "pulse"];
        $res7 = '<i class="fa fa-home fa-pulse"></i>';
        $this->assertEquals($res7, $obj->fontAwesomeFunction($arg7));

        $arg9 = ["style" => "s", "name" => "camera-retro", "size" => "lg", "fixedWidth" => true, "bordered" => true, "pull" => "left", "animated" => "spin"];
        $res9 = '<i class="fas fa-camera-retro fa-lg fa-fw fa-border fa-pull-left fa-spin"></i>';
        $this->assertEquals($res9, $obj->fontAwesomeFunction($arg9));
    }

}
