<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Component;

use Symfony\Component\Translation\TranslatorInterface;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationNode;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationTree;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationTreeHelper;
use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;

/**
 * Abstract breadcrumb Twig extension.
 *
 * @author Camille A. <camille@ingeneo.eu>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractBreadcrumbTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Translator.
     *
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * Constructor.
     *
     * @param TranslatorInterface $translator The translator.
     */
    protected function __construct(TranslatorInterface $translator) {
        parent::__construct();
        $this->setTranslator($translator);
    }

    /**
     * Displays a Bootstrap breadcrumb.
     *
     * @param NavigationNode $node The node.
     * @param bool $last Last node ?.
     * @return string Returns the Bootstrap breadcrumb.
     */
    private function bootstrapBreadcrumb(NavigationNode $node, $last) {

        // Initialize the attributes.
        $attributes = true === $node->getActive() && true === $last ? ["class" => "active"] : [];

        // Initialize the parameters.
        $content   = $this->getTranslator()->trans($node->getId());
        $innerHTML = true === $last ? $content : self::bootstrapHTMLElement("a", $content, ["href" => $node->getRoute()]);

        // Return the HTML.
        return self::bootstrapHTMLElement("li", $innerHTML, $attributes);
    }

    /**
     * Displays a Bootstrap breadcrumbs.
     *
     * @param NavigationTree $tree The tree.
     * @return string Returns the Bootstrap breadcrumbs.
     */
    protected function bootstrapBreadcrumbs(NavigationTree $tree) {

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"] = ["breadcrumb"];

        // Initialize the parameters.
        $innerHTML = [];

        // Get the breadcrumb node.
        $nodes = NavigationTreeHelper::getBreadcrumbs($tree);
        $count = count($nodes);

        // Handle each breadcrumb node.
        for ($i = 0; $i < $count; ++$i) {
            $innerHTML[] = $this->bootstrapBreadcrumb($nodes[$i], $count === $i + 1);
        }

        // Return the HTML.
        return self::bootstrapHTMLElement("ol", "\n" . implode("\n", $innerHTML) . "\n", $attributes);
    }

    /**
     * Get the translator.
     *
     * @return TranslatorInterface Returns the translator.
     */
    public function getTranslator() {
        return $this->translator;
    }

    /**
     * Set the translator.
     * @param TranslatorInterface $translator The translator.
     * @return AbstractComponentTwigExtension Returns this component Twig extension.
     */
    protected function setTranslator(TranslatorInterface $translator = null) {
        $this->translator = $translator;
        return $this;
    }

}
