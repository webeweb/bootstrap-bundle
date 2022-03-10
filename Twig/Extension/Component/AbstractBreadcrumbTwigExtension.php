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

use Twig\Environment;
use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Bundle\CoreBundle\Helper\NavigationNodeHelper;
use WBW\Bundle\CoreBundle\Translation\BaseTranslatorInterface;
use WBW\Bundle\CoreBundle\Translation\TranslatorTrait;
use WBW\Library\Symfony\Assets\AbstractNavigationNode;
use WBW\Library\Symfony\Assets\Navigation\NavigationTree;

/**
 * Abstract breadcrumb Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractBreadcrumbTwigExtension extends AbstractTwigExtension {

    use TranslatorTrait;

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The Twig environment.
     * @param BaseTranslatorInterface $translator The translator.
     */
    public function __construct(Environment $twigEnvironment, $translator) {
        parent::__construct($twigEnvironment);

        $this->setTranslator($translator);
    }

    /**
     * Displays a Bootstrap breadcrumb.
     *
     * @param AbstractNavigationNode $node The node.
     * @param bool|null $last Last node ?.
     * @return string Returns the Bootstrap breadcrumb.
     */
    private function bootstrapBreadcrumb(AbstractNavigationNode $node, ?bool $last): string {

        $attributes = true === $node->getActive() && true === $last ? ["class" => "active"] : [];

        $content   = $this->getTranslator()->trans($node->getLabel());
        $innerHTML = true === $last ? $content : static::coreHtmlElement("a", $content, ["href" => $node->getUri()]);

        return static::coreHtmlElement("li", $innerHTML, $attributes);
    }

    /**
     * Displays a Bootstrap breadcrumbs.
     *
     * @param NavigationTree $tree The tree.
     * @return string Returns the Bootstrap breadcrumbs.
     */
    protected function bootstrapBreadcrumbs(NavigationTree $tree): string {

        $attributes = [
            "class" => [
                "breadcrumb",
            ],
        ];

        $innerHTML = [];

        $nodes = NavigationNodeHelper::getBreadcrumbs($tree);
        $count = count($nodes);

        for ($i = 0; $i < $count; ++$i) {
            $innerHTML[] = $this->bootstrapBreadcrumb($nodes[$i], $count === $i + 1);
        }

        return static::coreHtmlElement("ol", "\n" . implode("\n", $innerHTML) . "\n", $attributes);
    }
}
