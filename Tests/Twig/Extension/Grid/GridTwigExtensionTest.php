<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Grid;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Grid\GridTwigExtension;

/**
 * Grid Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Grid
 * @final
 */
final class GridTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new GridTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(5, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapGrid", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapGridFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bootstrapOffsetGrid", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapOffsetGridFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("bootstrapPullGrid", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapPullGridFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("bootstrapPushGrid", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapPushGridFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("bootstrapStackedGrid", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapStackedGridFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapOffsetFunction().
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapOffsetFunction() {

        $obj = new GridTwigExtension();

        $arg0 = [];
        $res0 = "";
        $this->assertEquals($res0, $obj->bootstrapOffsetGridFunction($arg0));

        $arg1 = ["lgOffset" => 1];
        $res1 = "col-lg-offset-1";
        $this->assertEquals($res1, $obj->bootstrapOffsetGridFunction($arg1));

        $arg1min = ["lgOffset" => 0];
        $res1min = "";
        $this->assertEquals($res1min, $obj->bootstrapOffsetGridFunction($arg1min));

        $arg1max = ["lgOffset" => 13];
        $res1max = "";
        $this->assertEquals($res1max, $obj->bootstrapOffsetGridFunction($arg1max));

        $arg2 = ["mdOffset" => 2];
        $res2 = "col-md-offset-2";
        $this->assertEquals($res2, $obj->bootstrapOffsetGridFunction($arg2));

        $arg2min = ["mdOffset" => 0];
        $res2min = "";
        $this->assertEquals($res2min, $obj->bootstrapOffsetGridFunction($arg2min));

        $arg2max = ["lgOffset" => 13];
        $res2max = "";
        $this->assertEquals($res2max, $obj->bootstrapOffsetGridFunction($arg2max));

        $arg3 = ["smOffset" => 3];
        $res3 = "col-sm-offset-3";
        $this->assertEquals($res3, $obj->bootstrapOffsetGridFunction($arg3));

        $arg3min = ["smOffset" => 0];
        $res3min = "";
        $this->assertEquals($res3min, $obj->bootstrapOffsetGridFunction($arg3min));

        $arg3max = ["smOffset" => 13];
        $res3max = "";
        $this->assertEquals($res3max, $obj->bootstrapOffsetGridFunction($arg3max));

        $arg4 = ["xsOffset" => 4];
        $res4 = "col-xs-offset-4";
        $this->assertEquals($res4, $obj->bootstrapOffsetGridFunction($arg4));

        $arg4min = ["xsOffset" => 0];
        $res4min = "";
        $this->assertEquals($res4min, $obj->bootstrapOffsetGridFunction($arg4min));

        $arg4max = ["xsOffset" => 13];
        $res4max = "";
        $this->assertEquals($res4max, $obj->bootstrapOffsetGridFunction($arg4max));

        $arg9 = ["lgOffset" => 12, "mdOffset" => 12, "smOffset" => 12, "xsOffset" => 12];
        $res9 = "col-lg-offset-12 col-md-offset-12 col-sm-offset-12 col-xs-offset-12";
        $this->assertEquals($res9, $obj->bootstrapOffsetGridFunction($arg9));
    }

    /**
     * Tests the bootstrapPullFunction().
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapPullFunction() {

        $obj = new GridTwigExtension();

        $arg0 = [];
        $res0 = "";
        $this->assertEquals($res0, $obj->bootstrapPullGridFunction($arg0));

        $arg1 = ["lgPull" => 1];
        $res1 = "col-lg-pull-1";
        $this->assertEquals($res1, $obj->bootstrapPullGridFunction($arg1));

        $arg1min = ["lgPull" => 0];
        $res1min = "";
        $this->assertEquals($res1min, $obj->bootstrapPullGridFunction($arg1min));

        $arg1max = ["lgPull" => 13];
        $res1max = "";
        $this->assertEquals($res1max, $obj->bootstrapPullGridFunction($arg1max));

        $arg2 = ["mdPull" => 2];
        $res2 = "col-md-pull-2";
        $this->assertEquals($res2, $obj->bootstrapPullGridFunction($arg2));

        $arg2min = ["mdPull" => 0];
        $res2min = "";
        $this->assertEquals($res2min, $obj->bootstrapPullGridFunction($arg2min));

        $arg2max = ["lgPull" => 13];
        $res2max = "";
        $this->assertEquals($res2max, $obj->bootstrapPullGridFunction($arg2max));

        $arg3 = ["smPull" => 3];
        $res3 = "col-sm-pull-3";
        $this->assertEquals($res3, $obj->bootstrapPullGridFunction($arg3));

        $arg3min = ["smPull" => 0];
        $res3min = "";
        $this->assertEquals($res3min, $obj->bootstrapPullGridFunction($arg3min));

        $arg3max = ["smPull" => 13];
        $res3max = "";
        $this->assertEquals($res3max, $obj->bootstrapPullGridFunction($arg3max));

        $arg4 = ["xsPull" => 4];
        $res4 = "col-xs-pull-4";
        $this->assertEquals($res4, $obj->bootstrapPullGridFunction($arg4));

        $arg4min = ["xsPull" => 0];
        $res4min = "";
        $this->assertEquals($res4min, $obj->bootstrapPullGridFunction($arg4min));

        $arg4max = ["xsPull" => 13];
        $res4max = "";
        $this->assertEquals($res4max, $obj->bootstrapPullGridFunction($arg4max));

        $arg9 = ["lgPull" => 12, "mdPull" => 12, "smPull" => 12, "xsPull" => 12];
        $res9 = "col-lg-pull-12 col-md-pull-12 col-sm-pull-12 col-xs-pull-12";
        $this->assertEquals($res9, $obj->bootstrapPullGridFunction($arg9));
    }

    /**
     * Tests the bootstrapPushFunction().
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapPushFunction() {

        $obj = new GridTwigExtension();

        $arg0 = [];
        $res0 = "";
        $this->assertEquals($res0, $obj->bootstrapPushGridFunction($arg0));

        $arg1 = ["lgPush" => 1];
        $res1 = "col-lg-push-1";
        $this->assertEquals($res1, $obj->bootstrapPushGridFunction($arg1));

        $arg1min = ["lgPush" => 0];
        $res1min = "";
        $this->assertEquals($res1min, $obj->bootstrapPushGridFunction($arg1min));

        $arg1max = ["lgPush" => 13];
        $res1max = "";
        $this->assertEquals($res1max, $obj->bootstrapPushGridFunction($arg1max));

        $arg2 = ["mdPush" => 2];
        $res2 = "col-md-push-2";
        $this->assertEquals($res2, $obj->bootstrapPushGridFunction($arg2));

        $arg2min = ["mdPush" => 0];
        $res2min = "";
        $this->assertEquals($res2min, $obj->bootstrapPushGridFunction($arg2min));

        $arg2max = ["lgPush" => 13];
        $res2max = "";
        $this->assertEquals($res2max, $obj->bootstrapPushGridFunction($arg2max));

        $arg3 = ["smPush" => 3];
        $res3 = "col-sm-push-3";
        $this->assertEquals($res3, $obj->bootstrapPushGridFunction($arg3));

        $arg3min = ["smPush" => 0];
        $res3min = "";
        $this->assertEquals($res3min, $obj->bootstrapPushGridFunction($arg3min));

        $arg3max = ["smPush" => 13];
        $res3max = "";
        $this->assertEquals($res3max, $obj->bootstrapPushGridFunction($arg3max));

        $arg4 = ["xsPush" => 4];
        $res4 = "col-xs-push-4";
        $this->assertEquals($res4, $obj->bootstrapPushGridFunction($arg4));

        $arg4min = ["xsPush" => 0];
        $res4min = "";
        $this->assertEquals($res4min, $obj->bootstrapPushGridFunction($arg4min));

        $arg4max = ["xsPush" => 13];
        $res4max = "";
        $this->assertEquals($res4max, $obj->bootstrapPushGridFunction($arg4max));

        $arg9 = ["lgPush" => 12, "mdPush" => 12, "smPush" => 12, "xsPush" => 12];
        $res9 = "col-lg-push-12 col-md-push-12 col-sm-push-12 col-xs-push-12";
        $this->assertEquals($res9, $obj->bootstrapPushGridFunction($arg9));
    }

    /**
     * Tests the bootstrapStackedFunction().
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapStackedFunction() {

        $obj = new GridTwigExtension();

        $arg0 = [];
        $res0 = "";
        $this->assertEquals($res0, $obj->bootstrapStackedGridFunction($arg0));

        $arg1 = ["lg" => 1];
        $res1 = "col-lg-1";
        $this->assertEquals($res1, $obj->bootstrapStackedGridFunction($arg1));

        $arg1min = ["lg" => 0];
        $res1min = "";
        $this->assertEquals($res1min, $obj->bootstrapStackedGridFunction($arg1min));

        $arg1max = ["lg" => 13];
        $res1max = "";
        $this->assertEquals($res1max, $obj->bootstrapStackedGridFunction($arg1max));

        $arg2 = ["md" => 2];
        $res2 = "col-md-2";
        $this->assertEquals($res2, $obj->bootstrapStackedGridFunction($arg2));

        $arg2min = ["md" => 0];
        $res2min = "";
        $this->assertEquals($res2min, $obj->bootstrapStackedGridFunction($arg2min));

        $arg2max = ["lg" => 13];
        $res2max = "";
        $this->assertEquals($res2max, $obj->bootstrapStackedGridFunction($arg2max));

        $arg3 = ["sm" => 3];
        $res3 = "col-sm-3";
        $this->assertEquals($res3, $obj->bootstrapStackedGridFunction($arg3));

        $arg3min = ["sm" => 0];
        $res3min = "";
        $this->assertEquals($res3min, $obj->bootstrapStackedGridFunction($arg3min));

        $arg3max = ["sm" => 13];
        $res3max = "";
        $this->assertEquals($res3max, $obj->bootstrapStackedGridFunction($arg3max));

        $arg4 = ["xs" => 4];
        $res4 = "col-xs-4";
        $this->assertEquals($res4, $obj->bootstrapStackedGridFunction($arg4));

        $arg4min = ["xs" => 0];
        $res4min = "";
        $this->assertEquals($res4min, $obj->bootstrapStackedGridFunction($arg4min));

        $arg4max = ["xs" => 13];
        $res4max = "";
        $this->assertEquals($res4max, $obj->bootstrapStackedGridFunction($arg4max));

        $arg9 = ["lg" => 12, "md" => 12, "sm" => 12, "xs" => 12];
        $res9 = "col-lg-12 col-md-12 col-sm-12 col-xs-12";
        $this->assertEquals($res9, $obj->bootstrapStackedGridFunction($arg9));
    }

    /**
     * Tests the bootstrapGridFunction().
     *
     * @return void
     * @depends testBootstrapStackedFunction
     */
    public function testBootstrapGridFunction() {

        $obj = new GridTwigExtension();

        $arg0 = [];
        $res0 = "";
        $this->assertEquals($res0, $obj->bootstrapGridFunction($arg0));

        $arg9 = ["lg" => 12, "mdOffset" => 12, "smPull" => 12, "xsPush" => 12];
        $res9 = "col-lg-12 col-md-offset-12 col-xs-push-12 col-sm-pull-12";
        $this->assertEquals($res9, $obj->bootstrapGridFunction($arg9));
    }

}
