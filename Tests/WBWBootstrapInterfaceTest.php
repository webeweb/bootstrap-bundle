<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests;

use WBW\Bundle\BootstrapBundle\WBWBootstrapInterface;

/**
 * Bootstrap interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests
 */
class WBWBootstrapInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("danger", WBWBootstrapInterface::BOOTSTRAP_TYPE_DANGER);
        $this->assertEquals("dark", WBWBootstrapInterface::BOOTSTRAP_TYPE_DARK);
        $this->assertEquals("default", WBWBootstrapInterface::BOOTSTRAP_TYPE_DEFAULT);
        $this->assertEquals("info", WBWBootstrapInterface::BOOTSTRAP_TYPE_INFO);
        $this->assertEquals("light", WBWBootstrapInterface::BOOTSTRAP_TYPE_LIGHT);
        $this->assertEquals("primary", WBWBootstrapInterface::BOOTSTRAP_TYPE_PRIMARY);
        $this->assertEquals("secondary", WBWBootstrapInterface::BOOTSTRAP_TYPE_SECONDARY);
        $this->assertEquals("success", WBWBootstrapInterface::BOOTSTRAP_TYPE_SUCCESS);
        $this->assertEquals("warning", WBWBootstrapInterface::BOOTSTRAP_TYPE_WARNING);

        $this->assertEquals("3.4.1", WBWBootstrapInterface::BOOTSTRAP_VERSION_3);
        $this->assertEquals("4.6.2", WBWBootstrapInterface::BOOTSTRAP_VERSION_4);
        $this->assertEquals("5.2.0", WBWBootstrapInterface::BOOTSTRAP_VERSION_5);
    }
}
