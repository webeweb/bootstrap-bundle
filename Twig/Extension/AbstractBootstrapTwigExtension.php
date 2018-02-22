<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension;

use Twig_Extension;
use WBW\Library\Core\Navigation\NavigationInterface;
use WBW\Library\Core\Utility\StringUtility;

/**
 * Abstract Bootstrap Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
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
     * Displays a Bootstrap simple tag.
     *
     * @param string $name The tag name.
     * @param string $content The tag contant
     * @return string Returns the Bootstrap tag.
     */
    final protected function bootstrapTag($name, $content) {

        // Initialize the template.
        $template = "<" . $name . ">%innerHTML%</" . $name . ">";

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%innerHTML%"], [$innerHTML]);
    }

}
