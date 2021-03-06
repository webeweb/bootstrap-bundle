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
     * Tests the bootstrapAlertDangerFunction() method.
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
     * Tests the bootstrapAlertDangerFunction() method.
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
     * Tests the bootstrapAlertDarkFunction() method.
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
     * Tests the bootstrapAlertDarkFunction() method.
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
     * Tests the bootstrapAlertInfoFunction() method.
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
     * Tests the bootstrapAlertInfoFunction() method.
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
     * Tests the bootstrapAlertLightFunction() method.
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
     * Tests the bootstrapAlertLightFunction() method.
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
     * Tests the bootstrapAlertLinkFunction() method.
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
     * Tests the bootstrapAlertLinkFunction() method.
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
     * Tests the bootstrapAlertLinkFunction() method.
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
     * Tests the bootstrapAlertLinkFunction() method.
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
     * Tests the bootstrapAlertSecondaryFunction() method.
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
     * Tests the bootstrapAlertSecondaryFunction() method.
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
     * Tests the bootstrapAlertSuccessFunction() method.
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
     * Tests the bootstrapAlertSuccessFunction() method.
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
     * Tests the bootstrapAlertWarningFunction() method.
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
     * Tests the bootstrapAlertWarningFunction() method.
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
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(16, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("bootstrapAlertDanger", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapAlertDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("bsAlertDanger", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapAlertDangerFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("bootstrapAlertInfo", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapAlertInfoFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("bsAlertInfo", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapAlertInfoFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("bootstrapAlertSuccess", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapAlertSuccessFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[5]);
        $this->assertEquals("bsAlertSuccess", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapAlertSuccessFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[6]);
        $this->assertEquals("bootstrapAlertWarning", $res[6]->getName());
        $this->assertEquals([$obj, "bootstrapAlertWarningFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[7]);
        $this->assertEquals("bsAlertWarning", $res[7]->getName());
        $this->assertEquals([$obj, "bootstrapAlertWarningFunction"], $res[7]->getCallable());
        $this->assertEquals(["html"], $res[7]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[8]);
        $this->assertEquals("bootstrapAlertDark", $res[8]->getName());
        $this->assertEquals([$obj, "bootstrapAlertDarkFunction"], $res[8]->getCallable());
        $this->assertEquals(["html"], $res[8]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[9]);
        $this->assertEquals("bsAlertDark", $res[9]->getName());
        $this->assertEquals([$obj, "bootstrapAlertDarkFunction"], $res[9]->getCallable());
        $this->assertEquals(["html"], $res[9]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[10]);
        $this->assertEquals("bootstrapAlertLight", $res[10]->getName());
        $this->assertEquals([$obj, "bootstrapAlertLightFunction"], $res[10]->getCallable());
        $this->assertEquals(["html"], $res[10]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[11]);
        $this->assertEquals("bsAlertLight", $res[11]->getName());
        $this->assertEquals([$obj, "bootstrapAlertLightFunction"], $res[11]->getCallable());
        $this->assertEquals(["html"], $res[11]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[12]);
        $this->assertEquals("bootstrapAlertLink", $res[12]->getName());
        $this->assertEquals([$obj, "bootstrapAlertLinkFunction"], $res[12]->getCallable());
        $this->assertEquals(["html"], $res[12]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[13]);
        $this->assertEquals("bsAlertLink", $res[13]->getName());
        $this->assertEquals([$obj, "bootstrapAlertLinkFunction"], $res[13]->getCallable());
        $this->assertEquals(["html"], $res[13]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[14]);
        $this->assertEquals("bootstrapAlertSecondary", $res[14]->getName());
        $this->assertEquals([$obj, "bootstrapAlertSecondaryFunction"], $res[14]->getCallable());
        $this->assertEquals(["html"], $res[14]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[15]);
        $this->assertEquals("bsAlertSecondary", $res[15]->getName());
        $this->assertEquals([$obj, "bootstrapAlertSecondaryFunction"], $res[15]->getCallable());
        $this->assertEquals(["html"], $res[15]->getSafe(new Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctionsWithBootstrap3(): void {

        $obj = new AlertTwigExtension($this->twigEnvironment);
        $obj->setVersion(3);

        $res = $obj->getFunctions();
        $this->assertCount(8, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("bootstrapAlertDanger", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapAlertDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("bsAlertDanger", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapAlertDangerFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("bootstrapAlertInfo", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapAlertInfoFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("bsAlertInfo", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapAlertInfoFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("bootstrapAlertSuccess", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapAlertSuccessFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[5]);
        $this->assertEquals("bsAlertSuccess", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapAlertSuccessFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[6]);
        $this->assertEquals("bootstrapAlertWarning", $res[6]->getName());
        $this->assertEquals([$obj, "bootstrapAlertWarningFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[7]);
        $this->assertEquals("bsAlertWarning", $res[7]->getName());
        $this->assertEquals([$obj, "bootstrapAlertWarningFunction"], $res[7]->getCallable());
        $this->assertEquals(["html"], $res[7]->getSafe(new Node()));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.component.alert", AlertTwigExtension::SERVICE_NAME);

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
