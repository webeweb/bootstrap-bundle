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
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Dropdown Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
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
     * Display a Bootstrap dropdown "button".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap dropdown "button".
     */
    public function bootstrapDropdownButtonFunction(array $args = []): string {
        return $this->bootstrapDropdownButton(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "id"), ArrayHelper::get($args, "expanded", true), ArrayHelper::get($args, "class", "default"));
    }

    /**
     * Display a Bootstrap dropdown "divider".
     *
     * @return string Returns the Bootstrap dropdown "divider".
     */
    public function bootstrapDropdownDividerFunction(): string {
        return $this->bootstrapDropdownDivider();
    }

    /**
     * Display a Bootstrap dropdown "header".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap dropdown "header".
     */
    public function bootstrapDropdownHeaderFunction(array $args = []): string {
        return $this->bootstrapDropdownHeader(ArrayHelper::get($args, "content"));
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {

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
