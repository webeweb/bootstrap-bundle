<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Asset\Button;

use WBW\Bundle\BootstrapBundle\WBWBootstrapInterface;

/**
 * Button interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Asset\Button
 */
interface ButtonInterface {

    /**
     * Button size "lg".
     *
     * @var string
     */
    const BUTTON_SIZE_LG = "lg";

    /**
     * Button size "sm".
     *
     * @var string
     */
    const BUTTON_SIZE_SM = "sm";

    /**
     * Button size "xs".
     *
     * @var string
     */
    const BUTTON_SIZE_XS = "xs";

    /**
     * Button type "danger".
     *
     * @var string
     */
    const BUTTON_TYPE_DANGER = WBWBootstrapInterface::BOOTSTRAP_DANGER;

    /**
     * Button type "dark".
     *
     * @var string
     */
    const BUTTON_TYPE_DARK = WBWBootstrapInterface::BOOTSTRAP_DARK;

    /**
     * Button type "default".
     *
     * @var string
     */
    const BUTTON_TYPE_DEFAULT = WBWBootstrapInterface::BOOTSTRAP_DEFAULT;

    /**
     * Button type "info".
     *
     * @var string
     */
    const BUTTON_TYPE_INFO = WBWBootstrapInterface::BOOTSTRAP_INFO;

    /**
     * Button type "light".
     *
     * @var string
     */
    const BUTTON_TYPE_LIGHT = WBWBootstrapInterface::BOOTSTRAP_LIGHT;

    /**
     * Button type "link".
     *
     * @var string
     */
    const BUTTON_TYPE_LINK = "link";

    /**
     * Button type "primary".
     *
     * @var string
     */
    const BUTTON_TYPE_PRIMARY = WBWBootstrapInterface::BOOTSTRAP_PRIMARY;

    /**
     * Button type "secondary".
     *
     * @var string
     */
    const BUTTON_TYPE_SECONDARY = WBWBootstrapInterface::BOOTSTRAP_SECONDARY;

    /**
     * Button type "success".
     *
     * @var string
     */
    const BUTTON_TYPE_SUCCESS = WBWBootstrapInterface::BOOTSTRAP_SUCCESS;

    /**
     * Button type "warning".
     *
     * @var string
     */
    const BUTTON_TYPE_WARNING = WBWBootstrapInterface::BOOTSTRAP_WARNING;

    /**
     * Get the active.
     *
     * @return bool|null Returns the active.
     */
    public function getActive(): ?bool;

    /**
     * Get the block.
     *
     * @return bool|null Returns the block.
     */
    public function getBlock(): ?bool;

    /**
     * Get the content.
     *
     * @return string|null Returns the content.
     */
    public function getContent(): ?string;

    /**
     * Get the disabled.
     *
     * @return bool|null Returns the disabled.
     */
    public function getDisabled(): ?bool;

    /**
     * Get the outline.
     *
     * @return bool|null Returns the outline.
     */
    public function getOutline(): ?bool;

    /**
     * Get the prefix.
     *
     * @return string|null Returns the prefix.
     */
    public function getPrefix(): ?string;

    /**
     * Get the size.
     *
     * @return string|null Returns the size.
     */
    public function getSize(): ?string;

    /**
     * Get the title.
     *
     * @return string|null Returns the title.
     */
    public function getTitle(): ?string;

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string;

    /**
     * Set the active.
     *
     * @param bool|null $active The active.
     * @return ButtonInterface Returns this button.
     */
    public function setActive(?bool $active): ButtonInterface;

    /**
     * Set the block.
     *
     * @param bool|null $block The block.
     * @return ButtonInterface Returns this button.
     */
    public function setBlock(?bool $block): ButtonInterface;

    /**
     * Set the content.
     *
     * @param string|null $content The content.
     * @return ButtonInterface Returns this button.
     */
    public function setContent(?string $content): ButtonInterface;

    /**
     * Set the disabled.
     *
     * @param bool|null $disabled The disabled.
     * @return ButtonInterface Returns this button.
     */
    public function setDisabled(?bool $disabled): ?ButtonInterface;

    /**
     * Set the outline.
     *
     * @param bool|null $outline The outline.
     * @return ButtonInterface Returns this button.
     */
    public function setOutline(?bool $outline): ButtonInterface;

    /**
     * Set the size.
     *
     * @param string|null $size The size.
     * @return ButtonInterface Returns this button.
     */
    public function setSize(?string $size): ButtonInterface;

    /**
     * Set the title.
     *
     * @param string|null $title The title.
     * @return ButtonInterface Returns this button.
     */
    public function setTitle(?string $title): ButtonInterface;

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return ButtonInterface Returns this button.
     */
    public function setType(?string $type): ButtonInterface;
}
