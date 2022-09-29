<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\CSS;

use Twig\TwigFunction;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Grid Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 * @link https://getbootstrap.com/docs/3.3/css/#grid
 */
class GridTwigExtension extends AbstractGridTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.css.grid";

    /**
     * Displays a Bootstrap grid.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap grid.
     */
    public function bootstrapGridFunction(array $args = []): string {

        $output = [];

        $output[] = $this->bootstrapGridStackedFunction($args);
        $output[] = $this->bootstrapGridOffsetFunction($args);
        $output[] = $this->bootstrapGridPushFunction($args);
        $output[] = $this->bootstrapGridPullFunction($args);

        return trim(implode(" ", $output));
    }

    /**
     * Displays a Bootstrap grid with offset.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap grid with offset.
     */
    public function bootstrapGridOffsetFunction(array $args = []): string {
        return $this->bootstrapGrid(ArrayHelper::get($args, "lgOffset"), ArrayHelper::get($args, "mdOffset"), ArrayHelper::get($args, "smOffset"), ArrayHelper::get($args, "xsOffset"), ArrayHelper::get($args, "recopyOffset", false), "offset");
    }

    /**
     * Displays a Bootstrap grid with pull.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap grid with pull.
     */
    public function bootstrapGridPullFunction(array $args = []): string {
        return $this->bootstrapGrid(ArrayHelper::get($args, "lgPull"), ArrayHelper::get($args, "mdPull"), ArrayHelper::get($args, "smPull"), ArrayHelper::get($args, "xsPull"), ArrayHelper::get($args, "recopyPull", false), "pull");
    }

    /**
     * Displays a Bootstrap grid with push.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap grid with push.
     */
    public function bootstrapGridPushFunction(array $args = []): string {
        return $this->bootstrapGrid(ArrayHelper::get($args, "lgPush"), ArrayHelper::get($args, "mdPush"), ArrayHelper::get($args, "smPush"), ArrayHelper::get($args, "xsPush"), ArrayHelper::get($args, "recopyPush", false), "push");
    }

    /**
     * Displays a Bootstrap grid with stacked-to-horizontal.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap grid with stacked-to-horizontal.
     */
    public function bootstrapGridStackedFunction(array $args = []): string {
        return $this->bootstrapGrid(ArrayHelper::get($args, "lg"), ArrayHelper::get($args, "md"), ArrayHelper::get($args, "sm"), ArrayHelper::get($args, "xs"), ArrayHelper::get($args, "recopy", false), "");
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {

        return [
            new TwigFunction("bootstrapGrid", [$this, "bootstrapGridFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsGrid", [$this, "bootstrapGridFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapGridOffset", [$this, "bootstrapGridOffsetFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsGridOffset", [$this, "bootstrapGridOffsetFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapGridPull", [$this, "bootstrapGridPullFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsGridPull", [$this, "bootstrapGridPullFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapGridPush", [$this, "bootstrapGridPushFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsGridPush", [$this, "bootstrapGridPushFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapGridStacked", [$this, "bootstrapGridStackedFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsGridStacked", [$this, "bootstrapGridStackedFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
