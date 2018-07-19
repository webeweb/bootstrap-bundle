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
 * Abstract glyphicon Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractGlyphiconTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap glyphicon.
     *
     * @param string $name The name.
     * @return string Returns the Bootstrap glyphicon.
     */
    protected function bootstrapGlyphicon($name, $style) {

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"][]     = "glyphicon";
        $attributes["class"][]     = null !== $name ? "glyphicon-" . $name : null;
        $attributes["aria-hidden"] = "true";
        $attributes["style"]       = $style;

        // Return the HTML.
        return self::bootstrapHTMLElement("span", null, $attributes);
    }

}
