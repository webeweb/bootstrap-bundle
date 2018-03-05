<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Code;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Code\VariableCodeTwigExtension;

/**
 * Variable code Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Code
 * @final
 */
final class VariableCodeTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new VariableCodeTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapVariable", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapVariableFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapVariableFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapVariableFunction() {

        $obj = new VariableCodeTwigExtension();

        $arg0 = [];
        $res0 = "<var></var>";
        $this->assertEquals($res0, $obj->bootstrapVariableFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<var>content</var>";
        $this->assertEquals($res9, $obj->bootstrapVariableFunction($arg9));
    }

}
