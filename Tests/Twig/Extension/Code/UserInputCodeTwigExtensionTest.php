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

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Code\UserInputCodeTwigExtension;

/**
 * User input code Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Code
 * @final
 */
final class UserInputCodeTwigExtensionTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new UserInputCodeTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("bootstrapUserInput", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapUserInputFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapUserInputFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapUserInputFunction() {

        $obj = new UserInputCodeTwigExtension();

        $arg0 = [];
        $res0 = "<kbd></kbd>";
        $this->assertEquals($res0, $obj->bootstrapUserInputFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = "<kbd>content</kbd>";
        $this->assertEquals($res9, $obj->bootstrapUserInputFunction($arg9));
    }

}
