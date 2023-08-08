<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use WBW\Bundle\CoreBundle\Provider\AssetsProviderInterface;

/**
 * Bootstrap bundle.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle
 */
class WBWBootstrapBundle extends Bundle implements AssetsProviderInterface {

    /**
     * Bootstrap type "danger".
     *
     * @var string
     */
    const BOOTSTRAP_TYPE_DANGER = "danger";

    /**
     * Bootstrap type "dark".
     *
     * @var string
     */
    const BOOTSTRAP_TYPE_DARK = "dark";

    /**
     * Bootstrap type "default".
     *
     * @var string
     */
    const BOOTSTRAP_TYPE_DEFAULT = "default";

    /**
     * Bootstrap type "info".
     *
     * @var string
     */
    const BOOTSTRAP_TYPE_INFO = "info";

    /**
     * Bootstrap type "light".
     *
     * @var string
     */
    const BOOTSTRAP_TYPE_LIGHT = "light";

    /**
     * Bootstrap type "primary".
     *
     * @var string
     */
    const BOOTSTRAP_TYPE_PRIMARY = "primary";

    /**
     * Bootstrap type "secondary".
     *
     * @var string
     */
    const BOOTSTRAP_TYPE_SECONDARY = "secondary";

    /**
     * Bootstrap type "success".
     *
     * @var string
     */
    const BOOTSTRAP_TYPE_SUCCESS = "success";

    /**
     * Bootstrap type "warning".
     *
     * @var string
     */
    const BOOTSTRAP_TYPE_WARNING = "warning";

    /**
     * Bootstrap version 3.
     *
     * @var string
     */
    const BOOTSTRAP_VERSION_3 = "3.4.1";

    /**
     * Bootstrap version 4.
     *
     * @var string
     */
    const BOOTSTRAP_VERSION_4 = "4.6.2";

    /**
     * Bootstrap version 5.
     *
     * @var string
     */
    const BOOTSTRAP_VERSION_5 = "5.3.1";

    /**
     * Translation domain.
     *
     * @var string
     */
    const TRANSLATION_DOMAIN = "WBWBootstrapBundle";

    /**
     * {@inheritDoc}
     */
    public function getAssetsRelativeDirectory(): string {
        return self::ASSETS_RELATIVE_DIRECTORY;
    }

    /**
     * Get the translation domain.
     *
     * @return string Returns the translation domain.
     */
    public static function getTranslationDomain(): string {
        return self::TRANSLATION_DOMAIN;
    }
}
