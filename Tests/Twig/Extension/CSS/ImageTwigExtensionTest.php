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
    public function testBootstrapImageBase64Function(): void {

        // Set the mocks.
        $ref = file_get_contents(__DIR__ . "/ImageTwigExtensionTest.testBootstrapImageBase64Function.txt");
        $src = getcwd() . "/Resources/doc/screenshot_1024x0860.png";

        $obj = new ImageTwigExtension($this->twigEnvironment);

        $arg = [
            "src"    => $src,
            "alt"    => "Bootstrap stack",
            "width"  => 1024,
            "height" => 860,
            "class"  => "class",
            "usemap" => "#usemap",
        ];
        $res = '<img src="' . $ref . '" alt="Bootstrap stack" width="1024" height="860" class="class" usemap="#usemap"/>';
        $this->assertEquals($res, $obj->bootstrapImageBase64Function($arg));
    }

    /**
     * Tests the bootstrapImageBase64Function() method.
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testBootstrapImageBase64FunctionWithoutArguments(): void {

        $obj = new ImageTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = "<img />";
        $this->assertEquals($res, $obj->bootstrapImageBase64Function($arg));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions(): void {

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

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.css.image", ImageTwigExtension::SERVICE_NAME);

        $obj = new ImageTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
