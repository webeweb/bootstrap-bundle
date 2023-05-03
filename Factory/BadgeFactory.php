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

use WBW\Bundle\BootstrapBundle\Assets\Badge\DangerBadge;
use WBW\Bundle\BootstrapBundle\Assets\Badge\DarkBadge;
use WBW\Bundle\BootstrapBundle\Assets\Badge\DefaultBadge;
use WBW\Bundle\BootstrapBundle\Assets\Badge\InfoBadge;
use WBW\Bundle\BootstrapBundle\Assets\Badge\LightBadge;
use WBW\Bundle\BootstrapBundle\Assets\Badge\PrimaryBadge;
use WBW\Bundle\BootstrapBundle\Assets\Badge\SecondaryBadge;
use WBW\Bundle\BootstrapBundle\Assets\Badge\SuccessBadge;
use WBW\Bundle\BootstrapBundle\Assets\Badge\WarningBadge;
use WBW\Bundle\BootstrapBundle\Assets\BadgeInterface;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * Badge factory.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\BootstrapBundle\Factory
 */
class BadgeFactory {

    /**
     * Create a new danger badge.
     *
     * @return BadgeInterface Returns the danger badge.
     */
    public static function newDangerBadge(): BadgeInterface {
        return new DangerBadge();
    }

    /**
     * Create a new dark badge.
     *
     * @return BadgeInterface Returns the dark badge.
     */
    public static function newDarkBadge(): BadgeInterface {
        return new DarkBadge();
    }

    /**
     * Create a new default badge.
     *
     * @return BadgeInterface Returns the default badge.
     */
    public static function newDefaultBadge(): BadgeInterface {
        return new DefaultBadge();
    }

    /**
     * Create a new info badge.
     *
     * @return BadgeInterface Returns the info badge.
     */
    public static function newInfoBadge(): BadgeInterface {
        return new InfoBadge();
    }

    /**
     * Create a new light badge.
     *
     * @return BadgeInterface Returns the light badge.
     */
    public static function newLightBadge(): BadgeInterface {
        return new LightBadge();
    }

    /**
     * Create a new primary badge.
     *
     * @return BadgeInterface Returns the primary badge.
     */
    public static function newPrimaryBadge(): BadgeInterface {
        return new PrimaryBadge();
    }

    /**
     * Create a new secondary badge.
     *
     * @return BadgeInterface Returns the secondary badge.
     */
    public static function newSecondaryBadge(): BadgeInterface {
        return new SecondaryBadge();
    }

    /**
     * Create a new success badge.
     *
     * @return BadgeInterface Returns the success badge.
     */
    public static function newSuccessBadge(): BadgeInterface {
        return new SuccessBadge();
    }

    /**
     * Create a new warning badge.
     *
     * @return BadgeInterface Returns the warning badge.
     */
    public static function newWarningBadge(): BadgeInterface {
        return new WarningBadge();
    }

    /**
     * Parse a badge.
     *
     * @param BadgeInterface $badge The badge.
     * @param array $args The arguments.
     * @return BadgeInterface Returns the badge.
     */
    protected static function parseBadge(BadgeInterface $badge, array $args): BadgeInterface {

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
    public static function parseDangerBadge(array $args): BadgeInterface {
        return static::parseBadge(static::newDangerBadge(), $args);
    }

    /**
     * Parse a dark badge.
     *
     * @param array $args The arguments.
     * @return BadgeInterface Returns the dark badge.
     */
    public static function parseDarkBadge(array $args): BadgeInterface {
        return static::parseBadge(static::newDarkBadge(), $args);
    }

    /**
     * Parse a default badge.
     *
     * @param array $args The arguments.
     * @return BadgeInterface Returns the default badge.
     */
    public static function parseDefaultBadge(array $args): BadgeInterface {
        return static::parseBadge(static::newDefaultBadge(), $args);
    }

    /**
     * Parse an info badge.
     *
     * @param array $args The arguments.
     * @return BadgeInterface Returns the info badge.
     */
    public static function parseInfoBadge(array $args): BadgeInterface {
        return static::parseBadge(static::newInfoBadge(), $args);
    }

    /**
     * Parse a light badge.
     *
     * @param array $args The arguments.
     * @return BadgeInterface Returns the light badge.
     */
    public static function parseLightBadge(array $args): BadgeInterface {
        return static::parseBadge(static::newLightBadge(), $args);
    }

    /**
     * Parse a primary badge.
     *
     * @param array $args The arguments.
     * @return BadgeInterface Returns the primary badge.
     */
    public static function parsePrimaryBadge(array $args): BadgeInterface {
        return static::parseBadge(static::newPrimaryBadge(), $args);
    }

    /**
     * Parse a secondary badge.
     *
     * @param array $args The arguments.
     * @return BadgeInterface Returns the secondary badge.
     */
    public static function parseSecondaryBadge(array $args): BadgeInterface {
        return static::parseBadge(static::newSecondaryBadge(), $args);
    }

    /**
     * Parse a success badge.
     *
     * @param array $args The arguments.
     * @return BadgeInterface Returns the success badge.
     */
    public static function parseSuccessBadge(array $args): BadgeInterface {
        return static::parseBadge(static::newSuccessBadge(), $args);
    }

    /**
     * Parse a warning badge.
     *
     * @param array $args The arguments.
     * @return BadgeInterface Returns the warning badge.
     */
    public static function parseWarningBadge(array $args): BadgeInterface {
        return static::parseBadge(static::newWarningBadge(), $args);
    }
}
