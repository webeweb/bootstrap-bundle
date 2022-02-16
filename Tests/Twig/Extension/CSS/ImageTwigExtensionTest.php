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
     * Tests bootstrapImageBase64Function()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testBootstrapImageBase64Function(): void {

        // Set the mocks.
        $ref = file_get_contents(__DIR__ . "/ImageTwigExtensionTest.testBootstrapImageBase64Function.txt");
        $src = realpath(__DIR__ . "/../../../../Resources/doc/screenshot_1024x0860.png");

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
     * Tests bootstrapImageBase64Function()
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
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new ImageTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(2, $res);

        $i = -1;

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bootstrapImageBase64", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapImageBase64Function"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[++$i]);
        $this->assertEquals("bsImageBase64", $res[$i]->getName());
        $this->assertEquals([$obj, "bootstrapImageBase64Function"], $res[$i]->getCallable());
        $this->assertEquals(["html"], $res[$i]->getSafe(new Node()));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.bootstrap.twig.extension.css.image", ImageTwigExtension::SERVICE_NAME);

        $obj = new ImageTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
