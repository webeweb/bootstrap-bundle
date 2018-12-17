<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component;

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ProgressBarTwigExtension;

/**
 * Progress bar Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class ProgressBarTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(5, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapProgressBarBasic", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarBasicFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bootstrapProgressBarDanger", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarDangerFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("bootstrapProgressBarInfo", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarInfoFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("bootstrapProgressBarSuccess", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarSuccessFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("bootstrapProgressBarWarning", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarWarningFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapProgressBarBasicFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarBasicFunction() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150%">content</div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarBasicFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarBasicFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarBasicFunctionWithAnimated() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["animated" => true];
        $res = '<div class="progress"><div class="progress-bar active" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarBasicFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarBasicFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarBasicFunctionWithContent() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<div class="progress"><div class="progress-bar" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">content</div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarBasicFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarBasicFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarBasicFunctionWithMax() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["max" => 200];
        $res = '<div class="progress"><div class="progress-bar" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="200%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarBasicFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarBasicFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarBasicFunctionWithMin() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["min" => 1];
        $res = '<div class="progress"><div class="progress-bar" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="1" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarBasicFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarBasicFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarBasicFunctionWithStriped() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["striped" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-striped" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarBasicFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarBasicFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarBasicFunctionWithValue() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["value" => 75];
        $res = '<div class="progress"><div class="progress-bar" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">75%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarBasicFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarBasicFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarBasicFunctionWithoutArguments() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarBasicFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarDangerFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarDangerFunction() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-danger progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150%">content</div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarDangerFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarDangerFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarDangerFunctionWithAnimated() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["animated" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-danger active" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarDangerFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarDangerFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarDangerFunctionWithContent() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">content</div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarDangerFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarDangerFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarDangerFunctionWithMax() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["max" => 200];
        $res = '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="200%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarDangerFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarDangerFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarDangerFunctionWithMin() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["min" => 1];
        $res = '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="1" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarDangerFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarDangerFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarDangerFunctionWithStriped() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["striped" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-danger progress-bar-striped" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarDangerFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarDangerFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarDangerFunctionWithValue() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["value" => 75];
        $res = '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">75%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarDangerFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarDangerFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarDangerFunctionWithoutArguments() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarDangerFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarInfoFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarInfoFunction() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-info progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150%">content</div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarInfoFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarInfoFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarInfoFunctionWithAnimated() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["animated" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-info active" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarInfoFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarInfoFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarInfoFunctionWithContent() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<div class="progress"><div class="progress-bar progress-bar-info" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">content</div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarInfoFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarInfoFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarInfoFunctionWithMax() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["max" => 200];
        $res = '<div class="progress"><div class="progress-bar progress-bar-info" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="200%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarInfoFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarInfoFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarInfoFunctionWithMin() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["min" => 1];
        $res = '<div class="progress"><div class="progress-bar progress-bar-info" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="1" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarInfoFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarInfoFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarInfoFunctionWithStriped() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["striped" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-info progress-bar-striped" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarInfoFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarInfoFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarInfoFunctionWithValue() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["value" => 75];
        $res = '<div class="progress"><div class="progress-bar progress-bar-info" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">75%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarInfoFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarInfoFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarInfoFunctionWithoutArguments() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar progress-bar-info" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarInfoFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarSuccessFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarSuccessFunction() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150%">content</div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarSuccessFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarSuccessFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarSuccessFunctionWithAnimated() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["animated" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-success active" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarSuccessFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarSuccessFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarSuccessFunctionWithContent() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<div class="progress"><div class="progress-bar progress-bar-success" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">content</div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarSuccessFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarSuccessFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarSuccessFunctionWithMax() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["max" => 200];
        $res = '<div class="progress"><div class="progress-bar progress-bar-success" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="200%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarSuccessFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarSuccessFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarSuccessFunctionWithMin() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["min" => 1];
        $res = '<div class="progress"><div class="progress-bar progress-bar-success" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="1" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarSuccessFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarSuccessFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarSuccessFunctionWithStriped() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["striped" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-success progress-bar-striped" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarSuccessFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarSuccessFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarSuccessFunctionWithValue() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["value" => 75];
        $res = '<div class="progress"><div class="progress-bar progress-bar-success" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">75%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarSuccessFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarSuccessFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarSuccessFunctionWithoutArguments() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar progress-bar-success" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarSuccessFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarWarningFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarWarningFunction() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-warning progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150%">content</div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarWarningFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarWarningFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarWarningFunctionWithAnimated() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["animated" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-warning active" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarWarningFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarWarningFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarWarningFunctionWithContent() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<div class="progress"><div class="progress-bar progress-bar-warning" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">content</div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarWarningFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarWarningFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarWarningFunctionWithMax() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["max" => 200];
        $res = '<div class="progress"><div class="progress-bar progress-bar-warning" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="200%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarWarningFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarWarningFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarWarningFunctionWithMin() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["min" => 1];
        $res = '<div class="progress"><div class="progress-bar progress-bar-warning" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="1" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarWarningFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarWarningFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarWarningFunctionWithStriped() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["striped" => true];
        $res = '<div class="progress"><div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarWarningFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarWarningFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarWarningFunctionWithValue() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["value" => 75];
        $res = '<div class="progress"><div class="progress-bar progress-bar-warning" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">75%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarWarningFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarWarningFunction() method.
     *
     * @return void
     */
    public function testBootstrapProgressBarWarningFunctionWithoutArguments() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar progress-bar-warning" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarWarningFunction($arg));
    }

}
