<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle;

/**
 * Bootstrap interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle
 */
interface BootstrapInterface {

    /**
     * Bootstrap "danger".
     *
     * @var string
     */
    const BOOTSTRAP_DANGER = "danger";

    /**
     * Bootstrap "default".
     *
     * @var string
     */
    const BOOTSTRAP_DEFAULT = "default";

    /**
     * Bootstrap "info".
     *
     * @var string
     */
    const BOOTSTRAP_INFO = "info";

    /**
     * Bootstrap "primary".
     *
     * @var string
     */
    const BOOTSTRAP_PRIMARY = "primary";

    /**
     * Bootstrap "success".
     *
     * @var string
     */
    const BOOTSTRAP_SUCCESS = "success";

    /**
     * Bootstrap "warning".
     *
     * @var string
     */
    const BOOTSTRAP_WARNING = "warning";
}
