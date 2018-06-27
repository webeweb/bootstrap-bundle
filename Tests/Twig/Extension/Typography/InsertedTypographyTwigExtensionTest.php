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
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\InsertedTypographyTwigExtension;

/**
 * Inserted typography Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Typography
 * @final
 */
final class InsertedTypographyTwigExtensionTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new InsertedTypographyTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapInserted", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapInsertedFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapInsertedFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapInsFunction() {

        $obj = new InsertedTypographyTwigExtension();

        $arg0 = [];
        $res0 = "<ins></ins>";
        $this->assertEquals($res0, $obj->bootstrapInsertedFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<ins>content</ins>";
        $this->assertEquals($res9, $obj->bootstrapInsertedFunction($arg9));
    }

}
