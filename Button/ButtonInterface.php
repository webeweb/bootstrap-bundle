<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Button;

use WBW\Bundle\BootstrapBundle\WBWBootstrapInterface;

/**
 * Button interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Button
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
     * @return boolean Returns the active.
     */
    public function getActive();

    /**
     * Get the block.
     *
     * @return boolean Returns the block.
     */
    public function getBlock();

    /**
     * Get the content.
     *
     * @return string Returns the content.
     */
    public function getContent();

    /**
     * Get the disabled.
     *
     * @return boolean Returns the disabled.
     */
    public function getDisabled();

    /**
     * Get the outline.
     *
     * @return boolean Returns the outline.
     */
    public function getOutline();

    /**
     * Get the prefix.
     *
     * @return string Returns the prefix.
     */
    public function getPrefix();

    /**
     * Get the size.
     *
     * @return string Returns the size.
     */
    public function getSize();

    /**
     * Get the title.
     *
     * @return string Returns the title.
     */
    public function getTitle();

    /**
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType();

    /**
     * Set the active.
     *
     * @param boolean $active The active.
     * @return ButtonInterface Returns this button.
     */
    public function setActive($active);

    /**
     * Set the block.
     *
     * @param boolean $block The block.
     * @return ButtonInterface Returns this button.
     */
    public function setBlock($block);

    /**
     * Set the content.
     *
     * @param string $content The content.
     * @return ButtonInterface Returns this button.
     */
    public function setContent($content);

    /**
     * Set the disabled.
     *
     * @param boolean $disabled The disabled.
     * @return ButtonInterface Returns this button.
     */
    public function setDisabled($disabled);

    /**
     * Set the outline.
     *
     * @param boolean $outline The outline.
     * @return ButtonInterface Returns this button.
     */
    public function setOutline($outline);

    /**
     * Set the size.
     *
     * @param string $size The size.
     * @return ButtonInterface Returns this button.
     */
    public function setSize($size);

    /**
     * Set the title.
     *
     * @param string $title The title.
     * @return ButtonInterface Returns this button.
     */
    public function setTitle($title);

    /**
     * Set the type.
     *
     * @param string $class The type.
     * @return ButtonInterface Returns this button.
     */
    public function setType($class);
}
