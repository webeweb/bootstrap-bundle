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

use Twig_Environment;
use Twig_SimpleFunction;

/**
 * Button group Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @link https://getbootstrap.com/docs/3.3/components/#btn-groups
 */
class ButtonGroupTwigExtension extends AbstractButtonGroupTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.component.button_group";

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     */
    public function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Displays a Bootstrap button group "Basic".
     *
     * @param array $args The arguments.
     * @param array $buttons The buttons.
     * @return string Returns the Bootstrap button group "Basic".
     */
    public function bootstrapButtonGroupBasicFunction(array $args = [], array $buttons = []) {
        return $this->bootstrapButtonGroup("btn-group", "group", $buttons);
    }

    /**
     * Displays a Bootstrap button group "Toolbar".
     *
     * @param array $args The arguments.
     * @param array $buttons The buttons.
     * @return string Returns the Bootstrap button group "Toolbar".
     */
    public function bootstrapButtonGroupToolbarFunction(array $args = [], array $buttons = []) {
        return $this->bootstrapButtonGroup("btn-toolbar", "toolbar", $buttons);
    }

    /**
     * Get the Twig functions.
     *
     * @return Twig_SimpleFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapButtonGroupBasic", [$this, "bootstrapButtonGroupBasicFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapButtonGroupToolbar", [$this, "bootstrapButtonGroupToolbarFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
