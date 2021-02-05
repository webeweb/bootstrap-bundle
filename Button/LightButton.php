<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Button;

/**
 * Light button.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Button
 */
class LightButton extends AbstractButton {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(static::BUTTON_TYPE_LIGHT);
    }
}
