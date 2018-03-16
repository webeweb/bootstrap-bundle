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

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\DeletedTypographyTwigExtension;

/**
 * Deleted typography Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Typography
 * @final
 */
final class DeletedTypographyTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new DeletedTypographyTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapDeleted", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapDeletedFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapDeletedFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapDeletedFunction() {

        $obj = new DeletedTypographyTwigExtension();

        $arg0 = [];
        $res0 = "<del></del>";
        $this->assertEquals($res0, $obj->bootstrapDeletedFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<del>content</del>";
        $this->assertEquals($res9, $obj->bootstrapDeletedFunction($arg9));
    }

}
