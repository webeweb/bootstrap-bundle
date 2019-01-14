<?php

/*
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
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\GridTwigExtension;

/**
 * Grid Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 */
class GridTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the bootstrapGridFunction().
     *
     * @return void
     */
    public function testBootstrapGridFunction() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lg" => 12, "recopy" => true, "mdOffset" => 12, "recopyOffset" => true, "smPull" => 12, "recopyPull" => true, "xsPush" => 12, "recopyPush" => true];
        $res = "col-lg-12 col-md-12 col-sm-12 col-xs-12 col-md-offset-12 col-sm-offset-12 col-xs-offset-12 col-xs-push-12 col-sm-pull-12 col-xs-pull-12";
        $this->assertEquals($res, $obj->bootstrapGridFunction($arg));
    }

    /**
     * Tests the bootstrapGridFunction().
     *
     * @return void
     */
    public function testBootstrapGridFunctionWithoutArguments() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridFunction($arg));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunction() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg9 = ["lgOffset" => 6, "mdOffset" => 12, "recopyOffset" => true];
        $res9 = "col-lg-offset-6 col-md-offset-12 col-sm-offset-12 col-xs-offset-12";
        $this->assertEquals($res9, $obj->bootstrapGridOffsetFunction($arg9));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunctionWithLgOffset() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lgOffset" => 1];
        $res = "col-lg-offset-1";
        $this->assertEquals($res, $obj->bootstrapGridOffsetFunction($arg));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunctionWithLgOffsetAndRecopy() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lgOffset" => 2, "recopyOffset" => true];
        $res = "col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-xs-offset-2";
        $this->assertEquals($res, $obj->bootstrapGridOffsetFunction($arg));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunctionWithLgOffsetMax() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lgOffset" => 13];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridOffsetFunction($arg));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunctionWithLgOffsetMin() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lgOffset" => 0];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridOffsetFunction($arg));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunctionWithMdOffset() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["mdOffset" => 2];
        $res = "col-md-offset-2";
        $this->assertEquals($res, $obj->bootstrapGridOffsetFunction($arg));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunctionWithMdOffsetAndRecopy() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["mdOffset" => 2, "recopyOffset" => true];
        $res = "col-md-offset-2 col-sm-offset-2 col-xs-offset-2";
        $this->assertEquals($res, $obj->bootstrapGridOffsetFunction($arg));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunctionWithMdOffsetMax() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["mdOffset" => 13];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridOffsetFunction($arg));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunctionWithMdOffsetMin() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["mdOffset" => 0];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridOffsetFunction($arg));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunctionWithSmOffset() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["smOffset" => 3];
        $res = "col-sm-offset-3";
        $this->assertEquals($res, $obj->bootstrapGridOffsetFunction($arg));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunctionWithSmOffsetAndRecopy() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["smOffset" => 2, "recopyOffset" => true];
        $res = "col-sm-offset-2 col-xs-offset-2";
        $this->assertEquals($res, $obj->bootstrapGridOffsetFunction($arg));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunctionWithSmOffsetMax() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["smOffset" => 13];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridOffsetFunction($arg));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunctionWithSmOffsetMin() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["smOffset" => 0];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridOffsetFunction($arg));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunctionWithXsOffestAndRecopy() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["xsOffset" => 2, "recopyOffset" => true];
        $res = "col-xs-offset-2";
        $this->assertEquals($res, $obj->bootstrapGridOffsetFunction($arg));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunctionWithXsOffset() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["xsOffset" => 4];
        $res = "col-xs-offset-4";
        $this->assertEquals($res, $obj->bootstrapGridOffsetFunction($arg));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunctionWithXsOffsetMax() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["xsOffset" => 13];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridOffsetFunction($arg));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunctionWithXsOffsetMin() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["xsOffset" => 0];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridOffsetFunction($arg));
    }

    /**
     * Tests the bootstrapGridOffsetFunction().
     *
     * @return void
     */
    public function testBootstrapGridOffsetFunctionWithoutArguments() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridOffsetFunction($arg));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunction() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lgPull" => 6, "mdPull" => 12, "recopyPull" => true];
        $res = "col-lg-pull-6 col-md-pull-12 col-sm-pull-12 col-xs-pull-12";
        $this->assertEquals($res, $obj->bootstrapGridPullFunction($arg));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunctionWithLgPull() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lgPull" => 1];
        $res = "col-lg-pull-1";
        $this->assertEquals($res, $obj->bootstrapGridPullFunction($arg));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunctionWithLgPullAndRecopy() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lgPull" => 2, "recopyPull" => true];
        $res = "col-lg-pull-2 col-md-pull-2 col-sm-pull-2 col-xs-pull-2";
        $this->assertEquals($res, $obj->bootstrapGridPullFunction($arg));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunctionWithLgPullMax() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lgPull" => 13];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridPullFunction($arg));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunctionWithLgPullMin() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lgPull" => 0];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridPullFunction($arg));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunctionWithMdPull() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["mdPull" => 2];
        $res = "col-md-pull-2";
        $this->assertEquals($res, $obj->bootstrapGridPullFunction($arg));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunctionWithMdPullAndRecopy() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["mdPull" => 2, "recopyPull" => true];
        $res = "col-md-pull-2 col-sm-pull-2 col-xs-pull-2";
        $this->assertEquals($res, $obj->bootstrapGridPullFunction($arg));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunctionWithMdPullMax() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["mdPull" => 13];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridPullFunction($arg));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunctionWithMdPullMin() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["mdPull" => 0];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridPullFunction($arg));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunctionWithSmPull() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["smPull" => 3];
        $res = "col-sm-pull-3";
        $this->assertEquals($res, $obj->bootstrapGridPullFunction($arg));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunctionWithSmPullAndRecopy() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["smPull" => 2, "recopyPull" => true];
        $res = "col-sm-pull-2 col-xs-pull-2";
        $this->assertEquals($res, $obj->bootstrapGridPullFunction($arg));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunctionWithSmPullMax() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["smPull" => 13];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridPullFunction($arg));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunctionWithSmPullMin() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["smPull" => 0];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridPullFunction($arg));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunctionWithXsPull() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["xsPull" => 4];
        $res = "col-xs-pull-4";
        $this->assertEquals($res, $obj->bootstrapGridPullFunction($arg));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunctionWithXsPullAndRecopy() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["xsPull" => 2, "recopyPull" => true];
        $res = "col-xs-pull-2";
        $this->assertEquals($res, $obj->bootstrapGridPullFunction($arg));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunctionWithXsPullMax() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["xsPull" => 13];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridPullFunction($arg));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunctionWithXsPullMin() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["xsPull" => 0];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridPullFunction($arg));
    }

    /**
     * Tests the bootstrapGridPullFunction().
     *
     * @return void
     */
    public function testBootstrapGridPullFunctionWithoutArguments() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridPullFunction($arg));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunction() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lgPush" => 6, "mdPush" => 12, "recopyPush" => true];
        $res = "col-lg-push-6 col-md-push-12 col-sm-push-12 col-xs-push-12";
        $this->assertEquals($res, $obj->bootstrapGridPushFunction($arg));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunctionWithLgPush() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lgPush" => 1];
        $res = "col-lg-push-1";
        $this->assertEquals($res, $obj->bootstrapGridPushFunction($arg));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunctionWithLgPushAndRecopy() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lgPush" => 2, "recopyPush" => true];
        $res = "col-lg-push-2 col-md-push-2 col-sm-push-2 col-xs-push-2";
        $this->assertEquals($res, $obj->bootstrapGridPushFunction($arg));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunctionWithLgPushMax() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lgPush" => 13];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridPushFunction($arg));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunctionWithLgPushMin() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lgPush" => 0];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridPushFunction($arg));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunctionWithMdPush() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["mdPush" => 2];
        $res = "col-md-push-2";
        $this->assertEquals($res, $obj->bootstrapGridPushFunction($arg));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunctionWithMdPushAndRecopy() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["mdPush" => 2, "recopyPush" => true];
        $res = "col-md-push-2 col-sm-push-2 col-xs-push-2";
        $this->assertEquals($res, $obj->bootstrapGridPushFunction($arg));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunctionWithMdPushMax() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["mgPush" => 13];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridPushFunction($arg));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunctionWithMdPushMin() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["mdPush" => 0];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridPushFunction($arg));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunctionWithSmPush() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["smPush" => 3];
        $res = "col-sm-push-3";
        $this->assertEquals($res, $obj->bootstrapGridPushFunction($arg));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunctionWithSmPushAndRecopy() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["smPush" => 2, "recopyPush" => true];
        $res = "col-sm-push-2 col-xs-push-2";
        $this->assertEquals($res, $obj->bootstrapGridPushFunction($arg));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunctionWithSmPushMax() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["smPush" => 13];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridPushFunction($arg));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunctionWithSmPushMin() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["smPush" => 0];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridPushFunction($arg));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunctionWithXsPush() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["xsPush" => 4];
        $res = "col-xs-push-4";
        $this->assertEquals($res, $obj->bootstrapGridPushFunction($arg));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunctionWithXsPushAndRecopy() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["xsPush" => 2, "recopyPush" => true];
        $res = "col-xs-push-2";
        $this->assertEquals($res, $obj->bootstrapGridPushFunction($arg));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunctionWithXsPushMax() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["xsPush" => 13];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridPushFunction($arg));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunctionWithXsPushMin() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["xsPush" => 0];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridPushFunction($arg));
    }

    /**
     * Tests the bootstrapGridPushFunction().
     *
     * @return void
     */
    public function testBootstrapGridPushFunctionWithoutArguments() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridPushFunction($arg));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunction() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lg" => 6, "md" => 12, "recopy" => true];
        $res = "col-lg-6 col-md-12 col-sm-12 col-xs-12";
        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithLg() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lg" => 1];
        $res = "col-lg-1";
        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithLgAndRecopy() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lg" => 2, "recopy" => true];
        $res = "col-lg-2 col-md-2 col-sm-2 col-xs-2";
        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithLgMax() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lg" => 13];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithLgMin() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["lg" => 0];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithMd() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $argMD = ["md" => 2];
        $resMD = "col-md-2";
        $this->assertEquals($resMD, $obj->bootstrapGridStackedFunction($argMD));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithMdAndRecopy() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $argMDcpy = ["md" => 2, "recopy" => true];
        $resMDcpy = "col-md-2 col-sm-2 col-xs-2";
        $this->assertEquals($resMDcpy, $obj->bootstrapGridStackedFunction($argMDcpy));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithMdMax() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["mg" => 13];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithMdMin() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["md" => 0];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithSm() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["sm" => 3];
        $res = "col-sm-3";
        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithSmAndRecopy() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["sm" => 2, "recopy" => true];
        $res = "col-sm-2 col-xs-2";
        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithSmMax() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["sm" => 13];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithSmMin() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["sm" => 0];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithXs() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["xs" => 4];
        $res = "col-xs-4";
        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithXsAndRecopy() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["xs" => 2, "recopy" => true];
        $res = "col-xs-2";
        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithXsMax() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["xs" => 13];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithXsMin() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["xs" => 0];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithoutArguments() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "";
        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.bootstrap.twig.extension.css.grid", GridTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

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
}
