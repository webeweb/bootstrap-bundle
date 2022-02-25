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

use Symfony\Component\HttpFoundation\Request;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Navigation\NavigationTree;
use WBW\Bundle\CoreBundle\Navigation\NavigationTreeHelper;

/**
 * Breadcrumb Twig Extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @link https://getbootstrap.com/docs/3.3/components/#breadcrumbs
 */
class BreadcrumbTwigExtension extends AbstractBreadcrumbTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.component.breadcrumb";

    /**
     * Displays a Bootstrap breadcrumbs.
     *
     * @param array $args The arguments.
     * @param NavigationTree $tree The tree.
     * @param Request $request The request.
     * @return string Returns the Bootstrap breadcrumbs.
     */
    public function bootstrapBreadcrumbsFunction(array $args = [], NavigationTree $tree, Request $request): string {
        NavigationTreeHelper::activeTree($tree, $request);
        return $this->bootstrapBreadcrumbs($tree);
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("bootstrapBreadcrumbs", [$this, "bootstrapBreadcrumbsFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsBreadcrumbs", [$this, "bootstrapBreadcrumbsFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
