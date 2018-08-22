<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension;

use Twig_Extension;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationInterface;
use WBW\Library\Core\Argument\StringHelper;

/**
 * Abstract Bootstrap Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension
 * @abstract
 */
abstract class AbstractBootstrapTwigExtension extends Twig_Extension {

    /**
     * Default content.
     *
     * @var string
     */
    const DEFAULT_CONTENT = "&nbsp;";

    /**
     * Default href.
     *
     * @var string
     */
    const DEFAULT_HREF = NavigationInterface::NAVIGATION_HREF_DEFAULT;

    /**
     * Constructor.
     */
    protected function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Displays a Bootstrap HTML element.
     *
     * @param string $element The object.
     * @param string $content The content.
     * @param array $attrs The attributes.
     * @return string Returns the Bootstrap HTML element.
     */
    public static function bootstrapHTMLElement($element, $content, array $attrs = []) {

        // Initialize the templates.
        $template = "<%element%%attributes%>%innerHTML%</%element%>";

        // Initialize the attributes.
        $attributes = trim(StringHelper::parseArray($attrs));
        if (0 < strlen($attributes)) {
            $attributes = " " . $attributes;
        }

        // Initialize the parameters.
        $innerHTML = null !== $content ? trim($content, " ") : "";

        // Return the HTML.
        return StringHelper::replace($template, ["%element%", "%attributes%", "%innerHTML%"], [trim($element), $attributes, $innerHTML]);
    }

}
