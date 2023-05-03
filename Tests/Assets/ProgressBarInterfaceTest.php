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

use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\WBWBootstrapBundle;
use WBW\Library\Symfony\Assets\ProgressBarInterface as BaseProgressBarInterface;

/**
 * Progress bar interface test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Assets
 */
class ProgressBarInterfaceTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals(WBWBootstrapBundle::BOOTSTRAP_TYPE_DANGER, BaseProgressBarInterface::PROGRESS_BAR_TYPE_DANGER);
        $this->assertEquals(WBWBootstrapBundle::BOOTSTRAP_TYPE_INFO, BaseProgressBarInterface::PROGRESS_BAR_TYPE_INFO);
        $this->assertEquals(WBWBootstrapBundle::BOOTSTRAP_TYPE_SUCCESS, BaseProgressBarInterface::PROGRESS_BAR_TYPE_SUCCESS);
        $this->assertEquals(WBWBootstrapBundle::BOOTSTRAP_TYPE_WARNING, BaseProgressBarInterface::PROGRESS_BAR_TYPE_WARNING);
    }
}
