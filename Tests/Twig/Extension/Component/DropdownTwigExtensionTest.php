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

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\DropdownTwigExtension;

/**
 * Dropdown component Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Component
 */
class DropdownTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the bootstrapDropdownButtonFunction() method.
     *
     * @return void
     */
    public function testBootstrapDropdownButtonFunction() {

        $obj = new DropdownTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "id" => "id", "expanded" => false, "class" => "danger"];
        $res = '<button class="btn btn-danger dropdown-toggle" type="button" id="id" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">content<span class="caret"></span></button>';
        $this->assertEquals($res, $obj->bootstrapDropdownButtonFunction($arg));
    }

    /**
     * Tests the bootstrapDropdownButtonFunction() method.
     *
     * @return void
     */
    public function testBootstrapDropdownButtonFunctionWithClass() {

        $obj = new DropdownTwigExtension($this->twigEnvironment);

        $arg = ["class" => "primary"];
        $res = '<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="caret"></span></button>';
        $this->assertEquals($res, $obj->bootstrapDropdownButtonFunction($arg));
    }

    /**
     * Tests the bootstrapDropdownButtonFunction() method.
     *
     * @return void
     */
    public function testBootstrapDropdownButtonFunctionWithContent() {

        $obj = new DropdownTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">content<span class="caret"></span></button>';
        $this->assertEquals($res, $obj->bootstrapDropdownButtonFunction($arg));
    }

    /**
     * Tests the bootstrapDropdownButtonFunction() method.
     *
     * @return void
     */
    public function testBootstrapDropdownButtonFunctionWithExpanded() {

        $obj = new DropdownTwigExtension($this->twigEnvironment);

        $arg = ["expanded" => false];
        $res = '<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></button>';
        $this->assertEquals($res, $obj->bootstrapDropdownButtonFunction($arg));
    }

    /**
     * Tests the bootstrapDropdownButtonFunction() method.
     *
     * @return void
     */
    public function testBootstrapDropdownButtonFunctionWithId() {

        $obj = new DropdownTwigExtension($this->twigEnvironment);

        $arg = ["id" => "id"];
        $res = '<button class="btn btn-default dropdown-toggle" type="button" id="id" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="caret"></span></button>';
        $this->assertEquals($res, $obj->bootstrapDropdownButtonFunction($arg));
    }

    /**
     * Tests the bootstrapDropdownButtonFunction() method.
     *
     * @return void
     */
    public function testBootstrapDropdownButtonFunctionWithoutArguments() {

        $obj = new DropdownTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="caret"></span></button>';
        $this->assertEquals($res, $obj->bootstrapDropdownButtonFunction($arg));
    }

    /**
     * Tests the bootstrapDropdownDividerFunction() method.
     *
     * @return void
     */
    public function testBootstrapDropdownDividerFunction() {

        $obj = new DropdownTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<li class="divider" role="separator"></li>';
        $this->assertEquals($res, $obj->bootstrapDropdownDividerFunction($arg));
    }

    /**
     * Tests the bootstrapDropdownHeaderFunction() method.
     *
     * @return void
     */
    public function testBootstrapDropdownHeaderFunction() {

        $obj = new DropdownTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<li class="dropdown-header">content</li>';
        $this->assertEquals($res, $obj->bootstrapDropdownHeaderFunction($arg));
    }

    /**
     * Tests the bootstrapDropdownHeaderFunction() method.
     *
     * @return void
     */
    public function testBootstrapDropdownHeaderFunctionWithoutArguments() {

        $obj = new DropdownTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<li class="dropdown-header"></li>';
        $this->assertEquals($res, $obj->bootstrapDropdownHeaderFunction($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DropdownTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.bootstrap.twig.extension.component.dropdown", DropdownTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new DropdownTwigExtension($this->twigEnvironment);

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

}
