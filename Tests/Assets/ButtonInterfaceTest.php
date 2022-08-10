<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Assets;

use WBW\Bundle\BootstrapBundle\Assets\ButtonInterface;
use WBW\Library\Symfony\Assets\ButtonInterface as BaseButtonInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\WBWBootstrapInterface;

/**
 * Button interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Assets
 */
class ButtonInterfaceTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("lg", ButtonInterface::BUTTON_SIZE_LG);
        $this->assertEquals("sm", ButtonInterface::BUTTON_SIZE_SM);
        $this->assertEquals("xs", ButtonInterface::BUTTON_SIZE_XS);

        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_TYPE_DANGER, BaseButtonInterface::BUTTON_TYPE_DANGER);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_TYPE_DARK, ButtonInterface::BUTTON_TYPE_DARK);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_TYPE_DEFAULT, ButtonInterface::BUTTON_TYPE_DEFAULT);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_TYPE_INFO, BaseButtonInterface::BUTTON_TYPE_INFO);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_TYPE_LIGHT, ButtonInterface::BUTTON_TYPE_LIGHT);
        $this->assertEquals("link", ButtonInterface::BUTTON_TYPE_LINK);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_TYPE_PRIMARY, ButtonInterface::BUTTON_TYPE_PRIMARY);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_TYPE_SECONDARY, ButtonInterface::BUTTON_TYPE_SECONDARY);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_TYPE_SUCCESS, BaseButtonInterface::BUTTON_TYPE_SUCCESS);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_TYPE_WARNING, BaseButtonInterface::BUTTON_TYPE_WARNING);
    }
}
