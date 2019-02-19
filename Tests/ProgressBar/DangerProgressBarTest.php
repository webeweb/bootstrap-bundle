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

use WBW\Bundle\BootstrapBundle\ProgressBar\DangerProgressBar;
use WBW\Bundle\BootstrapBundle\ProgressBar\ProgressBarInterface;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Danger progress bar test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\ProgressBar
 */
class DangerProgressBarTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DangerProgressBar();

        $this->assertEquals(ProgressBarInterface::PROGRESS_BAR_TYPE_DANGER, $obj->getType());
    }
}