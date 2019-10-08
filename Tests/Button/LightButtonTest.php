<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Button;

use WBW\Bundle\BootstrapBundle\Button\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Button\LightButton;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Light button test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Button
 */
class LightButtonTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new LightButton();

        $this->assertEquals(ButtonInterface::BUTTON_TYPE_LIGHT, $obj->getType());
    }
}
