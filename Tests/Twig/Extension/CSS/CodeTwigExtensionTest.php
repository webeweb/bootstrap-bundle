<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS;

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\CodeTwigExtension;

/**
 * Code Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 */
class CodeTwigExtensionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new CodeTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(5, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapBasicBlock", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapBasicBlockFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bootstrapInline", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapInlineFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("bootstrapSampleOutput", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapSampleOutputFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("bootstrapUserInput", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapUserInputFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("bootstrapVariable", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapVariableFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapBasicBlockFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapBasicBlockFunction() {

        $obj = new CodeTwigExtension();

        $arg0 = [];
        $res0 = "<pre></pre>";
        $this->assertEquals($res0, $obj->bootstrapBasicBlockFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<pre>content</pre>";
        $this->assertEquals($res9, $obj->bootstrapBasicBlockFunction($arg9));
    }

    /**
     * Tests the bootstrapInlineFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapInlineFunction() {

        $obj = new CodeTwigExtension();

        $arg0 = [];
        $res0 = "<code></code>";
        $this->assertEquals($res0, $obj->bootstrapInlineFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<code>content</code>";
        $this->assertEquals($res9, $obj->bootstrapInlineFunction($arg9));
    }

    /**
     * Tests the bootstrapSampleOutputFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapSampleOutputFunction() {

        $obj = new CodeTwigExtension();

        $arg0 = [];
        $res0 = "<samp></samp>";
        $this->assertEquals($res0, $obj->bootstrapSampleOutputFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<samp>content</samp>";
        $this->assertEquals($res9, $obj->bootstrapSampleOutputFunction($arg9));
    }

    /**
     * Tests the bootstrapUserInputFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapUserInputFunction() {

        $obj = new CodeTwigExtension();

        $arg0 = [];
        $res0 = "<kbd></kbd>";
        $this->assertEquals($res0, $obj->bootstrapUserInputFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<kbd>content</kbd>";
        $this->assertEquals($res9, $obj->bootstrapUserInputFunction($arg9));
    }

    /**
     * Tests the bootstrapVariableFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapVariableFunction() {

        $obj = new CodeTwigExtension();

        $arg0 = [];
        $res0 = "<var></var>";
        $this->assertEquals($res0, $obj->bootstrapVariableFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<var>content</var>";
        $this->assertEquals($res9, $obj->bootstrapVariableFunction($arg9));
    }

}
