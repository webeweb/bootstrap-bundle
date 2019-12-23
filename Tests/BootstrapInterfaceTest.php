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

use WBW\Bundle\BootstrapBundle\BootstrapInterface;
use WBW\Bundle\BootstrapBundle\WBWBootstrapInterface;

/**
 * Bootstrap interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests
 */
class BootstrapInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_VERSION_3, BootstrapInterface::BOOTSTRAP_VERSION_3);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_VERSION_4, BootstrapInterface::BOOTSTRAP_VERSION_4);

        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_DANGER, BootstrapInterface::BOOTSTRAP_DANGER);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_DARK, BootstrapInterface::BOOTSTRAP_DARK);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_DEFAULT, BootstrapInterface::BOOTSTRAP_DEFAULT);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_INFO, BootstrapInterface::BOOTSTRAP_INFO);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_LIGHT, BootstrapInterface::BOOTSTRAP_LIGHT);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_PRIMARY, BootstrapInterface::BOOTSTRAP_PRIMARY);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_SECONDARY, BootstrapInterface::BOOTSTRAP_SECONDARY);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_SUCCESS, BootstrapInterface::BOOTSTRAP_SUCCESS);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_WARNING, BootstrapInterface::BOOTSTRAP_WARNING);
    }
}
