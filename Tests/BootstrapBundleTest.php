<?php

/**
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
 * @final
 */
final class BootstrapBundleTest extends AbstractBootstrapFrameworkTestCase {

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
    }

    /**
     * Tests the getBootstrapConstants() method.
     *
     * @return void
     * @depends testConstruct
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
