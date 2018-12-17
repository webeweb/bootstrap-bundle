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

use Twig_Environment;
use Twig_SimpleFunction;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Grid Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
 * @link https://getbootstrap.com/docs/3.3/css/#grid
 */
class GridTwigExtension extends AbstractGridTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.css.grid";

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     */
    public function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Displays a Bootstrap grid.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap grid.
     */
    public function bootstrapGridFunction(array $args = []) {

        // Initialize the output.
        $output = [];

        $output[] = $this->bootstrapGridStackedFunction($args);
        $output[] = $this->bootstrapGridOffsetFunction($args);
        $output[] = $this->bootstrapGridPushFunction($args);
        $output[] = $this->bootstrapGridPullFunction($args);

        // Return the output.
        return trim(implode(" ", $output));
    }

    /**
     * Displays a Bootstrap grid with offset.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap grid with offset.
     */
    public function bootstrapGridOffsetFunction(array $args = []) {
        return $this->bootstrapGrid(ArrayHelper::get($args, "lgOffset"), ArrayHelper::get($args, "mdOffset"), ArrayHelper::get($args, "smOffset"), ArrayHelper::get($args, "xsOffset"), ArrayHelper::get($args, "recopyOffset", false), "offset-");
    }

    /**
     * Displays a Bootstrap grid with pull.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap grid with pull.
     */
    public function bootstrapGridPullFunction(array $args = []) {
        return $this->bootstrapGrid(ArrayHelper::get($args, "lgPull"), ArrayHelper::get($args, "mdPull"), ArrayHelper::get($args, "smPull"), ArrayHelper::get($args, "xsPull"), ArrayHelper::get($args, "recopyPull", false), "pull-");
    }

    /**
     * Displays a Bootstrap grid with push.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap grid with push.
     */
    public function bootstrapGridPushFunction(array $args = []) {
        return $this->bootstrapGrid(ArrayHelper::get($args, "lgPush"), ArrayHelper::get($args, "mdPush"), ArrayHelper::get($args, "smPush"), ArrayHelper::get($args, "xsPush"), ArrayHelper::get($args, "recopyPush", false), "push-");
    }

    /**
     * Displays a Bootstrap grid with stacked-to-horizontal.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap grid with stacked-to-horizontal.
     */
    public function bootstrapGridStackedFunction(array $args = []) {
        return $this->bootstrapGrid(ArrayHelper::get($args, "lg"), ArrayHelper::get($args, "md"), ArrayHelper::get($args, "sm"), ArrayHelper::get($args, "xs"), ArrayHelper::get($args, "recopy", false), "");
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapGrid", [$this, "bootstrapGridFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapGridOffset", [$this, "bootstrapGridOffsetFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapGridPull", [$this, "bootstrapGridPullFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapGridPush", [$this, "bootstrapGridPushFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapGridStacked", [$this, "bootstrapGridStackedFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
