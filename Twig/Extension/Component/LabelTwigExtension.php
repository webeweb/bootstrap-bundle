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
use WBW\Library\Core\Helper\Argument\ArrayHelper;

/**
 * Label Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @see https://getbootstrap.com/docs/3.3/components/#labels
 */
class LabelTwigExtension extends AbstractLabelTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrapbundle.twig.extension.component.label";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap label "Danger".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "Danger".
     */
    public function bootstrapLabelDangerFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayHelper::get($args, "content"), "label-" . BootstrapBundle::BOOTSTRAP_DANGER);
    }

    /**
     * Displays a Bootstrap label "Default".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "Default".
     */
    public function bootstrapLabelDefaultFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayHelper::get($args, "content"), "label-" . BootstrapBundle::BOOTSTRAP_DEFAULT);
    }

    /**
     * Displays a Bootstrap label "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "Info".
     */
    public function bootstrapLabelInfoFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayHelper::get($args, "content"), "label-" . BootstrapBundle::BOOTSTRAP_INFO);
    }

    /**
     * Displays a Bootstrap label "Primary".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "Primary".
     */
    public function bootstrapLabelPrimaryFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayHelper::get($args, "content"), "label-" . BootstrapBundle::BOOTSTRAP_PRIMARY);
    }

    /**
     * Displays a Bootstrap label "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "Success".
     */
    public function bootstrapLabelSuccessFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayHelper::get($args, "content"), "label-" . BootstrapBundle::BOOTSTRAP_SUCCESS);
    }

    /**
     * Displays a Bootstrap label "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap label "Warning".
     */
    public function bootstrapLabelWarningFunction(array $args = []) {
        return $this->bootstrapLabel(ArrayHelper::get($args, "content"), "label-" . BootstrapBundle::BOOTSTRAP_WARNING);
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
