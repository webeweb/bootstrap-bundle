<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Provider;

/**
 * User info provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Provider
 */
interface UserInfoProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.provider.userinfo";

    /**
     * Provides a register link.
     *
     * @return boolean Returns true in case of success, false otherwise.
     */
    public function provideRegisterLink();

    /**
     * Provides a resseting link.
     *
     * @return boolean Returns true in case of success, false otherwise.
     */
    public function provideResettingLink();

    /**
     * Get the view.
     *
     * @return string Returns the view.
     */
    public function getView();
}
