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

use Twig\Node\Node;
use Twig\TwigFunction;
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

        $this->assertEquals("wbw.bootstrap.twig.extension.component.label", LabelTwigExtension::SERVICE_NAME);

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(0, $res);
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctionsWithBootstrap3() {

        $obj = new LabelTwigExtension($this->twigEnvironment);
        $obj->setVersion(3);

        $res = $obj->getFunctions();
        $this->assertCount(12, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("bootstrapLabelDanger", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapLabelDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("bsLabelDanger", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapLabelDangerFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("bootstrapLabelDefault", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapLabelDefaultFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("bsLabelDefault", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapLabelDefaultFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("bootstrapLabelInfo", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapLabelInfoFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[5]);
        $this->assertEquals("bsLabelInfo", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapLabelInfoFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[6]);
        $this->assertEquals("bootstrapLabelPrimary", $res[6]->getName());
        $this->assertEquals([$obj, "bootstrapLabelPrimaryFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[7]);
        $this->assertEquals("bsLabelPrimary", $res[7]->getName());
        $this->assertEquals([$obj, "bootstrapLabelPrimaryFunction"], $res[7]->getCallable());
        $this->assertEquals(["html"], $res[7]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[8]);
        $this->assertEquals("bootstrapLabelSuccess", $res[8]->getName());
        $this->assertEquals([$obj, "bootstrapLabelSuccessFunction"], $res[8]->getCallable());
        $this->assertEquals(["html"], $res[8]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[9]);
        $this->assertEquals("bsLabelSuccess", $res[9]->getName());
        $this->assertEquals([$obj, "bootstrapLabelSuccessFunction"], $res[9]->getCallable());
        $this->assertEquals(["html"], $res[9]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[10]);
        $this->assertEquals("bootstrapLabelWarning", $res[10]->getName());
        $this->assertEquals([$obj, "bootstrapLabelWarningFunction"], $res[10]->getCallable());
        $this->assertEquals(["html"], $res[10]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[11]);
        $this->assertEquals("bsLabelWarning", $res[11]->getName());
        $this->assertEquals([$obj, "bootstrapLabelWarningFunction"], $res[11]->getCallable());
        $this->assertEquals(["html"], $res[11]->getSafe(new Node()));
    }
}
