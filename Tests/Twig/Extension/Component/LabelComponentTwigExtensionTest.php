<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\LabelComponentTwigExtension;

/**
 * Label component Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 * @final
 */
final class LabelComponentTwigExtensionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the getFunctions() method.
	 *
	 * @return void
	 */
	public function testGetFunctions() {

		$obj = new LabelComponentTwigExtension();

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

		$obj = new LabelComponentTwigExtension();

		$arg0	 = [];
		$res0	 = '<span class="label label-danger">&nbsp;</span>';
		$this->assertEquals($res0, $obj->bootstrapLabelDangerFunction($arg0));

		$arg1	 = ["content" => "content"];
		$res1	 = '<span class="label label-danger">content</span>';
		$this->assertEquals($res1, $obj->bootstrapLabelDangerFunction($arg1));
	}

	/**
	 * Tests the bootstrapLabelDefaultFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testBootstrapLabelDefaultFunction() {

		$obj = new LabelComponentTwigExtension();

		$arg = [];
		$res = '<span class="label label-default">&nbsp;</span>';
		$this->assertEquals($res, $obj->bootstrapLabelDefaultFunction($arg));
	}

	/**
	 * Tests the bootstrapLabelInfoFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testBootstrapLabelInfoFunction() {

		$obj = new LabelComponentTwigExtension();

		$arg = [];
		$res = '<span class="label label-info">&nbsp;</span>';
		$this->assertEquals($res, $obj->bootstrapLabelInfoFunction($arg));
	}

	/**
	 * Tests the bootstrapLabelPrimaryFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testBootstrapLabelPrimaryFunction() {

		$obj = new LabelComponentTwigExtension();

		$arg = [];
		$res = '<span class="label label-primary">&nbsp;</span>';
		$this->assertEquals($res, $obj->bootstrapLabelPrimaryFunction($arg));
	}

	/**
	 * Tests the bootstrapLabelSuccessFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testBootstrapLabelSuccessFunction() {

		$obj = new LabelComponentTwigExtension();

		$arg = [];
		$res = '<span class="label label-success">&nbsp;</span>';
		$this->assertEquals($res, $obj->bootstrapLabelSuccessFunction($arg));
	}

	/**
	 * Tests the bootstrapLabelWarningFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testBootstrapLabelWarningFunction() {

		$obj = new LabelComponentTwigExtension();

		$arg = [];
		$res = '<span class="label label-warning">&nbsp;</span>';
		$this->assertEquals($res, $obj->bootstrapLabelWarningFunction($arg));
	}

}