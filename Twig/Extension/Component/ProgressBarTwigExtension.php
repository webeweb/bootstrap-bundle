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

use Twig\TwigFilter;
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
    const SERVICE_NAME = "wbw.bootstrap.twig.extension.component.progress_bar";

    /**
     * Displays a Bootstrap multiple bars.
     *
     * @param string[] $progressBars The progress bars.
     * @return string Returns the Bootstrap multiple bars.
     */
    public function bootstrapMultipleBars(array $progressBars) {
        $output = implode("", $progressBars);
        return str_replace(['</div><div class="progress">'], [""], $output);
    }

    /**
     * Displays a Bootstrap progress bar "basic".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap progress bar "basic".
     */
    public function bootstrapProgressBarBasicFunction(array $args = []) {
        return $this->bootstrapProgressBar(ProgressBarFactory::parseBasicProgressBar($args));
    }

    /**
     * Displays a Bootstrap progress bar "danger".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap progress bar "danger".
     */
    public function bootstrapProgressBarDangerFunction(array $args = []) {
        return $this->bootstrapProgressBar(ProgressBarFactory::parseDangerProgressBar($args));
    }

    /**
     * Displays a Bootstrap progress bar "info".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap progress bar "info".
     */
    public function bootstrapProgressBarInfoFunction(array $args = []) {
        return $this->bootstrapProgressBar(ProgressBarFactory::parseInfoProgressBar($args));
    }

    /**
     * Displays a Bootstrap progress bar "success".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap progress bar "success".
     */
    public function bootstrapProgressBarSuccessFunction(array $args = []) {
        return $this->bootstrapProgressBar(ProgressBarFactory::parseSuccessProgressBar($args));
    }

    /**
     * Displays a Bootstrap progress bar "warning".
     *
     * @param array $args The arguments.
     * @return string Returns the Bootstrap progress bar "warning".
     */
    public function bootstrapProgressBarWarningFunction(array $args = []) {
        return $this->bootstrapProgressBar(ProgressBarFactory::parseWarningProgressBar($args));
    }

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters() {
        return [
            new TwigFilter("bootstrapMultipleBars", [$this, "bootstrapMultipleBars"], ["is_safe" => ["html"]]),
            new TwigFilter("bsMultipleBars", [$this, "bootstrapMultipleBars"], ["is_safe" => ["html"]]),
        ];
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

            new TwigFunction("bootstrapMultipleBars", [$this, "bootstrapMultipleBars"], ["is_safe" => ["html"]]),
            new TwigFunction("bsMultipleBars", [$this, "bootstrapMultipleBars"], ["is_safe" => ["html"]]),
        ];
    }
}
