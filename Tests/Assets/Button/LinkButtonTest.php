<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Assets\Button;

use WBW\Bundle\BootstrapBundle\Assets\Button\LinkButton;
use WBW\Bundle\BootstrapBundle\Assets\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Link button test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Assets\Button
 */
class LinkButtonTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new LinkButton();

        $this->assertEquals(ButtonInterface::BUTTON_TYPE_LINK, $obj->getType());
    }
}
