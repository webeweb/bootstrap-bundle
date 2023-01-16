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

use WBW\Bundle\BootstrapBundle\WBWBootstrapBundle;
use WBW\Library\Symfony\Assets\ButtonInterface as BaseButtonInterface;

/**
 * Button interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Assets
 */
interface ButtonInterface extends BaseButtonInterface {

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
     * Button type "dark".
     *
     * @var string
     */
    const BUTTON_TYPE_DARK = WBWBootstrapBundle::BOOTSTRAP_TYPE_DARK;

    /**
     * Button type "default".
     *
     * @var string
     */
    const BUTTON_TYPE_DEFAULT = WBWBootstrapBundle::BOOTSTRAP_TYPE_DEFAULT;

    /**
     * Button type "light".
     *
     * @var string
     */
    const BUTTON_TYPE_LIGHT = WBWBootstrapBundle::BOOTSTRAP_TYPE_LIGHT;

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
    const BUTTON_TYPE_PRIMARY = WBWBootstrapBundle::BOOTSTRAP_TYPE_PRIMARY;

    /**
     * Button type "secondary".
     *
     * @var string
     */
    const BUTTON_TYPE_SECONDARY = WBWBootstrapBundle::BOOTSTRAP_TYPE_SECONDARY;

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
     * Get the data.
     *
     * @return array Returns the data.
     */
    public function getData(): array;

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
     * Set the active.
     *
     * @param bool|null $active The active.
     * @return ButtonInterface Returns this button.
     */
    public function setActive(?bool $active);

    /**
     * Set the block.
     *
     * @param bool|null $block The block.
     * @return ButtonInterface Returns this button.
     */
    public function setBlock(?bool $block): ButtonInterface;

    /**
     * Set the data.
     *
     * @param array $data The data.
     * @return ButtonInterface Returns this button.
     */
    public function setData(array $data): ButtonInterface;

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
    public function setSize(?string $size);

    /**
     * Set the title.
     *
     * @param string|null $title The title.
     * @return ButtonInterface Returns this button.
     */
    public function setTitle(?string $title);
}
