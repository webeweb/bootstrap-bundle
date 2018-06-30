<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Grid;

use Twig_SimpleFunction;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Grid Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Grid
 */
class GridTwigExtension extends AbstractGridTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrapbundle.twig.extension.grid.grid";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
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
        return $this->bootstrapGrid(ArrayUtility::get($args, "lgOffset"), ArrayUtility::get($args, "mdOffset"), ArrayUtility::get($args, "smOffset"), ArrayUtility::get($args, "xsOffset"), ArrayUtility::get($args, "recopyOffset", false), "offset-");
    }

    /**
     * Displays a Bootstrap grid with pull.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap grid with pull.
     */
    public function bootstrapGridPullFunction(array $args = []) {
        return $this->bootstrapGrid(ArrayUtility::get($args, "lgPull"), ArrayUtility::get($args, "mdPull"), ArrayUtility::get($args, "smPull"), ArrayUtility::get($args, "xsPull"), ArrayUtility::get($args, "recopyPull", false), "pull-");
    }

    /**
     * Displays a Bootstrap grid with push.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap grid with push.
     */
    public function bootstrapGridPushFunction(array $args = []) {
        return $this->bootstrapGrid(ArrayUtility::get($args, "lgPush"), ArrayUtility::get($args, "mdPush"), ArrayUtility::get($args, "smPush"), ArrayUtility::get($args, "xsPush"), ArrayUtility::get($args, "recopyPush", false), "push-");
    }

    /**
     * Displays a Bootstrap grid with stacked-to-horizontal.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap grid with stacked-to-horizontal.
     */
    public function bootstrapGridStackedFunction(array $args = []) {
        return $this->bootstrapGrid(ArrayUtility::get($args, "lg"), ArrayUtility::get($args, "md"), ArrayUtility::get($args, "sm"), ArrayUtility::get($args, "xs"), ArrayUtility::get($args, "recopy", false), "");
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
