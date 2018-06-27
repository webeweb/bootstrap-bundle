<?php

/**
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
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ProgressBarComponentTwigExtension;

/**
 * Progress bar component Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 * @final
 */
final class ProgressBarComponentTwigExtensionTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new ProgressBarComponentTwigExtension();

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
     * @depends testGetFunctions
     */
    public function testBootstrapProgressBarBasicFunction() {

        $obj = new ProgressBarComponentTwigExtension();

        $arg0 = [];
        $res0 = '<div class="progress"><div class="progress-bar" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res0, $obj->bootstrapProgressBarBasicFunction($arg0));

        $arg1 = ["content" => "content"];
        $res1 = '<div class="progress"><div class="progress-bar" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">content</div></div>';
        $this->assertEquals($res1, $obj->bootstrapProgressBarBasicFunction($arg1));

        $arg2 = ["value" => 75];
        $res2 = '<div class="progress"><div class="progress-bar" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">75%</span></div></div>';
        $this->assertEquals($res2, $obj->bootstrapProgressBarBasicFunction($arg2));

        $arg3 = ["min" => 1];
        $res3 = '<div class="progress"><div class="progress-bar" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="1" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res3, $obj->bootstrapProgressBarBasicFunction($arg3));

        $arg4 = ["max" => 200];
        $res4 = '<div class="progress"><div class="progress-bar" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="200%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res4, $obj->bootstrapProgressBarBasicFunction($arg4));

        $arg5 = ["striped" => true];
        $res5 = '<div class="progress"><div class="progress-bar progress-bar-striped" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res5, $obj->bootstrapProgressBarBasicFunction($arg5));

        $arg6 = ["animated" => true];
        $res6 = '<div class="progress"><div class="progress-bar active" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res6, $obj->bootstrapProgressBarBasicFunction($arg6));

        $arg9 = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true];
        $res9 = '<div class="progress"><div class="progress-bar progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150%">content</div></div>';
        $this->assertEquals($res9, $obj->bootstrapProgressBarBasicFunction($arg9));
    }

    /**
     * Tests the bootstrapProgressBarDangerFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapProgressBarDangerFunction() {

        $obj = new ProgressBarComponentTwigExtension();

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarDangerFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarInfoFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapProgressBarInfoFunction() {

        $obj = new ProgressBarComponentTwigExtension();

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar progress-bar-info" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarInfoFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarSuccessFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapProgressBarSuccessFunction() {

        $obj = new ProgressBarComponentTwigExtension();

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar progress-bar-success" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarSuccessFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarWarningFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapProgressBarWarningFunction() {

        $obj = new ProgressBarComponentTwigExtension();

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar progress-bar-warning" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarWarningFunction($arg));
    }

}
