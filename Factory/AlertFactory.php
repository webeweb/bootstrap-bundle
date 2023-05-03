<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Factory;

use WBW\Bundle\BootstrapBundle\Assets\Alert\DangerAlert;
use WBW\Bundle\BootstrapBundle\Assets\Alert\DarkAlert;
use WBW\Bundle\BootstrapBundle\Assets\Alert\InfoAlert;
use WBW\Bundle\BootstrapBundle\Assets\Alert\LightAlert;
use WBW\Bundle\BootstrapBundle\Assets\Alert\PrimaryAlert;
use WBW\Bundle\BootstrapBundle\Assets\Alert\SecondaryAlert;
use WBW\Bundle\BootstrapBundle\Assets\Alert\SuccessAlert;
use WBW\Bundle\BootstrapBundle\Assets\Alert\WarningAlert;
use WBW\Bundle\BootstrapBundle\Assets\AlertInterface;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Alert factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Factory
 */
class AlertFactory {

    /**
     * Create a new danger alert.
     *
     * @return AlertInterface Returns the danger alert.
     */
    public static function newDangerAlert(): AlertInterface {
        return new DangerAlert();
    }

    /**
     * Create a new default alert.
     *
     * @return AlertInterface Returns the default alert.
     */
    public static function newDarkAlert(): AlertInterface {
        return new DarkAlert();
    }

    /**
     * Create a new info alert.
     *
     * @return AlertInterface Returns the info alert.
     */
    public static function newInfoAlert(): AlertInterface {
        return new InfoAlert();
    }

    /**
     * Create a new light alert.
     *
     * @return AlertInterface Returns the light alert.
     */
    public static function newLightAlert(): AlertInterface {
        return new LightAlert();
    }

    /**
     * Create a new primary alert.
     *
     * @return AlertInterface Returns the primary alert.
     */
    public static function newPrimaryAlert(): AlertInterface {
        return new PrimaryAlert();
    }

    /**
     * Create a new secondary alert.
     *
     * @return AlertInterface Returns the secondary alert.
     */
    public static function newSecondaryAlert(): AlertInterface {
        return new SecondaryAlert();
    }

    /**
     * Create a new success alert.
     *
     * @return AlertInterface Returns the success alert.
     */
    public static function newSuccessAlert(): AlertInterface {
        return new SuccessAlert();
    }

    /**
     * Create a new warning alert.
     *
     * @return AlertInterface Returns the warning alert.
     */
    public static function newWarningAlert(): AlertInterface {
        return new WarningAlert();
    }

    /**
     * Parse an alert.
     *
     * @param AlertInterface $alert The alert.
     * @param array $args The arguments.
     * @return AlertInterface Returns the alert.
     */
    protected static function parseAlert(AlertInterface $alert, array $args): AlertInterface {

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
    public static function parseDangerAlert(array $args): AlertInterface {
        return static::parseAlert(static::newDangerAlert(), $args);
    }

    /**
     * Parse a dark alert.
     *
     * @param array $args The arguments.
     * @return AlertInterface Returns the dark alert.
     */
    public static function parseDarkAlert(array $args): AlertInterface {
        return static::parseAlert(static::newDarkAlert(), $args);
    }

    /**
     * Parse an info alert.
     *
     * @param array $args The arguments.
     * @return AlertInterface Returns the info alert.
     */
    public static function parseInfoAlert(array $args): AlertInterface {
        return static::parseAlert(static::newInfoAlert(), $args);
    }

    /**
     * Parse a light alert.
     *
     * @param array $args The arguments.
     * @return AlertInterface Returns the light alert.
     */
    public static function parseLightAlert(array $args): AlertInterface {
        return static::parseAlert(static::newLightAlert(), $args);
    }

    /**
     * Parse a primary alert.
     *
     * @param array $args The arguments.
     * @return AlertInterface Returns the primary alert.
     */
    public static function parsePrimaryAlert(array $args): AlertInterface {
        return static::parseAlert(static::newPrimaryAlert(), $args);
    }

    /**
     * Parse a secondary alert.
     *
     * @param array $args The arguments.
     * @return AlertInterface Returns the secondary alert.
     */
    public static function parseSecondaryAlert(array $args): AlertInterface {
        return static::parseAlert(static::newSecondaryAlert(), $args);
    }

    /**
     * Parse a success alert.
     *
     * @param array $args The arguments.
     * @return AlertInterface Returns the success alert.
     */
    public static function parseSuccessAlert(array $args): AlertInterface {
        return static::parseAlert(static::newSuccessAlert(), $args);
    }

    /**
     * Parse a warning alert.
     *
     * @param array $args The arguments.
     * @return AlertInterface Returns the warning alert.
     */
    public static function parseWarningAlert(array $args): AlertInterface {
        return static::parseAlert(static::newWarningAlert(), $args);
    }
}
