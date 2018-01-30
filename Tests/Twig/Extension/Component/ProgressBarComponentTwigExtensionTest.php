<?php

/**
 * Disclaimer: This source code is protected by copyright law and by
 * international conventions.
 *
 * Any reproduction or partial or total distribution of the source code, by any
 * means whatsoever, is strictly forbidden.
 *
 * Anyone not complying with these provisions will be guilty of the offense of
 * infringement and the penal sanctions provided for by law.
 *
 * © 2017 All rights reserved.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ProgressBarComponentTwigExtension;

/**
 * Progress bar component Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 * @final
 */
final class ProgressBarComponentTwigExtensionTest extends PHPUnit_Framework_TestCase {

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
        $this->assertEquals("bootstrapBasicProgressBar", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapBasicProgressBarFunction"], $res[0]->getCallable());
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
     * Tests the basicProgressBarFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBasicProgressBarFunction() {

        $obj = new ProgressBarComponentTwigExtension();

        $arg0 = [];
        $res0 = '<div class="progress"><div class="progress-bar" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">&nbsp;</div></div>';
        $this->assertEquals($res0, $obj->bootstrapBasicProgressBarFunction($arg0));

        $arg1 = ["content" => "content"];
        $res1 = '<div class="progress"><div class="progress-bar" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">content<span class="sr-only">50 %</span></div></div>';
        $this->assertEquals($res1, $obj->bootstrapBasicProgressBarFunction($arg1));

        $arg2 = ["value" => 75];
        $res2 = '<div class="progress"><div class="progress-bar" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100%">&nbsp;</div></div>';
        $this->assertEquals($res2, $obj->bootstrapBasicProgressBarFunction($arg2));

        $arg3 = ["min" => 1];
        $res3 = '<div class="progress"><div class="progress-bar" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="1" aria-valuemax="100%">&nbsp;</div></div>';
        $this->assertEquals($res3, $obj->bootstrapBasicProgressBarFunction($arg3));

        $arg4 = ["max" => 200];
        $res4 = '<div class="progress"><div class="progress-bar" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="200%">&nbsp;</div></div>';
        $this->assertEquals($res4, $obj->bootstrapBasicProgressBarFunction($arg4));

        $arg5 = ["striped" => true];
        $res5 = '<div class="progress"><div class="progress-bar progress-bar-striped" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">&nbsp;</div></div>';
        $this->assertEquals($res5, $obj->bootstrapBasicProgressBarFunction($arg5));

        $arg6 = ["animated" => true];
        $res6 = '<div class="progress"><div class="progress-bar active" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">&nbsp;</div></div>';
        $this->assertEquals($res6, $obj->bootstrapBasicProgressBarFunction($arg6));

        $arg9 = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true];
        $res9 = '<div class="progress"><div class="progress-bar progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150%">content<span class="sr-only">75 %</span></div></div>';
        $this->assertEquals($res9, $obj->bootstrapBasicProgressBarFunction($arg9));
    }

    /**
     * Tests the bootstrapProgressBarDangerFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testProgressBarDangerFunction() {

        $obj = new ProgressBarComponentTwigExtension();

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">&nbsp;</div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarDangerFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarInfoFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testProgressBarInfoFunction() {

        $obj = new ProgressBarComponentTwigExtension();

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar progress-bar-info" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">&nbsp;</div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarInfoFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarSuccessFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testProgressBarSuccessFunction() {

        $obj = new ProgressBarComponentTwigExtension();

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar progress-bar-success" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">&nbsp;</div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarSuccessFunction($arg));
    }

    /**
     * Tests the bootstrapProgressBarWarningFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testProgressBarWarningFunction() {

        $obj = new ProgressBarComponentTwigExtension();

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar progress-bar-warning" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">&nbsp;</div></div>';
        $this->assertEquals($res, $obj->bootstrapProgressBarWarningFunction($arg));
    }

}
