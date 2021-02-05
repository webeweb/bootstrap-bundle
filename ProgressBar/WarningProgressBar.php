<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\ProgressBar;

/**
 * Warning progress bar.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\ProgressBar
 */
class WarningProgressBar extends AbstractProgressBar {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(static::PROGRESS_BAR_TYPE_WARNING);
    }
}
