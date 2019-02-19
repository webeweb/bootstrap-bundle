<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\ProgressBar;

/**
 * Progress bar renderer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\ProgressBar
 */
class ProgressBarRenderer {

    /**
     * Render an animated.
     *
     * @param ProgressBarInterface $progressBar The progress bar.
     * @return string|null Returns the rendered animated.
     */
    public static function renderAnimated(ProgressBarInterface $progressBar) {
        return true === $progressBar->getAnimated() ? "active" : null;
    }

    /**
     * Render a striped.
     *
     * @param ProgressBarInterface $progressBar The progress bar.
     * @return string|null Returns the rendered striped.
     */
    public static function renderStriped(ProgressBarInterface $progressBar) {
        return true === $progressBar->getStriped() ? "progress-bar-striped" : null;
    }

    /**
     * Render a content.
     *
     * @param ProgressBarInterface $progressBar The progress bar.
     * @param string $default The default content.
     * @return string|null Returns the rendered content.
     */
    public static function renderContent(ProgressBarInterface $progressBar, $default) {
        return null !== $progressBar->getContent() ? $progressBar->getContent() : $default;
    }

    /**
     * Render a style.
     *
     * @param ProgressBarInterface $progressBar The progress bar.
     * @return string|null Returns the rendered style.
     */
    public static function renderStyle(ProgressBarInterface $progressBar) {
        return null !== $progressBar->getValue() ? "width: " . $progressBar->getValue() . "%;" : null;
    }

    /**
     * Render a type.
     *
     * @param ProgressBarInterface $progressBar The progress bar.
     * @return string|null Returns the rendered type.
     */
    public static function renderType(ProgressBarInterface $progressBar) {
        return null !== $progressBar->getType() ? "progress-bar-" . $progressBar->getType() : null;
    }
}
