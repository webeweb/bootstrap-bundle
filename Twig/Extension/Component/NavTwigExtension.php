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
use WBW\Library\Core\Argument\ArrayHelper;

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
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.component.nav";

    /**
     * Displays a Bootstrap navs "Justified".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap nav "Justified".
     */
    public function bootstrapNavsJustified(array $args = []) {
        return $this->bootstrapNavs(ArrayHelper::get($args, "items", []), "nav-justified", false);
    }

    /**
     * Displays a Bootstrap navs "Pills".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap nav "Pills".
     */
    public function bootstrapNavsPills(array $args = []) {
        return $this->bootstrapNavs(ArrayHelper::get($args, "items", []), "nav-pills", ArrayHelper::get($args, "stacked", false));
    }

    /**
     * Displays a Bootstrap navs "Tabs".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap nav "Tabs".
     */
    public function bootstrapNavsTabs(array $args = []) {
        return $this->bootstrapNavs(ArrayHelper::get($args, "items", []), "nav-tabs", false);
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
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
