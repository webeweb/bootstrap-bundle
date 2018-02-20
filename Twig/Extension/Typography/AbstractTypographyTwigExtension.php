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
     * Displays a Bootstrap deleted text.
     *
     * @param string $content The mark content.
     * @return string  Returns the Bootstrap deleted text.
     */
    final protected function bootstrapDeleted($content) {

        // Initialize the template.
        $template = "<del>%innerHTML%</del>";

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%innerHTML%"], [$innerHTML]);
    }

    /**
     * Displays a Bootstrap heading.
     *
     * @param integer $size The heading size.
     * @param string $content The heading content.
     * @param string $description The heading description.
     * @param string $class The heading class.
     * @return string Returns the Bootstrap heading.
     */
    final protected function bootstrapHeading($size, $content, $description, $class) {

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

    /**
     * Displays a Bootstrap inserted text.
     *
     * @param string $content The mark content.
     * @return string  Returns the Bootstrap inserted text.
     */
    final protected function bootstrapInserted($content) {

        // Initialize the template.
        $template = "<ins>%innerHTML%</ins>";

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%innerHTML%"], [$innerHTML]);
    }

    /**
      /**
     * Displays a Bootstrap italic text.
     *
     * @param string $content The mark content.
     * @return string  Returns the Bootstrap italic text.
     */
    final protected function bootstrapItalic($content) {

        // Initialize the template.
        $template = "<em>%innerHTML%</em>";

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%innerHTML%"], [$innerHTML]);
    }

    /**
      /**
     * Displays a Bootstrap marked text.
     *
     * @param string $content The mark content.
     * @return string  Returns the Bootstrap marked text.
     */
    final protected function bootstrapMarked($content) {

        // Initialize the template.
        $template = "<mark>%innerHTML%</mark>";

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%innerHTML%"], [$innerHTML]);
    }

    /**
     * Displays a Bootstrap strike through text.
     *
     * @param string $content The mark content.
     * @return string  Returns the Bootstrap strike through text.
     */
    final protected function bootstrapStrikeThrough($content) {

        // Initialize the template.
        $template = "<s>%innerHTML%</s>";

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%innerHTML%"], [$innerHTML]);
    }

    /**
     * Displays a Bootstrap small text.
     *
     * @param string $content The mark content.
     * @return string  Returns the Bootstrap small text.
     */
    final protected function bootstrapSmall($content) {

        // Initialize the template.
        $template = "<small>%innerHTML%</small>";

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%innerHTML%"], [$innerHTML]);
    }

    /**
     * Displays a Bootstrap bold text.
     *
     * @param string $content The mark content.
     * @return string  Returns the Bootstrap bold text.
     */
    final protected function bootstrapStrong($content) {

        // Initialize the template.
        $template = "<strong>%innerHTML%</strong>";

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%innerHTML%"], [$innerHTML]);
    }

    /**
     * Displays a Bootstrap underlined text.
     *
     * @param string $content The mark content.
     * @return string  Returns the Bootstrap underlined text.
     */
    final protected function bootstrapUnderlined($content) {

        // Initialize the template.
        $template = "<u>%innerHTML%</u>";

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%innerHTML%"], [$innerHTML]);
    }

}
