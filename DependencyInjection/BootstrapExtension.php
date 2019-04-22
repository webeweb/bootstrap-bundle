<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Bootstrap extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\DependencyInjection
 */
class BootstrapExtension extends Extension {

    /**
     * {@inheritDoc}
     */
    public function getAlias() {
        return "wbw_" . parent::getAlias();
    }

    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container) {

        // Create the file locator.
        $fileLocator = new FileLocator(__DIR__ . "/../Resources/config");

        // Load the services.
        $serviceLoader = new YamlFileLoader($container, $fileLocator);
        $serviceLoader->load("services.yml");
    }
}
