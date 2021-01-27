<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\ProgressBar;

use WBW\Bundle\BootstrapBundle\ProgressBar\ProgressBarInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\WBWBootstrapInterface;

/**
 * ProgressBar interface test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\ProgressBar
 */
class ProgressBarInterfaceTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_DANGER, ProgressBarInterface::PROGRESS_BAR_TYPE_DANGER);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_INFO, ProgressBarInterface::PROGRESS_BAR_TYPE_INFO);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_SUCCESS, ProgressBarInterface::PROGRESS_BAR_TYPE_SUCCESS);
        $this->assertEquals(WBWBootstrapInterface::BOOTSTRAP_WARNING, ProgressBarInterface::PROGRESS_BAR_TYPE_WARNING);
    }
}
