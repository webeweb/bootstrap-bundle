<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Renderer\Strings;

use WBW\Library\Types\Helper\StringHelper;

/**
 * No wrap text renderer trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Renderer\Strings
 */
trait NoWrapTextRendererTrait {

    /**
     * Render a no wrap text.
     *
     * @param string|null $text The text.
     * @return string|null Returns the no wrap text.
     */
    protected function renderNoWrapText(?string $text): ?string {

        if (null === $text || "" === $text) {
            return null;
        }

        return StringHelper::domNode("span", $text, ["class" => "text-nowrap"]);
    }
}
