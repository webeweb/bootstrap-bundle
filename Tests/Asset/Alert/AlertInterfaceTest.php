<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Asset\Alert;

use WBW\Bundle\BootstrapBundle\Asset\Alert\AlertInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\WBWBootstrapInterface;

/**
 * Alert interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Asset\Alert
 */
class AlertInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_DANGER, AlertInterface::ALERT_TYPE_DANGER);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_DARK, AlertInterface::ALERT_TYPE_DARK);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_INFO, AlertInterface::ALERT_TYPE_INFO);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_LIGHT, AlertInterface::ALERT_TYPE_LIGHT);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_PRIMARY, AlertInterface::ALERT_TYPE_PRIMARY);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_SECONDARY, AlertInterface::ALERT_TYPE_SECONDARY);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_SUCCESS, AlertInterface::ALERT_TYPE_SUCCESS);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_WARNING, AlertInterface::ALERT_TYPE_WARNING);
    }
}
