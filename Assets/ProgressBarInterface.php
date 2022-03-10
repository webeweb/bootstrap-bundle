<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Assets;

use WBW\Library\Symfony\Assets\ProgressBarInterface as BaseProgressBarInterface;

/**
 * Progress bar interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Assets
 */
interface ProgressBarInterface extends BaseProgressBarInterface {

    /**
     * Get the animated.
     *
     * @return bool|null Returns the animated.
     */
    public function getAnimated(): ?bool;

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
     * Set the height.
     *
     * @param int|null $height The height.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setHeight(?int $height);

    /**
     * Set the max.
     *
     * @param int|null $max The max.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setMax(?int $max);

    /**
     * Set the min.
     *
     * @param int|null $min The min.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setMin(?int $min);

    /**
     * Set the striped.
     *
     * @param bool|null $striped The striped.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setStriped(?bool $striped): ProgressBarInterface;

    /**
     * Set the value.
     *
     * @param int|null $value The value.
     * @return ProgressBarInterface Returns this progress bar.
     */
    public function setValue(?int $value);
}
