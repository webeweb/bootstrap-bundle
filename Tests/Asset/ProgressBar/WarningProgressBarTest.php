<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Asset\ProgressBar;

use WBW\Bundle\BootstrapBundle\Asset\ProgressBar\ProgressBarInterface;
use WBW\Bundle\BootstrapBundle\Asset\ProgressBar\WarningProgressBar;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Warning progress bar test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Asset\ProgressBar
 */
class WarningProgressBarTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new WarningProgressBar();

        $this->assertEquals(ProgressBarInterface::PROGRESS_BAR_TYPE_WARNING, $obj->getType());
    }
}
