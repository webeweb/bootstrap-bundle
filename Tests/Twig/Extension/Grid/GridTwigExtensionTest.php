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

        // Nothing
        $arg0 = [];
        $res0 = "";
        $this->assertEquals($res0, $obj->bootstrapOffsetGridFunction($arg0));

        // LG
        $argLG = ["lg-offset" => 1];
        $resLG = "col-lg-offset-1";
        $this->assertEquals($resLG, $obj->bootstrapOffsetGridFunction($argLG));

        $argLGcpy = ["lg-offset" => 2, "recopy-offset" => true];
        $resLGcpy = "col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2";
        $this->assertEquals($resLGcpy, $obj->bootstrapOffsetGridFunction($argLGcpy));

        $argLGmin = ["lg-offset" => 0];
        $resLGmin = "";
        $this->assertEquals($resLGmin, $obj->bootstrapOffsetGridFunction($argLGmin));

        $argLGmax = ["lg-offset" => 13];
        $resLGmax = "";
        $this->assertEquals($resLGmax, $obj->bootstrapOffsetGridFunction($argLGmax));

        // MD
        $argMD = ["md-offset" => 2];
        $resMD = "col-md-offset-2";
        $this->assertEquals($resMD, $obj->bootstrapOffsetGridFunction($argMD));

        $argMDcpy = ["md-offset" => 2, "recopy-offset" => true];
        $resMDcpy = "col-md-offset-2 col-sm-offset-2 col-xs-offset-2";
        $this->assertEquals($resMDcpy, $obj->bootstrapOffsetGridFunction($argMDcpy));

        $argMDmin = ["md-offset" => 0];
        $resMDmin = "";
        $this->assertEquals($resMDmin, $obj->bootstrapOffsetGridFunction($argMDmin));

        $argMDmax = ["mg-offset" => 13];
        $resMDmax = "";
        $this->assertEquals($resMDmax, $obj->bootstrapOffsetGridFunction($argMDmax));

        // SM
        $argSM = ["sm-offset" => 3];
        $resSM = "col-sm-offset-3";
        $this->assertEquals($resSM, $obj->bootstrapOffsetGridFunction($argSM));

        $argSMcpy = ["sm-offset" => 2, "recopy-offset" => true];
        $resSMcpy = "col-sm-offset-2 col-xs-offset-2";
        $this->assertEquals($resSMcpy, $obj->bootstrapOffsetGridFunction($argSMcpy));

        $argSMmin = ["sm-offset" => 0];
        $resSMmin = "";
        $this->assertEquals($resSMmin, $obj->bootstrapOffsetGridFunction($argSMmin));

        $argSMmax = ["sm-offset" => 13];
        $resSMmax = "";
        $this->assertEquals($resSMmax, $obj->bootstrapOffsetGridFunction($argSMmax));

        // XS
        $argXS = ["xs-offset" => 4];
        $resXS = "col-xs-offset-4";
        $this->assertEquals($resXS, $obj->bootstrapOffsetGridFunction($argXS));

        $argXScpy = ["xs-offset" => 2, "recopy-offset" => true];
        $resXScpy = "col-xs-offset-2";
        $this->assertEquals($resXScpy, $obj->bootstrapOffsetGridFunction($argXScpy));

        $argXSmin = ["xs-offset" => 0];
        $resXSmin = "";
        $this->assertEquals($resXSmin, $obj->bootstrapOffsetGridFunction($argXSmin));

        $argXSmax = ["xs-offset" => 13];
        $resXSmax = "";
        $this->assertEquals($resXSmax, $obj->bootstrapOffsetGridFunction($argXSmax));

        //
        $arg9 = ["lg-offset" => 6, "md-offset" => 12, "recopy-offset" => true];
        $res9 = "col-lg-offset-6 col-md-offset-12 col-sm-offset-12 col-xs-offset-12";
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

        // Nothing
        $arg0 = [];
        $res0 = "";
        $this->assertEquals($res0, $obj->bootstrapPullGridFunction($arg0));

        // LG
        $argLG = ["lg-pull" => 1];
        $resLG = "col-lg-pull-1";
        $this->assertEquals($resLG, $obj->bootstrapPullGridFunction($argLG));

        $argLGcpy = ["lg-pull" => 2, "recopy-pull" => true];
        $resLGcpy = "col-lg-pull-2 col-md-pull-2 col-sm-pull-2 col-xs-pull-2";
        $this->assertEquals($resLGcpy, $obj->bootstrapPullGridFunction($argLGcpy));

        $argLGmin = ["lg-pull" => 0];
        $resLGmin = "";
        $this->assertEquals($resLGmin, $obj->bootstrapPullGridFunction($argLGmin));

        $argLGmax = ["lg-pull" => 13];
        $resLGmax = "";
        $this->assertEquals($resLGmax, $obj->bootstrapPullGridFunction($argLGmax));

        // MD
        $argMD = ["md-pull" => 2];
        $resMD = "col-md-pull-2";
        $this->assertEquals($resMD, $obj->bootstrapPullGridFunction($argMD));

        $argMDcpy = ["md-pull" => 2, "recopy-pull" => true];
        $resMDcpy = "col-md-pull-2 col-sm-pull-2 col-xs-pull-2";
        $this->assertEquals($resMDcpy, $obj->bootstrapPullGridFunction($argMDcpy));

        $argMDmin = ["md-pull" => 0];
        $resMDmin = "";
        $this->assertEquals($resMDmin, $obj->bootstrapPullGridFunction($argMDmin));

        $argMDmax = ["mg-pull" => 13];
        $resMDmax = "";
        $this->assertEquals($resMDmax, $obj->bootstrapPullGridFunction($argMDmax));

        // SM
        $argSM = ["sm-pull" => 3];
        $resSM = "col-sm-pull-3";
        $this->assertEquals($resSM, $obj->bootstrapPullGridFunction($argSM));

        $argSMcpy = ["sm-pull" => 2, "recopy-pull" => true];
        $resSMcpy = "col-sm-pull-2 col-xs-pull-2";
        $this->assertEquals($resSMcpy, $obj->bootstrapPullGridFunction($argSMcpy));

        $argSMmin = ["sm-pull" => 0];
        $resSMmin = "";
        $this->assertEquals($resSMmin, $obj->bootstrapPullGridFunction($argSMmin));

        $argSMmax = ["sm-pull" => 13];
        $resSMmax = "";
        $this->assertEquals($resSMmax, $obj->bootstrapPullGridFunction($argSMmax));

        // XS
        $argXS = ["xs-pull" => 4];
        $resXS = "col-xs-pull-4";
        $this->assertEquals($resXS, $obj->bootstrapPullGridFunction($argXS));

        $argXScpy = ["xs-pull" => 2, "recopy-pull" => true];
        $resXScpy = "col-xs-pull-2";
        $this->assertEquals($resXScpy, $obj->bootstrapPullGridFunction($argXScpy));

        $argXSmin = ["xs-pull" => 0];
        $resXSmin = "";
        $this->assertEquals($resXSmin, $obj->bootstrapPullGridFunction($argXSmin));

        $argXSmax = ["xs-pull" => 13];
        $resXSmax = "";
        $this->assertEquals($resXSmax, $obj->bootstrapPullGridFunction($argXSmax));

        //
        $arg9 = ["lg-pull" => 6, "md-pull" => 12, "recopy-pull" => true];
        $res9 = "col-lg-pull-6 col-md-pull-12 col-sm-pull-12 col-xs-pull-12";
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

        // Nothing
        $arg0 = [];
        $res0 = "";
        $this->assertEquals($res0, $obj->bootstrapPushGridFunction($arg0));

        // LG
        $argLG = ["lg-push" => 1];
        $resLG = "col-lg-push-1";
        $this->assertEquals($resLG, $obj->bootstrapPushGridFunction($argLG));

        $argLGcpy = ["lg-push" => 2, "recopy-push" => true];
        $resLGcpy = "col-lg-push-2 col-md-push-2 col-sm-push-2 col-xs-push-2";
        $this->assertEquals($resLGcpy, $obj->bootstrapPushGridFunction($argLGcpy));

        $argLGmin = ["lg-push" => 0];
        $resLGmin = "";
        $this->assertEquals($resLGmin, $obj->bootstrapPushGridFunction($argLGmin));

        $argLGmax = ["lg-push" => 13];
        $resLGmax = "";
        $this->assertEquals($resLGmax, $obj->bootstrapPushGridFunction($argLGmax));

        // MD
        $argMD = ["md-push" => 2];
        $resMD = "col-md-push-2";
        $this->assertEquals($resMD, $obj->bootstrapPushGridFunction($argMD));

        $argMDcpy = ["md-push" => 2, "recopy-push" => true];
        $resMDcpy = "col-md-push-2 col-sm-push-2 col-xs-push-2";
        $this->assertEquals($resMDcpy, $obj->bootstrapPushGridFunction($argMDcpy));

        $argMDmin = ["md-push" => 0];
        $resMDmin = "";
        $this->assertEquals($resMDmin, $obj->bootstrapPushGridFunction($argMDmin));

        $argMDmax = ["mg-push" => 13];
        $resMDmax = "";
        $this->assertEquals($resMDmax, $obj->bootstrapPushGridFunction($argMDmax));

        // SM
        $argSM = ["sm-push" => 3];
        $resSM = "col-sm-push-3";
        $this->assertEquals($resSM, $obj->bootstrapPushGridFunction($argSM));

        $argSMcpy = ["sm-push" => 2, "recopy-push" => true];
        $resSMcpy = "col-sm-push-2 col-xs-push-2";
        $this->assertEquals($resSMcpy, $obj->bootstrapPushGridFunction($argSMcpy));

        $argSMmin = ["sm-push" => 0];
        $resSMmin = "";
        $this->assertEquals($resSMmin, $obj->bootstrapPushGridFunction($argSMmin));

        $argSMmax = ["sm-push" => 13];
        $resSMmax = "";
        $this->assertEquals($resSMmax, $obj->bootstrapPushGridFunction($argSMmax));

        // XS
        $argXS = ["xs-push" => 4];
        $resXS = "col-xs-push-4";
        $this->assertEquals($resXS, $obj->bootstrapPushGridFunction($argXS));

        $argXScpy = ["xs-push" => 2, "recopy-push" => true];
        $resXScpy = "col-xs-push-2";
        $this->assertEquals($resXScpy, $obj->bootstrapPushGridFunction($argXScpy));

        $argXSmin = ["xs-push" => 0];
        $resXSmin = "";
        $this->assertEquals($resXSmin, $obj->bootstrapPushGridFunction($argXSmin));

        $argXSmax = ["xs-push" => 13];
        $resXSmax = "";
        $this->assertEquals($resXSmax, $obj->bootstrapPushGridFunction($argXSmax));

        //
        $arg9 = ["lg-push" => 6, "md-push" => 12, "recopy-push" => true];
        $res9 = "col-lg-push-6 col-md-push-12 col-sm-push-12 col-xs-push-12";
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

        // Nothing
        $arg0 = [];
        $res0 = "";
        $this->assertEquals($res0, $obj->bootstrapStackedGridFunction($arg0));

        // LG
        $argLG = ["lg" => 1];
        $resLG = "col-lg-1";
        $this->assertEquals($resLG, $obj->bootstrapStackedGridFunction($argLG));

        $argLGcpy = ["lg" => 2, "recopy" => true];
        $resLGcpy = "col-lg-2 col-md-2 col-sm-2 col-xs-2";
        $this->assertEquals($resLGcpy, $obj->bootstrapStackedGridFunction($argLGcpy));

        $argLGmin = ["lg" => 0];
        $resLGmin = "";
        $this->assertEquals($resLGmin, $obj->bootstrapStackedGridFunction($argLGmin));

        $argLGmax = ["lg" => 13];
        $resLGmax = "";
        $this->assertEquals($resLGmax, $obj->bootstrapStackedGridFunction($argLGmax));

        // MD
        $argMD = ["md" => 2];
        $resMD = "col-md-2";
        $this->assertEquals($resMD, $obj->bootstrapStackedGridFunction($argMD));

        $argMDcpy = ["md" => 2, "recopy" => true];
        $resMDcpy = "col-md-2 col-sm-2 col-xs-2";
        $this->assertEquals($resMDcpy, $obj->bootstrapStackedGridFunction($argMDcpy));

        $argMDmin = ["md" => 0];
        $resMDmin = "";
        $this->assertEquals($resMDmin, $obj->bootstrapStackedGridFunction($argMDmin));

        $argMDmax = ["mg" => 13];
        $resMDmax = "";
        $this->assertEquals($resMDmax, $obj->bootstrapStackedGridFunction($argMDmax));

        // SM
        $argSM = ["sm" => 3];
        $resSM = "col-sm-3";
        $this->assertEquals($resSM, $obj->bootstrapStackedGridFunction($argSM));

        $argSMcpy = ["sm" => 2, "recopy" => true];
        $resSMcpy = "col-sm-2 col-xs-2";
        $this->assertEquals($resSMcpy, $obj->bootstrapStackedGridFunction($argSMcpy));

        $argSMmin = ["sm" => 0];
        $resSMmin = "";
        $this->assertEquals($resSMmin, $obj->bootstrapStackedGridFunction($argSMmin));

        $argSMmax = ["sm" => 13];
        $resSMmax = "";
        $this->assertEquals($resSMmax, $obj->bootstrapStackedGridFunction($argSMmax));

        // XS
        $argXS = ["xs" => 4];
        $resXS = "col-xs-4";
        $this->assertEquals($resXS, $obj->bootstrapStackedGridFunction($argXS));

        $argXScpy = ["xs" => 2, "recopy" => true];
        $resXScpy = "col-xs-2";
        $this->assertEquals($resXScpy, $obj->bootstrapStackedGridFunction($argXScpy));

        $argXSmin = ["xs" => 0];
        $resXSmin = "";
        $this->assertEquals($resXSmin, $obj->bootstrapStackedGridFunction($argXSmin));

        $argXSmax = ["xs" => 13];
        $resXSmax = "";
        $this->assertEquals($resXSmax, $obj->bootstrapStackedGridFunction($argXSmax));

        //
        $arg9 = ["lg" => 6, "md" => 12, "recopy" => true];
        $res9 = "col-lg-6 col-md-12 col-sm-12 col-xs-12";
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

        $arg9 = ["lg" => 12, "recopy" => true, "md-offset" => 12, "recopy-offset" => true, "sm-pull" => 12, "recopy-pull" => true, "xs-push" => 12, "recopy-push" => true];
        $res9 = "col-lg-12 col-md-12 col-sm-12 col-xs-12 col-md-offset-12 col-sm-offset-12 col-xs-offset-12 col-xs-push-12 col-sm-pull-12 col-xs-pull-12";
        $this->assertEquals($res9, $obj->bootstrapGridFunction($arg9));
    }

}
