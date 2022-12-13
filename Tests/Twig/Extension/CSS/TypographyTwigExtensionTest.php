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

use Twig\Extension\ExtensionInterface;
use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\TypographyTwigExtension;

/**
 * Typography Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 */
class TypographyTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests bootstrapBoldFunction()
     *
     * @return void
     */
    public function testBootstrapBoldFunction(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<strong>content</strong>";

        $this->assertEquals($res, $obj->bootstrapBoldFunction($arg));
    }

    /**
     * Tests bootstrapBoldFunction()
     *
     * @return void
     */
    public function testBootstrapBoldFunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<strong></strong>";

        $this->assertEquals($res, $obj->bootstrapBoldFunction($arg));
    }

    /**
     * Tests bootstrapDeletedFunction()
     *
     * @return void
     */
    public function testBootstrapDeletedFunction(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<del>content</del>";

        $this->assertEquals($res, $obj->bootstrapDeletedFunction($arg));
    }

    /**
     * Tests bootstrapDeletedFunction()
     *
     * @return void
     */
    public function testBootstrapDeletedFunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<del></del>";

        $this->assertEquals($res, $obj->bootstrapDeletedFunction($arg));
    }

    /**
     * Tests bootstrapItalicFunction()
     *
     * @return void
     */
    public function testBootstrapEmFunction(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<em>content</em>";

        $this->assertEquals($res, $obj->bootstrapItalicFunction($arg));
    }

    /**
     * Tests bootstrapItalicFunction()
     *
     * @return void
     */
    public function testBootstrapEmFunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<em></em>";

        $this->assertEquals($res, $obj->bootstrapItalicFunction($arg));
    }

    /**
     * Tests bootstrapHeading1Function()
     *
     * @return void
     */
    public function testBootstrapHeading1Function(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "description" => "description", "class" => "class"];
        $res = '<h1 class="class">content <small>description</small></h1>';

        $this->assertEquals($res, $obj->bootstrapHeading1Function($arg));
    }

    /**
     * Tests bootstrapHeading1Function()
     *
     * @return void
     */
    public function testBootstrapHeading1FunctionWithClass(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["class" => "class"];
        $res = '<h1 class="class"></h1>';

        $this->assertEquals($res, $obj->bootstrapHeading1Function($arg));
    }

    /**
     * Tests bootstrapHeading1Function()
     *
     * @return void
     */
    public function testBootstrapHeading1FunctionWithContent(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<h1>content</h1>";

        $this->assertEquals($res, $obj->bootstrapHeading1Function($arg));
    }

    /**
     * Tests bootstrapHeading1Function()
     *
     * @return void
     */
    public function testBootstrapHeading1FunctionWithDescription(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["description" => "description"];
        $res = "<h1><small>description</small></h1>";

        $this->assertEquals($res, $obj->bootstrapHeading1Function($arg));
    }

    /**
     * Tests bootstrapHeading1Function()
     *
     * @return void
     */
    public function testBootstrapHeading1FunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<h1></h1>";

        $this->assertEquals($res, $obj->bootstrapHeading1Function($arg));
    }

    /**
     * Tests bootstrapHeading2Function()
     *
     * @return void
     */
    public function testBootstrapHeading2Function(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "description" => "description", "class" => "class"];
        $res = '<h2 class="class">content <small>description</small></h2>';

        $this->assertEquals($res, $obj->bootstrapHeading2Function($arg));
    }

    /**
     * Tests bootstrapHeading2Function()
     *
     * @return void
     */
    public function testBootstrapHeading2FunctionWithClass(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["class" => "class"];
        $res = '<h2 class="class"></h2>';

        $this->assertEquals($res, $obj->bootstrapHeading2Function($arg));
    }

    /**
     * Tests bootstrapHeading2Function()
     *
     * @return void
     */
    public function testBootstrapHeading2FunctionWithContent(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<h2>content</h2>";

        $this->assertEquals($res, $obj->bootstrapHeading2Function($arg));
    }

    /**
     * Tests bootstrapHeading2Function()
     *
     * @return void
     */
    public function testBootstrapHeading2FunctionWithDescription(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["description" => "description"];
        $res = "<h2><small>description</small></h2>";

        $this->assertEquals($res, $obj->bootstrapHeading2Function($arg));
    }

    /**
     * Tests bootstrapHeading2Function()
     *
     * @return void
     */
    public function testBootstrapHeading2FunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<h2></h2>";

        $this->assertEquals($res, $obj->bootstrapHeading2Function($arg));
    }

    /**
     * Tests bootstrapHeading3Function()
     *
     * @return void
     */
    public function testBootstrapHeading3Function(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "description" => "description", "class" => "class"];
        $res = '<h3 class="class">content <small>description</small></h3>';

        $this->assertEquals($res, $obj->bootstrapHeading3Function($arg));
    }

    /**
     * Tests bootstrapHeading3Function()
     *
     * @return void
     */
    public function testBootstrapHeading3FunctionWithClass(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["class" => "class"];
        $res = '<h3 class="class"></h3>';

        $this->assertEquals($res, $obj->bootstrapHeading3Function($arg));
    }

    /**
     * Tests bootstrapHeading3Function()
     *
     * @return void
     */
    public function testBootstrapHeading3FunctionWithContent(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<h3>content</h3>";

        $this->assertEquals($res, $obj->bootstrapHeading3Function($arg));
    }

    /**
     * Tests bootstrapHeading3Function()
     *
     * @return void
     */
    public function testBootstrapHeading3FunctionWithDescription(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["description" => "description"];
        $res = "<h3><small>description</small></h3>";

        $this->assertEquals($res, $obj->bootstrapHeading3Function($arg));
    }

    /**
     * Tests bootstrapHeading3Function()
     *
     * @return void
     */
    public function testBootstrapHeading3FunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<h3></h3>";

        $this->assertEquals($res, $obj->bootstrapHeading3Function($arg));
    }

    /**
     * Tests bootstrapHeading4Function()
     *
     * @return void
     */
    public function testBootstrapHeading4Function(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "description" => "description", "class" => "class"];
        $res = '<h4 class="class">content <small>description</small></h4>';

        $this->assertEquals($res, $obj->bootstrapHeading4Function($arg));
    }

    /**
     * Tests bootstrapHeading4Function()
     *
     * @return void
     */
    public function testBootstrapHeading4FunctionWithClass(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["class" => "class"];
        $res = '<h4 class="class"></h4>';

        $this->assertEquals($res, $obj->bootstrapHeading4Function($arg));
    }

    /**
     * Tests bootstrapHeading4Function()
     *
     * @return void
     */
    public function testBootstrapHeading4FunctionWithContent(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<h4>content</h4>";

        $this->assertEquals($res, $obj->bootstrapHeading4Function($arg));
    }

    /**
     * Tests bootstrapHeading4Function()
     *
     * @return void
     */
    public function testBootstrapHeading4FunctionWithDescription(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["description" => "description"];
        $res = "<h4><small>description</small></h4>";

        $this->assertEquals($res, $obj->bootstrapHeading4Function($arg));
    }

    /**
     * Tests bootstrapHeading4Function()
     *
     * @return void
     */
    public function testBootstrapHeading4FunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<h4></h4>";

        $this->assertEquals($res, $obj->bootstrapHeading4Function($arg));
    }

    /**
     * Tests bootstrapHeading5Function()
     *
     * @return void
     */
    public function testBootstrapHeading5Function(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "description" => "description", "class" => "class"];
        $res = '<h5 class="class">content <small>description</small></h5>';

        $this->assertEquals($res, $obj->bootstrapHeading5Function($arg));
    }

    /**
     * Tests bootstrapHeading5Function()
     *
     * @return void
     */
    public function testBootstrapHeading5FunctionWithClass(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["class" => "class"];
        $res = '<h5 class="class"></h5>';

        $this->assertEquals($res, $obj->bootstrapHeading5Function($arg));
    }

    /**
     * Tests bootstrapHeading5Function()
     *
     * @return void
     */
    public function testBootstrapHeading5FunctionWithContent(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<h5>content</h5>";

        $this->assertEquals($res, $obj->bootstrapHeading5Function($arg));
    }

    /**
     * Tests bootstrapHeading5Function()
     *
     * @return void
     */
    public function testBootstrapHeading5FunctionWithDescription(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["description" => "description"];
        $res = "<h5><small>description</small></h5>";

        $this->assertEquals($res, $obj->bootstrapHeading5Function($arg));
    }

    /**
     * Tests bootstrapHeading5Function()
     *
     * @return void
     */
    public function testBootstrapHeading5FunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<h5></h5>";

        $this->assertEquals($res, $obj->bootstrapHeading5Function($arg));
    }

    /**
     * Tests bootstrapHeading6Function()
     *
     * @return void
     */
    public function testBootstrapHeading6Function(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "description" => "description", "class" => "class"];
        $res = '<h6 class="class">content <small>description</small></h6>';

        $this->assertEquals($res, $obj->bootstrapHeading6Function($arg));
    }

    /**
     * Tests bootstrapHeading6Function()
     *
     * @return void
     */
    public function testBootstrapHeading6FunctionWithClass(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["class" => "class"];
        $res = '<h6 class="class"></h6>';

        $this->assertEquals($res, $obj->bootstrapHeading6Function($arg));
    }

    /**
     * Tests bootstrapHeading6Function()
     *
     * @return void
     */
    public function testBootstrapHeading6FunctionWithContent(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<h6>content</h6>";

        $this->assertEquals($res, $obj->bootstrapHeading6Function($arg));
    }

    /**
     * Tests bootstrapHeading6Function()
     *
     * @return void
     */
    public function testBootstrapHeading6FunctionWithDescription(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["description" => "description"];
        $res = "<h6><small>description</small></h6>";

        $this->assertEquals($res, $obj->bootstrapHeading6Function($arg));
    }

    /**
     * Tests bootstrapHeading6Function()
     *
     * @return void
     */
    public function testBootstrapHeading6FunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<h6></h6>";

        $this->assertEquals($res, $obj->bootstrapHeading6Function($arg));
    }

    /**
     * Tests bootstrapInsertedFunction()
     *
     * @return void
     */
    public function testBootstrapInsFunction(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<ins>content</ins>";

        $this->assertEquals($res, $obj->bootstrapInsertedFunction($arg));
    }

    /**
     * Tests bootstrapInsertedFunction()
     *
     * @return void
     */
    public function testBootstrapInsFunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<ins></ins>";

        $this->assertEquals($res, $obj->bootstrapInsertedFunction($arg));
    }

    /**
     * Tests bootstrapMarkedFunction()
     *
     * @return void
     */
    public function testBootstrapMarkedFunction(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<mark>content</mark>";

        $this->assertEquals($res, $obj->bootstrapMarkedFunction($arg));
    }

    /**
     * Tests bootstrapMarkedFunction()
     *
     * @return void
     */
    public function testBootstrapMarkedFunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<mark></mark>";

        $this->assertEquals($res, $obj->bootstrapMarkedFunction($arg));
    }

    /**
     * Tests bootstrapSmallFunction()
     *
     * @return void
     */
    public function testBootstrapSmallFunction(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<small>content</small>";

        $this->assertEquals($res, $obj->bootstrapSmallFunction($arg));
    }

    /**
     * Tests bootstrapSmallFunction()
     *
     * @return void
     */
    public function testBootstrapSmallFunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<small></small>";

        $this->assertEquals($res, $obj->bootstrapSmallFunction($arg));
    }

    /**
     * Tests bootstrapStrikethroughFunction()
     *
     * @return void
     */
    public function testBootstrapStrikethroughFunction(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<s>content</s>";

        $this->assertEquals($res, $obj->bootstrapStrikethroughFunction($arg));
    }

    /**
     * Tests bootstrapStrikethroughFunction()
     *
     * @return void
     */
    public function testBootstrapStrikethroughFunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<s></s>";

        $this->assertEquals($res, $obj->bootstrapStrikethroughFunction($arg));
    }

    /**
     * Tests bootstrapUnderlinedFunction()
     *
     * @return void
     */
    public function testBootstrapUnderlinedFunction(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = "<u>content</u>";

        $this->assertEquals($res, $obj->bootstrapUnderlinedFunction($arg));
    }

    /**
     * Tests bootstrapUnderlinedFunction()
     *
     * @return void
     */
    public function testBootstrapUnderlinedFunctionWithoutArguments(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<u></u>";

        $this->assertEquals($res, $obj->bootstrapUnderlinedFunction($arg));
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(28, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapBold", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBoldFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsBold", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapBoldFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapDeleted", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapDeletedFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsDeleted", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapDeletedFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapHeading1", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapHeading1Function"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsHeading1", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapHeading1Function"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapHeading2", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapHeading2Function"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsHeading2", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapHeading2Function"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapHeading3", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapHeading3Function"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsHeading3", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapHeading3Function"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapHeading4", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapHeading4Function"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsHeading4", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapHeading4Function"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapHeading5", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapHeading5Function"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsHeading5", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapHeading5Function"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapHeading6", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapHeading6Function"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsHeading6", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapHeading6Function"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapInserted", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapInsertedFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsInserted", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapInsertedFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapItalic", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapItalicFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsItalic", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapItalicFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapMarked", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapMarkedFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsMarked", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapMarkedFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapSmall", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapSmallFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsSmall", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapSmallFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapStrikethrough", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapStrikethroughFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsStrikethrough", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapStrikethroughFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapUnderlined", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapUnderlinedFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsUnderlined", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapUnderlinedFunction"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.css.typography", TypographyTwigExtension::SERVICE_NAME);

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $this->assertInstanceOf(ExtensionInterface::class, $obj);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
