<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Button;

use WBW\Bundle\BootstrapBundle\Button\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Button interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package Button
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

        $this->assertEquals("danger", ButtonInterface::BUTTON_TYPE_DANGER);
        $this->assertEquals("default", ButtonInterface::BUTTON_TYPE_DEFAULT);
        $this->assertEquals("info", ButtonInterface::BUTTON_TYPE_INFO);
        $this->assertEquals("link", ButtonInterface::BUTTON_TYPE_LINK);
        $this->assertEquals("primary", ButtonInterface::BUTTON_TYPE_PRIMARY);
        $this->assertEquals("success", ButtonInterface::BUTTON_TYPE_SUCCESS);
        $this->assertEquals("warning", ButtonInterface::BUTTON_TYPE_WARNING);
    }
}
