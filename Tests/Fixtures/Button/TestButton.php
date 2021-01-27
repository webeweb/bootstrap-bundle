<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Fixtures\Button;

use WBW\Bundle\BootstrapBundle\Button\AbstractButton;

/**
 * Test button.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\Button
 */
class TestButton extends AbstractButton {

    /**
     * Constructor.
     *
     * @param string|null $type The type.
     */
    public function __construct(?string $type) {
        parent::__construct($type);
    }
}
