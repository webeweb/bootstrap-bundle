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
use WBW\Bundle\BootstrapBundle\Twig\Extension\Code\SampleOutputCodeTwigExtension;

/**
 * Sample output code Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Code
 * @final
 */
final class SampleOutputCodeTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new SampleOutputCodeTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapSampleOutput", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapSampleOutputFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapSampleOutputFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapSampleOutputFunction() {

        $obj = new SampleOutputCodeTwigExtension();

        $arg0 = [];
        $res0 = "<samp></samp>";
        $this->assertEquals($res0, $obj->bootstrapSampleOutputFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<samp>content</samp>";
        $this->assertEquals($res9, $obj->bootstrapSampleOutputFunction($arg9));
    }

}
