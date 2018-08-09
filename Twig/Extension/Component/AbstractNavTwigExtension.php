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

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;

/**
 * Abstract nav Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractNavTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap nav.
     *
     * @param items $items The items.
     * @param string $class The class.
     * @param bool $stacked Stacked ?
     * @return string Returns the Bootstrap nav.
     */
    protected function bootstrapNav($items, $class, $stacked) {

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"][] = "nav";
        $attributes["class"][] = $class;
        $attributes["class"][] = true === $stacked ? "nav-stacked" : null;

        // Initialize the parameters.
        $innerHTML = [];
        foreach ($items as $current) {
            $innerHTML[] = $this->bootstrapNavItem($current);
        }

        // Return the HTML.
        return self::bootstrapHTMLElement("ul", "\n" . implode("\n", $innerHTML) . "\n", $attributes);
    }

    /**
     * Displays a Bootstrap nav item.
     *
     * @param string $item The item.
     * @return string Returns the Bootstrap nav item.
     */
    protected function bootstrapNavItem($item) {
        return self::bootstrapHTMLElement("li", $item, ["role" => "presentation"]);
    }

}
