<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Component;

use Symfony\Component\Translation\TranslatorInterface;
use Twig_Environment;
use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Bundle\CoreBundle\Navigation\NavigationNode;
use WBW\Bundle\CoreBundle\Navigation\NavigationTree;
use WBW\Bundle\CoreBundle\Navigation\NavigationTreeHelper;
use WBW\Bundle\CoreBundle\Service\TranslatorTrait;

/**
 * Abstract breadcrumb Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractBreadcrumbTwigExtension extends AbstractTwigExtension {

    use TranslatorTrait;

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     * @param TranslatorInterface $translator The translator.
     */
    protected function __construct(Twig_Environment $twigEnvironment, TranslatorInterface $translator) {
        parent::__construct($twigEnvironment);
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

        $attributes = true === $node->getActive() && true === $last ? ["class" => "active"] : [];

        $content   = $this->getTranslator()->trans($node->getId());
        $innerHTML = true === $last ? $content : static::coreHTMLElement("a", $content, ["href" => $node->getUri()]);

        return static::coreHTMLElement("li", $innerHTML, $attributes);
    }

    /**
     * Displays a Bootstrap breadcrumbs.
     *
     * @param NavigationTree $tree The tree.
     * @return string Returns the Bootstrap breadcrumbs.
     */
    protected function bootstrapBreadcrumbs(NavigationTree $tree) {

        $attributes = [];

        $attributes["class"] = ["breadcrumb"];

        $innerHTML = [];

        $nodes = NavigationTreeHelper::getBreadcrumbs($tree);
        $count = count($nodes);

        for ($i = 0; $i < $count; ++$i) {
            $innerHTML[] = $this->bootstrapBreadcrumb($nodes[$i], $count === $i + 1);
        }

        return static::coreHTMLElement("ol", "\n" . implode("\n", $innerHTML) . "\n", $attributes);
    }
}
