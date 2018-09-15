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
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ImageTwigExtension;
use WBW\Library\Core\FileSystem\FileHelper;

/**
 * Image Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 * @final
 */
final class ImageTwigExtensionTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new ImageTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapImageBase64", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapImageBase64Function"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapImageBase64Function() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapImageBase64Function() {

        $obj = new ImageTwigExtension();

        $ref = FileHelper::getContents(getcwd() . "/Tests/Twig/Extension/CSS/ImageTwigExtensionTest.txt");
        $src = getcwd() . "/Resources/doc/images/bootstrap-stack_1024x0860.png";

        $arg0 = [];
        $res0 = "<img />";
        $this->assertEquals($res0, $obj->bootstrapImageBase64Function($arg0));

        $arg1 = ["src" => $src];
        $res1 = "<img src=\"" . $ref . "\"/>";
        $this->assertEquals($res1, $obj->bootstrapImageBase64Function($arg1));

        $arg2 = ["alt" => "Bootstrap stack"];
        $res2 = "<img alt=\"Bootstrap stack\"/>";
        $this->assertEquals($res2, $obj->bootstrapImageBase64Function($arg2));

        $arg3 = ["width" => 1024];
        $res3 = "<img width=\"1024\"/>";
        $this->assertEquals($res3, $obj->bootstrapImageBase64Function($arg3));

        $arg4 = ["height" => 860];
        $res4 = "<img height=\"860\"/>";
        $this->assertEquals($res4, $obj->bootstrapImageBase64Function($arg4));

        $arg5 = ["class" => "class"];
        $res5 = "<img class=\"class\"/>";
        $this->assertEquals($res5, $obj->bootstrapImageBase64Function($arg5));

        $arg6 = ["usemap" => "#usemap"];
        $res6 = "<img usemap=\"#usemap\"/>";
        $this->assertEquals($res6, $obj->bootstrapImageBase64Function($arg6));

        $arg9 = ["src" => $src, "alt" => "Bootstrap stack", "width" => 1024, "height" => 860, "class" => "class", "usemap" => "#usemap"];
        $res9 = "<img src=\"" . $ref . "\" alt=\"Bootstrap stack\" width=\"1024\" height=\"860\" class=\"class\" usemap=\"#usemap\"/>";
        $this->assertEquals($res9, $obj->bootstrapImageBase64Function($arg9));
    }

}
