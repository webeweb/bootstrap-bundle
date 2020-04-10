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
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\WBWBootstrapInterface;

/**
 * Button interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Button
 */
class ButtonInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $this->assertEquals("lg", ButtonInterface::BUTTON_SIZE_LG);
        $this->assertEquals("sm", ButtonInterface::BUTTON_SIZE_SM);
        $this->assertEquals("xs", ButtonInterface::BUTTON_SIZE_XS);

        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_DANGER, ButtonInterface::BUTTON_TYPE_DANGER);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_DARK, ButtonInterface::BUTTON_TYPE_DARK);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_DEFAULT, ButtonInterface::BUTTON_TYPE_DEFAULT);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_INFO, ButtonInterface::BUTTON_TYPE_INFO);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_LIGHT, ButtonInterface::BUTTON_TYPE_LIGHT);
        $this->assertEquals("link", ButtonInterface::BUTTON_TYPE_LINK);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_PRIMARY, ButtonInterface::BUTTON_TYPE_PRIMARY);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_SECONDARY, ButtonInterface::BUTTON_TYPE_SECONDARY);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_SUCCESS, ButtonInterface::BUTTON_TYPE_SUCCESS);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_WARNING, ButtonInterface::BUTTON_TYPE_WARNING);
    }
}
