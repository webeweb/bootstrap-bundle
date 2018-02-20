<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Typography;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\MarkTypographyTwigExtension;

/**
 * Marked typography Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Typography
 * @final
 */
final class MarkTypographyTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new MarkTypographyTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapMark", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapMarkFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapMarkFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapMarkFunction() {

        $obj = new MarkTypographyTwigExtension();

        $arg0 = [];
        $res0 = "<mark></mark>";
        $this->assertEquals($res0, $obj->bootstrapMarkFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<mark>content</mark>";
        $this->assertEquals($res9, $obj->bootstrapMarkFunction($arg9));
    }

}
