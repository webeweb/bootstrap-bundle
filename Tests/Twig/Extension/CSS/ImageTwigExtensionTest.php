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

use Exception;
use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ImageTwigExtension;
use WBW\Library\Core\FileSystem\FileHelper;

/**
 * Image Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\CSS
 */
class ImageTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the bootstrapImageBase64Function() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testBootstrapImageBase64Function() {

        // Set the mocks.
        $ref = FileHelper::getContents(getcwd() . "/Tests/Twig/Extension/CSS/ImageTwigExtensionTest.txt");
        $src = getcwd() . "/Resources/doc/screenshot_1024x0860.png";

        $obj = new ImageTwigExtension($this->twigEnvironment);

        $arg = ["src" => $src, "alt" => "Bootstrap stack", "width" => 1024, "height" => 860, "class" => "class", "usemap" => "#usemap"];
        $res = "<img src=\"" . $ref . "\" alt=\"Bootstrap stack\" width=\"1024\" height=\"860\" class=\"class\" usemap=\"#usemap\"/>";
        $this->assertEquals($res, $obj->bootstrapImageBase64Function($arg));
    }

    /**
     * Tests the bootstrapImageBase64Function() method.
     *
     * @return void
     */
    public function testBootstrapImageBase64FunctionWithAlt() {

        $obj = new ImageTwigExtension($this->twigEnvironment);

        $arg = ["alt" => "Bootstrap stack"];
        $res = "<img alt=\"Bootstrap stack\"/>";
        $this->assertEquals($res, $obj->bootstrapImageBase64Function($arg));
    }

    /**
     * Tests the bootstrapImageBase64Function() method.
     *
     * @return void
     */
    public function testBootstrapImageBase64FunctionWithClass() {

        $obj = new ImageTwigExtension($this->twigEnvironment);

        $arg = ["class" => "class"];
        $res = "<img class=\"class\"/>";
        $this->assertEquals($res, $obj->bootstrapImageBase64Function($arg));
    }

    /**
     * Tests the bootstrapImageBase64Function() method.
     *
     * @return void
     */
    public function testBootstrapImageBase64FunctionWithHeight() {

        $obj = new ImageTwigExtension($this->twigEnvironment);

        $arg = ["height" => 860];
        $res = "<img height=\"860\"/>";
        $this->assertEquals($res, $obj->bootstrapImageBase64Function($arg));
    }

    /**
     * Tests the bootstrapImageBase64Function() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testBootstrapImageBase64FunctionWithSrc() {

        // Set the mocks.
        $ref = FileHelper::getContents(getcwd() . "/Tests/Twig/Extension/CSS/ImageTwigExtensionTest.txt");
        $src = getcwd() . "/Resources/doc/screenshot_1024x0860.png";

        $obj = new ImageTwigExtension($this->twigEnvironment);

        $arg = ["src" => $src];
        $res = "<img src=\"" . $ref . "\"/>";
        $this->assertEquals($res, $obj->bootstrapImageBase64Function($arg));
    }

    /**
     * Tests the bootstrapImageBase64Function() method.
     *
     * @return void
     */
    public function testBootstrapImageBase64FunctionWithUsemap() {

        $obj = new ImageTwigExtension($this->twigEnvironment);

        $arg = ["usemap" => "#usemap"];
        $res = "<img usemap=\"#usemap\"/>";
        $this->assertEquals($res, $obj->bootstrapImageBase64Function($arg));
    }

    /**
     * Tests the bootstrapImageBase64Function() method.
     *
     * @return void
     */
    public function testBootstrapImageBase64FunctionWithWidth() {

        $obj = new ImageTwigExtension($this->twigEnvironment);

        $arg = ["width" => 1024];
        $res = "<img width=\"1024\"/>";
        $this->assertEquals($res, $obj->bootstrapImageBase64Function($arg));
    }

    /**
     * Tests the bootstrapImageBase64Function() method.
     *
     * @return void
     */
    public function testBootstrapImageBase64FunctionWithoutArguments() {

        $obj = new ImageTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<img />";
        $this->assertEquals($res, $obj->bootstrapImageBase64Function($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ImageTwigExtension($this->twigEnvironment);

        $this->assertEquals("wbw.bootstrap.twig.extension.css.image", ImageTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new ImageTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(2, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("bootstrapImageBase64", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapImageBase64Function"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("bsImageBase64", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapImageBase64Function"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));
    }
}
