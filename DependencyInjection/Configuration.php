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

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use WBW\Bundle\CoreBundle\Config\ConfigurationHelper;

/**
 * Configuration.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface {

    /**
     * Add the Bootstrap Datepicker locales.
     *
     * @param ArrayNodeDefinition $node The node.
     * @param array $plugins The plugins.
     * @return void
     */
    private function addBootstrapDatepickerLocales(ArrayNodeDefinition $node, array $plugins): void {

        $node
            ->children()
                ->variableNode("bootstrap_datepicker")->defaultValue("en-GB")->info("Bootstrap Datepicker locale")
                    ->validate()
                        ->ifNotInArray($plugins["bootstrap_datepicker"]["locales"])
                        ->thenInvalid("The Bootstrap Datepicker locale %s is not supported. Please choose one of " . json_encode($plugins["bootstrap_datepicker"]["locales"]))
                    ->end()
                ->end()
            ->end();
    }

    /**
     * Add the Bootstrap Markdown locales.
     *
     * @param ArrayNodeDefinition $node The node.
     * @param array $plugins The plugins.
     * @return void
     */
    private function addBootstrapMarkdownLocales(ArrayNodeDefinition $node, array $plugins): void {

        $node
            ->children()
                ->variableNode("bootstrap_markdown")->info("Bootstrap Markdown locale")
                    ->validate()
                        ->ifNotInArray($plugins["bootstrap_markdown"]["locales"])
                        ->thenInvalid("The Bootstrap Markdown locale %s is not supported. Please choose one of " . json_encode($plugins["bootstrap_markdown"]["locales"]))
                    ->end()
                ->end()
            ->end();
    }

    /**
     * Add the Bootstrap Select locales.
     *
     * @param ArrayNodeDefinition $node The node.
     * @param array $plugins The plugins.
     * @return void
     */
    private function addBootstrapSelectLocales(ArrayNodeDefinition $node, array $plugins): void {

        $node
            ->children()
                ->variableNode("bootstrap_select")->defaultValue("en_US")->info("Bootstrap Select locale")
                    ->validate()
                        ->ifNotInArray($plugins["bootstrap_select"]["locales"])
                        ->thenInvalid("The Bootstrap Select locale %s is not supported. Please choose one of " . json_encode($plugins["bootstrap_select"]["locales"]))
                    ->end()
                ->end()
            ->end();
    }

    /**
     * Add the Bootstrap WYSIWYG locales.
     *
     * @param ArrayNodeDefinition $node The node.
     * @param array $plugins The plugins.
     * @return void
     */
    private function addBootstrapWysiwygLocales(ArrayNodeDefinition $node, array $plugins): void {

        $node
            ->children()
                ->variableNode("bootstrap_wysiwyg")->defaultValue("en-US")->info("Bootstrap WYSIWYG locale")
                    ->validate()
                        ->ifNotInArray($plugins["bootstrap_wysiwyg"]["locales"])
                        ->thenInvalid("The Bootstrap WYSIWYG locale %s is not supported. Please choose one of " . json_encode($plugins["bootstrap_wysiwyg"]["locales"]))
                    ->end()
                ->end()
            ->end();
    }

    /**
     * Add the Summernote locales.
     *
     * @param ArrayNodeDefinition $node The node.
     * @param array $plugins The plugins.
     * @return void
     */
    private function addSummernoteLocales(ArrayNodeDefinition $node, array $plugins): void {

        $node
            ->children()
                ->variableNode("summernote")->info("Summernote locale")
                    ->validate()
                        ->ifNotInArray($plugins["summernote"]["locales"])
                        ->thenInvalid("The Summernote locale %s is not supported. Please choose one of " . json_encode($plugins["summernote"]["locales"]))
                    ->end()
                ->end()
            ->end();
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder {

        $assets  = ConfigurationHelper::loadYamlConfig(__DIR__, "assets");
        $plugins = $assets["assets"]["wbw.bootstrap.asset.bootstrap"]["plugins"];

        $treeBuilder = new TreeBuilder(WBWBootstrapExtension::EXTENSION_ALIAS);

        $rootNode = ConfigurationHelper::getRootNode($treeBuilder, WBWBootstrapExtension::EXTENSION_ALIAS);
        $rootNode
            ->children()
                ->integerNode("version")->defaultValue(4)->info("Version")->min(3)->max(5)->end()
                ->arrayNode("plugins")->info("Bootstrap plug-ins")
                    ->prototype("scalar")
                        ->validate()
                            ->ifNotInArray(array_keys($plugins))
                            ->thenInvalid("The Bootstrap plug-in %s is not supported. Please choose one of " . json_encode(array_keys($plugins)))
                        ->end()
                    ->end()
                ->end()
            ->end();

        $localesNode = $rootNode->children()->arrayNode("locales")->addDefaultsIfNotSet();
        $this->addBootstrapDatepickerLocales($localesNode, $plugins);
        $this->addBootstrapMarkdownLocales($localesNode, $plugins);
        $this->addBootstrapSelectLocales($localesNode, $plugins);
        $this->addBootstrapWysiwygLocales($localesNode, $plugins);
        $this->addSummernoteLocales($localesNode, $plugins);

        return $treeBuilder;
    }

}
