<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Component;

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractBootstrapTwigExtension;
use WBW\Library\Core\Utility\StringUtility;

/**
 * Abstract component Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractComponentTwigExtension extends AbstractBootstrapTwigExtension {

    /**
     * Displays a Bootstrap alert.
     *
     * @param string $content The alert content.
     * @param boolean $dismissible Dismissible alert ?
     * @param string $class The alert class.
     * @return string Returns the Bootstrap alert.
     */
    final protected function bootstrapAlert($content, $dismissible, $class) {

        // Initialize the templates.
        $template = "<div %attributes%>%innerHTML%</div>";
        $button   = '<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]   = ["alert", $class];
        $attributes["class"][] = true === $dismissible ? "alert-dismissible" : null;
        $attributes["role"]    = ["alert"];

        // Initialize the parameters.
        $innerHTML = (true === $dismissible ? $button : "") . (null !== $content ? $content : self::DEFAULT_CONTENT);

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $innerHTML]);
    }

    /**
     * Displays a Bootstrap badge.
     *
     * @param string $content The badge content.
     * @return string Returns the Bootstrap badge.
     */
    final protected function bootstrapBadge($content) {

        // Initialize the template.
        $template = '<span %attributes%>%innerHTML%</span>';

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"] = ["badge"];

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : self::DEFAULT_CONTENT;

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $innerHTML]);
    }

    /**
     * Displays a Bootstrap button.
     *
     * @param string $content The button content.
     * @param string $title The button title.
     * @param string $size The button size.
     * @param boolean $block Block button ?
     * @param booelan $active Active button ?
     * @param booelan $disable Disable button ?
     * @param string $class The button class.
     * @param string $icon The button icon.
     * @return string Returns the Bootstrap button.
     */
    final protected function bootstrapButton($content, $title, $size, $block, $active, $disable, $class, $icon) {

        // Initialize the template.
        $template = "<button %attributes%>%glyphicon%%innerHTML%</button>";

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]       = ["btn", $class];
        $attributes["class"][]     = true === $block ? "btn-block" : null;
        $attributes["class"][]     = true === in_array($size, ["lg", "sm", "xs"]) ? "btn-" . $size : null;
        $attributes["class"][]     = true === $active ? "active" : null;
        $attributes["title"]       = $title;
        $attributes["type"]        = "button";
        $attributes["data-toggle"] = null !== $title ? "tooltip" : null;
        $attributes["disabled"]    = true === $disable ? "disabled" : null;

        // Handle the parameters.
        $glyphicon = null !== $icon ? $this->bootstrapGlyphicon($icon) : "";
        $innerHTML = null !== $content ? $content : self::DEFAULT_CONTENT;

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%glyphicon%", "%innerHTML%"], [StringUtility::parseArray($attributes), $glyphicon, $innerHTML]);
    }

    /**
     * Displays a Bootstrap glyphicon.
     *
     * @param string $name The glyphicon name.
     * @return string Returns the Bootstrap glyphicon.
     */
    final protected function bootstrapGlyphicon($name, $style) {

        // Initialize the template.
        $template = "<span %attributes%></span>";

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]       = ["glyphicon"];
        $attributes["class"][]     = null !== $name ? "glyphicon-" . $name : null;
        $attributes["aria-hidden"] = "true";
        $attributes["style"]       = $style;

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%"], [StringUtility::parseArray($attributes)]);
    }

    /**
     * Displays a Bootstrap label.
     *
     * @param string $content The label content.
     * @param string $class The label class.
     * @return string Returns the Bootstrap label.
     */
    final protected function bootstrapLabel($content, $class) {

        // Initialize the template.
        $template = "<span %attributes%>%innerHTML%</span>";

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"] = ["label", $class];

        // Initialize the parameters.
        $innerHTML = null !== $content ? $content : self::DEFAULT_CONTENT;

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $innerHTML]);
    }

    /**
     * Displays a Bootstrap progress bar.
     *
     * @param string $content The progress bar content.
     * @param integer $value The progress bar value.
     * @param integer $min The progress bar min.
     * @param integer $max The progress bar max.
     * @param boolean $striped Progress bar striped ?
     * @param boolean $animated Progress bar animated ?
     * @param string $class The progress bar class.
     * @return string Returns the Bootstrap progress bar.
     */
    final protected function bootstrapProgressBar($content, $value, $min, $max, $striped, $animated, $class = null) {

        // Initialize the template.
        $template = '<div class="progress"><div %attributes%>%innerHTML%</div></div>';

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"]         = ["progress-bar", $class];
        $attributes["class"][]       = true === $striped ? "progress-bar-striped" : null;
        $attributes["class"][]       = true === $animated ? "active" : null;
        $attributes["style"]         = "width: " . $value . "%;";
        $attributes["role"]          = "progressbar";
        $attributes["aria-valuenow"] = $value;
        $attributes["aria-valuemin"] = $min;
        $attributes["aria-valuemax"] = $max . "%";

        // Initialize the parameters.
        $innerHTML = !is_null($content) ? $content . '<span class="sr-only">' . $value . ' %</span>' : self::DEFAULT_CONTENT;

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $innerHTML]);
    }

}
