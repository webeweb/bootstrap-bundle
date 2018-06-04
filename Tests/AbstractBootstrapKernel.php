<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Abstract Bootstrap kernel.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests
 * @abstract
 */
abstract class AbstractBootstrapKernel extends Kernel {

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader) {
        $loader->load(__DIR__ . "/Fixtures/App/config/config_test.yml");
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheDir() {
        return __DIR__ . "/Fixtures/App/var/cache";
    }

    /**
     * {@inheritdoc}
     */
    public function getLogDir() {
        return __DIR__ . "/Fixtures/App/var/logs";
    }

}
