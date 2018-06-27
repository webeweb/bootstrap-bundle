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
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\MarkedTypographyTwigExtension;

/**
 * Marked typography Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Typography
 * @final
 */
final class MarkedTypographyTwigExtensionTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new MarkedTypographyTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapMarked", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapMarkedFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapMarkedFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapMarkFunction() {

        $obj = new MarkedTypographyTwigExtension();

        $arg0 = [];
        $res0 = "<mark></mark>";
        $this->assertEquals($res0, $obj->bootstrapMarkedFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<mark>content</mark>";
        $this->assertEquals($res9, $obj->bootstrapMarkedFunction($arg9));
    }

}
