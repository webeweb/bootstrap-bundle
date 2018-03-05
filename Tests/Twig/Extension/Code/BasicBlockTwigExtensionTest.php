<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Code;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Code\BasicBlockCodeTwigExtension;

/**
 * Basic block code Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Code
 * @final
 */
final class BasicBlockCodeTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new BasicBlockCodeTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapBasicBlock", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapBasicBlockFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapBasicBlockFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapBasicBlockFunction() {

        $obj = new BasicBlockCodeTwigExtension();

        $arg0 = [];
        $res0 = "<pre></pre>";
        $this->assertEquals($res0, $obj->bootstrapBasicBlockFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<pre>content</pre>";
        $this->assertEquals($res9, $obj->bootstrapBasicBlockFunction($arg9));
    }

}
