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

use WBW\Bundle\BootstrapBundle\Helper\ButtonHelper;
use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Library\Types\Helper\StringHelper;

/**
 * Abstract dropdown Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractDropdownTwigExtension extends AbstractTwigExtension {

    /**
     * Displays a Bootstrap dropdown "button".
     *
     * @param string|null $content The content.
     * @param string|null $id The id.
     * @param bool|null $expanded Expanded ?
     * @param string|null $class The class.
     * @return string Returns the Bootstrap dropdown "button".
     */
    protected function bootstrapDropdownButton(?string $content, ?string $id, ?bool $expanded, ?string $class): string {

        $classes = ButtonHelper::enumTypes();

        $attributes = [
            "class"         => [
                "btn",
                true === in_array($class, $classes) ? "btn-" . $class : "btn-default",
                "dropdown-toggle",
            ],
            "type"          => "button",
            "id"            => null !== $id ? $id : "",
            "data-toggle"   => "dropdown",
            "aria-haspopup" => "true",
            "aria-expanded" => StringHelper::parseBoolean($expanded),
        ];

        $innerHTML = (null !== $content ? $content : "") . '<span class="caret"></span>';

        return static::coreHTMLElement("button", $innerHTML, $attributes);
    }

    /**
     * Displays a Bootstrap dropdown "divider".
     *
     * @return string Returns the Bootstrap dropdown "divider".
     */
    protected function bootstrapDropdownDivider(): string {

        $attributes = [
            "class" => "divider",
            "role"  => "separator",
        ];

        return static::coreHTMLElement("li", null, $attributes);
    }

    /**
     * Displays a Bootstrap dropdown "header".
     *
     * @param string|null $content The content.
     * @return string Returns the Bootstrap dropdown "header".
     */
    protected function bootstrapDropdownHeader(?string $content): string {

        $attributes = [
            "class" => "dropdown-header",
        ];

        return static::coreHTMLElement("li", $content, $attributes);
    }
}
