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

use WBW\Library\Core\Argument\ArrayHelper;

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
     * Creates a new primary button.
     *
     * @return ButtonInterface Returns the primary button.
     */
    public static function newPrimaryButton() {
        return new PrimaryButton();
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
     * Parse a danger button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the danger button.
     */
    public static function parseDangerButton(array $args) {

        $button = static::newDangerButton();

        $button->setActive(ArrayHelper::get($args, "active", false));
        $button->setBlock(ArrayHelper::get($args, "block", false));
        $button->setContent(ArrayHelper::get($args, "content"));
        $button->setDisabled(ArrayHelper::get($args, "disabled", false));
        $button->setSize(ArrayHelper::get($args, "size"));
        $button->setTitle(ArrayHelper::get($args, "title"));

        return $button;
    }

    /**
     * Parse a default button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the default button.
     */
    public static function parseDefaultButton(array $args) {

        $button = static::newDefaultButton();

        $button->setActive(ArrayHelper::get($args, "active", false));
        $button->setBlock(ArrayHelper::get($args, "block", false));
        $button->setContent(ArrayHelper::get($args, "content"));
        $button->setDisabled(ArrayHelper::get($args, "disabled", false));
        $button->setSize(ArrayHelper::get($args, "size"));
        $button->setTitle(ArrayHelper::get($args, "title"));

        return $button;
    }

    /**
     * Parse a info button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the info button.
     */
    public static function parseInfoButton(array $args) {

        $button = static::newInfoButton();

        $button->setActive(ArrayHelper::get($args, "active", false));
        $button->setBlock(ArrayHelper::get($args, "block", false));
        $button->setContent(ArrayHelper::get($args, "content"));
        $button->setDisabled(ArrayHelper::get($args, "disabled", false));
        $button->setSize(ArrayHelper::get($args, "size"));
        $button->setTitle(ArrayHelper::get($args, "title"));

        return $button;
    }

    /**
     * Parse a primary button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the primary button.
     */
    public static function parsePrimaryButton(array $args) {

        $button = static::newPrimaryButton();

        $button->setActive(ArrayHelper::get($args, "active", false));
        $button->setBlock(ArrayHelper::get($args, "block", false));
        $button->setContent(ArrayHelper::get($args, "content"));
        $button->setDisabled(ArrayHelper::get($args, "disabled", false));
        $button->setSize(ArrayHelper::get($args, "size"));
        $button->setTitle(ArrayHelper::get($args, "title"));

        return $button;
    }

    /**
     * Parse a success button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the success button.
     */
    public static function parseSuccessButton(array $args) {

        $button = static::newSuccessButton();

        $button->setActive(ArrayHelper::get($args, "active", false));
        $button->setBlock(ArrayHelper::get($args, "block", false));
        $button->setContent(ArrayHelper::get($args, "content"));
        $button->setDisabled(ArrayHelper::get($args, "disabled", false));
        $button->setSize(ArrayHelper::get($args, "size"));
        $button->setTitle(ArrayHelper::get($args, "title"));

        return $button;
    }

    /**
     * Parse a warning button.
     *
     * @param array $args The arguments.
     * @return ButtonInterface Returns the warning button.
     */
    public static function parseWarningButton(array $args) {

        $button = static::newWarningButton();

        $button->setActive(ArrayHelper::get($args, "active", false));
        $button->setBlock(ArrayHelper::get($args, "block", false));
        $button->setContent(ArrayHelper::get($args, "content"));
        $button->setDisabled(ArrayHelper::get($args, "disabled", false));
        $button->setSize(ArrayHelper::get($args, "size"));
        $button->setTitle(ArrayHelper::get($args, "title"));

        return $button;
    }
}
