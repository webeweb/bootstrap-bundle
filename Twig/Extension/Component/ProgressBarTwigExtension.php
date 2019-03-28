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
use WBW\Bundle\BootstrapBundle\ProgressBar\ProgressBarFactory;

/**
 * Progress bar Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @link https://getbootstrap.com/docs/3.3/components/#progress
 */
class ProgressBarTwigExtension extends AbstractProgressBarTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bootstrap.twig.extension.component.progress_bar";

    /**
     * Displays a Bootstrap progress bar "Basic".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap progress bar "Basic".
     */
    public function bootstrapProgressBarBasicFunction(array $args = []) {
        return $this->bootstrapProgressBar(ProgressBarFactory::parseBasicProgressBar($args));
    }

    /**
     * Displays a Bootstrap progress bar "Danger".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap progress bar "Danger".
     */
    public function bootstrapProgressBarDangerFunction(array $args = []) {
        return $this->bootstrapProgressBar(ProgressBarFactory::parseDangerProgressBar($args));
    }

    /**
     * Displays a Bootstrap progress bar "Info".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap progress bar "Info".
     */
    public function bootstrapProgressBarInfoFunction(array $args = []) {
        return $this->bootstrapProgressBar(ProgressBarFactory::parseInfoProgressBar($args));
    }

    /**
     * Displays a Bootstrap progress bar "Success".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap progress bar "Success".
     */
    public function bootstrapProgressBarSuccessFunction(array $args = []) {
        return $this->bootstrapProgressBar(ProgressBarFactory::parseSuccessProgressBar($args));
    }

    /**
     * Displays a Bootstrap progress bar "Warning".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap progress bar "Warning".
     */
    public function bootstrapProgressBarWarningFunction(array $args = []) {
        return $this->bootstrapProgressBar(ProgressBarFactory::parseWarningProgressBar($args));
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new TwigFunction("bootstrapProgressBarBasic", [$this, "bootstrapProgressBarBasicFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsProgressBarBasic", [$this, "bootstrapProgressBarBasicFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapProgressBarDanger", [$this, "bootstrapProgressBarDangerFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsProgressBarDanger", [$this, "bootstrapProgressBarDangerFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapProgressBarInfo", [$this, "bootstrapProgressBarInfoFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsProgressBarInfo", [$this, "bootstrapProgressBarInfoFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapProgressBarSuccess", [$this, "bootstrapProgressBarSuccessFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsProgressBarSuccess", [$this, "bootstrapProgressBarSuccessFunction"], ["is_safe" => ["html"]]),

            new TwigFunction("bootstrapProgressBarWarning", [$this, "bootstrapProgressBarWarningFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("bsProgressBarWarning", [$this, "bootstrapProgressBarWarningFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
