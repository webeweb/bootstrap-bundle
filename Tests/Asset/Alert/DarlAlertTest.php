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
use WBW\Bundle\BootstrapBundle\Asset\Alert\DarkAlert;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Dark alert test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Asset\Alert
 */
class DarkAlertTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DarkAlert();

        $this->assertEquals(AlertInterface::ALERT_TYPE_DARK, $obj->getType());
    }
}
