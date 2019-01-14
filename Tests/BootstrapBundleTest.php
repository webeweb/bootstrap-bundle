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

/**
 * Bootstrap bundle test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests
 */
class BootstrapBundleTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals("danger", BootstrapBundle::BOOTSTRAP_DANGER);
        $this->assertEquals("default", BootstrapBundle::BOOTSTRAP_DEFAULT);
        $this->assertEquals("info", BootstrapBundle::BOOTSTRAP_INFO);
        $this->assertEquals("primary", BootstrapBundle::BOOTSTRAP_PRIMARY);
        $this->assertEquals("success", BootstrapBundle::BOOTSTRAP_SUCCESS);
        $this->assertEquals("warning", BootstrapBundle::BOOTSTRAP_WARNING);

        $this->assertEquals("3.4.0", BootstrapBundle::BOOTSTRAP_VERSION_3);
        $this->assertEquals("4.1.3", BootstrapBundle::BOOTSTRAP_VERSION_4);
    }

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
     * Tests the getBootstrapConstants() method.
     *
     * @return void
     */
    public function testGetBootstrapConstants() {

        $res = [
            BootstrapBundle::BOOTSTRAP_DANGER,
            BootstrapBundle::BOOTSTRAP_DEFAULT,
            BootstrapBundle::BOOTSTRAP_INFO,
            BootstrapBundle::BOOTSTRAP_PRIMARY,
            BootstrapBundle::BOOTSTRAP_SUCCESS,
            BootstrapBundle::BOOTSTRAP_WARNING,
        ];
        $this->assertEquals($res, BootstrapBundle::getBootstrapConstants());
    }
}
