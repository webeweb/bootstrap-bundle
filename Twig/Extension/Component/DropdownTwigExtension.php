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

use Twig\TwigFunction;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Dropdown Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @link https://getbootstrap.com/docs/3.3/components/#dropdowns
 */
class DropdownTwigExtension extends AbstractDropdownTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.component.dropdown";

    /**
     * Displays a Bootstrap dropdown "Button".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap dropdown "Button".
     */
    public function bootstrapDropdownButtonFunction(array $args = []) {
        return $this->bootstrapDropdownButton(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "id"), ArrayHelper::get($args, "expanded", true), ArrayHelper::get($args, "class", "default"));
    }

    /**
     * Displays a Bootstrap dropdown "Divider".
     *
     * @return string Returns the Bootstrap dropdown "Divider".
     */
    public function bootstrapDropdownDividerFunction() {
        return $this->bootstrapDropdownDivider();
    }

    /**
     * Displays a Bootstrap dropdown "Header".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap dropdown "Header".
     */
    public function bootstrapDropdownHeaderFunction(array $args = []) {
        return $this->bootstrapDropdownHeader(ArrayHelper::get($args, "content"));
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new TwigFunction("bootstrapDropdownButton", [$this, "bootstrapDropdownButtonFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsDropdownButton", [$this, "bootstrapDropdownButtonFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapDropdownDivider", [$this, "bootstrapDropdownDividerFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsDropdownDivider", [$this, "bootstrapDropdownDividerFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapDropdownHeader", [$this, "bootstrapDropdownHeaderFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsDropdownHeader", [$this, "bootstrapDropdownHeaderFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
