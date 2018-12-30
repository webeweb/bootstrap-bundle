<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Helper;

/**
 * Grid helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Helper
 */
class GridHelper {

    /**
     * Get a CSS classname.
     *
     * @param string $size The size.
     * @param int $value The value.
     * @param string $suffix The suffix.
     * @param int $min The min value.
     * @param int $max The max value.
     * @return string|null Returns the CSS classname.
     */
    public static function getCSSClassname($size, $value, $suffix, $min = 1, $max = 12) {

        // Check the value.
        if ($value < $min || $max < $value) {
            return null;
        }

        // Initialize the values.
        $sizes    = ["lg", "md", "sm", "xs"];
        $suffixes = ["offset", "pull", "push", ""];

        // Check the parameters.
        if (false === in_array($size, $sizes) || false === in_array($suffix, $suffixes)) {
            return null;
        }
        if ("" !== $suffix) {
            $suffix .= "-";
        }

        // Returns the classname.
        return implode("-", ["col", $size, $suffix . $value]);
    }
}