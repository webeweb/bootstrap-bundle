<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Assets\Alert;

use WBW\Bundle\BootstrapBundle\Assets\Alert\SuccessAlert;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Library\Symfony\Assets\AlertInterface as BaseAlertInterface;

/**
 * Success alert test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Assets\Alert
 */
class SuccessAlertTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SuccessAlert();

        $this->assertEquals(BaseAlertInterface::ALERT_TYPE_SUCCESS, $obj->getType());
    }
}
