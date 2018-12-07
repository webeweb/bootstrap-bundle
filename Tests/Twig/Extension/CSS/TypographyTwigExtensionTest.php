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
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(14, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapBold", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapBoldFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bootstrapDeleted", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapDeletedFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("bootstrapHeading1", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapHeading1Function"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("bootstrapHeading2", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapHeading2Function"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("bootstrapHeading3", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapHeading3Function"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
        $this->assertEquals("bootstrapHeading4", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapHeading4Function"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[6]);
        $this->assertEquals("bootstrapHeading5", $res[6]->getName());
        $this->assertEquals([$obj, "bootstrapHeading5Function"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[7]);
        $this->assertEquals("bootstrapHeading6", $res[7]->getName());
        $this->assertEquals([$obj, "bootstrapHeading6Function"], $res[7]->getCallable());
        $this->assertEquals(["html"], $res[7]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[8]);
        $this->assertEquals("bootstrapInserted", $res[8]->getName());
        $this->assertEquals([$obj, "bootstrapInsertedFunction"], $res[8]->getCallable());
        $this->assertEquals(["html"], $res[8]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[9]);
        $this->assertEquals("bootstrapItalic", $res[9]->getName());
        $this->assertEquals([$obj, "bootstrapItalicFunction"], $res[9]->getCallable());
        $this->assertEquals(["html"], $res[9]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[10]);
        $this->assertEquals("bootstrapMarked", $res[10]->getName());
        $this->assertEquals([$obj, "bootstrapMarkedFunction"], $res[10]->getCallable());
        $this->assertEquals(["html"], $res[10]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[11]);
        $this->assertEquals("bootstrapSmall", $res[11]->getName());
        $this->assertEquals([$obj, "bootstrapSmallFunction"], $res[11]->getCallable());
        $this->assertEquals(["html"], $res[11]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[12]);
        $this->assertEquals("bootstrapStrikethrough", $res[12]->getName());
        $this->assertEquals([$obj, "bootstrapStrikethroughFunction"], $res[12]->getCallable());
        $this->assertEquals(["html"], $res[12]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[13]);
        $this->assertEquals("bootstrapUnderlined", $res[13]->getName());
        $this->assertEquals([$obj, "bootstrapUnderlinedFunction"], $res[13]->getCallable());
        $this->assertEquals(["html"], $res[13]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapBoldFunction() method.
     *
     * @return void
     */
    public function testBootstrapBoldFunction() {

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
    public function testBootstrapBoldFunctionWithoutArguments() {

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
    public function testBootstrapDeletedFunction() {

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
    public function testBootstrapDeletedFunctionWithoutArguments() {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<del></del>";
        $this->assertEquals($res, $obj->bootstrapDeletedFunction($arg));
    }

    /**
     * Tests the bootstrapHeading1Function() method.
     *
     * @return void
     */
    public function testBootstrapHeading1Function() {

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
    public function testBootstrapHeading1FunctionWithContent() {

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
    public function testBootstrapHeading1FunctionWithDescription() {

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
    public function testBootstrapHeading1FunctionWithClass() {

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
    public function testBootstrapHeading1FunctionWithoutArguments() {

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
    public function testBootstrapHeading2Function() {

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
    public function testBootstrapHeading2FunctionWithContent() {

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
    public function testBootstrapHeading2FunctionWithDescription() {

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
    public function testBootstrapHeading2FunctionWithClass() {

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
    public function testBootstrapHeading2FunctionWithoutArguments() {

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
    public function testBootstrapHeading3Function() {

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
    public function testBootstrapHeading3FunctionWithContent() {

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
    public function testBootstrapHeading3FunctionWithDescription() {

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
    public function testBootstrapHeading3FunctionWithClass() {

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
    public function testBootstrapHeading3FunctionWithoutArguments() {

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
    public function testBootstrapHeading4Function() {

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
    public function testBootstrapHeading4FunctionWithContent() {

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
    public function testBootstrapHeading4FunctionWithDescription() {

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
    public function testBootstrapHeading4FunctionWithClass() {

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
    public function testBootstrapHeading4FunctionWithoutArguments() {

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
    public function testBootstrapHeading5Function() {

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
    public function testBootstrapHeading5FunctionWithContent() {

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
    public function testBootstrapHeading5FunctionWithDescription() {

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
    public function testBootstrapHeading5FunctionWithClass() {

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
    public function testBootstrapHeading5FunctionWithoutArguments() {

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
    public function testBootstrapHeading6Function() {

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
    public function testBootstrapHeading6FunctionWithContent() {

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
    public function testBootstrapHeading6FunctionWithDescription() {

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
    public function testBootstrapHeading6FunctionWithClass() {

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
    public function testBootstrapHeading6FunctionWithoutArguments() {

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
    public function testBootstrapInsFunction() {

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
    public function testBootstrapInsFunctionWithoutArguments() {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<ins></ins>";
        $this->assertEquals($res, $obj->bootstrapInsertedFunction($arg));
    }

    /**
     * Tests the bootstrapItalicFunction() method.
     *
     * @return void
     */
    public function testBootstrapEmFunction() {

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
    public function testBootstrapEmFunctionWithoutArguments() {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<em></em>";
        $this->assertEquals($res, $obj->bootstrapItalicFunction($arg));
    }

    /**
     * Tests the bootstrapMarkedFunction() method.
     *
     * @return void
     */
    public function testBootstrapMarkedFunction() {

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
    public function testBootstrapMarkedFunctionWithoutArguments() {

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
    public function testBootstrapSmallFunction() {

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
    public function testBootstrapSmallFunctionWithoutArguments() {

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
    public function testBootstrapStrikethroughFunction() {

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
    public function testBootstrapStrikethroughFunctionWithoutArguments() {

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
    public function testBootstrapUnderlinedFunction() {

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
    public function testBootstrapUnderlinedFunctionWithoutArguments() {

        $obj = new TypographyTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<u></u>";
        $this->assertEquals($res, $obj->bootstrapUnderlinedFunction($arg));
    }

}
