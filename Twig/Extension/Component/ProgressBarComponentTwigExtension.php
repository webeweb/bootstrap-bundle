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
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Progress bar Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @see https://getbootstrap.com/docs/3.3/components/#progress
 */
class ProgressBarComponentTwigExtension extends AbstractProgressBarTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrapbundle.twig.extension.component.progressbar";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays a Bootstrap progress bar "Basic".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap progress bar "Basic".
     */
    public function bootstrapProgressBarBasicFunction(array $args = []) {
        return $this->bootstrapProgressBar(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "value", 50), ArrayUtility::get($args, "min", 0), ArrayUtility::get($args, "max", 100), ArrayUtility::get($args, "striped", false), ArrayUtility::get($args, "animated", false));
    }

    /**
     * Displays a Bootstrap progress bar "Danger".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap progress bar "Danger".
     */
    public function bootstrapProgressBarDangerFunction(array $args = []) {
        return $this->bootstrapProgressBar(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "value", 50), ArrayUtility::get($args, "min", 0), ArrayUtility::get($args, "max", 100), ArrayUtility::get($args, "striped", false), ArrayUtility::get($args, "animated", false), "progress-bar-" . BootstrapBundle::BOOTSTRAP_DANGER);
    }

    /**
     * Displays a Bootstrap progress bar "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap progress bar "Info".
     */
    public function bootstrapProgressBarInfoFunction(array $args = []) {
        return $this->bootstrapProgressBar(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "value", 50), ArrayUtility::get($args, "min", 0), ArrayUtility::get($args, "max", 100), ArrayUtility::get($args, "striped", false), ArrayUtility::get($args, "animated", false), "progress-bar-" . BootstrapBundle::BOOTSTRAP_INFO);
    }

    /**
     * Displays a Bootstrap progress bar "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap progress bar "Success".
     */
    public function bootstrapProgressBarSuccessFunction(array $args = []) {
        return $this->bootstrapProgressBar(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "value", 50), ArrayUtility::get($args, "min", 0), ArrayUtility::get($args, "max", 100), ArrayUtility::get($args, "striped", false), ArrayUtility::get($args, "animated", false), "progress-bar-" . BootstrapBundle::BOOTSTRAP_SUCCESS);
    }

    /**
     * Displays a Bootstrap progress bar "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap progress bar "Warning".
     */
    public function bootstrapProgressBarWarningFunction(array $args = []) {
        return $this->bootstrapProgressBar(ArrayUtility::get($args, "content"), ArrayUtility::get($args, "value", 50), ArrayUtility::get($args, "min", 0), ArrayUtility::get($args, "max", 100), ArrayUtility::get($args, "striped", false), ArrayUtility::get($args, "animated", false), "progress-bar-" . BootstrapBundle::BOOTSTRAP_WARNING);
    }

    /**
     * Get the Twig functions.
     *
     * @return Twig_SimpleFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("bootstrapProgressBarBasic", [$this, "bootstrapProgressBarBasicFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapProgressBarDanger", [$this, "bootstrapProgressBarDangerFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapProgressBarInfo", [$this, "bootstrapProgressBarInfoFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapProgressBarSuccess", [$this, "bootstrapProgressBarSuccessFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("bootstrapProgressBarWarning", [$this, "bootstrapProgressBarWarningFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
