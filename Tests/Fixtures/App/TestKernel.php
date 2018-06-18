<?php

/**
 * This file is part of the jquery-datatables-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
use WBW\Bundle\BootstrapBundle\Tests\Cases\AbstractBootstrapKernel;

/**
 * Test kernel.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\JQuery\DataTablesBundle\Tests\Fixtures\App
 * @final
 */
final class TestKernel extends AbstractBootstrapKernel {

    /**
     * {@inheritdoc}
     */
    public function registerBundles() {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new WBW\Bundle\BootstrapBundle\BootstrapBundle(),
            new WBW\Bundle\SyntaxHighlighterBundle\SyntaxHighlighterBundle(),
        ];
        return $bundles;
    }

    /**
     * {@inheritdoc}
     */
    public function getTestsDir() {
        return __DIR__ . "/../..";
    }

}
