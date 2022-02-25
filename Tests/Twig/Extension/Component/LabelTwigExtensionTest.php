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
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class LabelTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests bootstrapLabelDangerFunction()
     *
     * @return void
     */
    public function testBootstrapLabelDangerFunction(): void {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="label label-danger">content</span>';

        $this->assertEquals($res, $obj->bootstrapLabelDangerFunction($arg));
    }

    /**
     * /**
     * Tests bootstrapLabelDangerFunction()
     *
     * @return void
     */
    public function testBootstrapLabelDangerFunctionWithoutArguments(): void {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="label label-danger"></span>';

        $this->assertEquals($res, $obj->bootstrapLabelDangerFunction($arg));
    }

    /**
     * Tests bootstrapLabelDefaultFunction()
     *
     * @return void
     */
    public function testBootstrapLabelDefaultFunction(): void {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="label label-default">content</span>';

        $this->assertEquals($res, $obj->bootstrapLabelDefaultFunction($arg));
    }

    /**
     * Tests bootstrapLabelDefaultFunction()
     *
     * @return void
     */
    public function testBootstrapLabelDefaultFunctionWithoutArguments(): void {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="label label-default"></span>';

        $this->assertEquals($res, $obj->bootstrapLabelDefaultFunction($arg));
    }

    /**
     * Tests bootstrapLabelInfoFunction()
     *
     * @return void
     */
    public function testBootstrapLabelInfoFunction(): void {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="label label-info">content</span>';

        $this->assertEquals($res, $obj->bootstrapLabelInfoFunction($arg));
    }

    /**
     * Tests bootstrapLabelInfoFunction()
     *
     * @return void
     */
    public function testBootstrapLabelInfoFunctionWithoutArguments(): void {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="label label-info"></span>';

        $this->assertEquals($res, $obj->bootstrapLabelInfoFunction($arg));
    }

    /**
     * Tests bootstrapLabelPrimaryFunction()
     *
     * @return void
     */
    public function testBootstrapLabelPrimaryFunction(): void {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="label label-primary">content</span>';

        $this->assertEquals($res, $obj->bootstrapLabelPrimaryFunction($arg));
    }

    /**
     * Tests bootstrapLabelPrimaryFunction()
     *
     * @return void
     */
    public function testBootstrapLabelPrimaryFunctionWithoutArguments(): void {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="label label-primary"></span>';

        $this->assertEquals($res, $obj->bootstrapLabelPrimaryFunction($arg));
    }

    /**
     * Tests bootstrapLabelSuccessFunction()
     *
     * @return void
     */
    public function testBootstrapLabelSuccessFunction(): void {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="label label-success">content</span>';

        $this->assertEquals($res, $obj->bootstrapLabelSuccessFunction($arg));
    }

    /**
     * Tests bootstrapLabelSuccessFunction()
     *
     * @return void
     */
    public function testBootstrapLabelSuccessFunctionWithoutArguments(): void {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="label label-success"></span>';

        $this->assertEquals($res, $obj->bootstrapLabelSuccessFunction($arg));
    }

    /**
     * Tests bootstrapLabelWarningFunction()
     *
     * @return void
     */
    public function testBootstrapLabelWarningFunction(): void {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<span class="label label-warning">content</span>';

        $this->assertEquals($res, $obj->bootstrapLabelWarningFunction($arg));
    }

    /**
     * Tests bootstrapLabelWarningFunction()
     *
     * @return void
     */
    public function testBootstrapLabelWarningFunctionWithoutArguments(): void {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<span class="label label-warning"></span>';

        $this->assertEquals($res, $obj->bootstrapLabelWarningFunction($arg));
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(0, $res);
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctionsWithBootstrap3(): void {

        $obj = new LabelTwigExtension($this->twigEnvironment);
        $obj->setVersion(3);

        $res = $obj->getFunctions();
        $this->assertCount(12, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapLabelDanger", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapLabelDangerFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsLabelDanger", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapLabelDangerFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapLabelDefault", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapLabelDefaultFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsLabelDefault", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapLabelDefaultFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapLabelInfo", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapLabelInfoFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsLabelInfo", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapLabelInfoFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapLabelPrimary", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapLabelPrimaryFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsLabelPrimary", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapLabelPrimaryFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapLabelSuccess", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapLabelSuccessFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsLabelSuccess", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapLabelSuccessFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapLabelWarning", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapLabelWarningFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsLabelWarning", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapLabelWarningFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.component.label", LabelTwigExtension::SERVICE_NAME);

        $obj = new LabelTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
