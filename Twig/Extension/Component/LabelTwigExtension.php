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
use WBW\Bundle\BootstrapBundle\BootstrapInterface;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Label Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @link https://getbootstrap.com/docs/3.3/components/#labels
 */
class LabelTwigExtension extends AbstractLabelTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.component.label";

    /**
     * Displays a Bootstrap label "Danger".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "Danger".
     */
    public function bootstrapLabelDangerFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayHelper::get($args, "content"), "label-" . BootstrapInterface::BOOTSTRAP_DANGER);
    }

    /**
     * Displays a Bootstrap label "Default".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "Default".
     */
    public function bootstrapLabelDefaultFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayHelper::get($args, "content"), "label-" . BootstrapInterface::BOOTSTRAP_DEFAULT);
    }

    /**
     * Displays a Bootstrap label "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "Info".
     */
    public function bootstrapLabelInfoFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayHelper::get($args, "content"), "label-" . BootstrapInterface::BOOTSTRAP_INFO);
    }

    /**
     * Displays a Bootstrap label "Primary".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "Primary".
     */
    public function bootstrapLabelPrimaryFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayHelper::get($args, "content"), "label-" . BootstrapInterface::BOOTSTRAP_PRIMARY);
    }

    /**
     * Displays a Bootstrap label "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "Success".
     */
    public function bootstrapLabelSuccessFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayHelper::get($args, "content"), "label-" . BootstrapInterface::BOOTSTRAP_SUCCESS);
    }

    /**
     * Displays a Bootstrap label "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "Warning".
     */
    public function bootstrapLabelWarningFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayHelper::get($args, "content"), "label-" . BootstrapInterface::BOOTSTRAP_WARNING);
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
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
