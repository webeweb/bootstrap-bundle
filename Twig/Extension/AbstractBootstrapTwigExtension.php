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
    const DEFAULT_HREF = NavigationInterface::DEFAULT_HREF;

    /**
     * Constructor.
     */
    protected function __construct() {
        // NOTHING TO DO.
    }

    /**
     * Displays a Bootstrap simple tag.
     *
     * @param string $name The tag name.
     * @param string $content The tag content
     * @return string Returns the Bootstrap tag.
     */
    protected function bootstrapSimpleTag($name, $content) {

        // Initialize the template.
        $template = "<%tag%>%innerHTML%</%tag%>";

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%tag%", "%innerHTML%"], [$name, $innerHTML]);
    }

}
