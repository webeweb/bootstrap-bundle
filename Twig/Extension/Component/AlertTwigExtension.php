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
use WBW\Bundle\BootstrapBundle\BootstrapBundle;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationInterface;
use WBW\Library\Core\Helper\Argument\ArrayHelper;

/**
 * Alert Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @link https://getbootstrap.com/docs/3.3/components/#alerts
 */
class AlertTwigExtension extends AbstractAlertTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.component.alert";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap alert "Danger".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap alert "Danger".
     */
    public function bootstrapAlertDangerFunction(array $args = []) {
        return $this->bootstrapAlert(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "dismissible"), "alert-" . BootstrapBundle::BOOTSTRAP_DANGER);
    }

    /**
     * Displays a Bootstrap alert "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap alert "Info".
     */
    public function bootstrapAlertInfoFunction(array $args = []) {
        return $this->bootstrapAlert(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "dismissible"), "alert-" . BootstrapBundle::BOOTSTRAP_INFO);
    }

    /**
     * Displays a Bootstrap alert "Link".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap alert "Link".
     */
    public function bootstrapAlertLinkFunction(array $args = []) {

        // Initialize the attributes.
        $attributes = [];

        $attributes["href"] = ArrayHelper::get($args, "href", NavigationInterface::NAVIGATION_HREF_DEFAULT);

        // Initialize the parameters.
        $innerHTML = ArrayHelper::get($args, "content");

        // Return the HTML.
        return self::bootstrapHTMLElement("a", $innerHTML, $attributes);
    }

    /**
     * Displays a Bootstrap alert "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap alert "Success".
     */
    public function bootstrapAlertSuccessFunction(array $args = []) {
        return $this->bootstrapAlert(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "dismissible"), "alert-" . BootstrapBundle::BOOTSTRAP_SUCCESS);
    }

    /**
     * Displays a Bootstrap alert "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap alert "Warning".
     */
    public function bootstrapAlertWarningFunction(array $args = []) {
        return $this->bootstrapAlert(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "dismissible"), "alert-" . BootstrapBundle::BOOTSTRAP_WARNING);
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
            new Twig_SimpleFunction("bootstrapAlertLink", [$this, "bootstrapAlertLinkFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapAlertSuccess", [$this, "bootstrapAlertSuccessFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapAlertWarning", [$this, "bootstrapAlertWarningFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
