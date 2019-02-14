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
 * Button enumerator.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Button
 */
class ButtonEnumerator {

    /**
     * Enumerates the sizes.
     *
     * @return array Returns the sizes enumeration.
     */
    public static function enumSizes() {
        return [
            ButtonInterface::BUTTON_SIZE_LG,
            ButtonInterface::BUTTON_SIZE_SM,
            ButtonInterface::BUTTON_SIZE_XS,
        ];
    }

    /**
     * Enumerates the types.
     *
     * @return array Returns the types enumeration.
     */
    public static function enumTypes() {
        return [
            ButtonInterface::BUTTON_TYPE_DANGER,
            ButtonInterface::BUTTON_TYPE_DEFAULT,
            ButtonInterface::BUTTON_TYPE_INFO,
            ButtonInterface::BUTTON_TYPE_LINK,
            ButtonInterface::BUTTON_TYPE_PRIMARY,
            ButtonInterface::BUTTON_TYPE_SUCCESS,
            ButtonInterface::BUTTON_TYPE_WARNING,
        ];
    }
}
