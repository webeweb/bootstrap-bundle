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
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests
 */
class WBWBootstrapInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("3.4.1", WBWBootstrapInterface::BOOTSTRAP_VERSION_3);
        $this->assertEquals("4.6.0", WBWBootstrapInterface::BOOTSTRAP_VERSION_4);
        $this->assertEquals("5.0.1", WBWBootstrapInterface::BOOTSTRAP_VERSION_5);

        $this->assertEquals("danger", WBWBootstrapInterface::BOOTSTRAP_DANGER);
        $this->assertEquals("dark", WBWBootstrapInterface::BOOTSTRAP_DARK);
        $this->assertEquals("default", WBWBootstrapInterface::BOOTSTRAP_DEFAULT);
        $this->assertEquals("info", WBWBootstrapInterface::BOOTSTRAP_INFO);
        $this->assertEquals("light", WBWBootstrapInterface::BOOTSTRAP_LIGHT);
        $this->assertEquals("primary", WBWBootstrapInterface::BOOTSTRAP_PRIMARY);
        $this->assertEquals("secondary", WBWBootstrapInterface::BOOTSTRAP_SECONDARY);
        $this->assertEquals("success", WBWBootstrapInterface::BOOTSTRAP_SUCCESS);
        $this->assertEquals("warning", WBWBootstrapInterface::BOOTSTRAP_WARNING);
    }
}
