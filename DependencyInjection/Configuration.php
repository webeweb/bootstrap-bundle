<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use WBW\Bundle\CoreBundle\DependencyInjection\ConfigurationHelper;

/**
 * Configuration.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface {

    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder() {

        $assets  = ConfigurationHelper::loadYamlConfig(__DIR__, "assets");
        $plugins = $assets["assets"]["wbw.bootstrap.asset.bootstrap"]["plugins"];

        $treeBuilder = new TreeBuilder(WBWBootstrapExtension::EXTENSION_ALIAS);

        $rootNode = ConfigurationHelper::getRootNode($treeBuilder, WBWBootstrapExtension::EXTENSION_ALIAS);
        $rootNode
            ->children()
                ->booleanNode("twig")->defaultTrue()->info("Load Twig extensions")->end()
                ->integerNode("version")->defaultValue(4)->info("Version")->min(3)->max(5)->end()
                ->arrayNode("plugins")->info("Bootstrap plug-ins")
                    ->prototype("scalar")
                        ->validate()
                            ->ifNotInArray(array_keys($plugins))
                            ->thenInvalid("The Bootstrap plug-in %s is not supported. Please choose one of " . json_encode(array_keys($plugins)))
                        ->end()
                    ->end()
                ->end()
                ->arrayNode("locales")->addDefaultsIfNotSet()
                    ->children()
                        ->variableNode("bootstrap_markdown")->defaultValue("en")->info("Bootstrap Markdown locale")
                            ->validate()
                                ->ifNotInArray($plugins["bootstrap_markdown"]["locales"])
                                ->thenInvalid("The Bootstrap Markdown locale %s is not supported. Please choose one of " . json_encode($plugins["bootstrap_markdown"]["locales"]))
                            ->end()
                        ->end()
                        ->variableNode("bootstrap_wysiwyg")->defaultValue("en-US")->info("Bootstrap WYSIWYG locale")
                            ->validate()
                                ->ifNotInArray($plugins["bootstrap_wysiwyg"]["locales"])
                                ->thenInvalid("The Bootstrap WYSIWYG locale %s is not supported. Please choose one of " . json_encode($plugins["bootstrap_wysiwyg"]["locales"]))
                            ->end()
                        ->end()
                        ->variableNode("summernote")->defaultValue("en-US")->info("Summernote locale")
                            ->validate()
                                ->ifNotInArray($plugins["summernote"]["locales"])
                                ->thenInvalid("The Summernote locale %s is not supported. Please choose one of " . json_encode($plugins["summernote"]["locales"]))
                            ->end()
                        ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }

}
