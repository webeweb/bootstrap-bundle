<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Twig\Extension;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\BootstrapBundle\Twig\Extension\BootstrapRendererTwigExtension;

/**
 * Bootstrap renderer Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension
 * @final
 */
final class BootstrapRendererTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIcon() {

        $res0 = "";
        $this->assertEquals($res0, BootstrapRendererTwigExtension::renderIcon("::"));

        $res1 = '<i class="zmdi zmdi-home"></i>';
        $this->assertEquals($res1, BootstrapRendererTwigExtension::renderIcon("zmdi:home"));

        $res2 = '<i class="fa fa-home"></i>';
        $this->assertEquals($res2, BootstrapRendererTwigExtension::renderIcon("fa:home"));

        $res3 = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res3, BootstrapRendererTwigExtension::renderIcon("g:home"));

        $res4 = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res4, BootstrapRendererTwigExtension::renderIcon("b:home"));

        $res9 = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res9, BootstrapRendererTwigExtension::renderIcon("home"));
    }

}
