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
 * Button renderer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Button
 */
class ButtonRenderer {

    /**
     * Render an active.
     *
     * @param ButtonInterface $button The button.
     * @return string|null Returns the rendered active.
     */
    public static function renderActive(ButtonInterface $button) {
        return true === $button->getActive() ? "active" : null;
    }

    /**
     * Render a block.
     *
     * @param ButtonInterface $button The button.
     * @return string|null Returns the rendered block.
     */
    public static function renderBlock(ButtonInterface $button) {
        return true === $button->getBlock() ? "btn-block" : null;
    }

    /**
     * Render a content.
     *
     * @param ButtonInterface $button The button.
     * @return string Returns the rendered block.
     */
    public static function renderContent(ButtonInterface $button) {
        return null !== $button->getContent() ? $button->getContent() : "";
    }

    /**
     * Render a data placement.
     *
     * @param ButtonInterface $button The button.
     * @return string|null Returns the rendered data placement.
     */
    public static function renderDataPlacement(ButtonInterface $button) {
        return null !== $button->getTitle() ? "top" : null;
    }

    /**
     * Render a data toggle.
     *
     * @param ButtonInterface $button The button.
     * @return string|null Returns the rendered data toggle.
     */
    public static function renderDataToggle(ButtonInterface $button) {
        return null !== $button->getTitle() ? "tooltip" : null;
    }

    /**
     * Render a disabled.
     *
     * @param ButtonInterface $button The button.
     * @return string|null Returns the rendered disabled.
     */
    public static function renderDisabled(ButtonInterface $button) {
        return true === $button->getDisabled() ? "disabled" : null;
    }

    /**
     * Render a size.
     *
     * @param ButtonInterface $button The button.
     * @return string|null Returns the rendered size.
     */
    public static function renderSize(ButtonInterface $button) {
        return null !== $button->getSize() ? "btn-" . $button->getSize() : null;
    }

    /**
     * Render a title.
     *
     * @param ButtonInterface $button The button.
     * @return string Returns the rendered title.
     */
    public static function renderTitle(ButtonInterface $button) {
        return $button->getTitle();
    }

    /**
     * Render a type.
     *
     * @param ButtonInterface $button The button.
     * @return string|null Returns the rendered type.
     */
    public static function renderType(ButtonInterface $button) {
        return null !== $button->getType() ? "btn-" . $button->getType() : null;
    }
}
