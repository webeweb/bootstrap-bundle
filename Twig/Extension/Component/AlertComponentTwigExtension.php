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
use WBW\Library\Core\Utility\ArrayUtility;

/**
 * Alert component Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @final
 */
final class AlertComponentTwigExtension extends AbstractComponentTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.component.alert";

    /**
     * Displays a Bootstrap alert "Danger".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap alert "Danger".
     */
    public function bootstrapAlertDangerFunction(array $args = []) {
        return $this->bootstrapAlert(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "dismissible"), "alert-danger");
    }

    /**
     * Displays a Bootstrap alert "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap alert "Info".
     */
    public function bootstrapAlertInfoFunction(array $args = []) {
        return $this->bootstrapAlert(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "dismissible"), "alert-info");
    }

    /**
     * Displays a Bootstrap alert "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap alert "Success".
     */
    public function bootstrapAlertSuccessFunction(array $args = []) {
        return $this->bootstrapAlert(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "dismissible"), "alert-success");
    }

    /**
     * Displays a Bootstrap alert "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap alert "Warning".
     */
    public function bootstrapAlertWarningFunction(array $args = []) {
        return $this->bootstrapAlert(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "dismissible"), "alert-warning");
    }

    /**
     * Get the Twig functions.
     *
     * @return Twig_SimpleFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapAlertDanger", [$this, "bootstrapAlertDangerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapAlertInfo", [$this, "bootstrapAlertInfoFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapAlertSuccess", [$this, "bootstrapAlertSuccessFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapAlertWarning", [$this, "bootstrapAlertWarningFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
