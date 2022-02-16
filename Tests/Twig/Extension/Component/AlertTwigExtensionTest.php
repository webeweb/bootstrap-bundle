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
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\AlertTwigExtension;

/**
 * Alert Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class AlertTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests bootstrapAlertDangerFunction()
     *
     * @return void
     */
    public function testBootstrapAlertDangerFunction(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<div class="alert alert-danger" role="alert">content</div>';

        $this->assertEquals($res, $obj->bootstrapAlertDangerFunction($arg));
    }

    /**
     * Tests bootstrapAlertDangerFunction()
     *
     * @return void
     */
    public function testBootstrapAlertDangerFunctionWithoutArguments(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="alert alert-danger" role="alert"></div>';

        $this->assertEquals($res, $obj->bootstrapAlertDangerFunction($arg));
    }

    /**
     * Tests bootstrapAlertDarkFunction()
     *
     * @return void
     */
    public function testBootstrapAlertDarkFunction(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<div class="alert alert-dark" role="alert">content</div>';

        $this->assertEquals($res, $obj->bootstrapAlertDarkFunction($arg));
    }

    /**
     * Tests bootstrapAlertDarkFunction()
     *
     * @return void
     */
    public function testBootstrapAlertDarkFunctionWithoutArguments(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="alert alert-dark" role="alert"></div>';

        $this->assertEquals($res, $obj->bootstrapAlertDarkFunction($arg));
    }

    /**
     * Tests bootstrapAlertInfoFunction()
     *
     * @return void
     */
    public function testBootstrapAlertInfoFunction(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<div class="alert alert-info" role="alert">content</div>';

        $this->assertEquals($res, $obj->bootstrapAlertInfoFunction($arg));
    }

    /**
     * Tests bootstrapAlertInfoFunction()
     *
     * @return void
     */
    public function testBootstrapAlertInfoFunctionWithoutArguments(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="alert alert-info" role="alert"></div>';

        $this->assertEquals($res, $obj->bootstrapAlertInfoFunction($arg));
    }

    /**
     * Tests bootstrapAlertLightFunction()
     *
     * @return void
     */
    public function testBootstrapAlertLightFunction(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<div class="alert alert-light" role="alert">content</div>';

        $this->assertEquals($res, $obj->bootstrapAlertLightFunction($arg));
    }

    /**
     * Tests bootstrapAlertLightFunction()
     *
     * @return void
     */
    public function testBootstrapAlertLightFunctionWithoutArguments(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="alert alert-light" role="alert"></div>';

        $this->assertEquals($res, $obj->bootstrapAlertLightFunction($arg));
    }

    /**
     * Tests bootstrapAlertLinkFunction()
     *
     * @return void
     */
    public function testBootstrapAlertLinkFunction(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = ["href" => "https://github.com/", "content" => "content"];
        $res = '<a href="https://github.com/">content</a>';

        $this->assertEquals($res, $obj->bootstrapAlertLinkFunction($arg));
    }

    /**
     * Tests bootstrapAlertLinkFunction()
     *
     * @return void
     */
    public function testBootstrapAlertLinkFunctionWithContent(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<a href="javascript:void(0);">content</a>';

        $this->assertEquals($res, $obj->bootstrapAlertLinkFunction($arg));
    }

    /**
     * Tests bootstrapAlertLinkFunction()
     *
     * @return void
     */
    public function testBootstrapAlertLinkFunctionWithHref(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = ["href" => "https://github.com/"];
        $res = '<a href="https://github.com/"></a>';

        $this->assertEquals($res, $obj->bootstrapAlertLinkFunction($arg));
    }

    /**
     * Tests bootstrapAlertLinkFunction()
     *
     * @return void
     */
    public function testBootstrapAlertLinkFunctionWithoutArguments(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<a href="javascript:void(0);"></a>';

        $this->assertEquals($res, $obj->bootstrapAlertLinkFunction($arg));
    }

    /**
     * Tests bootstrapAlertSecondaryFunction()
     *
     * @return void
     */
    public function testBootstrapAlertSecondaryFunction(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<div class="alert alert-secondary" role="alert">content</div>';

        $this->assertEquals($res, $obj->bootstrapAlertSecondaryFunction($arg));
    }

    /**
     * Tests bootstrapAlertSecondaryFunction()
     *
     * @return void
     */
    public function testBootstrapAlertSecondaryFunctionWithoutArguments(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="alert alert-secondary" role="alert"></div>';

        $this->assertEquals($res, $obj->bootstrapAlertSecondaryFunction($arg));
    }

    /**
     * Tests bootstrapAlertSuccessFunction()
     *
     * @return void
     */
    public function testBootstrapAlertSuccessFunction(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<div class="alert alert-success" role="alert">content</div>';

        $this->assertEquals($res, $obj->bootstrapAlertSuccessFunction($arg));
    }

    /**
     * Tests bootstrapAlertSuccessFunction()
     *
     * @return void
     */
    public function testBootstrapAlertSuccessFunctionWithoutArguments(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="alert alert-success" role="alert"></div>';

        $this->assertEquals($res, $obj->bootstrapAlertSuccessFunction($arg));
    }

    /**
     * Tests bootstrapAlertWarningFunction()
     *
     * @return void
     */
    public function testBootstrapAlertWarningFunction(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<div class="alert alert-warning" role="alert">content</div>';

        $this->assertEquals($res, $obj->bootstrapAlertWarningFunction($arg));
    }

    /**
     * Tests bootstrapAlertWarningFunction()
     *
     * @return void
     */
    public function testBootstrapAlertWarningFunctionWithoutArguments(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="alert alert-warning" role="alert"></div>';

        $this->assertEquals($res, $obj->bootstrapAlertWarningFunction($arg));
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(16, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapAlertDanger", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertDangerFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsAlertDanger", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertDangerFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapAlertInfo", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertInfoFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsAlertInfo", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertInfoFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapAlertSuccess", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertSuccessFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsAlertSuccess", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertSuccessFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapAlertWarning", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertWarningFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsAlertWarning", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertWarningFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapAlertDark", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertDarkFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsAlertDark", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertDarkFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapAlertLight", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertLightFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsAlertLight", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertLightFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapAlertLink", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertLinkFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsAlertLink", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertLinkFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapAlertSecondary", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertSecondaryFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsAlertSecondary", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertSecondaryFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctionsWithBootstrap3(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);
        $obj->setVersion(3);

        $res = $obj->getFunctions();
        $this->assertCount(8, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapAlertDanger", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertDangerFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsAlertDanger", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertDangerFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapAlertInfo", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertInfoFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsAlertInfo", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertInfoFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapAlertSuccess", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertSuccessFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsAlertSuccess", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertSuccessFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapAlertWarning", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertWarningFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsAlertWarning", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapAlertWarningFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.component.alert", AlertTwigExtension::SERVICE_NAME);

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
