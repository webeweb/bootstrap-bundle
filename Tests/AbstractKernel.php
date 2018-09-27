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
abstract class AbstractKernel extends Kernel {

    /**
     * Get the bundle directory.
     *
     * @return string Returns the bundle directory.
     */
    protected function getBundleDir() {
        return getcwd();
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheDir() {
        return $this->getBundleDir() . "/Tests/Fixtures/app/var/cache";
    }

    /**
     * {@inheritdoc}
     */
    public function getLogDir() {
        return $this->getBundleDir() . "/Tests/Fixtures/app/var/logs";
    }

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader) {
        $loader->load($this->getBundleDir() . "/Tests/Fixtures/app/config/config_test.yml");
    }

}
