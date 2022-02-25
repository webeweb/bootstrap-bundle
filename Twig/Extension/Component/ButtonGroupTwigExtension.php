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

/**
 * Button group Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @link https://getbootstrap.com/docs/3.3/components/#btn-groups
 */
class ButtonGroupTwigExtension extends AbstractButtonGroupTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.component.button_group";

    /**
     * Displays a Bootstrap button group "basic".
     *
     * @param array $args The arguments.
     * @param array $buttons The buttons.
     * @return string Returns the Bootstrap button group "basic".
     */
    public function bootstrapButtonGroupBasicFunction(array $args = [], array $buttons = []): string {
        return $this->bootstrapButtonGroup("btn-group", "group", $buttons);
    }

    /**
     * Displays a Bootstrap button group "toolbar".
     *
     * @param array $args The arguments.
     * @param array $buttons The buttons.
     * @return string Returns the Bootstrap button group "toolbar".
     */
    public function bootstrapButtonGroupToolbarFunction(array $args = [], array $buttons = []): string {
        return $this->bootstrapButtonGroup("btn-toolbar", "toolbar", $buttons);
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("bootstrapButtonGroupBasic", [$this, "bootstrapButtonGroupBasicFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsButtonGroupBasic", [$this, "bootstrapButtonGroupBasicFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapButtonGroupToolbar", [$this, "bootstrapButtonGroupToolbarFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsButtonGroupToolbar", [$this, "bootstrapButtonGroupToolbarFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
