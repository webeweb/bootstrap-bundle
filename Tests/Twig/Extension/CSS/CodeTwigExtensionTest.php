<?php

/*
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
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\CodeTwigExtension;

/**
 * Code Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 */
class CodeTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the bootstrapBasicBlockFunction() method.
     *
     * @return void
     */
    public function testBootstrapBasicBlockFunction() {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<pre>content</pre>";
        $this->assertEquals($res, $obj->bootstrapBasicBlockFunction($arg));
    }

    /**
     * Tests the bootstrapBasicBlockFunction() method.
     *
     * @return void
     */
    public function testBootstrapBasicBlockFunctionWithoutArguments() {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<pre></pre>";
        $this->assertEquals($res, $obj->bootstrapBasicBlockFunction($arg));
    }

    /**
     * Tests the bootstrapInlineFunction() method.
     *
     * @return void
     */
    public function testBootstrapInlineFunction() {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<code>content</code>";
        $this->assertEquals($res, $obj->bootstrapInlineFunction($arg));
    }

    /**
     * Tests the bootstrapInlineFunction() method.
     *
     * @return void
     */
    public function testBootstrapInlineFunctionWithoutArguments() {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<code></code>";
        $this->assertEquals($res, $obj->bootstrapInlineFunction($arg));
    }

    /**
     * Tests the bootstrapSampleOutputFunction() method.
     *
     * @return void
     */
    public function testBootstrapSampleOutputFunction() {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<samp>content</samp>";
        $this->assertEquals($res, $obj->bootstrapSampleOutputFunction($arg));
    }

    /**
     * Tests the bootstrapSampleOutputFunction() method.
     *
     * @return void
     */
    public function testBootstrapSampleOutputFunctionWithoutArguments() {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<samp></samp>";
        $this->assertEquals($res, $obj->bootstrapSampleOutputFunction($arg));
    }

    /**
     * Tests the bootstrapUserInputFunction() method.
     *
     * @return void
     */
    public function testBootstrapUserInputFunction() {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<kbd>content</kbd>";
        $this->assertEquals($res, $obj->bootstrapUserInputFunction($arg));
    }

    /**
     * Tests the bootstrapUserInputFunction() method.
     *
     * @return void
     */
    public function testBootstrapUserInputFunctionWithoutArguments() {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<kbd></kbd>";
        $this->assertEquals($res, $obj->bootstrapUserInputFunction($arg));
    }

    /**
     * Tests the bootstrapVariableFunction() method.
     *
     * @return void
     */
    public function testBootstrapVariableFunction() {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<var>content</var>";
        $this->assertEquals($res, $obj->bootstrapVariableFunction($arg));
    }

    /**
     * Tests the bootstrapVariableFunction() method.
     *
     * @return void
     */
    public function testBootstrapVariableFunctionWithoutArguments() {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<var></var>";
        $this->assertEquals($res, $obj->bootstrapVariableFunction($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.bootstrap.twig.extension.css.code", CodeTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(10, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapBasicBlock", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapBasicBlockFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bsBasicBlock", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapBasicBlockFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("bootstrapInline", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapInlineFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("bsInline", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapInlineFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("bootstrapSampleOutput", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapSampleOutputFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
        $this->assertEquals("bsSampleOutput", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapSampleOutputFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[6]);
        $this->assertEquals("bootstrapUserInput", $res[6]->getName());
        $this->assertEquals([$obj, "bootstrapUserInputFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[7]);
        $this->assertEquals("bsUserInput", $res[7]->getName());
        $this->assertEquals([$obj, "bootstrapUserInputFunction"], $res[7]->getCallable());
        $this->assertEquals(["html"], $res[7]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[8]);
        $this->assertEquals("bootstrapVariable", $res[8]->getName());
        $this->assertEquals([$obj, "bootstrapVariableFunction"], $res[8]->getCallable());
        $this->assertEquals(["html"], $res[8]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[9]);
        $this->assertEquals("bsVariable", $res[9]->getName());
        $this->assertEquals([$obj, "bootstrapVariableFunction"], $res[9]->getCallable());
        $this->assertEquals(["html"], $res[9]->getSafe(new Twig_Node()));
    }
}
