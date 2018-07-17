<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Bootstrap bundle.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle
 */
class BootstrapBundle extends Bundle {

    /**
     * Bootstrap "Danger".
     *
     * @var string
     */
    const BOOTSTRAP_DANGER = "danger";

    /**
     * Bootstrap "Default".
     *
     * @var string
     */
    const BOOTSTRAP_DEFAULT = "default";

    /**
     * Bootstrap "Info".
     *
     * @var string
     */
    const BOOTSTRAP_INFO = "info";

    /**
     * Bootstrap "Primary".
     *
     * @var string
     */
    const BOOTSTRAP_PRIMARY = "primary";

    /**
     * Bootstrap "Success".
     *
     * @var string
     */
    const BOOTSTRAP_SUCCESS = "success";

    /**
     * Bootstrap "Warning".
     *
     * @var string
     */
    const BOOTSTRAP_WARNING = "warning";

    /**
     * Get the Bootstrap constants.
     *
     * @return array Returns the Bootstrap constants.
     */
    public static function getBootstrapConstants() {
        return [
            self::BOOTSTRAP_DANGER,
            self::BOOTSTRAP_DEFAULT,
            self::BOOTSTRAP_INFO,
            self::BOOTSTRAP_PRIMARY,
            self::BOOTSTRAP_SUCCESS,
            self::BOOTSTRAP_WARNING,
        ];
    }

}
