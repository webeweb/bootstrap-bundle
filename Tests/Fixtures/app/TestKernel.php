<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use WBW\Bundle\CoreBundle\Tests\AbstractKernel;

/**
 * Test kernel.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Fixtures\App
 */
class TestKernel extends AbstractKernel {

    /**
     * {@inheritdoc}
     */
    public function registerBundles() {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new WBW\Bundle\CoreBundle\CoreBundle(),
            new WBW\Bundle\BootstrapBundle\BootstrapBundle(),
            new WBW\Bundle\SyntaxHighlighterBundle\SyntaxHighlighterBundle(),
        ];
        return $bundles;
    }

}
