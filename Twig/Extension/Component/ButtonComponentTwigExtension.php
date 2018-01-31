<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Twig\Extension\Component;

use Twig_SimpleFunction;
use WBW\Library\Core\Utility\ArrayUtility;

/**
 * ButtonComponentTwigExtension.
 *
 * @author Camille A. <camille@ingeneo.eu>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 */
final class ButtonComponentTwigExtension extends AbstractComponentTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.component.button";

    /**
     * Displays a Bootstrap button "Danger".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Danger".
     */
    public function bootstrapButtonDangerFunction(array $args = []) {
        return $this->bootstrapButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "active", false), ArrayUtility::get($args, "disable", false), "btn-danger", ArrayUtility::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "Default".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Default".
     */
    public function bootstrapButtonDefaultFunction(array $args = []) {
        return $this->bootstrapButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "active", false), ArrayUtility::get($args, "disable", false), "btn-default", ArrayUtility::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Info".
     */
    public function bootstrapButtonInfoFunction(array $args = []) {
        return $this->bootstrapButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "active", false), ArrayUtility::get($args, "disable", false), "btn-info", ArrayUtility::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "Primary".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Primary".
     */
    public function bootstrapButtonPrimaryFunction(array $args = []) {
        return $this->bootstrapButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "active", false), ArrayUtility::get($args, "disable", false), "btn-primary", ArrayUtility::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Success".
     */
    public function bootstrapButtonSuccessFunction(array $args = []) {
        return $this->bootstrapButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "active", false), ArrayUtility::get($args, "disable", false), "btn-success", ArrayUtility::get($args, "icon"));
    }

    /**
     * Displays a Bootstrap button "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap button "Warning".
     */
    public function bootstrapButtonWarningFunction(array $args = []) {
        return $this->bootstrapButton(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "title"), ArrayUtility::get($args, "size", false), ArrayUtility::get($args, "block", false), ArrayUtility::get($args, "active", false), ArrayUtility::get($args, "disable", false), "btn-warning", ArrayUtility::get($args, "icon"));
    }

    /**
     * Get the Twig functions.
     *
     * @return Twig_SimpleFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapButtonDanger", [$this, "bootstrapButtonDangerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapButtonDefault", [$this, "bootstrapButtonDefaultFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapButtonInfo", [$this, "bootstrapButtonInfoFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapButtonPrimary", [$this, "bootstrapButtonPrimaryFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapButtonSuccess", [$this, "bootstrapButtonSuccessFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapButtonWarning", [$this, "bootstrapButtonWarningFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
