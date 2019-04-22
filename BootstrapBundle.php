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
use WBW\Bundle\BootstrapBundle\DependencyInjection\BootstrapExtension;
use WBW\Bundle\CoreBundle\Provider\AssetsProviderInterface;

/**
 * Bootstrap bundle.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle
 */
class BootstrapBundle extends Bundle implements AssetsProviderInterface {

    /**
     * {@inheritdoc}
     */
    public function getAssetsRelativeDirectory() {
        return "/Resources/assets";
    }

    /**
     * {@inheritDoc}
     */
    public function getContainerExtension() {
        return new BootstrapExtension();
    }
}
