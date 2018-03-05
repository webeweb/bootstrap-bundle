<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Form;

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;
use WBW\Library\Core\Utility\StringUtility;

/**
 * Abstract form Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Form
 * @abstract
 */
abstract class AbstractFormTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Displays a Bootstrap input mask.
     *
     * @param string $selector The input mask selector.
     * @param boolean $scriptTag Script tag ?
     * @param array $arguments The input mask arguments.
     * @return string Returns the Bootstrap input mask.
     */
    final protected function bootstrapInputMask($selector, $scriptTag, array $arguments) {

        // Initialize the template.
        $template = ["$('%selector%').inputmask(%arguments%);"];
        if (true === $scriptTag) {
            array_unshift($template, "<script type=\"text/javascript\">");
            array_push($template, "</script>");
        }

        // Return the HTML.
        return StringUtility::replace(implode("\n", $template), ["%selector%", "%arguments%"], [$selector, json_encode($arguments)]);
    }

}
