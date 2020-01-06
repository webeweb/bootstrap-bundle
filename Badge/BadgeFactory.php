<?php

/*
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\BootstrapBundle\Badge;

use WBW\Library\Core\Argument\Helper\ArrayHelper;

/**
 * Badge factory.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Badge
 */
class BadgeFactory {

    /**
     * Creates a new danger badge.
     *
     * @return BadgeInterface Returns the danger badge.
     */
    public static function newDangerBadge() {
        return new DangerBadge();
    }

    /**
     * Creates a new dark badge.
     *
     * @return BadgeInterface Returns the dark badge.
     */
    public static function newDarkBadge() {
        return new DarkBadge();
    }

    /**
     * Creates a new default badge.
     *
     * @return BadgeInterface Returns the default badge.
     */
    public static function newDefaultBadge() {
        return new DefaultBadge();
    }

    /**
     * Creates a new info badge.
     *
     * @return BadgeInterface Returns the info badge.
     */
    public static function newInfoBadge() {
        return new InfoBadge();
    }

    /**
     * Creates a new light badge.
     *
     * @return BadgeInterface Returns the light badge.
     */
    public static function newLightBadge() {
        return new LightBadge();
    }

    /**
     * Creates a new primary badge.
     *
     * @return BadgeInterface Returns the primary badge.
     */
    public static function newPrimaryBadge() {
        return new PrimaryBadge();
    }

    /**
     * Creates a new secondary badge.
     *
     * @return BadgeInterface Returns the secondary badge.
     */
    public static function newSecondaryBadge() {
        return new SecondaryBadge();
    }

    /**
     * Creates a new success badge.
     *
     * @return BadgeInterface Returns the success badge.
     */
    public static function newSuccessBadge() {
        return new SuccessBadge();
    }

    /**
     * Creates a new warning badge.
     *
     * @return BadgeInterface Returns the warning badge.
     */
    public static function newWarningBadge() {
        return new WarningBadge();
    }

    /**
     * Parses a badge.
     *
     * @param BadgeInterface $badge The badge.
     * @param array $args The arguments.
     * @return BadgeInterface Returns the badge.
     */
    protected static function parseBadge(BadgeInterface $badge, array $args) {

        $badge->setContent(ArrayHelper::get($args, "content"));
        $badge->setPill(ArrayHelper::get($args, "pill", false));

        return $badge;
    }

    /**
     * Parse a danger badge.
     *
     * @param array $args The arguments.
     * @return BadgeInterface Returns the danger badge.
     */
    public static function parseDangerBadge(array $args) {
        return static::parseBadge(static::newDangerBadge(), $args);
    }

    /**
     * Parse a dark badge.
     *
     * @param array $args The arguments.
     * @return BadgeInterface Returns the dark badge.
     */
    public static function parseDarkBadge(array $args) {
        return static::parseBadge(static::newDarkBadge(), $args);
    }

    /**
     * Parse a default badge.
     *
     * @param array $args The arguments.
     * @return BadgeInterface Returns the default badge.
     */
    public static function parseDefaultBadge(array $args) {
        return static::parseBadge(static::newDefaultBadge(), $args);
    }

    /**
     * Parse a info badge.
     *
     * @param array $args The arguments.
     * @return BadgeInterface Returns the info badge.
     */
    public static function parseInfoBadge(array $args) {
        return static::parseBadge(static::newInfoBadge(), $args);
    }

    /**
     * Parse a light badge.
     *
     * @param array $args The arguments.
     * @return BadgeInterface Returns the light badge.
     */
    public static function parseLightBadge(array $args) {
        return static::parseBadge(static::newLightBadge(), $args);
    }

    /**
     * Parse a primary badge.
     *
     * @param array $args The arguments.
     * @return BadgeInterface Returns the primary badge.
     */
    public static function parsePrimaryBadge(array $args) {
        return static::parseBadge(static::newPrimaryBadge(), $args);
    }

    /**
     * Parse a secondary badge.
     *
     * @param array $args The arguments.
     * @return BadgeInterface Returns the secondary badge.
     */
    public static function parseSecondaryBadge(array $args) {
        return static::parseBadge(static::newSecondaryBadge(), $args);
    }

    /**
     * Parse a success badge.
     *
     * @param array $args The arguments.
     * @return BadgeInterface Returns the success badge.
     */
    public static function parseSuccessBadge(array $args) {
        return static::parseBadge(static::newSuccessBadge(), $args);
    }

    /**
     * Parse a warning badge.
     *
     * @param array $args The arguments.
     * @return BadgeInterface Returns the warning badge.
     */
    public static function parseWarningBadge(array $args) {
        return static::parseBadge(static::newWarningBadge(), $args);
    }
}
