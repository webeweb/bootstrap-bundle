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
use WBW\Library\Core\Utility\Argument\StringUtility;

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
     * Displays a Bootstrap DOM object.
     *
     * @param string $object The object.
     * @param string $attrs The attributes.
     * @param string $content The content.
     * @return string Returns the Bootstrap DOM object.
     */
    protected function bootstrapDOMObject($object, $attrs, $content) {

        // Initialize the templates.
        $template = "<%object%%attributes%>%innerHTML%</%object%>";

        // Initialize the parameters.
        $attributes = null !== $attrs ? " " . trim($attrs) : "";
        $innerHTML  = null !== $content ? trim($content) : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%object%", "%attributes%", "%innerHTML%"], [$object, $attributes, $innerHTML]);
    }

}
