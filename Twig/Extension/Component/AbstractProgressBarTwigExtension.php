<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Component;

use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Abstract progress bar Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractProgressBarTwigExtension extends AbstractTwigExtension {

    /**
     * Displays a Bootstrap progress bar.
     *
     * @param string $content The content.
     * @param int $value The value.
     * @param int $min The min.
     * @param int $max The max.
     * @param bool $striped Striped ?
     * @param bool $animated Animated ?
     * @param string $class The class.
     * @return string Returns the Bootstrap progress bar.
     */
    protected function bootstrapProgressBar($content, $value, $min, $max, $striped, $animated, $class = null) {

        $span = static::coreHTMLElement("span", $value . "%", ["class" => "sr-only"]);

        $attributes = [];

        $attributes["class"]         = ["progress-bar", $class];
        $attributes["class"][]       = true === $striped ? "progress-bar-striped" : null;
        $attributes["class"][]       = true === $animated ? "active" : null;
        $attributes["style"]         = "width: " . $value . "%;";
        $attributes["role"]          = "progressbar";
        $attributes["aria-valuenow"] = $value;
        $attributes["aria-valuemin"] = $min;
        $attributes["aria-valuemax"] = $max . "%";

        $innerHTML = null !== $content ? $content : $span;

        $div = static::coreHTMLElement("div", $innerHTML, $attributes);

        return static::coreHTMLElement("div", $div, ["class" => "progress"]);
    }
}
