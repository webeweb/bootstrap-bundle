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
use Twig_SimpleFilter;
use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapFrameworkTestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin\MaterialDesignIconicFontPluginTwigExtension;

/**
 * Material Design Iconic Font plugin Twig extension test.
 *
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension\Plugin
 * @final
 */
final class MaterialDesignIconicFontPluginTwigExtensionTest extends AbstractBootstrapFrameworkTestCase {

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new MaterialDesignIconicFontPluginTwigExtension();

        $res = $obj->getFilters();

        $this->assertCount(2, $res);

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[0]);
        $this->assertEquals("materialDesignIconicFontList", $res[0]->getName());
        $this->assertEquals([$obj, "materialDesignIconicFontListFilter"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[1]);
        $this->assertEquals("materialDesignIconicFontListIcon", $res[1]->getName());
        $this->assertEquals([$obj, "materialDesignIconicFontListIconFilter"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new MaterialDesignIconicFontPluginTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("materialDesignIconicFontIcon", $res[0]->getName());
        $this->assertEquals([$obj, "materialDesignIconicFontIconFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the materialDesignIconicFontListFilter() method.
     *
     * @return void
     * @depends testGetFilters
     */
    public function testMaterialDesignIconicFontListFilter() {

        $obj = new MaterialDesignIconicFontPluginTwigExtension();

        $arg = $obj->materialDesignIconicFontListIconFilter($obj->materialDesignIconicFontIconFunction([]), "content");

        $res9 = '<ul class="zmdi-hc-ul"><li><i class="zmdi-hc-li zmdi zmdi-home"></i>content</li></ul>';
        $this->assertEquals($res9, $obj->materialDesignIconicFontListFilter($arg));
    }

    /**
     * Tests the materialDesignIconicFontListIconFilter() method.
     *
     * @return void
     * @depends testGetFilters
     */
    public function testMaterialDesignIconicFontListIconFilter() {

        $obj = new MaterialDesignIconicFontPluginTwigExtension();

        $arg = $obj->materialDesignIconicFontIconFunction([]);

        $res0 = '<li><i class="zmdi-hc-li zmdi zmdi-home"></i></li>';
        $this->assertEquals($res0, $obj->materialDesignIconicFontListIconFilter($arg, null));

        $res9 = '<li><i class="zmdi-hc-li zmdi zmdi-home"></i>content</li>';
        $this->assertEquals($res9, $obj->materialDesignIconicFontListIconFilter($arg, "content"));
    }

    /**
     * Tests the materialDesignIconicFontIconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignIconicFontIconFunction() {

        $obj = new MaterialDesignIconicFontPluginTwigExtension();

        $arg0 = [];
        $res0 = '<i class="zmdi zmdi-home"></i>';
        $this->assertEquals($res0, $obj->materialDesignIconicFontIconFunction($arg0));

        $arg1 = ["name" => "camera-retro"];
        $res1 = '<i class="zmdi zmdi-camera-retro"></i>';
        $this->assertEquals($res1, $obj->materialDesignIconicFontIconFunction($arg1));

        $arg2 = ["size" => "lg"];
        $res2 = '<i class="zmdi zmdi-home zmdi-hc-lg"></i>';
        $this->assertEquals($res2, $obj->materialDesignIconicFontIconFunction($arg2));

        $arg3 = ["fixedWidth" => true];
        $res3 = '<i class="zmdi zmdi-home zmdi-hc-fw"></i>';
        $this->assertEquals($res3, $obj->materialDesignIconicFontIconFunction($arg3));

        $arg4 = ["border" => "border-circle"];
        $res4 = '<i class="zmdi zmdi-home zmdi-hc-border-circle"></i>';
        $this->assertEquals($res4, $obj->materialDesignIconicFontIconFunction($arg4));

        $arg5 = ["pull" => "right"];
        $res5 = '<i class="zmdi zmdi-home pull-right"></i>';
        $this->assertEquals($res5, $obj->materialDesignIconicFontIconFunction($arg5));

        $arg6 = ["spin" => "spin"];
        $res6 = '<i class="zmdi zmdi-home zmdi-hc-spin"></i>';
        $this->assertEquals($res6, $obj->materialDesignIconicFontIconFunction($arg6));

        $arg7 = ["rotate" => "90"];
        $res7 = '<i class="zmdi zmdi-home zmdi-hc-rotate-90"></i>';
        $this->assertEquals($res7, $obj->materialDesignIconicFontIconFunction($arg7));

        $arg8 = ["flip" => "vertical"];
        $res8 = '<i class="zmdi zmdi-home zmdi-hc-flip-vertical"></i>';
        $this->assertEquals($res8, $obj->materialDesignIconicFontIconFunction($arg8));

        $arg9 = ["name" => "camera-retro", "size" => "lg", "fixedWidth" => true, "border" => "border-circle", "pull" => "left", "spin" => "spin", "rotate" => "180", "flip" => "horizontal"];
        $res9 = '<i class="zmdi zmdi-camera-retro zmdi-hc-lg zmdi-hc-fw zmdi-hc-border-circle pull-left zmdi-hc-spin zmdi-hc-rotate-180 zmdi-hc-flip-horizontal"></i>';
        $this->assertEquals($res9, $obj->materialDesignIconicFontIconFunction($arg9));
    }

}
