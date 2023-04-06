<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;
use WBW\Bundle\CoreBundle\Tests\AbstractKernel;

/**
 * Test kernel.
 *
 * @author webeweb <https://github.com/webeweb>
 */
class TestKernel extends AbstractKernel {

    /**
     * {@inheritdoc}
     */
    public function registerBundles(): array {

        return [
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new WBW\Bundle\BootstrapBundle\WBWBootstrapBundle(),
            new WBW\Bundle\CoreBundle\WBWCoreBundle(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader): void {

        // TODO: Remove when dropping support for Symfony 5
        if (6 <= Kernel::MAJOR_VERSION) {
            parent::registerContainerConfiguration($loader);
            return;
        }

        $loader->load(getcwd() . "/Tests/Fixtures/app/config/config_test.old.yml");
    }
}
