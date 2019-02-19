<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Fixtures\ProgressBar;

use WBW\Bundle\BootstrapBundle\ProgressBar\AbstractProgressBar;

/**
 * Test progress bar.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\ProgressBar
 */
class TestProgressBar extends AbstractProgressBar {

    /**
     * Constructor.
     *
     * @param string $type The type
     */
    public function __construct($type) {
        parent::__construct($type);
    }
}
