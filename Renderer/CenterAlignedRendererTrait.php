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
 * Center-aligned renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Renderer
 */
trait CenterAlignedRendererTrait {

    /**
     * Render a center-aligned.
     *
     * @param string|null $str The string.
     * @return string|null Returns the rendered center-aligned.
     */
    protected function renderCenterAligned(?string $str): ?string {
        if (null === $str || "" === $str) {
            return null;
        }
        return StringHelper::domNode("div", $str, ["class" => "align-center"]);
    }
}
