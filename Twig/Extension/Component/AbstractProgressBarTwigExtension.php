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

use WBW\Bundle\BootstrapBundle\ProgressBar\ProgressBarInterface;
use WBW\Bundle\BootstrapBundle\ProgressBar\ProgressBarRenderer;
use WBW\Bundle\BootstrapBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Abstract progress bar Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Twig\Extension\Component
 * @abstract
 */
abstract class AbstractProgressBarTwigExtension extends AbstractTwigExtension {

    /**
     * Displays a Bootstrap progress bar.
     *
     * @param ProgressBarInterface $progressBar The progress bar.
     * @return string Returns the Bootstrap progress bar.
     */
    protected function bootstrapProgressBar(ProgressBarInterface $progressBar): string {

        $span = static::coreHTMLElement("span", $progressBar->getValue() . "%", ["class" => "sr-only"]);

        $type = ProgressBarRenderer::renderType($progressBar);
        if (3 !== $this->getVersion()) {
            $type = preg_replace("/progress-bar-(danger|info|success|warning)/", "bg-$1", $type);
        }

        $attributes = [];

        $attributes["class"]         = ["progress-bar", $type];
        $attributes["class"][]       = ProgressBarRenderer::renderStriped($progressBar);
        $attributes["class"][]       = ProgressBarRenderer::renderAnimated($progressBar);
        $attributes["style"]         = ProgressBarRenderer::renderStyle($progressBar);
        $attributes["role"]          = "progressbar";
        $attributes["aria-valuenow"] = $progressBar->getValue();
        $attributes["aria-valuemin"] = $progressBar->getMin();
        $attributes["aria-valuemax"] = $progressBar->getMax();

        $innerHTML = ProgressBarRenderer::renderContent($progressBar, $span);

        $div = static::coreHTMLElement("div", $innerHTML, $attributes);

        return static::coreHTMLElement("div", $div, ["class" => "progress"]);
    }
}
