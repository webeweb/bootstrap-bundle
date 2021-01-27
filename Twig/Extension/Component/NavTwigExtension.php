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

use Twig\TwigFunction;
use WBW\Library\Core\Argument\Helper\ArrayHelper;

/**
 * Nav component Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @link https://getbootstrap.com/docs/3.3/components/#nav
 */
class NavTwigExtension extends AbstractNavTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.component.nav";

    /**
     * Displays a Bootstrap navs "justified".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap nav "justified".
     */
    public function bootstrapNavsJustified(array $args = []): string {
        return $this->bootstrapNavs(ArrayHelper::get($args, "items", []), "nav-justified", false);
    }

    /**
     * Displays a Bootstrap navs "pills".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap nav "pills".
     */
    public function bootstrapNavsPills(array $args = []): string {
        return $this->bootstrapNavs(ArrayHelper::get($args, "items", []), "nav-pills", ArrayHelper::get($args, "stacked", false));
    }

    /**
     * Displays a Bootstrap navs "tabs".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap nav "tabs".
     */
    public function bootstrapNavsTabs(array $args = []): string {
        return $this->bootstrapNavs(ArrayHelper::get($args, "items", []), "nav-tabs", false);
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("bootstrapNavsJustified", [$this, "bootstrapNavsJustifiedFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsNavsJustified", [$this, "bootstrapNavsJustifiedFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapNavsPills", [$this, "bootstrapNavsPillsFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsNavsPills", [$this, "bootstrapNavsPillsFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapNavsTabs", [$this, "bootstrapNavsTabsFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsNavsTabs", [$this, "bootstrapNavsTabsFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
