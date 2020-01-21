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
 * @deprecated since 3.5.0, use {@see WBW\Bundle\BootstrapBundle\WBWBootstrapInterface} instead.
 */
interface BootstrapInterface {

    /**
     * Bootstrap "danger".
     *
     * @var string
     */
    const BOOTSTRAP_DANGER = WBWBootstrapInterface::BOOTSTRAP_DANGER;

    /**
     * Bootstrap "dark".
     *
     * @var string
     */
    const BOOTSTRAP_DARK = WBWBootstrapInterface::BOOTSTRAP_DARK;

    /**
     * Bootstrap "default".
     *
     * @var string
     */
    const BOOTSTRAP_DEFAULT = WBWBootstrapInterface::BOOTSTRAP_DEFAULT;

    /**
     * Bootstrap "info".
     *
     * @var string
     */
    const BOOTSTRAP_INFO = WBWBootstrapInterface::BOOTSTRAP_INFO;

    /**
     * Bootstrap "light".
     *
     * @var string
     */
    const BOOTSTRAP_LIGHT = WBWBootstrapInterface::BOOTSTRAP_LIGHT;

    /**
     * Bootstrap "primary".
     *
     * @var string
     */
    const BOOTSTRAP_PRIMARY = WBWBootstrapInterface::BOOTSTRAP_PRIMARY;

    /**
     * Bootstrap "secondary".
     *
     * @var string
     */
    const BOOTSTRAP_SECONDARY = WBWBootstrapInterface::BOOTSTRAP_SECONDARY;

    /**
     * Bootstrap "success".
     *
     * @var string
     */
    const BOOTSTRAP_SUCCESS = WBWBootstrapInterface::BOOTSTRAP_SUCCESS;

    /**
     * Bootstrap version 3.
     *
     * @var string
     */
    const BOOTSTRAP_VERSION_3 = WBWBootstrapInterface::BOOTSTRAP_VERSION_3;

    /**
     * Bootstrap version 4.
     *
     * @var string
     */
    const BOOTSTRAP_VERSION_4 = WBWBootstrapInterface::BOOTSTRAP_VERSION_4;

    /**
     * Bootstrap "warning".
     *
     * @var string
     */
    const BOOTSTRAP_WARNING = WBWBootstrapInterface::BOOTSTRAP_WARNING;
}
