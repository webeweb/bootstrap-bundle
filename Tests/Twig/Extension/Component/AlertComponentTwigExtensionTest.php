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

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\AlertComponentTwigExtension;

/**
 * Alert component Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 * @final
 */
final class AlertComponentTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new AlertComponentTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(4, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals('bootstrapAlertDanger', $res[0]->getName());
        $this->assertEquals([$obj, 'bootstrapAlertDangerFunction'], $res[0]->getCallable());
        $this->assertEquals(['html'], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals('bootstrapAlertInfo', $res[1]->getName());
        $this->assertEquals([$obj, 'bootstrapAlertInfoFunction'], $res[1]->getCallable());
        $this->assertEquals(['html'], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals('bootstrapAlertSuccess', $res[2]->getName());
        $this->assertEquals([$obj, 'bootstrapAlertSuccessFunction'], $res[2]->getCallable());
        $this->assertEquals(['html'], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals('bootstrapAlertWarning', $res[3]->getName());
        $this->assertEquals([$obj, 'bootstrapAlertWarningFunction'], $res[3]->getCallable());
        $this->assertEquals(['html'], $res[3]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapAlertDangerFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapAlertDangerFunction() {

        $obj = new AlertComponentTwigExtension();

        $arg0 = [];
        $res0 = '<div class="alert alert-danger" role="alert"></div>';
        $this->assertEquals($res0, $obj->bootstrapAlertDangerFunction($arg0));

        $arg9 = ['content' => 'content'];
        $res9 = '<div class="alert alert-danger" role="alert">content</div>';
        $this->assertEquals($res9, $obj->bootstrapAlertDangerFunction($arg9));
    }

    /**
     * Tests the bootstrapAlertInfoFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapAlertInfoFunction() {

        $obj = new AlertComponentTwigExtension();

        $arg = [];
        $res = '<div class="alert alert-info" role="alert"></div>';
        $this->assertEquals($res, $obj->bootstrapAlertInfoFunction($arg));
    }

    /**
     * Tests the bootstrapAlertSuccessFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapAlertSuccessFunction() {

        $obj = new AlertComponentTwigExtension();

        $arg = [];
        $res = '<div class="alert alert-success" role="alert"></div>';
        $this->assertEquals($res, $obj->bootstrapAlertSuccessFunction($arg));
    }

    /**
     * Tests the bootstrapAlertWarningFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapAlertWarningFunction() {

        $obj = new AlertComponentTwigExtension();

        $arg = [];
        $res = '<div class="alert alert-warning" role="alert"></div>';
        $this->assertEquals($res, $obj->bootstrapAlertWarningFunction($arg));
    }

}
