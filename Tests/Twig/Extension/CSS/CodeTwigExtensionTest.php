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

use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\CodeTwigExtension;

/**
 * Code Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 */
class CodeTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests bootstrapBasicBlockFunction()
     *
     * @return void
     */
    public function testBootstrapBasicBlockFunction(): void {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<pre>content</pre>";

        $this->assertEquals($res, $obj->bootstrapBasicBlockFunction($arg));
    }

    /**
     * Tests bootstrapBasicBlockFunction()
     *
     * @return void
     */
    public function testBootstrapBasicBlockFunctionWithoutArguments(): void {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<pre></pre>";

        $this->assertEquals($res, $obj->bootstrapBasicBlockFunction($arg));
    }

    /**
     * Tests bootstrapInlineFunction()
     *
     * @return void
     */
    public function testBootstrapInlineFunction(): void {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<code>content</code>";

        $this->assertEquals($res, $obj->bootstrapInlineFunction($arg));
    }

    /**
     * Tests bootstrapInlineFunction()
     *
     * @return void
     */
    public function testBootstrapInlineFunctionWithoutArguments(): void {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<code></code>";

        $this->assertEquals($res, $obj->bootstrapInlineFunction($arg));
    }

    /**
     * Tests bootstrapSampleOutputFunction()
     *
     * @return void
     */
    public function testBootstrapSampleOutputFunction(): void {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<samp>content</samp>";

        $this->assertEquals($res, $obj->bootstrapSampleOutputFunction($arg));
    }

    /**
     * Tests bootstrapSampleOutputFunction()
     *
     * @return void
     */
    public function testBootstrapSampleOutputFunctionWithoutArguments(): void {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<samp></samp>";

        $this->assertEquals($res, $obj->bootstrapSampleOutputFunction($arg));
    }

    /**
     * Tests bootstrapUserInputFunction()
     *
     * @return void
     */
    public function testBootstrapUserInputFunction(): void {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<kbd>content</kbd>";

        $this->assertEquals($res, $obj->bootstrapUserInputFunction($arg));
    }

    /**
     * Tests bootstrapUserInputFunction()
     *
     * @return void
     */
    public function testBootstrapUserInputFunctionWithoutArguments(): void {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<kbd></kbd>";

        $this->assertEquals($res, $obj->bootstrapUserInputFunction($arg));
    }

    /**
     * Tests bootstrapVariableFunction()
     *
     * @return void
     */
    public function testBootstrapVariableFunction(): void {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<var>content</var>";

        $this->assertEquals($res, $obj->bootstrapVariableFunction($arg));
    }

    /**
     * Tests bootstrapVariableFunction()
     *
     * @return void
     */
    public function testBootstrapVariableFunctionWithoutArguments(): void {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<var></var>";

        $this->assertEquals($res, $obj->bootstrapVariableFunction($arg));
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(10, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapBasicBlock", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBasicBlockFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsBasicBlock", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBasicBlockFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapInline", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapInlineFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsInline", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapInlineFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapSampleOutput", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapSampleOutputFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsSampleOutput", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapSampleOutputFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapUserInput", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapUserInputFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsUserInput", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapUserInputFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapVariable", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapVariableFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsVariable", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapVariableFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.css.code", CodeTwigExtension::SERVICE_NAME);

        $obj = new CodeTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
