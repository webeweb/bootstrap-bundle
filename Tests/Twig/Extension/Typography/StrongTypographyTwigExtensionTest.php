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
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\StrongTypographyTwigExtension;

/**
 * Strong typography Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Typography
 * @final
 */
final class StrongTypographyTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new StrongTypographyTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapStrong", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapStrongFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapStrongFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapStrongFunction() {

        $obj = new StrongTypographyTwigExtension();

        $arg0 = [];
        $res0 = "<strong></strong>";
        $this->assertEquals($res0, $obj->bootstrapStrongFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<strong>content</strong>";
        $this->assertEquals($res9, $obj->bootstrapStrongFunction($arg9));
    }

}
