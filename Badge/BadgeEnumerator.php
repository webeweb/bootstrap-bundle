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

/**
 * Badge enumerator.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Badge
 */
class BadgeEnumerator {

    /**
     * Enumerates the types.
     *
     * @return string[] Returns the types enumeration.
     */
    public static function enumTypes(): array {
        return [
            BadgeInterface::BADGE_TYPE_DANGER,
            BadgeInterface::BADGE_TYPE_DARK,
            BadgeInterface::BADGE_TYPE_INFO,
            BadgeInterface::BADGE_TYPE_LIGHT,
            BadgeInterface::BADGE_TYPE_PRIMARY,
            BadgeInterface::BADGE_TYPE_SECONDARY,
            BadgeInterface::BADGE_TYPE_SUCCESS,
            BadgeInterface::BADGE_TYPE_WARNING,
        ];
    }
}
