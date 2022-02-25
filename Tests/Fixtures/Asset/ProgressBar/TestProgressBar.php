<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Fixtures\Asset\ProgressBar;

use WBW\Bundle\BootstrapBundle\Asset\ProgressBar\AbstractProgressBar;

/**
 * Test progress bar.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\Asset\ProgressBar
 */
class TestProgressBar extends AbstractProgressBar {

    /**
     * Constructor.
     *
     * @param string|null $type The type
     */
    public function __construct(?string $type) {
        parent::__construct($type);
    }
}
