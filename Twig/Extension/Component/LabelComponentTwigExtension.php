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
 * Label component Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @final
 */
final class LabelComponentTwigExtension extends AbstractComponentTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.bootstrapbundle.twig.extension.component.label";

    /**
     * Displays a Bootstrap label "Danger".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "Danger".
     */
    public function bootstrapLabelDangerFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayUtility::get($args, "content"), "label-danger");
    }

    /**
     * Displays a Bootstrap label "Default".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "Default".
     */
    public function bootstrapLabelDefaultFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayUtility::get($args, "content"), "label-default");
    }

    /**
     * Displays a Bootstrap label "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "Info".
     */
    public function bootstrapLabelInfoFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayUtility::get($args, "content"), "label-info");
    }

    /**
     * Displays a Bootstrap label "Primary".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "Primary".
     */
    public function bootstrapLabelPrimaryFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayUtility::get($args, "content"), "label-primary");
    }

    /**
     * Displays a Bootstrap label "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "Success".
     */
    public function bootstrapLabelSuccessFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayUtility::get($args, "content"), "label-success");
    }

    /**
     * Displays a Bootstrap label "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "Warning".
     */
    public function bootstrapLabelWarningFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayUtility::get($args, "content"), "label-warning");
    }

    /**
     * Get the Twig functions.
     *
     * @return Twig_SimpleFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapLabelDanger", [$this, "bootstrapLabelDangerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapLabelDefault", [$this, "bootstrapLabelDefaultFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapLabelInfo", [$this, "bootstrapLabelInfoFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapLabelPrimary", [$this, "bootstrapLabelPrimaryFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapLabelSuccess", [$this, "bootstrapLabelSuccessFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapLabelWarning", [$this, "bootstrapLabelWarningFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
