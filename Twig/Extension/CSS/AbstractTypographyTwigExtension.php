<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\CSS;

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;

/**
 * Abstract typography Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\CSS
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
     * @param string $content The content.
     * @return string  Returns the Bootstrap bold text.
     */
    protected function bootstrapBold($content) {
        return self::bootstrapHTMLElement("strong", $content);
    }

    /**
     * Displays a Bootstrap deleted text.
     *
     * @param string $content The content.
     * @return string  Returns the Bootstrap deleted text.
     */
    protected function bootstrapDeleted($content) {
        return self::bootstrapHTMLElement("del", $content);
    }

    /**
     * Displays a Bootstrap heading.
     *
     * @param int $size The size.
     * @param string $content The content.
     * @param string $description The description.
     * @param string $class The class.
     * @return string Returns the Bootstrap heading.
     */
    protected function bootstrapHeading($size, $content, $description, $class) {

        // Initialize the values.
        $sizes = [1, 2, 3, 4, 5, 6];

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"] = [$class];

        // Initialize the parameters.
        $element   = "h" . (true === in_array($size, $sizes) ? $size : 1);
        $secondary = null !== $description ? " <small>" . $description . "</small>" : "";
        $innerHTML = (null !== $content ? $content : "") . $secondary;

        // Return the HTML.
        return self::bootstrapHTMLElement($element, $innerHTML, $attributes);
    }

    /**
     * Displays a Bootstrap inserted text.
     *
     * @param string $content The content.
     * @return string  Returns the Bootstrap inserted text.
     */
    protected function bootstrapInserted($content) {
        return self::bootstrapHTMLElement("ins", $content);
    }

    /**
     * Displays a Bootstrap italic text.
     *
     * @param string $content The content.
     * @return string  Returns the Bootstrap italic text.
     */
    protected function bootstrapItalic($content) {
        return self::bootstrapHTMLElement("em", $content);
    }

    /**
     * Displays a Bootstrap marked text.
     *
     * @param string $content The content.
     * @return string  Returns the Bootstrap marked text.
     */
    protected function bootstrapMarked($content) {
        return self::bootstrapHTMLElement("mark", $content);
    }

    /**
     * Displays a Bootstrap strike through text.
     *
     * @param string $content The content.
     * @return string  Returns the Bootstrap strike through text.
     */
    protected function bootstrapStrikeThrough($content) {
        return self::bootstrapHTMLElement("s", $content);
    }

    /**
     * Displays a Bootstrap small text.
     *
     * @param string $content The content.
     * @return string  Returns the Bootstrap small text.
     */
    protected function bootstrapSmall($content) {
        return self::bootstrapHTMLElement("small", $content);
    }

    /**
     * Displays a Bootstrap underlined text.
     *
     * @param string $content The content.
     * @return string  Returns the Bootstrap underlined text.
     */
    protected function bootstrapUnderlined($content) {
        return self::bootstrapHTMLElement("u", $content);
    }

}
