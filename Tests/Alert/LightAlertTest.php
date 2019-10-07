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
use WBW\Bundle\BootstrapBundle\Alert\LightAlert;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Light alert test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Alert
 */
class LightAlertTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LightAlert();

        $this->assertEquals(AlertInterface::ALERT_TYPE_LIGHT, $obj->getType());
    }
}
