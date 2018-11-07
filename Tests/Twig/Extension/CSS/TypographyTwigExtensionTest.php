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
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\TypographyTwigExtension;

/**
 * Typography Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 */
class TypographyTwigExtensionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new TypographyTwigExtension();

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
     * @depends testGetFunctions
     */
    public function testBootstrapBoldFunction() {

        $obj = new TypographyTwigExtension();

        $arg0 = [];
        $res0 = "<strong></strong>";
        $this->assertEquals($res0, $obj->bootstrapBoldFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<strong>content</strong>";
        $this->assertEquals($res9, $obj->bootstrapBoldFunction($arg9));
    }

    /**
     * Tests the bootstrapDeletedFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapDeletedFunction() {

        $obj = new TypographyTwigExtension();

        $arg0 = [];
        $res0 = "<del></del>";
        $this->assertEquals($res0, $obj->bootstrapDeletedFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<del>content</del>";
        $this->assertEquals($res9, $obj->bootstrapDeletedFunction($arg9));
    }

    /**
     * Tests the bootstrapHeading1Function() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapH1Function() {

        $obj = new TypographyTwigExtension();

        $arg0 = [];
        $res0 = "<h1></h1>";
        $this->assertEquals($res0, $obj->bootstrapHeading1Function($arg0));

        $arg1 = ["content" => "content"];
        $res1 = "<h1>content</h1>";
        $this->assertEquals($res1, $obj->bootstrapHeading1Function($arg1));

        $arg2 = ["description" => "description"];
        $res2 = "<h1><small>description</small></h1>";
        $this->assertEquals($res2, $obj->bootstrapHeading1Function($arg2));

        $arg3 = ["class" => "class"];
        $res3 = '<h1 class="class"></h1>';
        $this->assertEquals($res3, $obj->bootstrapHeading1Function($arg3));

        $arg9 = ["content" => "content", "description" => "description", "class" => "class"];
        $res9 = '<h1 class="class">content <small>description</small></h1>';
        $this->assertEquals($res9, $obj->bootstrapHeading1Function($arg9));
    }

    /**
     * Tests the bootstrapHeading2Function() method.
     *
     * @return void
     */
    public function testBootstrapH2Function() {

        $obj = new TypographyTwigExtension();

        $arg = [];
        $res = "<h2></h2>";
        $this->assertEquals($res, $obj->bootstrapHeading2Function($arg));
    }

    /**
     * Tests the bootstrapHeading3Function() method.
     *
     * @return void
     */
    public function testBootstrapH3Function() {

        $obj = new TypographyTwigExtension();

        $arg = [];
        $res = "<h3></h3>";
        $this->assertEquals($res, $obj->bootstrapHeading3Function($arg));
    }

    /**
     * Tests the bootstrapHeading4Function() method.
     *
     * @return void
     */
    public function testBootstrapH4Function() {

        $obj = new TypographyTwigExtension();

        $arg = [];
        $res = "<h4></h4>";
        $this->assertEquals($res, $obj->bootstrapHeading4Function($arg));
    }

    /**
     * Tests the bootstrapHeading5Function() method.
     *
     * @return void
     */
    public function testBootstrapH5Function() {

        $obj = new TypographyTwigExtension();

        $arg = [];
        $res = "<h5></h5>";
        $this->assertEquals($res, $obj->bootstrapHeading5Function($arg));
    }

    /**
     * Tests the bootstrapHeading6Function() method.
     *
     * @return void
     */
    public function testBootstrapH6Function() {

        $obj = new TypographyTwigExtension();

        $arg = [];
        $res = "<h6></h6>";
        $this->assertEquals($res, $obj->bootstrapHeading6Function($arg));
    }

    /**
     * Tests the bootstrapInsertedFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapInsFunction() {

        $obj = new TypographyTwigExtension();

        $arg0 = [];
        $res0 = "<ins></ins>";
        $this->assertEquals($res0, $obj->bootstrapInsertedFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<ins>content</ins>";
        $this->assertEquals($res9, $obj->bootstrapInsertedFunction($arg9));
    }

    /**
     * Tests the bootstrapItalicFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapEmFunction() {

        $obj = new TypographyTwigExtension();

        $arg0 = [];
        $res0 = "<em></em>";
        $this->assertEquals($res0, $obj->bootstrapItalicFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<em>content</em>";
        $this->assertEquals($res9, $obj->bootstrapItalicFunction($arg9));
    }

    /**
     * Tests the bootstrapMarkedFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapMarkedFunction() {

        $obj = new TypographyTwigExtension();

        $arg0 = [];
        $res0 = "<mark></mark>";
        $this->assertEquals($res0, $obj->bootstrapMarkedFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<mark>content</mark>";
        $this->assertEquals($res9, $obj->bootstrapMarkedFunction($arg9));
    }

    /**
     * Tests the bootstrapSmallFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapSmallFunction() {

        $obj = new TypographyTwigExtension();

        $arg0 = [];
        $res0 = "<small></small>";
        $this->assertEquals($res0, $obj->bootstrapSmallFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<small>content</small>";
        $this->assertEquals($res9, $obj->bootstrapSmallFunction($arg9));
    }

    /**
     * Tests the bootstrapStrikethroughFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapStrikethroughFunction() {

        $obj = new TypographyTwigExtension();

        $arg0 = [];
        $res0 = "<s></s>";
        $this->assertEquals($res0, $obj->bootstrapStrikethroughFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<s>content</s>";
        $this->assertEquals($res9, $obj->bootstrapStrikethroughFunction($arg9));
    }

    /**
     * Tests the bootstrapUnderlinedFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapUnderlinedFunction() {

        $obj = new TypographyTwigExtension();

        $arg0 = [];
        $res0 = "<u></u>";
        $this->assertEquals($res0, $obj->bootstrapUnderlinedFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<u>content</u>";
        $this->assertEquals($res9, $obj->bootstrapUnderlinedFunction($arg9));
    }

}
