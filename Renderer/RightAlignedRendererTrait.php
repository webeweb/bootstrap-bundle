<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Renderer;

use WBW\Library\Types\Helper\StringHelper;

/**
 * Right-aligned renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Renderer
 */
trait RightAlignedRendererTrait {

    /**
     * Render a right-aligned.
     *
     * @param string|null $str The string.
     * @return string|null Returns the rendered right-aligned.
     */
    protected function renderRightAligned(?string $str): ?string {
        if (null === $str || "" === $str) {
            return null;
        }
        return StringHelper::domNode("span", $str, ["class" => "pull-right"]);
    }
}
