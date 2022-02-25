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
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Helper
 */
class GridHelper {

    /**
     * Get a CSS classname.
     *
     * @param string $size The size.
     * @param int|null $value The value.
     * @param string $suffix The suffix.
     * @param int $min The min value.
     * @param int $max The max value.
     * @return string|null Returns the CSS classname.
     */
    public static function getCSSClassname(string $size, ?int $value, string $suffix, int $min = 1, int $max = 12): ?string {

        if ($value < $min || $max < $value) {
            return null;
        }

        $sizes    = ["lg", "md", "sm", "xs"];
        $suffixes = ["offset", "pull", "push", ""];

        if (false === in_array($size, $sizes) || false === in_array($suffix, $suffixes)) {
            return null;
        }
        if ("" !== $suffix) {
            $suffix .= "-";
        }

        return implode("-", ["col", $size, $suffix . $value]);
    }
}
