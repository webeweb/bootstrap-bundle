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
use WBW\Bundle\BootstrapBundle\Twig\Extension\FactoryBootstrapTwigExtension;

/**
 * Factory Bootstrap Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension
 * @final
 */
final class FactoryBootstrapTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the bootstrapIcon() method.
     *
     * @return void
     */
    public function testBootstrapIcon() {

        $res0 = "";
        $this->assertEquals($res0, FactoryBootstrapTwigExtension::bootstrapIcon("::"));

        $res1 = '<i class="zmdi zmdi-home"></i>';
        $this->assertEquals($res1, FactoryBootstrapTwigExtension::bootstrapIcon("mdi:home"));

        $res2 = '<i class="fa fa-home"></i>';
        $this->assertEquals($res2, FactoryBootstrapTwigExtension::bootstrapIcon("fa:home"));

        $res3 = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res3, FactoryBootstrapTwigExtension::bootstrapIcon("g:home"));

        $res4 = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res4, FactoryBootstrapTwigExtension::bootstrapIcon("b:home"));

        $res9 = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res9, FactoryBootstrapTwigExtension::bootstrapIcon("home"));
    }

}
