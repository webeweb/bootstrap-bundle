<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Alert;

use WBW\Library\Core\Argument\Helper\ArrayHelper;

/**
 * Alert factory.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Alert
 */
class AlertFactory {

    /**
     * Creates a new danger alert.
     *
     * @return AlertInterface Returns the danger alert.
     */
    public static function newDangerAlert() {
        return new DangerAlert();
    }

    /**
     * Creates a new default alert.
     *
     * @return AlertInterface Returns the default alert.
     */
    public static function newDarkAlert() {
        return new DarkAlert();
    }

    /**
     * Creates a new info alert.
     *
     * @return AlertInterface Returns the info alert.
     */
    public static function newInfoAlert() {
        return new InfoAlert();
    }

    /**
     * Creates a new light alert.
     *
     * @return AlertInterface Returns the light alert.
     */
    public static function newLightAlert() {
        return new LightAlert();
    }

    /**
     * Creates a new primary alert.
     *
     * @return AlertInterface Returns the primary alert.
     */
    public static function newPrimaryAlert() {
        return new PrimaryAlert();
    }

    /**
     * Creates a new secondary alert.
     *
     * @return AlertInterface Returns the secondary alert.
     */
    public static function newSecondaryAlert() {
        return new SecondaryAlert();
    }

    /**
     * Creates a new success alert.
     *
     * @return AlertInterface Returns the success alert.
     */
    public static function newSuccessAlert() {
        return new SuccessAlert();
    }

    /**
     * Creates a new warning alert.
     *
     * @return AlertInterface Returns the warning alert.
     */
    public static function newWarningAlert() {
        return new WarningAlert();
    }

    /**
     * Parses an alert.
     *
     * @param AlertInterface $alert The alert.
     * @param array $args The arguments.
     * @return AlertInterface Returns the alert.
     */
    protected static function parseAlert(AlertInterface $alert, array $args) {

        $alert->setContent(ArrayHelper::get($args, "content"));
        $alert->setDismissible(ArrayHelper::get($args, "dismissible", false));

        return $alert;
    }

    /**
     * Parse a danger alert.
     *
     * @param array $args The arguments.
     * @return AlertInterface Returns the danger alert.
     */
    public static function parseDangerAlert(array $args) {
        return static::parseAlert(static::newDangerAlert(), $args);
    }

    /**
     * Parse a dark alert.
     *
     * @param array $args The arguments.
     * @return AlertInterface Returns the dark alert.
     */
    public static function parseDarkAlert(array $args) {
        return static::parseAlert(static::newDarkAlert(), $args);
    }

    /**
     * Parse a info alert.
     *
     * @param array $args The arguments.
     * @return AlertInterface Returns the info alert.
     */
    public static function parseInfoAlert(array $args) {
        return static::parseAlert(static::newInfoAlert(), $args);
    }

    /**
     * Parse a light alert.
     *
     * @param array $args The arguments.
     * @return AlertInterface Returns the light alert.
     */
    public static function parseLightAlert(array $args) {
        return static::parseAlert(static::newLightAlert(), $args);
    }

    /**
     * Parse a primary alert.
     *
     * @param array $args The arguments.
     * @return AlertInterface Returns the primary alert.
     */
    public static function parsePrimaryAlert(array $args) {
        return static::parseAlert(static::newPrimaryAlert(), $args);
    }

    /**
     * Parse a secondary alert.
     *
     * @param array $args The arguments.
     * @return AlertInterface Returns the secondary alert.
     */
    public static function parseSecondaryAlert(array $args) {
        return static::parseAlert(static::newSecondaryAlert(), $args);
    }

    /**
     * Parse a success alert.
     *
     * @param array $args The arguments.
     * @return AlertInterface Returns the success alert.
     */
    public static function parseSuccessAlert(array $args) {
        return static::parseAlert(static::newSuccessAlert(), $args);
    }

    /**
     * Parse a warning alert.
     *
     * @param array $args The arguments.
     * @return AlertInterface Returns the warning alert.
     */
    public static function parseWarningAlert(array $args) {
        return static::parseAlert(static::newWarningAlert(), $args);
    }
}
