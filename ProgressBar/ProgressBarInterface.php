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

use WBW\Bundle\BootstrapBundle\WBWBootstrapInterface;

/**
 * Progress bar interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\ProgressBar
 */
interface ProgressBarInterface {

    /**
     * Progress bar type "danger".
     *
     * @var string
     */
    const PROGRESS_BAR_TYPE_DANGER = WBWBootstrapInterface::BOOTSTRAP_DANGER;

    /**
     * Progress bar type "info".
     *
     * @var string
     */
    const PROGRESS_BAR_TYPE_INFO = WBWBootstrapInterface::BOOTSTRAP_INFO;

    /**
     * Progress bar type "success".
     *
     * @var string
     */
    const PROGRESS_BAR_TYPE_SUCCESS = WBWBootstrapInterface::BOOTSTRAP_SUCCESS;

    /**
     * Progress bar type "warning".
     *
     * @var string
     */
    const PROGRESS_BAR_TYPE_WARNING = WBWBootstrapInterface::BOOTSTRAP_WARNING;

    /**
     * Get the animated.
     *
     * @return bool Returns the animated.
     */
    public function getAnimated();

    /**
     * Get the content.
     *
     * @return string Returns the content.
     */
    public function getContent();

    /**
     * Get the height.
     *
     * @return int Returns the height.
     */
    public function getHeight();

    /**
     * Get the max.
     *
     * @return int Returns the max.
     */
    public function getMax();

    /**
     * Get the min.
     *
     * @return int Returns the min.
     */
    public function getMin();

    /**
     * Get the prefix.
     *
     * @return string Returns the prefix.
     */
    public function getPrefix();

    /**
     * Get the striped.
     *
     * @return bool Returns the striped.
     */
    public function getStriped();

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType();

    /**
     * Get the value.
     *
     * @return int Returns the value.
     */
    public function getValue();

    /**
     * Set the animated.
     *
     * @param bool $animated The animated.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setAnimated($animated);

    /**
     * Set the content.
     *
     * @param string $content The content.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setContent($content);

    /**
     * Set the height.
     *
     * @param int $height The height.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setHeight($height);

    /**
     * Set the max.
     *
     * @param int $max The max.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setMax($max);

    /**
     * Set the min.
     *
     * @param int $min The min.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setMin($min);

    /**
     * Set the striped.
     *
     * @param bool $striped The striped.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setStriped($striped);

    /**
     * Set the type.
     *
     * @param string $class The type.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setType($class);

    /**
     * Set the value.
     *
     * @param int $value The value.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setValue($value);
}
