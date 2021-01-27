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
     * @return bool|null Returns the animated.
     */
    public function getAnimated(): ?bool;

    /**
     * Get the content.
     *
     * @return string|null Returns the content.
     */
    public function getContent(): ?string;

    /**
     * Get the height.
     *
     * @return int|null Returns the height.
     */
    public function getHeight(): ?int;

    /**
     * Get the max.
     *
     * @return int|null Returns the max.
     */
    public function getMax(): ?int;

    /**
     * Get the min.
     *
     * @return int|null Returns the min.
     */
    public function getMin(): ?int;

    /**
     * Get the prefix.
     *
     * @return string|null Returns the prefix.
     */
    public function getPrefix(): ?string;

    /**
     * Get the striped.
     *
     * @return bool|null Returns the striped.
     */
    public function getStriped(): ?bool;

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string;

    /**
     * Get the value.
     *
     * @return int|null Returns the value.
     */
    public function getValue(): ?int;

    /**
     * Set the animated.
     *
     * @param bool|null $animated The animated.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setAnimated(?bool $animated): ProgressBarInterface;

    /**
     * Set the content.
     *
     * @param string|null $content The content.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setContent(?string $content): ProgressBarInterface;

    /**
     * Set the height.
     *
     * @param int|null $height The height.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setHeight(?int $height): ProgressBarInterface;

    /**
     * Set the max.
     *
     * @param int|null $max The max.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setMax(?int $max): ProgressBarInterface;

    /**
     * Set the min.
     *
     * @param int|null $min The min.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setMin(?int $min): ProgressBarInterface;

    /**
     * Set the striped.
     *
     * @param bool|null $striped The striped.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setStriped(?bool $striped): ProgressBarInterface;

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setType(?string $type): ProgressBarInterface;

    /**
     * Set the value.
     *
     * @param int|null $value The value.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setValue(?int $value): ProgressBarInterface;
}
