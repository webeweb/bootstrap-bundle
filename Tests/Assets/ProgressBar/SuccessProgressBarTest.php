<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Assets\ProgressBar;

use WBW\Bundle\BootstrapBundle\Assets\ProgressBar\SuccessProgressBar;
use WBW\Bundle\BootstrapBundle\Assets\ProgressBarInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Success progress bar test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Assets\ProgressBar
 */
class SuccessProgressBarTest extends AbstractTestCase {

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new SuccessProgressBar();

        $this->assertEquals(ProgressBarInterface::PROGRESS_BAR_TYPE_SUCCESS, $obj->getType());
    }
}
