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
use WBW\Bundle\BootstrapBundle\WBWBootstrapBundle;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Label Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @link https://getbootstrap.com/docs/3.3/components/#labels
 */
class LabelTwigExtension extends AbstractLabelTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.component.label";

    /**
     * Display a Bootstrap label "danger".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "danger".
     */
    public function bootstrapLabelDangerFunction(array $args = []): string {
        return $this->bootstrapLabel(ArrayHelper::get($args, "content"), "label-" . WBWBootstrapBundle::BOOTSTRAP_TYPE_DANGER);
    }

    /**
     * Display a Bootstrap label "default".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "default".
     */
    public function bootstrapLabelDefaultFunction(array $args = []): string {
        return $this->bootstrapLabel(ArrayHelper::get($args, "content"), "label-" . WBWBootstrapBundle::BOOTSTRAP_TYPE_DEFAULT);
    }

    /**
     * Display a Bootstrap label "info".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "info".
     */
    public function bootstrapLabelInfoFunction(array $args = []): string {
        return $this->bootstrapLabel(ArrayHelper::get($args, "content"), "label-" . WBWBootstrapBundle::BOOTSTRAP_TYPE_INFO);
    }

    /**
     * Display a Bootstrap label "primary".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "primary".
     */
    public function bootstrapLabelPrimaryFunction(array $args = []): string {
        return $this->bootstrapLabel(ArrayHelper::get($args, "content"), "label-" . WBWBootstrapBundle::BOOTSTRAP_TYPE_PRIMARY);
    }

    /**
     * Display a Bootstrap label "success".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "success".
     */
    public function bootstrapLabelSuccessFunction(array $args = []): string {
        return $this->bootstrapLabel(ArrayHelper::get($args, "content"), "label-" . WBWBootstrapBundle::BOOTSTRAP_TYPE_SUCCESS);
    }

    /**
     * Display a Bootstrap label "warning".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "warning".
     */
    public function bootstrapLabelWarningFunction(array $args = []): string {
        return $this->bootstrapLabel(ArrayHelper::get($args, "content"), "label-" . WBWBootstrapBundle::BOOTSTRAP_TYPE_WARNING);
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {

        if (3 === $this->getVersion()) {
            return $this->getFunctions3();
        }

        return [];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    protected function getFunctions3(): array {

        return [
            new TwigFunction("bootstrapLabelDanger", [$this, "bootstrapLabelDangerFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsLabelDanger", [$this, "bootstrapLabelDangerFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapLabelDefault", [$this, "bootstrapLabelDefaultFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsLabelDefault", [$this, "bootstrapLabelDefaultFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapLabelInfo", [$this, "bootstrapLabelInfoFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsLabelInfo", [$this, "bootstrapLabelInfoFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapLabelPrimary", [$this, "bootstrapLabelPrimaryFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsLabelPrimary", [$this, "bootstrapLabelPrimaryFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapLabelSuccess", [$this, "bootstrapLabelSuccessFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsLabelSuccess", [$this, "bootstrapLabelSuccessFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapLabelWarning", [$this, "bootstrapLabelWarningFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsLabelWarning", [$this, "bootstrapLabelWarningFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
