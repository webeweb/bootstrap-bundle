<?php

/**
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
use WBW\Bundle\BootstrapBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\AlertTwigExtension;

/**
 * Alert Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class AlertTwigExtensionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(5, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapAlertDanger", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapAlertDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bootstrapAlertInfo", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapAlertInfoFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("bootstrapAlertLink", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapAlertLinkFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("bootstrapAlertSuccess", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapAlertSuccessFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("bootstrapAlertWarning", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapAlertWarningFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapAlertDangerFunction() method.
     *
     * @return void
     */
    public function testBootstrapAlertDangerFunction() {

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
    public function testBootstrapAlertDangerFunctionWithoutArguments() {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="alert alert-danger" role="alert"></div>';
        $this->assertEquals($res, $obj->bootstrapAlertDangerFunction($arg));
    }

    /**
     * Tests the bootstrapAlertInfoFunction() method.
     *
     * @return void
     */
    public function testBootstrapAlertInfoFunction() {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="alert alert-info" role="alert"></div>';
        $this->assertEquals($res, $obj->bootstrapAlertInfoFunction($arg));
    }

    /**
     * Tests the bootstrapAlertLinkFunction() method.
     *
     * @return void
     */
    public function testBootstrapAlertLinkFunction() {

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
    public function testBootstrapAlertLinkFunctionWithContent() {

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
    public function testBootstrapAlertLinkFunctionWithHref() {

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
    public function testBootstrapAlertLinkFunctionWithoutArguments() {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<a href="javascript:void(0);"></a>';
        $this->assertEquals($res, $obj->bootstrapAlertLinkFunction($arg));
    }

    /**
     * Tests the bootstrapAlertSuccessFunction() method.
     *
     * @return void
     */
    public function testBootstrapAlertSuccessFunction() {

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
    public function testBootstrapAlertWarningFunction() {

        $obj = new AlertTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="alert alert-warning" role="alert"></div>';
        $this->assertEquals($res, $obj->bootstrapAlertWarningFunction($arg));
    }

}
