<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Alert;

use WBW\Bundle\BootstrapBundle\Alert\AlertInterface;
use WBW\Bundle\BootstrapBundle\BootstrapInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Alert interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Alert
 */
class AlertInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $this->assertEquals(BootstrapInterface::BOOTSTRAP_DANGER, AlertInterface::ALERT_TYPE_DANGER);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_DARK, AlertInterface::ALERT_TYPE_DARK);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_INFO, AlertInterface::ALERT_TYPE_INFO);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_LIGHT, AlertInterface::ALERT_TYPE_LIGHT);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_PRIMARY, AlertInterface::ALERT_TYPE_PRIMARY);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_SECONDARY, AlertInterface::ALERT_TYPE_SECONDARY);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_SUCCESS, AlertInterface::ALERT_TYPE_SUCCESS);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_WARNING, AlertInterface::ALERT_TYPE_WARNING);
    }
}
