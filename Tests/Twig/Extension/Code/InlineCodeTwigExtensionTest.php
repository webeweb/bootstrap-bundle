<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Code;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Code\InlineCodeTwigExtension;

/**
 * Inline code Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Code
 * @final
 */
final class InlineCodeTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new InlineCodeTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapInline", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapInlineFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapInlineFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapInlineFunction() {

        $obj = new InlineCodeTwigExtension();

        $arg0 = [];
        $res0 = "<code></code>";
        $this->assertEquals($res0, $obj->bootstrapInlineFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<code>content</code>";
        $this->assertEquals($res9, $obj->bootstrapInlineFunction($arg9));
    }

}
