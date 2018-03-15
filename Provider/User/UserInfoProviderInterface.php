<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Provider\User;

/**
 * User info provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Provider\User
 */
interface UserInfoProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = 'webeweb.bundle.bootstrapbundle.provider.userinfo';

    /**
     * Get the template.
     *
     * @return string Returns the template.
     */
    public function getTemplate();

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
}
