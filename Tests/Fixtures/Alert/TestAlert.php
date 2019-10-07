<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Fixtures\Alert;

use WBW\Bundle\BootstrapBundle\Alert\AbstractAlert;

/**
 * Test alert.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\Alert
 */
class TestAlert extends AbstractAlert {

    /**
     * Constructor.
     *
     * @param string $type The type.
     */
    public function __construct($type) {
        parent::__construct($type);
    }
}
