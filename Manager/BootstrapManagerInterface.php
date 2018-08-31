<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Manager;

use WBW\Bundle\BootstrapBundle\Provider\BootstrapProviderInterface;

/**
 * Bootstrap manager interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Manager
 */
interface BootstrapManagerInterface {

    /**
     * Register a provider.
     *
     * @param BootstrapProviderInterface $provider The provider
     * @return void
     */
    public function registerProvider(BootstrapProviderInterface $provider);
}
