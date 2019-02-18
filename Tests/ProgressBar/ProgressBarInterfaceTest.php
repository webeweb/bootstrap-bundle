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

use WBW\Bundle\BootstrapBundle\BootstrapInterface;
use WBW\Bundle\BootstrapBundle\ProgressBar\ProgressBarInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

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
    public function testConstruct() {

        $this->assertEquals(BootstrapInterface::BOOTSTRAP_DANGER, ProgressBarInterface::PROGRESS_BAR_TYPE_DANGER);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_INFO, ProgressBarInterface::PROGRESS_BAR_TYPE_INFO);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_SUCCESS, ProgressBarInterface::PROGRESS_BAR_TYPE_SUCCESS);
        $this->assertEquals(BootstrapInterface::BOOTSTRAP_WARNING, ProgressBarInterface::PROGRESS_BAR_TYPE_WARNING);
    }
}
