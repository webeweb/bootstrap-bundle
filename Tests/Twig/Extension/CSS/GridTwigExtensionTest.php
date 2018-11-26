<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS;

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\GridTwigExtension;

/**
 * Grid Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 */
class GridTwigExtensionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();

        $this->assertCount(5, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapGrid", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapGridFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bootstrapGridOffset", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapGridOffsetFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("bootstrapGridPull", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapGridPullFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("bootstrapGridPush", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapGridPushFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("bootstrapGridStacked", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapGridStackedFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapGridFunction().
     *
     * @return void
     */
    public function testBootstrapGridFunction() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg0 = [];
        $res0 = "";
        $this->assertEquals($res0, $obj->bootstrapGridFunction($arg0));

        $arg9 = ["lg" => 12, "recopy" => true, "mdOffset" => 12, "recopyOffset" => true, "smPull" => 12, "recopyPull" => true, "xsPush" => 12, "recopyPush" => true];
        $res9 = "col-lg-12 col-md-12 col-sm-12 col-xs-12 col-md-offset-12 col-sm-offset-12 col-xs-offset-12 col-xs-push-12 col-sm-pull-12 col-xs-pull-12";
        $this->assertEquals($res9, $obj->bootstrapGridFunction($arg9));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunction() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        // Nothing
        $arg0 = [];
        $res0 = "";
        $this->assertEquals($res0, $obj->bootstrapGridOffsetFunction($arg0));

        // LG
        $argLG = ["lgOffset" => 1];
        $resLG = "col-lg-offset-1";
        $this->assertEquals($resLG, $obj->bootstrapGridOffsetFunction($argLG));

        $argLGcpy = ["lgOffset" => 2, "recopyOffset" => true];
        $resLGcpy = "col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2";
        $this->assertEquals($resLGcpy, $obj->bootstrapGridOffsetFunction($argLGcpy));

        $argLGmin = ["lgOffset" => 0];
        $resLGmin = "";
        $this->assertEquals($resLGmin, $obj->bootstrapGridOffsetFunction($argLGmin));

        $argLGmax = ["lgOffset" => 13];
        $resLGmax = "";
        $this->assertEquals($resLGmax, $obj->bootstrapGridOffsetFunction($argLGmax));

        // MD
        $argMD = ["mdOffset" => 2];
        $resMD = "col-md-offset-2";
        $this->assertEquals($resMD, $obj->bootstrapGridOffsetFunction($argMD));

        $argMDcpy = ["mdOffset" => 2, "recopyOffset" => true];
        $resMDcpy = "col-md-offset-2 col-sm-offset-2 col-xs-offset-2";
        $this->assertEquals($resMDcpy, $obj->bootstrapGridOffsetFunction($argMDcpy));

        $argMDmin = ["mdOffset" => 0];
        $resMDmin = "";
        $this->assertEquals($resMDmin, $obj->bootstrapGridOffsetFunction($argMDmin));

        $argMDmax = ["mgOffset" => 13];
        $resMDmax = "";
        $this->assertEquals($resMDmax, $obj->bootstrapGridOffsetFunction($argMDmax));

        // SM
        $argSM = ["smOffset" => 3];
        $resSM = "col-sm-offset-3";
        $this->assertEquals($resSM, $obj->bootstrapGridOffsetFunction($argSM));

        $argSMcpy = ["smOffset" => 2, "recopyOffset" => true];
        $resSMcpy = "col-sm-offset-2 col-xs-offset-2";
        $this->assertEquals($resSMcpy, $obj->bootstrapGridOffsetFunction($argSMcpy));

        $argSMmin = ["smOffset" => 0];
        $resSMmin = "";
        $this->assertEquals($resSMmin, $obj->bootstrapGridOffsetFunction($argSMmin));

        $argSMmax = ["smOffset" => 13];
        $resSMmax = "";
        $this->assertEquals($resSMmax, $obj->bootstrapGridOffsetFunction($argSMmax));

        // XS
        $argXS = ["xsOffset" => 4];
        $resXS = "col-xs-offset-4";
        $this->assertEquals($resXS, $obj->bootstrapGridOffsetFunction($argXS));

        $argXScpy = ["xsOffset" => 2, "recopyOffset" => true];
        $resXScpy = "col-xs-offset-2";
        $this->assertEquals($resXScpy, $obj->bootstrapGridOffsetFunction($argXScpy));

        $argXSmin = ["xsOffset" => 0];
        $resXSmin = "";
        $this->assertEquals($resXSmin, $obj->bootstrapGridOffsetFunction($argXSmin));

        $argXSmax = ["xsOffset" => 13];
        $resXSmax = "";
        $this->assertEquals($resXSmax, $obj->bootstrapGridOffsetFunction($argXSmax));

        //
        $arg9 = ["lgOffset" => 6, "mdOffset" => 12, "recopyOffset" => true];
        $res9 = "col-lg-offset-6 col-md-offset-12 col-sm-offset-12 col-xs-offset-12";
        $this->assertEquals($res9, $obj->bootstrapGridOffsetFunction($arg9));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunction() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        // Nothing
        $arg0 = [];
        $res0 = "";
        $this->assertEquals($res0, $obj->bootstrapGridPullFunction($arg0));

        // LG
        $argLG = ["lgPull" => 1];
        $resLG = "col-lg-pull-1";
        $this->assertEquals($resLG, $obj->bootstrapGridPullFunction($argLG));

        $argLGcpy = ["lgPull" => 2, "recopyPull" => true];
        $resLGcpy = "col-lg-pull-2 col-md-pull-2 col-sm-pull-2 col-xs-pull-2";
        $this->assertEquals($resLGcpy, $obj->bootstrapGridPullFunction($argLGcpy));

        $argLGmin = ["lgPull" => 0];
        $resLGmin = "";
        $this->assertEquals($resLGmin, $obj->bootstrapGridPullFunction($argLGmin));

        $argLGmax = ["lgPull" => 13];
        $resLGmax = "";
        $this->assertEquals($resLGmax, $obj->bootstrapGridPullFunction($argLGmax));

        // MD
        $argMD = ["mdPull" => 2];
        $resMD = "col-md-pull-2";
        $this->assertEquals($resMD, $obj->bootstrapGridPullFunction($argMD));

        $argMDcpy = ["mdPull" => 2, "recopyPull" => true];
        $resMDcpy = "col-md-pull-2 col-sm-pull-2 col-xs-pull-2";
        $this->assertEquals($resMDcpy, $obj->bootstrapGridPullFunction($argMDcpy));

        $argMDmin = ["mdPull" => 0];
        $resMDmin = "";
        $this->assertEquals($resMDmin, $obj->bootstrapGridPullFunction($argMDmin));

        $argMDmax = ["mgPull" => 13];
        $resMDmax = "";
        $this->assertEquals($resMDmax, $obj->bootstrapGridPullFunction($argMDmax));

        // SM
        $argSM = ["smPull" => 3];
        $resSM = "col-sm-pull-3";
        $this->assertEquals($resSM, $obj->bootstrapGridPullFunction($argSM));

        $argSMcpy = ["smPull" => 2, "recopyPull" => true];
        $resSMcpy = "col-sm-pull-2 col-xs-pull-2";
        $this->assertEquals($resSMcpy, $obj->bootstrapGridPullFunction($argSMcpy));

        $argSMmin = ["smPull" => 0];
        $resSMmin = "";
        $this->assertEquals($resSMmin, $obj->bootstrapGridPullFunction($argSMmin));

        $argSMmax = ["smPull" => 13];
        $resSMmax = "";
        $this->assertEquals($resSMmax, $obj->bootstrapGridPullFunction($argSMmax));

        // XS
        $argXS = ["xsPull" => 4];
        $resXS = "col-xs-pull-4";
        $this->assertEquals($resXS, $obj->bootstrapGridPullFunction($argXS));

        $argXScpy = ["xsPull" => 2, "recopyPull" => true];
        $resXScpy = "col-xs-pull-2";
        $this->assertEquals($resXScpy, $obj->bootstrapGridPullFunction($argXScpy));

        $argXSmin = ["xsPull" => 0];
        $resXSmin = "";
        $this->assertEquals($resXSmin, $obj->bootstrapGridPullFunction($argXSmin));

        $argXSmax = ["xsPull" => 13];
        $resXSmax = "";
        $this->assertEquals($resXSmax, $obj->bootstrapGridPullFunction($argXSmax));

        //
        $arg9 = ["lgPull" => 6, "mdPull" => 12, "recopyPull" => true];
        $res9 = "col-lg-pull-6 col-md-pull-12 col-sm-pull-12 col-xs-pull-12";
        $this->assertEquals($res9, $obj->bootstrapGridPullFunction($arg9));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunction() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        // Nothing
        $arg0 = [];
        $res0 = "";
        $this->assertEquals($res0, $obj->bootstrapGridPushFunction($arg0));

        // LG
        $argLG = ["lgPush" => 1];
        $resLG = "col-lg-push-1";
        $this->assertEquals($resLG, $obj->bootstrapGridPushFunction($argLG));

        $argLGcpy = ["lgPush" => 2, "recopyPush" => true];
        $resLGcpy = "col-lg-push-2 col-md-push-2 col-sm-push-2 col-xs-push-2";
        $this->assertEquals($resLGcpy, $obj->bootstrapGridPushFunction($argLGcpy));

        $argLGmin = ["lgPush" => 0];
        $resLGmin = "";
        $this->assertEquals($resLGmin, $obj->bootstrapGridPushFunction($argLGmin));

        $argLGmax = ["lgPush" => 13];
        $resLGmax = "";
        $this->assertEquals($resLGmax, $obj->bootstrapGridPushFunction($argLGmax));

        // MD
        $argMD = ["mdPush" => 2];
        $resMD = "col-md-push-2";
        $this->assertEquals($resMD, $obj->bootstrapGridPushFunction($argMD));

        $argMDcpy = ["mdPush" => 2, "recopyPush" => true];
        $resMDcpy = "col-md-push-2 col-sm-push-2 col-xs-push-2";
        $this->assertEquals($resMDcpy, $obj->bootstrapGridPushFunction($argMDcpy));

        $argMDmin = ["mdPush" => 0];
        $resMDmin = "";
        $this->assertEquals($resMDmin, $obj->bootstrapGridPushFunction($argMDmin));

        $argMDmax = ["mgPush" => 13];
        $resMDmax = "";
        $this->assertEquals($resMDmax, $obj->bootstrapGridPushFunction($argMDmax));

        // SM
        $argSM = ["smPush" => 3];
        $resSM = "col-sm-push-3";
        $this->assertEquals($resSM, $obj->bootstrapGridPushFunction($argSM));

        $argSMcpy = ["smPush" => 2, "recopyPush" => true];
        $resSMcpy = "col-sm-push-2 col-xs-push-2";
        $this->assertEquals($resSMcpy, $obj->bootstrapGridPushFunction($argSMcpy));

        $argSMmin = ["smPush" => 0];
        $resSMmin = "";
        $this->assertEquals($resSMmin, $obj->bootstrapGridPushFunction($argSMmin));

        $argSMmax = ["smPush" => 13];
        $resSMmax = "";
        $this->assertEquals($resSMmax, $obj->bootstrapGridPushFunction($argSMmax));

        // XS
        $argXS = ["xsPush" => 4];
        $resXS = "col-xs-push-4";
        $this->assertEquals($resXS, $obj->bootstrapGridPushFunction($argXS));

        $argXScpy = ["xsPush" => 2, "recopyPush" => true];
        $resXScpy = "col-xs-push-2";
        $this->assertEquals($resXScpy, $obj->bootstrapGridPushFunction($argXScpy));

        $argXSmin = ["xsPush" => 0];
        $resXSmin = "";
        $this->assertEquals($resXSmin, $obj->bootstrapGridPushFunction($argXSmin));

        $argXSmax = ["xsPush" => 13];
        $resXSmax = "";
        $this->assertEquals($resXSmax, $obj->bootstrapGridPushFunction($argXSmax));

        //
        $arg9 = ["lgPush" => 6, "mdPush" => 12, "recopyPush" => true];
        $res9 = "col-lg-push-6 col-md-push-12 col-sm-push-12 col-xs-push-12";
        $this->assertEquals($res9, $obj->bootstrapGridPushFunction($arg9));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunction() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        // Nothing
        $arg0 = [];
        $res0 = "";
        $this->assertEquals($res0, $obj->bootstrapGridStackedFunction($arg0));

        // LG
        $argLG = ["lg" => 1];
        $resLG = "col-lg-1";
        $this->assertEquals($resLG, $obj->bootstrapGridStackedFunction($argLG));

        $argLGcpy = ["lg" => 2, "recopy" => true];
        $resLGcpy = "col-lg-2 col-md-2 col-sm-2 col-xs-2";
        $this->assertEquals($resLGcpy, $obj->bootstrapGridStackedFunction($argLGcpy));

        $argLGmin = ["lg" => 0];
        $resLGmin = "";
        $this->assertEquals($resLGmin, $obj->bootstrapGridStackedFunction($argLGmin));

        $argLGmax = ["lg" => 13];
        $resLGmax = "";
        $this->assertEquals($resLGmax, $obj->bootstrapGridStackedFunction($argLGmax));

        // MD
        $argMD = ["md" => 2];
        $resMD = "col-md-2";
        $this->assertEquals($resMD, $obj->bootstrapGridStackedFunction($argMD));

        $argMDcpy = ["md" => 2, "recopy" => true];
        $resMDcpy = "col-md-2 col-sm-2 col-xs-2";
        $this->assertEquals($resMDcpy, $obj->bootstrapGridStackedFunction($argMDcpy));

        $argMDmin = ["md" => 0];
        $resMDmin = "";
        $this->assertEquals($resMDmin, $obj->bootstrapGridStackedFunction($argMDmin));

        $argMDmax = ["mg" => 13];
        $resMDmax = "";
        $this->assertEquals($resMDmax, $obj->bootstrapGridStackedFunction($argMDmax));

        // SM
        $argSM = ["sm" => 3];
        $resSM = "col-sm-3";
        $this->assertEquals($resSM, $obj->bootstrapGridStackedFunction($argSM));

        $argSMcpy = ["sm" => 2, "recopy" => true];
        $resSMcpy = "col-sm-2 col-xs-2";
        $this->assertEquals($resSMcpy, $obj->bootstrapGridStackedFunction($argSMcpy));

        $argSMmin = ["sm" => 0];
        $resSMmin = "";
        $this->assertEquals($resSMmin, $obj->bootstrapGridStackedFunction($argSMmin));

        $argSMmax = ["sm" => 13];
        $resSMmax = "";
        $this->assertEquals($resSMmax, $obj->bootstrapGridStackedFunction($argSMmax));

        // XS
        $argXS = ["xs" => 4];
        $resXS = "col-xs-4";
        $this->assertEquals($resXS, $obj->bootstrapGridStackedFunction($argXS));

        $argXScpy = ["xs" => 2, "recopy" => true];
        $resXScpy = "col-xs-2";
        $this->assertEquals($resXScpy, $obj->bootstrapGridStackedFunction($argXScpy));

        $argXSmin = ["xs" => 0];
        $resXSmin = "";
        $this->assertEquals($resXSmin, $obj->bootstrapGridStackedFunction($argXSmin));

        $argXSmax = ["xs" => 13];
        $resXSmax = "";
        $this->assertEquals($resXSmax, $obj->bootstrapGridStackedFunction($argXSmax));

        //
        $arg9 = ["lg" => 6, "md" => 12, "recopy" => true];
        $res9 = "col-lg-6 col-md-12 col-sm-12 col-xs-12";
        $this->assertEquals($res9, $obj->bootstrapGridStackedFunction($arg9));
    }

}
