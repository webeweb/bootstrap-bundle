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

use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Progress bar factory.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\ProgressBar
 */
class ProgressBarFactory {

    /**
     * Creates a new basic progress bar.
     *
     * @return ProgressBarInterface Returns the success progress bar.
     */
    public static function newBasicProgressBar() {
        return new BasicProgressBar();
    }

    /**
     * Creates a new danger progress bar.
     *
     * @return ProgressBarInterface Returns the danger progress bar.
     */
    public static function newDangerProgressBar() {
        return new DangerProgressBar();
    }

    /**
     * Creates a new info progress bar.
     *
     * @return ProgressBarInterface Returns the info progress bar.
     */
    public static function newInfoProgressBar() {
        return new InfoProgressBar();
    }

    /**
     * Creates a new success progress bar.
     *
     * @return ProgressBarInterface Returns the success progress bar.
     */
    public static function newSuccessProgressBar() {
        return new SuccessProgressBar();
    }

    /**
     * Creates a new warning progress bar.
     *
     * @return ProgressBarInterface Returns the warning progress bar.
     */
    public static function newWarningProgressBar() {
        return new WarningProgressBar();
    }

    /**
     * Parse a basic progress bar.
     *
     * @param array $args The arguments.
     * @return ProgressBarInterface Returns the basic progress bar.
     */
    public static function parseBasicProgressBar(array $args) {
        return static::parseProgressBar(static::newBasicProgressBar(), $args);
    }

    /**
     * Parse a danger progress bar.
     *
     * @param array $args The arguments.
     * @return ProgressBarInterface Returns the danger progress bar.
     */
    public static function parseDangerProgressBar(array $args) {
        return static::parseProgressBar(static::newDangerProgressBar(), $args);
    }

    /**
     * Parse a info progress bar.
     *
     * @param array $args The arguments.
     * @return ProgressBarInterface Returns the info progress bar.
     */
    public static function parseInfoProgressBar(array $args) {
        return static::parseProgressBar(static::newInfoProgressBar(), $args);
    }

    /**
     * Parses a progress bar.
     *
     * @param ProgressBarInterface $progressBar The progress bar.
     * @param array $args The arguments.
     * @return ProgressBarInterface Returns the progress bar.
     */
    protected static function parseProgressBar(ProgressBarInterface $progressBar, array $args) {

        $progressBar->setAnimated(ArrayHelper::get($args, "animated", false));
        $progressBar->setContent(ArrayHelper::get($args, "content"));
        $progressBar->setMax(ArrayHelper::get($args, "max", 100));
        $progressBar->setMin(ArrayHelper::get($args, "min", 0));
        $progressBar->setStriped(ArrayHelper::get($args, "striped", false));
        $progressBar->setValue(ArrayHelper::get($args, "value", 50));

        return $progressBar;
    }

    /**
     * Parse a success progress bar.
     *
     * @param array $args The arguments.
     * @return ProgressBarInterface Returns the success progress bar.
     */
    public static function parseSuccessProgressBar(array $args) {
        return static::parseProgressBar(static::newSuccessProgressBar(), $args);
    }

    /**
     * Parse a warning progress bar.
     *
     * @param array $args The arguments.
     * @return ProgressBarInterface Returns the warning progress bar.
     */
    public static function parseWarningProgressBar(array $args) {
        return static::parseProgressBar(static::newWarningProgressBar(), $args);
    }
}
