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
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.grid.grid";

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

        $output[] = $this->bootstrapStackedGridFunction($args);
        $output[] = $this->bootstrapOffsetGridFunction($args);
        $output[] = $this->bootstrapPushGridFunction($args);
        $output[] = $this->bootstrapPullGridFunction($args);

        // Return the output.
        return trim(implode(" ", $output));
    }

    /**
     * Displays a Bootstrap offset grid.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap offset grid.
     */
    public function bootstrapOffsetGridFunction(array $args = []) {
        return $this->bootstrapGrid(ArrayUtility::get($args, "lgOffset"), ArrayUtility::get($args, "mdOffset"), ArrayUtility::get($args, "smOffset"), ArrayUtility::get($args, "xsOffset"), "offset-");
    }

    /**
     * Displays a Bootstrap pull grid.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap pull grid.
     */
    public function bootstrapPullGridFunction(array $args = []) {
        return $this->bootstrapGrid(ArrayUtility::get($args, "lgPull"), ArrayUtility::get($args, "mdPull"), ArrayUtility::get($args, "smPull"), ArrayUtility::get($args, "xsPull"), "pull-");
    }

    /**
     * Displays a Bootstrap push grid.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap push grid.
     */
    public function bootstrapPushGridFunction(array $args = []) {
        return $this->bootstrapGrid(ArrayUtility::get($args, "lgPush"), ArrayUtility::get($args, "mdPush"), ArrayUtility::get($args, "smPush"), ArrayUtility::get($args, "xsPush"), "push-");
    }

    /**
     * Displays a Bootstrap stacked-to-horizontal grid.
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap stacked-to-horizontal grid.
     */
    public function bootstrapStackedGridFunction(array $args = []) {
        return $this->bootstrapGrid(ArrayUtility::get($args, "lg"), ArrayUtility::get($args, "md"), ArrayUtility::get($args, "sm"), ArrayUtility::get($args, "xs"), "");
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapGrid", [$this, "bootstrapGridFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapOffsetGrid", [$this, "bootstrapOffsetGridFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapPullGrid", [$this, "bootstrapPullGridFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapPushGrid", [$this, "bootstrapPushGridFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapStackedGrid", [$this, "bootstrapStackedGridFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
