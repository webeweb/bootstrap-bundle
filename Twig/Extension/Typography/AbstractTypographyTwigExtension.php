<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Typography;

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;
use WBW\Library\Core\Utility\Argument\StringUtility;

/**
 * Abstract typography Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Typography
 * @abstract
 */
abstract class AbstractTypographyTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Constructor.
     */
    protected function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap bold text.
     *
     * @param string $content The bold text content.
     * @return string  Returns the Bootstrap bold text.
     */
    protected function bootstrapBold($content) {
        return $this->bootstrapDOMObject("strong", null, $content);
    }

    /**
     * Displays a Bootstrap deleted text.
     *
     * @param string $content The deleted text content.
     * @return string  Returns the Bootstrap deleted text.
     */
    protected function bootstrapDeleted($content) {
        return $this->bootstrapDOMObject("del", null, $content);
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
    protected function bootstrapHeading($size, $content, $description, $class) {

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
     * @param string $content The inserted text content.
     * @return string  Returns the Bootstrap inserted text.
     */
    protected function bootstrapInserted($content) {
        return $this->bootstrapDOMObject("ins", null, $content);
    }

    /**
     * Displays a Bootstrap italic text.
     *
     * @param string $content The italic text content.
     * @return string  Returns the Bootstrap italic text.
     */
    protected function bootstrapItalic($content) {
        return $this->bootstrapDOMObject("em", null, $content);
    }

    /**
     * Displays a Bootstrap marked text.
     *
     * @param string $content The marked text content.
     * @return string  Returns the Bootstrap marked text.
     */
    protected function bootstrapMarked($content) {
        return $this->bootstrapDOMObject("mark", null, $content);
    }

    /**
     * Displays a Bootstrap strike through text.
     *
     * @param string $content The strike through content.
     * @return string  Returns the Bootstrap strike through text.
     */
    protected function bootstrapStrikeThrough($content) {
        return $this->bootstrapDOMObject("s", null, $content);
    }

    /**
     * Displays a Bootstrap small text.
     *
     * @param string $content The small text content.
     * @return string  Returns the Bootstrap small text.
     */
    protected function bootstrapSmall($content) {
        return $this->bootstrapDOMObject("small", null, $content);
    }

    /**
     * Displays a Bootstrap underlined text.
     *
     * @param string $content The underlined text content.
     * @return string  Returns the Bootstrap underlined text.
     */
    protected function bootstrapUnderlined($content) {
        return $this->bootstrapDOMObject("u", null, $content);
    }

}
