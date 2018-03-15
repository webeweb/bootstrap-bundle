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
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\SmallTypographyTwigExtension;

/**
 * Small typography Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Typography
 * @final
 */
final class SmallTypographyTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new SmallTypographyTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals('bootstrapSmall', $res[0]->getName());
        $this->assertEquals([$obj, 'bootstrapSmallFunction'], $res[0]->getCallable());
        $this->assertEquals(['html'], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the bootstrapSmallFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBootstrapSmallFunction() {

        $obj = new SmallTypographyTwigExtension();

        $arg0 = [];
        $res0 = '<small></small>';
        $this->assertEquals($res0, $obj->bootstrapSmallFunction($arg0));

        $arg9 = ['content' => 'content'];
        $res9 = '<small>content</small>';
        $this->assertEquals($res9, $obj->bootstrapSmallFunction($arg9));
    }

}
