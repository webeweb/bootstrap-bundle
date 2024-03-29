<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license basicrmation, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Assets\ProgressBar;

use WBW\Bundle\BootstrapBundle\Assets\ProgressBar\BasicProgressBar;
use WBW\Bundle\BootstrapBundle\Tests\AbstractTestCase;

/**
 * Basic progress bar test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Assets\ProgressBar
 */
class BasicProgressBarTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new BasicProgressBar();

        $this->assertNull($obj->getType());
    }
}
