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

        $this->assertEquals("danger", BootstrapInterface::BOOTSTRAP_DANGER);
        $this->assertEquals("default", BootstrapInterface::BOOTSTRAP_DEFAULT);
        $this->assertEquals("info", BootstrapInterface::BOOTSTRAP_INFO);
        $this->assertEquals("primary", BootstrapInterface::BOOTSTRAP_PRIMARY);
        $this->assertEquals("success", BootstrapInterface::BOOTSTRAP_SUCCESS);
        $this->assertEquals("warning", BootstrapInterface::BOOTSTRAP_WARNING);
    }
}
