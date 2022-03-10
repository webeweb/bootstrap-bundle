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
use WBW\Bundle\BootstrapBundle\Factory\AlertFactory;
use WBW\Library\Symfony\Assets\NavigationNodeInterface;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Alert Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @link https://getbootstrap.com/docs/3.3/components/#alerts
 */
class AlertTwigExtension extends AbstractAlertTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.component.alert";

    /**
     * Displays a Bootstrap alert "danger".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap alert "danger".
     */
    public function bootstrapAlertDangerFunction(array $args = []): string {
        return $this->bootstrapAlert(AlertFactory::parseDangerAlert($args));
    }

    /**
     * Displays a Bootstrap alert "dark".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap alert "dark".
     */
    public function bootstrapAlertDarkFunction(array $args = []): string {
        return $this->bootstrapAlert(AlertFactory::parseDarkAlert($args));
    }

    /**
     * Displays a Bootstrap alert "info".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap alert "info".
     */
    public function bootstrapAlertInfoFunction(array $args = []): string {
        return $this->bootstrapAlert(AlertFactory::parseInfoAlert($args));
    }

    /**
     * Displays a Bootstrap alert "light".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap alert "light".
     */
    public function bootstrapAlertLightFunction(array $args = []): string {
        return $this->bootstrapAlert(AlertFactory::parseLightAlert($args));
    }

    /**
     * Displays a Bootstrap alert "link".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap alert "link".
     */
    public function bootstrapAlertLinkFunction(array $args = []): string {

        $attributes = [
            "href" => ArrayHelper::get($args, "href", NavigationNodeInterface::DEFAULT_HREF),
        ];

        $innerHTML = ArrayHelper::get($args, "content");

        return static::coreHtmlElement("a", $innerHTML, $attributes);
    }

    /**
     * Displays a Bootstrap alert "secondary".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap alert "secondary".
     */
    public function bootstrapAlertSecondaryFunction(array $args = []): string {
        return $this->bootstrapAlert(AlertFactory::parseSecondaryAlert($args));
    }

    /**
     * Displays a Bootstrap alert "success".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap alert "success".
     */
    public function bootstrapAlertSuccessFunction(array $args = []): string {
        return $this->bootstrapAlert(AlertFactory::parseSuccessAlert($args));
    }

    /**
     * Displays a Bootstrap alert "warning".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap alert "warning".
     */
    public function bootstrapAlertWarningFunction(array $args = []): string {
        return $this->bootstrapAlert(AlertFactory::parseWarningAlert($args));
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {

        $functions3 = $this->getFunctions3();
        if (3 === $this->getVersion()) {
            return $functions3;
        }

        $functions4 = $this->getFunctions4();

        return array_merge($functions3, $functions4);
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    protected function getFunctions3(): array {
        return [
            new TwigFunction("bootstrapAlertDanger", [$this, "bootstrapAlertDangerFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsAlertDanger", [$this, "bootstrapAlertDangerFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapAlertInfo", [$this, "bootstrapAlertInfoFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsAlertInfo", [$this, "bootstrapAlertInfoFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapAlertSuccess", [$this, "bootstrapAlertSuccessFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsAlertSuccess", [$this, "bootstrapAlertSuccessFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapAlertWarning", [$this, "bootstrapAlertWarningFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsAlertWarning", [$this, "bootstrapAlertWarningFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    protected function getFunctions4(): array {
        return [
            new TwigFunction("bootstrapAlertDark", [$this, "bootstrapAlertDarkFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsAlertDark", [$this, "bootstrapAlertDarkFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapAlertLight", [$this, "bootstrapAlertLightFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsAlertLight", [$this, "bootstrapAlertLightFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapAlertLink", [$this, "bootstrapAlertLinkFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsAlertLink", [$this, "bootstrapAlertLinkFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapAlertSecondary", [$this, "bootstrapAlertSecondaryFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsAlertSecondary", [$this, "bootstrapAlertSecondaryFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
