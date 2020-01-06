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

use WBW\Library\Core\Argument\Helper\ArrayHelper;

/**
 * Button factory.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Button
 */
class ButtonFactory {

    /**
     * Creates a new danger button.
     *
     * @return ButtonInterface Returns the danger button.
     */
    public static function newDangerButton() {
        return new DangerButton();
    }

    /**
     * Creates a new dark button.
     *
     * @return ButtonInterface Returns the dark button.
     */
    public static function newDarkButton() {
        return new DarkButton();
    }

    /**
     * Creates a new default button.
     *
     * @return ButtonInterface Returns the default button.
     */
    public static function newDefaultButton() {
        return new DefaultButton();
    }

    /**
     * Creates a new info button.
     *
     * @return ButtonInterface Returns the info button.
     */
    public static function newInfoButton() {
        return new InfoButton();
    }

    /**
     * Creates a new light button.
     *
     * @return ButtonInterface Returns the light button.
     */
    public static function newLightButton() {
        return new LightButton();
    }

    /**
     * Creates a new link button.
     *
     * @return ButtonInterface Returns the link button.
     */
    public static function newLinkButton() {
        return new LinkButton();
    }

    /**
     * Creates a new primary button.
     *
     * @return ButtonInterface Returns the primary button.
     */
    public static function newPrimaryButton() {
        return new PrimaryButton();
    }

    /**
     * Creates a new secondary button.
     *
     * @return ButtonInterface Returns the secondary button.
     */
    public static function newSecondaryButton() {
        return new SecondaryButton();
    }

    /**
     * Creates a new success button.
     *
     * @return ButtonInterface Returns the success button.
     */
    public static function newSuccessButton() {
        return new SuccessButton();
    }

    /**
     * Creates a new warning button.
     *
     * @return ButtonInterface Returns the warning button.
     */
    public static function newWarningButton() {
        return new WarningButton();
    }

    /**
     * Parses a button.
     *
     * @param ButtonInterface $button The button.
     * @param array $args The arguments.
     * @return ButtonInterface Returns the button.
     */
    protected static function parseButton(ButtonInterface $button, array $args) {

        $button->setActive(ArrayHelper::get($args, "active", false));
        $button->setBlock(ArrayHelper::get($args, "block", false));
        $button->setContent(ArrayHelper::get($args, "content"));
        $button->setDisabled(ArrayHelper::get($args, "disabled", false));
        $button->setOutline(ArrayHelper::get($args, "outline", false));
        $button->setSize(ArrayHelper::get($args, "size"));
        $button->setTitle(ArrayHelper::get($args, "title"));

        return $button;
    }

    /**
     * Parse a danger button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the danger button.
     */
    public static function parseDangerButton(array $args) {
        return static::parseButton(static::newDangerButton(), $args);
    }

    /**
     * Parse a dark button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the dark button.
     */
    public static function parseDarkButton(array $args) {
        return static::parseButton(static::newDarkButton(), $args);
    }

    /**
     * Parse a default button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the default button.
     */
    public static function parseDefaultButton(array $args) {
        return static::parseButton(static::newDefaultButton(), $args);
    }

    /**
     * Parse a info button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the info button.
     */
    public static function parseInfoButton(array $args) {
        return static::parseButton(static::newInfoButton(), $args);
    }

    /**
     * Parse a light button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the light button.
     */
    public static function parseLightButton(array $args) {
        return static::parseButton(static::newLightButton(), $args);
    }

    /**
     * Parse a link button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the link button.
     */
    public static function parseLinkButton(array $args) {
        return static::parseButton(static::newLinkButton(), $args);
    }

    /**
     * Parse a primary button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the primary button.
     */
    public static function parsePrimaryButton(array $args) {
        return static::parseButton(static::newPrimaryButton(), $args);
    }

    /**
     * Parse a secondary button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the secondary button.
     */
    public static function parseSecondaryButton(array $args) {
        return static::parseButton(static::newSecondaryButton(), $args);
    }

    /**
     * Parse a success button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the success button.
     */
    public static function parseSuccessButton(array $args) {
        return static::parseButton(static::newSuccessButton(), $args);
    }

    /**
     * Parse a warning button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the warning button.
     */
    public static function parseWarningButton(array $args) {
        return static::parseButton(static::newWarningButton(), $args);
    }
}
