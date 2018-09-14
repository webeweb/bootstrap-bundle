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

use WBW\Bundle\BootstrapBundle\Provider\ProviderInterface;

/**
 * Abstract manager.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Manager
 * @abstract
 */
abstract class AbstractManager implements ManagerInterface {

    /**
     * Providers.
     *
     * @var ProviderInterface[]
     */
    private $providers;

    /**
     * Constructor.
     */
    protected function __construct() {
        $this->setProviders([]);
    }

    /**
     * Add a provider.
     *
     * @param ProviderInterface $provider The provider.
     * @return ManagerInterface Returns this manager.
     */
    public function addProvider(ProviderInterface $provider) {
        $this->providers[] = $provider;
        return $this;
    }

    /**
     * Get the providers.
     *
     * @return ProviderInterface[] Returns the provider.
     */
    public function getProviders() {
        return $this->providers;
    }

    /**
     * {@inheritdoc}
     */
    public function registerProvider(ProviderInterface $provider) {
        $this->addProvider($provider);
    }

    /**
     * Set the providers.
     *
     * @param ProviderInterface $providers The providers.
     * @return ManagerInterface Returns this manager.
     */
    protected function setProviders(array $providers) {
        $this->providers = $providers;
        return $this;
    }

}
