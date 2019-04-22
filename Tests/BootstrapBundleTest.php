<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests;

use WBW\Bundle\BootstrapBundle\BootstrapBundle;
use WBW\Bundle\BootstrapBundle\DependencyInjection\BootstrapExtension;

/**
 * Bootstrap bundle test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests
 */
class BootstrapBundleTest extends AbstractTestCase {

    /**
     * Tests the getAssetsRelativeDirectory() method.
     *
     * @return void
     */
    public function testGetAssetsRelativeDirectory() {

        $obj = new BootstrapBundle();

        $res = "/Resources/assets";
        $this->assertEquals($res, $obj->getAssetsRelativeDirectory());
    }

    /**
     * Tests the getContainerExtension() method.
     *
     * @return void
     */
    public function testGetContainerExtension() {

        $obj = new BootstrapBundle();

        $res = $obj->getContainerExtension();
        $this->assertInstanceOf(BootstrapExtension::class, $res);
    }
}
