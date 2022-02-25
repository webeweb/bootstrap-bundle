<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Asset\Button;

use WBW\Bundle\BootstrapBundle\Asset\Button\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Asset\Button\DangerButton;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Danger button test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Asset\Button
 */
class DangerButtonTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new DangerButton();

        $this->assertEquals(ButtonInterface::BUTTON_TYPE_DANGER, $obj->getType());
    }
}
