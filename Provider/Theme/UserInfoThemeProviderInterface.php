<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Provider\Theme;

use WBW\Bundle\BootstrapBundle\Provider\ThemeProviderInterface;

/**
 * User info theme provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Provider\Theme
 */
interface UserInfoThemeProviderInterface extends ThemeProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.provider.theme.userinfo";

    /**
     * Provides a register link.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function provideRegisterLink();

    /**
     * Provides a resseting link.
     *
     * @return bool Returns true in case of success, false otherwise.
     */
    public function provideResettingLink();
}
