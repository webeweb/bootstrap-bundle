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
use WBW\Bundle\BootstrapBundle\Asset\Alert\WarningAlert;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Warning alert test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Asset\Alert
 */
class WarningAlertTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new WarningAlert();

        $this->assertEquals(AlertInterface::ALERT_TYPE_WARNING, $obj->getType());
    }
}
