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
    const BUTTON_TYPE_DANGER = "danger";

    /**
     * Button type "default".
     *
     * @var string
     */
    const BUTTON_TYPE_DEFAULT = "default";

    /**
     * Button type "info".
     *
     * @var string
     */
    const BUTTON_TYPE_INFO = "info";

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
    const BUTTON_TYPE_PRIMARY = "primary";

    /**
     * Button type "success".
     *
     * @var string
     */
    const BUTTON_TYPE_SUCCESS = "success";

    /**
     * Button type "warning".
     *
     * @var string
     */
    const BUTTON_TYPE_WARNING = "warning";

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
     * Get the class.
     *
     * @return string Returns the class.
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
     * Set the class.
     *
     * @param string $class The class.
     * @return ButtonInterface Returns this button.
     */
    public function setType($class);
}
