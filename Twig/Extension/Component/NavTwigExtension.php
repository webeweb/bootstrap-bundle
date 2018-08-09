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

use Twig_SimpleFunction;
use WBW\Library\Core\Helper\Argument\ArrayHelper;

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
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap nav "Justified".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap nav "Justified".
     */
    public function bootstrapNavJustified(array $args = []) {
        return $this->bootstrapNav(ArrayHelper::get($args, "items", []), "nav-justified", false);
    }

    /**
     * Displays a Bootstrap nav "Pills".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap nav "Pills".
     */
    public function bootstrapNavPills(array $args = []) {
        return $this->bootstrapNav(ArrayHelper::get($args, "items", []), "nav-pills", ArrayHelper::get($args, "stacked", false));
    }

    /**
     * Displays a Bootstrap nav "Tabs".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap nav "Tabs".
     */
    public function bootstrapNavTabs(array $args = []) {
        return $this->bootstrapNav(ArrayHelper::get($args, "items", []), "nav-tabs", false);
    }

    /**
     * Get the Twig functions.
     *
     * @return Twig_SimpleFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapNavJustified", [$this, "bootstrapNavJustifiedFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapNavPills", [$this, "bootstrapNavPillsFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapNavTabs", [$this, "bootstrapNavTabsFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
