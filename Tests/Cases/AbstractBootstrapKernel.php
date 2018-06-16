<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Tests\Cases;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Abstract Bootstrap kernel.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Cases
 * @abstract
 */
abstract class AbstractBootstrapKernel extends Kernel {

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader) {
        $loader->load($this->getTestsDir() . "/Fixtures/App/config/config_test.yml");
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheDir() {
        return $this->getTestsDir() . "/Fixtures/App/var/cache";
    }

    /**
     * {@inheritdoc}
     */
    public function getLogDir() {
        return $this->getTestsDir() . "/Fixtures/App/var/logs";
    }

    /**
     * Get the Tests directory.
     *
     * @return string Returns the Tests directory.
     * @abstract
     */
    abstract public function getTestsDir();
}
