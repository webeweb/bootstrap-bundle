<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Plugin;

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Tests\AbstractBootstrapFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\MeteoconsTwigExtension;

/**
 * Meteocons Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Plugin
 * @final
 */
final class MeteoconsTwigExtensionTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new MeteoconsTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("meteoconsIcon", $res[0]->getName());
        $this->assertEquals([$obj, "meteoconsIconFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the meteoconsIconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMeteoconsIconFunction() {

        $obj = new MeteoconsTwigExtension();

        $arg0 = [];
        $res0 = '<i class="meteocons" data-meteocons="A"></i>';
        $this->assertEquals($res0, $obj->meteoconsIconFunction($arg0));

        $arg1 = ["name" => "B"];
        $res1 = '<i class="meteocons" data-meteocons="B"></i>';
        $this->assertEquals($res1, $obj->meteoconsIconFunction($arg1));

        $arg2 = ["style" => "color: #FFFFFF;"];
        $res2 = '<i class="meteocons" data-meteocons="A" style="color: #FFFFFF;"></i>';
        $this->assertEquals($res2, $obj->meteoconsIconFunction($arg2));

        $arg9 = ["name" => "B", "style" => "color: #FFFFFF;"];
        $res9 = '<i class="meteocons" data-meteocons="B" style="color: #FFFFFF;"></i>';
        $this->assertEquals($res9, $obj->meteoconsIconFunction($arg9));
    }

}
