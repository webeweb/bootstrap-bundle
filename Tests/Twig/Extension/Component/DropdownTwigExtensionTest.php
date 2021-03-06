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
    public function testBootstrapDropdownButtonFunction(): void {

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
    public function testBootstrapDropdownButtonFunctionWithClass(): void {

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
    public function testBootstrapDropdownButtonFunctionWithContent(): void {

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
    public function testBootstrapDropdownButtonFunctionWithExpanded(): void {

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
    public function testBootstrapDropdownButtonFunctionWithId(): void {

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
    public function testBootstrapDropdownButtonFunctionWithoutArguments(): void {

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
    public function testBootstrapDropdownDividerFunction(): void {

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
    public function testBootstrapDropdownHeaderFunction(): void {

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
    public function testBootstrapDropdownHeaderFunctionWithoutArguments(): void {

        $obj = new DropdownTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<li class="dropdown-header"></li>';
        $this->assertEquals($res, $obj->bootstrapDropdownHeaderFunction($arg));
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new DropdownTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new DropdownTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(6, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("bootstrapDropdownButton", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapDropdownButtonFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("bsDropdownButton", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapDropdownButtonFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("bootstrapDropdownDivider", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapDropdownDividerFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("bsDropdownDivider", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapDropdownDividerFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("bootstrapDropdownHeader", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapDropdownHeaderFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[5]);
        $this->assertEquals("bsDropdownHeader", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapDropdownHeaderFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Node()));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.component.dropdown", DropdownTwigExtension::SERVICE_NAME);

        $obj = new DropdownTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
