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

use WBW\Bundle\BootstrapBundle\BootstrapInterface;
use WBW\Bundle\BootstrapBundle\Button\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

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
    public function testConstruct() {

        $this->assertEquals("lg", ButtonInterface::BUTTON_SIZE_LG);
        $this->assertEquals("sm", ButtonInterface::BUTTON_SIZE_SM);
        $this->assertEquals("xs", ButtonInterface::BUTTON_SIZE_XS);

        $this->assertEquals(BootstrapInterface::BOOTSTRAP_DANGER, ButtonInterface::BUTTON_TYPE_DANGER);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_DEFAULT, ButtonInterface::BUTTON_TYPE_DEFAULT);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_INFO, ButtonInterface::BUTTON_TYPE_INFO);
        $this->assertEquals("link", ButtonInterface::BUTTON_TYPE_LINK);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_PRIMARY, ButtonInterface::BUTTON_TYPE_PRIMARY);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_SUCCESS, ButtonInterface::BUTTON_TYPE_SUCCESS);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_WARNING, ButtonInterface::BUTTON_TYPE_WARNING);
    }
}
