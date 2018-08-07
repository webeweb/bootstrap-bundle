<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Component;

use Twig_SimpleFunction;
use WBW\Library\Core\Helper\Argument\ArrayHelper;

/**
 * Dropdown Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @see https://getbootstrap.com/docs/3.3/components/#dropdowns
 */
class DropdownTwigExtension extends AbstractDropdownTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrapbundle.twig.extension.component.dropdown";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

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
     * @return Twig_SimpleFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapDropdownButton", [$this, "bootstrapDropdownButtonFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapDropdownDivider", [$this, "bootstrapDropdownDividerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapDropdownHeader", [$this, "bootstrapDropdownHeaderFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
