<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin;

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;

/**
 * Abstract Meteocons Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Plugin
 * @abstract
 */
abstract class AbstractMeteoconsTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Meteocons icon.
     *
     * @param string $name The name.
     * @param string $style The style.
     * @return string Returns the Meteocons icon.
     */
    protected function meteoconsIcon($name, $style) {

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]          = "meteocons";
        $attributes["data-meteocons"] = $name;
        $attributes["style"]          = $style;

        // Return the HTML.
        return self::bootstrapHTMLElement("i", null, $attributes);
    }

}
