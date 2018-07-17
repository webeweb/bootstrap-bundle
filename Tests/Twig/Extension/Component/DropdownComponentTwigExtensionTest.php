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
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\DropdownComponentTwigExtension;

/**
 * Dropdown component Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 * @final
 */
final class DropdownComponentTwigExtensionTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new DropdownComponentTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(2, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapDropdownDivider", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapDropdownDividerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bootstrapDropdownHeader", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapDropdownHeaderFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapDropdownDividerFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapDropdownDividerFunction() {

        $obj = new DropdownComponentTwigExtension();

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

        $obj = new DropdownComponentTwigExtension();

        $arg0 = [];
        $res0 = '<li class="dropdown-header"></li>';
        $this->assertEquals($res0, $obj->bootstrapDropdownHeaderFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = '<li class="dropdown-header">content</li>';
        $this->assertEquals($res9, $obj->bootstrapDropdownHeaderFunction($arg9));
    }

}
