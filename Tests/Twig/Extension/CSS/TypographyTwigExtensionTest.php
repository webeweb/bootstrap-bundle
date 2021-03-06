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
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\TypographyTwigExtension;

/**
 * Typography Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 */
class TypographyTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the bootstrapBoldFunction() method.
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
     * Tests the bootstrapBoldFunction() method.
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
     * Tests the bootstrapDeletedFunction() method.
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
     * Tests the bootstrapDeletedFunction() method.
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
     * Tests the bootstrapItalicFunction() method.
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
     * Tests the bootstrapItalicFunction() method.
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
     * Tests the bootstrapHeading1Function() method.
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
     * Tests the bootstrapHeading1Function() method.
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
     * Tests the bootstrapHeading1Function() method.
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
     * Tests the bootstrapHeading1Function() method.
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
     * Tests the bootstrapHeading1Function() method.
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
     * Tests the bootstrapHeading2Function() method.
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
     * Tests the bootstrapHeading2Function() method.
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
     * Tests the bootstrapHeading2Function() method.
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
     * Tests the bootstrapHeading2Function() method.
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
     * Tests the bootstrapHeading2Function() method.
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
     * Tests the bootstrapHeading3Function() method.
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
     * Tests the bootstrapHeading3Function() method.
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
     * Tests the bootstrapHeading3Function() method.
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
     * Tests the bootstrapHeading3Function() method.
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
     * Tests the bootstrapHeading3Function() method.
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
     * Tests the bootstrapHeading4Function() method.
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
     * Tests the bootstrapHeading4Function() method.
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
     * Tests the bootstrapHeading4Function() method.
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
     * Tests the bootstrapHeading4Function() method.
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
     * Tests the bootstrapHeading4Function() method.
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
     * Tests the bootstrapHeading5Function() method.
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
     * Tests the bootstrapHeading5Function() method.
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
     * Tests the bootstrapHeading5Function() method.
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
     * Tests the bootstrapHeading5Function() method.
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
     * Tests the bootstrapHeading5Function() method.
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
     * Tests the bootstrapHeading6Function() method.
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
     * Tests the bootstrapHeading6Function() method.
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
     * Tests the bootstrapHeading6Function() method.
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
     * Tests the bootstrapHeading6Function() method.
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
     * Tests the bootstrapHeading6Function() method.
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
     * Tests the bootstrapInsertedFunction() method.
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
     * Tests the bootstrapInsertedFunction() method.
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
     * Tests the bootstrapMarkedFunction() method.
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
     * Tests the bootstrapMarkedFunction() method.
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
     * Tests the bootstrapSmallFunction() method.
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
     * Tests the bootstrapSmallFunction() method.
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
     * Tests the bootstrapStrikethroughFunction() method.
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
     * Tests the bootstrapStrikethroughFunction() method.
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
     * Tests the bootstrapUnderlinedFunction() method.
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
     * Tests the bootstrapUnderlinedFunction() method.
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
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(28, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("bootstrapBold", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapBoldFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("bsBold", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapBoldFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("bootstrapDeleted", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapDeletedFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("bsDeleted", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapDeletedFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("bootstrapHeading1", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapHeading1Function"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[5]);
        $this->assertEquals("bsHeading1", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapHeading1Function"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[6]);
        $this->assertEquals("bootstrapHeading2", $res[6]->getName());
        $this->assertEquals([$obj, "bootstrapHeading2Function"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[7]);
        $this->assertEquals("bsHeading2", $res[7]->getName());
        $this->assertEquals([$obj, "bootstrapHeading2Function"], $res[7]->getCallable());
        $this->assertEquals(["html"], $res[7]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[8]);
        $this->assertEquals("bootstrapHeading3", $res[8]->getName());
        $this->assertEquals([$obj, "bootstrapHeading3Function"], $res[8]->getCallable());
        $this->assertEquals(["html"], $res[8]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[9]);
        $this->assertEquals("bsHeading3", $res[9]->getName());
        $this->assertEquals([$obj, "bootstrapHeading3Function"], $res[9]->getCallable());
        $this->assertEquals(["html"], $res[9]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[10]);
        $this->assertEquals("bootstrapHeading4", $res[10]->getName());
        $this->assertEquals([$obj, "bootstrapHeading4Function"], $res[10]->getCallable());
        $this->assertEquals(["html"], $res[10]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[11]);
        $this->assertEquals("bsHeading4", $res[11]->getName());
        $this->assertEquals([$obj, "bootstrapHeading4Function"], $res[11]->getCallable());
        $this->assertEquals(["html"], $res[11]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[12]);
        $this->assertEquals("bootstrapHeading5", $res[12]->getName());
        $this->assertEquals([$obj, "bootstrapHeading5Function"], $res[12]->getCallable());
        $this->assertEquals(["html"], $res[12]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[13]);
        $this->assertEquals("bsHeading5", $res[13]->getName());
        $this->assertEquals([$obj, "bootstrapHeading5Function"], $res[13]->getCallable());
        $this->assertEquals(["html"], $res[13]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[14]);
        $this->assertEquals("bootstrapHeading6", $res[14]->getName());
        $this->assertEquals([$obj, "bootstrapHeading6Function"], $res[14]->getCallable());
        $this->assertEquals(["html"], $res[14]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[15]);
        $this->assertEquals("bsHeading6", $res[15]->getName());
        $this->assertEquals([$obj, "bootstrapHeading6Function"], $res[15]->getCallable());
        $this->assertEquals(["html"], $res[15]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[16]);
        $this->assertEquals("bootstrapInserted", $res[16]->getName());
        $this->assertEquals([$obj, "bootstrapInsertedFunction"], $res[16]->getCallable());
        $this->assertEquals(["html"], $res[16]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[17]);
        $this->assertEquals("bsInserted", $res[17]->getName());
        $this->assertEquals([$obj, "bootstrapInsertedFunction"], $res[17]->getCallable());
        $this->assertEquals(["html"], $res[17]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[18]);
        $this->assertEquals("bootstrapItalic", $res[18]->getName());
        $this->assertEquals([$obj, "bootstrapItalicFunction"], $res[18]->getCallable());
        $this->assertEquals(["html"], $res[18]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[19]);
        $this->assertEquals("bsItalic", $res[19]->getName());
        $this->assertEquals([$obj, "bootstrapItalicFunction"], $res[19]->getCallable());
        $this->assertEquals(["html"], $res[19]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[20]);
        $this->assertEquals("bootstrapMarked", $res[20]->getName());
        $this->assertEquals([$obj, "bootstrapMarkedFunction"], $res[20]->getCallable());
        $this->assertEquals(["html"], $res[20]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[21]);
        $this->assertEquals("bsMarked", $res[21]->getName());
        $this->assertEquals([$obj, "bootstrapMarkedFunction"], $res[21]->getCallable());
        $this->assertEquals(["html"], $res[21]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[22]);
        $this->assertEquals("bootstrapSmall", $res[22]->getName());
        $this->assertEquals([$obj, "bootstrapSmallFunction"], $res[22]->getCallable());
        $this->assertEquals(["html"], $res[22]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[23]);
        $this->assertEquals("bsSmall", $res[23]->getName());
        $this->assertEquals([$obj, "bootstrapSmallFunction"], $res[23]->getCallable());
        $this->assertEquals(["html"], $res[23]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[24]);
        $this->assertEquals("bootstrapStrikethrough", $res[24]->getName());
        $this->assertEquals([$obj, "bootstrapStrikethroughFunction"], $res[24]->getCallable());
        $this->assertEquals(["html"], $res[24]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[25]);
        $this->assertEquals("bsStrikethrough", $res[25]->getName());
        $this->assertEquals([$obj, "bootstrapStrikethroughFunction"], $res[25]->getCallable());
        $this->assertEquals(["html"], $res[25]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[26]);
        $this->assertEquals("bootstrapUnderlined", $res[26]->getName());
        $this->assertEquals([$obj, "bootstrapUnderlinedFunction"], $res[26]->getCallable());
        $this->assertEquals(["html"], $res[26]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[27]);
        $this->assertEquals("bsUnderlined", $res[27]->getName());
        $this->assertEquals([$obj, "bootstrapUnderlinedFunction"], $res[27]->getCallable());
        $this->assertEquals(["html"], $res[27]->getSafe(new Node()));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.css.typography", TypographyTwigExtension::SERVICE_NAME);

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
