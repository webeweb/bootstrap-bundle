<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Helper;

use WBW\Bundle\BootstrapBundle\Assets\AlertInterface;

/**
 * Alert helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Helper
 */
class AlertHelper {

    /**
     * Enumerates the types.
     *
     * @return string[] Returns the types enumeration.
     */
    public static function enumTypes(): array {
        return [
            AlertInterface::ALERT_TYPE_DANGER,
            AlertInterface::ALERT_TYPE_DARK,
            AlertInterface::ALERT_TYPE_INFO,
            AlertInterface::ALERT_TYPE_LIGHT,
            AlertInterface::ALERT_TYPE_PRIMARY,
            AlertInterface::ALERT_TYPE_SECONDARY,
            AlertInterface::ALERT_TYPE_SUCCESS,
            AlertInterface::ALERT_TYPE_WARNING,
        ];
    }
}
