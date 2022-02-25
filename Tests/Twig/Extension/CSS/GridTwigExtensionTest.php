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

use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\GridTwigExtension;

/**
 * Grid Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 */
class GridTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the bootstrapGridFunction().
     *
     * @return void
     */
    public function testBootstrapGridFunction(): void {

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
    public function testBootstrapGridFunctionWithoutArguments(): void {

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
    public function testBootstrapGridOffsetFunction(): void {

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
    public function testBootstrapGridOffsetFunctionWithLgOffset(): void {

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
    public function testBootstrapGridOffsetFunctionWithLgOffsetAndRecopy(): void {

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
    public function testBootstrapGridOffsetFunctionWithLgOffsetMax(): void {

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
    public function testBootstrapGridOffsetFunctionWithLgOffsetMin(): void {

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
    public function testBootstrapGridOffsetFunctionWithMdOffset(): void {

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
    public function testBootstrapGridOffsetFunctionWithMdOffsetAndRecopy(): void {

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
    public function testBootstrapGridOffsetFunctionWithMdOffsetMax(): void {

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
    public function testBootstrapGridOffsetFunctionWithMdOffsetMin(): void {

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
    public function testBootstrapGridOffsetFunctionWithSmOffset(): void {

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
    public function testBootstrapGridOffsetFunctionWithSmOffsetAndRecopy(): void {

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
    public function testBootstrapGridOffsetFunctionWithSmOffsetMax(): void {

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
    public function testBootstrapGridOffsetFunctionWithSmOffsetMin(): void {

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
    public function testBootstrapGridOffsetFunctionWithXsOffestAndRecopy(): void {

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
    public function testBootstrapGridOffsetFunctionWithXsOffset(): void {

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
    public function testBootstrapGridOffsetFunctionWithXsOffsetMax(): void {

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
    public function testBootstrapGridOffsetFunctionWithXsOffsetMin(): void {

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
    public function testBootstrapGridOffsetFunctionWithoutArguments(): void {

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
    public function testBootstrapGridPullFunction(): void {

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
    public function testBootstrapGridPullFunctionWithLgPull(): void {

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
    public function testBootstrapGridPullFunctionWithLgPullAndRecopy(): void {

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
    public function testBootstrapGridPullFunctionWithLgPullMax(): void {

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
    public function testBootstrapGridPullFunctionWithLgPullMin(): void {

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
    public function testBootstrapGridPullFunctionWithMdPull(): void {

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
    public function testBootstrapGridPullFunctionWithMdPullAndRecopy(): void {

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
    public function testBootstrapGridPullFunctionWithMdPullMax(): void {

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
    public function testBootstrapGridPullFunctionWithMdPullMin(): void {

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
    public function testBootstrapGridPullFunctionWithSmPull(): void {

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
    public function testBootstrapGridPullFunctionWithSmPullAndRecopy(): void {

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
    public function testBootstrapGridPullFunctionWithSmPullMax(): void {

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
    public function testBootstrapGridPullFunctionWithSmPullMin(): void {

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
    public function testBootstrapGridPullFunctionWithXsPull(): void {

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
    public function testBootstrapGridPullFunctionWithXsPullAndRecopy(): void {

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
    public function testBootstrapGridPullFunctionWithXsPullMax(): void {

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
    public function testBootstrapGridPullFunctionWithXsPullMin(): void {

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
    public function testBootstrapGridPullFunctionWithoutArguments(): void {

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
    public function testBootstrapGridPushFunction(): void {

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
    public function testBootstrapGridPushFunctionWithLgPush(): void {

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
    public function testBootstrapGridPushFunctionWithLgPushAndRecopy(): void {

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
    public function testBootstrapGridPushFunctionWithLgPushMax(): void {

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
    public function testBootstrapGridPushFunctionWithLgPushMin(): void {

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
    public function testBootstrapGridPushFunctionWithMdPush(): void {

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
    public function testBootstrapGridPushFunctionWithMdPushAndRecopy(): void {

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
    public function testBootstrapGridPushFunctionWithMdPushMax(): void {

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
    public function testBootstrapGridPushFunctionWithMdPushMin(): void {

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
    public function testBootstrapGridPushFunctionWithSmPush(): void {

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
    public function testBootstrapGridPushFunctionWithSmPushAndRecopy(): void {

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
    public function testBootstrapGridPushFunctionWithSmPushMax(): void {

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
    public function testBootstrapGridPushFunctionWithSmPushMin(): void {

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
    public function testBootstrapGridPushFunctionWithXsPush(): void {

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
    public function testBootstrapGridPushFunctionWithXsPushAndRecopy(): void {

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
    public function testBootstrapGridPushFunctionWithXsPushMax(): void {

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
    public function testBootstrapGridPushFunctionWithXsPushMin(): void {

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
    public function testBootstrapGridPushFunctionWithoutArguments(): void {

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
    public function testBootstrapGridStackedFunction(): void {

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
    public function testBootstrapGridStackedFunctionWithLg(): void {

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
    public function testBootstrapGridStackedFunctionWithLgAndRecopy(): void {

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
    public function testBootstrapGridStackedFunctionWithLgMax(): void {

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
    public function testBootstrapGridStackedFunctionWithLgMin(): void {

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
    public function testBootstrapGridStackedFunctionWithMd(): void {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["md" => 2];
        $res = "col-md-2";

        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithMdAndRecopy(): void {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = ["md" => 2, "recopy" => true];
        $res = "col-md-2 col-sm-2 col-xs-2";

        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests the bootstrapGridStackedFunction().
     *
     * @return void
     */
    public function testBootstrapGridStackedFunctionWithMdMax(): void {

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
    public function testBootstrapGridStackedFunctionWithMdMin(): void {

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
    public function testBootstrapGridStackedFunctionWithSm(): void {

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
    public function testBootstrapGridStackedFunctionWithSmAndRecopy(): void {

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
    public function testBootstrapGridStackedFunctionWithSmMax(): void {

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
    public function testBootstrapGridStackedFunctionWithSmMin(): void {

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
    public function testBootstrapGridStackedFunctionWithXs(): void {

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
    public function testBootstrapGridStackedFunctionWithXsAndRecopy(): void {

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
    public function testBootstrapGridStackedFunctionWithXsMax(): void {

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
    public function testBootstrapGridStackedFunctionWithXsMin(): void {

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
    public function testBootstrapGridStackedFunctionWithoutArguments(): void {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "";

        $this->assertEquals($res, $obj->bootstrapGridStackedFunction($arg));
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new GridTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(10, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapGrid", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapGridFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsGrid", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapGridFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapGridOffset", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapGridOffsetFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsGridOffset", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapGridOffsetFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapGridPull", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapGridPullFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsGridPull", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapGridPullFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapGridPush", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapGridPushFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsGridPush", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapGridPushFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapGridStacked", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapGridStackedFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsGridStacked", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapGridStackedFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.css.grid", GridTwigExtension::SERVICE_NAME);

        $obj = new GridTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
