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

use WBW\Bundle\BootstrapBundle\Asset\Alert\AlertEnumerator;
use WBW\Bundle\BootstrapBundle\Asset\Alert\AlertInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Alert enumerator test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Asset\Alert
 */
class AlertEnumeratorTest extends AbstractTestCase {

    /**
     * Tests the enumTypes() method.
     *
     * @return void
     */
    public function testEnumTypes(): void {

        $res = [
            AlertInterface::ALERT_TYPE_DANGER,
            AlertInterface::ALERT_TYPE_DARK,
            AlertInterface::ALERT_TYPE_INFO,
            AlertInterface::ALERT_TYPE_LIGHT,
            AlertInterface::ALERT_TYPE_PRIMARY,
            AlertInterface::ALERT_TYPE_SECONDARY,
            AlertInterface::ALERT_TYPE_SUCCESS,
            AlertInterface::ALERT_TYPE_WARNING,
        ];
        $this->assertEquals($res, AlertEnumerator::enumTypes());
    }

}
