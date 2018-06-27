<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Typography;

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\HeadingTypographyTwigExtension;

/**
 * Heading typography Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Typography
 * @final
 */
final class HeadingTypographyTwigExtensionTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new HeadingTypographyTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(6, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapHeading1", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapHeading1Function"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("bootstrapHeading2", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapHeading2Function"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));
        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);

        $this->assertEquals("bootstrapHeading3", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapHeading3Function"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));
        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);

        $this->assertEquals("bootstrapHeading4", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapHeading4Function"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));
        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);

        $this->assertEquals("bootstrapHeading5", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapHeading5Function"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));
        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);

        $this->assertEquals("bootstrapHeading6", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapHeading6Function"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapHeading1Function() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapH1Function() {

        $obj = new HeadingTypographyTwigExtension();

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

        $obj = new HeadingTypographyTwigExtension();

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

        $obj = new HeadingTypographyTwigExtension();

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

        $obj = new HeadingTypographyTwigExtension();

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

        $obj = new HeadingTypographyTwigExtension();

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

        $obj = new HeadingTypographyTwigExtension();

        $arg = [];
        $res = "<h6></h6>";
        $this->assertEquals($res, $obj->bootstrapHeading6Function($arg));
    }

}
