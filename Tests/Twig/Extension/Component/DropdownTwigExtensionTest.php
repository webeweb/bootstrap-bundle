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
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\DropdownTwigExtension;

/**
 * Dropdown component Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 * @final
 */
final class DropdownTwigExtensionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new DropdownTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(3, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapDropdownButton", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapDropdownButtonFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bootstrapDropdownDivider", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapDropdownDividerFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("bootstrapDropdownHeader", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapDropdownHeaderFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapDropdownButtonFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapDropdownButtonFunction() {

        $obj = new DropdownTwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="caret"></span></button>';
        $this->assertEquals($res0, $obj->bootstrapDropdownButtonFunction($arg0));

        $arg1 = ["content" => "content"];
        $res1 = '<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">content<span class="caret"></span></button>';
        $this->assertEquals($res1, $obj->bootstrapDropdownButtonFunction($arg1));

        $arg2 = ["id" => "id"];
        $res2 = '<button class="btn btn-default dropdown-toggle" type="button" id="id" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="caret"></span></button>';
        $this->assertEquals($res2, $obj->bootstrapDropdownButtonFunction($arg2));

        $arg3 = ["expanded" => false];
        $res3 = '<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>';
        $this->assertEquals($res3, $obj->bootstrapDropdownButtonFunction($arg3));

        $arg4 = ["class" => "primary"];
        $res4 = '<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="caret"></span></button>';
        $this->assertEquals($res4, $obj->bootstrapDropdownButtonFunction($arg4));

        $arg9 = ["content" => "content", "id" => "id", "expanded" => false, "class" => "danger"];
        $res9 = '<button class="btn btn-danger dropdown-toggle" type="button" id="id" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">content<span class="caret"></span></button>';
        $this->assertEquals($res9, $obj->bootstrapDropdownButtonFunction($arg9));
    }

    /**
     * Tests the bootstrapDropdownDividerFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapDropdownDividerFunction() {

        $obj = new DropdownTwigExtension();

        $arg = [];
        $res = '<li class="divider" role="separator"></li>';
        $this->assertEquals($res, $obj->bootstrapDropdownDividerFunction($arg));
    }

    /**
     * Tests the bootstrapDropdownHeaderFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapDropdownHeaderFunction() {

        $obj = new DropdownTwigExtension();

        $arg0 = [];
        $res0 = '<li class="dropdown-header"></li>';
        $this->assertEquals($res0, $obj->bootstrapDropdownHeaderFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = '<li class="dropdown-header">content</li>';
        $this->assertEquals($res9, $obj->bootstrapDropdownHeaderFunction($arg9));
    }

}
