<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component;

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\LabelTwigExtension;

/**
 * Label Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class LabelTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the bootstrapLabelDangerFunction() method.
     *
     * @return void
     */
    public function testBootstrapLabelDangerFunction() {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="label label-danger">content</span>';
        $this->assertEquals($res, $obj->bootstrapLabelDangerFunction($arg));
    }

    /**
     * /**
     * Tests the bootstrapLabelDangerFunction() method.
     *
     * @return void
     */
    public function testBootstrapLabelDangerFunctionWithoutArguments() {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="label label-danger"></span>';
        $this->assertEquals($res, $obj->bootstrapLabelDangerFunction($arg));
    }

    /**
     * Tests the bootstrapLabelDefaultFunction() method.
     *
     * @return void
     */
    public function testBootstrapLabelDefaultFunction() {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="label label-default">content</span>';
        $this->assertEquals($res, $obj->bootstrapLabelDefaultFunction($arg));
    }

    /**
     * Tests the bootstrapLabelDefaultFunction() method.
     *
     * @return void
     */
    public function testBootstrapLabelDefaultFunctionWithoutArguments() {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="label label-default"></span>';
        $this->assertEquals($res, $obj->bootstrapLabelDefaultFunction($arg));
    }

    /**
     * Tests the bootstrapLabelInfoFunction() method.
     *
     * @return void
     */
    public function testBootstrapLabelInfoFunction() {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="label label-info">content</span>';
        $this->assertEquals($res, $obj->bootstrapLabelInfoFunction($arg));
    }

    /**
     * Tests the bootstrapLabelInfoFunction() method.
     *
     * @return void
     */
    public function testBootstrapLabelInfoFunctionWithoutArguments() {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="label label-info"></span>';
        $this->assertEquals($res, $obj->bootstrapLabelInfoFunction($arg));
    }

    /**
     * Tests the bootstrapLabelPrimaryFunction() method.
     *
     * @return void
     */
    public function testBootstrapLabelPrimaryFunction() {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="label label-primary">content</span>';
        $this->assertEquals($res, $obj->bootstrapLabelPrimaryFunction($arg));
    }

    /**
     * Tests the bootstrapLabelPrimaryFunction() method.
     *
     * @return void
     */
    public function testBootstrapLabelPrimaryFunctionWithoutArguments() {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="label label-primary"></span>';
        $this->assertEquals($res, $obj->bootstrapLabelPrimaryFunction($arg));
    }

    /**
     * Tests the bootstrapLabelSuccessFunction() method.
     *
     * @return void
     */
    public function testBootstrapLabelSuccessFunction() {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="label label-success">content</span>';
        $this->assertEquals($res, $obj->bootstrapLabelSuccessFunction($arg));
    }

    /**
     * Tests the bootstrapLabelSuccessFunction() method.
     *
     * @return void
     */
    public function testBootstrapLabelSuccessFunctionWithoutArguments() {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="label label-success"></span>';
        $this->assertEquals($res, $obj->bootstrapLabelSuccessFunction($arg));
    }

    /**
     * Tests the bootstrapLabelWarningFunction() method.
     *
     * @return void
     */
    public function testBootstrapLabelWarningFunction() {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="label label-warning">content</span>';
        $this->assertEquals($res, $obj->bootstrapLabelWarningFunction($arg));
    }

    /**
     * Tests the bootstrapLabelWarningFunction() method.
     *
     * @return void
     */
    public function testBootstrapLabelWarningFunctionWithoutArguments() {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="label label-warning"></span>';
        $this->assertEquals($res, $obj->bootstrapLabelWarningFunction($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.bootstrap.twig.extension.component.label", LabelTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(6, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapLabelDanger", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapLabelDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bootstrapLabelDefault", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapLabelDefaultFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("bootstrapLabelInfo", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapLabelInfoFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("bootstrapLabelPrimary", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapLabelPrimaryFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("bootstrapLabelSuccess", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapLabelSuccessFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
        $this->assertEquals("bootstrapLabelWarning", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapLabelWarningFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));
    }

}
