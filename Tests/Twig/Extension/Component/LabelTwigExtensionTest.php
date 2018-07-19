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
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\LabelTwigExtension;

/**
 * Label Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 * @final
 */
final class LabelTwigExtensionTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new LabelTwigExtension();

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

    /**
     * Tests the bootstrapLabelDangerFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapLabelDangerFunction() {

        $obj = new LabelTwigExtension();

        $arg0 = [];
        $res0 = '<span class="label label-danger"></span>';
        $this->assertEquals($res0, $obj->bootstrapLabelDangerFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = '<span class="label label-danger">content</span>';
        $this->assertEquals($res9, $obj->bootstrapLabelDangerFunction($arg9));
    }

    /**
     * Tests the bootstrapLabelDefaultFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapLabelDefaultFunction() {

        $obj = new LabelTwigExtension();

        $arg = [];
        $res = '<span class="label label-default"></span>';
        $this->assertEquals($res, $obj->bootstrapLabelDefaultFunction($arg));
    }

    /**
     * Tests the bootstrapLabelInfoFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapLabelInfoFunction() {

        $obj = new LabelTwigExtension();

        $arg = [];
        $res = '<span class="label label-info"></span>';
        $this->assertEquals($res, $obj->bootstrapLabelInfoFunction($arg));
    }

    /**
     * Tests the bootstrapLabelPrimaryFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapLabelPrimaryFunction() {

        $obj = new LabelTwigExtension();

        $arg = [];
        $res = '<span class="label label-primary"></span>';
        $this->assertEquals($res, $obj->bootstrapLabelPrimaryFunction($arg));
    }

    /**
     * Tests the bootstrapLabelSuccessFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapLabelSuccessFunction() {

        $obj = new LabelTwigExtension();

        $arg = [];
        $res = '<span class="label label-success"></span>';
        $this->assertEquals($res, $obj->bootstrapLabelSuccessFunction($arg));
    }

    /**
     * Tests the bootstrapLabelWarningFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapLabelWarningFunction() {

        $obj = new LabelTwigExtension();

        $arg = [];
        $res = '<span class="label label-warning"></span>';
        $this->assertEquals($res, $obj->bootstrapLabelWarningFunction($arg));
    }

}
