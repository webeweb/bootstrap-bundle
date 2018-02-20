<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Typography;

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;
use WBW\Library\Core\Utility\StringUtility;

/**
 * Abstract typography Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Typography
 * @abstract
 */
abstract class AbstractTypographyTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Displays a Bootstrap heading.
     *
     * @param integer $size The heading size.
     * @param string $content The heading content.
     * @param string $description The heading description.
     * @param string $class The heading class.
     * @return string Returns the Bootstrap heading.
     */
    protected final function bootstrapH($size, $content, $description, $class) {

        // Initialize the template.
        $template = "<h%size%%attributes%>%innerHTML%</h%size%>";

        // Initialize the attributes.
        $attributes = [];

        $attributes[" class"] = [$class];

        // Initialize the parameters.
        $secondary = null !== $description ? " <small>" . $description . "</small>" : "";
        $innerSize = true === in_array($size, [1, 2, 3, 4, 5, 6]) ? $size : 1;
        $innerHTML = (null !== $content ? $content : "") . $secondary;

        // Return the HTML.
        return StringUtility::replace($template, ["%size%", "%attributes%", "%innerHTML%"], [$innerSize, StringUtility::parseArray($attributes), trim($innerHTML)]);
    }

}
