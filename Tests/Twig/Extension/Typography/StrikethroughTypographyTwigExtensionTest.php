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
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\StrikethroughTypographyTwigExtension;

/**
 * Strike through typography Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Typography
 * @final
 */
final class StrikethroughTypographyTwigExtensionTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new StrikethroughTypographyTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapStrikethrough", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapStrikethroughFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapStrikethroughFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapSFunction() {

        $obj = new StrikethroughTypographyTwigExtension();

        $arg0 = [];
        $res0 = "<s></s>";
        $this->assertEquals($res0, $obj->bootstrapStrikethroughFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<s>content</s>";
        $this->assertEquals($res9, $obj->bootstrapStrikethroughFunction($arg9));
    }

}
